<?php
/* Smarty version 4.3.1, created on 2024-08-05 09:48:11
  from '/var/www/html/piwigo/themes/default/template/mail/text/plain/notification_admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66b09fdb6cb602_47293107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07498bd5c7fddbb3a7f91dc6e0ae5643f221e570' => 
    array (
      0 => '/var/www/html/piwigo/themes/default/template/mail/text/plain/notification_admin.tpl',
      1 => 1702327276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b09fdb6cb602_47293107 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>


<?php if ((isset($_smarty_tpl->tpl_vars['TECHNICAL']->value))) {?>
-----------------------------
<?php echo l10n('Connected user: %s',$_smarty_tpl->tpl_vars['TECHNICAL']->value['username']);?>

<?php echo l10n('IP: %s',$_smarty_tpl->tpl_vars['TECHNICAL']->value['ip']);?>

<?php echo l10n('Browser: %s',$_smarty_tpl->tpl_vars['TECHNICAL']->value['user_agent']);?>

<?php }
}
}
