<?php
/* Smarty version 4.3.1, created on 2024-09-07 17:06:03
  from '/var/www/html/piwigo/admin/themes/default/template/configuration_comments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66dc258b27aa40_32867424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55044d47a324fe2709ae46a55f33aca0f402a418' => 
    array (
      0 => '/var/www/html/piwigo/admin/themes/default/template/configuration_comments.tpl',
      1 => 1702327276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66dc258b27aa40_32867424 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/piwigo/include/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'common','load'=>'footer','path'=>'admin/themes/default/js/common.js'),$_smarty_tpl ) );?>


<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin1->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
(function(){
  var targets = {
    'input[name="comments_validation"]' : '#email_admin_on_comment_validation',
    'input[name="user_can_edit_comment"]' : '#email_admin_on_comment_edition',
    'input[name="user_can_delete_comment"]' : '#email_admin_on_comment_deletion'
  };

  for (selector in targets) {
    var target = targets[selector];

    jQuery(target).toggle(jQuery(selector).is(':checked'));

    (function(target){
      jQuery(selector).on('change', function() {
        jQuery(target).toggle($(this).is(':checked'));
      });
    })(target);
  };

  function check_activate_comments() {
    jQuery("#comments_param_container").toggle(jQuery("input[name=activate_comments]").is(":checked"));
  }
  check_activate_comments();
  jQuery("input[name=activate_comments]").on("change", function() {
    check_activate_comments();
  });
}());
<?php $_block_repeat=false;
echo $_block_plugin1->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
" class="properties">

<div id="configContent">

  <fieldset id="commentsConf" class="no-border">
    <ul>
      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="activate_comments" id="activate_comments"<?php if (($_smarty_tpl->tpl_vars['comments']->value['activate_comments'])) {?> checked="checked"<?php }?>>
          <?php echo l10n('Activate comments');?>

        </label>
      </li>
    </ul>

    <ul id="comments_param_container">
      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="comments_forall" <?php if (($_smarty_tpl->tpl_vars['comments']->value['comments_forall'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Comments for all');?>

        </label>
      </li>

      <li>
        <label>
          <?php echo l10n('Number of comments per page');?>

          <input type="text" size="3" maxlength="4" name="nb_comment_page" id="nb_comment_page" value="<?php echo $_smarty_tpl->tpl_vars['comments']->value['NB_COMMENTS_PAGE'];?>
">
        </label>
      </li>

      <li>
        <label>
          <?php echo l10n('Default comments order');?>

          <select name="comments_order">
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['comments']->value['comments_order_options'],'selected'=>$_smarty_tpl->tpl_vars['comments']->value['comments_order']),$_smarty_tpl);?>

          </select>
        </label>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="comments_validation" <?php if (($_smarty_tpl->tpl_vars['comments']->value['comments_validation'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Validation');?>

        </label>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="comments_author_mandatory" <?php if (($_smarty_tpl->tpl_vars['comments']->value['comments_author_mandatory'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Username is mandatory');?>

        </label>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="comments_email_mandatory" <?php if (($_smarty_tpl->tpl_vars['comments']->value['comments_email_mandatory'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Email address is mandatory');?>

        </label>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="comments_enable_website" <?php if (($_smarty_tpl->tpl_vars['comments']->value['comments_enable_website'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Allow users to add a link to their website');?>

        </label>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="user_can_edit_comment" <?php if (($_smarty_tpl->tpl_vars['comments']->value['user_can_edit_comment'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Allow users to edit their own comments');?>

        </label>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="user_can_delete_comment" <?php if (($_smarty_tpl->tpl_vars['comments']->value['user_can_delete_comment'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Allow users to delete their own comments');?>

        </label>
      </li>

      <li id="notifyAdmin">
        <strong><?php echo l10n('Notify administrators when a comment is');?>
</strong>

        <label id="email_admin_on_comment_validation" class="font-checkbox no-bold">
          <span class="icon-check"></span>
          <input type="checkbox" name="email_admin_on_comment_validation" <?php if (($_smarty_tpl->tpl_vars['comments']->value['email_admin_on_comment_validation'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('pending validation');?>

        </label>

        <label class="font-checkbox no-bold">
          <span class="icon-check"></span>
          <input type="checkbox" name="email_admin_on_comment" <?php if (($_smarty_tpl->tpl_vars['comments']->value['email_admin_on_comment'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('added');?>

        </label>

        <label id="email_admin_on_comment_edition" class="font-checkbox no-bold">
          <span class="icon-check"></span>
          <input type="checkbox" name="email_admin_on_comment_edition" <?php if (($_smarty_tpl->tpl_vars['comments']->value['email_admin_on_comment_edition'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('modified');?>

        </label>

        <label id="email_admin_on_comment_deletion" class="font-checkbox no-bold">
          <span class="icon-check"></span>
          <input type="checkbox" name="email_admin_on_comment_deletion" <?php if (($_smarty_tpl->tpl_vars['comments']->value['email_admin_on_comment_deletion'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('deleted');?>

        </label>
      </li>
    </ul>
  </fieldset>

</div> <!-- configContent -->

<p class="formButtons">
  <button name="submit" type="submit" class="buttonLike" <?php if ($_smarty_tpl->tpl_vars['isWebmaster']->value != 1) {?>disabled<?php }?>>
    <i class="icon-floppy"></i> <?php echo l10n('Save Settings');?>

  </button>
</p>

<input type="hidden" name="pwg_token" value="<?php echo $_smarty_tpl->tpl_vars['PWG_TOKEN']->value;?>
">
</form><?php }
}
