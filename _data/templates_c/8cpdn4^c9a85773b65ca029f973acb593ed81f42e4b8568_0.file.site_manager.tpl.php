<?php
/* Smarty version 4.3.1, created on 2024-06-22 14:58:02
  from '/var/www/html/piwigo/admin/themes/default/template/site_manager.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676e67a56af52_61742292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9a85773b65ca029f973acb593ed81f42e4b8568' => 
    array (
      0 => '/var/www/html/piwigo/admin/themes/default/template/site_manager.tpl',
      1 => 1702327276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6676e67a56af52_61742292 (Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin1->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
jQuery(document).ready(function(){
  jQuery("#showCreateSite a").click(function(){
    jQuery("#showCreateSite").hide();
    jQuery("#createSite").show();
  });
});
<?php $_block_repeat=false;
echo $_block_plugin1->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'common','load'=>'footer','path'=>'admin/themes/default/js/common.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.confirm','load'=>'footer','require'=>'jquery','path'=>'themes/default/js/plugins/jquery-confirm.min.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/default/js/plugins/jquery-confirm.min.css"),$_smarty_tpl ) );?>

<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin2->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
const title_msg = '<?php echo strtr((string)l10n('Are you sure you want to delete this site?'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
const confirm_msg = '<?php echo l10n("Yes, I am sure");?>
';
const cancel_msg = "<?php echo l10n("No, I have changed my mind");?>
";
$(".delete-site-button").each(function() {
  $(this).pwg_jconfirm_follow_href({
    alert_title: title_msg,
    alert_confirm: confirm_msg,
    alert_cancel: cancel_msg
  });
});
<?php $_block_repeat=false;
echo $_block_plugin2->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php if (!empty($_smarty_tpl->tpl_vars['remote_output']->value)) {?>
<div class="remoteOutput">
  <ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['remote_output']->value, 'remote_line');
$_smarty_tpl->tpl_vars['remote_line']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['remote_line']->value) {
$_smarty_tpl->tpl_vars['remote_line']->do_else = false;
?>
    <li class="<?php echo $_smarty_tpl->tpl_vars['remote_line']->value['CLASS'];?>
"><?php echo $_smarty_tpl->tpl_vars['remote_line']->value['CONTENT'];?>
</li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
</div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['sites']->value)) {?>
<table class="table2">
	<tr class="throw">
		<td><?php echo l10n('Directory');?>
</td>
		<td><?php echo l10n('Actions');?>
</td>
	</tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sites']->value, 'site', false, NULL, 'site', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['site']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['site']->value) {
$_smarty_tpl->tpl_vars['site']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_site']->value['index']++;
?>
  <tr style="text-align:left" class="<?php if ((1 & (isset($_smarty_tpl->tpl_vars['__smarty_foreach_site']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_site']->value['index'] : null))) {?>row1<?php } else { ?>row2<?php }?>"><td>
    <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value['NAME'];?>
"><?php echo $_smarty_tpl->tpl_vars['site']->value['NAME'];?>
</a><br>(<?php echo $_smarty_tpl->tpl_vars['site']->value['TYPE'];?>
, <?php echo $_smarty_tpl->tpl_vars['site']->value['CATEGORIES'];?>
 <?php echo l10n('Albums');?>
, <?php echo $_smarty_tpl->tpl_vars['pwg']->value->l10n_dec('%d photo','%d photos',$_smarty_tpl->tpl_vars['site']->value['IMAGES']);?>
)
  </td><td>
    [<a href="<?php echo $_smarty_tpl->tpl_vars['site']->value['U_SYNCHRONIZE'];?>
" title="<?php echo l10n('update the database from files');?>
"><?php echo l10n('Synchronize');?>
</a>]
<?php if ((isset($_smarty_tpl->tpl_vars['site']->value['U_DELETE']))) {?>
      [<a class="delete-site-button" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['U_DELETE'];?>
" title="<?php echo l10n('delete this site and all its attached elements');?>
"><?php echo l10n('delete');?>
</a>]
<?php }
if (!empty($_smarty_tpl->tpl_vars['site']->value['plugin_links'])) {?>
        <br>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['site']->value['plugin_links'], 'plugin_link');
$_smarty_tpl->tpl_vars['plugin_link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plugin_link']->value) {
$_smarty_tpl->tpl_vars['plugin_link']->do_else = false;
?>
        [<a href="<?php echo $_smarty_tpl->tpl_vars['plugin_link']->value['U_HREF'];?>
" title='<?php echo $_smarty_tpl->tpl_vars['plugin_link']->value['U_HINT'];?>
'><?php echo $_smarty_tpl->tpl_vars['plugin_link']->value['U_CAPTION'];?>
</a>]
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
  </td></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<?php }?>

<p id="showCreateSite" style="text-align:left;margin-left:1em;">
  <a href="#"><?php echo l10n('create a new site');?>
</a>
</p>

<form action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
" method="post" id="createSite" style="display:none">
  <input type="hidden" name="pwg_token" value="<?php echo $_smarty_tpl->tpl_vars['PWG_TOKEN']->value;?>
">
  <fieldset>
    <legend><?php echo l10n('create a new site');?>
</legend>

  <p style="margin-top:0;"><strong><?php echo l10n('Directory');?>
</strong>
    <br><input type="text" name="galleries_url" id="galleries_url">
  </p>

  <p class="actionButtons">
    <input class="submit" type="submit" name="submit" value="<?php echo l10n('Submit');?>
">
  </p>
</form>
<?php }
}
