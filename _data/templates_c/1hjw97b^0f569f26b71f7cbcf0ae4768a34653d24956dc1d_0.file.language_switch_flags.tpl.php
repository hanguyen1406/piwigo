<?php
/* Smarty version 4.3.1, created on 2024-06-22 10:14:16
  from '/var/www/html/piwigo/themes/bootstrap_darkroom/template/language_switch_flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676a3f8bcac05_96678187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f569f26b71f7cbcf0ae4768a34653d24956dc1d' => 
    array (
      0 => '/var/www/html/piwigo/themes/bootstrap_darkroom/template/language_switch_flags.tpl',
      1 => 1713951806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6676a3f8bcac05_96678187 (Smarty_Internal_Template $_smarty_tpl) {
?><li id="languageSwitch" class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
        <span class="pwg-icon langflag-<?php echo $_smarty_tpl->tpl_vars['lang_switch']->value['Active']['code'];?>
">&nbsp;</span><span class="pwg-button-text"><?php echo l10n('Language');?>
</span>
    </a>
    <div class="dropdown-menu dropdown-menu-right" role="menu">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lang_switch']->value['flags'], 'flag', false, NULL, 'f', array (
));
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
        <a class="dropdown-item<?php if ($_smarty_tpl->tpl_vars['lang_switch']->value['Active']['code'] == $_smarty_tpl->tpl_vars['flag']->value['code']) {?> active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['flag']->value['url'];?>
">
<?php if ($_smarty_tpl->tpl_vars['lang_info']->value['direction'] == "ltr") {?>
                <span class="pwg-icon langflag-<?php echo $_smarty_tpl->tpl_vars['flag']->value['code'];?>
">&nbsp;</span><span class="langflag-text-ltf"><?php echo $_smarty_tpl->tpl_vars['flag']->value['title'];?>
</span>
<?php } else { ?>
                <span class="langflag-text-rtf"><?php echo $_smarty_tpl->tpl_vars['flag']->value['title'];?>
</span><span class="pwg-icon langflag-<?php echo $_smarty_tpl->tpl_vars['flag']->value['code'];?>
">&nbsp;</span>
<?php }?>
        </a>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</li>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>($_smarty_tpl->tpl_vars['LANGUAGE_SWITCH_PATH']->value).("language_switch.css")),$_smarty_tpl ) );?>


<?php $_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery'));
$_block_repeat=true;
echo $_block_plugin7->block_footer_script(array('require'=>'jquery'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>$(document).ready(function() {$('#languageSwitch').appendTo('#navbar-menubar>ul.navbar-nav');});<?php $_block_repeat=false;
echo $_block_plugin7->block_footer_script(array('require'=>'jquery'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
