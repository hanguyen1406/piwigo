<?php
/* Smarty version 4.3.1, created on 2024-07-29 09:44:57
  from '/var/www/html/piwigo/themes/bootstrap_darkroom/template/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66a76499b00897_04743716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c810ae0099b77bff354a4f5fabdcf77ec6d65546' => 
    array (
      0 => '/var/www/html/piwigo/themes/bootstrap_darkroom/template/footer.tpl',
      1 => 1722246211,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_photoswipe_div.tpl' => 1,
    'file:_plugin_fixes_js.tpl' => 1,
  ),
),false)) {
function content_66a76499b00897_04743716 (Smarty_Internal_Template $_smarty_tpl) {
?>        <!-- Start of footer.tpl -->
        <div class="copyright container<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->fluid_width) {?>-fluid<?php }?>">
            <div class="text-center">
<?php if ((isset($_smarty_tpl->tpl_vars['debug']->value['TIME']))) {?>
                <?php echo l10n('Page generated in');?>
 <?php echo $_smarty_tpl->tpl_vars['debug']->value['TIME'];?>
 (<?php echo $_smarty_tpl->tpl_vars['debug']->value['NB_QUERIES'];?>
 <?php echo l10n('SQL queries in');?>
 <?php echo $_smarty_tpl->tpl_vars['debug']->value['SQL_TIME'];?>
) -
<?php }?>
                                <?php echo l10n('Powered by');?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['PHPWG_URL']->value;?>
" class="Piwigo">Piwigo</a>
<?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>

<?php if ((isset($_smarty_tpl->tpl_vars['CONTACT_MAIL']->value))) {?>
                | <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['CONTACT_MAIL']->value;?>
?subject=<?php echo rawurlencode((string)l10n('A comment on your site'));?>
"><?php echo l10n('Contact webmaster');?>
</a>
<?php }
if ((isset($_smarty_tpl->tpl_vars['TOGGLE_MOBILE_THEME_URL']->value))) {?>
                | <?php echo l10n('View in');?>
 : <a href="<?php echo $_smarty_tpl->tpl_vars['TOGGLE_MOBILE_THEME_URL']->value;?>
"><?php echo l10n('Mobile');?>
</a> | <b><?php echo l10n('Desktop');?>
</b>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['footer_elements']->value))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['footer_elements']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
echo $_smarty_tpl->tpl_vars['v']->value;?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
            </div>
        </div>
</div>
<?php if ((isset($_smarty_tpl->tpl_vars['debug']->value['QUERIES_LIST']))) {?>
        <div id="debug">
<?php echo $_smarty_tpl->tpl_vars['debug']->value['QUERIES_LIST'];?>

        </div>
<?php }
if ($_smarty_tpl->tpl_vars['theme_config']->value->photoswipe && (($_smarty_tpl->tpl_vars['BODY_ID']->value == "thePicturePage" && !empty($_smarty_tpl->tpl_vars['thumbnails']->value)) || !empty($_smarty_tpl->tpl_vars['THUMBNAILS']->value))) {
$_smarty_tpl->_subTemplateRender('file:_photoswipe_div.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php $_smarty_tpl->_subTemplateRender('file:_plugin_fixes_js.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if (preg_match('/^material/',$_smarty_tpl->tpl_vars['theme_config']->value->bootstrap_theme)) {
$_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'bootstrap'));
$_block_repeat=true;
echo $_block_plugin1->block_footer_script(array('require'=>'bootstrap'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
 $('body').bootstrapMaterialDesign();
<?php $_block_repeat=false;
echo $_block_plugin1->block_footer_script(array('require'=>'bootstrap'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_combined_scripts'][0], array( array('load'=>'footer'),$_smarty_tpl ) );?>

</body>
</html>
<?php }
}
