<?php
/* Smarty version 4.3.1, created on 2024-06-22 10:14:16
  from '/var/www/html/piwigo/plugins/MenuTags/menubar_menu_tags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676a3f8b6da28_18073382',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '847dddce49afe96631d4b96bde004b2ca5fdcd49' => 
    array (
      0 => '/var/www/html/piwigo/plugins/MenuTags/menubar_menu_tags.tpl',
      1 => 1719042188,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6676a3f8b6da28_18073382 (Smarty_Internal_Template $_smarty_tpl) {
if ("bootstrap_darkroom" == $_smarty_tpl->tpl_vars['themeconf']->value['name']) {?>
<li id="categoriesDropdownMenu" class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo l10n('Tags');?>
</a>
    <div class="dropdown-menu dropdown-menu-right" role="menu">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value->data, 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?>
      <span><a class="dropdown-item tagLevel<?php echo $_smarty_tpl->tpl_vars['tag']->value['level'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['tag']->value['URL'];?>
" title="<?php echo l10n('display photos linked to this tag');?>
"><?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
</a></span>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</li>
<?php } else { ?>
<dt><?php echo l10n('Tags');?>
</dt>
<dd>
	<div id="menuTagCloud">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value->data, 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?>
		<span><a class="tagLevel<?php echo $_smarty_tpl->tpl_vars['tag']->value['level'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['tag']->value['URL'];?>
" title="<?php echo l10n('display photos linked to this tag');?>
"><?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
</a></span>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
</dd>
<?php }
}
}
