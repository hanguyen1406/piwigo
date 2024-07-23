<?php

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

global $prefixeTable;

defined('PPPPP_ID') or define('PPPPP_ID', basename(dirname(__FILE__)));
define('PPPPP_PATH' , PHPWG_PLUGINS_PATH . basename(dirname(__FILE__)) . '/');
define('PPPPP_SIZE_TABLE', $prefixeTable.'ppppp_size');
define('PPPPP_VERSION', '12.a');

add_event_handler('loc_end_picture', 'ppsc_picture');
function ppsc_picture()
{
  global $template, $picture, $user;
  $image_id = $picture['current']['id'];
  $query = "select * from piwigo_image_plugin where image_id=".$image_id;
  $result = pwg_db_num_rows(pwg_query($query));
  $template->assign('display', $result > 0 ? true : false);

  $result = pwg_query("SELECT ppcredits FROM piwigo_user_infos WHERE user_id=".$user['id']);
  $row = pwg_db_fetch_assoc($result);
  $creditLeft = $row['ppcredits'];  

  $result = pwg_query("SELECT price FROM piwigo_ppcredits_option_price WHERE image_id=".$image_id." and method='ppcredits.faceswap.swap'");
  $row = pwg_db_fetch_assoc($result);
  if($row){
    $price = $row['price'];  
    $template->assign('cost', true);
    $template->assign('price', $price);
  }else{
    $template->assign('cost', false);

  }
}

