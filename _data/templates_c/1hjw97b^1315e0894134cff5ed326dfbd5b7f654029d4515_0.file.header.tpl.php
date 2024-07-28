<?php
/* Smarty version 4.3.1, created on 2024-06-22 10:32:05
  from '/var/www/html/piwigo/themes/bootstrap_darkroom/template/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676a8251cbb09_81084676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1315e0894134cff5ed326dfbd5b7f654029d4515' => 
    array (
      0 => '/var/www/html/piwigo/themes/bootstrap_darkroom/template/header.tpl',
      1 => 1713951806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6676a8251cbb09_81084676 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/piwigo/include/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['lang_info']->value['code'];?>
" dir="<?php echo $_smarty_tpl->tpl_vars['lang_info']->value['direction'];?>
">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['CONTENT_ENCODING']->value;?>
">
    <meta name="generator" content="Piwigo (aka PWG), see piwigo.org">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php if ($_smarty_tpl->tpl_vars['meta_ref_enabled']->value) {
if ((isset($_smarty_tpl->tpl_vars['INFO_AUTHOR']->value))) {?>
    <meta name="author" content="<?php echo smarty_modifier_replace(strip_tags((string) $_smarty_tpl->tpl_vars['INFO_AUTHOR']->value),'"',' ');?>
">
<?php }
if ((isset($_smarty_tpl->tpl_vars['related_tags']->value))) {?>
    <meta name="keywords" content="<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['related_tags']->value, 'tag', false, NULL, 'tag_loop', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_tag_loop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_tag_loop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_tag_loop']->value['index'];
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_tag_loop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_tag_loop']->value['first'] : null)) {?>, <?php }
echo $_smarty_tpl->tpl_vars['tag']->value['name'];
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>">
<?php }
if ((isset($_smarty_tpl->tpl_vars['COMMENT_IMG']->value))) {?>
    <meta name="description" content="<?php echo smarty_modifier_replace(strip_tags((string) $_smarty_tpl->tpl_vars['COMMENT_IMG']->value),'"',' ');
if ((isset($_smarty_tpl->tpl_vars['INFO_FILE']->value))) {?> - <?php echo $_smarty_tpl->tpl_vars['INFO_FILE']->value;
}?>">
<?php } else { ?>
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['PAGE_TITLE']->value;
if ((isset($_smarty_tpl->tpl_vars['INFO_FILE']->value))) {?> - <?php echo $_smarty_tpl->tpl_vars['INFO_FILE']->value;
}?>">
<?php }
}?>

    <title><?php if ($_smarty_tpl->tpl_vars['PAGE_TITLE']->value != l10n('Home') && $_smarty_tpl->tpl_vars['PAGE_TITLE']->value != $_smarty_tpl->tpl_vars['GALLERY_TITLE']->value) {
echo $_smarty_tpl->tpl_vars['PAGE_TITLE']->value;?>
 | <?php }
echo $_smarty_tpl->tpl_vars['GALLERY_TITLE']->value;?>
</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;
echo $_smarty_tpl->tpl_vars['themeconf']->value['icon_dir'];?>
/favicon.ico">
    <link rel="icon" sizes="192x192" href="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
themes/bootstrap_darkroom/img/logo.png">
    <link rel="apple-touch-icon" sizes="192x192" href="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
themes/bootstrap_darkroom/img/logo.png">
    <link rel="start" title="<?php echo l10n('Home');?>
" href="<?php echo $_smarty_tpl->tpl_vars['U_HOME']->value;?>
" >
    <link rel="search" title="<?php echo l10n('Search');?>
" href="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
search.php">
<?php if ((isset($_smarty_tpl->tpl_vars['first']->value['U_IMG']))) {?>
    <link rel="first" title="<?php echo l10n('First');?>
" href="<?php echo $_smarty_tpl->tpl_vars['first']->value['U_IMG'];?>
">
<?php }
if ((isset($_smarty_tpl->tpl_vars['previous']->value['U_IMG']))) {?>
    <link rel="prev" title="<?php echo l10n('Previous');?>
" href="<?php echo $_smarty_tpl->tpl_vars['previous']->value['U_IMG'];?>
">
<?php }
if ((isset($_smarty_tpl->tpl_vars['next']->value['U_IMG']))) {?>
    <link rel="next" title="<?php echo l10n('Next');?>
" href="<?php echo $_smarty_tpl->tpl_vars['next']->value['U_IMG'];?>
">
<?php }
if ((isset($_smarty_tpl->tpl_vars['last']->value['U_IMG']))) {?>
    <link rel="last" title="<?php echo l10n('Last');?>
" href="<?php echo $_smarty_tpl->tpl_vars['last']->value['U_IMG'];?>
">
<?php }
if ((isset($_smarty_tpl->tpl_vars['U_UP']->value))) {?>
    <link rel="up" title="<?php echo l10n('Thumbnails');?>
" href="<?php echo $_smarty_tpl->tpl_vars['U_UP']->value;?>
">
<?php }
if ((isset($_smarty_tpl->tpl_vars['U_PREFETCH']->value))) {?>
    <link rel="prefetch" href="<?php echo $_smarty_tpl->tpl_vars['U_PREFETCH']->value;?>
">
<?php }
if ((isset($_smarty_tpl->tpl_vars['U_CANONICAL']->value))) {?>
    <link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['U_CANONICAL']->value;?>
">
<?php }
if (!empty($_smarty_tpl->tpl_vars['page_refresh']->value)) {?>
    <meta http-equiv="refresh" content="<?php echo $_smarty_tpl->tpl_vars['page_refresh']->value['TIME'];?>
;url=<?php echo $_smarty_tpl->tpl_vars['page_refresh']->value['U_REFRESH'];?>
">
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->bootstrap_theme) {?>     <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/bootstrap_darkroom/css/".((string)$_smarty_tpl->tpl_vars['theme_config']->value->bootstrap_theme)."/bootstrap.min.css",'order'=>-20),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/bootstrap_darkroom/css/bootstrap-default/bootstrap.min.css",'order'=>-20),$_smarty_tpl ) );
}
if ($_smarty_tpl->tpl_vars['theme_config']->value->bootstrap_theme == 'bootstrap-darkroom' || $_smarty_tpl->tpl_vars['theme_config']->value->bootstrap_theme == 'material-darkroom') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/bootstrap_darkroom/node_modules/typeface-pt-sans/index.css",'order'=>-19),$_smarty_tpl ) );
} elseif ((0 === strpos($_smarty_tpl->tpl_vars['theme_config']->value->bootstrap_theme,'material')) || $_smarty_tpl->tpl_vars['theme_config']->value->bootstrap_theme == 'bootstrap-default') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/bootstrap_darkroom/node_modules/typeface-roboto/index.css",'order'=>-19),$_smarty_tpl ) );
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>'themes/bootstrap_darkroom/node_modules/@fortawesome/fontawesome-free/css/all.min.css','order'=>-14),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>'themes/bootstrap_darkroom/assets/photography-icons/css/PhotographyIcons.css','order'=>-13),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>'themes/bootstrap_darkroom/node_modules/bootstrap-social/bootstrap-social.css','order'=>-12),$_smarty_tpl ) );
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['themes']->value, 'theme');
$_smarty_tpl->tpl_vars['theme']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->do_else = false;
if ($_smarty_tpl->tpl_vars['theme']->value['load_css']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/".((string)$_smarty_tpl->tpl_vars['theme']->value['id'])."/theme.css",'order'=>-10),$_smarty_tpl ) );
}
if (!empty($_smarty_tpl->tpl_vars['theme']->value['local_head'])) {
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['theme']->value['local_head'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('load_css'=>$_smarty_tpl->tpl_vars['theme']->value['load_css']), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if (file_exists("local/bootstrap_darkroom/custom.css")) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"local/bootstrap_darkroom/custom.css",'order'=>10000),$_smarty_tpl ) );
}?><!-- COMBINED_CSS --><?php if ($_smarty_tpl->tpl_vars['BODY_ID']->value == 'theAdditionalPage' || $_smarty_tpl->tpl_vars['BODY_ID']->value == 'theHomePage' || $_smarty_tpl->tpl_vars['bootstrap_darkroom_core_js_in_header']->value == true) {
$_smarty_tpl->_assignInScope('loc', "header");
} else {
$_smarty_tpl->_assignInScope('loc', "footer");
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery','path'=>'themes/bootstrap_darkroom/node_modules/jquery/dist/jquery.min.js','load'=>$_smarty_tpl->tpl_vars['loc']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery-migrate','require'=>'jquery','path'=>'themes/bootstrap_darkroom/node_modules/jquery-migrate/dist/jquery-migrate.min.js','load'=>$_smarty_tpl->tpl_vars['loc']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.ajaxmanager','require'=>'jquery','path'=>'themes/default/js/plugins/jquery.ajaxmanager.js','load'=>'footer'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'thumbnails.loader','require'=>'jquery.ajaxmanager','path'=>'themes/default/js/thumbnails.loader.js','load'=>'footer'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'popper.js','require'=>'jquery','path'=>'themes/bootstrap_darkroom/node_modules/popper.js/dist/umd/popper.min.js','load'=>$_smarty_tpl->tpl_vars['loc']->value),$_smarty_tpl ) );
if (preg_match('/^material/',$_smarty_tpl->tpl_vars['theme_config']->value->bootstrap_theme)) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'bootstrap','require'=>'popper.js','path'=>'themes/bootstrap_darkroom/node_modules/bootstrap-material-design/dist/js/bootstrap-material-design.min.js','load'=>$_smarty_tpl->tpl_vars['loc']->value),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'bootstrap','require'=>'popper.js','path'=>'themes/bootstrap_darkroom/node_modules/bootstrap/dist/js/bootstrap.min.js','load'=>$_smarty_tpl->tpl_vars['loc']->value),$_smarty_tpl ) );
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>$_smarty_tpl->tpl_vars['themeconf']->value['name'],'require'=>'bootstrap','path'=>'themes/bootstrap_darkroom/js/theme.js','load'=>'footer'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_combined_scripts'][0], array( array('load'=>'header'),$_smarty_tpl ) );?>

<?php if (!empty($_smarty_tpl->tpl_vars['head_elements']->value)) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['head_elements']->value, 'elt');
$_smarty_tpl->tpl_vars['elt']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['elt']->value) {
$_smarty_tpl->tpl_vars['elt']->do_else = false;
echo $_smarty_tpl->tpl_vars['elt']->value;?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
</head>

<body id="<?php echo $_smarty_tpl->tpl_vars['BODY_ID']->value;?>
" class="<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BODY_CLASSES']->value, 'class');
$_smarty_tpl->tpl_vars['class']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['class']->value) {
$_smarty_tpl->tpl_vars['class']->do_else = false;
echo $_smarty_tpl->tpl_vars['class']->value;?>
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>"  data-infos='<?php echo $_smarty_tpl->tpl_vars['BODY_DATA']->value;?>
'>

<div id="wrapper">
<?php if ((isset($_smarty_tpl->tpl_vars['MENUBAR']->value))) {?>
        <nav class="navbar navbar-expand-lg navbar-main <?php echo $_smarty_tpl->tpl_vars['theme_config']->value->navbar_main_bg;?>
 <?php if ($_smarty_tpl->tpl_vars['theme_config']->value->page_header == 'fancy') {?>navbar-dark navbar-transparent fixed-top<?php } else {
echo $_smarty_tpl->tpl_vars['theme_config']->value->navbar_main_style;
}?>">
            <div class="container<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->fluid_width) {?>-fluid<?php }?>">
<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->logo_image_enabled && $_smarty_tpl->tpl_vars['theme_config']->value->logo_image_path !== '') {?>
                <a class="navbar-brand mr-auto" href="<?php echo $_smarty_tpl->tpl_vars['U_HOME']->value;?>
"><img class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;
echo $_smarty_tpl->tpl_vars['theme_config']->value->logo_image_path;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['GALLERY_TITLE']->value;?>
"/></a>
<?php } else { ?>
                <a class="navbar-brand mr-auto" href="<?php echo $_smarty_tpl->tpl_vars['U_HOME']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['GALLERY_TITLE']->value;?>
</a>
<?php }?>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-menubar" aria-controls="navbar-menubar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fas fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar-menubar">
<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->quicksearch_navbar) {?>
                  <form class="form-inline navbar-form ml-auto" role="search" action="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
qsearch.php" method="get" id="quicksearch" onsubmit="return this.q.value!='' && this.q.value!=qsearch_prompt;">
                    <i class="fas fa-search" title="<?php echo l10n('Search');?>
" aria-hidden="true"></i>
                    <div class="form-group">
                        <input type="text" name="q" id="qsearchInput" class="form-control" placeholder="<?php echo l10n('Search');?>
" />
                    </div>
                  </form>
<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery'));
$_block_repeat=true;
echo $_block_plugin1->block_footer_script(array('require'=>'jquery'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
var qsearch_icon = $('#navbar-menubar>#quicksearch>.fa-search');
var qsearch_text = $('#navbar-menubar>#quicksearch #qsearchInput');
$(qsearch_icon).click(function () {
  $(qsearch_text).focus();
});
$(document).ready(function() {
  $('#navbar-menubar>#quicksearch').css({'color': $('#navbar-menubar .nav-link').css('color')});
});
<?php $_block_repeat=false;
echo $_block_plugin1->block_footer_script(array('require'=>'jquery'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
echo $_smarty_tpl->tpl_vars['MENUBAR']->value;?>

                </div>
            </div>
        </nav>
<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->page_header == 'fancy') {
$_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery'));
$_block_repeat=true;
echo $_block_plugin2->block_footer_script(array('require'=>'jquery'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
var sfactor = $(".page-header").height() - 50;
var color = "rgba(0, 0, 0, 1)";
var nb_main_height = $('.navbar-main').outerHeight();
$(window).resize(function(){
  sfactor = $(".page-header").height() -50;
});

function setNavbarOpacity() {
  var alpha = 0 + ($(window).scrollTop() / sfactor);
  $('.page-header').attr('style', 'background-color: ' + setColorOpacity(color, alpha) + ' !important');
  $('.page-header .content-center').css('opacity', 1 - alpha * 2.5);
  $('.page-header .page-header-image').css('opacity', 1 - alpha);
  var top_offset = $(window).scrollTop();
  var p_size = $('.page-header').outerHeight() - $(".navbar-main").outerHeight() - $(".navbar-contextual").outerHeight();
  var c_size = $('.page-header').outerHeight() - $(".navbar-contextual").outerHeight();
  if (!$('.navbar-contextual .navbar-collapse').hasClass('show')) {
    if (top_offset >= c_size) {
      $('.navbar-contextual.navbar-transparent').attr('style', 'background-color: ' + setColorOpacity(color, 1) + ' !important;');
    } else {
      $('.navbar-contextual.navbar-transparent').removeAttr('style');
    }
  }
  if (top_offset >= p_size) {
    if ($('.navbar-main .navbar-nav').find('.nav-item.dropdown.show').length == 0) {
      $('.navbar-main').css('top', 0-(top_offset-p_size));
    }
  } else {
    $('.navbar-main').css('top', 0);
  }

  if($('.page-header.page-header-small').length == 0) {
    if (top_offset > 5) {
      $('.navbar-contextual.navbar-transparent').fadeIn('slow').addClass('d-flex');
    } else {
      $('.navbar-contextual.navbar-transparent').fadeOut('slow').removeClass('d-flex');
    }
  }
}

$(window).scroll(function(){
  setNavbarOpacity();
});
$('.navbar-main .navbar-collapse').on('show.bs.collapse', function() {
  $('.navbar-main').attr('style', 'background-color: rgba(0, 0, 0, 0.9) !important');
});
$('.navbar-main .navbar-collapse').on('hidden.bs.collapse', function() {
  $('.navbar-main').attr('style', '');
});
<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->page_header_both_navs) {?>
$('.navbar-contextual .navbar-collapse').on('show.bs.collapse', function() {
  $('.navbar-contextual').attr('style', 'background-color: rgba(0, 0, 0, 0.9) !important');
});
$('.navbar-contextual .navbar-collapse').on('hidden.bs.collapse', function() {
  $('.navbar-contextual').attr('style', '');
  setNavbarOpacity();
});
<?php }
$_block_repeat=false;
echo $_block_plugin2->block_footer_script(array('require'=>'jquery'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}?>

<?php if (!(isset($_smarty_tpl->tpl_vars['slideshow']->value)) && !empty($_smarty_tpl->tpl_vars['MENUBAR']->value)) {
if ($_smarty_tpl->tpl_vars['theme_config']->value->page_header == 'jumbotron') {?>
        <div class="jumbotron mb-0">
            <div class="container<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->fluid_width) {?>-fluid<?php }?>">
                <div id="theHeader"><?php echo $_smarty_tpl->tpl_vars['PAGE_BANNER']->value;?>
</div>
            </div>
        </div>
<?php } elseif ($_smarty_tpl->tpl_vars['theme_config']->value->page_header == 'fancy') {?>
        <div class="page-header<?php if (!$_smarty_tpl->tpl_vars['theme_config']->value->page_header_full || ($_smarty_tpl->tpl_vars['theme_config']->value->page_header_full && !$_smarty_tpl->tpl_vars['is_homepage']->value)) {?> page-header-small<?php }?>">
            <div class="page-header-image" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['theme_config']->value->page_header_image;?>
); transform: translate3d(0px, 0px, 0px);"></div>
            <div class="container">
                <div id="theHeader" class="content-center">
                    <?php echo $_smarty_tpl->tpl_vars['PAGE_BANNER']->value;?>

                </div>
            </div>
        </div>
<?php }
}?>

<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->page_header == 'fancy' && $_smarty_tpl->tpl_vars['theme_config']->value->page_header_both_navs) {
if (empty($_smarty_tpl->tpl_vars['MENUBAR']->value)) {
$_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'block_html_style'))) {
throw new SmartyException('block tag \'html_style\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('html_style', array());
$_block_repeat=true;
echo $_block_plugin3->block_html_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
.navbar-contextual {
  background-color: #000 !important;
  padding-top: 5px;
  padding-bottom: 5px;
}
<?php $_block_repeat=false;
echo $_block_plugin3->block_html_style(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery'));
$_block_repeat=true;
echo $_block_plugin4->block_footer_script(array('require'=>'jquery'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
$(document).ready(function() {
  $('.navbar-contextual').removeClass('navbar-light').addClass('navbar-dark navbar-forced-sm');
});
<?php $_block_repeat=false;
echo $_block_plugin4->block_footer_script(array('require'=>'jquery'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else {
$_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery'));
$_block_repeat=true;
echo $_block_plugin5->block_footer_script(array('require'=>'jquery'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
$(document).ready(function() {
  $('.page-header').addClass('mb-5');
  $('.navbar-contextual').addClass('navbar-transparent navbar-sm');
});
<?php $_block_repeat=false;
echo $_block_plugin5->block_footer_script(array('require'=>'jquery'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}?>

<?php if (!empty($_smarty_tpl->tpl_vars['header_msgs']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['header_msgs']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>

<?php if (!empty($_smarty_tpl->tpl_vars['header_notes']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['header_notes']->value, 'note');
$_smarty_tpl->tpl_vars['note']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['note']->value) {
$_smarty_tpl->tpl_vars['note']->do_else = false;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>

<!-- End of header.tpl -->
<?php }
}
