<?php
/* Smarty version 4.3.1, created on 2024-08-10 07:59:59
  from '/var/www/html/piwigo/plugins/prepaid_credits/admin_config.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66b71dff888759_14599360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c0e718091a51701e98df23a8f744ceb76451df2' => 
    array (
      0 => '/var/www/html/piwigo/plugins/prepaid_credits/admin_config.tpl',
      1 => 1719042185,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b71dff888759_14599360 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/piwigo/include/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'common','load'=>'footer','path'=>'admin/themes/default/js/common.js'),$_smarty_tpl ) );?>


<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin1->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
jQuery(document).ready(function(){
  jQuery('input.size-enable').change(function(){
    jQuery(this).closest('tr').find('.sizeDetails').css('display', jQuery(this).is(':checked') ? 'inline' : 'none');
  });

  jQuery('input[name=sell_credits]').change(function(){
    jQuery('.sell_credits-enabled').toggle();
  });

});

<?php $_block_repeat=false;
echo $_block_plugin1->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
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
input[type="number"] {
  width:40px;
  text-align:right;
}
.credit-option{
  margin: 25px;
}
#option{
  padding: 10px;
  border-radius: 5px;
}
#option-price{
  font-size: 15px;
  width: auto;
  text-align: right;
  padding: 9px;
}
<?php if (!$_smarty_tpl->tpl_vars['sell_credits']->value) {?>
.sell_credits-enabled {
  display:none;
}
<?php }
$_block_repeat=false;
echo $_block_plugin2->block_html_style(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<h2>Prepaid Credits - <?php echo l10n('Configuration');?>
</h2>

<form method="post" action="" class="properties">
<fieldset>
  <legend><?php echo l10n('General');?>
</legend>
  <ul>
    <li><?php echo l10n('Default cost');?>
 <input type="number" step="1" min="1" max="999" name="photo_cost" value="<?php echo $_smarty_tpl->tpl_vars['photo_cost']->value;?>
"> <?php echo l10n('credit(s) per photo');?>
</li>
    <li>
      <?php echo l10n('Download available for');?>
 <input type="number" step="1" min="1" max="999" name="download_period_length" value="<?php echo $_smarty_tpl->tpl_vars['download_period_length']->value;?>
">
      <select name="download_period_unity" size="1">
        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['download_period_unity_options']->value,'selected'=>$_smarty_tpl->tpl_vars['download_period_unity_options_selected']->value),$_smarty_tpl);?>

      </select>
    </li>
  </ul>
</fieldset>
<fieldset>
  <legend><?php echo l10n('Photo sizes');?>
</legend>
    <table style="margin:0">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sizes']->value, 'd', false, 'type');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>
      <tr>
        <td>
          <label>
            <span class="sizeEnable font-checkbox">
              <span class="icon-check"></span>
              <input type="checkbox" class="size-enable" name="size_<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
_enabled" <?php if (!empty($_smarty_tpl->tpl_vars['d']->value)) {?>checked="checked"<?php }?>>
            </span>
            <?php echo l10n($_smarty_tpl->tpl_vars['type']->value);?>

          </label>
        </td>
        <td>
          <span class="sizeDetails" style="display:<?php if (!empty($_smarty_tpl->tpl_vars['d']->value)) {?>inline<?php } else { ?>none<?php }?>">
            <input type="number" step="1" min="1" max="999" name="size_<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['d']->value;?>
"> <?php echo l10n('times the base cost per photo');?>

          </span>
        </td>
      </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
</fieldset>

<fieldset>
  <legend><?php echo l10n('Selling credits');?>
</legend>
  <ul>
    <li>
      <label>
        <span class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="sell_credits" <?php if ($_smarty_tpl->tpl_vars['sell_credits']->value) {?>checked="checked"<?php }?>>
        </span>
        <?php echo l10n('Users can buy credits');?>

      </label>
    </li>
    <li class="sell_credits-enabled"><?php echo l10n('PayPal account');?>
 <input type="text" name="paypal_account" value="<?php echo $_smarty_tpl->tpl_vars['paypal_account']->value;?>
"></li>
    <li class="sell_credits-enabled">
      <?php echo l10n('Price per credit');?>
 <input type="number" min="0.01" step="0.01" name="price_per_credit" value="<?php echo $_smarty_tpl->tpl_vars['price_per_credit']->value;?>
">
      <select name="currency"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['currency_options']->value,'selected'=>$_smarty_tpl->tpl_vars['currency_options_selected']->value),$_smarty_tpl);?>
</select>
    </li>
  </ul>
</fieldset>
<div class="credit-option">
  <legend>Credit Option</legend>
  <div>
    <select id="option" name="option">
      <option>---</option>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['credit_options']->value, 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['method'];?>
,<?php echo $_smarty_tpl->tpl_vars['option']->value['price'];?>
" ><?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
</option>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <input type="number" id="option-price" name="price"> credit(s)
    <?php echo '<script'; ?>
>
      document.getElementById("option").addEventListener("change", function() {
        var a = this.value;
        document.getElementById("option-price").value = a.split(",")[1];
      });
    <?php echo '</script'; ?>
>
  </div>
</div>
<p class="formButtons"><input type="submit" name="save_config" value="<?php echo l10n('Save Settings');?>
"></p><?php }
}
