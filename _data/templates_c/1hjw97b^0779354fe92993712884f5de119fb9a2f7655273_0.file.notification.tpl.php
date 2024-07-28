<?php
/* Smarty version 4.3.1, created on 2024-06-22 14:53:24
  from '/var/www/html/piwigo/themes/bootstrap_darkroom/template/notification.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676e564e35968_49792889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0779354fe92993712884f5de119fb9a2f7655273' => 
    array (
      0 => '/var/www/html/piwigo/themes/bootstrap_darkroom/template/notification.tpl',
      1 => 1713951806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:infos_errors.tpl' => 1,
  ),
),false)) {
function content_6676e564e35968_49792889 (Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['html_head'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['html_head'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_html_head'))) {
throw new SmartyException('block tag \'html_head\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('html_head', array());
$_block_repeat=true;
echo $_block_plugin1->block_html_head(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?> 
<link rel="alternate" type="application/rss+xml" title="<?php echo l10n('Photos only RSS feed');?>
" href="<?php echo $_smarty_tpl->tpl_vars['U_FEED_IMAGE_ONLY']->value;?>
"> 
<link rel="alternate" type="application/rss+xml" title="<?php echo l10n('Complete RSS feed (photos, comments)');?>
" href="<?php echo $_smarty_tpl->tpl_vars['U_FEED']->value;?>
"> 
<?php $_block_repeat=false;
echo $_block_plugin1->block_html_head(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<nav class="navbar navbar-contextual navbar-expand-lg <?php echo $_smarty_tpl->tpl_vars['theme_config']->value->navbar_contextual_style;?>
 <?php echo $_smarty_tpl->tpl_vars['theme_config']->value->navbar_contextual_bg;?>
 sticky-top mb-5">
    <div class="container<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->fluid_width) {?>-fluid<?php }?>">
        <div class="navbar-brand mr-auto"><a href="<?php echo $_smarty_tpl->tpl_vars['U_HOME']->value;?>
"><?php echo l10n('Home');?>
</a><?php echo $_smarty_tpl->tpl_vars['LEVEL_SEPARATOR']->value;?>
<a href><?php echo l10n('Notification');?>
</a></div>
    </div>
</nav>

<?php $_smarty_tpl->_subTemplateRender('file:infos_errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->fluid_width) {?>-fluid<?php }?>">
    <div class="card">
        <h4 class="card-header">
            <?php echo l10n('Notification');?>

        </h4>
        <div class="card-body notification">
            <p><?php echo l10n('The RSS notification feed provides notification on news from this website : new photos, updated albums, new comments. Use a RSS feed reader.');?>
</p>
            <p><a href="<?php echo $_smarty_tpl->tpl_vars['U_FEED_IMAGE_ONLY']->value;?>
"><?php echo l10n('Photos only RSS feed');?>
</a></p>
            <p><a href="<?php echo $_smarty_tpl->tpl_vars['U_FEED']->value;?>
"><?php echo l10n('Complete RSS feed (photos, comments)');?>
</a></p>
        </div>
    </div>
</div>
<?php }
}
