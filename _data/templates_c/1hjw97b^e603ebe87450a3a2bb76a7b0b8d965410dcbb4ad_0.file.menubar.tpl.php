<?php
/* Smarty version 4.3.1, created on 2024-06-22 10:14:16
  from '/var/www/html/piwigo/themes/bootstrap_darkroom/template/menubar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676a3f8b66b44_97085331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e603ebe87450a3a2bb76a7b0b8d965410dcbb4ad' => 
    array (
      0 => '/var/www/html/piwigo/themes/bootstrap_darkroom/template/menubar.tpl',
      1 => 1713951806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6676a3f8b66b44_97085331 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Start of menubar.tpl -->
<ul class="navbar-nav<?php if (!$_smarty_tpl->tpl_vars['theme_config']->value->quicksearch_navbar) {?> ml-auto<?php }?>">
<?php $_smarty_tpl->_assignInScope('discover_menu_exists', false);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blocks']->value, 'block', false, 'id');
$_smarty_tpl->tpl_vars['block']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->do_else = false;
if (!empty($_smarty_tpl->tpl_vars['block']->value->template)) {
if ($_smarty_tpl->tpl_vars['id']->value != "mbMenu" && $_smarty_tpl->tpl_vars['id']->value != "mbSpecials" && $_smarty_tpl->tpl_vars['id']->value != "mbIdentification") {
$_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'get_extent' ][ 0 ], array( $_smarty_tpl->tpl_vars['block']->value->template,$_smarty_tpl->tpl_vars['id']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
if ($_smarty_tpl->tpl_vars['discover_menu_exists']->value == false && ($_smarty_tpl->tpl_vars['id']->value == "mbSpecials" || $_smarty_tpl->tpl_vars['id']->value == "mbMenu")) {?>
    <li class="nav-item dropdown">                                                                                                                                                   
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo l10n('Discover');?>
</a>
        <div class="dropdown-menu dropdown-menu-right" role="menu">
<?php if (!empty($_smarty_tpl->tpl_vars['blocks']->value['mbMenu']->template)) {
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['blocks']->value['mbMenu']->template, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
if (!empty($_smarty_tpl->tpl_vars['blocks']->value['mbSpecials']->template)) {
if (!empty($_smarty_tpl->tpl_vars['blocks']->value['mbMenu']->template)) {?>
            <div class="dropdown-divider"></div>
<?php }
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['blocks']->value['mbSpecials']->template, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>
        </div>
    </li>
<?php $_smarty_tpl->_assignInScope('discover_menu_exists', true);
}
} else {
echo $_smarty_tpl->tpl_vars['block']->value->raw_content;?>

<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blocks']->value, 'block', false, 'id');
$_smarty_tpl->tpl_vars['block']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->do_else = false;
if (!empty($_smarty_tpl->tpl_vars['block']->value->template) && $_smarty_tpl->tpl_vars['id']->value == "mbIdentification") {
$_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'get_extent' ][ 0 ], array( $_smarty_tpl->tpl_vars['block']->value->template,$_smarty_tpl->tpl_vars['id']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<!-- End of menubar.tpl -->
<?php }
}