function ppppp_append_form($tpl_source)
{
  global $theme, $picture;

  $pattern = '#<.*\"infoTable\".*>#';

  $replacement = '
  {combine_script id="common" load="footer" require="jquery" path="admin/themes/default/js/common.js"}
  {combine_script id="jquery.confirm" load="footer" require="jquery" path="plugins/prepaid_credits/vendor/jquery-confirm.min.js"}
  {combine_css path="plugins/prepaid_credits/vendor/jquery-confirm.min.css"}

  {combine_css path="plugins/prepaid_credits/ppcredits.css"}

  {footer_script}
  jQuery("#ok").click(function(){
    if(img2){
      if(document.querySelector("#ok b")){
        var $this = jQuery(this);
        var $loading = $this.closest("li").find(".loading");
        swapImg();
      }
    }else{
      messageOk("AI Faceswap", "Chưa chọn ảnh!");
    }

    return false;
  });
  {/footer_script}
  
  {if $display}
  <div>
    <tr>
      <td class="label">{\'AI Face Swap\'|@translate}</td>
      <td>
          <a onclick="swapface()"><b>CLICK ĐỂ GHÉP MẶT </b></a>
      <style>
        #swap{
          width: 60%;
          position: fixed;
          top: 30%;
          z-index: 10;
          justify-content: center;
          background-color: #e5e5e5;
          border-radius: 15px;
          align-items: center;
          padding: 10px;
          box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
          max-width: 500px;
        }
        .img{
          width: 200px;
          height: 200px;
          border-radius: 5px;
          border-style: dashed;
          border-width: 2px;
          border-color: gray;
        }
        td{
        // height: 40px;
          width: fit-content;
        }
        
        #parent{
          
          height: 0px;
          display: none;
          justify-content: center;
          width: 100%;
        }
        b{
          cursor: pointer;
        }
        .imgC b{
          display: block;
          width: 200px;
          text-align: center;
          color: black;
        }
        .imgC{
          display: inline;
          width: 201px;
        }
        #ok{
          display:flex;
          width: 70%;
          background-color: #1f212d;
          border-radius: 10px;
          height: 55px;
          justify-content: center;
          align-items: center; 
        }
        #ai-loading{
          width: 40px;
          height: 40px;
          position: relative;
          top: -2px;
        }
        #exit{
          position: absolute;
          top: 0px;
          right: 10px;
          color: black;
          cursor: pointer;
        }
      </style>
      
      </td>

    </tr>
    <div id="parent">
      <div id="swap" class="row d-flex">
        <a id="exit">X</a>
        <div class="imgC">
          <img class="img" id="imgLeft"/><br><b onclick="chonanh()">CHỌN ẢNH CỦA BẠN</b>
          <input type="file" id="fileInput" style="display: none;">
        </div>
        <div class="imgC">
          <img class="img" id="imgRight"/><br><b onclick="downloadImg()">SWAP(Không watermark)</b>
        </div>
        <br>
        <div id="ok">
          <b>SWAP</b>
        </div>
      </div> 
    </div>
  </div>	
  {/if}
  {literal}
  <script type="text/javascript">
    var reader = new FileReader();
    var fileInput = document.getElementById("fileInput");
    var img1, img2;
    function chonanh(){
      //console.log(fileInput);
      fileInput.click();
    
    }

    async function swapApi(){
      document.querySelector("#ok").innerHTML = "VUI LÒNG CHỜ<img id=ai-loading src=loading.gif />";
      // console.log(img1, img2);
      const res = await fetch(
      "https://hanguyen146-faceswap.hf.space/api/predict",
      {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({
          data: [img1, img2]
        })
      })

      const data = await res.json();
      console.log(data);
      document.querySelector("#imgRight").src = data["data"][0];
      document.querySelector("#ok").innerHTML = "<b>SWAP</b>";
    }
    function messageOk(title, ms){
      jQuery.confirm({
        theme: "modern",
        useBootstrap: false,
        title: title,
        content: ms,
        buttons: {
          confirm: {
            text: "OK",
            btnClass: "btn-blue"
          }
        }
      });
    }
    function swapImg() {
      //call api
      jQuery.confirm({
        theme: "modern",
        useBootstrap: false,
        title: "AI Faceswap",
        content: "Chắc chắn swap ảnh này",
        buttons: {
          confirm: {
            text: "Xác nhận",
            btnClass: "btn-blue",
            action: function() {
              jQuery.ajax({
                url: "ws.php?format=json&method=ppcredits.faceswap.swap",
                type: "POST",
                data: {
                    image_id: jQuery("#ppcreditsBuyPhoto").attr("data-image_id"),
                },
                success: async function (response) {
                  var res = JSON.parse(response)["result"];
                  if (res == "0") {
                    messageOk("AI Faceswap", "Không đủ credit, hãy tương tác thêm nhé!");
                  } else {
                    messageOk("AI Faceswap", "Ảnh này cần " + res + " credits để hoán đổi");
                    swapApi();
                  }
                },
                error: function (xhr, status, error) {
                    console.error("Error:", error);
                },
              });
            }
          },
          cancel: {
            text:"Thoát",
          }
        }
      });
      
    }
    function toDataURL(src, callback){
      var image = new Image();
      image.crossOrigin = "Anonymous";
      image.onload = function(){
         var canvas = document.createElement("canvas");
         var context = canvas.getContext("2d");
         canvas.height = this.naturalHeight;
         canvas.width = this.naturalWidth;
         context.drawImage(this, 0, 0);
         var dataURL = canvas.toDataURL("image/jpeg");
         callback(dataURL);
      };
      image.src = src;
    }
    function downloadImg(){
      if(img2){
        jQuery.confirm({
          theme: "modern",
          useBootstrap: false,
          title: "AI Faceswap",
          content: "Chắc chắn swap không watermark ảnh này",
          buttons: {
            confirm: {
              text: "Xác nhận",
              btnClass: "btn-blue",
              action: function() {
                jQuery.ajax({
                  url: "ws.php?format=json&method=ppcredits.faceswap.download",
                  type: "POST",
                  data: {
                      image_id: jQuery("#ppcreditsBuyPhoto").attr("data-image_id"),
                  },
                  success: async function (response) {
                    var res = JSON.parse(response)["result"]["path"];
                    var price = JSON.parse(response)["result"]["price"];
                    if (res == "0") {
                      messageOk("AI Faceswap", "Không đủ credit, hãy tương tác thêm nhé!");
                    } else {
                      jQuery.confirm({
                        theme: "modern",
                        useBootstrap: false,
                        title: "AI Faceswap",
                        content: "Ảnh này cần " + price + " credits để hoán đổi (không watermark!)",
                        buttons: {
                          confirm: {
                            text: "Xác nhận",
                            btnClass: "btn-blue",
                            action: function() {
                              toDataURL(res, function(data){
                                img1 = data;
                                swapApi();
                              })
                            }
                          }
                        }
                      });
                    }
                  },
                  error: function (xhr, status, error) {
                      console.error("Error:", error);
                  },
                });  
              }
            },
            cancel: {
              text:"Thoát",
            }
          }
        });
      }else{
        messageOk("AI Faceswap", "Chưa chọn ảnh!");
      }
      
    }
    fileInput.addEventListener("change", async function() {
      // File selected by the user
      var selectedFile = fileInput.files[0];
      
      if (selectedFile) {
        var reader = new FileReader();
        reader.onload = async function(event) {
          img2 = event.target.result;
          document.querySelector("#imgLeft").src = img2;

          var image = document.createElement("img");
          image.src = document.querySelector("#theMainImage").getAttribute("src");;
          var canvas = document.createElement("canvas");
          canvas.width = image.naturalWidth;
          canvas.height = image.naturalHeight;
          var ctx = canvas.getContext("2d");  
          ctx.drawImage(image, 0, 0);
          img1 = canvas.toDataURL();


        };

        reader.readAsDataURL(selectedFile);
      }
    });

    function swapface(){
    // alert("hello");
      var imgSrc = document.querySelector("#theMainImage").getAttribute("src");
      var currentIPAddress = window.location.host;
      var imgLink = imgSrc;
      document.querySelector("#parent").style.display = "flex";
      
      var image = document.querySelector("#theMainImage");
      var canvas = document.createElement("canvas");
      canvas.width = image.naturalWidth;
      canvas.height = image.naturalHeight;
      var ctx = canvas.getContext("2d");  
      ctx.drawImage(image, 0, 0);
      img1 = canvas.toDataURL();

    }
    document.querySelector("#exit").addEventListener("click", function() {
      document.querySelector("#parent").style.display = "none";
    });
    
    function pppppValid(){
      var amount=document.ppppp_form.amount;
      var selectedAmount=amount[amount.selectedIndex];
      document.ppppp_form.item_name.value="Photo \"{/literal}{$current.TITLE}\", Ref {$INFO_FILE}, {\'Size\'|@translate} : {literal} "+selectedAmount.text;
    }
  </script>
  {/literal}
  ';
  

  if (strpos($theme, 'stripped') === 0)
  {
    $pattern = '#</div>\s*<!--\s*theImage\s*-->#';
    $replacement = '
{combine_css path="plugins/PayPalShoppingCart/stripped.css"}
<table id="paypalCart">'.$replacement.'</table>';
    $replacement = $replacement.'$0';
  }
  else
  {
    if(!preg_match($pattern,$tpl_source))
    {
      $pattern='#{if isset\(\$COMMENT_IMG\)}#';
      $replacement='<table>'.$replacement.'</table>';
      $replacement=$replacement.'$0';
    }
    else
    {
      $replacement='$0'.$replacement;
    }
  }
  
  return preg_replace($pattern, $replacement, $tpl_source,1);
}

