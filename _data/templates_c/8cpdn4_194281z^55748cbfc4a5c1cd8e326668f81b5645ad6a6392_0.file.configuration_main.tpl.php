<?php
/* Smarty version 4.3.1, created on 2024-09-07 16:20:48
  from '/var/www/html/piwigo/admin/themes/default/template/configuration_main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66dc1af0d9b5d1_35244057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55748cbfc4a5c1cd8e326668f81b5645ad6a6392' => 
    array (
      0 => '/var/www/html/piwigo/admin/themes/default/template/configuration_main.tpl',
      1 => 1702327276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/colorbox.inc.tpl' => 1,
  ),
),false)) {
function content_66dc1af0d9b5d1_35244057 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/piwigo/include/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),1=>array('file'=>'/var/www/html/piwigo/include/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
$_smarty_tpl->_subTemplateRender('file:include/colorbox.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'common','load'=>'footer','path'=>'admin/themes/default/js/common.js'),$_smarty_tpl ) );?>


<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery'));
$_block_repeat=true;
echo $_block_plugin1->block_footer_script(array('require'=>'jquery'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
(function(){
  var targets = {
    'input[name="rate"]' : '#rate_anonymous',
    'input[name="allow_user_registration"]' : '#email_admin_on_new_user',
    'input[name="email_admin_on_new_user"]' : '#email_admin_on_new_user_filter'
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

  jQuery('.tiptip-with-img').tipTip({
    maxWidth: "300px",
    delay: 0,
    fadeIn: 200,
    fadeOut: 200
  });
}());

<?php if (!(isset($_smarty_tpl->tpl_vars['ORDER_BY_IS_CUSTOM']->value))) {?>
(function(){
  var max_fields = Math.ceil(<?php echo smarty_modifier_count($_smarty_tpl->tpl_vars['main']->value['order_by_options']);?>
/2);

  function updateFilters() {
    var $selects = jQuery('#order_filters select');

    jQuery('#order_filters .addFilter').toggle($selects.length <= max_fields);
    jQuery('#order_filters .removeFilter').css('display', '').filter(':first').css('display', 'none');

    $selects.find('option').removeAttr('disabled');
    $selects.each(function() {
      $selects.not(this).find('option[value="'+ jQuery(this).val() +'"]').attr('disabled', 'disabled');
    });
  }

  jQuery('#order_filters').on('click', '.removeFilter', function() {
    jQuery(this).parent('span.filter').remove();
    updateFilters();
  });

  jQuery('#order_filters').on('change', 'select', updateFilters);

  jQuery('#order_filters .addFilter').click(function() {
    jQuery(this).prev('span.filter').clone().insertBefore(jQuery(this));
    jQuery(this).prev('span.filter').children('select').val('');
    updateFilters();
  });

  updateFilters();
}());
<?php }?>

jQuery(".themeBoxes a").colorbox();

jQuery("input[name='mail_theme']").change(function() {
  jQuery("input[name='mail_theme']").parents(".themeSelect").removeClass("themeDefault");
  jQuery(this).parents(".themeSelect").addClass("themeDefault");
});

jQuery("input[name='email_admin_on_new_user_filter']").change(function() {
  var val = jQuery("input[name='email_admin_on_new_user_filter']:checked").val();

  jQuery('#email_admin_on_new_user_filter_group_options').toggle('group' == val);
});
<?php $_block_repeat=false;
echo $_block_plugin1->block_footer_script(array('require'=>'jquery'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
" class="properties">

<div id="configContent">

  <fieldset class="mainConf">
    <legend><span class="icon-cog icon-purple"></span><?php echo l10n('Basic settings');?>
</legend>
    <ul>
      <li>
        <label for="gallery_title"><?php echo l10n('Gallery title');?>
</label>
        <br>
        <input type="text" maxlength="255" size="50" name="gallery_title" id="gallery_title" value="<?php echo $_smarty_tpl->tpl_vars['main']->value['CONF_GALLERY_TITLE'];?>
">
      </li>

      <li>
        <label for="page_banner"><?php echo l10n('Page banner');?>
</label>
        <br>
        <textarea rows="5" cols="50" class="description" name="page_banner" id="page_banner"><?php echo $_smarty_tpl->tpl_vars['main']->value['CONF_PAGE_BANNER'];?>
</textarea><a href="#" onClick="toogleEditor('page_banner'); return false;" style="border-bottom: none; float: right; margin-right: 5%;">Display FCK Editor On/Off</a> <?php echo $_smarty_tpl->tpl_vars['EXTDESC_BUTTON']->value;?>

      </li>

     <li id="order_filters">
        <label><?php echo l10n('Default photos order');?>
</label>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['main']->value['order_by'], 'order');
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
?>
        <span class="filter <?php if ((isset($_smarty_tpl->tpl_vars['ORDER_BY_IS_CUSTOM']->value))) {?>transparent<?php }?>">
          <select name="order_by[]" <?php if ((isset($_smarty_tpl->tpl_vars['ORDER_BY_IS_CUSTOM']->value))) {?>disabled<?php }?>>
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['main']->value['order_by_options'],'selected'=>$_smarty_tpl->tpl_vars['order']->value),$_smarty_tpl);?>

          </select>
          <a class="removeFilter"><?php echo l10n('delete');?>
</a>
        </span>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if (!(isset($_smarty_tpl->tpl_vars['ORDER_BY_IS_CUSTOM']->value))) {?>
        <a class="addFilter"><?php echo l10n('Add a criteria');?>
</a>
<?php } else { ?>
        <span class="order_by_is_custom"><?php echo l10n('You can\'t define a default photo order because you have a custom setting in your local configuration.');?>
</span>
<?php }?>
      </li>
    </ul>
  </fieldset>

  <fieldset class="mainConf">
    <legend><span class="icon-lock icon-yellow"></span><?php echo l10n('Permissions');?>
</legend>
    <ul>
      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="rate" <?php if (($_smarty_tpl->tpl_vars['main']->value['rate'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Allow rating');?>

        </label>

        <div id="rate_anonymous" class="sub-setting">
          <label class="font-checkbox no-bold">
            <span class="icon-check"></span>
            <input type="checkbox" name="rate_anonymous" <?php if (($_smarty_tpl->tpl_vars['main']->value['rate_anonymous'])) {?>checked="checked"<?php }?>>
            <?php echo l10n('Rating by guests');?>

          </label>
        </div>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="allow_user_registration" <?php if (($_smarty_tpl->tpl_vars['main']->value['allow_user_registration'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Allow user registration');?>

        </label>

        <div id="email_admin_on_new_user" class="sub-setting">
          <label class="font-checkbox no-bold">
            <span class="icon-check"></span>
            <input type="checkbox" name="email_admin_on_new_user" <?php if (($_smarty_tpl->tpl_vars['main']->value['email_admin_on_new_user'])) {?>checked="checked"<?php }?>>
            <?php echo l10n('Email admins when a new user registers');?>

          </label>

          <div id="email_admin_on_new_user_filter" class="sub-setting"<?php if ((!$_smarty_tpl->tpl_vars['main']->value['email_admin_on_new_user'])) {?> style="display:none"<?php }?>>
            <label class="font-checkbox no-bold">
              <span class="icon-dot-circled"></span>
              <input type="radio" name="email_admin_on_new_user_filter" value="all" <?php if (($_smarty_tpl->tpl_vars['main']->value['email_admin_on_new_user_filter'] == 'all')) {?>checked<?php }?>>
              <?php echo l10n('All admins');?>

            </label>
<br>
            <label class="font-checkbox no-bold">
              <span class="icon-dot-circled"></span>
              <input type="radio" name="email_admin_on_new_user_filter" value="group" <?php if (($_smarty_tpl->tpl_vars['main']->value['email_admin_on_new_user_filter'] == 'group')) {?>checked<?php }?>>
              <?php echo l10n('Only admins in a specific group');?>

            </label>

            <span id="email_admin_on_new_user_filter_group_options"<?php if (($_smarty_tpl->tpl_vars['main']->value['email_admin_on_new_user_filter'] != 'group')) {?> style="display:none"<?php }?>>
<?php if (count($_smarty_tpl->tpl_vars['group_options']->value) > 0) {?>
            <select name="email_admin_on_new_user_filter_group">
              <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['group_options']->value,'selected'=>$_smarty_tpl->tpl_vars['main']->value['email_admin_on_new_user_filter_group']),$_smarty_tpl);?>

            </select>
<?php } else { ?>
    <?php echo l10n('There is no group in this gallery.');?>
 <a href="admin.php?page=group_list" class="externalLink"><?php echo l10n('Group management');?>
</a>
<?php }?>
            </span>

          </div>
        </div>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="allow_user_customization" <?php if (($_smarty_tpl->tpl_vars['main']->value['allow_user_customization'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Allow user customization');?>

        </label>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="obligatory_user_mail_address" <?php if (($_smarty_tpl->tpl_vars['main']->value['obligatory_user_mail_address'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Mail address is mandatory for registration');?>

        </label>
      </li>
    </ul>
  </fieldset>

  <fieldset class="mainConf">
    <legend><span class="icon-wrench icon-blue"></span><?php echo l10n('Miscellaneous');?>
</legend>
    <ul>
      <li>
        <label><?php echo l10n('Week starts on');?>

        <?php echo smarty_function_html_options(array('name'=>"week_starts_on",'options'=>$_smarty_tpl->tpl_vars['main']->value['week_starts_on_options'],'selected'=>$_smarty_tpl->tpl_vars['main']->value['week_starts_on_options_selected']),$_smarty_tpl);?>
</label>
      </li>

      <li>
        <strong><?php echo l10n('Save visits in history for');?>
</strong>

        <label class="font-checkbox no-bold">
          <span class="icon-check"></span>
          <input type="checkbox" name="history_guest" <?php if (($_smarty_tpl->tpl_vars['main']->value['history_guest'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('simple visitors');?>

        </label>

        <label class="font-checkbox no-bold">
          <span class="icon-check"></span>
          <input type="checkbox" name="log" <?php if (($_smarty_tpl->tpl_vars['main']->value['log'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('registered users');?>

        </label>

        <label class="font-checkbox no-bold">
          <span class="icon-check"></span>
          <input type="checkbox" name="history_admin" <?php if (($_smarty_tpl->tpl_vars['main']->value['history_admin'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('administrators');?>

        </label>
      </li>

      <li>
        <strong><?php echo l10n('Promote mobile app on mobile devices');?>
</strong>

        <label class="font-checkbox no-bold">
          <span class="icon-check"></span>
          <input type="checkbox" name="show_mobile_app_banner_in_gallery" <?php if (($_smarty_tpl->tpl_vars['main']->value['show_mobile_app_banner_in_gallery'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('in gallery');?>

        </label>

        <label class="font-checkbox no-bold">
          <span class="icon-check"></span>
          <input type="checkbox" name="show_mobile_app_banner_in_admin" <?php if (($_smarty_tpl->tpl_vars['main']->value['show_mobile_app_banner_in_admin'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('in administration');?>

        </label>

        <span class="icon-help-circled tiptip-with-img show-mobile-app-banner-tooltip" title="<?php echo l10n('Displays a banner to install or open the official Piwigo app');?>
<br><img src='admin/themes/default/images/piwigo_app_banner.jpg' style='width:100%;margin-top:5px;'>" style="cursor:help"></span>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="upload_detect_duplicate" <?php if (($_smarty_tpl->tpl_vars['main']->value['upload_detect_duplicate'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Detect and avoid duplicates during upload');?>

        </label>

        <span class="icon-help-circled tiptip" title="<?php echo l10n('During upload, if Piwigo detects the photo already exists, associate the existing photo to the destination album, without duplicating file');?>
" style="cursor:help"></span>
      </li>


      <li>
        <label><?php echo l10n('Mail theme');?>
</label>

        <div class="themeBoxes font-checkbox">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['main']->value['mail_theme_options'], 'name', false, 'theme');
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
?>
          <div class="themeSelect <?php if ($_smarty_tpl->tpl_vars['main']->value['mail_theme'] == $_smarty_tpl->tpl_vars['theme']->value) {?>themeDefault<?php }?>">
            <label class="font-checkbox">
              <div class="themeName">
                <span class="icon-dot-circled"></span>
                <input type="radio" name="mail_theme" value="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['main']->value['mail_theme'] == $_smarty_tpl->tpl_vars['theme']->value) {?>checked<?php }?>>
                <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

              </div>
              <div class="themeShot">
                <img src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
themes/default/template/mail/screenshot-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
.png" width="150"/>
              </div>
            </label>
            <a href="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
themes/default/template/mail/screenshot-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
.png" class="icon-zoom-in"><?php echo l10n('Preview');?>
</a>
          </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
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
