<?php
/* Smarty version 4.3.1, created on 2024-08-20 09:08:25
  from '/var/www/html/piwigo/admin/themes/default/template/verify_facebook.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66c45d099ef958_11606549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c72d573a12da89bec9d02a8d91f1cf460d11bc69' => 
    array (
      0 => '/var/www/html/piwigo/admin/themes/default/template/verify_facebook.tpl.html',
      1 => 1724144832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c45d099ef958_11606549 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/piwigo/include/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'common','load'=>'header','require'=>'jquery','path'=>'admin/themes/default/js/common.js'),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.selectize','load'=>'header','path'=>'themes/default/js/plugins/selectize.min.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('id'=>'jquery.selectize','path'=>"themes/default/js/plugins/selectize.".((string)$_smarty_tpl->tpl_vars['themeconf']->value['colorscheme']).".css"),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.ui.slider','require'=>'jquery.ui','load'=>'header','path'=>'themes/default/js/ui/minified/jquery.ui.slider.min.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/default/js/ui/theme/jquery.ui.slider.css"),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.confirm','load'=>'header','require'=>'jquery','path'=>'themes/default/js/plugins/jquery-confirm.min.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/default/js/plugins/jquery-confirm.min.css"),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.tipTip','load'=>'header','path'=>'themes/default/js/plugins/jquery.tipTip.minified.js'),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"admin/themes/default/fontello/css/animation.css",'order'=>10),$_smarty_tpl ) );?>
 


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'common','load'=>'header','require'=>'jquery','path'=>'admin/themes/default/js/common.js'),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.selectize','load'=>'header','path'=>'themes/default/js/plugins/selectize.min.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('id'=>'jquery.selectize','path'=>"themes/default/js/plugins/selectize.".((string)$_smarty_tpl->tpl_vars['themeconf']->value['colorscheme']).".css"),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.ui.slider','require'=>'jquery.ui','load'=>'header','path'=>'themes/default/js/ui/minified/jquery.ui.slider.min.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/default/js/ui/theme/jquery.ui.slider.css"),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.confirm','load'=>'header','require'=>'jquery','path'=>'themes/default/js/plugins/jquery-confirm.min.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/default/js/plugins/jquery-confirm.min.css"),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.tipTip','load'=>'header','path'=>'themes/default/js/plugins/jquery.tipTip.minified.js'),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"admin/themes/default/fontello/css/animation.css",'order'=>10),$_smarty_tpl ) );?>
 
<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin1->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

/* Translates */
const title_msg = '<?php echo strtr((string)l10n('Are you sure you want to delete the user "%s"?'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
const are_you_sure_msg  = '<?php echo strtr((string)l10n('Are you sure?'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
const confirm_msg = '<?php echo htmlspecialchars((string)l10n('Yes, I am sure'), ENT_QUOTES, 'UTF-8', true);?>
';
const cancel_msg = '<?php echo htmlspecialchars((string)l10n('No, I have changed my mind'), ENT_QUOTES, 'UTF-8', true);?>
';
const str_and_others_tags = '<?php echo strtr((string)l10n('and %s others'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
const missingConfirm = "<?php echo strtr((string)l10n('You need to confirm deletion'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
";
const missingUsername = "<?php echo strtr((string)l10n('Please, enter a login'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
";
const fieldNotEmpty = "<?php echo strtr((string)l10n('Name field must not be empty'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
"

const registered_str = '<?php echo strtr((string)l10n("Registered"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
const last_visit_str = '<?php echo strtr((string)l10n("Last visit"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
const dates_infos = '<?php echo strtr((string)l10n('between %s and %s'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
'
const hide_str = '<?php echo strtr((string)l10n('Hide'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
const show_str = '<?php echo strtr((string)l10n('Show'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
const user_added_str = '<?php echo strtr((string)l10n('User %s added'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
const str_popin_update_btn = '<?php echo strtr((string)l10n('Update'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
const filtered_users = '<?php echo strtr((string)l10n('<b>%d</b> filtered users'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
const filtered_user = '<?php echo strtr((string)l10n('<b>%d</b> filtered user'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
const history_base_url = "<?php echo $_smarty_tpl->tpl_vars['U_HISTORY']->value;?>
";

const status_to_str = {
  'webmaster': "<?php echo l10n('user_status_webmaster');?>
",
  'admin': "<?php echo l10n('user_status_admin');?>
",
  'normal': "<?php echo l10n('user_status_normal');?>
",
  'generic': "<?php echo l10n('user_status_generic');?>
",
  'guest': "<?php echo l10n('user_status_guest');?>
",
}

const view_selector = '<?php echo $_smarty_tpl->tpl_vars['view_selector']->value;?>
';
const pagination = '<?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
';

months = [
  "<?php echo l10n('Jan');?>
",
  "<?php echo l10n('Feb');?>
",
  "<?php echo l10n('Mar');?>
",
  "<?php echo l10n('Apr');?>
",
  "<?php echo l10n('May');?>
",
  "<?php echo l10n('Jun');?>
",
  "<?php echo l10n('Jul');?>
",
  "<?php echo l10n('Aug');?>
",
  "<?php echo l10n('Sep');?>
",
  "<?php echo l10n('Oct');?>
",
  "<?php echo l10n('Nov');?>
",
  "<?php echo l10n('Dec');?>
"
];

/* Template variables */
connected_user = <?php echo $_smarty_tpl->tpl_vars['connected_user']->value;?>
;
connected_user_status = "<?php echo $_smarty_tpl->tpl_vars['connected_user_status']->value;?>
";
owner_id = <?php echo $_smarty_tpl->tpl_vars['owner']->value;?>
;
let groups_arr_name = [<?php echo $_smarty_tpl->tpl_vars['groups_arr_name']->value;?>
];
let groups_arr_id = [<?php echo $_smarty_tpl->tpl_vars['groups_arr_id']->value;?>
];
groups_arr = groups_arr_id.map((elem, index) => [elem, groups_arr_name[index]]);
guest_id = <?php echo $_smarty_tpl->tpl_vars['guest_id']->value;?>
;
nb_days = "<?php echo l10n('%d days');?>
";
//per page is too long for the popin
nb_photos = "<?php echo l10n('%d photos');?>
";
nb_photos_per_page = "<?php echo l10n('%d photos per page');?>
";
pwg_token = '<?php echo $_smarty_tpl->tpl_vars['PWG_TOKEN']->value;?>
';
has_group = "<?php echo $_smarty_tpl->tpl_vars['filter_group']->value;?>
";

let register_dates_str = '<?php echo $_smarty_tpl->tpl_vars['register_dates']->value;?>
';
let register_dates = register_dates_str.split(',');

let groupOptions = groups_arr.map(x => ({value: x[0], label: x[1], isSelected: 0}));


/* Startup */
setupRegisterDates(register_dates);
selectionMode(false);
get_guest_info();
update_user_list();
update_selection_content();

$(".icon-help-circled").tipTip({
  'maxWidth':'700px',
  'fadeIn': '1000',
});

$(document).ready(function() {
  // Only webmaster can set admin or webmaster to others users
  if (connected_user_status !== 'webmaster') {
    $('select[name="status"] option[value="webmaster"], select[name="status"] option[value="admin"]').attr("disabled", true);
  }
  // We set the applyAction btn click event here so plugins can add cases to the list 
  // which is not possible if this JS part is in a JS file
  // see #1571 on Github
  jQuery("#applyAction").click(function() {
      let action = jQuery("select[name=selectAction]").prop("value");
      let method = 'pwg.users.setInfo';
      let data = {
          pwg_token: pwg_token,
          user_id: selection.map(x => x.id)
      };
      switch (action) {
          case 'delete':
              if (!($("#permitActionUserList .user-list-checkbox[name=confirm_deletion]").attr("data-selected") === "1")) {
                  alert(missingConfirm);
                  return false;
              }
              method = 'pwg.users.delete';
              break;
          case 'group_associate':
              method = 'pwg.groups.addUser';
              data.group_id = jQuery("#permitActionUserList select[name=associate]").prop("value");
              break;
          case 'group_dissociate':
              method = 'pwg.groups.deleteUser';
              data.group_id = jQuery("#permitActionUserList select[name=dissociate]").prop("value");
              break;
          case 'status':
              data.status = jQuery("#permitActionUserList select[name=status]").prop("value");
              break;
          case 'enabled_high':
              data.enabled_high = $("#permitActionUserList .user-list-checkbox[name=enabled_high_yes]").attr("data-selected") === "1" ? true : false;
              break;
          case 'level':
              data.level = jQuery("#permitActionUserList select[name=level]").val();
              break;
          case 'nb_image_page':
              data.nb_image_page = jQuery("#permitActionUserList input[name=nb_image_page]").val();
              break;
          case 'theme':
              data.theme = jQuery("#permitActionUserList select[name=theme]").val();
              break;
          case 'language':
              data.language = jQuery("#permitActionUserList select[name=language]").val();
              break;
          case 'recent_period':
              data.recent_period = recent_period_values[$('#permitActionUserList .period-select-bar .slider-bar-container').slider("option", "value")];;
              break;
          case 'expand':
              data.expand = $("#permitActionUserList .user-list-checkbox[name=expand_yes]").attr("data-selected") === "1" ? true : false;
              break;
          case 'show_nb_comments':
              data.show_nb_comments = $("#permitActionUserList .user-list-checkbox[name=show_nb_comments_yes]").attr("data-selected") === "1" ? true : false
              break;
          case 'show_nb_hits':
              data.show_nb_hits = $("#permitActionUserList .user-list-checkbox[name=show_nb_hits_yes]").attr("data-selected") === "1" ? true : false;
              break;
          default:
              alert("Unexpected action");
              return false;
      }
      jQuery.ajax({
          url: "ws.php?format=json&method="+method,
          type:"POST",
          data: data,
          beforeSend: function() {
              jQuery("#applyActionLoading").show();
              jQuery("#applyActionBlock .infos").fadeOut();
          },
          success:function(data) {
              jQuery("#applyActionLoading").hide();
              jQuery("#applyActionBlock .infos").fadeIn();
              jQuery("#applyActionBlock .infos").css("display", "inline-block");
              update_user_list();
              if (action == 'delete') {
                  selection = [];
                  update_selection_content();
              }
          },
          error:function(XMLHttpRequest, textStatus, errorThrows) {
              jQuery("#applyActionLoading").hide();
          }
      });
      return false;
  });
});

