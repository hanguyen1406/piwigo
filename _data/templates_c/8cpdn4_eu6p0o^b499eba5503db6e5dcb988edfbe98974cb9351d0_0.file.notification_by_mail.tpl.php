<?php
/* Smarty version 4.3.1, created on 2024-06-22 15:29:24
  from '/var/www/html/piwigo/admin/themes/default/template/notification_by_mail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676edd42b78b7_54666343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b499eba5503db6e5dcb988edfbe98974cb9351d0' => 
    array (
      0 => '/var/www/html/piwigo/admin/themes/default/template/notification_by_mail.tpl',
      1 => 1702327276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/autosize.inc.tpl' => 1,
  ),
),false)) {
function content_6676edd42b78b7_54666343 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:include/autosize.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin1->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
jQuery(document).ready(function(){

	jQuery("#checkAllLink").click(function () {
		jQuery("#notification_by_mail input[type=checkbox]").prop('checked', true);
		return false;
	});

	jQuery("#uncheckAllLink").click(function () {
		jQuery("#notification_by_mail input[type=checkbox]").prop('checked', false);
		return false;
	});

});
<?php $_block_repeat=false;
echo $_block_plugin1->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<form method="post" name="notification_by_mail" id="notification_by_mail" action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
">
  <input type="hidden" name="pwg_token" value="<?php echo $_smarty_tpl->tpl_vars['PWG_TOKEN']->value;?>
">

<?php if ((isset($_smarty_tpl->tpl_vars['REPOST_SUBMIT_NAME']->value))) {?>
  <fieldset>
    <div class="infos">
      <input type="submit" value="<?php echo l10n('Continue processing treatment');?>
" name="<?php echo $_smarty_tpl->tpl_vars['REPOST_SUBMIT_NAME']->value;?>
">
    </div>
  </fieldset>
<?php }
if ((isset($_smarty_tpl->tpl_vars['param']->value))) {?>
  <fieldset>
    <legend><?php echo l10n('Parameters');?>
</legend>
    <table>
      <tr>
        <td><label><?php echo l10n('Send mail on HTML format');?>
</label></td>
        <td>
          <label><input type="radio" name="nbm_send_html_mail" value="true"  <?php if ($_smarty_tpl->tpl_vars['param']->value['SEND_HTML_MAIL']) {?>checked="checked"<?php }?>><?php echo l10n('Yes');?>
</label>
          <label><input type="radio" name="nbm_send_html_mail" value="false" <?php if ($_smarty_tpl->tpl_vars['param']->value['SEND_HTML_MAIL'] === "false" || !$_smarty_tpl->tpl_vars['param']->value['SEND_HTML_MAIL']) {?>checked="checked"<?php }?>><?php echo l10n('No');?>
</label>
        </td>
      </tr>
      <tr>
        <td>
          <label for="send_mail_as"><?php echo l10n('Send mail as');?>
</label>
          <br><i><small><?php echo l10n('With blank value, gallery title will be used');?>
</small></i>
        </td>
        <td><input type="text" maxlength="35" size="35" name="nbm_send_mail_as" id="send_mail_as" value="<?php echo $_smarty_tpl->tpl_vars['param']->value['SEND_MAIL_AS'];?>
"></td>
      </tr>
      <tr>
        <td><label><?php echo l10n('Add detailed content');?>
</label></td>
        <td>
          <label><input type="radio" name="nbm_send_detailed_content" value="true"  <?php if ($_smarty_tpl->tpl_vars['param']->value['SEND_DETAILED_CONTENT']) {?>checked="checked"<?php }?>><?php echo l10n('Yes');?>
</label>
          <label><input type="radio" name="nbm_send_detailed_content" value="false" <?php if (!$_smarty_tpl->tpl_vars['param']->value['SEND_DETAILED_CONTENT'] || $_smarty_tpl->tpl_vars['param']->value['SEND_DETAILED_CONTENT'] === "false") {?>checked="checked"<?php }?>><?php echo l10n('No');?>
</label>
        </td>
      </tr>
     <tr>
        <td><label for="complementary_mail_content"><?php echo l10n('Complementary mail content');?>
</label></td>
        <td><textarea cols="50" rows="5" name="nbm_complementary_mail_content" id="complementary_mail_content"><?php echo $_smarty_tpl->tpl_vars['param']->value['COMPLEMENTARY_MAIL_CONTENT'];?>
</textarea></td></tr><tr><td></td><td><a href="#" onClick="toogleEditor('nbm_complementary_mail_content'); return false;" style="border-bottom: none; float: right;">Display FCK Editor On/Off</a> <?php echo $_smarty_tpl->tpl_vars['EXTDESC_BUTTON']->value;?>
</td>
      </tr>
      <tr>
        <td>
          <label><?php echo l10n('Include display of recent photos grouped by dates');?>
</label>
          <br><i><small><?php echo l10n('Available only with HTML format');?>
</small></i>
        </td>
        <td>
          <label><input type="radio" name="nbm_send_recent_post_dates" value="true" <?php if ($_smarty_tpl->tpl_vars['param']->value['SEND_RECENT_POST_DATES']) {?>checked="checked"<?php }?>><?php echo l10n('Yes');?>
</label>
          <label><input type="radio" name="nbm_send_recent_post_dates" value="false" <?php if (!$_smarty_tpl->tpl_vars['param']->value['SEND_RECENT_POST_DATES'] || $_smarty_tpl->tpl_vars['param']->value['SEND_RECENT_POST_DATES'] === "false") {?>checked="checked"<?php }?>><?php echo l10n('No');?>
</label>
        </td>
      </tr>
    </table>
  </fieldset>

  <p>
    <input type="submit" value="<?php echo l10n('Submit');?>
" name="param_submit">
    <input type="reset" value="<?php echo l10n('Reset');?>
" name="param_reset">
  </p>
  <?php }
if ((isset($_smarty_tpl->tpl_vars['subscribe']->value))) {?>
  <fieldset>
    <legend><?php echo l10n('Subscribe/unsubscribe users');?>
</legend>
    <p><i><?php echo l10n('Warning: subscribing or unsubscribing will send mails to users');?>
</i></p>
    <?php echo $_smarty_tpl->tpl_vars['DOUBLE_SELECT']->value;?>

  </fieldset>
  <?php }
if ((isset($_smarty_tpl->tpl_vars['send']->value))) {
if (empty($_smarty_tpl->tpl_vars['send']->value['users'])) {?>
    <p><?php echo l10n('There is no available subscribers to mail.');?>
</p>
    <p>
    <?php echo l10n('Subscribers could be listed (available) only if there is new elements to notify.');?>
<br>
    <?php echo l10n('Anyway only webmasters can see this tab and never administrators.');?>

    </p>
<?php } else { ?>
    <fieldset>
      <legend><?php echo l10n('Select recipients');?>
</legend>
      <table class="table2">
        <tr class="throw">
          <th><?php echo l10n('User');?>
</th>
          <th><?php echo l10n('Email');?>
</th>
          <th><?php echo l10n('Last send');?>
</th>
          <th><?php echo l10n('To send ?');?>
</th>
        </tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['send']->value['users'], 'u', false, NULL, 'user_loop', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['u']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_user_loop']->value['index']++;
?>
        <tr class="<?php if ((1 & (isset($_smarty_tpl->tpl_vars['__smarty_foreach_user_loop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_user_loop']->value['index'] : null))) {?>row1<?php } else { ?>row2<?php }?>">
          <td><label for="send_selection-<?php echo $_smarty_tpl->tpl_vars['u']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['u']->value['USERNAME'];?>
</label></td>
          <td><label for="send_selection-<?php echo $_smarty_tpl->tpl_vars['u']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['u']->value['EMAIL'];?>
</label></td>
          <td><label for="send_selection-<?php echo $_smarty_tpl->tpl_vars['u']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['u']->value['LAST_SEND'];?>
</label></td>
          <td><input type="checkbox" name="send_selection[]" value="<?php echo $_smarty_tpl->tpl_vars['u']->value['ID'];?>
" <?php echo $_smarty_tpl->tpl_vars['u']->value['CHECKED'];?>
 id="send_selection-<?php echo $_smarty_tpl->tpl_vars['u']->value['ID'];?>
"></td>
        </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </table>
      <p>
          <a href="#" id="checkAllLink"><?php echo l10n('Check all');?>
</a>
        / <a href="#" id="uncheckAllLink"><?php echo l10n('Uncheck all');?>
</a>
      </p>
    </fieldset>

    <fieldset>
      <legend><?php echo l10n('Options');?>
</legend>
      <table>
       <tr>
          <td><label for="send_customize_mail_content"><?php echo l10n('Complementary mail content');?>
</label></td>
          <td><textarea cols="50" rows="5" name="send_customize_mail_content" id="send_customize_mail_content"><?php echo $_smarty_tpl->tpl_vars['send']->value['CUSTOMIZE_MAIL_CONTENT'];?>
</textarea></td></tr><tr><td></td><td><a href="#" onClick="toogleEditor('send_customize_mail_content'); return false;" style="border-bottom: none; float: right;">Display FCK Editor On/Off</a> <?php echo $_smarty_tpl->tpl_vars['EXTDESC_BUTTON']->value;?>
</td>
        </tr>
      </table>
    </fieldset>

<?php if ((isset($_smarty_tpl->tpl_vars['auth_key_duration']->value))) {?>
    <fieldset>
      <legend><span class="icon-info-circled-1 icon-blue"></span><?php echo l10n('Informations');?>
</legend>
      <p>
      <?php echo l10n('Each email sent will contain its own automatic authentication key on links, valid for %s.',$_smarty_tpl->tpl_vars['auth_key_duration']->value);?>

      <br><?php echo l10n('For security reason, authentication keys do not work for administrators.');?>

      </p>      
    </fieldset>
<?php }?>

    <p>
      <input type="submit" value="<?php echo l10n('Send');?>
" name="send_submit">
    </p>
<?php }?>
  <?php }?>
</form>
<?php }
}
