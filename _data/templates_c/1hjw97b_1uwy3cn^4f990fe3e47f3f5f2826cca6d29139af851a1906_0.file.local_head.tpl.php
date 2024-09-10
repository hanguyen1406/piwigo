<?php
/* Smarty version 4.3.1, created on 2024-09-02 20:44:52
  from '/var/www/html/piwigo/themes/default/local_head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66d5c15458b379_03974251',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f990fe3e47f3f5f2826cca6d29139af851a1906' => 
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
function content_66d5c15458b379_03974251 (Smarty_Internal_Template $_smarty_tpl) {
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
