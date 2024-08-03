<?php
/* Smarty version 4.3.1, created on 2024-07-29 09:35:48
  from '/var/www/html/piwigo/themes/bootstrap_darkroom/template/tags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66a76274d20f59_84393768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd52284b6aa1a74bbccbe3ac570ae30700f12b11b' => 
    array (
      0 => '/var/www/html/piwigo/themes/bootstrap_darkroom/template/tags.tpl',
      1 => 1713951806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:infos_errors.tpl' => 1,
  ),
),false)) {
function content_66a76274d20f59_84393768 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-contextual navbar-expand-lg <?php echo $_smarty_tpl->tpl_vars['theme_config']->value->navbar_contextual_style;?>
 <?php echo $_smarty_tpl->tpl_vars['theme_config']->value->navbar_contextual_bg;?>
 sticky-top mb-5">
    <div class="container<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->fluid_width) {?>-fluid<?php }?>">
        <div class="navbar-brand mr-auto"><a href="<?php echo $_smarty_tpl->tpl_vars['U_HOME']->value;?>
"><?php echo l10n('Home');?>
</a><?php echo $_smarty_tpl->tpl_vars['LEVEL_SEPARATOR']->value;?>
<a href><?php echo l10n('Tags');?>
</a></div>
        <ul class="navbar-nav justify-content-end">
<?php if ($_smarty_tpl->tpl_vars['display_mode']->value != 'cloud') {?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['U_CLOUD']->value;?>
" title="<?php echo l10n('show tag cloud');?>
">
                    <i class="fas fa-cloud fa-fw" aria-hidden="true"></i><span class="d-lg-none"> <?php echo l10n('show tag cloud');?>
</span>
                </a>
            </li>
<?php }
if ($_smarty_tpl->tpl_vars['display_mode']->value != 'letters') {?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['U_LETTERS']->value;?>
" title="<?php echo l10n('group by letters');?>
" rel="nofollow">
                    <i class="fas fa-sort-alpha-down fa-fw" aria-hidden="true"></i><span class="d-lg-none"> <?php echo l10n('group by letters');?>
</span>
                </a>
            </li>
<?php }
if ((isset($_smarty_tpl->tpl_vars['loaded_plugins']->value['tag_groups'])) && $_smarty_tpl->tpl_vars['display_mode']->value != 'groups') {?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['U_TAG_GROUPS']->value;?>
" title="<?php echo l10n('show tag groups');?>
" rel="nofollow">
                    <i class="fas fa-tags fa-fw" aria-hidden="true"></i><span class="d-lg-none"> <?php echo l10n('show tag groups');?>
</span>
                </a>
            </li>
<?php }
if (!empty($_smarty_tpl->tpl_vars['PLUGIN_INDEX_ACTIONS']->value)) {
echo $_smarty_tpl->tpl_vars['PLUGIN_INDEX_ACTIONS']->value;
}?>
        </ul>
    </div>
</nav>

<?php $_smarty_tpl->_subTemplateRender('file:infos_errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->fluid_width) {?>-fluid<?php }?>">

<?php if ($_smarty_tpl->tpl_vars['display_mode']->value == 'cloud' && (isset($_smarty_tpl->tpl_vars['tags']->value))) {
if ($_smarty_tpl->tpl_vars['theme_config']->value->tag_cloud_type == 'basic') {?>
    <div id="tagCloud">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tags']->value, 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?>
        <span><a href="<?php echo $_smarty_tpl->tpl_vars['tag']->value['URL'];?>
" class="tagLevel<?php echo $_smarty_tpl->tpl_vars['tag']->value['level'];?>
" title="<?php echo l10n_dec('%d photo','%d photos',$_smarty_tpl->tpl_vars['tag']->value['counter']);?>
"><?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
</a></span>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php } else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.awesomeCloud','load'=>'footer','path'=>"themes/bootstrap_darkroom/js/jquery.awesomeCloud.js"),$_smarty_tpl ) );?>

<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery.awesomeCloud'));
$_block_repeat=true;
echo $_block_plugin1->block_footer_script(array('require'=>'jquery.awesomeCloud'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>$(document).ready(function(){$("#tagCloudCanvas").awesomeCloud({"size" : {"grid": 12,"factor": 0,"normalize": false},"options": {"color": "gradient","rotationRatio": 0.2,},"color": {"start": $('#tagCloudGradientStart').css('color'),"end": $('#tagCloudGradientEnd').css('color')},"font": "'Helvetica Neue',Helvetica,Arial,sans-serif","shape": "circle"});});<?php $_block_repeat=false;
echo $_block_plugin1->block_footer_script(array('require'=>'jquery.awesomeCloud'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <div id="tagCloudCanvas">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tags']->value, 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?>
        <span data-weight="<?php echo $_smarty_tpl->tpl_vars['tag']->value['counter'];?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['tag']->value['URL'];?>
"><?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
</a></span>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    <div id="tagCloudGradientStart"></div>
    <div id="tagCloudGradientEnd"></div>
<?php }
}?>

<?php if ($_smarty_tpl->tpl_vars['display_mode']->value == 'letters' && (isset($_smarty_tpl->tpl_vars['letters']->value))) {?>
    <div id="tagLetters">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['letters']->value, 'letter');
$_smarty_tpl->tpl_vars['letter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['letter']->value) {
$_smarty_tpl->tpl_vars['letter']->do_else = false;
?>
        <div class="card w-100 mb-3">
            <div class="card-header"><?php echo $_smarty_tpl->tpl_vars['letter']->value['TITLE'];?>
</div>
            <div class="list-group list-group-flush">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['letter']->value['tags'], 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['tag']->value['URL'];?>
" class="list-group-item list-group-item-action" title="<?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
<span class="badge badge-secondary ml-2"><?php echo l10n_dec('%d photo','%d photos',$_smarty_tpl->tpl_vars['tag']->value['counter']);?>
</span></a>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }?>

</div> <!-- content -->
<?php }
}
