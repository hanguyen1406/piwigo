<?php
/* Smarty version 4.3.1, created on 2024-07-29 04:28:22
  from '/var/www/html/piwigo/themes/default/template/mail/text/plain/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66a71a6657e632_09172319',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ee5fda10d6b95c3099eddb42469b37a38fb6e2c' => 
    array (
      0 => '/var/www/html/piwigo/themes/default/template/mail/text/plain/footer.tpl',
      1 => 1721752195,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a71a6657e632_09172319 (Smarty_Internal_Template $_smarty_tpl) {
?>


----
<?php echo l10n('Sent by');?>
 "<?php echo $_smarty_tpl->tpl_vars['GALLERY_TITLE']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['GALLERY_URL']->value;?>

<?php }
}