function ppppp_picture_handler()
{
  global $template, $conf, $page;

  if (!ppppp_is_paypal_active())
  {
    return;
  }
 
  $template->set_prefilter('picture', 'ppppp_append_form');
  load_language('plugin.lang', PPPPP_PATH);
  
  $query='SELECT * FROM '.PPPPP_SIZE_TABLE.' '.@$conf['PayPalShoppingCart_sizes_order_by'].';';
  $result = pwg_query($query);
  while($row = pwg_db_fetch_assoc($result))
  {
    $template->append('ppppp_array_size',$row);
  }

  $template->assign(
    array(
      'ppppp_fixed_shipping' => $conf['PayPalShoppingCart']['fixed_shipping'],
      'ppppp_currency' => $conf['PayPalShoppingCart']['currency'],
      'ppppp_e_mail' => get_webmaster_mail_address(),
     )
    );
}

add_event_handler('loc_begin_picture', 'ppppp_picture_handler');

function ppppp_append_js($tpl_source){
 load_language('plugin.lang', PPPPP_PATH);
 if(strstr($tpl_source,"{'Menu'|@translate}")==false)
  return $tpl_source;
 $pattern = '#{/foreach}#';  
 $replacement = '{/foreach}
 <li><a href="" title="'.l10n('View my PayPal Shopping Cart').'" onclick="document.forms[\'ppppp_form_view_cart\'].submit()">'.l10n('View Shopping Cart').'</a></li>
 <form name="ppppp_form_view_cart" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
     <input type="hidden" name="cmd" value="_cart">
     <input type="hidden" name="business" value="{$ppppp_e_mail}">
     <input type="hidden" name="display" value="1">
     <input type="hidden" name="no_shipping" value="2">
  </form>
  ';
 return preg_replace($pattern, $replacement, $tpl_source); 
 }

function ppppp_index_handler(){
 global $template;
 $template->set_prefilter('menubar', 'ppppp_append_js');
 $template->assign('ppppp_e_mail',get_webmaster_mail_address()); 
}

add_event_handler('loc_begin_index', 'ppppp_index_handler');

add_event_handler('init', 'ppppp_init');
/**
 * plugin initialization
 *   - unserialize configuration
 *   - load language
 */
function ppppp_init()
{
  global $conf;
  
  // load plugin language file
  load_language('plugin.lang', PPPPP_PATH);
  
  // prepare plugin configuration
  $conf['PayPalShoppingCart'] = safe_unserialize($conf['PayPalShoppingCart']);
}

// add_event_handler('loc_end_index_thumbnails', 'ppppp_loc_end_index_thumbnails');
add_event_handler('loc_begin_index', 'ppppp_lightbox_exception');
function ppppp_lightbox_exception()
{
  if (!ppppp_is_paypal_active())
  {
    return;
  }
  
  remove_event_handler('loc_end_index_thumbnails', 'lightbox_plugin', 40);
}

