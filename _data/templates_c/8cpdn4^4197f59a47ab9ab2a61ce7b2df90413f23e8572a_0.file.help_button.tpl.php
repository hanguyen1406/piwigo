<?php
/* Smarty version 4.3.1, created on 2024-09-20 11:58:53
  from '/var/www/html/piwigo/plugins/ExtendedDescription/template/help_button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66ed010d039110_41582137',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4197f59a47ab9ab2a61ce7b2df90413f23e8572a' => 
    array (
      0 => '/var/www/html/piwigo/plugins/ExtendedDescription/template/help_button.tpl',
      1 => 1719042203,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ed010d039110_41582137 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'core.scripts','load'=>'async','path'=>'themes/default/js/scripts.js'),$_smarty_tpl ) );?>

<a class="button icon-help-circled" href="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
admin/popuphelp.php?page=extended_desc" onclick="popuphelp(this.href); return false;" title="<?php echo l10n('Use Extended Description tags...');?>
" style="vertical-align: middle; border: 0; margin: 0.5em; margin-left: 0;"></a><?php }
}
