<?php
/* Smarty version 4.3.1, created on 2024-06-22 14:55:34
  from '/var/www/html/piwigo/admin/themes/default/template/configuration_sizes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676e5e63d1514_95705874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cebffb2e3bf2709977a8834d679ac8c5d0c13cf6' => 
    array (
      0 => '/var/www/html/piwigo/admin/themes/default/template/configuration_sizes.tpl',
      1 => 1702327276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6676e5e63d1514_95705874 (Smarty_Internal_Template $_smarty_tpl) {
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


const title_msg = '<?php echo strtr((string)l10n('Are you sure you want to restore to default settings?'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
const confirm_msg = '<?php echo htmlspecialchars((string)l10n('Yes, I am sure'), ENT_QUOTES, 'UTF-8', true);?>
';
const cancel_msg = '<?php echo htmlspecialchars((string)l10n('No, I have changed my mind'), ENT_QUOTES, 'UTF-8', true);?>
';

$(".restore-settings-button").each(function() {
  $(this).pwg_jconfirm_follow_href({
    alert_title: title_msg,
    alert_confirm: confirm_msg,
    alert_cancel: cancel_msg
  });
});

(function(){
  var labelMaxWidth = "<?php echo l10n('Maximum width');?>
",
      labelWidth = "<?php echo l10n('Width');?>
",
      labelMaxHeight = "<?php echo l10n('Maximum height');?>
",
      labelHeight = "<?php echo l10n('Height');?>
";

  function toggleResizeFields(size) {
    var checkbox = jQuery("[name=original_resize]");
    var needToggle = jQuery("#sizeEdit-original");

    if (jQuery(checkbox).is(':checked')) {
      needToggle.show();
    }
    else {
      needToggle.hide();
    }
  }

  toggleResizeFields("original");
  jQuery("[name=original_resize]").click(function () {
    toggleResizeFields("original");
  });

  jQuery("a[id^='sizeEditOpen-']").click(function(){
    var sizeName = jQuery(this).attr("id").split("-")[1];
    jQuery("#sizeEdit-"+sizeName).toggle();
    jQuery(this).hide();
		return false;
  });

  jQuery(".cropToggle").click(function() {
    var labelBoxWidth = jQuery(this).parents('table.sizeEditForm').find('td.sizeEditWidth');
    var labelBoxHeight = jQuery(this).parents('table.sizeEditForm').find('td.sizeEditHeight');

    if (jQuery(this).is(':checked')) {
      jQuery(labelBoxWidth).html(labelWidth);
      jQuery(labelBoxHeight).html(labelHeight);
    }
    else {
      jQuery(labelBoxWidth).html(labelMaxWidth);
      jQuery(labelBoxHeight).html(labelMaxHeight);
    }
  });

  jQuery("#showDetails").click(function() {
    jQuery(".sizeDetails").show();
    jQuery(this).css("visibility", "hidden");
		return false;
  });
})();
<?php $_block_repeat=false;
echo $_block_plugin1->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'block_html_style'))) {
throw new SmartyException('block tag \'html_style\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('html_style', array());
$_block_repeat=true;
echo $_block_plugin2->block_html_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
.sizeEnable { width:50px; }
.sizeEnable .icon-ok { position:relative; left:2px; }
.sizeEditForm { margin:0 0 10px 20px; }
.sizeEdit { display:none; }
#sizesConf table { margin:0; }
.showDetails { padding:0; }
.sizeDetails { display:none;margin-left:10px; }
.sizeEditOpen { margin-left:10px; }
<?php $_block_repeat=false;
echo $_block_plugin2->block_html_style(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
" class="properties">

<div id="configContent">

  <fieldset id="sizesConf">
    <legend><span class="icon-picture icon-red"></span><?php echo l10n('Original Size');?>
</legend>
<?php if (((isset($_smarty_tpl->tpl_vars['is_gd']->value)) && $_smarty_tpl->tpl_vars['is_gd']->value)) {?>
    <div>
      <?php echo l10n('Resize after upload disabled due to the use of GD as graphic library');?>

      <input type="checkbox" name="original_resize"disabled="disabled" style="visibility: hidden">
      <input type="hidden" name="original_resize_maxwidth" value="<?php echo $_smarty_tpl->tpl_vars['sizes']->value['original_resize_maxwidth'];?>
">
      <input type="hidden" name="original_resize_maxheight" value="<?php echo $_smarty_tpl->tpl_vars['sizes']->value['original_resize_maxheight'];?>
">
      <input type="hidden" name="original_resize_quality" value="<?php echo $_smarty_tpl->tpl_vars['sizes']->value['original_resize_quality'];?>
">
    </div>
<?php } else { ?>
    <div>
      <label class="font-checkbox">
        <span class="icon-check"></span>
        <input type="checkbox" name="original_resize" <?php if (((isset($_smarty_tpl->tpl_vars['sizes']->value['original_resize'])) && $_smarty_tpl->tpl_vars['sizes']->value['original_resize'])) {?>checked="checked"<?php }?>>
        <?php echo l10n('Resize after upload');?>

      </label>
    </div>

    <table id="sizeEdit-original">
      <tr>
        <th><?php echo l10n('Maximum width');?>
</th>
        <td>
          <input type="text" name="original_resize_maxwidth" value="<?php echo $_smarty_tpl->tpl_vars['sizes']->value['original_resize_maxwidth'];?>
" size="4" maxlength="4"<?php if ((isset($_smarty_tpl->tpl_vars['ferrors']->value['original_resize_maxwidth']))) {?> class="dError"<?php }?>> <?php echo l10n('pixels');?>

          <?php if ((isset($_smarty_tpl->tpl_vars['ferrors']->value['original_resize_maxwidth']))) {?><span class="dErrorDesc" title="<?php echo $_smarty_tpl->tpl_vars['ferrors']->value['original_resize_maxwidth'];?>
">!</span><?php }?>
        </td>
      </tr>
      <tr>
        <th><?php echo l10n('Maximum height');?>
</th>
        <td>
          <input type="text" name="original_resize_maxheight" value="<?php echo $_smarty_tpl->tpl_vars['sizes']->value['original_resize_maxheight'];?>
" size="4" maxlength="4"<?php if ((isset($_smarty_tpl->tpl_vars['ferrors']->value['original_resize_maxheight']))) {?> class="dError"<?php }?>> <?php echo l10n('pixels');?>

          <?php if ((isset($_smarty_tpl->tpl_vars['ferrors']->value['original_resize_maxheight']))) {?><span class="dErrorDesc" title="<?php echo $_smarty_tpl->tpl_vars['ferrors']->value['original_resize_maxheight'];?>
">!</span><?php }?>
        </td>
      </tr>
      <tr>
        <th><?php echo l10n('Image Quality');?>
</th>
        <td>
          <input type="text" name="original_resize_quality" value="<?php echo $_smarty_tpl->tpl_vars['sizes']->value['original_resize_quality'];?>
" size="3" maxlength="3"<?php if ((isset($_smarty_tpl->tpl_vars['ferrors']->value['original_resize_quality']))) {?> class="dError"<?php }?>> %
          <?php if ((isset($_smarty_tpl->tpl_vars['ferrors']->value['original_resize_quality']))) {?><span class="dErrorDesc" title="<?php echo $_smarty_tpl->tpl_vars['ferrors']->value['original_resize_quality'];?>
">!</span><?php }?>
        </td>
      </tr>
    </table>
<?php }?>
  </fieldset>

  <fieldset id="multiSizesConf">
    <legend><span class="icon-th icon-purple"></span><?php echo l10n('Multiple Size');?>
</legend>

    <div class="showDetails">
      <a href="#" id="showDetails"<?php if ((isset($_smarty_tpl->tpl_vars['ferrors']->value))) {?> style="display:none"<?php }?>><?php echo l10n('show details');?>
</a>
    </div>

    <table style="margin:0">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['derivatives']->value, 'd', false, 'type');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>
      <tr>
        <td>
          <label>
<?php if ($_smarty_tpl->tpl_vars['d']->value['must_enable']) {?>
            <span class="sizeEnable">
              <span class="icon-ok"></span>
            </span>
<?php } else { ?>
            <span class="sizeEnable font-checkbox">
              <span class="icon-check"></span>
              <input type="checkbox" name="d[<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
][enabled]" <?php if ($_smarty_tpl->tpl_vars['d']->value['enabled']) {?>checked="checked"<?php }?>>
            </span>
<?php }?>
            <?php echo l10n($_smarty_tpl->tpl_vars['type']->value);?>

          </label>
        </td>

        <td>
          <span class="sizeDetails"<?php if ((isset($_smarty_tpl->tpl_vars['ferrors']->value))) {?> style="display:inline"<?php }?>><?php echo $_smarty_tpl->tpl_vars['d']->value['w'];?>
 x <?php echo $_smarty_tpl->tpl_vars['d']->value['h'];?>
 <?php echo l10n('pixels');
if ($_smarty_tpl->tpl_vars['d']->value['crop']) {?>, <?php echo mb_strtolower((string) l10n('Crop'), 'UTF-8');
}?></span>
        </td>

        <td>
          <span class="sizeDetails"<?php if ((isset($_smarty_tpl->tpl_vars['ferrors']->value)) && !(isset($_smarty_tpl->tpl_vars['ferrors']->value[$_smarty_tpl->tpl_vars['type']->value]))) {?> style="display:inline"<?php }?>>
            <a href="#" id="sizeEditOpen-<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" class="sizeEditOpen"><?php echo l10n('edit');?>
</a>
          </span>
        </td>
      </tr>

      <tr id="sizeEdit-<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" class="sizeEdit" <?php if ((isset($_smarty_tpl->tpl_vars['ferrors']->value[$_smarty_tpl->tpl_vars['type']->value]))) {?> style="display:block"<?php }?>>
        <td colspan="3">
          <table class="sizeEditForm">
<?php if (!$_smarty_tpl->tpl_vars['d']->value['must_square']) {?>
            <tr>
              <td colspan="2">
                <label class="font-checkbox">
                <span class="icon-check"></span>
                <input type="checkbox" class="cropToggle" name="d[<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
][crop]" <?php if ($_smarty_tpl->tpl_vars['d']->value['crop']) {?>checked="checked"<?php }?>>
                  <?php echo l10n('Crop');?>

                </label>
              </td>
            </tr>
<?php }?>
            <tr>
              <td class="sizeEditWidth"><?php if ($_smarty_tpl->tpl_vars['d']->value['must_square'] || $_smarty_tpl->tpl_vars['d']->value['crop']) {
echo l10n('Width');
} else {
echo l10n('Maximum width');
}?></td>
              <td>
                <input type="text" name="d[<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
][w]" maxlength="4" size="4" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['w'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['ferrors']->value[$_smarty_tpl->tpl_vars['type']->value]['w']))) {?> class="dError"<?php }?>> <?php echo l10n('pixels');?>

                <?php if ((isset($_smarty_tpl->tpl_vars['ferrors']->value[$_smarty_tpl->tpl_vars['type']->value]['w']))) {?><span class="dErrorDesc" title="<?php echo $_smarty_tpl->tpl_vars['ferrors']->value[$_smarty_tpl->tpl_vars['type']->value]['w'];?>
">!</span><?php }?>
              </td>
            </tr>
<?php if (!$_smarty_tpl->tpl_vars['d']->value['must_square']) {?>
            <tr>
              <td class="sizeEditHeight"><?php if ($_smarty_tpl->tpl_vars['d']->value['crop']) {
echo l10n('Height');
} else {
echo l10n('Maximum height');
}?></td>
              <td>
                <input type="text" name="d[<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
][h]" maxlength="4" size="4"  value="<?php echo $_smarty_tpl->tpl_vars['d']->value['h'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['ferrors']->value[$_smarty_tpl->tpl_vars['type']->value]['h']))) {?> class="dError"<?php }?>> <?php echo l10n('pixels');?>

                <?php if ((isset($_smarty_tpl->tpl_vars['ferrors']->value[$_smarty_tpl->tpl_vars['type']->value]['h']))) {?><span class="dErrorDesc" title="<?php echo $_smarty_tpl->tpl_vars['ferrors']->value[$_smarty_tpl->tpl_vars['type']->value]['h'];?>
">!</span><?php }?>
              </td>
            </tr>
<?php }?>
            <tr>
              <td><?php echo l10n('Sharpen');?>
</td>
              <td>
                <input type="text" name="d[<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
][sharpen]" maxlength="4" size="4"  value="<?php echo $_smarty_tpl->tpl_vars['d']->value['sharpen'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['ferrors']->value[$_smarty_tpl->tpl_vars['type']->value]['sharpen']))) {?> class="dError"<?php }?>> %
                <?php if ((isset($_smarty_tpl->tpl_vars['ferrors']->value[$_smarty_tpl->tpl_vars['type']->value]['sharpen']))) {?><span class="dErrorDesc" title="<?php echo $_smarty_tpl->tpl_vars['ferrors']->value[$_smarty_tpl->tpl_vars['type']->value]['sharpen'];?>
">!</span><?php }?>
              </td>
            </tr>
          </table>         </td>
      </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>

  <p style="margin:10px 0 0 0;<?php if ((isset($_smarty_tpl->tpl_vars['ferrors']->value))) {?> display:block;<?php }?>" class="sizeDetails">
    <?php echo l10n('Image Quality');?>

    <input type="text" name="resize_quality" value="<?php echo $_smarty_tpl->tpl_vars['resize_quality']->value;?>
" size="3" maxlength="3"<?php if ((isset($_smarty_tpl->tpl_vars['ferrors']->value['resize_quality']))) {?> class="dError"<?php }?>> %
    <?php if ((isset($_smarty_tpl->tpl_vars['ferrors']->value['resize_quality']))) {?><span class="dErrorDesc" title="<?php echo $_smarty_tpl->tpl_vars['ferrors']->value['resize_quality'];?>
">!</span><?php }?>
  </p>
  <p style="margin:10px 0 0 0;<?php if ((isset($_smarty_tpl->tpl_vars['ferrors']->value))) {?> display:block;<?php }?>" class="sizeDetails">
    <a href="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
&action=restore_settings" class="restore-settings-button"><?php echo l10n('Reset to default values');?>
</a>
  </p>

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
