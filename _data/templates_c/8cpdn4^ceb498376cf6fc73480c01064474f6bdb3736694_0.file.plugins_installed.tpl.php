<?php
/* Smarty version 4.3.1, created on 2024-06-22 10:32:30
  from '/var/www/html/piwigo/admin/themes/default/template/plugins_installed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676a83e074501_77839386',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ceb498376cf6fc73480c01064474f6bdb3736694' => 
    array (
      0 => '/var/www/html/piwigo/admin/themes/default/template/plugins_installed.tpl',
      1 => 1702327276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6676a83e074501_77839386 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/piwigo/include/smarty/libs/plugins/function.counter.php','function'=>'smarty_function_counter',),));
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.ajaxmanager','load'=>'footer','require'=>'jquery','path'=>'themes/default/js/plugins/jquery.ajaxmanager.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'common','load'=>'footer','path'=>'admin/themes/default/js/common.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.cookie','path'=>'themes/default/js/jquery.cookie.js','load'=>'footer'),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.confirm','load'=>'footer','require'=>'jquery','path'=>'themes/default/js/plugins/jquery-confirm.min.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/default/js/plugins/jquery-confirm.min.css"),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'tiptip','load'=>'header','path'=>'themes/default/js/plugins/jquery.tipTip.minified.js'),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'pluginInstallated','load'=>'footer','require'=>'jquery.ajaxmanager','path'=>'admin/themes/default/js/plugins_installated.js'),$_smarty_tpl ) );?>


<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin1->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
/* incompatible message */
var incompatible_msg = '<?php echo strtr((string)l10n('WARNING! This plugin does not seem to be compatible with this version of Piwigo.'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
var activate_msg = '\n<?php echo strtr((string)l10n('Do you want to activate anyway?'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
var deactivate_all_msg = '<?php echo l10n('Deactivate all');?>
';

/* group action */
const pwg_token = '<?php echo $_smarty_tpl->tpl_vars['PWG_TOKEN']->value;?>
';
const nb_plugin = {
  'all' : <?php echo $_smarty_tpl->tpl_vars['count_types_plugins']->value["active"];?>
 + <?php echo $_smarty_tpl->tpl_vars['count_types_plugins']->value["inactive"];?>
 + <?php echo $_smarty_tpl->tpl_vars['count_types_plugins']->value["missing"];?>
 + <?php echo $_smarty_tpl->tpl_vars['count_types_plugins']->value["merged"];?>
,
  'active' : <?php echo $_smarty_tpl->tpl_vars['count_types_plugins']->value["active"];?>
,
  'inactive' : <?php echo $_smarty_tpl->tpl_vars['count_types_plugins']->value["inactive"];?>
,
  'other' : <?php echo $_smarty_tpl->tpl_vars['count_types_plugins']->value["missing"];?>
 + <?php echo $_smarty_tpl->tpl_vars['count_types_plugins']->value["merged"];?>
,
};
const are_you_sure_msg  = '<?php echo strtr((string)l10n('Are you sure?'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
const confirm_msg = '<?php echo l10n("Yes, I am sure");?>
';
const cancel_msg = "<?php echo l10n("No, I have changed my mind");?>
";
let delete_plugin_msg = '<?php echo strtr((string)l10n('Are you sure you want to delete the plugin "%s"?'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
let deleted_plugin_msg = '<?php echo strtr((string)l10n('Plugin "%s" deleted!'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
let restore_plugin_msg = '<?php echo strtr((string)l10n('Are you sure you want to restore the plugin "%s"?'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
let uninstall_plugin_msg = '<?php echo strtr((string)l10n('Are you sure you want to uninstall the plugin "%s"?'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
const restore_tip_msg = "<?php echo strtr((string)l10n('Restore default configuration. You will lose your plugin settings!'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
";
const plugin_added_str = '<?php echo strtr((string)l10n('Activated'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
const plugin_deactivated_str = '<?php echo strtr((string)l10n('Deactivated'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
const plugin_restored_str = '<?php echo strtr((string)l10n('Restored'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
const plugin_action_error = '<?php echo strtr((string)l10n('an error happened'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
const not_webmaster = '<?php echo strtr((string)l10n('Webmaster status required'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
const nothing_found = '<?php echo strtr((string)l10n('No plugins found'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
const x_plugins_found = '<?php echo strtr((string)l10n('%s plugins found'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
const plugin_found = '<?php echo strtr((string)l10n('%s plugin found'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
const isWebmaster = <?php echo $_smarty_tpl->tpl_vars['isWebmaster']->value;?>
;
const view_selector = '<?php echo $_smarty_tpl->tpl_vars['view_selector']->value;?>
';
const str_restore_def = '<?php echo strtr((string)l10n('While restoring this plugin, it will be reset to its original parameters and associated data is going to be reset'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';

