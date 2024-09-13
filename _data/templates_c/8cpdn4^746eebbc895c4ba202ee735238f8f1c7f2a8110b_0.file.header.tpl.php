<?php
/* Smarty version 4.3.1, created on 2024-09-13 17:55:49
  from '/var/www/html/piwigo/admin/themes/default/template/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66e41a355f0e61_26912648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '746eebbc895c4ba202ee735238f8f1c7f2a8110b' => 
    array (
      0 => '/var/www/html/piwigo/admin/themes/default/template/header.tpl',
      1 => 1702327276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e41a355f0e61_26912648 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['lang_info']->value['code'];?>
" dir="<?php echo $_smarty_tpl->tpl_vars['lang_info']->value['direction'];?>
">
<head>
<?php if ($_smarty_tpl->tpl_vars['SHOW_MOBILE_APP_BANNER']->value) {?>
<meta name="apple-itunes-app" content="app-id=472225196">
<?php }?>
<meta charset="<?php echo $_smarty_tpl->tpl_vars['CONTENT_ENCODING']->value;?>
">
<title><?php echo $_smarty_tpl->tpl_vars['GALLERY_TITLE']->value;?>
 :: <?php echo $_smarty_tpl->tpl_vars['PAGE_TITLE']->value;?>
</title>
<link rel="icon" type="image/svg+xml" href="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;
echo $_smarty_tpl->tpl_vars['themeconf']->value['icon_dir'];?>
/piwigo.org-icon 1.svg">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
admin/themes/default/fonts/open-sans/open-sans.css">

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"admin/themes/default/fontello/css/fontello.css",'order'=>-10),$_smarty_tpl ) );
$_smarty_tpl->_assignInScope('theme_id', '');
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['themes']->value, 'theme');
$_smarty_tpl->tpl_vars['theme']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->do_else = false;
$_smarty_tpl->_assignInScope('theme_id', $_smarty_tpl->tpl_vars['theme']->value['id']);
if ($_smarty_tpl->tpl_vars['theme']->value['load_css']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"admin/themes/".((string)$_smarty_tpl->tpl_vars['theme']->value['id'])."/theme.css",'order'=>-10),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"admin/themes/".((string)$_smarty_tpl->tpl_vars['theme']->value['id'])."/css/components/general.css",'order'=>-9),$_smarty_tpl ) );?>
 <?php }
if (!empty($_smarty_tpl->tpl_vars['theme']->value['local_head'])) {
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['theme']->value['local_head'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('load_css'=>$_smarty_tpl->tpl_vars['theme']->value['load_css']), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery','path'=>'themes/default/js/jquery.min.js'),$_smarty_tpl ) );?>


<!-- BEGIN get_combined -->
<!-- COMBINED_CSS -->

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_combined_scripts'][0], array( array('load'=>'header'),$_smarty_tpl ) );?>

<!-- END get_combined -->

<?php if (!empty($_smarty_tpl->tpl_vars['head_elements']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['head_elements']->value, 'elt');
$_smarty_tpl->tpl_vars['elt']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['elt']->value) {
$_smarty_tpl->tpl_vars['elt']->do_else = false;
?>
  <?php echo $_smarty_tpl->tpl_vars['elt']->value;?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
</head>

<body id="<?php echo $_smarty_tpl->tpl_vars['BODY_ID']->value;?>
">

<div id="the_page">

<?php if (!empty($_smarty_tpl->tpl_vars['header_msgs']->value)) {?>
<div class="header_msgs">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['header_msgs']->value, 'elt');
$_smarty_tpl->tpl_vars['elt']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['elt']->value) {
$_smarty_tpl->tpl_vars['elt']->do_else = false;
?>
  <?php echo $_smarty_tpl->tpl_vars['elt']->value;?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }?>

<div id="pwgHead">
  <a href="<?php echo $_smarty_tpl->tpl_vars['U_RETURN']->value;?>
" class="visit-gallery tiptip" title="<?php echo l10n('Visit Gallery');?>
"><i class="icon-left-open"></i><?php echo l10n('Visit');?>
</a>
  <div class="pwgHead-gallery-title"><?php echo $_smarty_tpl->tpl_vars['GALLERY_TITLE']->value;?>
</div>

  <div id="headActions">
    <span class="admin-head-username"><i class="icon-user"></i><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</span>

<a href="<?php echo $_smarty_tpl->tpl_vars['U_CHANGE_THEME']->value;?>
" class="tiptip" title="<?php echo l10n('Switch to clear or dark colors for administration');?>
"><?php if ($_smarty_tpl->tpl_vars['theme_id']->value == "clear") {?><i class="icon-moon-inv"></i><span>Dark</span><?php } elseif ($_smarty_tpl->tpl_vars['theme_id']->value == "roma") {?><i class="icon-sun-inv"></i><span>Light</span><?php }?></a>

    <a class="tiptip" href="<?php echo $_smarty_tpl->tpl_vars['U_FAQ']->value;?>
" title="<?php echo l10n('Instructions to use Piwigo');?>
"><i class="icon-help-circled"></i><span><?php echo l10n('Help Me');?>
</span></a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['U_LOGOUT']->value;?>
"><i class="icon-logout"></i><span><?php echo l10n('Logout');?>
</span></a>
  </div>
</div>

<div style="clear:both;"></div>

<?php if (!empty($_smarty_tpl->tpl_vars['header_notes']->value)) {?>
<div class="header_notes">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['header_notes']->value, 'elt');
$_smarty_tpl->tpl_vars['elt']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['elt']->value) {
$_smarty_tpl->tpl_vars['elt']->do_else = false;
?>
  <?php echo $_smarty_tpl->tpl_vars['elt']->value;?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }?>

<div id="pwgMain">
<?php }
}
