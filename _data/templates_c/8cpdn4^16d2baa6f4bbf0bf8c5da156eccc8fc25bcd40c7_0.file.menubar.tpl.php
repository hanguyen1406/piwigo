<?php
/* Smarty version 4.3.1, created on 2024-06-22 14:58:08
  from '/var/www/html/piwigo/admin/themes/default/template/menubar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676e6809aaf98_68269191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16d2baa6f4bbf0bf8c5da156eccc8fc25bcd40c7' => 
    array (
      0 => '/var/www/html/piwigo/admin/themes/default/template/menubar.tpl',
      1 => 1702327276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6676e6809aaf98_68269191 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/piwigo/include/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),));
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'common','load'=>'footer','path'=>'admin/themes/default/js/common.js'),$_smarty_tpl ) );?>


<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery.ui.sortable'));
$_block_repeat=true;
echo $_block_plugin1->block_footer_script(array('require'=>'jquery.ui.sortable'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
jQuery(document).ready(function(){
	jQuery(".menuPos").hide();
	jQuery(".drag_button").show();
	jQuery(".menuLi").css("cursor","move");
	jQuery(".menuUl").sortable({
		axis: "y",
		opacity: 0.8
	});
	jQuery("input[name^='hide_']").click(function() {
		men = this.name.split('hide_');
		if (this.checked) {
			jQuery("#menu_"+men[1]).addClass('menuLi_hidden');
		} else {
			jQuery("#menu_"+men[1]).removeClass('menuLi_hidden');
		}
	});
	jQuery("#menuOrdering").submit(function(){
		ar = jQuery('.menuUl').sortable('toArray');
		for(i=0;i<ar.length;i++) {
			men = ar[i].split('menu_');
			document.getElementsByName('pos_' + men[1])[0].value = i+1;
		}
	});
});
<?php $_block_repeat=false;
echo $_block_plugin1->block_footer_script(array('require'=>'jquery.ui.sortable'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'block_html_style'))) {
throw new SmartyException('block tag \'html_style\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('html_style', array());
$_block_repeat=true;
echo $_block_plugin2->block_html_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
.font-checkbox i {
  margin-left:5px;
}
<?php $_block_repeat=false;
echo $_block_plugin2->block_html_style(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<form id="menuOrdering" action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
" method="post">
  <ul class="menuUl">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blocks']->value, 'block', false, NULL, 'block_loop', array (
));
$_smarty_tpl->tpl_vars['block']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->do_else = false;
?>
    <li class="menuLi <?php if ($_smarty_tpl->tpl_vars['block']->value['pos'] < 0) {?>menuLi_hidden<?php }?>" id="menu_<?php echo $_smarty_tpl->tpl_vars['block']->value['reg']->get_id();?>
">
      <p>
        <span>
          <label class="font-checkbox"><strong><?php echo l10n('Hide');?>
</strong><i class="icon-check"></i><input type="checkbox" name="hide_<?php echo $_smarty_tpl->tpl_vars['block']->value['reg']->get_id();?>
" <?php if ($_smarty_tpl->tpl_vars['block']->value['pos'] < 0) {?>checked="checked"<?php }?>></label>
        </span>

        <img src="<?php echo $_smarty_tpl->tpl_vars['themeconf']->value['admin_icon_dir'];?>
/cat_move.png" class="drag_button" style="display:none;" alt="<?php echo l10n('Drag to re-order');?>
" title="<?php echo l10n('Drag to re-order');?>
">
        <strong><?php echo l10n($_smarty_tpl->tpl_vars['block']->value['reg']->get_name());?>
</strong> (<?php echo $_smarty_tpl->tpl_vars['block']->value['reg']->get_id();?>
)
      </p>

<?php if ($_smarty_tpl->tpl_vars['block']->value['reg']->get_owner() != 'piwigo') {?>
      <p class="menuAuthor">
        <?php echo l10n('Author');?>
: <i><?php echo $_smarty_tpl->tpl_vars['block']->value['reg']->get_owner();?>
</i>
      </p>
<?php }?>
      <p class="menuPos">
        <label>
          <?php echo l10n('Position');?>
 :
          <input type="text" size="4" name="pos_<?php echo $_smarty_tpl->tpl_vars['block']->value['reg']->get_id();?>
" maxlength="4" value="<?php echo smarty_function_math(array('equation'=>"abs(pos)",'pos'=>$_smarty_tpl->tpl_vars['block']->value['pos']),$_smarty_tpl);?>
">
        </label>
      </p>
    </li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
  <p class="menuSubmit">
    <button name="submit" type="submit" class="buttonLike" <?php if ($_smarty_tpl->tpl_vars['isWebmaster']->value != 1) {?>disabled<?php }?>>
      <i class="icon-floppy"></i> <?php echo l10n('Save Settings');?>

    </button>
  </p>

</form>
<?php }
}
