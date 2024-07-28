<?php
/* Smarty version 4.3.1, created on 2024-06-22 10:26:40
  from '/var/www/html/piwigo/admin/themes/default/template/intro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676a6e0f24f19_22256924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5575cef86b5d1e649a8e7e2c846c6cd9eac86819' => 
    array (
      0 => '/var/www/html/piwigo/admin/themes/default/template/intro.tpl',
      1 => 1702327276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/colorbox.inc.tpl' => 1,
  ),
),false)) {
function content_6676a6e0f24f19_22256924 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/piwigo/include/smarty/libs/plugins/modifier.number_format.php','function'=>'smarty_modifier_number_format',),));
$_smarty_tpl->_subTemplateRender('file:include/colorbox.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.cluetip','load'=>'async','require'=>'jquery','path'=>'themes/default/js/plugins/jquery.cluetip.js'),$_smarty_tpl ) );?>


<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery.cluetip'));
$_block_repeat=true;
echo $_block_plugin2->block_footer_script(array('require'=>'jquery.cluetip'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
var piwigo_need_update_msg = '<a href="admin.php?page=updates"><?php echo strtr((string)l10n('A new version of Piwigo is available.'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
 <i class="icon-right"></i></a>';
var ext_need_update_msg = '<a href="admin.php?page=updates&amp;tab=ext"><?php echo strtr((string)l10n('Some upgrades are available for extensions.'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
 <i class="icon-right"></i></a>';
const str_gb_used = "<?php echo l10n('%s GB used');?>
";
const str_mb_used = "<?php echo l10n('%s MB used');?>
";
const str_gb = "<?php echo l10n('%sGB');?>
".replace(' ', '&nbsp;');
const str_mb = "<?php echo l10n('%sMB');?>
".replace(' ', '&nbsp;');
const storage_total = <?php echo $_smarty_tpl->tpl_vars['STORAGE_TOTAL']->value;?>
;
const storage_details = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['STORAGE_CHART_DATA']->value ));?>
;
const translate_files = "<?php echo strtr((string)l10n('%d files'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
";
let translate_type = {};

jQuery().ready(function(){
	jQuery('.cluetip').cluetip({
		width: 300,
		splitTitle: '|',
		positionBy: 'bottomTop'
	});

<?php if ($_smarty_tpl->tpl_vars['CHECK_FOR_UPDATES']->value) {?>
  jQuery.ajax({
    type: 'GET',
    url: 'ws.php',
    dataType: 'json',
    data: { method: 'pwg.extensions.checkUpdates', format: 'json' },
    timeout: 5000,
    success: function (data) {
      if (data['stat'] != 'ok')
        return;
      piwigo_update = data['result']['piwigo_need_update'];
      ext_update = data['result']['ext_need_update']
      if ((piwigo_update || ext_update) && !jQuery(".warnings").is('div'))
        jQuery(".eiw").prepend('<div class="warnings"><i class="eiw-icon icon-attention"></i><ul></ul></div>');
      if (piwigo_update)
        jQuery(".warnings ul").append('<li>'+piwigo_need_update_msg+'</li>');
      if (ext_update)
        jQuery(".warnings ul").append('<li>'+ext_need_update_msg+'</li>');
    }
  });
<?php }?>


  jQuery('.newsletter-subscription a').click(function() {
    jQuery('.newsletter-subscription').hide();

    jQuery.ajax({
      type: 'GET',
      url: 'admin.php?action=hide_newsletter_subscription'
    });

    if (jQuery(this).hasClass('newsletter-hide')) {
      return false;
    }
  });
  let size_info = storage_total > 1000000 ? str_gb_used : str_mb_used;
  let size_nb = storage_total > 1000000 ? (storage_total / 1000000).toFixed(2) : (storage_total / 1000).toFixed(0);
  $(".chart-title-infos").html(size_info.replace("%s", size_nb));
});

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['STORAGE_CHART_DATA']->value, 'details', false, 'type_to_translate');
$_smarty_tpl->tpl_vars['details']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type_to_translate']->value => $_smarty_tpl->tpl_vars['details']->value) {
$_smarty_tpl->tpl_vars['details']->do_else = false;
?>
translate_type['<?php echo $_smarty_tpl->tpl_vars['type_to_translate']->value;?>
'] = "<?php echo l10n($_smarty_tpl->tpl_vars['type_to_translate']->value);?>
";
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

Object.entries(storage_details).forEach(([type, infos]) => {
  // Determine if we use MB or GB and show it correctly 
  let size = infos.total.filesize;
  let str_size_type_string = size > 1000000 ? str_gb : str_mb;
  let size_nb = size > 1000000 ? (size / 1000000).toFixed(2) : (size / 1000).toFixed(0);
  let str_size = str_size_type_string.replace("%s", size_nb);

  // Display head of Tooltip
  $('#storage-title-' + type).html('<b>'+translate_type[type]+'</b>');
  $('#storage-size-' + type).html('<b>'+ str_size +'</b>');
  $('#storage-files-' + type).html('<p>'+ (infos.total.nb_files ? translate_files.replace('%d', infos.total.nb_files) : "~") +'</p>');

  // Display body of Tooltip
  if (infos.details) {
    $.each(infos.details, function(ext, data) {
      // Determinate if we use MB or GB and show it correctly (duplicate code from total size for scaling code)
      let detail_size = data.filesize;
      let detail_str_size_type_string;
      let detail_size_nb = 0;
      if (detail_size > 1000000) {
        detail_str_size_type_string = str_gb;
        detail_size_nb = (detail_size / 1000000).toFixed(2);
      } else {
        detail_str_size_type_string = str_mb;
        detail_size_nb =  (detail_size / 1000).toFixed(0) < 1 ? (detail_size / 1000).toFixed(2) : (detail_size / 1000).toFixed(0);
      }
      let detail_str_size = detail_str_size_type_string.replace("%s", detail_size_nb);
      $('#storage-detail-' + type).append(''+
        '<span class="tooltip-details-cont">'+
          '<span class="tooltip-details-ext"><b>'+ ext +'</b></span>'+
          '<span class="tooltip-details-size"><b>'+ detail_str_size +'</b></span>'+
          '<span class="tooltip-details-files">'+ translate_files.replace('%d', data.nb_files) +'</span>'+
        '</span>'+
      '');
      let ext_bg_color = $('.storage-chart span[data-type="storage-'+type+'"]').css('background-color');
      $('#storage-'+type+' .tooltip-details-ext b').css('color', ext_bg_color);
    });
  } else {
    $('#storage-'+ type +' .separated').attr('style', 'display: none !important');
    $('#storage-' + type +' .tooltip-header').css('margin', '0');
  }
  
  // Fixing storage chart tooltip bug in little screen
  // Keep showing tooltip and his % when hovered
  $('#storage-' + type).hover(function() {
    $(this).css('display', 'block');
    $('.storage-chart span[data-type="storage-'+ type +'"] p').css('opacity', '0.4');
  }, function() {
    $(this).css('display', 'none');
    $('.storage-chart span[data-type="storage-'+ type +'"] p').css('opacity', '0');
  });
  $('.storage-chart span[data-type="storage-'+ type +'"]').hover(function() {
    $(this).find('p').css('opacity', '0.4');
  }, function() {
    $(this).find('p').css('opacity', '0');
  });
});

//Tooltip for the storage chart
$('.storage-chart span').each(function () {
  let tooltip = $('.storage-tooltips #'+$(this).data('type'));
  let arrow = $('.storage-tooltips #'+$(this).data("type")+' .tooltip-arrow');
  let left = $(this).position().left + $(this).width()/2 - tooltip.innerWidth()/2;
  // Move tooltip if he create horizontal scrollbar
  let storage_width = $('#chart-title-storage').innerWidth();
  if(left + tooltip.innerWidth() > storage_width){
      let diff = (left + tooltip.innerWidth()) - storage_width;
      left = left - diff;
      arrow.css('left', 'calc(50% + '+ diff +'px)');
  }
  tooltip.css('left', left+"px");
  // Move tooltip if he create vertical scrollbar
  let str_chart_pos = $('.storage-chart').offset().top;
  let str_chart_height = $('.storage-chart').innerHeight();
  let tooltip_height = $('.storage-tooltips #'+$(this).data("type")).innerHeight() + str_chart_height;
  let windows_height = $(window).height();
  if (str_chart_pos + tooltip_height > windows_height) {
    tooltip.css('bottom', 'calc(100% + '+ str_chart_height +'px)');
    arrow.addClass('bottom');
  }
  $(this).hover(function() {
    tooltip.toggle();
  });
});

$(window).on('resize', function(){
  $('.storage-chart span').each(function () {
    let tooltip = $('.storage-tooltips #'+$(this).data('type'));
    let arrow = $('.storage-tooltips #'+$(this).data("type")+' .tooltip-arrow');
    let left = $(this).position().left + $(this).width()/2 - tooltip.innerWidth()/2;
    // Move tooltip if he create horizontal scrollbar
    let storage_width = $('#chart-title-storage').innerWidth();
    if(left + tooltip.innerWidth() > storage_width){
      let diff = (left + tooltip.innerWidth()) - storage_width;
      left = left - diff;
      arrow.css('left', 'calc(50% + '+ diff +'px)');
    }
    tooltip.css('left', left+"px");
    // Move tooltip if he create vertical scrollbar
      let str_chart_pos = $('.storage-chart').offset().top;
      let str_chart_height = $('.storage-chart').innerHeight();
      let tooltip_height = $('.storage-tooltips #'+$(this).data("type")).innerHeight() + str_chart_height;
      let windows_height = $(window).height();
      if (str_chart_pos + tooltip_height > windows_height) {
        tooltip.css('bottom', 'calc(100% + '+ str_chart_height +'px)');
        arrow.addClass('bottom');
      } else {
        tooltip.css('bottom', '');
        arrow.removeClass('bottom');
      }
  });
});

<?php $_block_repeat=false;
echo $_block_plugin2->block_footer_script(array('require'=>'jquery.cluetip'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'block_html_style'))) {
throw new SmartyException('block tag \'html_style\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('html_style', array());
$_block_repeat=true;
echo $_block_plugin3->block_html_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
.eiw .messages ul li {
  list-style-type:none !important;
}

.eiw .messages .eiw-icon {
  margin-right:10px !important;
}
<?php $_block_repeat=false;
echo $_block_plugin3->block_html_style(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<h2><?php echo l10n('Piwigo Administration');?>
</h2>

<div class="intro-page-container">
<div class="stat-boxes">

<?php if ($_smarty_tpl->tpl_vars['NB_PHOTOS']->value > 1) {?>
<a class="stat-box" href="<?php echo $_smarty_tpl->tpl_vars['U_ADD_PHOTOS']->value;?>
">
<i class="icon-picture icon-yellow"></i>
<span class="number"><?php echo smarty_modifier_number_format($_smarty_tpl->tpl_vars['NB_PHOTOS']->value);?>
</span><span class="caption"><?php echo l10n('Photos');?>
</span>
</a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['NB_ALBUMS']->value > 1) {?>
<a class="stat-box" href="<?php echo $_smarty_tpl->tpl_vars['U_ALBUMS']->value;?>
">
<i class="icon-sitemap icon-red"></i>
<span class="number"><?php echo $_smarty_tpl->tpl_vars['NB_ALBUMS']->value;?>
</span><span class="caption"><?php echo l10n('Albums');?>
</span>
</a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['NB_TAGS']->value > 1) {?>
<a class="stat-box" href="<?php echo $_smarty_tpl->tpl_vars['U_TAGS']->value;?>
">
<i class="icon-tags icon-yellow"></i>
<span class="number"><?php echo $_smarty_tpl->tpl_vars['NB_TAGS']->value;?>
</span><span class="caption" title="<?php echo l10n('%d associations',$_smarty_tpl->tpl_vars['NB_IMAGE_TAG']->value);?>
"><?php echo l10n('Tags');?>
</span>
</a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['NB_USERS']->value > 2) {?>
<a class="stat-box" href="<?php echo $_smarty_tpl->tpl_vars['U_USERS']->value;?>
">
<i class="icon-users icon-purple"></i>
<span class="number"><?php echo $_smarty_tpl->tpl_vars['NB_USERS']->value-1;?>
</span><span class="caption"><?php echo l10n('Users');?>
</span>
</a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['NB_GROUPS']->value > 0) {?>
<a class="stat-box" href="<?php echo $_smarty_tpl->tpl_vars['U_GROUPS']->value;?>
">
<i class="icon-group icon-purple"></i>
<span class="number"><?php echo $_smarty_tpl->tpl_vars['NB_GROUPS']->value;?>
</span><span class="caption"><?php echo l10n('Groups');?>
</span>
</a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['NB_COMMENTS']->value > 1) {?>
<a class="stat-box" href="<?php echo $_smarty_tpl->tpl_vars['U_COMMENTS']->value;?>
">
<i class="icon-chat icon-blue"></i>
<span class="number"><?php echo $_smarty_tpl->tpl_vars['NB_COMMENTS']->value;?>
</span><span class="caption"><?php echo l10n('Comments');?>
</span>
</a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['NB_RATES']->value > 0) {?>
<a class="stat-box" href="<?php echo $_smarty_tpl->tpl_vars['U_RATING']->value;?>
">
<i class="icon-star icon-yellow"></i>
<span class="number"><?php echo $_smarty_tpl->tpl_vars['NB_RATES']->value;?>
</span><span class="caption"><?php echo l10n('Rating');?>
</span>
</a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['NB_VIEWS']->value > 0) {?>
<a class="stat-box" href="<?php echo $_smarty_tpl->tpl_vars['U_HISTORY_STAT']->value;?>
">
<i class="icon-signal icon-blue"></i>
<span class="number"><?php echo $_smarty_tpl->tpl_vars['NB_VIEWS']->value;?>
</span><span class="caption"><?php echo l10n('Pages seen');?>
</span>
</a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['NB_PLUGINS']->value > 0) {?>
<a class="stat-box" href="<?php echo $_smarty_tpl->tpl_vars['U_PLUGINS']->value;?>
">
<i class="icon-puzzle icon-green"></i>
<span class="number"><?php echo $_smarty_tpl->tpl_vars['NB_PLUGINS']->value;?>
</span><span class="caption"><?php echo l10n('Plugins');?>
</span>
</a>
<?php }?>

<div class="stat-box">
<i class="icon-hdd icon-blue"></i>
<span class="number"><?php echo $_smarty_tpl->tpl_vars['STORAGE_USED']->value;?>
</span><span class="caption"><?php echo l10n('Storage used');?>
</span>
</div>

</div> 
<div class="intro-charts">

  <div class="chart-title"> <?php echo l10n("Activity peak in the last weeks");?>
</div>
  <div class="activity-chart" style="grid-template-rows: repeat(<?php echo count($_smarty_tpl->tpl_vars['ACTIVITY_CHART_DATA']->value)+1;?>
, 5vw);">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ACTIVITY_CHART_DATA']->value, 'WEEK_ACTIVITY', false, 'WEEK_NUMBER');
$_smarty_tpl->tpl_vars['WEEK_ACTIVITY']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['WEEK_NUMBER']->value => $_smarty_tpl->tpl_vars['WEEK_ACTIVITY']->value) {
$_smarty_tpl->tpl_vars['WEEK_ACTIVITY']->do_else = false;
?>
      <div id="week-<?php echo $_smarty_tpl->tpl_vars['WEEK_NUMBER']->value;?>
-legend" class="row-legend"><div><?php echo l10n('Week %d',$_smarty_tpl->tpl_vars['ACTIVITY_WEEK_NUMBER']->value[$_smarty_tpl->tpl_vars['WEEK_NUMBER']->value]);?>
</div></div>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WEEK_ACTIVITY']->value, 'SIZE', false, 'DAY_NUMBER');
$_smarty_tpl->tpl_vars['SIZE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['DAY_NUMBER']->value => $_smarty_tpl->tpl_vars['SIZE']->value) {
$_smarty_tpl->tpl_vars['SIZE']->do_else = false;
?>
        <span>
<?php if ($_smarty_tpl->tpl_vars['SIZE']->value != 0) {?>
          <?php $_smarty_tpl->_assignInScope('SIZE_IN_UNIT', $_smarty_tpl->tpl_vars['SIZE']->value/$_smarty_tpl->tpl_vars['ACTIVITY_CHART_NUMBER_SIZES']->value*5+1);?>
          <?php $_smarty_tpl->_assignInScope('OPACITY_IN_UNIT', $_smarty_tpl->tpl_vars['SIZE']->value/$_smarty_tpl->tpl_vars['ACTIVITY_CHART_NUMBER_SIZES']->value*0.6+0.2);?>
          <div id="day<?php echo $_smarty_tpl->tpl_vars['WEEK_NUMBER']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['DAY_NUMBER']->value;?>
" style="height:<?php echo $_smarty_tpl->tpl_vars['SIZE_IN_UNIT']->value;?>
vw;width:<?php echo $_smarty_tpl->tpl_vars['SIZE_IN_UNIT']->value;?>
vw;"></div>
<?php if ($_smarty_tpl->tpl_vars['ACTIVITY_LAST_WEEKS']->value[$_smarty_tpl->tpl_vars['WEEK_NUMBER']->value][$_smarty_tpl->tpl_vars['DAY_NUMBER']->value]["number"] != 0) {?>
          <p class="tooltip" style="transform: translate(-50%,<?php echo $_smarty_tpl->tpl_vars['SIZE_IN_UNIT']->value/2;?>
vw);">
            <span class="tooltip-header"> 
              <span class="tooltip-title"><?php if ($_smarty_tpl->tpl_vars['ACTIVITY_LAST_WEEKS']->value[$_smarty_tpl->tpl_vars['WEEK_NUMBER']->value][$_smarty_tpl->tpl_vars['DAY_NUMBER']->value]["number"] > 1) {
echo l10n('%d Activities',$_smarty_tpl->tpl_vars['ACTIVITY_LAST_WEEKS']->value[$_smarty_tpl->tpl_vars['WEEK_NUMBER']->value][$_smarty_tpl->tpl_vars['DAY_NUMBER']->value]["number"]);
} else {
echo l10n('%d Activity',$_smarty_tpl->tpl_vars['ACTIVITY_LAST_WEEKS']->value[$_smarty_tpl->tpl_vars['WEEK_NUMBER']->value][$_smarty_tpl->tpl_vars['DAY_NUMBER']->value]["number"]);
}?></span>
              <span class="tooltip-date"><?php echo $_smarty_tpl->tpl_vars['ACTIVITY_LAST_WEEKS']->value[$_smarty_tpl->tpl_vars['WEEK_NUMBER']->value][$_smarty_tpl->tpl_vars['DAY_NUMBER']->value]["date"];?>
</span>
            </span>
            <span class="tooltip-details">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ACTIVITY_LAST_WEEKS']->value[$_smarty_tpl->tpl_vars['WEEK_NUMBER']->value][$_smarty_tpl->tpl_vars['DAY_NUMBER']->value]["details"], 'actions', false, 'cat');
$_smarty_tpl->tpl_vars['actions']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value => $_smarty_tpl->tpl_vars['actions']->value) {
$_smarty_tpl->tpl_vars['actions']->do_else = false;
?>
              <span class="tooltip-details-cont">
                <?php if ($_smarty_tpl->tpl_vars['cat']->value == "Group") {?> <span class="icon-group icon-purple tooltip-details-title"><?php echo l10n($_smarty_tpl->tpl_vars['cat']->value);?>
</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['cat']->value == "User") {?> <span class="icon-users icon-purple tooltip-details-title"> <?php echo l10n($_smarty_tpl->tpl_vars['cat']->value);?>
</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['cat']->value == "Album") {?> <span class="icon-sitemap icon-red tooltip-details-title"><?php echo l10n($_smarty_tpl->tpl_vars['cat']->value);?>
</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['cat']->value == "Photo") {?> <span class="icon-picture icon-yellow tooltip-details-title"><?php echo l10n($_smarty_tpl->tpl_vars['cat']->value);?>
 </span>
                <?php } elseif ($_smarty_tpl->tpl_vars['cat']->value == "Tag") {?> <span class="icon-tags icon-green tooltip-details-title"><?php echo l10n($_smarty_tpl->tpl_vars['cat']->value);?>
 </span>
                <?php } else { ?> <span class="tooltip-details-title"> <?php echo l10n($_smarty_tpl->tpl_vars['cat']->value);?>
 </span> <?php }?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actions']->value, 'number', false, 'action');
$_smarty_tpl->tpl_vars['number']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['action']->value => $_smarty_tpl->tpl_vars['number']->value) {
$_smarty_tpl->tpl_vars['number']->do_else = false;
?>
                  <?php if ($_smarty_tpl->tpl_vars['action']->value == "Edit") {?> <span class="icon-pencil tooltip-detail" title="<?php echo l10n("%s editions",$_smarty_tpl->tpl_vars['number']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['number']->value;?>
</span>
                  <?php } elseif ($_smarty_tpl->tpl_vars['action']->value == "Add") {?> <span class="icon-plus tooltip-detail" title="<?php echo l10n("%s additions",$_smarty_tpl->tpl_vars['number']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['number']->value;?>
</span>
                  <?php } elseif ($_smarty_tpl->tpl_vars['action']->value == "Delete") {?> <span class="icon-trash tooltip-detail" title="<?php echo l10n("%s deletions",$_smarty_tpl->tpl_vars['number']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['number']->value;?>
</span>
                  <?php } elseif ($_smarty_tpl->tpl_vars['action']->value == "Login") {?> <span class="icon-key tooltip-detail" title="<?php echo l10n("%s login",$_smarty_tpl->tpl_vars['number']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['number']->value;?>
</span>
                  <?php } elseif ($_smarty_tpl->tpl_vars['action']->value == "Logout") {?> <span class="icon-logout tooltip-detail" title="<?php echo l10n("%s logout",$_smarty_tpl->tpl_vars['number']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['number']->value;?>
 </span>
                  <?php } elseif ($_smarty_tpl->tpl_vars['action']->value == "Move") {?> <span class="icon-move tooltip-detail" title="<?php echo l10n("%s movement",$_smarty_tpl->tpl_vars['number']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['number']->value;?>
 </span>
                  <?php } else { ?> <span> (<?php echo l10n($_smarty_tpl->tpl_vars['action']->value);?>
) <?php echo $_smarty_tpl->tpl_vars['number']->value;?>
 </span> 
<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </span>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </p>
<?php }
}?>
        </span>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <div></div>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DAY_LABELS']->value, 'day');
$_smarty_tpl->tpl_vars['day']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->do_else = false;
?>
      <div class="col-legend"><?php echo $_smarty_tpl->tpl_vars['day']->value;?>
 <div class="line-vertical" style="height: <?php echo count($_smarty_tpl->tpl_vars['ACTIVITY_CHART_DATA']->value)*100-50;?>
%;"></div></div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>

  <div id="chart-title-storage" class="chart-title"> <?php echo l10n('Storage');?>
 <span class="chart-title-infos"> <?php echo l10n('%s MB used',(round($_smarty_tpl->tpl_vars['STORAGE_TOTAL']->value/1000,0)));?>
 </span></div>

  <div class="storage-chart">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['STORAGE_CHART_DATA']->value, 'details', false, 'type');
$_smarty_tpl->tpl_vars['details']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['details']->value) {
$_smarty_tpl->tpl_vars['details']->do_else = false;
?>
      <span data-type="storage-<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" style="width:<?php echo $_smarty_tpl->tpl_vars['details']->value['total']['filesize']/$_smarty_tpl->tpl_vars['STORAGE_TOTAL']->value*100;?>
%"> 
        <p><?php echo round($_smarty_tpl->tpl_vars['details']->value['total']['filesize']/$_smarty_tpl->tpl_vars['STORAGE_TOTAL']->value*100);?>
%</p>
      </span>  
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>

  <div class="storage-tooltips">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['STORAGE_CHART_DATA']->value, 'value', false, 'type');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
      <p id="storage-<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" class="tooltip">
      <span class="tooltip-arrow"></span>
        <span class="tooltip-header">
          <span id="storage-title-<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" class="tooltip-title"></span>
          <span id="storage-size-<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" class="tooltip-size"></span>
          <span id="storage-files-<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" class="tooltip-files"></span>
        </span>
        <span class="separated"></span>
        <span id="storage-detail-<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" class="tooltip-details"></span>
      </p>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>

  <div class="storage-chart-legend">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['STORAGE_CHART_DATA']->value, 'i', false, 'type');
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
?>
      <div><span></span> <p><?php echo l10n($_smarty_tpl->tpl_vars['type']->value);?>
</p></div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>

</div> 
</div> 
<p class="showCreateAlbum">
<?php if ($_smarty_tpl->tpl_vars['ENABLE_SYNCHRONIZATION']->value) {?>
  <a href="<?php echo $_smarty_tpl->tpl_vars['U_QUICK_SYNC']->value;?>
" class="icon-exchange"><?php echo l10n('Quick Local Synchronization');?>
</a>
<?php }?>


<?php if ((isset($_smarty_tpl->tpl_vars['SUBSCRIBE_BASE_URL']->value))) {?>
  <br><span class="newsletter-subscription"><a href="<?php echo $_smarty_tpl->tpl_vars['SUBSCRIBE_BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
" id="newsletterSubscribe" class="externalLink cluetip icon-mail-alt" title="<?php echo l10n('Piwigo Announcements Newsletter');?>
|<?php echo nl2br((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'htmlspecialchars' ][ 0 ], array( l10n('Keep in touch with Piwigo project, subscribe to Piwigo Announcement Newsletter. You will receive emails when a new release is available (sometimes including a security bug fix, it\'s important to know and upgrade) and when major events happen to the project. Only a few emails a year.') )), (bool) 1);?>
"><?php echo l10n('Subscribe %s to Piwigo Announcements Newsletter',$_smarty_tpl->tpl_vars['EMAIL']->value);?>
</a> <a href="#" class="newsletter-hide"><?php echo l10n('... or hide this link');?>
</a></span>
<?php }?>
</p><?php }
}
