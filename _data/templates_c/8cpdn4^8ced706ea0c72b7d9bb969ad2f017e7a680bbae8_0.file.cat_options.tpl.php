<?php
/* Smarty version 4.3.1, created on 2024-06-22 14:58:19
  from '/var/www/html/piwigo/admin/themes/default/template/cat_options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676e68b79da26_10843720',
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
function content_6676e68b79da26_10843720 (Smarty_Internal_Template $_smarty_tpl) {
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
