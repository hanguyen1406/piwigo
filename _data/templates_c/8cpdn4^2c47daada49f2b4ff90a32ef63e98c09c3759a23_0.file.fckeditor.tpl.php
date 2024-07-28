<?php
/* Smarty version 4.3.1, created on 2024-06-22 10:26:39
  from '/var/www/html/piwigo/plugins/FCKEditor/fckeditor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676a6df307467_48515222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c47daada49f2b4ff90a32ef63e98c09c3759a23' => 
    array (
      0 => '/var/www/html/piwigo/plugins/FCKEditor/fckeditor.tpl',
      1 => 1719042198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6676a6df307467_48515222 (Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['html_head'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['html_head'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_html_head'))) {
throw new SmartyException('block tag \'html_head\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('html_head', array());
$_block_repeat=true;
echo $_block_plugin1->block_html_head(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
<style type="text/css">
FORM#catModify TABLE TABLE { width: 100%; }
#cke_page_banner { overflow: auto; }
</style>

<?php echo '<script'; ?>
 type="text/javascript" src="plugins/FCKEditor/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
<?php if ($_smarty_tpl->tpl_vars['FCK_TOOLBAR']->value == 'Basic') {?>
CKEDITOR.config.toolbar_Basic =
[
  ["Source"],["Bold","Italic","Underline"],
  ["JustifyLeft","JustifyCenter","JustifyRight","JustifyBlock"],
  ["Styles","Format","Font","FontSize"],
  ["Link","Unlink","ShowBlocks"]
];
<?php }?>
CKEDITOR.config.width = "<?php echo $_smarty_tpl->tpl_vars['FCK_WIDTH']->value;?>
";
CKEDITOR.config.height = "<?php echo $_smarty_tpl->tpl_vars['FCK_HEIGHT']->value;?>
";
CKEDITOR.config.toolbar = "<?php echo $_smarty_tpl->tpl_vars['FCK_TOOLBAR']->value;?>
";

<?php if (!empty($_smarty_tpl->tpl_vars['FCK_areas']->value)) {?>
window.onload = function() {
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FCK_areas']->value, 'area');
$_smarty_tpl->tpl_vars['area']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['area']->value) {
$_smarty_tpl->tpl_vars['area']->do_else = false;
if (!(isset($_smarty_tpl->tpl_vars['FCK_config']->value[$_smarty_tpl->tpl_vars['area']->value])) || $_smarty_tpl->tpl_vars['FCK_config']->value[$_smarty_tpl->tpl_vars['area']->value]) {?>
  CKEDITOR.replace('<?php echo $_smarty_tpl->tpl_vars['area']->value;?>
');
<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
}
<?php }?>

function toogleEditor(name) {
  if (typeof( CKEDITOR.instances[name] ) != "undefined") {
    CKEDITOR.instances[name].destroy();
    jQuery.post("plugins/FCKEditor/update_config.php", {area: name, status: "off"});
  } else {
    CKEDITOR.replace(name);
    jQuery.post("plugins/FCKEditor/update_config.php", {area: name, status: "on"});
  }
}
<?php echo '</script'; ?>
>
<?php $_block_repeat=false;
echo $_block_plugin1->block_html_head(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
