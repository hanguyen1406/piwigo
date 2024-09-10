<?php
/* Smarty version 4.3.1, created on 2024-09-07 17:13:15
  from '/var/www/html/piwigo/themes/bootstrap_darkroom/template/menubar_tags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66dc273b896679_60544241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d999d2e25e5fd8654b41b3eed2329db89f66626' => 
    array (
      0 => '/var/www/html/piwigo/themes/bootstrap_darkroom/template/menubar_tags.tpl',
      1 => 1713951806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66dc273b896679_60544241 (Smarty_Internal_Template $_smarty_tpl) {
if (!(isset($_smarty_tpl->tpl_vars['tag']->value['level']))) {
$_smarty_tpl->_assignInScope('level', "2");
} else {
$_smarty_tpl->_assignInScope('level', $_smarty_tpl->tpl_vars['tag']->value['level']);
}?>
<li class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo l10n('Related tags');?>
</a>
    <div class="dropdown-menu dropdown-menu-right" role="menu">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value->data, 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?>
        <a class="dropdown-item tagLevel<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
" href=<?php if ((isset($_smarty_tpl->tpl_vars['tag']->value['U_ADD']))) {?>"<?php echo $_smarty_tpl->tpl_vars['tag']->value['U_ADD'];?>
" title="<?php echo l10n_dec('%d photo is also linked to current tags','%d photos are also linked to current tags',$_smarty_tpl->tpl_vars['tag']->value['counter']);?>
" rel="nofollow">+<?php } else { ?>"<?php echo $_smarty_tpl->tpl_vars['tag']->value['URL'];?>
" title="<?php echo l10n('display photos linked to this tag');?>
"><?php }
echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
</a>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</li>
<?php }
}
