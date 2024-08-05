<?php
/* Smarty version 4.3.1, created on 2024-06-22 14:48:11
  from '/var/www/html/piwigo/themes/bootstrap_darkroom/template/_photoswipe_js.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676e42b0d8325_13510861',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8cd43293d3bbc1eaabff0079544e13af1227da1' => 
    array (
      0 => '/var/www/html/piwigo/themes/bootstrap_darkroom/template/_photoswipe_js.tpl',
      1 => 1713951806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6676e42b0d8325_13510861 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/bootstrap_darkroom/node_modules/photoswipe/dist/photoswipe.css",'order'=>-11),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/bootstrap_darkroom/node_modules/photoswipe/dist/default-skin/default-skin.css",'order'=>-12),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>"photoswipe",'require'=>"jquery",'path'=>"themes/bootstrap_darkroom/node_modules/photoswipe/dist/photoswipe.min.js",'load'=>"footer"),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>"photoswipe.ui",'require'=>"photoswipe",'path'=>"themes/bootstrap_darkroom/node_modules/photoswipe/dist/photoswipe-ui-default.min.js",'load'=>"footer"),$_smarty_tpl ) );?>

<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>"photoswipe.ui"));
$_block_repeat=true;
echo $_block_plugin3->block_footer_script(array('require'=>"photoswipe.ui"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>var selector = '<?php echo $_smarty_tpl->tpl_vars['selector']->value;?>
';function startPhotoSwipe(idx) {$(selector).each(function() {$('#thumbnail-active').addClass('active');var $pic     = $(this),getItems = function() {var items = [];$pic.find('a').each(function() {if ($(this).attr('data-video')) {var $src            = $(this).data('src-original'),$size           = $(this).data('size-original').split('x'),$width          = $size[0],$height         = $size[1],$src_preview    = $(this).data('src-medium'),$size_preview   = $(this).data('size-medium').split(' x '),$width_preview  = $size_preview[0],$height_preview = $size_preview[1],$href           = $(this).attr('href'),$title          = '<a href="' + $href + '">' + $(this).data('name') + '</a><ul><li>' + $(this).data('description') + '</li></ul>';var item = {is_video : true,href     : $href,src      : $src_preview,w        : $width_preview,h        : $height_preview,title    : $title,videoProperties: {src   : $src,w     : $width,h     : $height,}};} else {var $src_xlarge     = $(this).data('src-xlarge'),$size_xlarge    = $(this).data('size-xlarge').split(' x '),$width_xlarge   = $size_xlarge[0],$height_xlarge  = $size_xlarge[1],$src_large      = $(this).data('src-large'),$size_large     = $(this).data('size-large').split(' x '),$width_large    = $size_large[0],$height_large   = $size_large[1],$src_medium     = $(this).data('src-medium'),$size_medium    = $(this).data('size-medium').split(' x '),$width_medium   = $size_medium[0],$height_medium  = $size_medium[1],$href           = $(this).attr('href'),$title          = '<a href="' + $href + '"><div><div>' + $(this).data('name');$title         += '</div>';
                     if ($(this).data('description').length > 0) {$title += '<ul id="pswp--caption--description"><li>' + $(this).data('description') + '</li></ul>'; }
$title      += '</div></a>';var item = {is_video: false,href: $href,mediumImage: {src   : $src_medium,w     : $width_medium,h     : $height_medium,title : $title},largeImage: {src   : $src_large,w     : $width_large,h     : $height_large,title : $title},xlargeImage: {src   : $src_xlarge,w     : $width_xlarge,h     : $height_xlarge,title : $title}};}items.push(item);});return items;};var items = getItems();var $pswp = $('.pswp')[0];if (typeof(idx) === "number") {var $index = idx;} else {var $index = $(selector + ' a.active').data('index');}if (navigator.userAgent.match(/IEMobile\/11\.0/)) {var $history = false;} else {var $history = true;}var options = {index: $index,showHideOpacity: true,closeOnScroll: false,closeOnVerticalDrag: false,focus: false,history: $history,preload: [1,2],<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->social_enabled) {?>shareButtons: [<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->social_facebook) {?>
                           {id:'facebook', label:'<i class="fab fa-facebook fa-2x fa-fw"></i> Share on Facebook', url:'https://www.facebook.com/sharer/sharer.php?u={{url}}'},
<?php }
if ($_smarty_tpl->tpl_vars['theme_config']->value->social_twitter) {?>
                           {id:'twitter', label:'<i class="fab fa-twitter fa-2x fa-fw"></i> Tweet', url:'https://twitter.com/intent/tweet?url={{url}}'},
<?php }
if ($_smarty_tpl->tpl_vars['theme_config']->value->social_pinterest) {?>
                           {id:'pinterest', label:'<i class="fab fa-pinterest fa-2x fa-fw"></i> Pin it', url:'http://www.pinterest.com/pin/create/button/?url={{url}}&media=' + window.location + '/../{{raw_image_url}}'},
<?php }
if (get_device() == 'mobile') {?>
                           {id:'whatsapp', label:'<i class="fab fa-whatsapp fa-2x fa-fw"></i> Share via WhatsApp', url:'whatsapp://send?text={{url}}', download:true},
<?php }?>
                           {id:'download', label:'<i class="fas fa-cloud-download-alt fa-2x fa-fw"></i> Download image', url:'{{raw_image_url}}', download:true}
],<?php }?>};var photoSwipe = new PhotoSwipe($pswp, PhotoSwipeUI_Default, items, options);var realViewportWidth,useLargeImages = false,firstResize = true,imageSrcWillChange;photoSwipe.listen('beforeResize', function() {realViewportWidth = photoSwipe.viewportSize.x * window.devicePixelRatio;if(useLargeImages && realViewportWidth < 1335) {useLargeImages = false;imageSrcWillChange = true;} else if(!useLargeImages && realViewportWidth >= 1335) {useLargeImages = true;imageSrcWillChange = true;}if(imageSrcWillChange && !firstResize) {photoSwipe.invalidateCurrItems();}if(firstResize) {firstResize = false;}imageSrcWillChange = false;});photoSwipe.listen('gettingData', function(index, item) {if(!item.is_video) {if( useLargeImages ) {item.src = item.xlargeImage.src;item.w = item.xlargeImage.w;item.h = item.xlargeImage.h;item.title = item.xlargeImage.title;} else {item.src = item.largeImage.src;item.w = item.largeImage.w;item.h = item.largeImage.h;item.title = item.largeImage.title;}}});var autoplayId = null;$('.pswp__button--autoplay').on('click touchstart', function(event) {event.preventDefault();if (autoplayId) {clearInterval(autoplayId);autoplayId = null;$('.pswp__button--autoplay').removeClass('stop');} else {autoplayId = setInterval(function() { photoSwipe.next(); $index = photoSwipe.getCurrentIndex(); }, <?php echo $_smarty_tpl->tpl_vars['theme_config']->value->photoswipe_interval;?>
);$('.pswp__button--autoplay').addClass('stop');}});photoSwipe.listen('destroy', function() {if (autoplayId) {clearInterval(autoplayId);autoplayId = null;$('.pswp__button--autoplay').removeClass('stop');}$('.pswp__button--autoplay').off('click touchstart');$(selector).find('a.active').removeClass('active');});photoSwipe.init();detectVideo(photoSwipe);photoSwipe.listen('initialZoomInEnd', function() {curr_idx = photoSwipe.getCurrentIndex();if (curr_idx !== $index && autoplayId == null) {photoSwipe.goTo($index);}$('.pswp__button--details').on('click touchstart', function() {location.href = photoSwipe.currItem.href});});photoSwipe.listen('afterChange', function() {detectVideo(photoSwipe);$('.pswp__button--details').off().on('click touchstart', function() {location.href = photoSwipe.currItem.href});});photoSwipe.listen('beforeChange', function() {removeVideo();});photoSwipe.listen('resize', function() {if ($('.pswp-video-modal').length > 0) {var vsize = setVideoSize(photoSwipe.currItem, photoSwipe.viewportSize);console.log('PhotoSwipe resize in action. Setting video size to ' + vsize.w + 'x' + vsize.h);$('.pswp-video-modal').css({'width':vsize.w, 'height':vsize.h});updateVideoPosition(photoSwipe);}});photoSwipe.listen('close', function() {removeVideo();});});function removeVideo() {if ($('.pswp-video-modal').length > 0) {if ($('#pswp-video').length > 0) {$('#pswp-video')[0].pause();$('#pswp-video')[0].src = "";$('.pswp-video-modal').remove();$('.pswp__img').css('visibility','visible');$(document).off('webkitfullscreenchange mozfullscreenchange fullscreenchange');if (navigator.userAgent.match(/(iPhone|iPad|Android)/)) {$('.pswp-video-modal').css('background', '');}} else {$('.pswp-video-modal').remove();}}}function detectVideo(photoSwipe) {var is_video = photoSwipe.currItem.is_video;if (is_video) {addVideo(photoSwipe.currItem, photoSwipe.viewportSize);updateVideoPosition(photoSwipe);}}function addVideo(item, vp) {var vfile = item.videoProperties.src;var vsize = setVideoSize(item, vp);var v = $('<div />', {class:'pswp-video-modal',css : ({'position': 'absolute','width':vsize.w, 'height':vsize.h})});v.one('<?php if (get_device() == 'desktop') {?>click<?php } else { ?>tap<?php }?>', (function(event) {event.preventDefault();var playerCode = '<video id="pswp-video" width="100%" height="auto" autoplay controls>' +'<source src="'+vfile+'" type="video/mp4"></source>' +'</video>';$(this).html(playerCode);$('.pswp__img').css('visibility','hidden');$('.pswp-video-modal video').css('visibility', 'visible');if (navigator.userAgent.match(/(iPhone|iPad|Android)/)) {$('.pswp-video-modal').css('background', 'none');}if ($('.pswp__button--autoplay.stop').length > 0) $('.pswp__button--autoplay.stop')[0].click();}));if (navigator.appVersion.indexOf("Windows") !== -1 && navigator.userAgent.match(/(Edge|rv:11)/)) {v.insertAfter('.pswp__scroll-wrap');} else {v.appendTo('.pswp__scroll-wrap');}if ((navigator.appVersion.indexOf("Windows") !== -1 && navigator.userAgent.match(/(Chrome|Firefox)/)) || navigator.userAgent.match(/(X11|Macintosh)/)) {$(document).on('webkitfullscreenchange mozfullscreenchange fullscreenchange MSFullscreenChange', function(e) {var state = document.fullScreen || document.mozFullScreen || document.webkitIsFullScreen,event = state ? 'FullscreenOn' : 'FullscreenOff',holder_height = item.h;if (event === 'FullscreenOn') {$('#wrapper').hide();$('body').css('height', window.screen.height);$('.pswp-video-modal').css('height', window.screen.height);} else {$('#wrapper').show();$('body').css('height', '');$('.pswp-video-modal').css('height', holder_height);}});}}function updateVideoPosition(o, w, h) {var item = o.currItem;var vp = o.viewportSize;var vsize = setVideoSize(item, vp);var top = (vp.y - vsize.h)/2;var left = (vp.x - vsize.w)/2;$('.pswp-video-modal').css({position:'absolute',top:top, left:left});}function setVideoSize(item, vp) {var w = item.videoProperties.w,h = item.videoProperties.h,vw = vp.x,vh = vp.y,r;if (vw < w) {r = w/h;vh = vw/r;if (vp.y < vh) {vh = vp.y*0.8;vw = vh*r;}w = vw;h = vh;} else if (vp.y < (h * 1.2)) {r = w/h;vh = vp.y*0.85;vw = vh*r;w = vw;h = vh;}return {w: w,h: h};}};$(document).ready(function() {$('#startPhotoSwipe').on('click', function(event) {event.preventDefault;startPhotoSwipe();});<?php if (get_device() != 'desktop') {?>$('#theImage').on('doubletap', startPhotoSwipe);<?php }
if ((isset($_smarty_tpl->tpl_vars['U_SLIDESHOW_START']->value))) {?>$('#startSlideshow').on('click touchstart', function() {startPhotoSwipe();$('.pswp__button--autoplay')[0].click();});<?php }?>if (window.location.hash === "#start-slideshow") {startPhotoSwipe();$('.pswp__button--autoplay')[0].click();}});<?php $_block_repeat=false;
echo $_block_plugin3->block_footer_script(array('require'=>"photoswipe.ui"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}