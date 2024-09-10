<?php
/* Smarty version 4.3.1, created on 2024-09-02 21:03:15
  from '/var/www/html/piwigo/themes/bootstrap_darkroom/template/_slick_js.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66d5c5a349b4e1_07387744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d55c1d8861aed59c31e7c8150b1b8a388a90a4d' => 
    array (
      0 => '/var/www/html/piwigo/themes/bootstrap_darkroom/template/_slick_js.tpl',
      1 => 1713951806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d5c5a349b4e1_07387744 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/bootstrap_darkroom/node_modules/slick-carousel/slick/slick.css",'order'=>-22),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/bootstrap_darkroom/node_modules/slick-carousel/slick/slick-theme.css",'order'=>-21),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>"slick.carousel",'require'=>"jquery",'path'=>"themes/bootstrap_darkroom/node_modules/slick-carousel/slick/slick.min.js",'load'=>"footer"),$_smarty_tpl ) );?>

<?php $_block_plugin11 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin11, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>"slick.carousel"));
$_block_repeat=true;
echo $_block_plugin11->block_footer_script(array('require'=>"slick.carousel"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>$(document).ready(function(){$('#thumbnailCarousel').slick({infinite: <?php if ($_smarty_tpl->tpl_vars['theme_config']->value->slick_infinite) {?>true<?php } else { ?>false<?php }?>,lazyLoad: '<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->slick_lazyload == "progressive") {?>progressive<?php } else { ?>ondemand<?php }?>',<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->slick_centered) {?>centerMode: true,swipeToSlide: true,slidesToShow: <?php if (sizeOf($_smarty_tpl->tpl_vars['thumbnails']->value) <= 7) {
if (sizeOf($_smarty_tpl->tpl_vars['thumbnails']->value) > 2 && (sizeOf($_smarty_tpl->tpl_vars['thumbnails']->value)%2 == 0)) {
echo sizeOf($_smarty_tpl->tpl_vars['thumbnails']->value)-1;
} else {
echo sizeOf($_smarty_tpl->tpl_vars['thumbnails']->value);
}
} else { ?>7<?php }?>,slidesToScroll: 1,responsive: [{breakpoint: 1200,settings: {slidesToShow: <?php if (sizeOf($_smarty_tpl->tpl_vars['thumbnails']->value) <= 5) {
if (sizeOf($_smarty_tpl->tpl_vars['thumbnails']->value) > 2 && (sizeOf($_smarty_tpl->tpl_vars['thumbnails']->value)%2 == 0)) {
echo sizeOf($_smarty_tpl->tpl_vars['thumbnails']->value)-1;
} else {
echo sizeOf($_smarty_tpl->tpl_vars['thumbnails']->value);
}
} else { ?>5<?php }?>,}},<?php } else { ?>centerMode: false,slidesToShow: <?php if (sizeOf($_smarty_tpl->tpl_vars['thumbnails']->value) <= 7) {
echo sizeOf($_smarty_tpl->tpl_vars['thumbnails']->value);
} else { ?>7<?php }?>,slidesToScroll: <?php if (sizeOf($_smarty_tpl->tpl_vars['thumbnails']->value) <= 7) {
echo sizeOf($_smarty_tpl->tpl_vars['thumbnails']->value)-1;
} else { ?>6<?php }?>,responsive: [{breakpoint: 1200,settings: {slidesToShow: <?php if (sizeOf($_smarty_tpl->tpl_vars['thumbnails']->value) <= 5) {
echo sizeOf($_smarty_tpl->tpl_vars['thumbnails']->value);
} else { ?>5<?php }?>,slidesToScroll: <?php if (sizeOf($_smarty_tpl->tpl_vars['thumbnails']->value) <= 5) {
echo sizeOf($_smarty_tpl->tpl_vars['thumbnails']->value)-1;
} else { ?>4<?php }?>}},{breakpoint: 1024,settings: {slidesToShow: <?php if (sizeOf($_smarty_tpl->tpl_vars['thumbnails']->value) <= 4) {
echo sizeOf($_smarty_tpl->tpl_vars['thumbnails']->value);
} else { ?>4<?php }?>,slidesToScroll: <?php if (sizeOf($_smarty_tpl->tpl_vars['thumbnails']->value) <= 4) {
echo sizeOf($_smarty_tpl->tpl_vars['thumbnails']->value)-1;
} else { ?>3<?php }?>}},<?php }?>{breakpoint: 768,settings: {slidesToShow: 3,slidesToScroll: 3}},{breakpoint: 420,settings: {centerMode: false,slidesToShow: 2,slidesToScroll: 2}}]});var currentThumbnailIndex = $('#thumbnailCarousel .thumbnail-active:not(.slick-cloned)').data('slick-index');$('#thumbnailCarousel').slick('goTo', currentThumbnailIndex, true);});<?php $_block_repeat=false;
echo $_block_plugin11->block_footer_script(array('require'=>"slick.carousel"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
