<?php
/* Smarty version 4.3.1, created on 2024-06-22 14:53:10
  from '/var/www/html/piwigo/themes/bootstrap_darkroom/template/about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676e55689a7c7_06030952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9404b3ce65a9f5ab11426fa9020b9f346fa24377' => 
    array (
      0 => '/var/www/html/piwigo/themes/bootstrap_darkroom/template/about.tpl',
      1 => 1713951806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:infos_errors.tpl' => 1,
  ),
),false)) {
function content_6676e55689a7c7_06030952 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-contextual <?php echo $_smarty_tpl->tpl_vars['theme_config']->value->navbar_contextual_style;?>
 <?php echo $_smarty_tpl->tpl_vars['theme_config']->value->navbar_contextual_bg;?>
 sticky-top mb-5">
    <div class="container<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->fluid_width) {?>-fluid<?php }?>">
        <div class="navbar-brand mr-auto"><a href="<?php echo $_smarty_tpl->tpl_vars['U_HOME']->value;?>
"><?php echo l10n('Home');?>
</a><?php echo $_smarty_tpl->tpl_vars['LEVEL_SEPARATOR']->value;?>
<a href><?php echo l10n('About');?>
</a></div>
        <ul class="navbar-nav justify-content-end">
             <?php if (!empty($_smarty_tpl->tpl_vars['PLUGIN_INDEX_ACTIONS']->value)) {
echo $_smarty_tpl->tpl_vars['PLUGIN_INDEX_ACTIONS']->value;
}?>
        </ul>
    </div>
</nav>

<?php $_smarty_tpl->_subTemplateRender('file:infos_errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->fluid_width) {?>-fluid<?php }?>">
    <div class="card">
        <h4 class="card-header"><?php echo l10n('About');?>
</h4>
        <div class="card-body">
          <?php echo $_smarty_tpl->tpl_vars['ABOUT_MESSAGE']->value;?>

<?php if ((isset($_smarty_tpl->tpl_vars['THEME_ABOUT']->value))) {?>
          <?php echo $_smarty_tpl->tpl_vars['THEME_ABOUT']->value;?>

<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['about_msgs']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['about_msgs']->value, 'elt');
$_smarty_tpl->tpl_vars['elt']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['elt']->value) {
$_smarty_tpl->tpl_vars['elt']->do_else = false;
echo $_smarty_tpl->tpl_vars['elt']->value;?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
          <div><a href="https://github.com/tkuther/piwigo-bootstrap-darkroom">Bootstrap Darkroom Theme</a> by Thomas Kuther.</div>
          <div><a href="https://thenounproject.com/DmitryBaranovskiy/collection/photo/">Photography Icons</a> by <a href="https://thenounproject.com/DmitryBaranovskiy/">Dmitry Baranovskiy</a>, licensed under <a href="https://creativecommons.org/licenses/by/3.0/us/">Creative Commons 3.0</a>.
        </div>
    </div>
</div>
<?php }
}
