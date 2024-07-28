<?php
/* Smarty version 4.3.1, created on 2024-06-22 10:26:24
  from '/var/www/html/piwigo/themes/bootstrap_darkroom/template/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676a6d0d235d1_73704688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9748236394568e30a4840dde7bcf3065e7f18aed' => 
    array (
      0 => '/var/www/html/piwigo/themes/bootstrap_darkroom/template/index.tpl',
      1 => 1713951806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:infos_errors.tpl' => 1,
    'file:themes/default/template/include/search_filters.inc.tpl' => 1,
    'file:_photoswipe_js.tpl' => 1,
    'file:navigation_bar.tpl' => 2,
  ),
),false)) {
function content_6676a6d0d235d1_73704688 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Start of index.tpl -->
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'cookie','require'=>'jquery','path'=>'themes/bootstrap_darkroom/js/jquery.cookie.js','load'=>'footer'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'equalheights','require'=>'jquery','path'=>'themes/bootstrap_darkroom/js/jquery.equalheights.js','load'=>'footer'),$_smarty_tpl ) );?>

<?php if (get_device() != 'desktop') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.mobile-events','path'=>'themes/bootstrap_darkroom/node_modules/jQuery-Touch-Events/src/jquery.mobile-events.min.js','require'=>'jquery','load'=>'footer'),$_smarty_tpl ) );?>

<?php }
if (!empty($_smarty_tpl->tpl_vars['PLUGIN_INDEX_CONTENT_BEFORE']->value)) {
echo $_smarty_tpl->tpl_vars['PLUGIN_INDEX_CONTENT_BEFORE']->value;
}?>

    <nav class="navbar navbar-expand-lg navbar-contextual <?php echo $_smarty_tpl->tpl_vars['theme_config']->value->navbar_contextual_style;?>
 <?php echo $_smarty_tpl->tpl_vars['theme_config']->value->navbar_contextual_bg;
if ($_smarty_tpl->tpl_vars['theme_config']->value->page_header == 'fancy' && $_smarty_tpl->tpl_vars['theme_config']->value->page_header_both_navs) {?> navbar-transparent navbar-sm<?php }?> sticky-top mb-2">
        <div class="container<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->fluid_width) {?>-fluid<?php }?>">
            <div class="navbar-brand mr-auto">
<?php if ((isset($_smarty_tpl->tpl_vars['chronology']->value['TITLE']))) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['U_HOME']->value;?>
" title="<?php echo l10n('Home');?>
"><i class="fas fa-home" aria-hidden="true"></i></a><?php echo $_smarty_tpl->tpl_vars['LEVEL_SEPARATOR']->value;
echo $_smarty_tpl->tpl_vars['chronology']->value['TITLE'];?>

<?php } else { ?>
                <div class="nav-breadcrumb d-inline-flex"><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</div>
<?php }?>
            </div>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#secondary-navbar" aria-controls="secondary-navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-bars"></span>
            </button>
            <div class="navbar-collapse collapse justify-content-end" id="secondary-navbar">
                <ul class="navbar-nav">
<?php if ((isset($_smarty_tpl->tpl_vars['SEARCH_IN_SET_ACTION']->value)) && $_smarty_tpl->tpl_vars['SEARCH_IN_SET_ACTION']->value) {?>
    <li id="cmdSearchInSet" class="nav-item">
        <a href="<?php echo $_smarty_tpl->tpl_vars['SEARCH_IN_SET_URL']->value;?>
" title="<?php echo l10n('Search in this set');?>
" class="pwg-state-default pwg-button nav-link">
            <i class="fas fa-search"></i>
            <span class="pwg-button-text"><?php echo l10n('Search in this set');?>
</span>
        </a>
    </li>
<?php }?>                
<?php if (!empty($_smarty_tpl->tpl_vars['image_orders']->value)) {?>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" title="<?php echo l10n('Sort order');?>
">
                            <i class="fas fa-sort fa-fw" aria-hidden="true"></i><span class="d-lg-none ml-2"><?php echo l10n('Sort order');?>
</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" role="menu">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['image_orders']->value, 'image_order', false, NULL, 'loop', array (
));
$_smarty_tpl->tpl_vars['image_order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image_order']->value) {
$_smarty_tpl->tpl_vars['image_order']->do_else = false;
?>
                            <a class="dropdown-item<?php if ($_smarty_tpl->tpl_vars['image_order']->value['SELECTED']) {?> active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['image_order']->value['URL'];?>
" rel="nofollow"><?php echo $_smarty_tpl->tpl_vars['image_order']->value['DISPLAY'];?>
</a>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </li>
<?php }
if (!empty($_smarty_tpl->tpl_vars['image_derivatives']->value)) {?>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" title="<?php echo l10n('Photo sizes');?>
">
                            <i class="far fa-image fa-fw" aria-hidden="true"></i><span class="d-lg-none ml-2"><?php echo l10n('Photo sizes');?>
</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" role="menu">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['image_derivatives']->value, 'image_derivative', false, NULL, 'loop', array (
));
$_smarty_tpl->tpl_vars['image_derivative']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image_derivative']->value) {
$_smarty_tpl->tpl_vars['image_derivative']->do_else = false;
?>
                            <a class="dropdown-item<?php if ($_smarty_tpl->tpl_vars['image_derivative']->value['SELECTED']) {?> active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['image_derivative']->value['URL'];?>
" rel="nofollow"><?php echo $_smarty_tpl->tpl_vars['image_derivative']->value['DISPLAY'];?>
</a>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </li>
<?php }
if ((isset($_smarty_tpl->tpl_vars['favorite']->value))) {?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['favorite']->value['U_FAVORITE'];?>
" title="<?php echo l10n('Delete all photos from your favorites');?>
" rel="nofollow">
                            <i class="fas fa-heartbeat fa-fw" aria-hidden="true"></i><span class="d-lg-none ml-2"><?php echo l10n('Delete all photos from your favorites');?>
</span>
                        </a>
                    </li>
<?php }
if ((isset($_smarty_tpl->tpl_vars['U_EDIT']->value))) {?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['U_EDIT']->value;?>
" title="<?php echo l10n('Edit album');?>
">
                            <i class="fas fa-pencil-alt fa-fw" aria-hidden="true"></i><span class="d-lg-none ml-2"><?php echo l10n('Edit album');?>
</span>
                        </a>
                    </li>
<?php }
if ((isset($_smarty_tpl->tpl_vars['U_CADDIE']->value))) {?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['U_CADDIE']->value;?>
" title="<?php echo l10n('Add to caddie');?>
">
                            <i class="fas fa-shopping-basket fa-fw" aria-hidden="true"></i><span class="d-lg-none ml-2"><?php echo l10n('Add to caddie');?>
</span>
                        </a>
                    </li>
<?php }
if ((isset($_smarty_tpl->tpl_vars['U_SEARCH_RULES']->value))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'core.scripts','load'=>'async','path'=>'themes/default/js/scripts.js'),$_smarty_tpl ) );?>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['U_SEARCH_RULES']->value;?>
" onclick="bd_popup(this.href); return false;" title="<?php echo l10n('Search rules');?>
" rel="nofollow">
                            <i class="fas fa-search fa-fw" aria-hidden="true"></i><span class="d-lg-none ml-2"><?php echo l10n('Search rules');?>
</span>
                        </a>
                    </li>
<?php }
if ((isset($_smarty_tpl->tpl_vars['U_SLIDESHOW']->value))) {?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->photoswipe) {?>javascript:;<?php } else {
echo $_smarty_tpl->tpl_vars['U_SLIDESHOW']->value;
}?>" id="startSlideshow" title="<?php echo l10n('slideshow');?>
" rel="nofollow">
                            <i class="fas fa-play fa-fw" aria-hidden="true"></i><span class="d-lg-none ml-2 text-capitalize"><?php echo l10n('slideshow');?>
</span>
                        </a>
                    </li>
<?php }
if ((isset($_smarty_tpl->tpl_vars['U_MODE_FLAT']->value))) {?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['U_MODE_FLAT']->value;?>
" title="<?php echo l10n('display all photos in all sub-albums');?>
" rel="nofollow"><i class="fas fa-th-large fa-fw" aria-hidden="true"></i><span class="d-lg-none ml-2"><?php echo l10n('display all photos in all sub-albums');?>
</span></a>
                    </li>
<?php }
if ((isset($_smarty_tpl->tpl_vars['U_MODE_NORMAL']->value))) {?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['U_MODE_NORMAL']->value;?>
" title="<?php echo l10n('return to normal view mode');?>
"><i class="fas fa-home fa-fw" aria-hidden="true"></i><span class="d-lg-none ml-2"><?php echo l10n('return to normal view mode');?>
</span></a>
                    </li>
<?php }
if ((isset($_smarty_tpl->tpl_vars['U_MODE_POSTED']->value)) || (isset($_smarty_tpl->tpl_vars['U_MODE_CREATED']->value))) {?>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" title="<?php echo l10n('Calendar');?>
">
                            <i class="far fa-calendar-alt fa-fw" aria-hidden="true"></i><span class="d-lg-none ml-2"><?php echo l10n('Calendar');?>
</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
<?php if ((isset($_smarty_tpl->tpl_vars['U_MODE_POSTED']->value))) {?>
                            <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['U_MODE_POSTED']->value;?>
" title="<?php echo l10n('display a calendar by posted date');?>
" rel="nofollow">
                                <i class="fas fa-share-alt fa-fw" aria-hidden="true"></i> <?php echo l10n('display a calendar by posted date');?>

                            </a>
<?php }
if ((isset($_smarty_tpl->tpl_vars['U_MODE_CREATED']->value))) {?>
                            <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['U_MODE_CREATED']->value;?>
" title="<?php echo l10n('display a calendar by creation date');?>
" rel="nofollow">
                                <i class="fas fa-camera-retro fa-fw" aria-hidden="true"></i> <?php echo l10n('display a calendar by creation date');?>

                            </a>
<?php }?>
                        </div>
                    </li>
<?php }
if (!empty($_smarty_tpl->tpl_vars['PLUGIN_INDEX_BUTTONS']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PLUGIN_INDEX_BUTTONS']->value, 'button');
$_smarty_tpl->tpl_vars['button']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->do_else = false;
?><li><?php echo $_smarty_tpl->tpl_vars['button']->value;?>
</li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if (!empty($_smarty_tpl->tpl_vars['PLUGIN_INDEX_ACTIONS']->value)) {
echo $_smarty_tpl->tpl_vars['PLUGIN_INDEX_ACTIONS']->value;
}
if (((!empty($_smarty_tpl->tpl_vars['CATEGORIES']->value) && !(isset($_smarty_tpl->tpl_vars['GDThumb']->value))) || (!empty($_smarty_tpl->tpl_vars['THUMBNAILS']->value) && !(isset($_smarty_tpl->tpl_vars['GThumb']->value)) && !(isset($_smarty_tpl->tpl_vars['GDThumb']->value)))) && ($_smarty_tpl->tpl_vars['theme_config']->value->category_wells == 'never' || ($_smarty_tpl->tpl_vars['theme_config']->value->category_wells == 'mobile_only' && get_device() == 'desktop'))) {?>
                    <li id="btn-grid" class="nav-item<?php if ((isset($_COOKIE['view'])) && $_COOKIE['view'] != 'list') {?> active<?php }?>">
                        <a class="nav-link" href="javascript:;" title="<?php echo l10n('Grid view');?>
">
                            <i class="fas fa-th fa-fw"></i><span class="d-lg-none ml-2"><?php echo l10n('Grid view');?>
</span>
                        </a>
                    </li>
                    <li id="btn-list" class="nav-item<?php if (!empty($_COOKIE['view']) && $_COOKIE['view'] == 'list') {?> active<?php }?>">
                        <a class="nav-link" href="javascript:;" title="<?php echo l10n('List view');?>
">
                            <i class="fas fa-th-list fa-fw"></i><span class="d-lg-none ml-2"><?php echo l10n('List view');?>
</span>
                        </a>
                    </li>
<?php }?>
                </ul>
            </div>
        </div>
    </nav>

<?php $_smarty_tpl->_subTemplateRender('file:infos_errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if (!empty($_smarty_tpl->tpl_vars['SEARCH_ID']->value)) {?>
    <div class="container<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->fluid_width) {?>-fluid<?php }?>">
<?php $_smarty_tpl->_subTemplateRender('file:themes/default/template/include/search_filters.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
<?php }?>

<div class="container<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->fluid_width) {?>-fluid<?php }?>">
<?php if (!empty($_smarty_tpl->tpl_vars['PLUGIN_INDEX_CONTENT_BEGIN']->value)) {
echo $_smarty_tpl->tpl_vars['PLUGIN_INDEX_CONTENT_BEGIN']->value;
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['chronology_views']->value))) {?>
    <div id="calendar-select" class="btn-group">
        <button id="calendar-view" type="button" class="btn btn-primary btn-raised dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['chronology_views']->value, 'view');
$_smarty_tpl->tpl_vars['view']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['view']->value) {
$_smarty_tpl->tpl_vars['view']->do_else = false;
if ($_smarty_tpl->tpl_vars['view']->value['SELECTED']) {
echo $_smarty_tpl->tpl_vars['view']->value['CONTENT'];
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </button>
        <div class="dropdown-menu" aria-labelledby="calendar-view">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['chronology_views']->value, 'view', false, NULL, 'loop', array (
));
$_smarty_tpl->tpl_vars['view']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['view']->value) {
$_smarty_tpl->tpl_vars['view']->do_else = false;
?>
                <a class="dropdown-item <?php if ($_smarty_tpl->tpl_vars['view']->value['SELECTED']) {?> active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['view']->value['VALUE'];?>
"><?php echo $_smarty_tpl->tpl_vars['view']->value['CONTENT'];?>
</a>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['FILE_CHRONOLOGY_VIEW']->value))) {
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['FILE_CHRONOLOGY_VIEW']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['SEARCH_IN_SET_BUTTON']->value)) && $_smarty_tpl->tpl_vars['SEARCH_IN_SET_BUTTON']->value) {?>
    <div class="mcs-side-results search-in-set-button ">
      <div>
        <p><a href="<?php echo $_smarty_tpl->tpl_vars['SEARCH_IN_SET_URL']->value;?>
" class="">
        <i class="fas fa-share-square"></i>
        <?php echo l10n('Search in this set');?>
</a></p>
      </div>
    </div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['CONTENT_DESCRIPTION']->value)) {?>
    <div id="content-description" class="py-3<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->thumbnail_cat_desc == 'simple') {?> text-center<?php }?>">
<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->thumbnail_cat_desc == 'simple') {?>
        <h5><?php echo $_smarty_tpl->tpl_vars['CONTENT_DESCRIPTION']->value;?>
</h5>
<?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['CONTENT_DESCRIPTION']->value;?>

<?php }?>
    </div>
<?php }?>
    <div id="content" class="<?php if (!empty($_COOKIE['view']) && $_COOKIE['view'] == 'list') {?>content-list<?php } else { ?>content-grid<?php }
if (empty($_smarty_tpl->tpl_vars['CONTENT_DESCRIPTION']->value)) {?> pt-3<?php }?>">
<?php if (!empty($_smarty_tpl->tpl_vars['CONTENT']->value)) {?>
    <!-- Start of content -->
    <?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>

    <!-- End of content -->
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['CATEGORIES']->value)) {?>
    <!-- Start of categories -->
<?php echo $_smarty_tpl->tpl_vars['CATEGORIES']->value;?>

<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery'));
$_block_repeat=true;
echo $_block_plugin3->block_footer_script(array('require'=>'jquery'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>$(document).ready(function() {$('#content .col-outer .card-body:has(> .card-title)').equalHeights();});<?php $_block_repeat=false;
echo $_block_plugin3->block_footer_script(array('require'=>'jquery'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <!-- End of categories -->
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['category_search_results']->value)) {?>
<div class="container<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->fluid_width) {?>-fluid<?php }?>">
    <h3 class="category_search_results"><?php echo l10n('Album results for');?>
 <em><strong><?php echo $_smarty_tpl->tpl_vars['QUERY_SEARCH']->value;?>
</strong></em></h3>
    <p>
        <em><strong>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category_search_results']->value, 'res', false, NULL, 'res_loop', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['res']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['res']->value) {
$_smarty_tpl->tpl_vars['res']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_res_loop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_res_loop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_res_loop']->value['index'];
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_res_loop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_res_loop']->value['first'] : null)) {?> &mdash; <?php }?>
            <?php echo $_smarty_tpl->tpl_vars['res']->value;?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </strong></em>
    </p>
</div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['tag_search_results']->value)) {?>
<div class="container<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->fluid_width) {?>-fluid<?php }?>">
    <h3 class="tag_search_results"><?php echo l10n('Tag results for');?>
 <em><strong><?php echo $_smarty_tpl->tpl_vars['QUERY_SEARCH']->value;?>
</strong></em></h3>
    <p>
        <em><strong>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tag_search_results']->value, 'tag', false, NULL, 'res_loop', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_res_loop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_res_loop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_res_loop']->value['index'];
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_res_loop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_res_loop']->value['first'] : null)) {?> &mdash; <?php }?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['tag']->value['URL'];?>
"><?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
</a>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </strong></em>
    </p>
</div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['THUMBNAILS']->value)) {?>
        <!-- Start of thumbnails -->
        <div id="thumbnails" class="row"><?php echo $_smarty_tpl->tpl_vars['THUMBNAILS']->value;?>
</div>
<?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery'));
$_block_repeat=true;
echo $_block_plugin4->block_footer_script(array('require'=>'jquery'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>$(document).ready(function(){$('#content img').load(function(){$('#content .col-inner').equalHeights()})});<?php $_block_repeat=false;
echo $_block_plugin4->block_footer_script(array('require'=>'jquery'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if ($_smarty_tpl->tpl_vars['theme_config']->value->photoswipe) {?>
        <div id="photoSwipeData">
<?php $_smarty_tpl->_assignInScope('idx', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['thumbnails']->value, 'thumbnail');
$_smarty_tpl->tpl_vars['thumbnail']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['thumbnail']->value) {
$_smarty_tpl->tpl_vars['thumbnail']->do_else = false;
$_smarty_tpl->_assignInScope('derivative_medium', $_smarty_tpl->tpl_vars['pwg']->value->derivative($_smarty_tpl->tpl_vars['derivative_params_medium']->value,$_smarty_tpl->tpl_vars['thumbnail']->value['src_image']));
$_smarty_tpl->_assignInScope('derivative_large', $_smarty_tpl->tpl_vars['pwg']->value->derivative($_smarty_tpl->tpl_vars['derivative_params_large']->value,$_smarty_tpl->tpl_vars['thumbnail']->value['src_image']));
$_smarty_tpl->_assignInScope('derivative_xxlarge', $_smarty_tpl->tpl_vars['pwg']->value->derivative($_smarty_tpl->tpl_vars['derivative_params_xxlarge']->value,$_smarty_tpl->tpl_vars['thumbnail']->value['src_image']));?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['URL'];?>
" data-index="<?php echo $_smarty_tpl->tpl_vars['idx']->value;?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['NAME'];?>
" data-description="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['DESCRIPTION'];?>
" data-src-medium="<?php echo $_smarty_tpl->tpl_vars['derivative_medium']->value->get_url();?>
" data-size-medium="<?php echo $_smarty_tpl->tpl_vars['derivative_medium']->value->get_size_hr();?>
" data-src-large="<?php echo $_smarty_tpl->tpl_vars['derivative_large']->value->get_url();?>
" data-size-large="<?php echo $_smarty_tpl->tpl_vars['derivative_large']->value->get_size_hr();?>
" data-src-xlarge="<?php echo $_smarty_tpl->tpl_vars['derivative_xxlarge']->value->get_url();?>
" data-size-xlarge="<?php echo $_smarty_tpl->tpl_vars['derivative_xxlarge']->value->get_size_hr();?>
"<?php if (preg_match("/(mp4|m4v)"."$"."/",$_smarty_tpl->tpl_vars['thumbnail']->value['PATH'])) {?> data-src-original="<?php echo $_smarty_tpl->tpl_vars['U_HOME']->value;
echo $_smarty_tpl->tpl_vars['thumbnail']->value['PATH'];?>
" data-size-original="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['SIZE'];?>
" data-video="true"<?php } else {
}?>></a>
<?php $_smarty_tpl->_assignInScope('idx', $_smarty_tpl->tpl_vars['idx']->value+1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_subTemplateRender('file:_photoswipe_js.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('selector'=>'#photoSwipeData'), 0, false);
?>
        </div>
<?php $_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'photoswipe'));
$_block_repeat=true;
echo $_block_plugin5->block_footer_script(array('require'=>'photoswipe'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>$('#startSlideshow').on('click touchstart', function() {startPhotoSwipe(0);$('.pswp__button--autoplay')[0].click();});function setupPhotoSwipe() {$('#thumbnails').find("a:has(img):not(.addCollection)").each(function(_index) {var $pswpIndex = <?php if ((isset($_smarty_tpl->tpl_vars['GDThumb']->value)) || (isset($_smarty_tpl->tpl_vars['GThumb']->value))) {
echo $_smarty_tpl->tpl_vars['START_ID']->value;
} else { ?>0<?php }?>;if ($(this).find('img').length > 0) {var _href = $(this).href;$(this).attr('href', 'javascript:;').attr('data-href', _href);if (!$(this).attr('data-index')) {$(this).attr('data-index', _index);$pswpIndex = $pswpIndex + _index;} else {$pswpIndex = $pswpIndex + $(this).data('index');}$(this).off('click tap').on('click tap', function(event) {event.preventDefault();startPhotoSwipe($pswpIndex);});}});if (window.location.hash) {const pidMatch = /(#|&)pid=(\d+)(&|$)/.exec(window.location.hash);if (pidMatch) {startPhotoSwipe(parseInt(pidMatch[2]) - 1);}}}<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->thumbnail_linkto == 'photoswipe' || ($_smarty_tpl->tpl_vars['theme_config']->value->thumbnail_linkto == 'photoswipe_mobile_only' && get_device() != 'desktop')) {?>$(document).ready(function() {setupPhotoSwipe();});<?php if ((isset($_smarty_tpl->tpl_vars['loaded_plugins']->value['rv_tscroller']))) {?>$(document).ajaxComplete(function() {setupPhotoSwipe();});<?php }
}
$_block_repeat=false;
echo $_block_plugin5->block_footer_script(array('require'=>'photoswipe'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>"jquery"));
$_block_repeat=true;
echo $_block_plugin6->block_footer_script(array('require'=>"jquery"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if (!(isset($_smarty_tpl->tpl_vars['loaded_plugins']->value['piwigo-videojs'])) && ((isset($_smarty_tpl->tpl_vars['GThumb']->value)) || (isset($_smarty_tpl->tpl_vars['GDThumb']->value)))) {?>function addVideoIndicator() {$('img.thumbnail[src*="pwg_representative"]').each(function() {$(this).closest('li').append('<i class="fas fa-file-video fa-2x video-indicator" aria-hidden="true" style="position: absolute; top: 10px; left: 10px; z-index: 100; color: #fff;"></i>');});}$(document).ready(function() {addVideoIndicator();});$(document).ajaxComplete(function() {addVideoIndicator();});<?php } else { ?>$('.card-thumbnail').find('img[src*="pwg_representative"]').each(function() {$(this).closest('div').append('<i class="fas fa-file-video fa-2x video-indicator" aria-hidden="true" style="position: absolute; top: 10px; left: 10px; z-index: 100; color: #fff;"></i>');});<?php }
$_block_repeat=false;
echo $_block_plugin6->block_footer_script(array('require'=>"jquery"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <!-- End of thumbnails -->
<?php } elseif (!empty($_smarty_tpl->tpl_vars['SEARCH_ID']->value)) {?>
        <div class="mcs-no-result">
            <div class="text">
                <span class="top"><?php echo l10n('No results are available.');?>
</span>
                <span class="bot"><?php echo l10n('You can try to edit your filters and perform a new search.');?>
</span>
            </div>
        </div>
<?php }?>
    </div>
</div>
<?php if (!empty($_smarty_tpl->tpl_vars['cats_navbar']->value) || !empty($_smarty_tpl->tpl_vars['thumb_navbar']->value)) {?>
<div class="container<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->fluid_width) {?>-fluid<?php }?>">
<?php if (!empty($_smarty_tpl->tpl_vars['cats_navbar']->value)) {
$_smarty_tpl->_subTemplateRender('file:navigation_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('fragment'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'get_extent' ][ 0 ], array( "content",'navbar' )),'navbar'=>$_smarty_tpl->tpl_vars['cats_navbar']->value), 0, false);
}
if (!empty($_smarty_tpl->tpl_vars['thumb_navbar']->value) && !(isset($_smarty_tpl->tpl_vars['loaded_plugins']->value['rv_tscroller']))) {
$_smarty_tpl->_subTemplateRender('file:navigation_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('fragment'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'get_extent' ][ 0 ], array( "content",'navbar' )),'navbar'=>$_smarty_tpl->tpl_vars['thumb_navbar']->value), 0, true);
}?>
</div>
<?php }?>

<div class="container<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->fluid_width) {?>-fluid<?php }?>">
<?php if (!empty($_smarty_tpl->tpl_vars['PLUGIN_INDEX_CONTENT_END']->value)) {
echo $_smarty_tpl->tpl_vars['PLUGIN_INDEX_CONTENT_END']->value;
}?>
</div>

<?php if (!empty($_smarty_tpl->tpl_vars['PLUGIN_INDEX_CONTENT_AFTER']->value)) {
echo $_smarty_tpl->tpl_vars['PLUGIN_INDEX_CONTENT_AFTER']->value;
}?>
<!-- End of index.tpl -->
<?php }
}
