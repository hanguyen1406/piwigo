<?php
/* Smarty version 4.3.1, created on 2024-09-02 21:03:08
  from '/var/www/html/piwigo/themes/bootstrap_darkroom/template/menubar_related_categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66d5c59c103343_87992441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93a582b7187b399789697c1324f6739b4e5f638d' => 
    array (
      0 => '/var/www/html/piwigo/themes/bootstrap_darkroom/template/menubar_related_categories.tpl',
      1 => 1713951806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d5c59c103343_87992441 (Smarty_Internal_Template $_smarty_tpl) {
?><li id="relatedCategoriesDropdownMenu" class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo l10n('Related albums');?>
</a>
    <div class="dropdown-menu dropdown-menu-right" role="menu">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value->data['MENU_CATEGORIES'], 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
       <<?php if ((isset($_smarty_tpl->tpl_vars['cat']->value['url']))) {?>a href="<?php echo $_smarty_tpl->tpl_vars['cat']->value['url'];?>
"<?php } else { ?>span<?php }?> class="dropdown-item" data-level="<?php echo ($_smarty_tpl->tpl_vars['cat']->value['LEVEL']-1);?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>

<?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['count_images'])) {?>
        <span class="badge badge-primary ml-2" title="<?php if ((isset($_smarty_tpl->tpl_vars['cat']->value['TITLE']))) {
echo $_smarty_tpl->tpl_vars['cat']->value['TITLE'];
}?>"><?php echo $_smarty_tpl->tpl_vars['cat']->value['count_images'];?>
</span>
<?php }
if (!empty($_smarty_tpl->tpl_vars['cat']->value['count_categories'])) {?>
        <span class="badge badge-secondary ml-2" title="<?php echo l10n('sub-albums');?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['count_categories'];?>
</span>
<?php }?>
       </<?php if ((isset($_smarty_tpl->tpl_vars['cat']->value['url']))) {?>a<?php } else { ?>span<?php }?>>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</li>
<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery'));
$_block_repeat=true;
echo $_block_plugin1->block_footer_script(array('require'=>'jquery'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>$('#relatedCategoriesDropdownMenu').on('show.bs.dropdown', function() {$(this).find('.dropdown-item').each(function() {var level = $(this).data('level');var padding = parseInt($(this).css('padding-left'));if (level > 0) {$(this).css('padding-left', (padding + 10 * level) + 'px')}});});<?php $_block_repeat=false;
echo $_block_plugin1->block_footer_script(array('require'=>'jquery'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
