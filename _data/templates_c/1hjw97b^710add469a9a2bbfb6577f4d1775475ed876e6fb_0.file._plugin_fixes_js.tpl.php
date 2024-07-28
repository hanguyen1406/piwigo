<?php
/* Smarty version 4.3.1, created on 2024-06-22 10:32:05
  from '/var/www/html/piwigo/themes/bootstrap_darkroom/template/_plugin_fixes_js.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676a8251f73c4_93672664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '710add469a9a2bbfb6577f4d1775475ed876e6fb' => 
    array (
      0 => '/var/www/html/piwigo/themes/bootstrap_darkroom/template/_plugin_fixes_js.tpl',
      1 => 1713951806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6676a8251f73c4_93672664 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['loaded_plugins']->value['piwigo-openstreetmap'])) && ($_smarty_tpl->tpl_vars['BODY_ID']->value == "thePicturePage" || $_smarty_tpl->tpl_vars['BODY_ID']->value == "theCategoryPage")) {
$_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery'));
$_block_repeat=true;
echo $_block_plugin7->block_footer_script(array('require'=>'jquery'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>$(document).ready(function() {$('.pwg-icon-globe').removeClass('pwg-icon').closest('a').html('<i class="fas fa-globe fa-fw" aria-hidden="true"></i>').addClass('nav-link').removeClass('pwg-state-default pwg-button').closest('li').addClass('nav-item osm-button').find('a>i').after('<span class="d-lg-none ml-2">'+$('.osm-button').find('a').attr('title')+'</span>');;});<?php $_block_repeat=false;
echo $_block_plugin7->block_footer_script(array('require'=>'jquery'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ((isset($_smarty_tpl->tpl_vars['loaded_plugins']->value['rv_gmaps'])) && $_smarty_tpl->tpl_vars['BODY_ID']->value == "thePicturePage") {
$_block_plugin8 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin8, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery'));
$_block_repeat=true;
echo $_block_plugin8->block_footer_script(array('require'=>'jquery'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>$(document).ready(function() {$('.pwg-icon-map').removeClass('pwg-icon').closest('a').html('<i class="fas fa-globe fa-fw" aria-hidden="true"></i>').addClass('nav-link').removeClass('pwg-state-default pwg-button').wrap('<li class="nav-item rvgmaps-button"></li>').find('i').after('<span class="d-lg-none ml-2">'+$('.rvgmaps-button').find('a').attr('title')+'</span>');$('#map').wrap('<div id="mapContainer" class="container"></div>');$('#mapPicture').prependTo('#mapContainer').wrap('<div class="row justify-content-center"></div>');});<?php $_block_repeat=false;
echo $_block_plugin8->block_footer_script(array('require'=>'jquery'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ((isset($_smarty_tpl->tpl_vars['loaded_plugins']->value['rv_gmaps'])) && $_smarty_tpl->tpl_vars['BODY_ID']->value == "theCategoryPage") {
$_block_plugin9 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin9, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery'));
$_block_repeat=true;
echo $_block_plugin9->block_footer_script(array('require'=>'jquery'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>$(document).ready(function() {$('.pwg-icon-map').removeClass('pwg-icon').closest('a').html('<i class="fas fa-globe fa-fw" aria-hidden="true"></i>').addClass('nav-link').removeClass('pwg-state-default pwg-button').closest('li').addClass('nav-item rvgmaps-button').find('a>i').after('<span class="d-lg-none ml-2">'+$('.rvgmaps-button').find('a').attr('title')+'</span>');});<?php $_block_repeat=false;
echo $_block_plugin9->block_footer_script(array('require'=>'jquery'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ((isset($_smarty_tpl->tpl_vars['loaded_plugins']->value['rv_gmaps'])) && $_smarty_tpl->tpl_vars['BODY_ID']->value == "theMapListPage") {
$_block_plugin10 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin10, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery'));
$_block_repeat=true;
echo $_block_plugin10->block_footer_script(array('require'=>'jquery'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>$(document).ready(function() {$('#theMapListPage #wrapper').addClass('container');$('#theMapListPage ul.categoryActions').addClass('nav flex-column').find('li').addClass('nav-item').find('a').addClass('nav-link');$('#theMapListPage .pwg-icon-globe').addClass('fa fa-globe').removeClass('pwg-icon pwg-icon-globe');$('#theMapListPage .pwg-icon-home').addClass('fa fa-home').removeClass('pwg-icon pwg-icon-home');$('#theMapListPage #thumbnails').addClass('row').changeElementType('div');$('#theMapListPage #thumbnails').find('.card-thumbnail').addClass('mb-3');});<?php $_block_repeat=false;
echo $_block_plugin10->block_footer_script(array('require'=>'jquery'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ((isset($_smarty_tpl->tpl_vars['loaded_plugins']->value['oAuth']))) {
$_block_plugin11 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin11, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery'));
$_block_repeat=true;
echo $_block_plugin11->block_footer_script(array('require'=>'jquery'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>$(document).ready(function() {$('#navbar-menubar>.navbar-nav>dd>#quickconnect').attr('id', 'oAuthQuickconnect');$('#oAuthQuickconnect legend').addClass('dropdown-header').appendTo('#identificationDropdown>.dropdown-menu').changeElementType('li');$('#oAuthQuickconnect').closest('dd').appendTo('#identificationDropdown>.dropdown-menu');$('#oAuthQuickconnect').closest('dd').changeElementType('li');});<?php $_block_repeat=false;
echo $_block_plugin11->block_footer_script(array('require'=>'jquery'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ((isset($_smarty_tpl->tpl_vars['loaded_plugins']->value['ProtectedAlbums'])) && $_smarty_tpl->tpl_vars['BODY_ID']->value == 'theCategoryPage') {
$_block_plugin12 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin12, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery'));
$_block_repeat=true;
echo $_block_plugin12->block_footer_script(array('require'=>'jquery'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>var form = $('#content>form');$(form).addClass('form-inline').wrap('<div class="col-sm-12"></div>');$(form).find('legend').changeElementType('h4');$(form).find('fieldset').changeElementType('div');$(form).find('div').addClass('form-group');$(form).find('div>input[type="password"]').addClass('form-control');$(form).find('div>input[type="submit"]').changeElementType('button');$(form).find('button').addClass('btn btn-primary btn-raised').text('Login');$(form).find('label').remove();<?php $_block_repeat=false;
echo $_block_plugin12->block_footer_script(array('require'=>'jquery'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ((isset($_smarty_tpl->tpl_vars['loaded_plugins']->value['user_custom_fields'])) && ($_smarty_tpl->tpl_vars['BODY_ID']->value == 'theProfilePage' || $_smarty_tpl->tpl_vars['BODY_ID']->value == 'theRegisterPage')) {
$_block_plugin13 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin13, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery'));
$_block_repeat=true;
echo $_block_plugin13->block_footer_script(array('require'=>'jquery'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>var ucf_body_id = $('<?php if ($_smarty_tpl->tpl_vars['BODY_ID']->value == 'theProfilePage') {?>#theProfilePage<?php } else { ?>#theRegisterPage<?php }?>');$(document).ready(function() {$(ucf_body_id).find('fieldset>legend').remove();$(ucf_body_id).find('fieldset>ul>li').changeElementType('div');$(ucf_body_id).find('fieldset>ul>div').addClass('form-group row').unwrap();$(ucf_body_id).find('fieldset>div>.property>label').addClass('col-sm-2 control-label').unwrap();$(ucf_body_id).find('fieldset>.form-group>input').wrap('<div class="col-sm-4"></div>').addClass('form-control');$('#theProfilePage .property').addClass('col-sm-2 control-label').changeElementType('label');var u = $('#theProfilePage form#profile .form-group').first().contents().filter(function() { return this.nodeType == 3; }).eq(1);$(u).wrap('<div class="col-sm-4"><p class="form-control-static"></p></div>');});<?php $_block_repeat=false;
echo $_block_plugin13->block_footer_script(array('require'=>'jquery'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ((isset($_smarty_tpl->tpl_vars['loaded_plugins']->value['BatchDownloader']))) {
$_block_plugin14 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin14, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery'));
$_block_repeat=true;
echo $_block_plugin14->block_footer_script(array('require'=>'jquery'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>$(document).ready(function() {if ($('#batchDownloadLink').next('div#batchDownloadBox').length > 0) {$('#batchDownloadLink').closest('li').addClass('nav-item dropdown');$('#batchDownloadLink').addClass('nav-link dropdown-toggle').removeClass('pwg-state-default pwg-button').attr('data-toggle', 'dropdown').attr('href', '#');$('#batchDownloadBox').off();$('#batchDownloadBox a').addClass('dropdown-item');$('#batchDownloadBox').attr('role', 'menu').attr('style', '');$('#batchDownloadBox .switchBoxTitle').addClass('dropdown-header').removeClass('switchBoxTitle');$('#batchDownloadBox br').remove();$('#batchDownloadBox').addClass('dropdown-menu dropdown-menu-right').removeClass('switchBox');$('#batchDownloadLink .pwg-button-text').addClass('d-lg-none ml-2').removeClass('pwg-button-text');} else {$('#batchDownloadLink').closest('li').addClass('nav-item');$('#batchDownloadLink').addClass('nav-link').removeClass('pwg-state-default pwg-button');}$('.batch-downloader-icon').addClass('fas fa-cloud-download-alt fa-fw').removeClass('pwg-icon').after('<span class="d-lg-none"> ' + $('#batchDownloadLink').attr('title') + '</span>');});$(window).on('load', function() {if ($('#batchDownloadLink').next('div#batchDownloadBox').length > 0) {$('#batchDownloadLink').next('div#batchDownloadBox').off();$('#batchDownloadLink').off().on('click', function() { $('#batchDownloadLink').dropdown() });}});<?php $_block_repeat=false;
echo $_block_plugin14->block_footer_script(array('require'=>'jquery'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ((isset($_smarty_tpl->tpl_vars['loaded_plugins']->value['download_by_size']))) {
$_block_plugin15 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin15, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery'));
$_block_repeat=true;
echo $_block_plugin15->block_footer_script(array('require'=>'jquery'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>$(document).ready(function() {if ($('#downloadSizeBox').length < 1) {return false;}var liDownloadSizeLink = $('#downloadSwitchLink').closest('li');$(liDownloadSizeLink).addClass('dropdown');$('#downloadSizeBox').appendTo(liDownloadSizeLink);$('#downloadSwitchLink').addClass('dropdown-toggle').removeClass('pwg-state-default pwg-button').attr('data-toggle', 'dropdown');$('#downloadSizeBox').addClass('dropdown-menu dropdown-menu-right').removeClass('switchBox');$('#downloadSizeBox a').addClass('dropdown-item');$('#downloadSizeBox').attr('role', 'menu').attr('style', '');$('#downloadSizeBox .switchBoxTitle').addClass('dropdown-header').removeClass('switchBoxTitle');$('#downloadSizeBox br').remove();});$(window).on("load", function() {$('#downloadSwitchLink').off().on('click', function() {$('#downloadSizeBox').off();$('#downloadSwitchLink').dropdown();});});<?php $_block_repeat=false;
echo $_block_plugin15->block_footer_script(array('require'=>'jquery'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ((isset($_smarty_tpl->tpl_vars['loaded_plugins']->value['PWG_Stuffs']))) {
$_block_plugin16 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin16, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery'));
$_block_repeat=true;
echo $_block_plugin16->block_footer_script(array('require'=>'jquery'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>$(document).ready(function() {<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->page_header == 'jumbotron') {?>var stuffAboveContent = $('.jumbotron').next('.pwgstuffs-container');<?php } elseif ($_smarty_tpl->tpl_vars['theme_config']->value->page_header == 'fancy') {?>var stuffAboveContent = $('.page-header').next('.pwgstuffs-container');<?php } else { ?>var stuffAboveContent = $('.navbar-main').next('.pwgstuffs-container');<?php }?>$(stuffAboveContent).insertAfter('.navbar-contextual');});<?php $_block_repeat=false;
echo $_block_plugin16->block_footer_script(array('require'=>'jquery'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ((isset($_smarty_tpl->tpl_vars['loaded_plugins']->value['Piwecard'])) && $_smarty_tpl->tpl_vars['BODY_ID']->value == 'thePicturePage') {
$_block_plugin17 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin17, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery'));
$_block_repeat=true;
echo $_block_plugin17->block_footer_script(array('require'=>'jquery'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>$(document).ready(function() {$('.imageComment .createECardOpen').appendTo('#important-info').addClass('btn btn-primary mt-2');});<?php $_block_repeat=false;
echo $_block_plugin17->block_footer_script(array('require'=>'jquery'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ((isset($_smarty_tpl->tpl_vars['loaded_plugins']->value['tag_groups'])) && $_smarty_tpl->tpl_vars['BODY_ID']->value == 'theTagsPage') {
$_block_plugin18 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin18, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery'));
$_block_repeat=true;
echo $_block_plugin18->block_footer_script(array('require'=>'jquery'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>$(document).ready(function() {$('.container table').addClass('table table-sm').attr('id', 'tagGroupsTable');});<?php $_block_repeat=false;
echo $_block_plugin18->block_footer_script(array('require'=>'jquery'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ((isset($_smarty_tpl->tpl_vars['loaded_plugins']->value['Contact1menu']))) {
$_block_plugin19 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin19, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery'));
$_block_repeat=true;
echo $_block_plugin19->block_footer_script(array('require'=>'jquery'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>$(document).ready(function() {$('#navbar-menubar a[title="<?php echo l10n('Contact');?>
"]').addClass('nav-link').closest('dt').addClass('nav-item').attr('id', 'Contact1menu').changeElementType('li');});<?php $_block_repeat=false;
echo $_block_plugin19->block_footer_script(array('require'=>'jquery'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['loaded_plugins']->value['rv_tscroller']))) {
$_block_plugin20 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin20, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery'));
$_block_repeat=true;
echo $_block_plugin20->block_footer_script(array('require'=>'jquery'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
$(document).ready(function() {
  if (window.jQuery && window.RVTS && RVTS.start>0) {
        var $f = $('.navbar-contextual .navbar-brand a:last-child');
        $('#rvtsUp').html( '<div id="rvtsUp" style="text-align:center;font-size:120%;margin:10px"><a href="'+$f.attr("href")+'">'+$f.html()+'</a> | <a href="javascript:RVTS.loadUp()">'+RVTS.prevMsg+"</a></div>" );
  }
});
<?php $_block_repeat=false;
echo $_block_plugin20->block_footer_script(array('require'=>'jquery'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
