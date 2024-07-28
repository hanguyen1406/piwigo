<?php
/* Smarty version 4.3.1, created on 2024-06-22 10:14:13
  from '/var/www/html/piwigo/admin/themes/default/template/themes_installed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676a3f59d03f2_48638760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c105343e0dfbdf66e67940811f379e02988de518' => 
    array (
      0 => '/var/www/html/piwigo/admin/themes/default/template/themes_installed.tpl',
      1 => 1702327276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/colorbox.inc.tpl' => 1,
  ),
),false)) {
function content_6676a3f59d03f2_48638760 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:include/colorbox.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'common','load'=>'footer','path'=>'admin/themes/default/js/common.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.confirm','load'=>'footer','require'=>'jquery','path'=>'themes/default/js/plugins/jquery-confirm.min.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/default/js/plugins/jquery-confirm.min.css"),$_smarty_tpl ) );?>

<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin1->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
const title_msg = '<?php echo strtr((string)l10n('Are you sure you want to delete this theme?'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
const confirm_msg = '<?php echo l10n("Yes, I am sure");?>
';
const cancel_msg = "<?php echo l10n("No, I have changed my mind");?>
";
$(".delete-theme-button").each(function() {
  let theme_name = $(this).closest(".themeBox").find(".themeName").attr("title");
  let title = '<?php echo strtr((string)l10n('Are you sure you want to delete the theme "%s"?'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
  $(this).pwg_jconfirm_follow_href({
    alert_title: title.replace("%s", theme_name),
    alert_confirm: confirm_msg,
    alert_cancel: cancel_msg
  });
});
<?php $_block_repeat=false;
echo $_block_plugin1->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin2->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
jQuery(document).ready(function() {
  $("a.preview-box").colorbox();
  
  $(document).mouseup(function (e) {
    e.stopPropagation();
    if (!$(event.target).hasClass('showInfo')) {
      $('.showInfo-dropdown').fadeOut();
    }
  });
  
});

$(window).bind("load", function() {
  $('.themeBox').each(function() {

    let box = $(this);
    box.find('.showInfo').on('click', function() {
      let dropdown = box.find('.showInfo-dropdown');
      $('.showInfo-dropdown').each(function() {
        if ($(this) !== dropdown) {
          $(this).fadeOut();
        }  
      })
      box.find('.showInfo-dropdown').fadeToggle();
    });

    let screenImage = $(this).find(".preview-box img");
    let imageW = screenImage.innerWidth();
    let imageH = screenImage.innerHeight();
    let size = $(this).find(".preview-box").innerWidth();

    if (imageW > imageH) {
      screenImage.css('height', size+'px');
      screenImage.css('width', (imageW * size / imageH)+'px');
    } else {
      screenImage.css('width', size+'px');
      screenImage.css('heigth', (imageH * size / imageW)+'px');
    }
  })
})

<?php $_block_repeat=false;
echo $_block_plugin2->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<div id="themesContent">

<?php $_smarty_tpl->_assignInScope('field_name', 'null');?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tpl_themes']->value, 'theme');
$_smarty_tpl->tpl_vars['theme']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->do_else = false;
?>
    
<?php if ($_smarty_tpl->tpl_vars['field_name']->value != $_smarty_tpl->tpl_vars['theme']->value['STATE']) {
if ($_smarty_tpl->tpl_vars['field_name']->value != 'null') {?>
    </div>
  </fieldset>
<?php }?>
  <fieldset>
    <legend>
<?php if ($_smarty_tpl->tpl_vars['theme']->value['STATE'] == 'active') {?>
      <span class="icon-purple icon-toggle-on"></span><?php echo l10n('Active Themes');?>

<?php } else { ?>
      <span class="icon-yellow icon-toggle-off"></span><?php echo l10n('Inactive Themes');?>

<?php }?>
    </legend>
    <div class="themeBoxes">
  <?php $_smarty_tpl->_assignInScope('field_name', $_smarty_tpl->tpl_vars['theme']->value['STATE']);
}?>

<?php if (!empty($_smarty_tpl->tpl_vars['theme']->value['AUTHOR'])) {
if (!empty($_smarty_tpl->tpl_vars['theme']->value['AUTHOR_URL'])) {?>
      <?php $_smarty_tpl->_assignInScope('author', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sprintf' ][ 0 ], array( "<a href='%s'>%s</a>",$_smarty_tpl->tpl_vars['theme']->value['AUTHOR_URL'],$_smarty_tpl->tpl_vars['theme']->value['AUTHOR'] )));
} else { ?>
      <?php $_smarty_tpl->_assignInScope('author', (('<u>').($_smarty_tpl->tpl_vars['theme']->value['AUTHOR'])).('</u>'));
}
}
if (!empty($_smarty_tpl->tpl_vars['theme']->value['VISIT_URL'])) {?>
    <?php $_smarty_tpl->_assignInScope('version', (((("<a class='externalLink' href='").($_smarty_tpl->tpl_vars['theme']->value['VISIT_URL'])).("'>")).($_smarty_tpl->tpl_vars['theme']->value['VERSION'])).("</a>"));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('version', $_smarty_tpl->tpl_vars['theme']->value['VERSION']);
}?>
  <div class="themeBox<?php if ((isset($_smarty_tpl->tpl_vars['theme']->value['IS_DEFAULT'])) && $_smarty_tpl->tpl_vars['theme']->value['IS_DEFAULT']) {?> themeDefault<?php }?>">
    <div class="themeShot"><a href="<?php echo $_smarty_tpl->tpl_vars['theme']->value['SCREENSHOT'];?>
" class="preview-box" title="<?php echo $_smarty_tpl->tpl_vars['theme']->value['NAME'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['theme']->value['SCREENSHOT'];?>
" alt=""></a></div>
    <div class="themeName" title="<?php echo $_smarty_tpl->tpl_vars['theme']->value['NAME'];?>
">
      <?php echo $_smarty_tpl->tpl_vars['theme']->value['NAME'];?>
 <?php if ((isset($_smarty_tpl->tpl_vars['theme']->value['IS_DEFAULT'])) && $_smarty_tpl->tpl_vars['theme']->value['IS_DEFAULT']) {?><i class="icon-star" title="<?php echo l10n('default');?>
"></i><?php }?> <?php if ($_smarty_tpl->tpl_vars['theme']->value['IS_MOBILE']) {?><i class="icon-mobile" title="<?php echo l10n('Mobile');?>
"></i><?php }?>
      <?php if ($_smarty_tpl->tpl_vars['isWebmaster']->value == 1) {?> <a class="icon-ellipsis-v showInfo"></a><?php }?>
    </div>
    <div class="showInfo-dropdown dropdown">
      <div class="showInfo-dropdown-header">
<?php if (!empty($_smarty_tpl->tpl_vars['author']->value)) {?>
          <?php echo l10n('By %s',$_smarty_tpl->tpl_vars['author']->value);?>
 | 
<?php }?>
        <?php echo l10n('Version');?>
 <?php echo $_smarty_tpl->tpl_vars['version']->value;?>

      </div>
      <div class="showInfo-dropdown-content">
        <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['theme']->value['DESC'], ENT_QUOTES, 'UTF-8', true);?>

      </div>
<?php if ($_smarty_tpl->tpl_vars['theme']->value['STATE'] != "active" && $_smarty_tpl->tpl_vars['CONF_ENABLE_EXTENSIONS_INSTALL']->value) {
if ($_smarty_tpl->tpl_vars['theme']->value['DELETABLE']) {?>
            <a class="dropdown-option icon-trash delete-plugin-button delete-theme-button" href="<?php echo $_smarty_tpl->tpl_vars['delete_baseurl']->value;
echo $_smarty_tpl->tpl_vars['theme']->value['ID'];?>
"><?php echo l10n('Delete');?>
</a>
<?php } else { ?>
            <span class="dropdown-option icon-trash delete-plugin-button"title="<?php echo $_smarty_tpl->tpl_vars['theme']->value['DELETE_TOOLTIP'];?>
"><?php echo l10n('Delete');?>
</span>
<?php }
}
if ($_smarty_tpl->tpl_vars['theme']->value['STATE'] == "active") {?><a href="admin.php?page=plugin-LocalFilesEditor-css&amp;theme=<?php echo $_smarty_tpl->tpl_vars['theme']->value['ID'];?>
" class="dropdown-option icon-brush"><?php echo l10n('Customize CSS');?>
</a><?php }
if ((isset($_smarty_tpl->tpl_vars['theme']->value['DEACTIVABLE'])) && $_smarty_tpl->tpl_vars['theme']->value['DEACTIVABLE']) {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['deactivate_baseurl']->value;
echo $_smarty_tpl->tpl_vars['theme']->value['ID'];?>
" class="showInfo-dropdown-action tiptip icon-cancel-circled" title="<?php echo l10n('Forbid this theme to users');?>
"><?php echo l10n('Deactivate');?>
</a>
<?php }?>
    </div>
<?php if ($_smarty_tpl->tpl_vars['isWebmaster']->value == 1) {?>
    <div class="themeActions">
<?php if ($_smarty_tpl->tpl_vars['theme']->value['STATE'] == 'active') {
if ($_smarty_tpl->tpl_vars['theme']->value['ADMIN_URI']) {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['theme']->value['ADMIN_URI'];?>
" class="icon-cog"><?php echo l10n('Configuration');?>
</a>
<?php } else { ?>
        <div class="pluginUnavailableAction icon-cog tiptip" title="<?php echo l10n('N/A');?>
"><?php echo l10n('Configuration');?>
</div>
<?php }
if ((isset($_smarty_tpl->tpl_vars['theme']->value['IS_DEFAULT'])) && !$_smarty_tpl->tpl_vars['theme']->value['IS_DEFAULT']) {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['set_default_baseurl']->value;
echo $_smarty_tpl->tpl_vars['theme']->value['ID'];?>
" class="tiptip icon-star" title="<?php echo l10n('Set as default theme for unregistered and new users');?>
"><?php echo l10n('Set as default');?>
</a>
<?php } else { ?>
        <span class="tiptip icon-star" title="<?php echo l10n('This is already the default theme');?>
"><?php echo l10n('Set as default');?>
</span>
<?php }
} else {
if ($_smarty_tpl->tpl_vars['theme']->value['ACTIVABLE']) {?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['activate_baseurl']->value;
echo $_smarty_tpl->tpl_vars['theme']->value['ID'];?>
" title="<?php echo l10n('Make this theme available to users');?>
" class="icon-plus tiptip"><?php echo l10n('Activate');?>
</a>
<?php } else { ?>
      <span title="<?php echo $_smarty_tpl->tpl_vars['theme']->value['ACTIVABLE_TOOLTIP'];?>
" class="icon-plus tiptip"><?php echo l10n('Activate');?>
</span>
<?php }
}?>
    </div> <!-- themeActions -->
<?php }?>
  </div>
  
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div> <!-- themeBoxes -->
</fieldset>

</div> <!-- themesContent -->
<?php }
}
