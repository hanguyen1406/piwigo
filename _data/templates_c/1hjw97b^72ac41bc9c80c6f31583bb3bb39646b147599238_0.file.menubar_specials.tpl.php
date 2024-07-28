<?php
/* Smarty version 4.3.1, created on 2024-06-22 14:53:10
  from '/var/www/html/piwigo/themes/bootstrap_darkroom/template/menubar_specials.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676e5567f2545_24078440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72ac41bc9c80c6f31583bb3bb39646b147599238' => 
    array (
      0 => '/var/www/html/piwigo/themes/bootstrap_darkroom/template/menubar_specials.tpl',
      1 => 1713951806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6676e5567f2545_24078440 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blocks']->value['mbSpecials']->data, 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?>
		<a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['link']->value['URL'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['link']->value['TITLE'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['link']->value['REL']))) {?> <?php echo $_smarty_tpl->tpl_vars['link']->value['REL'];
}?>><?php echo $_smarty_tpl->tpl_vars['link']->value['NAME'];?>
</a>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
