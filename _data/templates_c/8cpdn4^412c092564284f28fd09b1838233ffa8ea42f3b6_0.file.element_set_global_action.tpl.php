<?php
/* Smarty version 4.3.1, created on 2024-09-02 20:57:21
  from '/var/www/html/piwigo/plugins/PayPalShoppingCart/element_set_global_action.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66d5c44122c173_20692488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '412c092564284f28fd09b1838233ffa8ea42f3b6' => 
    array (
      0 => '/var/www/html/piwigo/plugins/PayPalShoppingCart/element_set_global_action.tpl',
      1 => 1719042187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d5c44122c173_20692488 (Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_html_style'))) {
throw new SmartyException('block tag \'html_style\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('html_style', array());
$_block_repeat=true;
echo $_block_plugin1->block_html_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
#newPrice {display:none;}
.permitActionItem{
  width: 100%;
}
.radio{
  width: fit-content;
}
#ppcredits{
  display: flex;
}
span{
  margin-right: 10px;
  margin-left: 10px;
}
.p{
  display: flex;
  justify-content: space-between;
}
.p input{
  margin: 2px;
}
<?php $_block_repeat=false;
echo $_block_plugin1->block_html_style(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin2->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
jQuery(document).ready(function() {
  function checkPriceOptions() {
    if (jQuery("input[name=fs-price]:checked").val() == "new") {
      jQuery("#newPrice").show();
    }
    else {
      jQuery("#newPrice").hide();
    }
  }

  checkPriceOptions();

  jQuery("input[name=fs-price]").change(function() {
    checkPriceOptions();
  });
});
<?php $_block_repeat=false;
echo $_block_plugin2->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<div id="ppcredits">
  <span>
    <div class="radio">
      <input id="radio-1" name="radio" value="apply" type="radio" checked>
      <label for="radio-1" class="radio-label">Áp dụng</label>
    </div>
    <div class="radio">
      <input id="radio-2" name="radio" value="remove" type="radio">
      <label  for="radio-2" class="radio-label">Gỡ bỏ</label>
    </div>
  </span>
  <span>
    <div class="radio">
      <input id="radio-3" name="fs-price" value="default" type="radio" checked>
      <label for="radio-3" class="price-label">Follow default price (swap: <?php echo $_smarty_tpl->tpl_vars['swap']->value;?>
, download: <?php echo $_smarty_tpl->tpl_vars['download']->value;?>
)</label>
      <br>
      <input id="radio-4" name="fs-price" value="new" type="radio">
      <label  for="radio-4" class="price-label">Set new price</label>
    </div>
    <div class="radio">
    </div>
    <div id="newPrice">
      <div class="p">
        Swap price <input type="number" id="swap-price" name="swap-price">
      </div>
      <div class="p">
        Download price <input type="number" id="swap-dl-price" name="swap-dl-price">
      </div>
    </div>
  </span>
</div><?php }
}