<?php $_block_repeat=false;
echo $_block_plugin1->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'user_list','load'=>'footer','path'=>'admin/themes/default/js/user_list.js'),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.cookie','path'=>'themes/default/js/jquery.cookie.js','load'=>'footer'),$_smarty_tpl ) );?>


<style>
  #line1{
      width: 560px;
  }
  #inputgetcmt{
      display: flex;
  }
  .cmtinput{
      width: 500px;
  }
  #xn{
      width: 100px;
      margin-top: 20px;
  }
</style>
<div style="text-align: left; margin-left: 30px; display: flex;">
  <div>
    <div id="inputgetcmt">
        <div id="line1">
            <input class="cmtinput search-input" type='text' placeholder='Dán cookie ở đây'>
            <input class="cmtinput search-input" type='text' placeholder='Dán link post ở đây'>
        </div>
        <div id="xn" class="user-header-button">
            <label class="head-button-2">
            <p>Xác nhận</p>
            </label>
        </div>
    </div>
    <div id="cookie_status"></div>
  </div>
  <div style="width: 50%; display: flex; justify-content: space-around;">
    <textarea placeholder="Điền code html follower vào đây" id="htmlcode" style="height: 90%; margin-top: 3px;width: 80%;"></textarea>
    <div onclick="updateFollowStatus()" id="xn-follow" style="width: 90px; margin-top: 20px;" class="user-header-button">
      <label class="head-button-2">
      <p>Xác nhận</p>
      </label>
    </div>
  </div>
</div>

<div id="user-table">
  <div id="user-table-content">
    <div class="user-manager-header">

      
      <div style="display:flex;justify-content:space-between; flex-grow:1;">
        <div style="display:flex; align-items: center;">
          
          <div id="AddUserSuccess">
            <label class="icon-ok">
              <span><?php echo l10n('New user added');?>
</span><span class="icon-pencil edit-now"><?php echo l10n('Edit');?>
</span>
            </label>
          </div>
          <div class="in-selection-mode">
            <div id="checkActions">
              <span><?php echo l10n('Select');?>
</span>
              <a href="#" id="selectAllPage"><?php echo l10n('The whole page');?>
</a>
              <a href="#" id="selectSet"><?php echo l10n('The whole set');?>
</a><span class="loading" style="display:none"><img src="themes/default/images/ajax-loader-small.gif"></span>
              <a href="#" id="selectNone"><?php echo l10n('None');?>
</a>
              <a href="#" id="selectInvert"><?php echo l10n('Invert');?>
</a>
              <span id="selectedMessage"></span>
            </div>
          </div>
        </div>
        <div style="display:flex; width: 270px;">
        </div>
      </div>
      <div class="not-in-selection-mode" style="width: 264px; height:2px">
      </div>
    </div>
    <div class="filtered-users"></div>
    
    <div id='search-user'>
      <div class='search-info'> </div>
        <input id="user_search2" class='search-input2' type='text' placeholder='<?php echo l10n('Search');?>
'> 
        <span class='icon-search search-icon'> </span>
        <span class="icon-cancel search-cancel"></span>
        <input id="user_search" class='search-input' type='text' placeholder='<?php echo l10n('Search');?>
'>
  
    </div>
    <div class="advanced-filter">
      <div class="advanced-filter-header">
        <span class="advanced-filter-title"><?php echo l10n('Advanced filters');?>
</span>
        <span class="advanced-filter-close icon-cancel"></span>
      </div>
      <div class="advanced-filter-container">
      <div class="advanced-filter-status advanced-filter-item">
          <label class="advanced-filter-item-label"><?php echo l10n('Status');?>
</label>
          <div class="advanced-filter-select-container advanced-filter-item-container">
            <select class="user-action-select advanced-filter-select" name="filter_status">
              <option value="" label="" selected></option>
              <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['pref_status_options']->value),$_smarty_tpl);?>

            </select>
          </div>
        </div>
        <div class="advanced-filter-level advanced-filter-item">
          <label class="advanced-filter-item-label"><?php echo l10n('Privacy level');?>
</label>
          <div class="advanced-filter-select-container advanced-filter-item-container">
            <select class="user-action-select advanced-filter-select" name="filter_level" size="1">
              <option value="" label="" selected></option>
              <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['level_options']->value),$_smarty_tpl);?>

            </select>
          </div>
        </div>
        <div class="advanced-filter-group advanced-filter-item">
          <label class="advanced-filter-item-label"><?php echo l10n('Group');?>
</label>
          <div class="advanced-filter-select-container advanced-filter-item-container">
            <select class="user-action-select advanced-filter-select" name="filter_group">
              <option value="" label="" selected></option>
              <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['association_options']->value),$_smarty_tpl);?>

            </select>
          </div>
        </div>
        <div class="advanced-filter-date advanced-filter-item">
          <div class="advanced-filter-date-title" style="display:flex">
            <span class="advanced-filter-item-label"><?php echo l10n('Registered');?>
</span>
            <span class='dates-infos'></span>
          </div>
          <div class="dates-select-bar">
              <div class="slider-bar-wrapper">
                <div class="slider-bar-container"></div>
              </div>
            </div>
        </div>
      </div>
    </div>
    <div class="user-container-header">
      <!-- edit / select -->
      <div class="user-header-col user-header-select no-flex-grow">
      </div>
      <!-- icon -->
      <div class="user-header-col user-header-initials no-flex-grow">
      </div>
      <!-- username -->
      <div class="user-header-col user-header-username">
        <span><?php echo l10n('Username');?>
</span>
      </div>
      <!-- status -->
      <div class="user-header-col user-header-status">
        <span><?php echo l10n('Status');?>
</span>
      </div>
      <!-- email adress -->
      <div class="user-header-col user-header-email not-in-selection-mode">
        <span><?php echo l10n('Email Adress');?>
</span>
      </div>
      
      <!-- Liên kết facebook -->
      <div class="user-header-col user-header-registration">
        <span>Liên kết Facebook</span>
      </div>
       <!-- Follow page -->
       <div class="user-header-col user-header-follow">
          <span>Follow page</span>
      </div>

    </div>
    <div class="user-update-spinner icon-spin6 animate-spin"></div>
    <div class="user-container-wrapper">
    </div>
    <!-- Pagination -->
    <div class="user-pagination">
      <div class="pagination-per-page">
        <span class="thumbnailsActionsShow" style="font-weight: bold;"><?php echo l10n('Display');?>
</span>
        <a id="pagination-per-page-5">5</a>
        <a id="pagination-per-page-10">10</a>
        <a id="pagination-per-page-25">25</a>
        <a id="pagination-per-page-50">50</a>
        <a id="pagination-per-page-All">All</a>
      </div>

      <div class="pagination-container">
        <div class="pagination-arrow left">
          <span class="icon-left-open"></span>
        </div>
        <div class="pagination-item-container">
        </div>
        <div class="user-update-spinner icon-spin6 animate-spin"></div> 
        <div class="pagination-arrow rigth">
          <span class="icon-left-open"></span>
        </div>
      </div>
    </div>
  </div>
  <div id="selection-mode-block" class="in-selection-mode tag-selection" style="width: 250px; min-width:250px;display: block;position:relative">
    <div class="user-selection-content">
      <div class="selection-mode-ul">
        <p><?php echo l10n('Your selection');?>
</p>
        <div class="user-selected-list">
        </div>
        <div class="selection-other-users"></div>
      </div>
      <fieldset id="action">
        <legend><?php echo l10n('Action');?>
</legend>

        <div id="forbidAction"><?php echo l10n('No users selected, no actions possible.');?>
</div>
        <div id="permitActionUserList" style="display:block">

          <div class="user-action-select-container">
            <select class="user-action-select" name="selectAction">
              <option value="-1"><?php echo l10n('Choose an action');?>
