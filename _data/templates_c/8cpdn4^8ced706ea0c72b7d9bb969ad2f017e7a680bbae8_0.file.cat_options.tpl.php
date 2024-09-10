<?php
/* Smarty version 4.3.1, created on 2024-09-02 20:57:17
  from '/var/www/html/piwigo/admin/themes/default/template/cat_options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66d5c43d38d1b0_87362637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ced706ea0c72b7d9bb969ad2f017e7a680bbae8' => 
    array (
      0 => '/var/www/html/piwigo/admin/themes/default/template/cat_options.tpl',
      1 => 1702327276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d5c43d38d1b0_87362637 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
" id="cat_options">
  <fieldset>
    <legend><?php echo $_smarty_tpl->tpl_vars['L_SECTION']->value;?>
</legend>
    <?php echo $_smarty_tpl->tpl_vars['DOUBLE_SELECT']->value;?>

  </fieldset>
<input type="hidden" name="pwg_token" value="<?php echo $_smarty_tpl->tpl_vars['PWG_TOKEN']->value;?>
">
</form>

<?php }
}