const show_details = <?php if ($_smarty_tpl->tpl_vars['show_details']->value) {?> true <?php } else { ?> false <?php }?>;

let searchParams = new URLSearchParams(window.location.search);
let plugin_filter = searchParams.get('filter');
<?php $_block_repeat=false;
echo $_block_plugin1->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php if ((isset($_smarty_tpl->tpl_vars['plugins']->value))) {?>

<?php $_smarty_tpl->_assignInScope('field_name', 'null');?> <?php echo smarty_function_counter(array('start'=>0,'assign'=>'i'),$_smarty_tpl);?>
 
<div class="pluginTypeFilter">
<input type="radio" name="p-filter" class="filter" id="seeAll" <?php if ($_smarty_tpl->tpl_vars['count_types_plugins']->value["active"] <= 0) {?> checked <?php }?>><label for="seeAll"><?php echo l10n('All');?>
<span class="filter-badge">X</span></label><input type="radio" name="p-filter" class="filter" id="seeActive" <?php if ($_smarty_tpl->tpl_vars['count_types_plugins']->value["active"] > 0) {?> checked <?php }?>><label class="filterLabel" for="seeActive"><?php echo l10n('Activated');?>
<span class="filter-badge">X</span></label><input type="radio" name="p-filter" class="filter" id="seeInactive"><label class="filterLabel" for="seeInactive"><?php echo l10n('Deactivated');?>
<span class="filter-badge">X</span></label><input type="radio" name="p-filter" class="filter" id="seeOther"><label class="filterLabel" for="seeOther"><?php echo l10n('Other');?>
<span class="filter-badge">X</span></label>
</div>

<div class="nbPluginsSearch"></div>

<div class="pluginFilter"> 
  <span class="icon-search search-icon"></span>
  <span class="icon-cancel search-cancel"></span>
  <input class='search-input' type="text" placeholder="<?php echo l10n('Search');?>
">
</div>

<div class="AlbumViewSelector">
    <input type="radio" name="layout" class="switchLayout" id="displayClassic" <?php if ($_smarty_tpl->tpl_vars['view_selector']->value == 'classic') {?>checked<?php }?>/><label for="displayClassic"><span class="icon-pause firstIcon tiptip" title="<?php echo l10n('Classic View');?>
"></span></label><input type="radio" name="layout" class="switchLayout" id="displayLine" <?php if ($_smarty_tpl->tpl_vars['view_selector']->value == 'line') {?>checked<?php }?>/><label for="displayLine"><span class="icon-th-list tiptip" title="<?php echo l10n('Line View');?>
"></span></label><input type="radio" name="layout" class="switchLayout" id="displayCompact" <?php if ($_smarty_tpl->tpl_vars['view_selector']->value == 'compact') {?>checked<?php }?>/><label for="displayCompact"><span class="icon-th-large lastIcon tiptip" title="<?php echo l10n('Compact View');?>
"></span></label>
</div>  

<div class="pluginContainer <?php if ($_smarty_tpl->tpl_vars['view_selector']->value == 'classic') {?> classic-form <?php } elseif ($_smarty_tpl->tpl_vars['view_selector']->value == 'line') {?> line-form <?php } elseif ($_smarty_tpl->tpl_vars['view_selector']->value == 'compact') {?> compact-form <?php } else { ?> <?php }?>">

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plugins']->value, 'plugin', false, NULL, 'plugins_loop', array (
));
$_smarty_tpl->tpl_vars['plugin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->value) {
$_smarty_tpl->tpl_vars['plugin']->do_else = false;
?>

<?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['AUTHOR'])) {
if (!empty($_smarty_tpl->tpl_vars['plugin']->value['AUTHOR_URL'])) {?>
      <?php $_smarty_tpl->_assignInScope('author', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sprintf' ][ 0 ], array( "<a href='%s'>%s</a>",$_smarty_tpl->tpl_vars['plugin']->value['AUTHOR_URL'],$_smarty_tpl->tpl_vars['plugin']->value['AUTHOR'] )));
} else { ?>
      <?php $_smarty_tpl->_assignInScope('author', (('<u>').($_smarty_tpl->tpl_vars['plugin']->value['AUTHOR'])).('</u>'));
}
}
if (!empty($_smarty_tpl->tpl_vars['plugin']->value['VISIT_URL'])) {?>
    <?php $_smarty_tpl->_assignInScope('version', (((("<a class='externalLink' href='").($_smarty_tpl->tpl_vars['plugin']->value['VISIT_URL'])).("'>")).($_smarty_tpl->tpl_vars['plugin']->value['VERSION'])).("</a>"));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('version', $_smarty_tpl->tpl_vars['plugin']->value['VERSION']);
}?>
<div id="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['ID'];?>
" class="pluginBox pluginMiniBox <?php echo $_smarty_tpl->tpl_vars['plugin']->value['STATE'];?>
 plugin-<?php echo $_smarty_tpl->tpl_vars['plugin']->value['STATE'];?>
">

    <div class="AddPluginSuccess pluginNotif">
      <label class="icon-ok">
        <span><?php echo l10n('Plugin activated');?>
</span>
      </label>
    </div>

    <div class="DeactivatePluginSuccess pluginNotif">
      <label class="icon-ok">
        <span><?php echo l10n('Plugin deactivated');?>
</span>
      </label>
    </div>

    <div class="RestorePluginSuccess pluginNotif">
      <label class="icon-ok">
        <span><?php echo l10n('Plugin deactivated');?>
</span>
      </label>
    </div>

    <div class="PluginActionError pluginNotif">
      <label class="icon-cancel">
        <span><?php echo l10n('Plugin deactivated');?>
</span>
      </label>
    </div>

    <div class="pluginContent">
      <div class="PluginOptionsIcons">
<?php if ($_smarty_tpl->tpl_vars['plugin']->value['STATE'] == 'active' || $_smarty_tpl->tpl_vars['plugin']->value['STATE'] == 'inactive') {?>
          <a class="icon-ellipsis-v showOptions showInfo" ></a>
<?php }?>
      </div>
<?php if ($_smarty_tpl->tpl_vars['plugin']->value['STATE'] == 'active' || $_smarty_tpl->tpl_vars['plugin']->value['STATE'] == 'inactive') {?>
    <label class="switch">
      <input type="checkbox" id="toggleSelectionMode" <?php ob_start();
echo $_smarty_tpl->tpl_vars['plugin']->value['STATE'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 === "active") {?>checked<?php }?>>
      <span class="slider round"></span>
    </label>
<?php }?>
      <div class="pluginActionsSmallIcons">
<?php if ($_smarty_tpl->tpl_vars['plugin']->value['STATE'] == 'active') {
if ($_smarty_tpl->tpl_vars['plugin']->value['SETTINGS_URL'] != '') {?>
            <div class="tiptip" title="<?php echo l10n('Settings');?>
"> 
              <a href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['SETTINGS_URL'];?>
"><span class="icon-cog"></span></a>
            </div>
<?php } else { ?>
            <div class="tiptip" title="<?php echo l10n('N/A');?>
">
              <a><i class="icon-cog"></i></a>
            </div>
<?php }
} elseif ($_smarty_tpl->tpl_vars['plugin']->value['STATE'] == 'inactive') {
if ($_smarty_tpl->tpl_vars['plugin']->value['SETTINGS_URL'] != '') {?>
              <div class="tiptip" title="<?php echo l10n('Settings');?>
"> 
                  <a href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['SETTINGS_URL'];?>
"><span class="icon-cog"></span></a>
              </div>
<?php } else { ?>
              <div class="tiptip" title="<?php echo l10n('N/A');?>
"> 
                  <a><i class="icon-cog"></i></a>
              </div>
<?php }
} elseif ($_smarty_tpl->tpl_vars['plugin']->value['STATE'] == 'missing') {?>
          <div class="tiptip" title="<?php echo l10n('Uninstall');?>
">
            <a class="uninstall-plugin-button"><?php echo l10n('Uninstall');?>
</a>
          </div>
<?php } elseif ($_smarty_tpl->tpl_vars['plugin']->value['STATE'] == 'merged' && $_smarty_tpl->tpl_vars['CONF_ENABLE_EXTENSIONS_INSTALL']->value) {?>
          <div class="tiptip" title="<?php echo l10n('Delete');?>
">
            <a class="" href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['U_ACTION'];?>
&amp;action=delete"><?php echo l10n('Delete');?>
</a>
          </div>
<?php }?>
      </div>
      
      <div class="PluginOptionsBlock dropdown">
        <div class="dropdown-option-content"> <?php if (!empty($_smarty_tpl->tpl_vars['author']->value)) {
echo l10n('By %s',$_smarty_tpl->tpl_vars['author']->value);?>
 | <?php }
echo l10n('Version');?>
 <?php echo $_smarty_tpl->tpl_vars['version']->value;?>
</div>
        <div class="pluginDescCompact">
          <?php echo $_smarty_tpl->tpl_vars['plugin']->value['DESC'];?>

        </div>
          <a class="dropdown-option icon-back-in-time plugin-restore separator-top tiptip" title="<?php echo l10n('While restoring this plugin, it will be reset to its original parameters and associated data is going to be reset');?>
"><?php echo l10n('Restore');?>
</a>
<?php if ($_smarty_tpl->tpl_vars['CONF_ENABLE_EXTENSIONS_INSTALL']->value) {?>
          <a class="dropdown-option icon-trash delete-plugin-button separator-top"><?php echo l10n('Delete');?>
</a>
<?php }?>
      </div>
      <div class="pluginName" data-title="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['NAME'];?>
">
        <?php echo $_smarty_tpl->tpl_vars['plugin']->value['NAME'];?>

      </div>
      <div class="pluginDesc">
        <?php echo $_smarty_tpl->tpl_vars['plugin']->value['DESC'];?>

      </div>
      <div class="pluginActions">
<?php if ($_smarty_tpl->tpl_vars['plugin']->value['STATE'] == 'active') {
if ($_smarty_tpl->tpl_vars['plugin']->value['SETTINGS_URL'] != '') {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['SETTINGS_URL'];?>
" class="pluginActionLevel1 icon-cog"><?php echo l10n('Settings');?>
</a>
<?php } else { ?>
            <a class="pluginUnavailableAction icon-cog tiptip" title="<?php echo l10n('N/A');?>
"><?php echo l10n('Settings');?>
</a>
<?php }
} elseif ($_smarty_tpl->tpl_vars['plugin']->value['STATE'] == 'inactive') {
if ($_smarty_tpl->tpl_vars['plugin']->value['SETTINGS_URL'] != '') {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['SETTINGS_URL'];?>
" class="pluginUnavailableAction icon-cog"><?php echo l10n('Settings');?>
</a>
<?php } else { ?>
            <a class="pluginUnavailableAction icon-cog tiptip" title="<?php echo l10n('N/A');?>
"><?php echo l10n('Settings');?>
</a>
<?php }
} elseif ($_smarty_tpl->tpl_vars['plugin']->value['STATE'] == 'missing') {?>
          <a class="pluginActionLevel3 uninstall-plugin-button"><?php echo l10n('Uninstall');?>
</a>
<?php } elseif ($_smarty_tpl->tpl_vars['plugin']->value['STATE'] == 'merged' && $_smarty_tpl->tpl_vars['CONF_ENABLE_EXTENSIONS_INSTALL']->value) {?>
          <a class="pluginActionLevel3" href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['U_ACTION'];?>
&amp;action=delete"><?php echo l10n('Delete');?>
</a>
<?php }?>
      </div>
    </div>
    
  </div> 
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
}
