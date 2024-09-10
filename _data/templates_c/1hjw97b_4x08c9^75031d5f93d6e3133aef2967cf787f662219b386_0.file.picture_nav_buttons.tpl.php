<?php
/* Smarty version 4.3.1, created on 2024-09-02 21:03:15
  from '/var/www/html/piwigo/themes/bootstrap_darkroom/template/picture_nav_buttons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66d5c5a3489364_67369771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75031d5f93d6e3133aef2967cf787f662219b386' => 
    array (
      0 => '/var/www/html/piwigo/themes/bootstrap_darkroom/template/picture_nav_buttons.tpl',
      1 => 1713951806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d5c5a3489364_67369771 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div id="navigationButtons" class="col-12 py-2">
<?php if ($_smarty_tpl->tpl_vars['DISPLAY_NAV_BUTTONS']->value || (isset($_smarty_tpl->tpl_vars['slideshow']->value))) {
if ((isset($_smarty_tpl->tpl_vars['slideshow']->value))) {
if ((isset($_smarty_tpl->tpl_vars['slideshow']->value['U_INC_PERIOD']))) {?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['slideshow']->value['U_INC_PERIOD'];?>
" title="<?php echo l10n('Reduce diaporama speed');?>
" class="pwg-state-default pwg-button">
	    <i class="fas fa-minus" aria-hiden="true"></i>
	</a>
<?php } else { ?>
        <i class="fas fa-minus" aria-hiden="true"></i>
<?php }
if ((isset($_smarty_tpl->tpl_vars['slideshow']->value['U_DEC_PERIOD']))) {?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['slideshow']->value['U_DEC_PERIOD'];?>
" title="<?php echo l10n('Accelerate diaporama speed');?>
" class="pwg-state-default pwg-button">
	    <i class="fas fa-plus" aria-hidden="true"></i>
	</a>
<?php } else { ?>
        <i class="fas fa-plus" aria-hidden="true"></i>
<?php }
}
if ((isset($_smarty_tpl->tpl_vars['slideshow']->value['U_START_REPEAT']))) {?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['slideshow']->value['U_START_REPEAT'];?>
" title="<?php echo l10n('Repeat the slideshow');?>
" class="pwg-state-default pwg-button">
	    <i class="fas fa-repeat" aria-hidden="true"></i>
	</a>
<?php }
if ((isset($_smarty_tpl->tpl_vars['previous']->value))) {?><a href="<?php echo $_smarty_tpl->tpl_vars['previous']->value['U_IMG'];?>
" title="<?php echo l10n('Previous');?>
 : <?php echo $_smarty_tpl->tpl_vars['previous']->value['TITLE_ESC'];?>
" id="navPrevPicture"><i class="fas fa-chevron-left" aria-hidden="true"></i></a><?php } else { ?><i class="fas fa-chevron-left" aria-hidden="true"></i><?php }
if ((isset($_smarty_tpl->tpl_vars['U_UP']->value)) && !(isset($_smarty_tpl->tpl_vars['slideshow']->value))) {?><a href="<?php echo $_smarty_tpl->tpl_vars['U_UP']->value;?>
" title="<?php echo l10n('Thumbnails');?>
"><i class="fas fa-chevron-up"></i></a><?php }
if (!(isset($_smarty_tpl->tpl_vars['slideshow']->value)) && ($_smarty_tpl->tpl_vars['theme_config']->value->photoswipe && !empty($_smarty_tpl->tpl_vars['thumbnails']->value))) {?><a href="javascript:;" title="<?php echo l10n('Fullscreen');?>
" id="startPhotoSwipe"><i class="fas fa-expand-arrows-alt" aria-hidden="true"></i></a><?php }
if ((isset($_smarty_tpl->tpl_vars['slideshow']->value['U_START_PLAY']))) {?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['slideshow']->value['U_START_PLAY'];?>
" title="<?php echo l10n('Play of slideshow');?>
">
	    <i class="fas fa-play" aria-hidden="true"></i>
	</a>
<?php }
if ((isset($_smarty_tpl->tpl_vars['slideshow']->value['U_STOP_PLAY']))) {?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['slideshow']->value['U_STOP_PLAY'];?>
" title="<?php echo l10n('Pause of slideshow');?>
">
	    <i class="fas fa-pause" aria-hidden="true"></i>
	</a>
<?php }
if ((isset($_smarty_tpl->tpl_vars['U_SLIDESHOW_STOP']->value))) {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['U_SLIDESHOW_STOP']->value;?>
" title="<?php echo l10n('stop the slideshow');?>
">
            <i class="fas fa-stop" aria-hidden="true"></i>
        </a>
<?php }
if ((isset($_smarty_tpl->tpl_vars['next']->value))) {
$_block_plugin9 = isset($_smarty_tpl->smarty->registered_plugins['block']['html_head'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['html_head'][0][0] : null;
if (!is_callable(array($_block_plugin9, 'block_html_head'))) {
throw new SmartyException('block tag \'html_head\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('html_head', array());
$_block_repeat=true;
echo $_block_plugin9->block_html_head(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><link rel="prerender" href="<?php echo $_smarty_tpl->tpl_vars['next']->value['U_IMG'];?>
"><?php $_block_repeat=false;
echo $_block_plugin9->block_html_head(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?><a href="<?php echo $_smarty_tpl->tpl_vars['next']->value['U_IMG'];?>
" title="<?php echo l10n('Next');?>
 : <?php echo $_smarty_tpl->tpl_vars['next']->value['TITLE_ESC'];?>
" id="navNextPicture"><i class="fas fa-chevron-right" aria-hidden="true"></i></a><?php } else { ?><i class="fas fa-chevron-right" aria-hidden="true"></i><?php }
}?>
    </div>
<?php $_block_plugin10 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin10, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin10->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>document.onkeydown = function(e){e=e||window.event;if (e.altKey) return true;var target=e.target||e.srcElement;if (target && target.type) return true;	var keyCode=e.keyCode||e.which, docElem=document.documentElement, url;switch(keyCode){<?php if ((isset($_smarty_tpl->tpl_vars['next']->value))) {?>case 63235: case 39: if ((e.ctrlKey || docElem.scrollLeft==docElem.scrollWidth-docElem.clientWidth) && $('.pswp--visible').length === 0)url="<?php echo $_smarty_tpl->tpl_vars['next']->value['U_IMG'];?>
"; break;<?php }
if ((isset($_smarty_tpl->tpl_vars['previous']->value))) {?>case 63234: case 37: if ((e.ctrlKey || docElem.scrollLeft==0) && $('.pswp--visible').length === 0)url="<?php echo $_smarty_tpl->tpl_vars['previous']->value['U_IMG'];?>
"; break;<?php }
if ((isset($_smarty_tpl->tpl_vars['first']->value))) {?>case 36: if (e.ctrlKey)url="<?php echo $_smarty_tpl->tpl_vars['first']->value['U_IMG'];?>
"; break;<?php }
if ((isset($_smarty_tpl->tpl_vars['last']->value))) {?>case 35: if (e.ctrlKey)url="<?php echo $_smarty_tpl->tpl_vars['last']->value['U_IMG'];?>
"; break;<?php }
if ((isset($_smarty_tpl->tpl_vars['U_UP']->value)) && !(isset($_smarty_tpl->tpl_vars['slideshow']->value))) {?>case 38: if (e.ctrlKey)url="<?php echo $_smarty_tpl->tpl_vars['U_UP']->value;?>
"; break;<?php }
if ((isset($_smarty_tpl->tpl_vars['slideshow']->value['U_START_PLAY']))) {?>case 32: url="<?php echo $_smarty_tpl->tpl_vars['slideshow']->value['U_START_PLAY'];?>
"; break;<?php }
if ((isset($_smarty_tpl->tpl_vars['slideshow']->value['U_STOP_PLAY']))) {?>case 32: url="<?php echo $_smarty_tpl->tpl_vars['slideshow']->value['U_STOP_PLAY'];?>
"; break;<?php }?>}if (url) {window.location=url.replace("&amp;","&"); return false;}return true;}<?php $_block_repeat=false;
echo $_block_plugin10->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
