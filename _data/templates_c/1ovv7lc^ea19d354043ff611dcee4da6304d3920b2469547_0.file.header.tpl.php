<?php
/* Smarty version 4.3.1, created on 2024-06-22 15:32:59
  from '/var/www/html/piwigo/themes/default/template/mail/text/plain/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676eeab210888_98185520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea19d354043ff611dcee4da6304d3920b2469547' => 
    array (
      0 => '/var/www/html/piwigo/themes/default/template/mail/text/plain/header.tpl',
      1 => 1702327276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6676eeab210888_98185520 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['MAIL_TITLE']->value;?>

<?php if (!empty($_smarty_tpl->tpl_vars['MAIL_SUBTITLE']->value)) {
echo $_smarty_tpl->tpl_vars['MAIL_SUBTITLE']->value;?>

<?php }?>
----

<?php }
}
