<?php
/* Smarty version 4.3.1, created on 2024-07-29 09:40:15
  from '/var/www/html/piwigo/admin/themes/default/template/themes_new.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66a7637f160ae1_86645214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a02d482fc9c4352b29e61e7dce18e423d56a296' => 
    array (
      0 => '/var/www/html/piwigo/admin/themes/default/template/themes_new.tpl',
      1 => 1702327276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/colorbox.inc.tpl' => 1,
  ),
),false)) {
function content_66a7637f160ae1_86645214 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:include/colorbox.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin1->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

$(window).bind("load", function() {
  $('.themeBox').each(function() {

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
echo $_block_plugin1->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php if (!empty($_smarty_tpl->tpl_vars['new_themes']->value)) {?>
<div class="themeBoxes">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['new_themes']->value, 'theme', false, NULL, 'themes_loop', array (
));
$_smarty_tpl->tpl_vars['theme']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->do_else = false;
?>
<div class="themeBox">
  <div class="themeShot"><a href="<?php echo $_smarty_tpl->tpl_vars['theme']->value['screenshot'];?>
" class="preview-box" title="<?php echo $_smarty_tpl->tpl_vars['theme']->value['name'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['theme']->value['screenshot'];?>
" onerror="this.src='<?php echo $_smarty_tpl->tpl_vars['default_screenshot']->value;?>
'"></a></div>
  <div class="themeName" title="<?php echo $_smarty_tpl->tpl_vars['theme']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['theme']->value['name'];?>
</div>
  <div class="themeActions"><a href="<?php echo $_smarty_tpl->tpl_vars['theme']->value['install_url'];?>
"><?php echo l10n('Install');?>
</a></div>
</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div> <!-- themeBoxes -->
<?php } else { ?>
<p><?php echo l10n('There is no other theme available.');?>
</p>
<?php }
}
}
