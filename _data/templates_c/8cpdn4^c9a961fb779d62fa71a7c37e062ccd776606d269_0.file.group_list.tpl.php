<?php
/* Smarty version 4.3.1, created on 2024-08-05 10:02:21
  from '/var/www/html/piwigo/admin/themes/default/template/group_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66b0a32de9c297_51124722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9a961fb779d62fa71a7c37e062ccd776606d269' => 
    array (
      0 => '/var/www/html/piwigo/admin/themes/default/template/group_list.tpl',
      1 => 1702327276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/colorbox.inc.tpl' => 1,
  ),
),false)) {
function content_66b0a32de9c297_51124722 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'groupContent' => 
  array (
    'compiled_filepath' => '/var/www/html/piwigo/_data/templates_c/8cpdn4^c9a961fb779d62fa71a7c37e062ccd776606d269_0.file.group_list.tpl.php',
    'uid' => 'c9a961fb779d62fa71a7c37e062ccd776606d269',
    'call_name' => 'smarty_template_function_groupContent_61901921166b0a32de522e5_84436686',
  ),
));
$_smarty_tpl->_subTemplateRender('file:include/colorbox.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin1->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
var pwg_token = "<?php echo $_smarty_tpl->tpl_vars['PWG_TOKEN']->value;?>
";
var str_member_default = "<?php echo strtr((string)l10n('member'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
"
var str_members_default = "<?php echo strtr((string)l10n('members'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
"
var str_group_created = "<?php echo strtr((string)l10n('Group added'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
"
var str_renaming_done = "<?php echo strtr((string)l10n('Group renamed'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
"
var str_name_taken = "<?php echo strtr((string)l10n('Name is already taken'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
"
var str_name_not_empty = "<?php echo strtr((string)l10n('Name field must not be empty'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
"
var str_group_deleted = '<?php echo strtr((string)l10n('Group "%s" succesfully deleted'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
'
var str_groups_deleted = '<?php echo l10n('Groups \{%s\} succesfully deleted');?>
'
var str_set_default = "<?php echo strtr((string)l10n('Set as group for new users'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
"
var str_unset_default = "<?php echo strtr((string)l10n('Unset as group for new users'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
"
var str_delete = '<?php echo strtr((string)l10n('Are you sure you want to delete group "%s"?'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
'
var str_yes_delete_confirmation = "<?php echo strtr((string)l10n('Yes, delete'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
"
var str_no_delete_confirmation = "<?php echo strtr((string)l10n("No, I have changed my mind"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
"
var str_user_associated = "<?php echo strtr((string)l10n("User associated"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
"
var str_user_dissociate = "<?php echo strtr((string)l10n('Dissociate user from this group'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
"
var str_user_dissociated = '<?php echo strtr((string)l10n('User "%s" dissociated from this group'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
'
var str_user_list = "<?php echo strtr((string)l10n('Manage the members'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
"
var str_merged_into = '<?php echo l10n('Group(s) \{%s1\} succesfully merged into "%s2"');?>
'
var str_copy = '<?php echo strtr((string)l10n(' (copy)'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
'
var str_other_copy = '<?php echo strtr((string)l10n(' (copy %s)'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
'

var serverKey = '<?php echo $_smarty_tpl->tpl_vars['CACHE_KEYS']->value['users'];?>
'
var serverId = '<?php echo $_smarty_tpl->tpl_vars['CACHE_KEYS']->value['_hash'];?>
'
var rootUrl = '<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
'

$(document).on('keydown', function (e) {
  if ( e.keyCode === 27) { // ESC button
    $("#UserList").fadeOut();
  }
})
$(document).on('click', function (e) {
  if ($(e.target).closest(".UserListPopInContainer").length === 0) {
    $("#UserList").fadeOut();
  }
});

var usersCache = new UsersCache({
  serverKey: '<?php echo $_smarty_tpl->tpl_vars['CACHE_KEYS']->value['users'];?>
',
  serverId: '<?php echo $_smarty_tpl->tpl_vars['CACHE_KEYS']->value['_hash'];?>
',
  rootUrl: '<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
'
});

usersCache.selectize(jQuery('select.UserSearch'));
<?php $_block_repeat=false;
echo $_block_plugin1->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'common','load'=>'footer','path'=>'admin/themes/default/js/common.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'group_list','load'=>'footer','path'=>'admin/themes/default/js/group_list.js'),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.selectize','load'=>'footer','path'=>'themes/default/js/plugins/selectize.min.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/default/js/plugins/selectize.".((string)$_smarty_tpl->tpl_vars['themeconf']->value['colorscheme']).".css"),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'LocalStorageCache','load'=>'footer','path'=>'admin/themes/default/js/LocalStorageCache.js'),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.confirm','load'=>'footer','require'=>'jquery','path'=>'themes/default/js/plugins/jquery-confirm.min.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/default/js/plugins/jquery-confirm.min.css"),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"admin/themes/default/fontello/css/animation.css",'order'=>10),$_smarty_tpl ) );?>
 



<div class="selection-mode-group-manager">
  <label class="switch">
    <input type="checkbox" id="toggleSelectionMode">
    <span class="slider round"></span>
  </label>
  <p><?php echo l10n('Selection mode');?>
</p>
</div>

<div id="selection-mode-block" class="in-selection-mode">
  <div class="Selection-mode-content">
   <p id="nothing-selected"><?php echo l10n('No groups selected, no actions possible.');?>
</p>
   <div class="SelectionModeGroup">
    <p><?php echo l10n('Your selection');?>
</p>
    <div class="SelectionModeGroupList">

    <div class="DeleteGroupList">
      
    </div>

    </div>
    <button id="MergeSelectionMode" class="icon-object-group unavailable" title="<?php echo l10n('At least 2 selected groups are needed to merge');?>
"><?php echo l10n('Merge');?>
</button>
    <button id="DeleteSelectionMode" class="icon-trash-1 unavailable"><?php echo l10n('Delete');?>
</button>
   </div>

   <div id="MergeOptionsBlock">
   <p><?php echo l10n('Choose which group to merge these groups into');?>
</p>
   <p class="ItalicTextInfo"><?php echo l10n('The other groups will be removed');?>
</p>
    <div class="MergeOptionsContainer">
      <select id="MergeOptionsChoices"> 
      </select>
    </div>
    
    <button class="icon-ok ConfirmMergeButton"><?php echo l10n('Confirm merge');?>
</button>
    <a id="CancelMerge" onclick="updateSelectionPanel('Selection')"><?php echo l10n('Cancel');?>
</a>
   </div>
 

   <div id="ConfirmGroupAction">
    <p>You are about to delete <span class="number-Selected">0</span> groups, are you sure?</p>
    <button class="icon-ok ConfirmDeleteButton"><?php echo l10n('Yes, delete');?>
</button>
    <a id="CancelDelete" onclick="updateSelectionPanel('Selection')"><?php echo l10n("No, I have changed my mind");?>
</a>
    </div>
  
  </div>
</div>

<div class="group-manager">

  <div class="groups">

    <div id="addGroupForm" class="GroupContainer">
      <div class="groupError icon-cancel"></div>
      <div class="addGroupBlock">
        <div class="icon-plus-circled icon-blue icon-blue-full"></div>
        <p id="addGroup"><?php echo l10n('Add group');?>
</p>
      </div>
      <form>
        <fieldset>
           <div class="addGroupFormLabelAndInput">
            <label class="addGroupLabel" for="addGroupNameInput"><?php echo l10n('Group name');?>
</label>
            <input type="text" id="addGroupNameInput" name="groupname" maxlength="50" size="20" placeholder="Photographers...">
          </div>
          <div class="actionButtons">
            <button name="submit" type="submit" class="buttonLike">
              <i class='icon-plus'> </i> <?php echo l10n('Add');?>

            </button> 
            <br/>
            <a id="addGroupClose" onclick="hideAddGroupForm()"><?php echo l10n('Cancel');?>
</a>
          </div>
          <input type="hidden" name="pwg_token" value="<?php echo $_smarty_tpl->tpl_vars['PWG_TOKEN']->value;?>
">
        </fieldset>
      </form>
    </div>

        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'groupContent', array('grp_id'=>"template",'grp_name'=>"Template",'grp_members'=>0,'grp_is_default'=>false), true);?>


    <?php $_smarty_tpl->_assignInScope('color_tab', array("icon-red","icon-blue","icon-yellow","icon-purple","icon-green"));?>

<?php if (!empty($_smarty_tpl->tpl_vars['groups']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group', false, NULL, 'group_loop', array (
));
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
      <?php $_smarty_tpl->_assignInScope('color_id', $_smarty_tpl->tpl_vars['group']->value['ID']%5);?>
      <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'groupContent', array('grp_id'=>$_smarty_tpl->tpl_vars['group']->value['ID'],'grp_name'=>$_smarty_tpl->tpl_vars['group']->value['NAME'],'grp_members'=>$_smarty_tpl->tpl_vars['group']->value['MEMBERS'],'grp_color'=>$_smarty_tpl->tpl_vars['color_tab']->value[$_smarty_tpl->tpl_vars['color_id']->value],'grp_is_default'=>$_smarty_tpl->tpl_vars['group']->value['IS_DEFAULT']), true);?>

      
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
  </div>

<div id="UserList" class="UserListPopIn">

  <div class="UserListPopInContainer">

    <a class="icon-cancel CloseUserList"></a>

    <div class="group-name-block">
      <span class="icon-list-bullet"></span>
      <p></p>
      <span class="UserNumberBadge">25</span>
    </div>

    <div class="UserListAddFilterUsers">
      <div class="AddUserBlock">
        <p><?php echo l10n('Associate User');?>
</p>
        <select class="UserSearch" placeholder="John Doe"></select>
        <button class="icon-user-add submit" name="submit_add" id="UserSubmit" type="submit"></button>
      </div>
      <div class="FilterUserBlock">
        <div class="AmountOfUsersShown">
          <p><?php echo l10n('Showing %s users out of %s','<strong>39</strong>','<strong>251</strong>');?>
</p>
        </div>
        <div class='search-user'>
          <span class="icon-filter search-icon"></span>
          <span class="icon-cancel search-cancel"></span>
          <input class="input-user-name search-input" type="text" name="username" maxlength="50" size="20" placeholder="<?php echo l10n('Filter');?>
">
        </div>
      </div>
    </div>

    <div class="UsersInGroupListContainer">
    
      <div class="UsersInGroupList row">
        
      </div>
  
    </div>

  
    <div class="LinkUserManager">
      <a>
      <span class="icon-users-cog"></span>
      <?php echo l10n('Manage users with user manager');?>
</a>
    </div>
      
  </div>

</div>
</div>

<?php }
/* smarty_template_function_groupContent_61901921166b0a32de522e5_84436686 */
if (!function_exists('smarty_template_function_groupContent_61901921166b0a32de522e5_84436686')) {
function smarty_template_function_groupContent_61901921166b0a32de522e5_84436686(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <div id="group-<?php echo $_smarty_tpl->tpl_vars['grp_id']->value;?>
" class="GroupContainer" data-id=<?php echo $_smarty_tpl->tpl_vars['grp_id']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['grp_is_default']->value) {?>data-default=1 <?php } else { ?>data-default=0 <?php }?>>
    <div class="Group-checkbox in-selection-mode">
      <label class="Group-checkbox-label" for="Group-Checkbox-selection-<?php echo $_smarty_tpl->tpl_vars['grp_id']->value;?>
"></label>
      <input type="checkbox" id="Group-Checkbox-selection-<?php echo $_smarty_tpl->tpl_vars['grp_id']->value;?>
">
      <span class="group-checkmark"></span>
    </div>
    <div class="groupHeader">
      <div class="groupIcon"> 
        <div class="icon-users-1 
<?php if ((isset($_smarty_tpl->tpl_vars['grp_color']->value))) {?>
      <?php echo $_smarty_tpl->tpl_vars['grp_color']->value;?>

    <?php }?>">
        </div>
        <div class="groupMessage icon-ok icon-green"></div>
        <div class="groupError icon-cancel"></div>
      </div>

      <div class="icon-star not-in-selection-mode is-default-token<?php if (!$_smarty_tpl->tpl_vars['grp_is_default']->value) {?> deactivate<?php }?>" ></div> 
     
      <div class="icon-ellipsis-vert group-dropdown-options not-in-selection-mode">
        <div id="GroupOptions" class="dropdown">
          <div class="icon-docs dropdown-option" id="GroupDuplicate" value="duplicate"><?php echo l10n('Duplicate');?>
</div>
          <div class="icon-trash dropdown-option" id="GroupDelete" value="delete"><?php echo l10n('Delete');?>
</div>
          <div class="icon-star dropdown-option" id="GroupDefault" value="delete"></div>
        </div>
      </div>

      <div class="Group-name">
        <div class="Group-name-container">
          <p id="group_name"><?php echo $_smarty_tpl->tpl_vars['grp_name']->value;?>
</p>
          <span class="icon-pencil"></span>
        </div>
        <div class="group-rename">
          <form>
            <input type="text" class="group_name-editable" value="<?php echo $_smarty_tpl->tpl_vars['grp_name']->value;?>
">
            <input type="submit" hidden>
          </form>
          <span class="icon-ok validate"></span>
          <span class="icon-cancel"></span>
        </div>
      </div>

      <div id="EditGroupName">
        <input class="input-edit-group-name" type="text" name="username" maxlength="50" size="20" placeholder="<?php echo $_smarty_tpl->tpl_vars['grp_name']->value;?>
">
        <button class="icon-ok submit" name="submit_add" id="EditGroupNameSubmit" type="submit">Change group name</button>
        <a id="EditGroupcancel"><?php echo l10n('Cancel');?>
</a>
      </div>

      <p class="group_number_users"><?php echo $_smarty_tpl->tpl_vars['grp_members']->value;?>
</p>
    </div>

    <a id="UserListTrigger" class="icon-user-1 manage-users not-in-selection-mode GroupManagerButtons"><?php echo l10n('Manage the members');?>
</a>
    <a class="icon-lock manage-permissions not-in-selection-mode GroupManagerButtons" href="admin.php?page=group_perm&group_id=<?php echo $_smarty_tpl->tpl_vars['grp_id']->value;?>
"><?php echo l10n('Manage Permissions');?>
</a>
  </div>
<?php
}}
/*/ smarty_template_function_groupContent_61901921166b0a32de522e5_84436686 */
/* smarty_template_function_groupContent_61901921166b0a32de522e5_84436686 */
if (!function_exists('smarty_template_function_groupContent_61901921166b0a32de522e5_84436686')) {
function smarty_template_function_groupContent_61901921166b0a32de522e5_84436686(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>


<?php
}}
/*/ smarty_template_function_groupContent_61901921166b0a32de522e5_84436686 */
}
