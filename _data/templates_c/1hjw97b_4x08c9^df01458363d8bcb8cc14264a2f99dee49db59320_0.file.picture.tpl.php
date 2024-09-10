<?php
/* Smarty version 4.3.1, created on 2024-09-02 21:03:15
  from '/var/www/html/piwigo/themes/bootstrap_darkroom/template/picture.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66d5c5a346e262_69052719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df01458363d8bcb8cc14264a2f99dee49db59320' => 
    array (
      0 => '/var/www/html/piwigo/themes/bootstrap_darkroom/template/picture.tpl',
      1 => 1713951806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:infos_errors.tpl' => 1,
    'file:picture_info_sidebar.tpl' => 1,
    'file:http_scheme.tpl' => 1,
    'file:_slick_js.tpl' => 1,
    'file:_photoswipe_js.tpl' => 2,
    'file:picture_info_cards.tpl' => 1,
    'file:picture_info_tabs.tpl' => 1,
    'file:picture_info_comments.tpl' => 1,
  ),
),false)) {
function content_66d5c5a346e262_69052719 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Start of picture.tpl -->
<?php if (get_device() != 'desktop') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.mobile-events','path'=>'themes/bootstrap_darkroom/node_modules/jQuery-Touch-Events/src/jquery.mobile-events.min.js','require'=>'jquery','load'=>'footer'),$_smarty_tpl ) );?>

<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['PLUGIN_PICTURE_BEFORE']->value)) {
echo $_smarty_tpl->tpl_vars['PLUGIN_PICTURE_BEFORE']->value;
}?>

<?php echo $_smarty_tpl->tpl_vars['PICTURE_NAV']->value;?>


<div id="main-picture-container" class="container<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->fluid_width) {?>-fluid<?php }?>">
<?php $_smarty_tpl->_subTemplateRender('file:infos_errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <div class="row justify-content-center">
<?php $_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'get_extent' ][ 0 ], array( 'picture_nav_buttons.tpl','picture_nav_buttons' )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
  </div>
<?php if (get_device() != 'desktop') {
$_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>"jquery"));
$_block_repeat=true;
echo $_block_plugin7->block_footer_script(array('require'=>"jquery"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>$('#theImage img').bind('swipeleft swiperight', function (event) {if (event.type == 'swipeleft') {$('#navigationButtons a#navNextPicture i').click();} else if (event.type == 'swiperight') {$('#navigationButtons a#navPrevPicture i').click();} else {return;}});<?php $_block_repeat=false;
echo $_block_plugin7->block_footer_script(array('require'=>"jquery"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

  <div id="theImage" class="row d-block justify-content-center mb-3">
    <?php echo $_smarty_tpl->tpl_vars['ELEMENT_CONTENT']->value;?>

  </div>

<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->picture_info == 'sidebar') {
$_smarty_tpl->_subTemplateRender('file:picture_info_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

  <?php echo $_smarty_tpl->tpl_vars['CREDITS_CONTENT']->value;?>
<div id="theImageComment" class="row justify-content-center mb-3">
<table>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>"common",'load'=>"footer",'require'=>"jquery",'path'=>"admin/themes/default/js/common.js"),$_smarty_tpl ) );?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>"jquery.confirm",'load'=>"footer",'require'=>"jquery",'path'=>"plugins/prepaid_credits/vendor/jquery-confirm.min.js"),$_smarty_tpl ) );?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"plugins/prepaid_credits/vendor/jquery-confirm.min.css"),$_smarty_tpl ) );?>


  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"plugins/prepaid_credits/ppcredits.css"),$_smarty_tpl ) );?>


  <?php $_block_plugin8 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin8, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin8->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
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
  <?php $_block_repeat=false;
echo $_block_plugin8->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
  
  <?php if ($_smarty_tpl->tpl_vars['display']->value) {?>
  <div>
    <tr>
      <td class="label"><?php echo l10n('AI Face Swap');?>
</td>
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
  <?php }?>
  
  <?php echo '<script'; ?>
 type="text/javascript">
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
      document.ppppp_form.item_name.value="Photo \"<?php echo $_smarty_tpl->tpl_vars['current']->value['TITLE'];?>
\", Ref <?php echo $_smarty_tpl->tpl_vars['INFO_FILE']->value;?>
, <?php echo l10n('Size');?>
 :  "+selectedAmount.text;
    }
  <?php echo '</script'; ?>
>
  
  </table><?php if ((isset($_smarty_tpl->tpl_vars['COMMENT_IMG']->value))) {?>
    <div class="text-center col-lg-10 col-md-12 mx-auto">
      <section id="important-info">
        <h5 class="imageComment"><?php echo $_smarty_tpl->tpl_vars['COMMENT_IMG']->value;?>
</h5>
      </section>
    </div>
<?php }?>
  </div>

<?php $_smarty_tpl->_subTemplateRender("file:http_scheme.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ($_smarty_tpl->tpl_vars['theme_config']->value->social_enabled) {?>
  <div id="theImageShareButtons" class="row justify-content-center<?php if (!$_smarty_tpl->tpl_vars['theme_config']->value->slick_enabled) {?> pb-4<?php }?>">
    <section id="share">
<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->social_twitter) {?>
        <a href="http://twitter.com/share?text=<?php echo $_smarty_tpl->tpl_vars['current']->value['TITLE'];?>
&amp;url=<?php echo $_smarty_tpl->tpl_vars['http_scheme']->value;?>
://<?php echo $_SERVER['HTTP_HOST'];
echo $_SERVER['REQUEST_URI'];?>
"
           onclick="window.open(this.href, 'twitter-share', 'width=550,height=235');return false;" title="Share on Twitter"<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->social_buttons) {?> class="btn btn-sm btn-social btn-raised btn-twitter"<?php }?>>
            <i class="fab fa-twitter"></i><?php if ($_smarty_tpl->tpl_vars['theme_config']->value->social_buttons) {?> Twitter<?php }?>
        </a>
<?php }
if ($_smarty_tpl->tpl_vars['theme_config']->value->social_facebook) {?>
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['http_scheme']->value;?>
://<?php echo $_SERVER['HTTP_HOST'];
echo $_SERVER['REQUEST_URI'];?>
"
           onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;" title="Share on Facebook"<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->social_buttons) {?> class="btn btn-sm btn-social btn-raised btn-facebook"<?php }?>>
            <i class="fab fa-facebook"></i><?php if ($_smarty_tpl->tpl_vars['theme_config']->value->social_buttons) {?> Facebook<?php }?>
        </a>
<?php }
if ($_smarty_tpl->tpl_vars['theme_config']->value->social_pinterest) {?>
        <a href="https://www.pinterest.com/pin/create/button/?url=<?php echo $_smarty_tpl->tpl_vars['http_scheme']->value;?>
://<?php echo $_SERVER['HTTP_HOST'];
echo $_SERVER['REQUEST_URI'];
if ((isset($_smarty_tpl->tpl_vars['current']->value['derivatives']['large']))) {?>&media=<?php echo $_smarty_tpl->tpl_vars['http_scheme']->value;?>
://<?php echo $_SERVER['HTTP_HOST'];
echo $_SERVER['REQUEST_URI'];?>
/../<?php echo $_smarty_tpl->tpl_vars['current']->value['derivatives']['large']->get_url();
}?>"
           onclick="window.open(this.href, 'pinterest-share', 'width=490,height=530');return false;" title="Pin on Pinterest"<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->social_buttons) {?> class="btn btn-sm btn-social btn-raised btn-pinterest"<?php }?>>
            <i class="fab fa-pinterest"></i><?php if ($_smarty_tpl->tpl_vars['theme_config']->value->social_buttons) {?> Pinterest<?php }?>
        </a>
<?php }
if ($_smarty_tpl->tpl_vars['theme_config']->value->social_vk) {?>
        <a href="https://vkontakte.ru/share.php?url=<?php echo $_smarty_tpl->tpl_vars['http_scheme']->value;?>
://<?php echo $_SERVER['HTTP_HOST'];
echo $_SERVER['REQUEST_URI'];
if ((isset($_smarty_tpl->tpl_vars['current']->value['derivatives']['large']))) {?>&image=<?php echo $_smarty_tpl->tpl_vars['http_scheme']->value;?>
://<?php echo $_SERVER['HTTP_HOST'];
echo $_SERVER['REQUEST_URI'];?>
/../<?php echo $_smarty_tpl->tpl_vars['current']->value['derivatives']['large']->get_url();
}?>"
           onclick="window.open(this.href, 'vk-share', 'width=490,height=530');return false;" title="Share on VK"<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->social_buttons) {?> class="btn btn-sm btn-social btn-raised btn-vk"<?php }?>>
            <i class="fab fa-vk"></i><?php if ($_smarty_tpl->tpl_vars['theme_config']->value->social_buttons) {?> VK<?php }?>
        </a>
<?php }?>
    </section>
  </div>
<?php }?>
</div>

<div id="carousel-container" class="container">
<?php if (!empty($_smarty_tpl->tpl_vars['thumbnails']->value) && ($_smarty_tpl->tpl_vars['theme_config']->value->slick_enabled || $_smarty_tpl->tpl_vars['theme_config']->value->photoswipe)) {?>
  <div id="theImageCarousel" class="row mx-0<?php if (!$_smarty_tpl->tpl_vars['theme_config']->value->slick_enabled) {?> d-none<?php }?>">
    <div class="col-lg-10 col-md-12 mx-auto">
      <div id="thumbnailCarousel" class="slick-carousel<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->slick_centered) {?> center<?php }?>">
  <?php $_smarty_tpl->_assignInScope('idx', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['thumbnails']->value, 'thumbnail');
$_smarty_tpl->tpl_vars['thumbnail']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['thumbnail']->value) {
$_smarty_tpl->tpl_vars['thumbnail']->do_else = false;
?>
  <?php $_smarty_tpl->_assignInScope('derivative', $_smarty_tpl->tpl_vars['pwg']->value->derivative($_smarty_tpl->tpl_vars['derivative_params_square']->value,$_smarty_tpl->tpl_vars['thumbnail']->value['src_image']));
if (!$_smarty_tpl->tpl_vars['theme_config']->value->slick_infinite) {?>
    <?php $_smarty_tpl->_assignInScope('derivative_medium', $_smarty_tpl->tpl_vars['pwg']->value->derivative($_smarty_tpl->tpl_vars['derivative_params_medium']->value,$_smarty_tpl->tpl_vars['thumbnail']->value['src_image']));?>
    <?php $_smarty_tpl->_assignInScope('derivative_large', $_smarty_tpl->tpl_vars['pwg']->value->derivative($_smarty_tpl->tpl_vars['derivative_params_large']->value,$_smarty_tpl->tpl_vars['thumbnail']->value['src_image']));?>
    <?php $_smarty_tpl->_assignInScope('derivative_xxlarge', $_smarty_tpl->tpl_vars['pwg']->value->derivative($_smarty_tpl->tpl_vars['derivative_params_xxlarge']->value,$_smarty_tpl->tpl_vars['thumbnail']->value['src_image']));
}
if (!$_smarty_tpl->tpl_vars['derivative']->value->is_cached()) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.ajaxmanager','path'=>'themes/default/js/plugins/jquery.ajaxmanager.js','load'=>'footer'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'thumbnails.loader','path'=>'themes/default/js/thumbnails.loader.js','require'=>'jquery.ajaxmanager','load'=>'footer'),$_smarty_tpl ) );?>

<?php }
if ($_smarty_tpl->tpl_vars['theme_config']->value->photoswipe && !$_smarty_tpl->tpl_vars['theme_config']->value->slick_infinite) {?>
        <div class="text-center<?php if ($_smarty_tpl->tpl_vars['thumbnail']->value['id'] == $_smarty_tpl->tpl_vars['current']->value['id'] && !$_smarty_tpl->tpl_vars['theme_config']->value->slick_infinite) {?> thumbnail-active<?php }?>">
          <a <?php if ($_smarty_tpl->tpl_vars['thumbnail']->value['id'] == $_smarty_tpl->tpl_vars['current']->value['id']) {?> id="thumbnail-active"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['URL'];?>
" data-index="<?php echo $_smarty_tpl->tpl_vars['idx']->value;?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['NAME'];?>
" data-description="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['DESCRIPTION'];?>
" <?php if (!$_smarty_tpl->tpl_vars['theme_config']->value->slick_infinite) {?>data-src-xlarge="<?php echo $_smarty_tpl->tpl_vars['derivative_xxlarge']->value->get_url();?>
" data-size-xlarge="<?php echo $_smarty_tpl->tpl_vars['derivative_xxlarge']->value->get_size_hr();?>
" data-src-large="<?php echo $_smarty_tpl->tpl_vars['derivative_large']->value->get_url();?>
" data-size-large="<?php echo $_smarty_tpl->tpl_vars['derivative_large']->value->get_size_hr();?>
" data-src-medium="<?php echo $_smarty_tpl->tpl_vars['derivative_medium']->value->get_url();?>
" data-size-medium="<?php echo $_smarty_tpl->tpl_vars['derivative_medium']->value->get_size_hr();?>
"<?php if (preg_match("/(mp4|m4v)"."$"."/",$_smarty_tpl->tpl_vars['thumbnail']->value['PATH'])) {?> data-src-original="<?php echo $_smarty_tpl->tpl_vars['U_HOME']->value;
echo $_smarty_tpl->tpl_vars['thumbnail']->value['PATH'];?>
" data-size-original="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['SIZE'];?>
" data-video="true"<?php }
}?>>
<?php } else { ?>
        <div class="text-center<?php if ($_smarty_tpl->tpl_vars['thumbnail']->value['id'] == $_smarty_tpl->tpl_vars['current']->value['id']) {?> thumbnail-active<?php }?>">
          <a href="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['URL'];?>
">
<?php }?>
            <img <?php if ($_smarty_tpl->tpl_vars['derivative']->value->is_cached()) {?>data-lazy="<?php echo $_smarty_tpl->tpl_vars['derivative']->value->get_url();?>
"<?php } else { ?>data-lazy="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;
echo $_smarty_tpl->tpl_vars['themeconf']->value['icon_dir'];?>
/img_small.png" data-src="<?php echo $_smarty_tpl->tpl_vars['derivative']->value->get_url();?>
"<?php }?> alt="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['TN_ALT'];?>
" title="<?php if ((isset($_smarty_tpl->tpl_vars['thumbnail']->value['TN_TITLE']))) {
echo $_smarty_tpl->tpl_vars['thumbnail']->value['TN_TITLE'];
}?>" class="img-fluid <?php if ((isset($_smarty_tpl->tpl_vars['thumbnail']->value['path_ext']))) {?>path-ext-<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['path_ext'];
}?> <?php if ((isset($_smarty_tpl->tpl_vars['thumbnail']->value['file_ext']))) {?>file-ext-<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['file_ext'];
}?>">
          </a>
        </div>
  <?php $_smarty_tpl->_assignInScope('idx', $_smarty_tpl->tpl_vars['idx']->value+1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
    </div>
  </div>

<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->photoswipe && $_smarty_tpl->tpl_vars['theme_config']->value->slick_infinite) {?>
  <div id="photoSwipeData" class="d-none">
    <?php $_smarty_tpl->_assignInScope('idx', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['thumbnails']->value, 'thumbnail');
$_smarty_tpl->tpl_vars['thumbnail']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['thumbnail']->value) {
$_smarty_tpl->tpl_vars['thumbnail']->do_else = false;
?>
    <?php $_smarty_tpl->_assignInScope('derivative_medium', $_smarty_tpl->tpl_vars['pwg']->value->derivative($_smarty_tpl->tpl_vars['derivative_params_medium']->value,$_smarty_tpl->tpl_vars['thumbnail']->value['src_image']));?>
    <?php $_smarty_tpl->_assignInScope('derivative_large', $_smarty_tpl->tpl_vars['pwg']->value->derivative($_smarty_tpl->tpl_vars['derivative_params_large']->value,$_smarty_tpl->tpl_vars['thumbnail']->value['src_image']));?>
    <?php $_smarty_tpl->_assignInScope('derivative_xxlarge', $_smarty_tpl->tpl_vars['pwg']->value->derivative($_smarty_tpl->tpl_vars['derivative_params_xxlarge']->value,$_smarty_tpl->tpl_vars['thumbnail']->value['src_image']));?>
    <a<?php if ($_smarty_tpl->tpl_vars['thumbnail']->value['id'] == $_smarty_tpl->tpl_vars['current']->value['id']) {?> id="thumbnail-active"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['URL'];?>
" data-index="<?php echo $_smarty_tpl->tpl_vars['idx']->value;?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['NAME'];?>
" data-description="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['DESCRIPTION'];?>
" data-src-xlarge="<?php echo $_smarty_tpl->tpl_vars['derivative_xxlarge']->value->get_url();?>
" data-size-xlarge="<?php echo $_smarty_tpl->tpl_vars['derivative_xxlarge']->value->get_size_hr();?>
" data-src-large="<?php echo $_smarty_tpl->tpl_vars['derivative_large']->value->get_url();?>
" data-size-large="<?php echo $_smarty_tpl->tpl_vars['derivative_large']->value->get_size_hr();?>
" data-src-medium="<?php echo $_smarty_tpl->tpl_vars['derivative_medium']->value->get_url();?>
" data-size-medium="<?php echo $_smarty_tpl->tpl_vars['derivative_medium']->value->get_size_hr();?>
"<?php if (preg_match("/(mp4|m4v)"."$"."/",$_smarty_tpl->tpl_vars['thumbnail']->value['PATH'])) {?> data-src-original="<?php echo $_smarty_tpl->tpl_vars['U_HOME']->value;
echo $_smarty_tpl->tpl_vars['thumbnail']->value['PATH'];?>
" data-size-original="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['SIZE'];?>
" data-video="true"<?php }?>></a>
<?php $_smarty_tpl->_assignInScope('idx', $_smarty_tpl->tpl_vars['idx']->value+1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
<?php }
if ($_smarty_tpl->tpl_vars['theme_config']->value->slick_enabled && sizeOf($_smarty_tpl->tpl_vars['thumbnails']->value) > 1) {
$_smarty_tpl->_subTemplateRender("file:_slick_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
if ($_smarty_tpl->tpl_vars['theme_config']->value->photoswipe && !$_smarty_tpl->tpl_vars['theme_config']->value->slick_infinite) {
$_smarty_tpl->_subTemplateRender("file:_photoswipe_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('selector'=>"#thumbnailCarousel"), 0, false);
}
if ($_smarty_tpl->tpl_vars['theme_config']->value->photoswipe && $_smarty_tpl->tpl_vars['theme_config']->value->slick_infinite) {
$_smarty_tpl->_subTemplateRender("file:_photoswipe_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('selector'=>"#photoSwipeData"), 0, true);
}
}?>
</div>

<div id="info-container" class="container<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->fluid_width) {?>-fluid<?php }?>">
  <div id="theImageInfos" class="row justify-content-center">
<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->picture_info == 'cards') {
$_smarty_tpl->_subTemplateRender('file:picture_info_cards.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['theme_config']->value->picture_info == 'tabs') {
$_smarty_tpl->_subTemplateRender('file:picture_info_tabs.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['theme_config']->value->picture_info == 'sidebar' || $_smarty_tpl->tpl_vars['theme_config']->value->picture_info == 'disabled') {?>
    <div class="col-lg-8 col-md-10 col-12 mx-auto">
<?php $_smarty_tpl->_subTemplateRender('file:picture_info_comments.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
<?php }?>
  </div>

<?php if (!empty($_smarty_tpl->tpl_vars['PLUGIN_PICTURE_AFTER']->value)) {
echo $_smarty_tpl->tpl_vars['PLUGIN_PICTURE_AFTER']->value;
}?>

</div>
<?php }
}
