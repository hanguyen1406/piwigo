<?php
/* Smarty version 4.3.1, created on 2024-06-22 10:26:08
  from '/var/www/html/piwigo/admin/themes/default/template/languages_installed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676a6c0df1151_84004029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e935f136efcb90a58da654d6f9dc5a7ad73c97ab' => 
    array (
      0 => '/var/www/html/piwigo/admin/themes/default/template/languages_installed.tpl',
      1 => 1702327276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6676a6c0df1151_84004029 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'common','load'=>'footer','path'=>'admin/themes/default/js/common.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.confirm','load'=>'footer','require'=>'jquery','path'=>'themes/default/js/plugins/jquery-confirm.min.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/default/js/plugins/jquery-confirm.min.css"),$_smarty_tpl ) );?>

<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin1->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
$(".delete-lang-button").each(function() {
  let title_msg = '<?php echo strtr((string)l10n('Are you sure you want to delete the language "%s"?'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
  const confirm_msg = '<?php echo l10n("Yes, I am sure");?>
';
  const cancel_msg = '<?php echo strtr((string)l10n("No, I have changed my mind"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
  let lang_name = $(this).closest(".languageBox").find('.languageName').html();
  $(this).pwg_jconfirm_follow_href({
    alert_title: title_msg.replace("%s", lang_name),
    alert_confirm: confirm_msg,
    alert_cancel: cancel_msg
  });
});
<?php $_block_repeat=false;
echo $_block_plugin1->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['language_states']->value, 'language_state');
$_smarty_tpl->tpl_vars['language_state']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language_state']->value) {
$_smarty_tpl->tpl_vars['language_state']->do_else = false;
?>
<fieldset>
  <legend>
<?php if ($_smarty_tpl->tpl_vars['language_state']->value == 'active') {?>
  <?php echo l10n('Active Languages');?>


<?php } elseif ($_smarty_tpl->tpl_vars['language_state']->value == 'inactive') {?>
  <?php echo l10n('Inactive Languages');?>


<?php }?>
  </legend>
  <div class="languageBoxes">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
if ($_smarty_tpl->tpl_vars['language']->value['state'] == $_smarty_tpl->tpl_vars['language_state']->value) {?>
  <div class="languageBox<?php if ($_smarty_tpl->tpl_vars['language']->value['is_default']) {?> languageDefault<?php }?>">
    <div class="languageName"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];
if ($_smarty_tpl->tpl_vars['language']->value['is_default']) {?> <em>(<?php echo l10n('default');?>
)</em><?php }?></div>
<?php if ($_smarty_tpl->tpl_vars['isWebmaster']->value == 1) {?>
    <div class="languageActions">
      <div>
<?php if ($_smarty_tpl->tpl_vars['language_state']->value == 'active') {
if ($_smarty_tpl->tpl_vars['language']->value['deactivable']) {?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['language']->value['u_action'];?>
&amp;action=deactivate" class="tiptip" title="<?php echo l10n('Forbid this language to users');?>
"><?php echo l10n('Deactivate');?>
</a>
<?php } else { ?>
      <span title="<?php echo $_smarty_tpl->tpl_vars['language']->value['deactivate_tooltip'];?>
"><?php echo l10n('Deactivate');?>
</span>
<?php }
if (!$_smarty_tpl->tpl_vars['language']->value['is_default']) {?>
      | <a href="<?php echo $_smarty_tpl->tpl_vars['language']->value['u_action'];?>
&amp;action=set_default" class="tiptip" title="<?php echo l10n('Set as default language for unregistered and new users');?>
"><?php echo l10n('Default');?>
</a>
<?php }
}
if ($_smarty_tpl->tpl_vars['language_state']->value == 'inactive') {?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['language']->value['u_action'];?>
&amp;action=activate" class="tiptip" title="<?php echo l10n('Make this language available to users');?>
"><?php echo l10n('Activate');?>
</a>
<?php if ($_smarty_tpl->tpl_vars['CONF_ENABLE_EXTENSIONS_INSTALL']->value) {?>
      | <a href="<?php echo $_smarty_tpl->tpl_vars['language']->value['u_action'];?>
&amp;action=delete" class="tiptip delete-lang-button" title="<?php echo l10n('Delete this language');?>
"><?php echo l10n('Delete');?>
</a>
<?php }
}?>
      </div>
    </div> <!-- languageActions -->
<?php }?>
  </div> <!-- languageBox -->
<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div> <!-- languageBoxes -->
</fieldset>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
