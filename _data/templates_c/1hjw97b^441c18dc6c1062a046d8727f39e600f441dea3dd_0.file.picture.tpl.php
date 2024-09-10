<?php
/* Smarty version 4.3.1, created on 2024-09-02 21:03:15
  from '/var/www/html/piwigo/plugins/prepaid_credits/picture.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66d5c5a34228f0_80272922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '441c18dc6c1062a046d8727f39e600f441dea3dd' => 
    array (
      0 => '/var/www/html/piwigo/plugins/prepaid_credits/picture.tpl',
      1 => 1719042184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d5c5a34228f0_80272922 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'common','load'=>'footer','require'=>'jquery','path'=>'admin/themes/default/js/common.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.confirm','load'=>'footer','require'=>'jquery','path'=>'plugins/prepaid_credits/vendor/jquery-confirm.min.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"plugins/prepaid_credits/vendor/jquery-confirm.min.css"),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"plugins/prepaid_credits/ppcredits.css"),$_smarty_tpl ) );?>


<?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin4->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
jQuery("#ppcreditsBuyPhoto a.buy").click(function(){
  var $this = jQuery(this);
  var $loading = $this.closest('li').find('.loading');

  var cost = jQuery(this).data("cost");
  var size = jQuery(this).data("size");

  if (jQuery("#ppcreditsBuyPhoto").data("credits_left") >= cost) {
    jQuery.confirm({
      theme: 'modern',
      useBootstrap: false,
      title: "<?php echo l10n('Buy this photo');?>
",
      content: sprintf("<?php echo l10n('Do you want to use %d credits to download this photo?');?>
", cost),
      buttons: {
        confirm: {
          text: "<?php echo l10n('yes, buy');?>
",
          btnClass: 'btn-blue',
          action: function() {
            jQuery.ajax({
              url: "ws.php?format=json&method=ppcredits.photo.buy",
              type:"POST",
              data: {
                image_id : jQuery("#ppcreditsBuyPhoto").data("image_id"),
                size : size
              },
              beforeSend: function() {
                $loading.show();
              },
              success:function(data) {
                $loading.hide();

                var data = jQuery.parseJSON(data);
                if (data.stat == 'ok') {
                  jQuery.alert({
                    theme: 'modern',
                    useBootstrap: false,
                    title: "<?php echo l10n('Thank you!');?>
",
                    content: sprintf("<?php echo l10n('%d credits taken from your account.');?>
", Number(data.result.nb_credits))+' <a class="prepaid-credits-download" href="'+data.result.download_url+'">'+"<?php echo l10n('Download now');?>
"+'</a>',
                  });

                  $this.closest('li').html('<a class="download" href="'+data.result.download_url+'">'+data.result.size_label+'</a>');
                }
                else {
                  jQuery.alert("#1 <?php echo l10n('error while buying photo');?>
");
                }
              },
              error:function(XMLHttpRequest, textStatus, errorThrows) {
                jQuery.alert("#2 <?php echo l10n('error while buying photo');?>
");
              }
            });
          }
        },
        cancel: {
          text:"<?php echo l10n('no, cancel');?>
",
        }
      }
    });
  }
  else {
    jQuery.confirm({
      theme: 'modern',
      useBootstrap: false,
      title: "<?php echo l10n('Khong du credits!');?>
",
      content: '<?php echo strtr((string)$_smarty_tpl->tpl_vars['MISSING_CREDITS_SENTENCE']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
',
    });
  }

  return false;
});
<?php $_block_repeat=false;
echo $_block_plugin4->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<div id="ppcreditsBuyPhoto" data-credits_left="<?php echo $_smarty_tpl->tpl_vars['CREDITS_LEFT']->value;?>
" data-image_id="<?php echo $_smarty_tpl->tpl_vars['current']->value['id'];?>
">
<?php echo l10n('Download this file');?>

<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ppcredits_sizes']->value, 'size');
$_smarty_tpl->tpl_vars['size']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['size']->value) {
$_smarty_tpl->tpl_vars['size']->do_else = false;
?>
  <li>
<?php if ((isset($_smarty_tpl->tpl_vars['size']->value['download_url']))) {?>
    <a class="download" href="<?php echo $_smarty_tpl->tpl_vars['size']->value['download_url'];?>
"><?php echo l10n($_smarty_tpl->tpl_vars['size']->value['type']);?>
</a>
<?php } else { ?>
    <a class="buy" href="#" data-cost="<?php echo $_smarty_tpl->tpl_vars['size']->value['nb_credits'];?>
" data-size="<?php echo $_smarty_tpl->tpl_vars['size']->value['type'];?>
"><?php echo $_smarty_tpl->tpl_vars['size']->value['label'];?>
</a> <img class="loading" src="themes/default/images/ajax-loader-small.gif" style="display:none">
<?php }?>
  </li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if ($_smarty_tpl->tpl_vars['FILE_LINK']->value != '') {?>
  <a href="<?php echo $_smarty_tpl->tpl_vars['FILE_LINK']->value;?>
" target="_blank">Tải xuống file đính kèm</a>
<?php }?>

</ul>
</div>
<?php }
}