</option>
              <optgroup label="Actions">
                <option value="delete" class="icon-trash"><?php echo l10n('Delete selected users');?>
</option>
                <option value="status"><?php echo l10n('Status');?>
</option>
                <option value="group_associate"><?php echo l10n('associate to group');?>
</option>
                <option value="group_dissociate"><?php echo l10n('dissociate from group');?>
</option>
                <option value="enabled_high"><?php echo l10n('High definition enabled');?>
</option>
                <option value="level"><?php echo l10n('Privacy level');?>
</option>
                <option value="nb_image_page"><?php echo l10n('Number of photos per page');?>
</option>
                <option value="theme"><?php echo l10n('Theme');?>
</option>
                <option value="language"><?php echo l10n('Language');?>
</option>
                <option value="recent_period"><?php echo l10n('Recent period');?>
</option>
                <option value="expand"><?php echo l10n('Expand all albums');?>
</option>
<?php if ($_smarty_tpl->tpl_vars['ACTIVATE_COMMENTS']->value) {?>
                <option value="show_nb_comments"><?php echo l10n('Show number of comments');?>
</option>
<?php }?>
                <option value="show_nb_hits"><?php echo l10n('Show number of hits');?>
</option>
              </optgroup>
            </select>
          </div>
                    <div id="action_delete" class="bulkAction">
            <div class="user-list-checkbox" name="confirm_deletion">
              <span class="select-checkbox">
                <i class="icon-ok"></i>
              </span>
              <span class="user-list-checkbox-label"><?php echo l10n('Are you sure?');?>
</span>
            </div>
          </div>

                    <div id="action_status" class="bulkAction">
            <div class="user-action-select-container">
              <select class="user-action-select" name="status">
                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['pref_status_options']->value,'selected'=>$_smarty_tpl->tpl_vars['pref_status_selected']->value),$_smarty_tpl);?>

              </select>
            </div>
          </div>

                    <div id="action_group_associate" class="bulkAction">
            <div class="user-action-select-container">
              <select class="user-action-select" name="associate">
                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['association_options']->value),$_smarty_tpl);?>

              </select>
            </div>
          </div>

                    <div id="action_group_dissociate" class="bulkAction">
            <div class="user-action-select-container">
              <select class="user-action-select" name="dissociate">
                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['association_options']->value),$_smarty_tpl);?>

              </select>
            </div>
          </div>

                    <div id="action_enabled_high" class="bulkAction yes_no_radio">
            <span class="user-list-checkbox" name="enabled_high_yes">
              <span class="select-checkbox">
                <i class="icon-ok"></i>
              </span>
              <span class="user-list-checkbox-label"><?php echo l10n('Yes');?>
</span>
            </span>
            <span class="user-list-checkbox" data-selected="1" name="enabled_high_no">
              <span class="select-checkbox">
                <i class="icon-ok"></i>
              </span>
              <span class="user-list-checkbox-label"><?php echo l10n('No');?>
</span>
            </span>
          </div>

                    <div id="action_level" class="bulkAction">
            <div class="user-action-select-container">
              <select class="user-action-select" name="level" size="1">
                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['level_options']->value,'selected'=>$_smarty_tpl->tpl_vars['level_selected']->value),$_smarty_tpl);?>

              </select>
            </div>
          </div>

                    <div id="action_nb_image_page" class="bulkAction">
            <div class="user-property-label photos-select-bar"><?php echo l10n('Photos per page');?>

              <br/>
              <span class="nb-img-page-infos"></span>
              <div class="slider-bar-wrapper">
                <div class="slider-bar-container"></div>
              </div>
              <input name="nb_image_page" />
            </div>
          </div>

                    <div id="action_theme" class="bulkAction">

            <div class="user-action-select-container">
              <select class="user-action-select" name="theme" size="1">
                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['theme_options']->value,'selected'=>$_smarty_tpl->tpl_vars['theme_selected']->value),$_smarty_tpl);?>

              </select>
            </div>
          </div>

                    <div id="action_language" class="bulkAction">
            <div class="user-action-select-container">
              <select class="user-action-select" name="language" size="1">
                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['language_options']->value,'selected'=>$_smarty_tpl->tpl_vars['language_selected']->value),$_smarty_tpl);?>

              </select>
            </div>
          </div>

                    <div id="action_recent_period" class="bulkAction">
            <div class="user-property-label period-select-bar"><?php echo l10n('Recent period');?>

              <br />
              <span class="recent_period_infos"></span>
              <div class="slider-bar-wrapper">
                <div class="slider-bar-container"></div>
              </div>
            </div>
          </div>

                    <div id="action_expand" class="bulkAction yes_no_radio">
            <span class="user-list-checkbox" name="expand_yes">
              <span class="select-checkbox">
                <i class="icon-ok"></i>
              </span>
              <span class="user-list-checkbox-label"><?php echo l10n('Yes');?>
</span>
            </span>
            <span class="user-list-checkbox" data-selected="1" name="expand_no">
              <span class="select-checkbox">
                <i class="icon-ok"></i>
              </span>
              <span class="user-list-checkbox-label"><?php echo l10n('No');?>
</span>
            </span>
          </div>

                    <div id="action_show_nb_comments" class="bulkAction yes_no_radio">
            <span class="user-list-checkbox" name="show_nb_comments_yes">
              <span class="select-checkbox">
                <i class="icon-ok"></i>
              </span>
              <span class="user-list-checkbox-label"><?php echo l10n('Yes');?>
</span>
            </span>
            <span class="user-list-checkbox" data-selected="1" name="show_nb_comments_no">
              <span class="select-checkbox">
                <i class="icon-ok"></i>
              </span>
              <span class="user-list-checkbox-label"><?php echo l10n('No');?>
</span>
            </span>
          </div>

                    <div id="action_show_nb_hits" class="bulkAction yes_no_radio">
            <span class="user-list-checkbox" name="show_nb_hits_yes">
              <span class="select-checkbox">
                <i class="icon-ok"></i>
              </span>
              <span class="user-list-checkbox-label"><?php echo l10n('Yes');?>
</span>
            </span>
            <span class="user-list-checkbox" data-selected="1" name="show_nb_hits_no">
              <span class="select-checkbox">
                <i class="icon-ok"></i>
              </span>
              <span class="user-list-checkbox-label"><?php echo l10n('No');?>
</span>
            </span>
          </div>

          <p id="applyActionBlock" style="display:none" class="actionButtons">
            <input id="applyAction" class="submit" type="submit" value="<?php echo l10n('Apply action');?>
" name="submit"> <span id="applyOnDetails"></span></input>
            <span id="applyActionLoading" style="display:none"><img src="themes/default/images/ajax-loader-small.gif"></span>
            <br />
            <span class="infos icon-ok icon-green" style="display:inline-block;display:none;max-width:100%;margin:0;margin-top:30px;min-height:0;"><?php echo l10n('Users modified');?>
</span>
          </p>
        </div>       </fieldset>
    </div>
  </div>
</div>

<!-- User container template -->
<div id="template">
  <div class="user-container">
  <!-- edit-v1 -->
    <div class="user-col user-container-select tmp-select in-selection-mode user-first-col no-flex-grow">
      <div class="user-container-checkbox user-list-checkbox" name="select_container">
        <span class="select-checkbox">
          <i class="icon-ok"></i>
        </span>
      </div>
    </div>
    <div class="user-col user-container-edit tmp-edit not-in-selection-mode user-first-col no-flex-grow">
      <span class="icon-pencil"></span>
    </div>
    <div class="user-col user-container-initials no-flex-grow">
      <div class="user-container-initials-wrapper">
        <span><!-- initials --></span>
      </div>
    </div>
    <div class="user-col user-container-username">
      <span><!-- name --></span>
    </div>
    <div class="user-col user-container-status">
      <span><!-- status --></span>
    </div>
    <div class="user-col user-container-email not-in-selection-mode">
      <span><!-- email --></span>
    </div>
        <div class="user-col user-container-registration">
      <div>
                <div class="user-container-registration-info-wrapper">
                    <span class="user-container-registration-date-since"><!-- date_since --></span>
        </div>
      </div>
    </div>
    <div class="user-col user-container-follow">
      <span class="follow-status">
        <!-- follow status -->
      </span>
    </div>
  </div>
  <span class="user-groups group-primary"></span>
  <span class="user-groups group-bonus"></span>
  <div class="user-selected-item">
    <a class="icon-cancel"></a>
    <p></p>
  </div>
</div>

<div id="UserList" class="UserListPopIn">

  <div class="UserListPopInContainer">

    <a class="icon-cancel CloseUserList"></a>
    <div class="summary-properties-update-container">
      <div class="summary-properties-container">
        <div class="summary-container">
          <div class="user-property-initials">
            <div>
              <span class="icon-blue"><!-- Initials (JP) --></span>
            </div>
          </div>
          <div class="user-property-username">
            <span class="edit-username-title"><!-- Name (Jessy Pinkman) --></span>
            <span class="edit-username-specifier"><!-- You specifire (you) --></span>
            <span class="edit-username icon-pencil"></span>
          </div>
          <div class="user-property-username-change">
            <div class="summary-input-container">
              <input class="user-property-input user-property-input-username" value="" placeholder="<?php echo l10n('Username');?>
