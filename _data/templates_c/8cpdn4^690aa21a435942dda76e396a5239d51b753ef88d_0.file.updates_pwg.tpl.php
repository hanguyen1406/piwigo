<?php
/* Smarty version 4.3.1, created on 2024-08-10 07:51:23
  from '/var/www/html/piwigo/admin/themes/default/template/updates_pwg.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66b71bfb4a5986_93781690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '690aa21a435942dda76e396a5239d51b753ef88d' => 
    array (
      0 => '/var/www/html/piwigo/admin/themes/default/template/updates_pwg.tpl',
      1 => 1702327276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b71bfb4a5986_93781690 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/piwigo/include/smarty/libs/plugins/function.counter.php','function'=>'smarty_function_counter',),));
$_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin1->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
jQuery(document).ready(function() {
	jQuery('input[name="submit"]').click(function() {
    if(!confirm('<?php echo l10n('Are you sure?');?>
'))
      return false;
    jQuery(this).hide();
    jQuery('.autoupdate_bar').show();
	});
  jQuery('[name="understand"]').click(function() {
    jQuery('[name="submit"]').attr('disabled', !this.checked);
  });
});
<?php $_block_repeat=false;
echo $_block_plugin1->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['html_head'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['html_head'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'block_html_head'))) {
throw new SmartyException('block tag \'html_head\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('html_head', array());
$_block_repeat=true;
echo $_block_plugin2->block_html_head(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

<style type="text/css">
form { width: 750px; }
fieldset { padding-bottom: 30px; }
p, form p { text-align: left; margin-left:20px; }
li { margin: 5px; }

.badge-release {
  padding:5px 10px;
  border-radius: 5px;
}

a.badge-release:hover {
  text-decoration:none;
  color: currentColor;
}

.goto-update-page {
  padding:5px 10px;
  font-weight:bold;
}

.goto-update-page:hover {
  text-decoration:none;
}

.update-recommendation {
  margin-top:30px;
}

p.release .errors {margin:0}
</style>

<?php $_block_repeat=false;
echo $_block_plugin2->block_html_head(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php if ((isset($_smarty_tpl->tpl_vars['MINOR_RELEASE_PHP_REQUIRED']->value)) && (isset($_smarty_tpl->tpl_vars['MAJOR_RELEASE_PHP_REQUIRED']->value))) {?>
<div class="warnings">
  <i class="eiw-icon icon-attention"></i>
    <ul>
      <li> <?php echo l10n('Please upgrade your PHP version before any update.');?>
 </li>
    </ul>
</div>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['PIWIGO_CURRENT_VERSION']->value))) {?>
<p><i class="icon-info-circled-1"></i> <?php echo l10n('Currently running version %s',$_smarty_tpl->tpl_vars['PIWIGO_CURRENT_VERSION']->value);?>
</p>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['STEP']->value == 0) {
if ($_smarty_tpl->tpl_vars['CHECK_VERSION']->value) {?>
    <p><?php echo l10n('You are running the latest version of Piwigo.');?>
</p>
<?php } elseif ($_smarty_tpl->tpl_vars['DEV_VERSION']->value) {?>
    <p><?php echo l10n('You are running on development sources, no check possible.');?>
</p>
<?php } else { ?>
    <p><?php echo l10n('Check for update failed for unknown reasons.');?>
</p>
<?php }
}?>

<?php if ($_smarty_tpl->tpl_vars['STEP']->value == 1) {?>
<fieldset>
  <legend><span class="icon-ok icon-purple"></span><?php echo l10n('Two updates are available');?>
</legend>
<p class="release release-minor">
  <a href="<?php echo $_smarty_tpl->tpl_vars['MINOR_RELEASE_URL']->value;?>
" target="_blank" class="badge-release icon-green icon-tags"><?php echo $_smarty_tpl->tpl_vars['MINOR_VERSION']->value;?>
</a>
  <?php echo l10n('This is a minor update, with only bug corrections.');?>

<?php if ((isset($_smarty_tpl->tpl_vars['MINOR_RELEASE_PHP_REQUIRED']->value))) {?>
  <span class="errors icon-block"><?php echo l10n('Requires PHP %s',$_smarty_tpl->tpl_vars['MINOR_RELEASE_PHP_REQUIRED']->value);?>
</span>
<?php } else { ?>
  <a href="admin.php?page=updates&amp;step=2&amp;to=<?php echo $_smarty_tpl->tpl_vars['MINOR_VERSION']->value;?>
" class="icon-arrows-cw goto-update-page"><?php echo l10n('Update to Piwigo %s',$_smarty_tpl->tpl_vars['MINOR_VERSION']->value);?>
</a>
<?php }?>
</p>

<p class="release release-major">
  <a href="<?php echo $_smarty_tpl->tpl_vars['MAJOR_RELEASE_URL']->value;?>
" target="_blank" class="badge-release icon-blue icon-tags"><?php echo $_smarty_tpl->tpl_vars['MAJOR_VERSION']->value;?>
</a>
  <?php echo l10n('This is a major update, with <a href="%s">new exciting features</a>.',$_smarty_tpl->tpl_vars['MAJOR_RELEASE_URL']->value);?>

  <?php echo l10n('Some themes and plugins may be not available yet.');?>

<?php if ((isset($_smarty_tpl->tpl_vars['MAJOR_RELEASE_PHP_REQUIRED']->value))) {?>
  <span class="errors icon-block"><?php echo l10n('Requires PHP %s',$_smarty_tpl->tpl_vars['MAJOR_RELEASE_PHP_REQUIRED']->value);?>
</span>
<?php } else { ?>
  <a href="admin.php?page=updates&amp;step=3&amp;to=<?php echo $_smarty_tpl->tpl_vars['MAJOR_VERSION']->value;?>
" class="icon-arrows-cw goto-update-page"><?php echo l10n('Update to Piwigo %s',$_smarty_tpl->tpl_vars['MAJOR_VERSION']->value);?>
</a>
<?php }?>
</p>
<p class="update-recommendation">
  <span class="icon-info-circled-1"></span>
  <?php echo l10n('You can update to Piwigo %s directly, without upgrading to Piwigo %s (recommended).',$_smarty_tpl->tpl_vars['MAJOR_VERSION']->value,$_smarty_tpl->tpl_vars['MINOR_VERSION']->value);?>

</p>
</fieldset>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['STEP']->value == 2) {?>
<p>
  <a href="<?php echo $_smarty_tpl->tpl_vars['MINOR_RELEASE_URL']->value;?>
" target="_blank" class="badge-release icon-green icon-tags"><?php echo $_smarty_tpl->tpl_vars['MINOR_VERSION']->value;?>
</a>
</p>
<p>
  <?php echo l10n('A new version of Piwigo is available.');?>
<br>
  <?php echo l10n('This is a minor update, with only bug corrections.');?>

</p>
<form action="" method="post">
<p>
  <input type="submit" name="submit" value="<?php echo l10n('Update to Piwigo %s',$_smarty_tpl->tpl_vars['UPGRADE_TO']->value);?>
"<?php if ((isset($_smarty_tpl->tpl_vars['MINOR_RELEASE_PHP_REQUIRED']->value))) {?> disabled<?php }?>>
<?php if ((isset($_smarty_tpl->tpl_vars['MINOR_RELEASE_PHP_REQUIRED']->value))) {?>
  <span class="errors icon-block"><?php echo l10n('Requires PHP %s',$_smarty_tpl->tpl_vars['MINOR_RELEASE_PHP_REQUIRED']->value);?>
</span>
<?php }?>
</p>
<p class="autoupdate_bar" style="display:none;">&nbsp; <?php echo l10n('Update in progress...');?>
<br><img src="admin/themes/default/images/ajax-loader-bar.gif"></p>
<p><input type="hidden" name="upgrade_to" value="<?php echo $_smarty_tpl->tpl_vars['UPGRADE_TO']->value;?>
"></p>
</form>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['STEP']->value == 3) {?>
<p>
  <a href="<?php echo $_smarty_tpl->tpl_vars['MAJOR_RELEASE_URL']->value;?>
" target="_blank" class="badge-release icon-blue icon-tags"><?php echo $_smarty_tpl->tpl_vars['MAJOR_VERSION']->value;?>
</a>
</p>
<p>
  <?php echo l10n('A new version of Piwigo is available.');?>
<br>
  <?php echo l10n('This is a major update, with <a href="%s">new exciting features</a>.',$_smarty_tpl->tpl_vars['MAJOR_RELEASE_URL']->value);?>
 <?php echo l10n('Some themes and plugins may be not available yet.');?>

</p>
<form action="" method="post">

<?php echo smarty_function_counter(array('assign'=>'i'),$_smarty_tpl);?>

<fieldset>
  <legend><span class="icon-floppy icon-red"></span><?php echo l10n('Backup');?>
</legend>
  <p>
    <?php echo l10n('Always have a backup of your database and files.');?>

    <?php echo l10n('The best is to have them made automatically on a regular basis.');?>

    <?php echo l10n('If anything bad happens during the update, you would be able to restore a backup.');?>

  </p>
</fieldset>

<?php echo smarty_function_counter(array('assign'=>'i'),$_smarty_tpl);?>

<fieldset>
  <legend><span class="icon-cog icon-purple"></span><?php echo l10n('Update to Piwigo %s',$_smarty_tpl->tpl_vars['UPGRADE_TO']->value);?>
</legend>
<?php if (!empty($_smarty_tpl->tpl_vars['missing']->value['plugins'])) {?>
  <p><i><?php echo l10n('Following plugins may not be compatible with the new version of Piwigo:');?>
</i></p>
  <p><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['missing']->value['plugins'], 'plugin');
$_smarty_tpl->tpl_vars['plugin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->value) {
$_smarty_tpl->tpl_vars['plugin']->do_else = false;
?><li><a href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['uri'];?>
" class="externalLink"><?php echo $_smarty_tpl->tpl_vars['plugin']->value['name'];?>
</a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><br></p>
<?php }
if (!empty($_smarty_tpl->tpl_vars['missing']->value['themes'])) {?>
  <p><i><?php echo l10n('Following themes may not be compatible with the new version of Piwigo:');?>
</i></p>
  <p><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['missing']->value['themes'], 'theme');
$_smarty_tpl->tpl_vars['theme']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->do_else = false;
?><li><a href="<?php echo $_smarty_tpl->tpl_vars['theme']->value['uri'];?>
" class="externalLink"><?php echo $_smarty_tpl->tpl_vars['theme']->value['name'];?>
</a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><br></p>
<?php }?>
  <p>
<?php if (!empty($_smarty_tpl->tpl_vars['missing']->value['plugins']) || !empty($_smarty_tpl->tpl_vars['missing']->value['themes'])) {?>
  <p><label><input type="checkbox" name="understand"> &nbsp;<?php echo l10n('I decide to update anyway');?>
</label></p>
<?php }?>
  <p><input type="submit" name="submit" value="<?php echo l10n('Update to Piwigo %s',$_smarty_tpl->tpl_vars['UPGRADE_TO']->value);?>
" <?php if (!empty($_smarty_tpl->tpl_vars['missing']->value['plugins']) || !empty($_smarty_tpl->tpl_vars['missing']->value['themes']) || (isset($_smarty_tpl->tpl_vars['MAJOR_RELEASE_PHP_REQUIRED']->value))) {?>disabled="disabled"<?php }?>>
<?php if ((isset($_smarty_tpl->tpl_vars['MAJOR_RELEASE_PHP_REQUIRED']->value))) {?>
  <span class="errors icon-block"><?php echo l10n('Requires PHP %s',$_smarty_tpl->tpl_vars['MAJOR_RELEASE_PHP_REQUIRED']->value);?>
</span>
<?php }?>
  </p>
  <p class="autoupdate_bar" style="display:none;">&nbsp; <?php echo l10n('Update in progress...');?>
<br><img src="admin/themes/default/images/ajax-loader-bar.gif"></p>
</fieldset>

<p><input type="hidden" name="upgrade_to" value="<?php echo $_smarty_tpl->tpl_vars['UPGRADE_TO']->value;?>
"></p>
</form>
<?php }
}
}
