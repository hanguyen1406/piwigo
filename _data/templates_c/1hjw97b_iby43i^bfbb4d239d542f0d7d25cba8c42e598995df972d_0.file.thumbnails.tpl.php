<?php
/* Smarty version 4.3.1, created on 2024-06-22 14:48:11
  from '/var/www/html/piwigo/themes/bootstrap_darkroom/template/thumbnails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676e42b030223_29041031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfbb4d239d542f0d7d25cba8c42e598995df972d' => 
    array (
      0 => '/var/www/html/piwigo/themes/bootstrap_darkroom/template/thumbnails.tpl',
      1 => 1713951806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:grid_classes.tpl' => 1,
  ),
),false)) {
function content_6676e42b030223_29041031 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['thumbnails']->value)) {
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
/errors_small.png"<?php if ((isset($_smarty_tpl->tpl_vars['maxRequests']->value))) {?>, max_requests = <?php echo $_smarty_tpl->tpl_vars['maxRequests']->value;
}?>;
<?php $_block_repeat=false;
echo $_block_plugin2->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if ($_smarty_tpl->tpl_vars['derivative_params']->value->type == "thumb") {
$_smarty_tpl->_assignInScope('width', 520);
$_smarty_tpl->_assignInScope('height', 360);
$_smarty_tpl->_assignInScope('rwidth', 260);
$_smarty_tpl->_assignInScope('rheight', 180);
} else {
$_smarty_tpl->_assignInScope('width', $_smarty_tpl->tpl_vars['derivative_params']->value->sizing->ideal_size[0]);
$_smarty_tpl->_assignInScope('height', $_smarty_tpl->tpl_vars['derivative_params']->value->sizing->ideal_size[1]);
$_smarty_tpl->_assignInScope('rwidth', $_smarty_tpl->tpl_vars['width']->value);
$_smarty_tpl->_assignInScope('rheight', $_smarty_tpl->tpl_vars['height']->value);
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['define_derivative'][0], array( array('name'=>'derivative_params','width'=>$_smarty_tpl->tpl_vars['width']->value,'height'=>$_smarty_tpl->tpl_vars['height']->value,'crop'=>true),$_smarty_tpl ) );?>

<?php $_smarty_tpl->_assignInScope('idx', 0+$_smarty_tpl->tpl_vars['START_ID']->value);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['thumbnails']->value, 'thumbnail');
$_smarty_tpl->tpl_vars['thumbnail']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['thumbnail']->value) {
$_smarty_tpl->tpl_vars['thumbnail']->do_else = false;
$_smarty_tpl->_assignInScope('derivative', $_smarty_tpl->tpl_vars['pwg']->value->derivative($_smarty_tpl->tpl_vars['derivative_params']->value,$_smarty_tpl->tpl_vars['thumbnail']->value['src_image']));
if (!$_smarty_tpl->tpl_vars['derivative']->value->is_cached()) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.ajaxmanager','path'=>'themes/default/js/plugins/jquery.ajaxmanager.js','load'=>'footer'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'thumbnails.loader','path'=>'themes/default/js/thumbnails.loader.js','require'=>'jquery.ajaxmanager','load'=>'footer'),$_smarty_tpl ) );?>

<?php }
$_smarty_tpl->_subTemplateRender("file:grid_classes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('width'=>$_smarty_tpl->tpl_vars['rwidth']->value,'height'=>$_smarty_tpl->tpl_vars['rheight']->value), 0, true);
?>
<div class="col-outer <?php if ((isset($_COOKIE['view'])) && $_COOKIE['view'] == 'list') {?>col-12<?php } else {
echo $_smarty_tpl->tpl_vars['col_class']->value;
}?>" data-grid-classes="<?php echo $_smarty_tpl->tpl_vars['col_class']->value;?>
">
    <div class="card card-thumbnail <?php if ((isset($_smarty_tpl->tpl_vars['thumbnail']->value['path_ext']))) {?>path-ext-<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['path_ext'];
}?> <?php if ((isset($_smarty_tpl->tpl_vars['thumbnail']->value['file_ext']))) {?>file-ext-<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['file_ext'];
}?>">
      <div class="h-100">
        <a href="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['URL'];?>
" data-index="<?php echo $_smarty_tpl->tpl_vars['idx']->value;?>
" class="ripple<?php if ((isset($_COOKIE['view'])) && $_COOKIE['view'] != 'list') {?> d-block<?php }?>">
            <img class="<?php if ((isset($_COOKIE['view'])) && $_COOKIE['view'] == 'list') {?>card-img-left<?php } else { ?>card-img-top<?php }?> thumb-img" <?php if ($_smarty_tpl->tpl_vars['derivative']->value->is_cached()) {?>src="<?php echo $_smarty_tpl->tpl_vars['derivative']->value->get_url();?>
"<?php } else { ?>src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
themes/bootstrap_darkroom/img/transparent.png" data-src="<?php echo $_smarty_tpl->tpl_vars['derivative']->value->get_url();?>
"<?php }?> alt="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['TN_ALT'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['TN_TITLE'];?>
">
        </a>
<?php $_smarty_tpl->_assignInScope('idx', $_smarty_tpl->tpl_vars['idx']->value+1);
if ($_smarty_tpl->tpl_vars['SHOW_THUMBNAIL_CAPTION']->value) {?>
        <div class="card-body<?php if (!$_smarty_tpl->tpl_vars['theme_config']->value->thumbnail_caption && (isset($_COOKIE['view'])) && $_COOKIE['view'] != 'list') {?> d-none<?php }
if (!$_smarty_tpl->tpl_vars['theme_config']->value->thumbnail_caption) {?> list-view-only<?php }?>">
            <h6 class="card-title">
<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->thumbnail_desc) {
if (!empty($_smarty_tpl->tpl_vars['thumbnail']->value['DESCRIPTION'])) {?>
                <div id="content-description" class="py-3<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->thumbnail_cat_desc == 'simple') {?> text-center<?php }?>">
<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->thumbnail_cat_desc == 'simple') {?>
                    <h5><?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['DESCRIPTION'];?>
</h5>
<?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['DESCRIPTION'];?>

<?php }?>
                </div>
<?php }
} else { ?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['URL'];?>
" class="ellipsis<?php if (!empty($_smarty_tpl->tpl_vars['thumbnail']->value['icon_ts'])) {?> recent<?php }?>"><?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['NAME'];?>
</a>
<?php }
if (!empty($_smarty_tpl->tpl_vars['thumbnail']->value['icon_ts'])) {?>
                <img title="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['icon_ts']['TITLE'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;
echo $_smarty_tpl->tpl_vars['themeconf']->value['icon_dir'];?>
/recent.png" alt="(!)">
<?php }?>
            </h6>
<?php if ((isset($_smarty_tpl->tpl_vars['thumbnail']->value['NB_COMMENTS'])) || (isset($_smarty_tpl->tpl_vars['thumbnail']->value['NB_HITS']))) {?>
            <div class="card-text">
<?php if ((isset($_smarty_tpl->tpl_vars['thumbnail']->value['NB_COMMENTS']))) {?>
                <p class="text-muted <?php if (0 == $_smarty_tpl->tpl_vars['thumbnail']->value['NB_COMMENTS']) {?>zero <?php }?>nb-comments">
                    <?php echo $_smarty_tpl->tpl_vars['pwg']->value->l10n_dec('%d comment','%d comments',$_smarty_tpl->tpl_vars['thumbnail']->value['NB_COMMENTS']);?>

                </p>
<?php }
if ((isset($_smarty_tpl->tpl_vars['thumbnail']->value['NB_HITS']))) {?>
                <p class="text-muted <?php if (0 == $_smarty_tpl->tpl_vars['thumbnail']->value['NB_HITS']) {?>zero <?php }?>nb-hits">
                    <?php echo $_smarty_tpl->tpl_vars['pwg']->value->l10n_dec('%d hit','%d hits',$_smarty_tpl->tpl_vars['thumbnail']->value['NB_HITS']);?>

                </p>
<?php }?>
            </div>
<?php }?>
        </div>
<?php }?>
      </div>
    </div>
</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
