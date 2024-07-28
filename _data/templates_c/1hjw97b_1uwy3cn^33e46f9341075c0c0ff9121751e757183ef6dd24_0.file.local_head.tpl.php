<?php
/* Smarty version 4.3.1, created on 2024-06-22 14:53:10
  from '/var/www/html/piwigo/themes/default/local_head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676e5568885b6_89954502',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33e46f9341075c0c0ff9121751e757183ef6dd24' => 
    array (
      0 => '/var/www/html/piwigo/themes/default/local_head.tpl',
      1 => 1702327276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6676e5568885b6_89954502 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['load_css']->value) {?> 
	<!--[if lt IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
themes/default/fix-ie5-ie6.css">
	<![endif]-->
	<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
themes/default/fix-ie7.css">
	<![endif]-->
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/default/print.css",'order'=>-10),$_smarty_tpl ) );?>

<?php }
}
}