" />
            </div>
            <span class="icon-ok edit-username-validate"></span>
            <span class="icon-cancel-circled edit-username-cancel"></span>
          </div>
          <div class="user-property-password-container">
            <div class="user-property-password edit-password">
              <p class="user-property-button"><span class="icon-key user-edit-icon"> </span><?php echo l10n('Change Password');?>
</p>
            </div>
            <div class="user-property-password-change">
              <div class="summary-input-container">
              <input class="user-property-input user-property-input-password" value="" placeholder="<?php echo l10n('Password');?>
" />
              </div>
              <span class="icon-ok edit-password-validate"></span>
              <span class="icon-cancel-circled edit-password-cancel"></span>
            </div>
            <div class="user-property-permissions">
              <p class="user-property-button"> <span class="icon-lock user-edit-icon"> </span><a href="#" ><?php echo l10n('Permissions');?>
</a></p>
            </div>
            <div class="user-stats">
              <div class="user-property-history">
                <p class="user-property-button"> <span class="icon-signal user-edit-icon"> </span><a href="" ><?php echo l10n('Visit history');?>
</a></p>
              </div>
            </div>
          </div>
          <div class="user-property-register-visit">
            <span class="user-property-register"><!-- Registered date XX/XX/XXXX --></span>
            <span class="icon-calendar"></span>
            <span class="user-property-last-visit"><!-- Last Visit date XX/XX/XXXX --></span>
          </div>
        </div>
        <div class="properties-container">
          <div class="user-property-column-title">
            <p><?php echo l10n('Properties');?>
</p>
          </div>
          <div class="user-property-email">
            <p class="user-property-label"><?php echo l10n('Email Adress');?>
</p>
            <input type="text" class="user-property-input" value="contact@jessy-pinkman.com" disabled="false"/>
          </div>
          <div class="user-property-status">
            <p class="user-property-label"><?php echo l10n('Status');?>

                <span class="icon-help-circled" 
                  title="<div class='tooltip-status-content'>
                    <div class='tooltip-status-row'><span class='tooltip-col1'><?php echo l10n('user_status_webmaster');?>
</span><span class='tooltip-col2'><?php echo l10n('Has access to all administration functionnalities. Can manage both configuration and content.');?>
</span></div>
                    <div class='tooltip-status-row'><span class='tooltip-col1'><?php echo l10n('user_status_admin');?>
</span><span class='tooltip-col2'><?php echo l10n('Has access to administration. Can only manage content: photos/albums/users/tags/groups.');?>
</span></div>
                    <div class='tooltip-status-row'><span class='tooltip-col1'><?php echo l10n('user_status_normal');?>
</span><span class='tooltip-col2'><?php echo l10n('No access to administration, can see private content with appropriate permissions.');?>
</span></div>
                    <div class='tooltip-status-row'><span class='tooltip-col1'><?php echo l10n('user_status_generic');?>
</span><span class='tooltip-col2'><?php echo l10n('Can be shared by several individuals without conflict (they cannot change the password).');?>
</span></div>
                    <div class='tooltip-status-row'><span class='tooltip-col1'><?php echo l10n('user_status_guest');?>
</span><span class='tooltip-col2'><?php echo l10n('Equivalent to deactivation. The user is still in the list, but can no longer log in.');?>
</span></div>
                  </div">
                </span>
            </p>
            <div class="user-property-select-container">
              <select name="status" class="user-property-select">
                <option value="webmaster"><?php echo l10n('user_status_webmaster');?>
</option>
                <option value="admin"><?php echo l10n('user_status_admin');?>
</option>
                <option value="normal"><?php echo l10n('user_status_normal');?>
</option>
                <option value="generic"><?php echo l10n('user_status_generic');?>
</option>
                <option value="guest"><?php echo l10n('user_status_guest');?>
  (<?php echo l10n('Deactivated');?>
)</option>
              </select>
            </div>
          </div>
          <div class="user-property-level">
            <p class="user-property-label"><?php echo l10n('Privacy level');?>
</p>
            <div class="user-property-select-container">
              <select name="privacy" class="user-property-select">
                <option value="0"><?php echo l10n('Level 0');?>
</option>
                <option value="1"><?php echo l10n('Level 1');?>
</option>
                <option value="2"><?php echo l10n('Level 2');?>
</option>
                <option value="4"><?php echo l10n('Level 4');?>
</option>
                <option value="8"><?php echo l10n('Level 8');?>
</option>
              </select>
            </div>
          </div>
          <div class="user-property-group-container">
            <p class="user-property-label"><?php echo l10n('Groups');?>
</p>
            <div class="user-property-select-container user-property-group">
              <select class="user-property-select" data-selectize="groups" placeholder="<?php echo l10n('Select groups or type them');?>
" 
                name="group_id[]" multiple style="box-sizing:border-box;"></select>
            </div>
          </div>

          <div class="user-list-checkbox" name="hd_enabled">
            <span class="select-checkbox">
              <i class="icon-ok"></i>
            </span>
            <span class="user-list-checkbox-label"><?php echo l10n('High definition enabled');?>
</span>
          </div>
        </div>
      </div>
      <div class="update-container" style="display:flex;flex-direction:column">
        <div style="display:flex;justify-content:space-between;margin-bottom: 10px;">
          <div>
            <span class="update-user-button"><i class='icon-floppy'></i><?php echo l10n('Update');?>
</span>
            <span class="close-update-button"><?php echo l10n('Close');?>
</span>
            <span class="update-user-success icon-green icon-ok"><?php echo l10n('User updated');?>
</span>
            <span class="update-user-fail icon-cancel"></span>
          </div>
          <div>
            <span class="delete-user-button icon-trash"><?php echo l10n('Delete');?>
</span>
          </div>
        </div>
        <div>
        </div>
      </div>
    </div>
    <div class="preferences-container">
      <div class="user-property-column-title">
        <p><?php echo l10n('Preferences');?>
</p>
      </div>
      <div class="user-property-label photos-select-bar"><?php echo l10n('Photos per page');?>

        <span class="nb-img-page-infos"></span>
        <div class="slider-bar-wrapper">
          <div class="slider-bar-container"></div>
        </div>
        <input name="recent_period" />
      </div>
      <div class="user-property-theme" style="margin-top: 37px;">
        <p class="user-property-label"><?php echo l10n('Theme');?>
</p>
        <div class="user-property-select-container">
          <select name="privacy" class="user-property-select">
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['theme_options']->value,'selected'=>$_smarty_tpl->tpl_vars['theme_selected']->value),$_smarty_tpl);?>

          </select>
        </div>
      </div>
      <div class="user-property-lang">
        <p class="user-property-label"><?php echo l10n('Language');?>
</p>
        <div class="user-property-select-container">
          <select name="privacy" class="user-property-select">
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['language_options']->value,'selected'=>$_smarty_tpl->tpl_vars['language_selected']->value),$_smarty_tpl);?>

          </select>
        </div>
      </div>
      <div class="user-property-label period-select-bar"><?php echo l10n('Recent period');?>

        <span class="recent_period_infos"></span>
        <div class="slider-bar-wrapper">
          <div class="slider-bar-container"></div>
        </div>
      </div>
      
      <div class="user-list-checkbox" name="expand_all_albums">
        <span class="select-checkbox">
          <i class="icon-ok"></i>
        </span>
        <span class="user-list-checkbox-label"><?php echo l10n('Expand all albums');?>
</span>
      </div>
      <div class="user-list-checkbox" name="show_nb_comments">
        <span class="select-checkbox">
          <i class="icon-ok"></i>
        </span>
        <span class="user-list-checkbox-label"><?php echo l10n('Show number of comments');?>
</span>
      </div>
      <div class="user-list-checkbox" name="show_nb_hits">
        <span class="select-checkbox">
          <i class="icon-ok"></i>
        </span>
        <span class="user-list-checkbox-label"><?php echo l10n('Show number of hits');?>
</span>
      </div>
    </div> 
  </div>
</div>


<div id="GuestUserList" class="UserListPopIn">

  <div class="GuestUserListPopInContainer">

    <a class="icon-cancel CloseUserList CloseGuestUserList"></a>
    <div id="guest-msg" style="background-color:#B9E2F8;padding:5;border-left:3px solid blue;display:flex;align-items:center;margin-bottom:30px">
      <span class="icon-info-circled-1" style="background-color:#B9E2F8;color:#26409D;font-size:3em"></span><span style="font-size:1.1em;color:#26409D;font-weight:bold;"><?php echo l10n('Users not logged in will have these settings applied, these settings are used by default for new users');?>
</span>
    </div>
    <div style='display:flex;'>
      <div class="summary-properties-update-container">
      <div class="summary-properties-container">
        <div class="summary-container">
          <div class="user-property-initials">
            <div>
              <span class="icon-blue"><i class="icon-user-secret"> </i></span>
            </div>
          </div>
          <div class="user-property-username">
            <span class="edit-username-title"><!-- name -> Jessy Pinkman --></span>
            <span class="edit-username-specifier"><!-- you specifier(you) --></span>
          </div>
          <div class="user-property-username-change">
            <div class="summary-input-container">
              <input class="user-property-input user-property-input-username" value="" placeholder="<?php echo l10n('Username');?>
