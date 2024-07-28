<?php
/* Smarty version 4.3.1, created on 2024-06-22 14:54:54
  from '/var/www/html/piwigo/admin/themes/default/template/stats.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676e5bee33d07_78617448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5615818f1676bb786cdd60e4acbebe7e8a254501' => 
    array (
      0 => '/var/www/html/piwigo/admin/themes/default/template/stats.tpl',
      1 => 1702327276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6676e5bee33d07_78617448 (Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin1->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
var str_number_page_visited = "<?php echo l10n('Page Visited');?>
";
var str_number_page_visited_with_year = "<?php echo l10n('Page Visited in %s');?>
";
var str_tooltip_format = {
  "years":"YYYY",
  "months":"MMMM YYYY",
  "days":"DD MMM",
  "hours":"LT"
};
var str_unit_format = {
  "day":"dddd",
  "month":"MMM YYYY"
}
var str_avg = "<?php echo l10n('Average last 12 months');?>
";
var str_months_tosplit = "<?php echo $_smarty_tpl->tpl_vars['month_labels']->value;?>
";
var str_months = str_months_tosplit.split('~');
moment.locale("<?php echo $_smarty_tpl->tpl_vars['langCode']->value;?>
");
<?php $_block_repeat=false;
echo $_block_plugin1->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'chart.js','load'=>'footer','path'=>'themes/default/js/plugins/Chart.min.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/default/js/plugins/Chart.min.css"),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'moment-with-locales.js','path'=>'themes/default/js/plugins/moment-with-locales.min.js'),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'stats','load'=>'footer','path'=>'admin/themes/default/js/stats.js'),$_smarty_tpl ) );?>


<div class="stat-compare-mode">
  <label class="switch">
      <input type="checkbox" id="toggleCompareMode">
      <span class="slider round" checked="false"></span>
  </label>
  <?php echo l10n('Compare mode');?>

</div>

<div id="data" 
  data-hours='<?php echo json_encode($_smarty_tpl->tpl_vars['lastHours']->value);?>
' 
  data-days='<?php echo json_encode($_smarty_tpl->tpl_vars['lastDays']->value);?>
' 
  data-months='<?php echo json_encode($_smarty_tpl->tpl_vars['lastMonths']->value);?>
' 
  data-years='<?php echo json_encode($_smarty_tpl->tpl_vars['lastYears']->value);?>
'
  data-compare-years='<?php echo json_encode($_smarty_tpl->tpl_vars['compareYears']->value);?>
'
  data-month-stats='<?php echo json_encode($_smarty_tpl->tpl_vars['monthStats']->value);?>
' 
  ></div>
<div class="stat-legend-container">
  <div class="stat-data-selector">
    <input type="radio" id="hours-selector" name="stat-data-type">
    <label for="hours-selector" data-value="hours"><?php echo l10n("Hour");?>
</label>
    <input type="radio" id="days-selector" name="stat-data-type" checked>
    <label for="days-selector" data-value="days"><?php echo l10n("Day");?>
</label>
    <input type="radio" id="months-selector" name="stat-data-type">
    <label for="months-selector" data-value="months"><?php echo l10n("Month");?>
</label>
    <input type="radio" id="years-selector" name="stat-data-type">
    <label for="years-selector" data-value="years"><?php echo l10n("Year");?>
</label>
  </div>
</div>

<div class="stat-graph-container">
  <canvas id="stat-graph" width="400" height="150" role="img"><p>Your browser does not support the canvas element.</p></canvas>
</div>
<?php }
}
