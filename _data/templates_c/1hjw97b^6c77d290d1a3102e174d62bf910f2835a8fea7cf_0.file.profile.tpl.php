<?php
/* Smarty version 4.3.1, created on 2024-06-22 14:51:43
  from '/var/www/html/piwigo/plugins/prepaid_credits/profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676e4ffaffe28_95967131',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c77d290d1a3102e174d62bf910f2835a8fea7cf' => 
    array (
      0 => '/var/www/html/piwigo/plugins/prepaid_credits/profile.tpl',
      1 => 1719042184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6676e4ffaffe28_95967131 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'common','require'=>'jquery','load'=>'footer','path'=>'admin/themes/default/js/common.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'ppcredits','require'=>'jquery','path'=>'plugins/prepaid_credits/credits.js','load'=>"footer"),$_smarty_tpl ) );?>


<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_html_style'))) {
throw new SmartyException('block tag \'html_style\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('html_style', array());
$_block_repeat=true;
echo $_block_plugin1->block_html_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
.loading {display:none;}
#paypalForm {display:none;}
.ppcreditsBuyCredits legend {text-transform:capitalize;}
<?php $_block_repeat=false;
echo $_block_plugin1->block_html_style(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<fieldset class="ppcreditsBuyCredits">
  <legend><?php echo l10n('credits');?>
</legend>
  <p><?php echo l10n('You have %d credits left',$_smarty_tpl->tpl_vars['CREDITS_LEFT']->value);?>
</p>
<?php if ($_smarty_tpl->tpl_vars['SELL_CREDITS']->value) {?>
  <p><?php echo l10n('Buy');?>
 <input name="nb_credits" type="number" value="<?php echo $_smarty_tpl->tpl_vars['NB_CREDITS']->value;?>
" min="1" max="999" step="1"> <?php echo l10n('credits');?>
 (<span data-unitprice="<?php echo $_smarty_tpl->tpl_vars['PRICE_PER_CREDIT']->value;?>
" id="money_amount"><?php echo $_smarty_tpl->tpl_vars['MONEY_AMOUNT']->value;?>
</span> <?php echo $_smarty_tpl->tpl_vars['CURRENCY']->value;?>
)
    <input type="submit" value="<?php echo l10n('Pay on Paypal.com');?>
" id="paypalButton">
    <img class="loading" src="themes/default/images/ajax-loader-small.gif">
  </p>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="paypalForm">
  <input type="hidden" name="cmd" value="_xclick">
  <input type="hidden" name="custom" value="">
  <input type="hidden" name="business" value="<?php echo $_smarty_tpl->tpl_vars['PAYPAL_ACCOUNT']->value;?>
">
  <input type="hidden" name="item_name" value="Piwigo Prepaid Credits">
  <input type="hidden" name="amount" value="">
  <input type="hidden" name="currency_code" value="<?php echo $_smarty_tpl->tpl_vars['CURRENCY']->value;?>
">
  <input type="hidden" name="return" value="<?php echo $_smarty_tpl->tpl_vars['RETURN_URL']->value;?>
" />
  <input type="hidden" name="cancel_return" value="<?php echo $_smarty_tpl->tpl_vars['RETURN_URL']->value;?>
&amp;cancel=1" />
  <input type="hidden" name="notify_url" value="<?php echo $_smarty_tpl->tpl_vars['IPN_URL']->value;?>
" />
</form>
<?php }?>
</fieldset>


<fieldset class="ppcreditsHistory">
  <legend><?php echo l10n('Credits history');?>
</legend>

  <ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['history_lines']->value, 'line');
$_smarty_tpl->tpl_vars['line']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['line']->value) {
$_smarty_tpl->tpl_vars['line']->do_else = false;
?>
    <li><span title="<?php echo $_smarty_tpl->tpl_vars['line']->value['occured_on_string'];?>
"><?php echo $_smarty_tpl->tpl_vars['line']->value['since'];?>
</span>, <?php echo $_smarty_tpl->tpl_vars['line']->value['details'];?>
</li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
</fieldset><?php }
}