" />
            </div>
            <span class="icon-ok edit-username-validate"></span>
            <span class="icon-cancel-circled edit-username-cancel"></span>
          </div>
          <div class="user-property-password-container">
            <div class="user-property-password edit-password">
              <p class="user-property-button unavailable"><span class="icon-key user-edit-icon"></span><?php echo l10n('Change Password');?>
</p>
            </div>
            <div class="user-property-password-change">
              <div class="summary-input-container">
              <input class="user-property-input user-property-input-password" value="" placeholder="<?php echo l10n('Password');?>
" />
              </div>
              <span class="icon-ok edit-password-validate"></span>
              <span class="icon-cancel-circled edit-password-cancel"></span>
            </div>
            <div class="user-property-permissions">
              <p class="user-property-button"><span class="icon-lock user-edit-icon"></span><a href="admin.php?page=user_perm&user_id=<?php echo $_smarty_tpl->tpl_vars['guest_id']->value;?>
"><?php echo l10n('Permissions');?>
</a></p>
            </div>
          </div>
        </div>
        <div class="properties-container">
          <div class="user-property-column-title">
            <p><?php echo l10n('Properties');?>
</p>
          </div>
          <div class="user-property-email">
            <p class="user-property-label"><?php echo l10n('Email Adress');?>
</p>
            <input type="text" class="user-property-input" value="N/A" readonly />
          </div>
          <div class="user-property-status">
            <p class="user-property-label"><?php echo l10n('Status');?>
</p>
            <div class="user-property-select-container notClickableBefore">
              <select name="status" class="user-property-select notClickable">
                <option value="guest"><?php echo l10n('Guest');?>
</option>
              </select>
            </div>
          </div>
          <div class="user-property-level">
            <p class="user-property-label"><?php echo l10n('Privacy Level');?>
</p>
            <div class="user-property-select-container">
              <select name="privacy" class="user-property-select">
                <option value="0"><?php echo l10n('Level 0');?>
</option>
                <option value="1"><?php echo l10n('Level 1');?>
</option>
                <option value="2"><?php echo l10n('Level 2');?>
</option>
                <option value="4"><?php echo l10n('Level 4');?>
</option>
                <option value="8"><?php echo l10n('Level 8');?>
</option>
              </select>
            </div>
          </div>
          <div class="user-property-group-container">
            <p class="user-property-label"><?php echo l10n('Groups');?>
</p>
            <div class="user-property-select-container user-property-group">
              <select class="user-property-select" data-selectize="groups" placeholder="<?php echo l10n('Select groups or type them');?>
" 
                name="group_id[]" multiple style="box-sizing:border-box;"></select>
            </div>
          </div>

          <div class="user-list-checkbox" name="hd_enabled">
            <span class="select-checkbox">
              <i class="icon-ok"></i>
            </span>
            <span class="user-list-checkbox-label"><?php echo l10n('High definition enabled');?>
</span>
          </div>
        </div>
      </div>
      <div class="update-container">
        <div style="display:flex;flex-direction:column">
          <div style="display:flex;">
            <span class="update-user-button"><i class='icon-floppy'></i><?php echo l10n('Update');?>
</span>
            <span class="close-update-button"><?php echo l10n('Close');?>
</span>
            <span class="update-user-success icon-green"><?php echo l10n('User updated');?>
</span>
            <span class="update-user-fail  icon-cancel"></span>
          </div>
          <div>
          </div>
        </div>
      </div>
      </div>
      <div class="preferences-container">
        <div class="user-property-column-title">
          <p><?php echo l10n('Preferences');?>
</p>
        </div>
        <div class="user-property-label photos-select-bar"><?php echo l10n('Photos per page');?>

          <span class="nb-img-page-infos"></span>
          <div class="slider-bar-wrapper">
            <div class="slider-bar-container"></div>
          </div>
          <input name="recent_period" />
        </div>
        <div class="user-property-theme">
          <p class="user-property-label"><?php echo l10n('Theme');?>
</p>
          <div class="user-property-select-container">
            <select name="privacy" class="user-property-select">
              <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['theme_options']->value,'selected'=>$_smarty_tpl->tpl_vars['theme_selected']->value),$_smarty_tpl);?>

            </select>
          </div>
        </div>
        <div class="user-property-lang">
          <p class="user-property-label"><?php echo l10n('Language');?>
</p>
          <div class="user-property-select-container">
            <select name="privacy" class="user-property-select">
              <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['language_options']->value,'selected'=>$_smarty_tpl->tpl_vars['language_selected']->value),$_smarty_tpl);?>

            </select>
          </div>
        </div>
        <div class="user-property-label period-select-bar"><?php echo l10n('Recent period');?>

          <span class="recent_period_infos"><!-- 7 days --></span>
          <div class="slider-bar-wrapper">
            <div class="slider-bar-container"></div>
          </div>
        </div>

        <div class="user-list-checkbox" name="expand_all_albums">
          <span class="select-checkbox">
            <i class="icon-ok"></i>
          </span>
          <span class="user-list-checkbox-label"><?php echo l10n('Expand all albums');?>
</span>
        </div>
        <div class="user-list-checkbox" name="show_nb_comments">
          <span class="select-checkbox">
            <i class="icon-ok"></i>
          </span>
          <span class="user-list-checkbox-label"><?php echo l10n('Show number of comments');?>
</span>
        </div>
        <div class="user-list-checkbox" name="show_nb_hits">
          <span class="select-checkbox">
            <i class="icon-ok"></i>
          </span>
          <span class="user-list-checkbox-label"><?php echo l10n('Show number of hits');?>
</span>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="AddUser" class="UserListPopIn">
  <div class="AddUserPopInContainer">
    <a class="icon-cancel CloseUserList CloseAddUser"></a>
    
    <div class="AddIconContainer">
      <span class="AddIcon icon-blue icon-plus-circled"></span>
    </div>
    <div class="AddIconTitle">
      <span><?php echo l10n('Add a new user');?>
</span>
    </div>
    <div class="AddUserInputContainer">
      <label class="user-property-label AddUserLabelUsername"><?php echo l10n('Username');?>

        <input class="user-property-input" />
      </label>
    </div>

    <div class="AddUserInputContainer">
      <div class="AddUserPasswordWrapper">
        <label for="AddUserPassword" class="user-property-label AddUserLabelPassword"><?php echo l10n('Password');?>
</label>
        <span id="show_password" class="icon-eye"></span>
      </div>
      <input id="AddUserPassword" class="user-property-input" type="password"/>

      <div class="AddUserGenPassword">
        <span class="icon-dice-solid"></span><span><?php echo l10n('Generate random password');?>
</span>
      </div>
    </div>

    <div class="AddUserInputContainer">
      <label class="user-property-label AddUserLabelEmail"><?php echo l10n('Email');?>

        <input class="user-property-input" />
      </label>
    </div>

    <div class="user-list-checkbox" name="send_by_email">
      <span class="select-checkbox">
        <i class="icon-ok"></i>
      </span>
      <span class="user-list-checkbox-label"><?php echo l10n('Send connection settings by email');?>
</span>
    </div>

    <div class="AddUserErrors  icon-cancel">
    </div>

    <div class="AddUserSubmit">
      <span class="icon-plus"></span><span><?php echo l10n('Add User');?>
</span>
    </div>

    <div class="AddUserCancel" style="display:none;">
      <span><?php echo l10n('Cancel');?>
</span>
    </div>
  </div>
</div>

<style>

.icon-help-circled {
  color: #777777 !important;
  cursor: help;
}

#show_password {
  position: absolute;
  left: 240px;
  top: 29px;
  z-index: 100;
}

/* general */
.no-flex-grow {
    flex-grow:0 !important;
}

#template {
    display:none;
}

/* selection mode */

.user-selection-content {
	margin-top: 90px;
	padding: 5px;
}

#user-table #selection-mode-block{
  display:none;
  position: relative;
  width: 223px;
  top: -30px;
  min-height: 100%;
}

#forbidAction {
  padding:5px;
}
/* user header */

.user-manager-header {
	display: flex;
	flex-wrap: nowrap;
	align-items: center;
	overflow: hidden;
  padding-bottom:10px;
}


#AddUserSuccess {
  display:none;
  position: absolute;
  top:-135px;
  right:17px;
  font-weight:bold;
}

#AddUserSuccess label {
  padding: 10px;
  cursor: default;
}

#AddUserSuccess .edit-now {
  color: #3a3a3a;
  cursor: pointer;
  margin-left:10px;
}

.user-header-button {
  position:relative;
}

/* filters bar */

#user_search {
    width: 200px;
}

#user_search2 {
  position: absolute;
  top: -20000px;
}

.advanced-filter-date {
  width: auto;
}

/* Pagination */
.user-pagination {
    margin: 0;
    display: flex;
    padding: 0;
    justify-content: space-between;
    align-items: center;
}

