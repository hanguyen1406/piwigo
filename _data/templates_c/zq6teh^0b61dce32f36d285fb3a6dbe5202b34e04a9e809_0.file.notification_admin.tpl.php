<?php
/* Smarty version 4.3.1, created on 2024-08-05 09:48:11
  from '/var/www/html/piwigo/themes/default/template/mail/text/html/notification_admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66b09fdb68bcf8_75808066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b61dce32f36d285fb3a6dbe5202b34e04a9e809' => 
    array (
      0 => '/var/www/html/piwigo/themes/default/template/mail/text/html/notification_admin.tpl',
      1 => 1702327276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b09fdb68bcf8_75808066 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>


<?php if ((isset($_smarty_tpl->tpl_vars['TECHNICAL']->value))) {?>
<p style="padding-top:10px;font-size:11px;">
<?php echo l10n('Connected user: %s',$_smarty_tpl->tpl_vars['TECHNICAL']->value['username']);?>
<br>
<?php echo l10n('IP: %s',$_smarty_tpl->tpl_vars['TECHNICAL']->value['ip']);?>
<br>
<?php echo l10n('Browser: %s',$_smarty_tpl->tpl_vars['TECHNICAL']->value['user_agent']);?>

</p>
<?php }
}
}
