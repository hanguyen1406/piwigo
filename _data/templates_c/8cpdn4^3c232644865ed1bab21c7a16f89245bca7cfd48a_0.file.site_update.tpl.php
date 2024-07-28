<?php
/* Smarty version 4.3.1, created on 2024-06-22 14:58:00
  from '/var/www/html/piwigo/admin/themes/default/template/site_update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676e6782126f7_89309620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c232644865ed1bab21c7a16f89245bca7cfd48a' => 
    array (
      0 => '/var/www/html/piwigo/admin/themes/default/template/site_update.tpl',
      1 => 1702327276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6676e6782126f7_89309620 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/piwigo/include/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
$_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin1->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
$('#syncFiles label').click(function () {
  if ($("input[value='files']:checked").val()) {
    $("input[value='files']").closest("li").find("ul").show();
  } else {
    $("input[value='files']").closest("li").find("ul").hide();
  }
})

<?php $_block_repeat=false;
echo $_block_plugin1->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<div class="selectedAlbum site-url-path">
  <span class="icon-folder-open selectedAlbum-first"><?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
</span>
</div>

<?php if ((isset($_smarty_tpl->tpl_vars['update_result']->value))) {?>
<h3><?php echo $_smarty_tpl->tpl_vars['L_RESULT_UPDATE']->value;?>
</h3>
<ul>
  <li class="update_summary_new"><?php echo $_smarty_tpl->tpl_vars['update_result']->value['NB_NEW_CATEGORIES'];?>
 <?php echo l10n('albums added in the database');?>
</li>
  <li class="update_summary_new"><?php echo $_smarty_tpl->tpl_vars['update_result']->value['NB_NEW_ELEMENTS'];?>
 <?php echo l10n('photos added in the database');?>
</li>
  <li class="update_summary_del"><?php echo $_smarty_tpl->tpl_vars['update_result']->value['NB_DEL_CATEGORIES'];?>
 <?php echo l10n('albums deleted in the database');?>
</li>
  <li class="update_summary_del"><?php echo $_smarty_tpl->tpl_vars['update_result']->value['NB_DEL_ELEMENTS'];?>
 <?php echo l10n('photos deleted from the database');?>
</li>
  <li><?php echo $_smarty_tpl->tpl_vars['update_result']->value['NB_UPD_ELEMENTS'];?>
 <?php echo l10n('photos updated in the database');?>
</li>
  <li class="update_summary_err"><?php echo $_smarty_tpl->tpl_vars['update_result']->value['NB_ERRORS'];?>
 <?php echo l10n('errors during synchronization');?>
</li>
</ul>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['metadata_result']->value))) {?>
<h3><?php echo $_smarty_tpl->tpl_vars['L_RESULT_METADATA']->value;?>
</h3>
<ul>
  <li><?php echo $_smarty_tpl->tpl_vars['metadata_result']->value['NB_ELEMENTS_DONE'];?>
 <?php echo l10n('photos informations synchronized with files metadata');?>
</li>
  <li><?php echo $_smarty_tpl->tpl_vars['metadata_result']->value['NB_ELEMENTS_CANDIDATES'];?>
 <?php echo l10n('photos candidates for metadata synchronization');?>
</li>
  <li><?php echo l10n('Used metadata');?>
 : <?php echo $_smarty_tpl->tpl_vars['METADATA_LIST']->value;?>
</li>
</ul>
<?php }?>


<?php if (!empty($_smarty_tpl->tpl_vars['sync_errors']->value)) {?>
<h3><?php echo l10n('Error list');?>
</h3>
<div class="errors">
<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sync_errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
  <li>[<?php echo $_smarty_tpl->tpl_vars['error']->value['ELEMENT'];?>
] <?php echo $_smarty_tpl->tpl_vars['error']->value['LABEL'];?>
</li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
</div>
<h3><?php echo l10n('Errors caption');?>
</h3>
<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sync_error_captions']->value, 'caption');
$_smarty_tpl->tpl_vars['caption']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['caption']->value) {
$_smarty_tpl->tpl_vars['caption']->do_else = false;
?>
  <li><strong><?php echo $_smarty_tpl->tpl_vars['caption']->value['TYPE'];?>
</strong>: <?php echo $_smarty_tpl->tpl_vars['caption']->value['LABEL'];?>
</li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['sync_infos']->value)) {?>
<h3><?php echo l10n('Detailed informations');?>
</h3>
<div class="infos">
<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sync_infos']->value, 'info');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?>
  <li>[<?php echo $_smarty_tpl->tpl_vars['info']->value['ELEMENT'];?>
] <?php echo $_smarty_tpl->tpl_vars['info']->value['LABEL'];?>
</li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
</div>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['introduction']->value))) {?>
<form action="" method="post" id="update">

	<fieldset id="syncFiles">
		<legend><span class="icon-docs icon-blue"></span><?php echo l10n('synchronize files structure with database');?>
</legend>
		<ul>
			<li><label><input type="radio" name="sync" value="" <?php if (empty($_smarty_tpl->tpl_vars['introduction']->value['sync'])) {?>checked="checked"<?php }?>> <?php echo l10n('nothing');?>
</label></li>
			<li><label><input type="radio" name="sync" value="dirs" <?php if ('dirs' == $_smarty_tpl->tpl_vars['introduction']->value['sync']) {?>checked="checked"<?php }?>> <?php echo l10n('only directories');?>
</label></li>

			<li><label><input type="radio" name="sync" value="files" <?php if ('files' == $_smarty_tpl->tpl_vars['introduction']->value['sync']) {?>checked="checked"<?php }?>> <?php echo l10n('directories + files');?>
</label>
				<ul style="display:none;padding-left:3em">
					<li><label><input type="checkbox" name="display_info" value="1" <?php if ($_smarty_tpl->tpl_vars['introduction']->value['display_info']) {?>checked="checked"<?php }?>> <?php echo l10n('display maximum informations (added albums and photos, deleted albums and photos)');?>
</label></li>
					<li><label><input type="checkbox" name="add_to_caddie" value="1" <?php if ($_smarty_tpl->tpl_vars['introduction']->value['add_to_caddie']) {?>checked="checked"<?php }?>> <?php echo l10n('add new photos to caddie');?>
</label></li>
					<li><label><?php echo l10n('Who can see these photos?');?>
 <select name="privacy_level"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['introduction']->value['privacy_level_options'],'selected'=>$_smarty_tpl->tpl_vars['introduction']->value['privacy_level_selected']),$_smarty_tpl);?>
</select></label></li>
				</ul>
			</li>
		</ul>
	</fieldset>

	<fieldset id="syncMetadata">
		<legend><span class="icon-hdd icon-red"></span><?php echo l10n('synchronize files metadata with database photos informations');?>
</legend>
		<label><input type="checkbox" name="sync_meta" <?php if ($_smarty_tpl->tpl_vars['introduction']->value['sync_meta']) {?>checked="checked"<?php }?>> <?php echo l10n('Synchronize metadata');?>
 (<?php echo $_smarty_tpl->tpl_vars['METADATA_LIST']->value;?>
)</label>
		<ul style="padding-left:3em">
	  		<li>
	  			<label><input type="checkbox" name="meta_all" <?php if ($_smarty_tpl->tpl_vars['introduction']->value['meta_all']) {?>checked="checked"<?php }?>> <?php echo l10n('even already synchronized photos');?>
</label>
	  		</li>
	  		<li>
	  			<label><input type="checkbox" name="meta_empty_overrides" <?php if ($_smarty_tpl->tpl_vars['introduction']->value['meta_empty_overrides']) {?>checked="checked"<?php }?>> <?php echo l10n('overrides existing values with empty ones');?>
</label>
	  		</li>
		</ul>
	</fieldset>

  <fieldset id="syncSimulate">
    <legend><span class="icon-chart-bar icon-green"></span><?php echo l10n('Simulation');?>
</legend>
    <ul><li><label><input type="checkbox" name="simulate" value="1" checked="checked"> <?php echo l10n('only perform a simulation (no change in database will be made)');?>
</label></li></ul>
  </fieldset>

  <fieldset id="catSubset">
    <legend><span class="icon-filter icon-purple"></span><?php echo l10n('reduce to single existing albums');?>
</legend>
    <ul>
    <li>
    <select class="categoryList" name="cat" size="10">
      <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['category_options']->value,'selected'=>$_smarty_tpl->tpl_vars['category_options_selected']->value),$_smarty_tpl);?>

    </select>
    </li>

    <li><label><input type="checkbox" name="subcats-included" value="1" <?php if ($_smarty_tpl->tpl_vars['introduction']->value['subcats_included']) {?>checked="checked"<?php }?>> <?php echo l10n('Search in sub-albums');?>
</label></li>
    </ul>
  </fieldset>

  <p class="bottomButtons syncBtn">
    <button class="icon-exchange buttonGradient" type="submit" value="" name="submit"> <?php echo l10n('Synchronize');?>
 </button>
  </p>
</form>
<?php }
}
}