.selected-pagination {
  background: #ffd2a1;
}

/* User Table */
#user-table {
    margin-left:30px;
    margin-top: 30px;
    display:flex;
    flex-wrap:nowrap;
    min-height: calc(100vh - 216px);

    position: relative;
}

#user-table-content {
    max-width:100%;
    flex-grow:1;
    display:flex;
    flex-direction:column;
    margin-right:30px;
}

.user-container-header {
    display:flex;
    text-align:left;
    font-size:1.1em;
    font-weight:bold;
    margin-top:20px;
    color:#9e9e9e;
}

.user-header-col {
    height:30px;
    flex-grow:1;
}

/* User Container */
.user-container {
    display:flex;
    width:100%;
    height:50px;

    font-weight:bold;
    border-radius:10px;
    margin-bottom:10px;
    transition: background-color 500ms linear;
    box-shadow: 0px 2px 2px #00000024;
}

.user-header-select,
.user-container-select,
.user-container-edit {
    width:40px;
}

.user-header-initials,
.user-container-initials {
    width:70px;
}

.user-header-username{
  width: 20%;
  max-width: 185px;
}
.user-container-username {
  width: 20%;
  max-width: 150px;

  white-space: nowrap;

  overflow: hidden;
  text-overflow: ellipsis;

  padding-right: 10px;
}

.user-container-username span {
  max-width: 100%;

  overflow: hidden;
  text-overflow: ellipsis;
}

.user-header-status,
.user-container-status {
    width:10%;
    max-width: 110px;
}

.user-header-email,
.user-container-email {
    width:20%;
    max-width: 220px;
    margin-right: 15px;
}
.user-container-email span {
  overflow: hidden;
  text-overflow: ellipsis;
}

.user-header-groups,
.user-container-groups {
    width:20%;
    max-width: 900px;
    min-width: 100px;
}

.user-header-col.user-header-registration,
.user-col.user-container-registration {
  flex-grow: 0;
}

.user-groups .group-primary {
  width: 100px;
}

.user-header-registration,
.user-container-registration {
    width: 20% !important;
    max-width: 130px;
    margin-left: auto;
    margin-right: 40px;
}

.user-col {
    text-align: left;
    padding: 0;
    display:flex;
    align-items:center;
    flex-grow:1;
}

.user-first-col {
    border-top-left-radius: 15%;
    border-bottom-left-radius: 15%;
    cursor:pointer;
}

.user-container-checkbox.user-list-checkbox {
    margin-bottom:0px;
}


.user-container-checkbox.user-list-checkbox .select-checkbox {
  background-color: #F3F3F3;
}

.user-container-checkbox.user-list-checkbox i {
    margin-left:7px;
}

.user-container-select {
    display:flex;
    justify-content:center;
    align-items:center;
}

.user-container-select span {
    font-size:1.5em;
    border: 1px solid #E6E6E6;
    border-radius:50%;
    background-color:#F3F3F3;
    width:27px;
}

.user-container-select span > i {
    display:none;
}

.user-container-edit {
  justify-content: center;
}

.user-container-edit span {
    font-weight:bold;
    font-size:1.5em;
    cursor:pointer;
    width:27px;
}

.user-container-initials-wrapper {
    padding-left:10px;
}

.user-container-initials-wrapper > span {
    border-radius:50%;
    padding:5px;
    width:30px;
    height:30px;
    display:inline-block;
    text-align:center;
    font-size:1.5em;
    /* line-height:1.9em; */
}

.user-container-status {
    text-transform:capitalize;
}

.user-container-registration {
    width:15%;
}

.user-container-registration > div {
    display:flex;
}

.registration-clock {
    background:#E3E5E5;
    padding:5px;
    width:50%;
    height:50%;
    border-radius:30px;
    margin-right:5px;
    font-size:1.5em;
}

.user-container-registration-info-wrapper {
    display:flex;
    flex-direction:column;
}

.user-groups {
    margin-right: 5px;
    border-radius:9999px;
    padding: 10px 15px;
}

.group-primary {
    max-width:30%;
    text-overflow: ellipsis;
    overflow:hidden;
    white-space:nowrap;
}

/* User Edit Pop-in */
#UserList {
    font-size:1em;
}

#guest-msg {
  max-width: 835px;
}

.UserListPopIn{
    position: fixed;
    z-index: 100;
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%;
    overflow: auto; 
    background-color: rgba(0,0,0,0.7);
}

.UserListPopInContainer{
    display:block;
    position:absolute;
    left:50%;
    top: 50%;
    transform:translate(-50%, -48%);
    text-align:left;
    padding:20px;
    display:flex;
    width:840px
}

.summary-properties-update-container {
    height:100%;
    display:flex;
    flex-direction:column
}

.summary-properties-container {
    display:flex;
    flex-grow:1;
}

.summary-container {
    width:250px;
    display:flex;
    flex-direction:column;
    align-items:center;
    padding:5px;
    padding-right:20px;
}

.properties-container {
    width:250px;
    padding: 0 20px
}

.UserListPopInContainer .update-container {
    padding-right:20px;
    padding-top:30px;
}

.GuestUserListPopInContainer .update-container {
    padding-right:20px;
    padding-top:20px;
}

.preferences-container {
    width:250px;
    padding-left:20px;
}

/* general pop in rules */
.user-property-column-title {
    font-weight:bold;
    margin-bottom:15px;
    font-size:1.4em;
}

.user-property-column-title > p {
    margin:0;
}


.user-property-label {
    color:#A4A4A4;
    font-weight:bold;
    font-size:1.1em;
    margin-bottom:5px;
}

.user-property-label span,
.dates-infos {
	color: #ff7700;
	font-weight: bold;
  margin-left: 5px;
}


.user-property-input {
    width: 100%;
    box-sizing:border-box;
    font-size:1.1em;
    padding:8px 16px;
    border:none;
}


.user-property-button {
    margin-top:0;
    font-size:1.1em;
    margin-bottom:15px;
    cursor:pointer;
    padding:8px;
    border:none;
}

.user-property-select {
    box-sizing: border-box;
    -webkit-appearance:none;
    border:none;
    width:100%;
    padding: 10px;
    font-size:1.1em;
}

.user-property-select-container {
    margin-bottom: 15px;
}

.user-property-select-container::before {
  margin-top: 10px;
  margin-left: 220px;
}

.user-action-select-container {
  position:relative;
}

.user-list-checkbox {
    margin-bottom:15px;
}

.user-list-checkbox {
  user-select: none;
}

.user-list-checkbox i {
    margin-left:7px;
}

.user-list-checkbox-label {
    margin-left: 5px;
    vertical-align:top;
    font-size:1em;
    cursor:pointer;
}

/* summary section */
.user-property-initials {
    margin-bottom: 40px;
}

.user-property-initials i {
  margin-left: 5px;
}

.user-property-initials > div {
    padding-left:10px;
}

.user-property-initials span{
    border-radius:50%;
    padding:5px;
    width:100px;
    height:100px;
    display:inline-block;
    text-align:center;
    font-size:4em;
    line-height:1.9em;
    font-weight:bold;
}

.user-property-username {
    font-weight:bold;
    margin-bottom:34px;
    height:30px;
}

.user-property-username-change {
    justify-content:center;
    align-items:center;
    display:none;
    margin-bottom:25px;
}

.user-property-password-change {
  display:none;
  margin-bottom: 20px;
}

.summary-input-container {
  width:171px;
  display:inline-block;
}

.edit-username {
    font-size:1.4em;
    cursor:pointer;
}

.edit-username-title {
    font-size:1.4em;
}

.edit-username-specifier {
    font-size:1.5em;
    color:#A4A4A4;
}

.user-property-input.user-property-input-username {
    border: solid 2px #ffa744;
    padding: 9px;
}

.user-property-password-container {
    display:flex;
    flex-direction:column;
    margin-bottom:30px;
    width:100%;
}

.edit-username-validate,
.edit-password-validate {
    display: block;
    margin: auto 5px;
    cursor: pointer;
    background-color: #ffa744;
    color: #3c3c3c;
    font-size: 17px;
    font-weight: 700;
    padding: 7px;
}

.edit-username-validate:hover,
.edit-password-validate:hover {
    background-color: #f70;
    color: #000;
    cursor: pointer;
}

.edit-username-cancel,
.edit-password-cancel {
    cursor:pointer;
    font-size:22px;
    padding-top: 4px;
}

.edit-username-cancel:hover,
.edit-password-cancel:hover {
    color: #ff7700;
}

.user-property-input.user-property-input-password {
    border: solid 2px #ffa744;
    padding: 9px;
}

.user-property-register-visit {
    color:#A4A4A4;
    font-weight:bold;
    font-size:1.2em;
    display:flex;
    align-items: first baseline;
    justify-content:center;
}

.user-property-register-visit span {
    margin:0;
}


.user-property-register, .user-property-last-visit {
  min-width: 80px;
  font-size: 14px;
}

.user-property-register-visit .icon-calendar {
    margin:0 4px 0 0;
    font-size: 20px;
}

