<?php
/* Smarty version 4.3.1, created on 2024-06-25 14:31:11
  from '/var/www/html/piwigo/themes/bootstrap_darkroom/template/profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_667ad4afdec535_16230869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4aa36c4c8b306dc3991bd8c9fa12ceabbba72423' => 
    array (
      0 => '/var/www/html/piwigo/themes/bootstrap_darkroom/template/profile.tpl',
      1 => 1719325866,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:infos_errors.tpl' => 1,
  ),
),false)) {
function content_667ad4afdec535_16230869 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-contextual navbar-expand-lg <?php echo $_smarty_tpl->tpl_vars['theme_config']->value->navbar_contextual_style;?>
 <?php echo $_smarty_tpl->tpl_vars['theme_config']->value->navbar_contextual_bg;?>
 sticky-top mb-5">
    <div class="container<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->fluid_width) {?>-fluid<?php }?>">
        <div class="navbar-brand mr-auto"><a href="<?php echo $_smarty_tpl->tpl_vars['U_HOME']->value;?>
"><?php echo l10n('Home');?>
</a><?php echo $_smarty_tpl->tpl_vars['LEVEL_SEPARATOR']->value;?>
<a href><?php echo l10n('Profile');?>
</a></div>
    </div>
</nav>

<?php $_smarty_tpl->_subTemplateRender('file:infos_errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['PROFILE_CONTENT']->value;
echo $_smarty_tpl->tpl_vars['CREDITS_CONTENT']->value;
}
}
