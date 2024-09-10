<?php
/* Smarty version 4.3.1, created on 2024-09-02 20:44:52
  from '/var/www/html/piwigo/themes/bootstrap_darkroom/template/menubar_categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66d5c1544df083_46595002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0df42a7e55ef2f3fcda875d2dc7228d6c67ab28f' => 
    array (
      0 => '/var/www/html/piwigo/themes/bootstrap_darkroom/template/menubar_categories.tpl',
      1 => 1713951806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d5c1544df083_46595002 (Smarty_Internal_Template $_smarty_tpl) {
?><li id="categoriesDropdownMenu" class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo l10n('Albums');?>
</a>
    <div class="dropdown-menu dropdown-menu-right" role="menu">
<?php $_smarty_tpl->_assignInScope('ref_level', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value->data['MENU_CATEGORIES'], 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
        <a class="dropdown-item<?php if ($_smarty_tpl->tpl_vars['cat']->value['SELECTED']) {?> active<?php }?>" data-level="<?php echo ($_smarty_tpl->tpl_vars['cat']->value['LEVEL']-1);?>
" href="<?php echo $_smarty_tpl->tpl_vars['cat']->value['URL'];?>
">
            <?php echo $_smarty_tpl->tpl_vars['cat']->value['NAME'];?>

<?php if ($_smarty_tpl->tpl_vars['cat']->value['count_images'] > 0) {?>
            <span class="badge badge-secondary ml-2" title="<?php echo $_smarty_tpl->tpl_vars['cat']->value['TITLE'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['count_images'];?>
</span>
<?php }
if (!empty($_smarty_tpl->tpl_vars['cat']->value['icon_ts'])) {?>
            <img title="<?php echo $_smarty_tpl->tpl_vars['cat']->value['icon_ts']['TITLE'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;
echo $_smarty_tpl->tpl_vars['themeconf']->value['icon_dir'];?>
/recent<?php if ($_smarty_tpl->tpl_vars['cat']->value['icon_ts']['IS_CHILD_DATE']) {?>_by_child<?php }?>.png" class="icon" alt="(!)">
<?php }?>
        </a>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <div class="dropdown-divider"></div>
        <div class="dropdown-header"><?php echo l10n_dec('%d photo','%d photos',$_smarty_tpl->tpl_vars['block']->value->data['NB_PICTURE']);?>
</div>
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
ob_start();?>$('#categoriesDropdownMenu').on('show.bs.dropdown', function() {$(this).find('a.dropdown-item').each(function() {var level = $(this).data('level');var padding = parseInt($(this).css('padding-left'));if (level > 0) {$(this).css('padding-left', (padding + 10 * level) + 'px')}});});<?php $_block_repeat=false;
echo $_block_plugin1->block_footer_script(array('require'=>'jquery'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