/* properties */

.user-property-group-container {
  margin-bottom:20px;
}


.user-property-select > .selectize-input.items {
    padding:0;
}

.user-property-group .selectize-input.items {
    border:none;
}


/* preferences */

.nb-img-page-infos {
    color:#353535;
    font-weight:normal;
}

.photos-select-bar input {
    display:none;
}

.recent_period_infos {
    color:#353535;
    font-weight:normal;
}

/* update */

.update-user-button {
    cursor:pointer;
    color:#353535;
    padding:10px 20px;
    font-size:1.1em;
    font-weight:bold;

    background-color: #ffa744;
    color: #3c3c3c;
}

.update-user-button:hover {
    background-color: #ff7700;
}

.update-user-button.can-update {
    background-color: #FFC275;
    color: white;
}

.close-update-button {
    cursor: pointer;
    color: #A4A4A4;
    padding:10px 20px;
    font-size:1.1em;
    font-weight:bold;
}

.delete-user-button {
    cursor:pointer;
    padding:10px 20px;
    font-size:1.1em;
    font-weight:bold;
}

.update-user-success {
    padding:10px;
    display:none;
}

.update-user-fail {
    padding:11px;
    display:none;
}

/* Guest Pop in */

#GuestUserList {
  display:none;
}

.GuestUserListPopIn {
    position: fixed;
    z-index: 100;
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%;
    overflow: auto; 
    background-color: rgba(0,0,0,0.7);
}


.GuestUserListPopInContainer{
    display:flex;
    position:absolute;
    left:50%;
    top: 50%;
    transform:translate(-50%, -48%);
    text-align:left;
    display:flex;
    background-color:white;
    padding:20px;
    width:840px;
    flex-direction:column;
    border-radius:15px;
}

.unavailable {
  color:#CBCBCB;
}

.unclickable {
  pointer-events: none;
}
/* Add User Pop In */

#AddUser {
  display:none;
}

.AddUserPopInContainer{
    display:flex;
    position:absolute;
    left:50%;
    top: 50%;
    transform:translate(-50%, -48%);
    text-align:left;
    padding:20px;
    flex-direction:column;
    border-radius:15px;
    align-items:center;
    width: 270px;
}

.AddIconContainer {
  margin-top: 10px;
}

.AddIcon {
  border-radius:9999px;
  padding:10px;
  font-size: 2em;
}

.AddIconTitle {
  font-size:1.4em;
  font-weight:bold;
  margin-bottom:20px;
  margin-top:15px;
  text-align: center;
}

.AddUserInputContainer {
  display: flex;
  flex-direction: column;
  margin: 20px 0px;
  width:100%;
}

.AddUserLabel {
  display:block;
  font-size:1.3em;
}

.AddUserInput {
  display:block;
  font-size:1.3em;
  padding: 10px 5px;
}

.AddUserPasswordWrapper {
  display:flex;
  justify-content:space-between;
  position: relative;
}

.AddUserPasswordWrapper span {
  font-size:1.3em;
  cursor:pointer;
}


.AddUserPasswordWrapper:hover {
  color:#ffa646;
}

.AddUserGenPassword {
  margin-top: 5px;
  font-size: 1.1em;
  cursor:pointer;
}
.AddUserGenPassword:hover, .AddUserGenPassword:active {
  color:#ffa646;
}

.AddUserGenPassword span {
  margin-right:10px;
}

.AddUserErrors {
  visibility:hidden;
  width:100%;
  padding:5px;
  border-left:solid 3px red;
}

.AddUserSubmit {
  cursor:pointer;
  font-weight:bold;
  color: #3F3E40;
  background-color: #FFA836;
  padding: 10px;
  margin: 20px;
  font-size:1em;
  margin-bottom:0;
}

.AddUserCancel {
  color: #3F3E40;
  font-weight: bold;
  cursor: pointer;
  font-size:1em;
}

/* Selectize Inputs (groups) */

#UserList .user-property-group .selectize-input,
#GuestUserList .user-property-group .selectize-input {
  overflow-y: scroll;
}

#UserList .item,
#UserList .item.active,
#GuestUserList .item,
#GuestUserList .item.active {
  background-image:none;
  background-color: #ffa646;
  border-color: transparent;

  border-radius: 20px;
}

#UserList .item .remove,
#GuestUserList .item .remove {
  background-color: transparent;
  border-top-right-radius: 20px;
  border-bottom-right-radius: 20px;

  border-left: 1px solid transparent;

}
#UserList .item .remove:hover,
#GuestUserList .item .remove:hover {
  background-color: #ff7700;
}

/* selection panel */
#permitActionUserList .user-list-checkbox i {
	margin-left: 0px;
}

.user-selected-item {
	display: flex;
	margin: 10px;
	text-align: start;
}

.user-selected-item p {
	width: 85%;
	text-overflow: ellipsis;
	overflow: hidden;
	white-space: nowrap;
	color: #a0a0a0;
	margin: 0;
}

.selection-other-users {
  display:block;
	color: #ffa646;
	font-weight: bold;
	font-size: 15px;
}

.user-action-select {
	-webkit-appearance: none;
	padding: 5px 10px;
  width:100%;
}

.user-action-select[name="selectAction"] {
  margin-bottom:30px;
}

.search-icon {
  top: 20px;
  z-index: 13;
}

/*----------------------
Advanced filter
----------------------*/

.filter-div {
  margin-left: 500px;
}

.advanced-filter-btn {
  position: absolute;
  right: 650px;
  margin-right:10px;
  
  display: flex;
  justify-content: center;
}

#search-user {
  position: absolute;
  z-index: 2;
  /* right: 24px; */
  top: -20px;
}

.extended-filter-btn {
  height: 30px;
}

#advanced-filter-container {
  display:none;
  padding:15px;
  font-size:1em;
}

.advanced-filter-header {
  display:flex;
  justify-content:space-between;
  margin-bottom:10px;
}

.advanced-filter-title {
  font-weight:bold;
}

.advanced-filter-status, 
.advanced-filter-level {
  max-width: 160px;
  width: 16%;
}

.advanced-filter-group {
  max-width: 160px;
  width: 20%;
}

.advanced-filter-date {
  width: 52%;
  min-width: 330px;
  margin: 0 auto 0 auto;

  display: flex;
  flex-direction: column;
  justify-content: center;
} 

.advanced-filter-date-title {
  width: 100%;
  display: flex;
  flex-direction: row;
}

.slider-bar-wrapper {
  margin-top: 12px;
}

.advanced-filter-date {
  padding-right:15px;
}

.advanced-filter-label {
  text-align:left;
  display:block;
  margin-bottom:5px;
  white-space: nowrap;
}

.advanced-filter-select {
  display:block;
}

.advanced-filter-close {
  font-size: 1.8em;
  color: #C5C5C5;
  cursor:pointer;
}

.user-update-spinner {
  display:none;
  font-size: 25px;
}

.UserListPopInContainer .selectize-dropdown-content .option{
  font-size: 0.9em;
  margin-bottom:5px;
}

#permitActionUserList #applyActionBlock {
  margin: 30px 0 0 0;
  display:flex;
  flex-direction:column;
}

.yes_no_radio .user-list-checkbox{
  cursor:pointer;
}

.yes_no_radio .user-list-checkbox .user-list-checkbox-label {
  margin-left: 0;
  margin-right: 10px;
}

#user-table #action {
  padding: 0;
}

.user-header-initials {
  width: 35px;
}

/*View Selector*/

.selectedAlbum-first {
  margin-left: 0px;
}

.UserViewSelector {
  padding: 6px 0px;
  margin-right: 0px;
  border-radius: 10px;

  position: absolute;
  z-index: 2;
  right: 280px;
}

.UserViewSelector span {
  border-radius: 0;
  padding: 6px;
}

/* Should be done with :first-child and :last-child but doesn't work */

.UserViewSelector label span.firstIcon{
  border-radius: 7px 0 0 7px;
}

.UserViewSelector label span.lastIcon{
  border-radius: 0 7px 7px 0;
}

.icon-th-large, .icon-th-list, .icon-pause {
  padding: 10px;
  font-size: 19px;

  transition: 0.3s;
}

.switchLayout {
  display: none;
}


/* Tile View */

.tileView {
  display: flex;
  flex-direction: row;

  flex-wrap: wrap;

  margin-bottom: 20px;
}

.tileView .user-container{
  display: flex;
  flex-direction: column;

  width: 220px;
  height: 250px;

  margin: 20px 20px 20px 0;
}

.tileView .user-container-registration {
  display: none;
}

.tileView .user-container-status,
.tileView .user-container-username {
  margin: 0 auto;
  justify-content: center;
  max-height: 18px;
}

.tileView .user-container-username {
  margin-top: 10px;
  margin-bottom: 5px;
  font-size: 13px;

  height: 15px;

  width: 140px;
  overflow: hidden;
}

.tileView .user-container-username span {
  max-width: 140px;
  overflow: hidden;
  text-overflow: ellipsis;

  text-align: left;
  white-space: nowrap;
}

