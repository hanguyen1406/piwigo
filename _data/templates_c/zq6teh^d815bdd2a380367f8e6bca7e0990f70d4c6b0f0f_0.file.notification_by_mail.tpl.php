<?php
/* Smarty version 4.3.1, created on 2024-06-22 15:34:13
  from '/var/www/html/piwigo/themes/default/template/mail/text/html/notification_by_mail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676eef5ceb775_48999411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd815bdd2a380367f8e6bca7e0990f70d4c6b0f0f' => 
    array (
      0 => '/var/www/html/piwigo/themes/default/template/mail/text/html/notification_by_mail.tpl',
      1 => 1702327276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6676eef5ceb775_48999411 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="nbm_message">
<h2><?php echo l10n('Notification');?>
</h2>
<p><?php echo l10n('Hello');?>
 <?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
,</p>

<?php if ((isset($_smarty_tpl->tpl_vars['subscribe_by_admin']->value))) {?>
<p><?php echo l10n('The webmaster has subscribed you to receiving notifications by mail.');?>
</p>
<?php }
if ((isset($_smarty_tpl->tpl_vars['subscribe_by_himself']->value))) {?>
<p><?php echo l10n('You have subscribed to receiving notifications by mail.');?>
</p>
<?php }
if ((isset($_smarty_tpl->tpl_vars['unsubscribe_by_admin']->value))) {?>
<p><?php echo l10n('The webmaster has unsubscribed you from receiving notifications by mail.');?>
</p>
<?php }
if ((isset($_smarty_tpl->tpl_vars['unsubscribe_by_himself']->value))) {?>
<p><?php echo l10n('You have unsubscribed from receiving notifications by mail.');?>
</p>
<?php }
if ((isset($_smarty_tpl->tpl_vars['content_new_elements_single']->value))) {?>
<p><?php echo l10n('New photos were added');?>
 <?php echo l10n('on');?>
 <?php echo $_smarty_tpl->tpl_vars['content_new_elements_single']->value['DATE_SINGLE'];?>
.</p>
<?php }
if ((isset($_smarty_tpl->tpl_vars['content_new_elements_between']->value))) {?>
<p><?php echo l10n('New photos were added');?>
 <?php echo l10n('between');?>
 <?php echo $_smarty_tpl->tpl_vars['content_new_elements_between']->value['DATE_BETWEEN_1'];?>
 <?php echo l10n('and');?>
 <?php echo $_smarty_tpl->tpl_vars['content_new_elements_between']->value['DATE_BETWEEN_2'];?>
.</p>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['global_new_lines']->value)) {?>
<ul id="nbm_new_line">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['global_new_lines']->value, 'line');
$_smarty_tpl->tpl_vars['line']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['line']->value) {
$_smarty_tpl->tpl_vars['line']->do_else = false;
?>
  <li><?php echo $_smarty_tpl->tpl_vars['line']->value;?>
</li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['custom_mail_content']->value)) {?>
<p><?php echo $_smarty_tpl->tpl_vars['custom_mail_content']->value;?>
</p>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['GOTO_GALLERY_TITLE']->value)) {?>
<p><?php echo l10n('Go to');?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['GOTO_GALLERY_URL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['GOTO_GALLERY_TITLE']->value;?>
</a>.</p>
<?php }?>
<p><?php echo l10n('See you soon,');?>
</p>
<p style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['SEND_AS_NAME']->value;?>
</p>
<hr>
<p>
<?php echo l10n('To unsubscribe');
echo l10n(', click on');?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['UNSUBSCRIBE_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['UNSUBSCRIBE_LINK']->value;?>
</a><br>
<?php echo l10n('To subscribe');
echo l10n(', click on');?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['SUBSCRIBE_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['SUBSCRIBE_LINK']->value;?>
</a><br>
<?php echo l10n('If you encounter problems or have any question, please send a message to');?>
 <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['CONTACT_EMAIL']->value;?>
?subject=<?php echo l10n('[NBM] Problems or questions');?>
"><?php echo $_smarty_tpl->tpl_vars['CONTACT_EMAIL']->value;?>
</a><br>
</p>
<hr>
<?php if (!empty($_smarty_tpl->tpl_vars['recent_posts']->value)) {?>
</div>
<div id="nbm_recent_post">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recent_posts']->value, 'recent_post');
$_smarty_tpl->tpl_vars['recent_post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['recent_post']->value) {
$_smarty_tpl->tpl_vars['recent_post']->do_else = false;
?>
  <h2><?php echo $_smarty_tpl->tpl_vars['recent_post']->value['TITLE'];?>
</h2>
  <?php echo $_smarty_tpl->tpl_vars['recent_post']->value['HTML_DATA'];?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
</div>
<?php }
}