function ppppp_is_paypal_active()
{
  global $conf, $page;

  if ($conf['PayPalShoppingCart']['apply_to_albums'] == 'list')
  {
    if (!isset($page['category']))
    {
      return false;
    }

    $query = '
SELECT
    paypal_active
  FROM '.CATEGORIES_TABLE.'
  WHERE id = '.$page['category']['id'].'
;';
    list($paypal_active) = pwg_db_fetch_row(pwg_query($query));

    if ('false' == $paypal_active)
    {
      return false ;
    }
  }

  return true;
}

// +-----------------------------------------------------------------------+
// | Batch Manager                                                         |
// +-----------------------------------------------------------------------+

add_event_handler('loc_begin_element_set_global', 'ppsc_element_set_global_add_action');
function ppsc_element_set_global_add_action()
{
  global $template, $page, $conf;
  $template->set_filename('ppsc', realpath(PPPPP_PATH.'element_set_global_action.tpl'));
  
  $result = pwg_query("select price from piwigo_ppcredits_option where method='ppcredits.faceswap.swap'");
  $row = pwg_db_fetch_assoc($result);
  $swap_price = $row['price'];  

  $result = pwg_query("select price from piwigo_ppcredits_option where method='ppcredits.faceswap.download'");
  $row = pwg_db_fetch_assoc($result);
  $dl_price = $row['price'];  

  $template->assign(
    array(
      'swap' => $swap_price,
      'download' => $dl_price
    )
  );
  $template->append(
    'element_set_global_plugins_actions',
    array(
      'ID' => 'ppsc',
      'NAME' => 'AI FaceSwap',
      'CONTENT' => $template->parse('ppsc', true),
      )
    );
  //add tag faceswap
  $query='select id from piwigo_tags where name = "faceswap";';
  $result = pwg_query($query);
  if(pwg_db_num_rows($result) == 0)
  {
    pwg_query('insert into piwigo_tags (piwigo_tags.name, piwigo_tags.url_name) values ("faceswap", "faceswap");');
  }

}

//add default for Download and Faceswap price to table piwigo_ppcredits_option
$query='SHOW TABLES LIKE "piwigo_ppcredits_option";';
$result = pwg_query($query);
if(pwg_db_num_rows($result) == 0)
{
  print("Chưa cài prepaid credits plugin(Nếu đã cài thì thử reactive).");
}else{
  $query='insert ignore into piwigo_ppcredits_option(name, method, price) 
  values ("Faceswap(download)", "ppcredits.faceswap.download", 10)
  , ("Faceswap(swap)", "ppcredits.faceswap.swap", 8)';
  pwg_query($query);
}

add_event_handler('element_set_global_action', 'ppsc_batch_global_submit', EVENT_HANDLER_PRIORITY_NEUTRAL, 2);
function ppsc_batch_global_submit($action, $collection)
{
  global $page;
  
  if ($action == 'ppsc')
  {
    $datas = array();
    $query = 'select id from piwigo_tags where name = "faceswap"';
    $faceswap = pwg_db_fetch_assoc(pwg_query($query));
    if($_POST['radio'] == "apply")
    {
      foreach ($collection as $image_id)
      {
        try {
          
          $query = 'insert into piwigo_image_plugin values ('.$image_id.', "PayPalShoppingCart")';
          pwg_query($query);
          $query = 'insert ignore into piwigo_image_tag values ('.$image_id.', '.$faceswap['id'].')';
          pwg_query($query);

          //update new price for image option
          if($_POST['swap-price'] && $_POST['swap-dl-price']){
            $query = 'INSERT INTO piwigo_ppcredits_option_price
            VALUES ('.$image_id.', "ppcredits.faceswap.swap", '.$_POST['swap-price'].')
            ON DUPLICATE KEY UPDATE price = '.$_POST['swap-price'].';';
            pwg_query($query);

            $query = 'INSERT INTO piwigo_ppcredits_option_price
            VALUES ('.$image_id.', "ppcredits.faceswap.download", '.$_POST['swap-dl-price'].')
            ON DUPLICATE KEY UPDATE price = '.$_POST['swap-dl-price'].';';
            pwg_query($query);
          } else {
            $query = "delete from piwigo_ppcredits_option_price where image_id=".$image_id;
            pwg_query($query);
          }


        } catch (\Throwable $th) {
          
        }
      }
      $page['infos'][] = l10n('Áp dụng cho các ảnh thành công');
    }else
    {
      foreach ($collection as $image_id)
      {
        try {
          $query = 'delete from piwigo_image_plugin where plugin_id = "PayPalShoppingCart" and image_id = '.$image_id;
          pwg_query($query);

          $query = 'delete from piwigo_image_tag where tag_id = '.$faceswap['id'].' and image_id = '.$image_id;
          pwg_query($query);  

          $query = 'delete from piwigo_ppcredits_option_price where image_id='.$image_id;
          pwg_query($query);  

        } catch (\Throwable $th) {
        }
      }
      $page['infos'][] = l10n('Gỡ bỏ cho các ảnh thành công');
    }
  }
}

?>