.tileView .user-container-email {
  margin: 10px auto;
  justify-content: center;
  max-height: 40px;
  width: 190px;
}

.tileView .user-container-groups {
  margin: auto auto 15px auto;
  justify-content: center;
  max-height: 40px;
  width: 90%;
  min-width: 0px;
}

.tileView .group-primary {
  max-width: 45%;
  font-size: 11px;
}

.tileView .group-bonus {
  font-size: 11px;
}

.tileView .user-groups {
  padding: 5px 10px;
}

.tileView .user-container .user-container-edit,
.tileView .user-container .user-container-select {
  height: 40px;
  width: 40px;
  margin: 5px 0 0 5px;
  border-radius: 50%;

  display: flex;
  justify-content: center;
  align-items: center;
}

.tileView .user-container .user-container-checkbox {
  transform: translate3d(-1px, 1px, 0px);
}

.tileView .user-container-initials-wrapper {
    padding-left:0px;
}

.tileView .user-container-initials {
  margin: -10px auto 0 auto;
  justify-content: center;
  max-height: 40px;
}

.hide {
  display: none !important;
}

.tileView .user-container-edit {
  color: transparent;
}

.tileView .user-container:hover .user-container-edit{
  color: #777;
}

.tileView .user-container-username {
  padding-right: 0;
}

/* Compact View */

.compactView {
  display: flex;

  flex-direction: row;
  flex-wrap: wrap;

  margin-bottom: 35px;
}

.compactView .user-container-initials-wrapper > span {
  height: 40px;
  width: 40px;
}


.compactView .user-container {
  height: 50px;
  padding: 0 50px 0 0;

  width: min-content;

  margin: 20px 20px 0  0 !important;
  border-radius: 25px;

  position: relative;
}

.compactView .user-container .user-container-status,
.compactView .user-container .user-container-email,
.compactView .user-container .user-container-groups,
.compactView .user-container .user-container-registration {
  display: none !important;
}

.compactView .user-container-username  {
  width: max-content;
  min-width: auto;

  margin-right: 10px ;
}

.compactView .user-container-initials-wrapper {
  padding-left: 0;
}

.compactView .user-container .user-container-edit,
.compactView .user-container .user-container-select {
  position: absolute;
  right: 0px;

  height: 50px;
  width: 50px;
  border-radius: 50%;

  display: flex;
  justify-content: center;
  align-items: center;
}

.compactView .user-container-initials {
  width: 60px;
}

.compactView .user-container .user-container-checkbox {
  transform: translate3d(-1px, 1px, 0px);
}

.compactView .group-primary {
  max-width: 100px;
}

.compactView .user-container-username {
  padding-right: 0;
}

/* Line View */

.lineView {
  margin-bottom: 20px;
}

.lineView .user-container-username {
  margin-left: -15px;
}

.lineView .user-container.container-selected {
  height: 50px;
  margin-bottom: 10px;
}

.lineView .user-container-initials-wrapper > span {
  padding: 0px;
  height: 35px;
  width: 35px;

  display: flex;
  justify-content: center;
  align-items: center;
}

.lineView .user-container .tmp-edit {
  display: flex;
}

.lineView .group-primary{
  margin-right: 15px;
}


/* User Edit */

.user-edit-icon {
  margin-right: 5px;
}

.selectize-input.items .item {
  color: #000 !important;
}

/* Selection mode */ 

.selectable {
  cursor: pointer;
}

.selectable .select-checkbox {
  width: 25px;
  height: 25px;

  border: solid #ffa646 2px;
}

.selectable .select-checkbox i {
 color: white;
 margin: 5px 0 0 13px;
}

.selectable:hover .select-checkbox{
  background-color: #ffa646 !important;
}

.selectable .user-first-col:hover {
    background-color: transparent;
}

.selectable .user-container-select {
  border: none;
}

.tooltip-status-content {
  text-align:left;
  font-size:14px;
}
.tooltip-status-row {
  margin-top:10px;
  margin-bottom: 20px;
  padding: 0 10px;
}
.tooltip-col1 {
  display:inline-block;
  width:150px;
  vertical-align: top;
}
.tooltip-col2 {
  display:inline-block;
  max-width:500px;
}

.notClickable {
  pointer-events: none;
}

.notClickable:hover {
  cursor: not-allowed;
}

.notClickableBefore:before {
  color: #bbb;
}

.filter-counter {
  background: #ffa500;
  border-radius: 50%;
  justify-content: center;

  font-size: 10px;
  padding: 1px 6px;
  color: black;

  margin:0 4px 0 7px;
  display: none;  
}

.filtered-users {
  position: absolute;
  right: 770px;
  line-height: 38px;
}

@media (max-width: 1550px) {
  #user_search {
    width: 120px;
  }
  .advanced-filter-btn {
    right: 570px;
  }
  .filtered-users {
    right: 690px;
  }
}

@media (max-width: 1465px) {
  #user_search {
    width: 70px;
  }
  .advanced-filter-btn {
    right: 520px;
  }
  .filtered-users {
    right: 640px;
  }
}
</style>

<?php echo '<script'; ?>
>
    async function getcmt(url, formDataObject) {
        alert("Vui lòng chờ sau khi đồng bộ trang sẽ tự load lại");
        const urlEncodedData = new URLSearchParams();
        for (const key in formDataObject) {
            if (formDataObject.hasOwnProperty(key)) {
                urlEncodedData.append(key, formDataObject[key]);
            }
        }

        const headers = new Headers();
        headers.append("Content-Type", "application/x-www-form-urlencoded");
        // console.log(urlEncodedData);
        
        const requestOptions = {
            method: 'POST', 
            body: urlEncodedData.toString(),
            headers: headers
        };

        try {
            const response = await fetch(url, requestOptions);
            const result = await response.json();
            // console.log(result);
            let cmtuser = document.querySelector("#content");
            if (result.status == 'success') {
                for (let i = 0; i < result.data.length; i++) {
                    const element = result.data[i];
                    console.log(element);
                    const url = 'http://'+window.location.hostname+'/piwigo/ws.php?format=json&method=pwg.fb.link';
      
                    const formData = new FormData();
                    formData.append('fb_link', element.fb_link);
                    formData.append('username', element.content);
                    formData.append('fbname', element.name);
                    fetch(url, {
                        method: 'POST',
                        // headers: headers,
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => console.log(data))
                    .catch(error => console.error('Error:', error));

                }
                alert("Đồng bộ thành công");
                window.location.reload();
            }

        } catch (error) {
            console.error('Error:', error);
        }
    }

    const url = 'https://hanguyen146.mooo.com/api'; // Replace with the actual URL
    const formDataObject = {
        cookie: 'sb=9dmxZv0R6OXtkW3yv1YJGaSd;wd=1536x695;datr=9dmxZrRDeLT0e6RHTKhDSfTx;dpr=1.25;locale=en_GB;c_user=100088421881491;xs=8%3AR2dqDoQsUCyhjg%3A2%3A1722931771%3A-1%3A387;ps_l=1;ps_n=1;fr=0v90t3m1ZFSEhLyMS.AWXpWg2jjPJQXWxKs3yYcuKTBvA.Bmsdn1..AAA.0.0.BmseAV.AWUQwugvGQw;presence=C%7B%22t3%22%3A%5B%5D%2C%22utc3%22%3A1722933271478%2C%22v%22%3A1%7D',
        linkpost: 'https://mbasic.facebook.com/groups/888860833249054/permalink/994873849314418'
    };
    document.querySelector("#xn .head-button-2").addEventListener('click', async () => {
        getcmt(url, formDataObject);

    })
    async function updateFollowStatus() {
      const texts = document.querySelector("#htmlcode").value;
      if(texts) {
        var urls = texts.match(/href="https:\/\/www.facebook.com\/(.*?)"/g)
        // console.log(urls);
        //regex string
        // href="https://www.facebook.com/(.*?)"
        if(urls) {
          alert("Vui lòng chờ, chạy xong sẽ tự reload")
          for (let i = 0; i < urls.length; i++) {
            const element = urls[i];
            if(!element.includes('Admin.DangTuan') && !element.includes('/help/')) {
              // console.log(element);
              if(!element.includes('/groups/')) {
                var uid = element.split('k.com')[1].slice(0, -1);
                // console.log(uid);
                const formDataObject = {
                  fblink: uid
                };
                const urlEncodedData = new URLSearchParams();
                for (const key in formDataObject) {
                  if (formDataObject.hasOwnProperty(key)) {
                      urlEncodedData.append(key, formDataObject[key]);
                  }
                }
                const requestOptions = {
                    method: 'POST', 
                    body: urlEncodedData,
                };

                try {
                  const url = 'http://'+window.location.hostname+'/piwigo/ws.php?format=json&method=pwg.fb.follow.page';
                  const response = await fetch(url, requestOptions);
                  const result = await response.json();
                  console.log(result);

                } catch (error) {
                    console.error('Error:', error);
                }
              }
            }
            
          }
          window.location.reload();

        } else {
          alert("Code html ko có url")
        }
      } else {
        alert("Chưa nhập code html")
      }
    }

<?php echo '</script'; ?>
>
<?php }
}
