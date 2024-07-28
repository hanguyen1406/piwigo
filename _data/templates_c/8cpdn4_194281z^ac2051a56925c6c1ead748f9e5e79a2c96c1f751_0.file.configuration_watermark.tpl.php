<?php
/* Smarty version 4.3.1, created on 2024-06-22 14:55:35
  from '/var/www/html/piwigo/admin/themes/default/template/configuration_watermark.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676e5e7e5a8c1_77556717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac2051a56925c6c1ead748f9e5e79a2c96c1f751' => 
    array (
      0 => '/var/www/html/piwigo/admin/themes/default/template/configuration_watermark.tpl',
      1 => 1702327276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6676e5e7e5a8c1_77556717 (Smarty_Internal_Template $_smarty_tpl) {
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
  function onWatermarkChange() {
    var val = jQuery("#wSelect").val();
    if (val.length) {
      jQuery("#wImg").attr('src', '<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
'+val).show();
    }
    else {
      jQuery("#wImg").hide();
    }
  }

  onWatermarkChange();

  jQuery("#wSelect").bind("change", onWatermarkChange);

  if (jQuery("input[name='w[position]']:checked").val() == 'custom') {
    jQuery("#positionCustomDetails").show();
  }

  jQuery("input[name='w[position]']").change(function(){
    if (jQuery(this).val() == 'custom') {
      jQuery("#positionCustomDetails").show();
    }
    else {
      jQuery("#positionCustomDetails").hide();
    }
  });

  jQuery(".addWatermarkOpen").click(function(){
    jQuery("#addWatermark, #selectWatermark").toggle();
		return false;
  });
}());
<?php $_block_repeat=false;
echo $_block_plugin1->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
" class="properties" enctype="multipart/form-data">

<div id="configContent">

  <fieldset id="watermarkConf" class="no-border">
    <legend></legend>
    <ul>
      <li>
        <span id="selectWatermark"<?php if ((isset($_smarty_tpl->tpl_vars['ferrors']->value['watermarkImage']))) {?> style="display:none"<?php }?>><label><?php echo l10n('Select a file');?>
</label>
          <select name="w[file]" id="wSelect">
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['watermark_files']->value,'selected'=>$_smarty_tpl->tpl_vars['watermark']->value['file']),$_smarty_tpl);?>

          </select>

          <?php echo l10n('... or ');?>
<a href="#" class="addWatermarkOpen"><?php echo l10n('add a new watermark');?>
</a>
          <br>
          <img id="wImg"></img>
        </span>

        <span id="addWatermark"<?php if ((isset($_smarty_tpl->tpl_vars['ferrors']->value['watermarkImage']))) {?> style="display:inline"<?php }?>>
          <?php echo l10n('add a new watermark');?>
 <?php echo l10n('... or ');?>
<a href="#" class="addWatermarkOpen"><?php echo l10n('Select a file');?>
</a>

          <br>
          <input type="file" size="60" id="watermarkImage" name="watermarkImage"<?php if ((isset($_smarty_tpl->tpl_vars['ferrors']->value['watermarkImage']))) {?> class="dError"<?php }?>> (png)
          <?php if ((isset($_smarty_tpl->tpl_vars['ferrors']->value['watermarkImage']))) {?><span class="dErrorDesc" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'htmlspecialchars' ][ 0 ], array( $_smarty_tpl->tpl_vars['ferrors']->value['watermarkImage'] ));?>
">!</span><?php }?>
        </span>
      </li>

      <li>
        <label>
          <?php echo l10n('Apply watermark if width is bigger than');?>

          <input  size="4" maxlength="4" type="text" name="w[minw]" value="<?php echo $_smarty_tpl->tpl_vars['watermark']->value['minw'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['ferrors']->value['watermark']['minw']))) {?> class="dError"<?php }?>>
        </label>
        <?php echo l10n('pixels');?>

      </li>

      <li>
        <label>
          <?php echo l10n('Apply watermark if height is bigger than');?>

          <input  size="4" maxlength="4" type="text" name="w[minh]" value="<?php echo $_smarty_tpl->tpl_vars['watermark']->value['minh'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['ferrors']->value['watermark']['minh']))) {?> class="dError"<?php }?>>
        </label>
        <?php echo l10n('pixels');?>

      </li>

      <li>
        <label><?php echo l10n('Position');?>
</label>
        <br>
        <div id="watermarkPositionBox">
          <label class="right font-checkbox"><?php echo l10n('top right corner');?>
 <span class="icon-dot-circled"></span><input name="w[position]" type="radio" value="topright"<?php if ($_smarty_tpl->tpl_vars['watermark']->value['position'] == 'topright') {?> checked="checked"<?php }?>></label>
          <label class="font-checkbox"><span class="icon-dot-circled"></span><input name="w[position]" type="radio" value="topleft"<?php if ($_smarty_tpl->tpl_vars['watermark']->value['position'] == 'topleft') {?> checked="checked"<?php }?>> <?php echo l10n('top left corner');?>
</label>
          <label class="middle font-checkbox"><span class="icon-dot-circled"></span><input name="w[position]" type="radio" value="middle"<?php if ($_smarty_tpl->tpl_vars['watermark']->value['position'] == 'middle') {?> checked="checked"<?php }?>> <?php echo l10n('middle');?>
</label>
          <label class="right font-checkbox"><?php echo l10n('bottom right corner');?>
 <span class="icon-dot-circled"></span><input name="w[position]" type="radio" value="bottomright"<?php if ($_smarty_tpl->tpl_vars['watermark']->value['position'] == 'bottomright') {?> checked="checked"<?php }?>></label>
          <label class="font-checkbox"><span class="icon-dot-circled"></span><input name="w[position]" type="radio" value="bottomleft"<?php if ($_smarty_tpl->tpl_vars['watermark']->value['position'] == 'bottomleft') {?> checked="checked"<?php }?>> <?php echo l10n('bottom left corner');?>
</label>
        </div>

        <label class="font-checkbox" style="display:block;margin-top:10px;font-weight:normal;"><span class="icon-dot-circled"></span><input name="w[position]" type="radio" value="custom"<?php if ($_smarty_tpl->tpl_vars['watermark']->value['position'] == 'custom') {?> checked="checked"<?php }?>> <?php echo l10n('custom');?>
</label>

        <div id="positionCustomDetails">
          <label><?php echo l10n('X Position');?>

            <input size="3" maxlength="3" type="text" name="w[xpos]" value="<?php echo $_smarty_tpl->tpl_vars['watermark']->value['xpos'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['ferrors']->value['watermark']['xpos']))) {?> class="dError"<?php }?>>%
            <?php if ((isset($_smarty_tpl->tpl_vars['ferrors']->value['watermark']['xpos']))) {?><span class="dErrorDesc" title="<?php echo $_smarty_tpl->tpl_vars['ferrors']->value['watermark']['xpos'];?>
">!</span><?php }?>
          </label>

          <br>
          <label><?php echo l10n('Y Position');?>

            <input size="3" maxlength="3" type="text" name="w[ypos]" value="<?php echo $_smarty_tpl->tpl_vars['watermark']->value['ypos'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['ferrors']->value['watermark']['ypos']))) {?> class="dError"<?php }?>>%
            <?php if ((isset($_smarty_tpl->tpl_vars['ferrors']->value['watermark']['ypos']))) {?><span class="dErrorDesc" title="<?php echo $_smarty_tpl->tpl_vars['ferrors']->value['watermark']['ypos'];?>
">!</span><?php }?>
          </label>

          <br>
          <label><?php echo l10n('X Repeat');?>

            <input size="3" maxlength="3" type="text" name="w[xrepeat]" value="<?php echo $_smarty_tpl->tpl_vars['watermark']->value['xrepeat'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['ferrors']->value['watermark']['xrepeat']))) {?> class="dError"<?php }?>>
            <?php if ((isset($_smarty_tpl->tpl_vars['ferrors']->value['watermark']['xrepeat']))) {?><span class="dErrorDesc" title="<?php echo $_smarty_tpl->tpl_vars['ferrors']->value['watermark']['xrepeat'];?>
">!</span><?php }?>
          </label>

					<br>
					<label><?php echo l10n('Y Repeat');?>

						<input size="3" maxlength="3" type="text" name="w[yrepeat]" value="<?php echo $_smarty_tpl->tpl_vars['watermark']->value['yrepeat'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['ferrors']->value['watermark']['yrepeat']))) {?> class="dError"<?php }?>>
						<?php if ((isset($_smarty_tpl->tpl_vars['ferrors']->value['watermark']['yrepeat']))) {?><span class="dErrorDesc" title="<?php echo $_smarty_tpl->tpl_vars['ferrors']->value['watermark']['yrepeat'];?>
">!</span><?php }?>
					</label>

        </div>
      </li>

      <li>
        <label><?php echo l10n('Opacity');?>
</label>
        <input size="3" maxlength="3" type="text" name="w[opacity]" value="<?php echo $_smarty_tpl->tpl_vars['watermark']->value['opacity'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['ferrors']->value['watermark']['opacity']))) {?> class="dError"<?php }?>> %
        <?php if ((isset($_smarty_tpl->tpl_vars['ferrors']->value['watermark']['opacity']))) {?><span class="dErrorDesc" title="<?php echo $_smarty_tpl->tpl_vars['ferrors']->value['watermark']['opacity'];?>
">!</span><?php }?>
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
