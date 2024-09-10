<?php
/* Smarty version 4.3.1, created on 2024-09-02 20:57:21
  from '/var/www/html/piwigo/plugins/prepaid_credits/element_set_global_action.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66d5c4412382e4_85713277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0576c43f252dc7334891edceea62c5876f577b51' => 
    array (
      0 => '/var/www/html/piwigo/plugins/prepaid_credits/element_set_global_action.tpl',
      1 => 1719042185,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d5c4412382e4_85713277 (Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'block_html_style'))) {
throw new SmartyException('block tag \'html_style\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('html_style', array());
$_block_repeat=true;
echo $_block_plugin3->block_html_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
#specificPrice {display:none;}
<?php $_block_repeat=false;
echo $_block_plugin3->block_html_style(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin4->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
jQuery(document).ready(function() {
  function checkPriceOptions() {
    if (jQuery("input[name=price]:checked").val() == "specific") {
      jQuery("#specificPrice").show();
    }
    else {
      jQuery("#specificPrice").hide();
    }
  }

  checkPriceOptions();

  jQuery("input[name=price]").change(function() {
    checkPriceOptions();
  });
});
<?php $_block_repeat=false;
echo $_block_plugin4->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<div id="ppcredits">
  <label><input type="radio" name="price" value="default" checked="checked"> <?php echo l10n('follow default price (%s credits currently)',$_smarty_tpl->tpl_vars['PPCREDITS_DEFAULT_PRICE']->value);?>
</label>
  <br><label><input type="radio" name="price" value="specific"> <?php echo l10n('specific fixed price');?>
</label>
  <span id="specificPrice"><input name="nb_credits" type="number" value="<?php echo $_smarty_tpl->tpl_vars['PPCREDITS_DEFAULT_PRICE']->value;?>
" min="1" max="999"> <?php echo l10n('credits');?>
</span>
</div><?php }
}
