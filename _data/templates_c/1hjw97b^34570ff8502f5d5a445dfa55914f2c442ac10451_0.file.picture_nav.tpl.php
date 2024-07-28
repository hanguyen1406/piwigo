<?php
/* Smarty version 4.3.1, created on 2024-06-22 14:48:17
  from '/var/www/html/piwigo/themes/bootstrap_darkroom/template/picture_nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676e431281c50_81041621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34570ff8502f5d5a445dfa55914f2c442ac10451' => 
    array (
      0 => '/var/www/html/piwigo/themes/bootstrap_darkroom/template/picture_nav.tpl',
      1 => 1713951806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6676e431281c50_81041621 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-contextual navbar-expand-lg <?php echo $_smarty_tpl->tpl_vars['theme_config']->value->navbar_contextual_style;?>
 <?php echo $_smarty_tpl->tpl_vars['theme_config']->value->navbar_contextual_bg;?>
 sticky-top mb-2">
    <div class="container<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->fluid_width) {?>-fluid<?php }?>">
        <div class="navbar-brand">
            <div class="nav-breadcrumb d-inline-flex"><?php echo $_smarty_tpl->tpl_vars['SECTION_TITLE']->value;?>
<span class="nav-breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['current']->value['TITLE'];?>
</span></div>
        </div>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#secondary-navbar" aria-controls="secondary-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fas fa-bars"></span>
        </button>
        <div class="navbar-collapse collapse justify-content-end" id="secondary-navbar">
            <ul class="navbar-nav">
<?php if ((isset($_smarty_tpl->tpl_vars['current']->value['unique_derivatives'])) && count($_smarty_tpl->tpl_vars['current']->value['unique_derivatives']) > 1) {
$_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery'));
$_block_repeat=true;
echo $_block_plugin3->block_footer_script(array('require'=>'jquery'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>function changeImgSrc(url,typeSave,typeMap) {var theImg = document.getElementById("theMainImage");if (theImg) {theImg.removeAttribute("width");theImg.removeAttribute("height");theImg.src = url;theImg.useMap = "#map"+typeMap;}jQuery('.derivative-li').removeClass('active');jQuery('#derivative'+typeMap).addClass('active');document.cookie = 'picture_deriv='+typeSave+';path=<?php echo $_smarty_tpl->tpl_vars['COOKIE_PATH']->value;?>
';}<?php $_block_repeat=false;
echo $_block_plugin3->block_footer_script(array('require'=>'jquery'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" title="<?php echo l10n('Photo sizes');?>
">
                        <i class="far fa-image fa-fw" aria-hidden="true"></i><span class="d-lg-none ml-2"><?php echo l10n('Photo sizes');?>
</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['current']->value['unique_derivatives'], 'derivative', false, 'derivative_type');
$_smarty_tpl->tpl_vars['derivative']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['derivative_type']->value => $_smarty_tpl->tpl_vars['derivative']->value) {
$_smarty_tpl->tpl_vars['derivative']->do_else = false;
?>
                        <a id="derivative<?php echo $_smarty_tpl->tpl_vars['derivative']->value->get_type();?>
" class="dropdown-item derivative-li<?php if ($_smarty_tpl->tpl_vars['derivative']->value->get_type() == $_smarty_tpl->tpl_vars['current']->value['selected_derivative']->get_type()) {?> active<?php }?>" href="javascript:changeImgSrc('<?php echo strtr((string)$_smarty_tpl->tpl_vars['derivative']->value->get_url(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
','<?php echo $_smarty_tpl->tpl_vars['derivative_type']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['derivative']->value->get_type();?>
')" rel="nofollow">
                                <?php echo l10n($_smarty_tpl->tpl_vars['derivative']->value->get_type());?>
<span class="derivativeSizeDetails"> (<?php echo $_smarty_tpl->tpl_vars['derivative']->value->get_size_hr();?>
)</span>
                        </a>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ((isset($_smarty_tpl->tpl_vars['U_ORIGINAL']->value))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'core.scripts','load'=>'async','path'=>'themes/default/js/scripts.js'),$_smarty_tpl ) );?>

                        <a class="dropdown-item" href="javascript:phpWGOpenWindow('<?php echo $_smarty_tpl->tpl_vars['U_ORIGINAL']->value;?>
','xxx','scrollbars=yes,toolbar=no,status=no,resizable=yes')" rel="nofollow"><?php echo l10n('Original');?>
</a>
<?php }?>
                    </div>
                </li>
<?php }
if ((isset($_smarty_tpl->tpl_vars['U_SLIDESHOW_START']->value))) {?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->photoswipe) {?>javascript:;<?php } else {
echo $_smarty_tpl->tpl_vars['U_SLIDESHOW_START']->value;
}?>" title="<?php echo l10n('slideshow');?>
" id="startSlideshow" rel="nofollow">
                        <i class="fas fa-play fa-fw" aria-hidden="true"></i><span class="d-lg-none ml-2 text-capitalize"><?php echo l10n('slideshow');?>
</span>
                    </a>
                </li>
<?php }
if ((isset($_smarty_tpl->tpl_vars['current']->value['U_DOWNLOAD']))) {
if (empty($_smarty_tpl->tpl_vars['current']->value['formats'])) {?>
                <li class="nav-item">
                    <a id="downloadSwitchLink" class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['current']->value['U_DOWNLOAD'];?>
" title="<?php echo l10n('Download this file');?>
" rel="nofollow">
                        <i class="fas fa-download fa-fw" aria-hidden="true"></i><span class="d-lg-none ml-2"><?php echo l10n('Download this file');?>
</span>
                    </a>
<?php } else { ?>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" title="<?php echo l10n('Download this file');?>
">
                        <i class="fas fa-download fa-fw" aria-hidden="true"></i><span class="d-lg-none ml-2"><?php echo l10n('Download this file');?>
</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['current']->value['formats'], 'format');
$_smarty_tpl->tpl_vars['format']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['format']->value) {
$_smarty_tpl->tpl_vars['format']->do_else = false;
?>
                        <li class="dropdown-item"><a href="<?php echo $_smarty_tpl->tpl_vars['format']->value['download_url'];?>
" rel="nofollow"><?php echo $_smarty_tpl->tpl_vars['format']->value['label'];?>
<span class="downloadformatDetails"> (<?php echo $_smarty_tpl->tpl_vars['format']->value['filesize'];?>
)</span></a></li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
<?php }?>                 </li>
<?php }
if ((isset($_smarty_tpl->tpl_vars['favorite']->value))) {?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['favorite']->value['U_FAVORITE'];?>
" title="<?php if ($_smarty_tpl->tpl_vars['favorite']->value['IS_FAVORITE']) {
echo l10n('delete this photo from your favorites');
} else {
echo l10n('add this photo to your favorites');
}?>" rel="nofollow">
                        <i class="fa<?php if (!$_smarty_tpl->tpl_vars['favorite']->value['IS_FAVORITE']) {?>r<?php } else { ?>s<?php }?> fa-heart fa-fw"></i><span class="d-lg-none ml-2"><?php if ($_smarty_tpl->tpl_vars['favorite']->value['IS_FAVORITE']) {
echo l10n('delete this photo from your favorites');
} else {
echo l10n('add this photo to your favorites');
}?></span>
                    </a>
                </li>
<?php }
if ((isset($_smarty_tpl->tpl_vars['U_SET_AS_REPRESENTATIVE']->value))) {?>
                <li class="nav-item">
                    <a class="nav-link" id="cmdSetRepresentative" href="<?php echo $_smarty_tpl->tpl_vars['U_SET_AS_REPRESENTATIVE']->value;?>
" title="<?php echo l10n('set as album representative');?>
" rel="nofollow">
                        <i class="fas fa-link fa-fw" aria-hidden="true"></i><span class="d-lg-none ml-2"><?php echo l10n('set as album representative');?>
</span>
                    </a>
                </li>
<?php }
if ((isset($_smarty_tpl->tpl_vars['U_PHOTO_ADMIN']->value))) {?>
                <li class="nav-item">
                    <a class="nav-link" id="cmdEditPhoto" href="<?php echo $_smarty_tpl->tpl_vars['U_PHOTO_ADMIN']->value;?>
" title="<?php echo l10n('Modify information');?>
" rel="nofollow">
                        <i class="fas fa-pencil-alt fa-fw" aria-hidden="true"></i><span class="d-lg-none ml-2"><?php echo l10n('Modify information');?>
</span>
                    </a>
                </li>
<?php }
if ((isset($_smarty_tpl->tpl_vars['U_CADDIE']->value))) {
$_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin4->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>function addToCadie(aElement, rootUrl, id) {if (aElement.disabled) return;aElement.disabled=true;var y = new PwgWS(rootUrl);y.callService("pwg.caddie.add", {image_id: id}, {onFailure: function(num, text) { alert(num + " " + text); document.location=aElement.href; },onSuccess: function(result) { aElement.disabled = false; }});}<?php $_block_repeat=false;
echo $_block_plugin4->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['U_CADDIE']->value;?>
" onclick="addToCadie(this, '<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
', <?php echo $_smarty_tpl->tpl_vars['current']->value['id'];?>
); return false;" title="<?php echo l10n('Add to caddie');?>
" rel="nofollow">
                        <i class="fas fa-shopping-basket fa-fw" aria-hidden="true"></i><span class="d-lg-none ml-2"><?php echo l10n('Add to caddie');?>
</span>
                    </a>
                </li>
<?php }
if ((isset($_smarty_tpl->tpl_vars['PLUGIN_PICTURE_BUTTONS']->value))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PLUGIN_PICTURE_BUTTONS']->value, 'button');
$_smarty_tpl->tpl_vars['button']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->do_else = false;
echo $_smarty_tpl->tpl_vars['button']->value;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if ((isset($_smarty_tpl->tpl_vars['PLUGIN_PICTURE_ACTIONS']->value))) {
echo $_smarty_tpl->tpl_vars['PLUGIN_PICTURE_ACTIONS']->value;
}?>
            </ul>
        </div>
    </div>
</nav>
<?php }
}
