<?php
/* Smarty version 4.3.1, created on 2024-09-02 20:57:21
  from '/var/www/html/piwigo/plugins/prepaid_credits/attach_file.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66d5c44123eb79_11002533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86e2462f644c507ad2f2b16a3a70decd434275a4' => 
    array (
      0 => '/var/www/html/piwigo/plugins/prepaid_credits/attach_file.tpl',
      1 => 1719042185,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d5c44123eb79_11002533 (Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'block_html_style'))) {
throw new SmartyException('block tag \'html_style\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('html_style', array());
$_block_repeat=true;
echo $_block_plugin5->block_html_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
.radio {
    margin-bottom: 10px;
}
.radio-label {
    margin-left: 5px;
}
#attach {
    display: flex;
}
#option {
    width: fit-content !important;
    margin-left: 5px;
    overflow-y: scroll;
}
#files {
    display: none;
}
#file_link {
    padding: 10px
}
<?php $_block_repeat=false;
echo $_block_plugin5->block_html_style(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin6->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

jQuery(document).ready(function() {
    jQuery('#option').on('change', function() {
        const album_id = jQuery('#option').val();
        var rootUrl = window.location.protocol;
        if(album_id == "-") {
            jQuery('#files').hide();
            jQuery('#file_link').show();

        } else {
            jQuery('#files').show();
            jQuery('#file_link').hide();

        }
        jQuery.ajax({
          url: rootUrl + "ws.php?format=json&method=attach.file.get.file",
          type:"POST",
          data: {
            album_id: album_id
          },
          dataType: "json",
          success:function(data) {
            var albums = data['result'];
            var select = document.getElementById('files');
            select.innerHTML = '';
            if(albums != 'error') {
                albums.forEach(function(album) {
                    var option = document.createElement('option');
                    option.value = album.id + "||" + album.path; 
                    option.textContent = album.file; 

                    select.appendChild(option);
                });
            }

          },
          error:function(XMLHttpRequest, textStatus, errorThrows) {}
        });

    });

    jQuery("input[name=radio]").change(function() {
        checkOptions();
    });

    jQuery('.dropdown').dropdown({
        label: {
            duration: 0,
        },
        debug: true,
        performance: true,
    });
    jQuery('#files').hide();

});
<?php $_block_repeat=false;
echo $_block_plugin6->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<div id="attach">
    <div>
        <div class="radio">
            <input id="radio1" name="radio" value="apply" type="radio" checked>
            <label for="radio1" class="radio-label">Áp dụng</label>
        </div>
        <div class="radio">
            <input id="radio2" name="radio" value="remove" type="radio">
            <label for="radio2" class="radio-label">Gỡ bỏ</label>
        </div>
    </div>
    <div>
        <select id="option" name="albums" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
            <option value="-">Dán link download</option>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['albums']->value, 'album');
$_smarty_tpl->tpl_vars['album']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['album']->value) {
$_smarty_tpl->tpl_vars['album']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['album']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['album']->value['name'];?>
</option>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <input name="file_link" id="file_link" type="text" ><br>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/semantic.css" />
        <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/semantic.js"><?php echo '</script'; ?>
>
        <select class="ui fluid search dropdown" name="file_id" id="files">
        </select>
     
    </div>
</div><?php }
}
