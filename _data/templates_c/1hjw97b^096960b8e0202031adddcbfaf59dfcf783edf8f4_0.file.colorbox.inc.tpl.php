<?php
/* Smarty version 4.3.1, created on 2024-07-29 09:35:32
  from '/var/www/html/piwigo/themes/default/template/include/colorbox.inc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66a76264879479_46959551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '096960b8e0202031adddcbfaf59dfcf783edf8f4' => 
    array (
      0 => '/var/www/html/piwigo/themes/default/template/include/colorbox.inc.tpl',
      1 => 1702327276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a76264879479_46959551 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.colorbox','load'=>'footer','require'=>'jquery','path'=>'themes/default/js/plugins/jquery.colorbox.min.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/default/js/plugins/colorbox/style2/colorbox.css"),$_smarty_tpl ) );
}
}
