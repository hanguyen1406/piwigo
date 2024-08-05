<?php
/* Smarty version 4.3.1, created on 2024-08-05 10:02:37
  from '/var/www/html/piwigo/admin/themes/default/template/user_perm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66b0a33d690e67_80947250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2a2e48de73ed96502d105e92cf48d68d4d17a23' => 
    array (
      0 => '/var/www/html/piwigo/admin/themes/default/template/user_perm.tpl',
      1 => 1702327276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b0a33d690e67_80947250 (Smarty_Internal_Template $_smarty_tpl) {
?><h2><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</h2>

<?php if ((isset($_smarty_tpl->tpl_vars['categories_because_of_groups']->value))) {?>
<fieldset>
  <legend><?php echo l10n('Albums authorized thanks to group associations');?>
</legend>

  <ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories_because_of_groups']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
    <li><?php echo $_smarty_tpl->tpl_vars['cat']->value;?>
</li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
</fieldset>
<?php }?>


<fieldset>
  <legend><?php echo l10n('Other private albums');?>
</legend>

  <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
">
    <?php echo $_smarty_tpl->tpl_vars['DOUBLE_SELECT']->value;?>

    <input type="hidden" name="pwg_token" value="<?php echo $_smarty_tpl->tpl_vars['PWG_TOKEN']->value;?>
">
  </form>
</fieldset>
<?php }
}
