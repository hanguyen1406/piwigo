<?php
/* Smarty version 4.3.1, created on 2024-06-22 10:32:05
  from '/var/www/html/piwigo/themes/bootstrap_darkroom/template/redirect.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676a8251d6f36_06961383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00a06e79a2916c941b0a8f4910dcdb4e3663a318' => 
    array (
      0 => '/var/www/html/piwigo/themes/bootstrap_darkroom/template/redirect.tpl',
      1 => 1713951806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6676a8251d6f36_06961383 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->fluid_width) {?>-fluid<?php }?> justify-content-center mb-5">
    <?php echo $_smarty_tpl->tpl_vars['REDIRECT_MSG']->value;?>

</div>

<div class="container<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->fluid_width) {?>-fluid<?php }?> justify-content-center">
    <a href="<?php echo $_smarty_tpl->tpl_vars['page_refresh']->value['U_REFRESH'];?>
">
        <?php echo l10n('Click here if your browser does not automatically forward you');?>

    </a>
</div>
<?php }
}
