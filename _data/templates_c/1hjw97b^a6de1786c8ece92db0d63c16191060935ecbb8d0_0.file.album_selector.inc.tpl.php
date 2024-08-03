<?php
/* Smarty version 4.3.1, created on 2024-07-29 09:35:32
  from '/var/www/html/piwigo/admin/themes/default/template/include/album_selector.inc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66a76264873ef3_37663852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6de1786c8ece92db0d63c16191060935ecbb8d0' => 
    array (
      0 => '/var/www/html/piwigo/admin/themes/default/template/include/album_selector.inc.tpl',
      1 => 1702327276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/colorbox.inc.tpl' => 1,
  ),
),false)) {
function content_66a76264873ef3_37663852 (Smarty_Internal_Template $_smarty_tpl) {
if (empty($_smarty_tpl->tpl_vars['load_mode']->value)) {
$_smarty_tpl->_assignInScope('load_mode', 'footer');
}
if (!(isset($_smarty_tpl->tpl_vars['show_root_btn']->value))) {
$_smarty_tpl->_assignInScope('show_root_btn', false);
}?>

<?php $_smarty_tpl->_subTemplateRender('file:include/colorbox.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('load_mode'=>$_smarty_tpl->tpl_vars['load_mode']->value), 0, false);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'albumSelector','load_mode'=>$_smarty_tpl->tpl_vars['load_mode']->value,'path'=>'admin/themes/default/js/album_selector.js'),$_smarty_tpl ) );?>

<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin2->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
  str_no_search_in_progress = '<?php echo strtr((string)l10n('No search in progress'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
  str_albums_found = '<?php echo l10n("<b>%d</b> albums found");?>
';
  str_album_found = '<?php echo l10n("<b>1</b> album found");?>
';

<?php if ((isset($_smarty_tpl->tpl_vars['api_method']->value))) {?>
    api_method = '<?php echo $_smarty_tpl->tpl_vars['api_method']->value;?>
';
<?php } else { ?>
    api_method = 'pwg.categories.getAdminList';
<?php }
$_block_repeat=false;
echo $_block_plugin2->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<div id="addLinkedAlbum" class="linkedAlbumPopIn">
  <div class="linkedAlbumPopInContainer">
    <a class="icon-cancel ClosePopIn"></a>
    
    <div class="AddIconContainer">
      <span class="AddIcon icon-blue icon-plus-circled"></span>
    </div>
    <div class="AddIconTitle">
      <span><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span>
    </div>

<?php if ($_smarty_tpl->tpl_vars['show_root_btn']->value) {?>
    <label class="head-button-2 put-to-root">
      <p class="icon-home"><?php echo l10n('Put at the root');?>
</p>
    </label>
    <p><?php echo l10n('or');?>
</p>
<?php }?>
    <div id="linkedAlbumSearch">
      <span class='icon-search search-icon'> </span>
      <span class="icon-cancel search-cancel-linked-album"></span>
      <input class='search-input' type='text' placeholder=<?php echo $_smarty_tpl->tpl_vars['searchPlaceholder']->value;?>
>
    </div>
    <div class="limitReached"></div>
    <div class="noSearch"></div>
    <div class="searching icon-spin6 animate-spin"> </div>

    <div id="searchResult">
    </div>
  </div>
</div><?php }
}
