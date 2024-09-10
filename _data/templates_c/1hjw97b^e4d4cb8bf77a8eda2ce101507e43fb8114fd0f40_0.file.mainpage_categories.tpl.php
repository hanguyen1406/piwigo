<?php
/* Smarty version 4.3.1, created on 2024-09-02 20:44:52
  from '/var/www/html/piwigo/themes/bootstrap_darkroom/template/mainpage_categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66d5c154524bc5_62778405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4d4cb8bf77a8eda2ce101507e43fb8114fd0f40' => 
    array (
      0 => '/var/www/html/piwigo/themes/bootstrap_darkroom/template/mainpage_categories.tpl',
      1 => 1713951806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:grid_classes.tpl' => 1,
  ),
),false)) {
function content_66d5c154524bc5_62778405 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/piwigo/include/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin2->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    var error_icon = "<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;
echo $_smarty_tpl->tpl_vars['themeconf']->value['icon_dir'];?>
/errors_small.png", max_requests = <?php echo $_smarty_tpl->tpl_vars['maxRequests']->value;?>
;
<?php $_block_repeat=false;
echo $_block_plugin2->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->_assignInScope('width', 520);
$_smarty_tpl->_assignInScope('height', 360);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['define_derivative'][0], array( array('name'=>'derivative_params','width'=>$_smarty_tpl->tpl_vars['width']->value,'height'=>$_smarty_tpl->tpl_vars['height']->value,'crop'=>true),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['define_derivative'][0], array( array('name'=>'derivative_params_square','type'=>IMG_SQUARE),$_smarty_tpl ) );?>

<div class="row">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category_thumbnails']->value, 'cat', false, NULL, 'cat_loop', array (
));
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
if ($_smarty_tpl->tpl_vars['theme_config']->value->category_wells == 'never' || ($_smarty_tpl->tpl_vars['theme_config']->value->category_wells == 'mobile_only' && get_device() == 'desktop')) {
$_smarty_tpl->_assignInScope('derivative', $_smarty_tpl->tpl_vars['pwg']->value->derivative($_smarty_tpl->tpl_vars['derivative_params']->value,$_smarty_tpl->tpl_vars['cat']->value['representative']['src_image']));
if (!$_smarty_tpl->tpl_vars['derivative']->value->is_cached()) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.ajaxmanager','path'=>'themes/default/js/plugins/jquery.ajaxmanager.js','load'=>'footer'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'thumbnails.loader','path'=>'themes/default/js/thumbnails.loader.js','require'=>'jquery.ajaxmanager','load'=>'footer'),$_smarty_tpl ) );?>

<?php }
$_smarty_tpl->_subTemplateRender("file:grid_classes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('width'=>260,'height'=>180), 0, true);
?>
  <div class="col-outer mt-3 <?php if ((isset($_COOKIE['view'])) && $_COOKIE['view'] == 'list') {?>col-12<?php } else {
echo $_smarty_tpl->tpl_vars['col_class']->value;
}?>" data-grid-classes="<?php echo $_smarty_tpl->tpl_vars['col_class']->value;?>
">
  <div class="card card-thumbnail <?php if ((isset($_smarty_tpl->tpl_vars['cat']->value['path_ext']))) {?>path-ext-<?php echo $_smarty_tpl->tpl_vars['cat']->value['path_ext'];
}?> <?php if ((isset($_smarty_tpl->tpl_vars['cat']->value['file_ext']))) {?>file-ext-<?php echo $_smarty_tpl->tpl_vars['cat']->value['file_ext'];
}?>">
      <div class="h-100">
        <a href="<?php echo $_smarty_tpl->tpl_vars['cat']->value['URL'];?>
" class="ripple<?php if ((isset($_COOKIE['view'])) && $_COOKIE['view'] != 'list') {?> d-block<?php }?>">
          <img class="<?php if ((isset($_COOKIE['view'])) && $_COOKIE['view'] == 'list') {?>card-img-left<?php } else { ?>card-img-top<?php }?> thumb-img" <?php if ($_smarty_tpl->tpl_vars['derivative']->value->is_cached()) {?>src="<?php echo $_smarty_tpl->tpl_vars['derivative']->value->get_url();?>
"<?php } else { ?>src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
themes/bootstrap_darkroom/img/transparent.png" data-src="<?php echo $_smarty_tpl->tpl_vars['derivative']->value->get_url();?>
"<?php }?> alt="<?php echo $_smarty_tpl->tpl_vars['cat']->value['TN_ALT'];?>
" title="<?php echo strip_tags((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['cat']->value['NAME'],'"',' '));?>
 - <?php echo l10n('display this album');?>
">
        </a>
        <div class="card-body">
          <h5 class="card-title ellipsis <?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['icon_ts'])) {?> recent<?php }?>">
          <a href="<?php echo $_smarty_tpl->tpl_vars['cat']->value['URL'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['NAME'];?>
</a>
<?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['icon_ts'])) {?>
            <img title="<?php echo $_smarty_tpl->tpl_vars['cat']->value['icon_ts']['TITLE'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;
echo $_smarty_tpl->tpl_vars['themeconf']->value['icon_dir'];?>
/recent<?php if ($_smarty_tpl->tpl_vars['cat']->value['icon_ts']['IS_CHILD_DATE']) {?>_by_child<?php }?>.png" alt="(!)">
<?php }?>
          </h5>
          <div class="card-text">
<?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['DESCRIPTION'])) {?>
              <div class="description <?php if ($_smarty_tpl->tpl_vars['theme_config']->value->cat_descriptions) {?> d-block<?php }?>"><?php echo $_smarty_tpl->tpl_vars['cat']->value['DESCRIPTION'];?>
</div>
<?php }
if ((isset($_smarty_tpl->tpl_vars['cat']->value['INFO_DATES']))) {?>
              <div class="info-dates"><?php echo $_smarty_tpl->tpl_vars['cat']->value['INFO_DATES'];?>
</div>
<?php }?>
          </div>
        </div>
<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->cat_nb_images) {?>
        <div class="card-footer text-muted"><div class="d-inline-block ellipsis"><?php echo str_replace('<br>',', ',$_smarty_tpl->tpl_vars['cat']->value['CAPTION_NB_IMAGES']);?>
</div></div>
<?php }?>
      </div>
    </div>
  </div>
<?php } else {
$_smarty_tpl->_assignInScope('derivative_square', $_smarty_tpl->tpl_vars['pwg']->value->derivative($_smarty_tpl->tpl_vars['derivative_params_square']->value,$_smarty_tpl->tpl_vars['cat']->value['representative']['src_image']));
if (!$_smarty_tpl->tpl_vars['derivative_square']->value->is_cached()) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.ajaxmanager','path'=>'themes/default/js/plugins/jquery.ajaxmanager.js','load'=>'footer'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'thumbnails.loader','path'=>'themes/default/js/thumbnails.loader.js','require'=>'jquery.ajaxmanager','load'=>'footer'),$_smarty_tpl ) );?>

<?php }?>
  <div class="col-outer col-12">
    <div class="card">
      <div class="card-body p-0">
        <a href="<?php echo $_smarty_tpl->tpl_vars['cat']->value['URL'];?>
">
          <div class="media h-100">
            <img class="d-flex mr-3" <?php if ($_smarty_tpl->tpl_vars['derivative_square']->value->is_cached()) {?>src="<?php echo $_smarty_tpl->tpl_vars['derivative_square']->value->get_url();?>
"<?php } else { ?>src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
themes/bootstrap_darkroom/img/transparent.png" data-src="<?php echo $_smarty_tpl->tpl_vars['derivative_square']->value->get_url();?>
"<?php }?> alt="<?php echo $_smarty_tpl->tpl_vars['cat']->value['TN_ALT'];?>
">
            <div class="media-body pt-2">
              <h4 class="mt-0 mb-1"><?php echo $_smarty_tpl->tpl_vars['cat']->value['NAME'];?>
</h4>
<?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['DESCRIPTION'])) {?>
              <div class="description"><?php echo $_smarty_tpl->tpl_vars['cat']->value['DESCRIPTION'];?>
</div>
<?php }
if ((isset($_smarty_tpl->tpl_vars['cat']->value['INFO_DATES']))) {?>
              <div><?php echo $_smarty_tpl->tpl_vars['cat']->value['INFO_DATES'];?>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['theme_config']->value->cat_nb_images) {?>
              <div class="text-muted"><?php echo str_replace('<br>',', ',$_smarty_tpl->tpl_vars['cat']->value['CAPTION_NB_IMAGES']);?>
</div>
<?php }?>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
