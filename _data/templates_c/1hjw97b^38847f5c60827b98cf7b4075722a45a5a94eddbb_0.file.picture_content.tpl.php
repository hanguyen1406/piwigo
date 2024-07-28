<?php
/* Smarty version 4.3.1, created on 2024-06-22 14:48:17
  from '/var/www/html/piwigo/themes/bootstrap_darkroom/template/picture_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676e4311b97e8_75155047',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38847f5c60827b98cf7b4075722a45a5a94eddbb' => 
    array (
      0 => '/var/www/html/piwigo/themes/bootstrap_darkroom/template/picture_content.tpl',
      1 => 1713951806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6676e4311b97e8_75155047 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/piwigo/include/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
if (!$_smarty_tpl->tpl_vars['current']->value['selected_derivative']->is_cached()) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.ajaxmanager','path'=>'themes/default/js/plugins/jquery.ajaxmanager.js','load'=>'footer'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'thumbnails.loader','path'=>'themes/default/js/thumbnails.loader.js','require'=>'jquery.ajaxmanager','load'=>'footer'),$_smarty_tpl ) );?>

    <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin1->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>var error_icon = "<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;
echo $_smarty_tpl->tpl_vars['themeconf']->value['icon_dir'];?>
/errors_small.png"<?php $_block_repeat=false;
echo $_block_plugin1->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if (preg_match("/(mp4|m4v)"."$"."/",$_smarty_tpl->tpl_vars['current']->value['path'])) {
if ($_smarty_tpl->tpl_vars['current']->value['height'] < $_smarty_tpl->tpl_vars['current']->value['width']) {?>
<div id="video-modal" class="col-lg-8 col-md-10 col-sm-12 mx-auto">
<?php if ($_smarty_tpl->tpl_vars['current']->value['height']/$_smarty_tpl->tpl_vars['current']->value['width']*100 < 60) {?>
  <div class="embed-responsive embed-responsive-16by9">
<?php } else { ?>
  <div class="embed-responsive embed-responsive-custom" style="padding-bottom:<?php echo $_smarty_tpl->tpl_vars['current']->value['height']/$_smarty_tpl->tpl_vars['current']->value['width']*100;?>
%">
<?php }
} else { ?>
<div id="video-modal" class="col-lg-3 col-md-5 col-sm-6 col-xs-8 mx-auto">
  <div class="embed-responsive embed-responsive-9by16">
<?php }?>
    <video id="video" class="embed-responsive-item" width="100%" height="auto" controls preload="auto" poster="<?php echo $_smarty_tpl->tpl_vars['current']->value['selected_derivative']->get_url();?>
">
      <source src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;
echo $_smarty_tpl->tpl_vars['current']->value['path'];?>
" type="video/mp4"></source>
    </video>
  </div>
</div>
<?php } else { ?>
<img class="<?php if ((isset($_smarty_tpl->tpl_vars['current']->value['path_ext']))) {?>path-ext-<?php echo $_smarty_tpl->tpl_vars['current']->value['path_ext'];
}?> <?php if ((isset($_smarty_tpl->tpl_vars['current']->value['file_ext']))) {?>file-ext-<?php echo $_smarty_tpl->tpl_vars['current']->value['file_ext'];
}?>" <?php if ($_smarty_tpl->tpl_vars['current']->value['selected_derivative']->is_cached()) {?>src="<?php echo $_smarty_tpl->tpl_vars['current']->value['selected_derivative']->get_url();?>
" <?php echo $_smarty_tpl->tpl_vars['current']->value['selected_derivative']->get_size_htm();
} else { ?>src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
themes/bootstrap_darkroom/img/transparent.png" data-src="<?php echo $_smarty_tpl->tpl_vars['current']->value['selected_derivative']->get_url();?>
"<?php }?> alt="<?php echo $_smarty_tpl->tpl_vars['ALT_IMG']->value;?>
" id="theMainImage" usemap="#map<?php echo $_smarty_tpl->tpl_vars['current']->value['selected_derivative']->get_type();?>
" title="<?php if ((isset($_smarty_tpl->tpl_vars['COMMENT_IMG']->value))) {
echo smarty_modifier_replace(strip_tags((string) $_smarty_tpl->tpl_vars['COMMENT_IMG']->value),'"',' ');
} else {
echo $_smarty_tpl->tpl_vars['current']->value['TITLE_ESC'];?>
 - <?php echo $_smarty_tpl->tpl_vars['ALT_IMG']->value;
}?>">

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['current']->value['unique_derivatives'], 'derivative', false, 'derivative_type');
$_smarty_tpl->tpl_vars['derivative']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['derivative_type']->value => $_smarty_tpl->tpl_vars['derivative']->value) {
$_smarty_tpl->tpl_vars['derivative']->do_else = false;
?><map name="map<?php echo $_smarty_tpl->tpl_vars['derivative']->value->get_type();?>
"><?php $_smarty_tpl->_assignInScope('size', $_smarty_tpl->tpl_vars['derivative']->value->get_size());
if ((isset($_smarty_tpl->tpl_vars['previous']->value))) {?><area shape=rect coords="0,0,<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( ($_smarty_tpl->tpl_vars['size']->value[0]/4) ));?>
,<?php echo $_smarty_tpl->tpl_vars['size']->value[1];?>
" href="<?php echo $_smarty_tpl->tpl_vars['previous']->value['U_IMG'];?>
" title="<?php echo l10n('Previous');?>
 : <?php echo $_smarty_tpl->tpl_vars['previous']->value['TITLE_ESC'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['previous']->value['TITLE_ESC'];?>
"><?php }?><area shape=rect coords="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( ($_smarty_tpl->tpl_vars['size']->value[0]/4) ));?>
,0,<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( ($_smarty_tpl->tpl_vars['size']->value[0]/1.34) ));?>
,<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( ($_smarty_tpl->tpl_vars['size']->value[1]/4) ));?>
" href="<?php echo $_smarty_tpl->tpl_vars['U_UP']->value;?>
" title="<?php echo l10n('Thumbnails');?>
" alt="<?php echo l10n('Thumbnails');?>
"><?php if ((isset($_smarty_tpl->tpl_vars['next']->value))) {?><area shape=rect coords="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( ($_smarty_tpl->tpl_vars['size']->value[0]/1.33) ));?>
,0,<?php echo $_smarty_tpl->tpl_vars['size']->value[0];?>
,<?php echo $_smarty_tpl->tpl_vars['size']->value[1];?>
" href="<?php echo $_smarty_tpl->tpl_vars['next']->value['U_IMG'];?>
" title="<?php echo l10n('Next');?>
 : <?php echo $_smarty_tpl->tpl_vars['next']->value['TITLE_ESC'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['next']->value['TITLE_ESC'];?>
"><?php }?></map><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
