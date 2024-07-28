<?php
/* Smarty version 4.3.1, created on 2024-06-22 14:48:17
  from '/var/www/html/piwigo/themes/bootstrap_darkroom/template/picture_info_cards.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676e431433611_85016624',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20055ab198f6979c6de7c4976543ac4c6c253d72' => 
    array (
      0 => '/var/www/html/piwigo/themes/bootstrap_darkroom/template/picture_info_cards.tpl',
      1 => 1713951806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:picture_info_comments.tpl' => 1,
  ),
),false)) {
function content_6676e431433611_85016624 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div id="infopanel-left" class="col-lg-6 col-12">
      <!-- Picture infos -->
      <div id="card-informations" class="card mb-2">
        <div class="card-body">
          <h5 class="card-title"><?php echo l10n('Information');?>
</h5>
          <div id="info-content" class="d-flex flex-column">
<?php if ($_smarty_tpl->tpl_vars['display_info']->value['author'] && (isset($_smarty_tpl->tpl_vars['INFO_AUTHOR']->value))) {?>
            <div id="Author" class="imageInfo">
              <dl class="row mb-0">
                <dt class="col-sm-5"><?php echo l10n('Author');?>
</dt>
                <dd class="col-sm-7"><?php echo $_smarty_tpl->tpl_vars['INFO_AUTHOR']->value;?>
</dd>
              </dl>
            </div>
<?php }
if ((isset($_smarty_tpl->tpl_vars['CR_INFO_NAME']->value)) && !empty($_smarty_tpl->tpl_vars['CR_INFO_NAME']->value)) {?>
            <div id="Copyright" class="imageInfo">
              <dl class="row mb-0">
                <dt class="col-sm-5"><?php echo l10n('Copyright');?>
</dt>
                <dd class="col-sm-7"><?php if ((isset($_smarty_tpl->tpl_vars['CR_INFO_URL']->value))) {?><a href="<?php echo $_smarty_tpl->tpl_vars['CR_INFO_URL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['CR_INFO_NAME']->value;?>
</a><?php } else {
echo $_smarty_tpl->tpl_vars['CR_INFO_NAME']->value;
}?></dd>
              </dl>
            </div>
<?php }
if ($_smarty_tpl->tpl_vars['display_info']->value['rating_score'] && (isset($_smarty_tpl->tpl_vars['rate_summary']->value))) {?>
            <div id="Average" class="imageInfo">
              <dl class="row mb-0">
                <dt class="col-sm-5"><?php echo l10n('Rating score');?>
</dt>
                <dd class="col-sm-7">
<?php if ($_smarty_tpl->tpl_vars['rate_summary']->value['count']) {?>
                    <span id="ratingScore"><?php echo $_smarty_tpl->tpl_vars['rate_summary']->value['score'];?>
</span> <span id="ratingCount">(<?php echo l10n_dec('%d rate','%d rates',$_smarty_tpl->tpl_vars['rate_summary']->value['count']);?>
)</span>
<?php } else { ?>
                    <span id="ratingScore"><?php echo l10n('no rate');?>
</span> <span id="ratingCount"></span>
<?php }?>
                </dd>
              </dl>
            </div>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['rating']->value))) {?>
            <div id="rating" class="imageInfo">
              <dl class="row mb-0">
                <dt class="col-sm-5" id="updateRate"><?php if ((isset($_smarty_tpl->tpl_vars['rating']->value['USER_RATE']))) {
echo l10n('Update your rating');
} else {
echo l10n('Rate this photo');
}?></dt>
                <dd class="col-sm-7">
                  <form action="<?php echo $_smarty_tpl->tpl_vars['rating']->value['F_ACTION'];?>
" method="post" id="rateForm" style="margin:0;">
                    <div>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rating']->value['marks'], 'mark', false, NULL, 'rate_loop', array (
));
$_smarty_tpl->tpl_vars['mark']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mark']->value) {
$_smarty_tpl->tpl_vars['mark']->do_else = false;
if ((isset($_smarty_tpl->tpl_vars['rating']->value['USER_RATE'])) && $_smarty_tpl->tpl_vars['mark']->value == $_smarty_tpl->tpl_vars['rating']->value['USER_RATE']) {?>
                      <span class="rateButtonStarFull" data-value="<?php echo $_smarty_tpl->tpl_vars['mark']->value;?>
"></span>
<?php } else { ?>
                      <span class="rateButtonStarEmpty" data-value="<?php echo $_smarty_tpl->tpl_vars['mark']->value;?>
"></span>
<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'core.scripts','path'=>'themes/default/js/scripts.js','load'=>'async'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'rating','require'=>'core.scripts','path'=>'themes/bootstrap_darkroom/js/rating.js','load'=>'async'),$_smarty_tpl ) );
$_block_plugin11 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin11, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery'));
$_block_repeat=true;
echo $_block_plugin11->block_footer_script(array('require'=>'jquery'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>var _pwgRatingAutoQueue = _pwgRatingAutoQueue||[];_pwgRatingAutoQueue.push( {rootUrl: '<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
', image_id: <?php echo $_smarty_tpl->tpl_vars['current']->value['id'];?>
,onSuccess : function(rating) {var e = document.getElementById("updateRate");if (e) e.innerHTML = "<?php echo strtr((string)l10n('Update your rating'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
";e = document.getElementById("ratingScore");if (e) e.innerHTML = rating.score;e = document.getElementById("ratingCount");if (e) {if (rating.count == 1) {e.innerHTML = "(<?php echo strtr((string)l10n('%d rate'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
)".replace( "%d", rating.count);} else {e.innerHTML = "(<?php echo strtr((string)l10n('%d rates'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
)".replace( "%d", rating.count);}}$('#averageRate').find('span').each(function() {$(this).addClass(rating.average > $(this).data('value') - 0.5 ? 'rateButtonStarFull' : 'rateButtonStarEmpty');$(this).removeClass(rating.average > $(this).data('value') - 0.5 ? 'rateButtonStarEmpty' : 'rateButtonStarFull');});}});<?php $_block_repeat=false;
echo $_block_plugin11->block_footer_script(array('require'=>'jquery'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </div>
                  </form>
                </dd>
              </dl>
            </div>
<?php }
if ($_smarty_tpl->tpl_vars['display_info']->value['created_on'] && (isset($_smarty_tpl->tpl_vars['INFO_CREATION_DATE']->value))) {?>
            <div id="datecreate" class="imageInfo">
              <dl class="row mb-0">
                <dt class="col-sm-5"><?php echo l10n('Created on');?>
</dt>
                <dd class="col-sm-7"><?php echo $_smarty_tpl->tpl_vars['INFO_CREATION_DATE']->value;?>
</dd>
              </dl>
            </div>
<?php }
if ($_smarty_tpl->tpl_vars['display_info']->value['posted_on']) {?>
            <div id="datepost" class="imageInfo">
              <dl class="row mb-0">
                <dt class="col-sm-5"><?php echo l10n('Posted on');?>
</dt>
                <dd class="col-sm-7"><?php echo $_smarty_tpl->tpl_vars['INFO_POSTED_DATE']->value;?>
</dd>
              </dl>
            </div>
<?php }
if ($_smarty_tpl->tpl_vars['display_info']->value['visits']) {?>
            <div id="visits" class="imageInfo">
              <dl class="row mb-0">
                <dt class="col-sm-5"><?php echo l10n('Visits');?>
</dt>
                <dd class="col-sm-7"><?php echo $_smarty_tpl->tpl_vars['INFO_VISITS']->value;?>
</dd>
              </dl>
            </div>
<?php }
if ($_smarty_tpl->tpl_vars['display_info']->value['dimensions'] && (isset($_smarty_tpl->tpl_vars['INFO_DIMENSIONS']->value))) {?>
            <div id="Dimensions" class="imageInfo">
              <dl class="row mb-0">
                <dt class="col-sm-5"><?php echo l10n('Dimensions');?>
</dt>
                <dd class="col-sm-7"><?php echo $_smarty_tpl->tpl_vars['INFO_DIMENSIONS']->value;?>
</dd>
              </dl>
            </div>
<?php }
if ($_smarty_tpl->tpl_vars['display_info']->value['file']) {?>
            <div id="File" class="imageInfo">
              <dl class="row mb-0">
                <dt class="col-sm-5"><?php echo l10n('File');?>
</dt>
                <dd class="col-sm-7"><?php echo $_smarty_tpl->tpl_vars['INFO_FILE']->value;?>
</dd>
              </dl>
            </div>
<?php }
if ($_smarty_tpl->tpl_vars['display_info']->value['filesize'] && (isset($_smarty_tpl->tpl_vars['INFO_FILESIZE']->value))) {?>
            <div id="Filesize" class="imageInfo">
              <dl class="row mb-0">
                <dt class="col-sm-5"><?php echo l10n('Filesize');?>
</dt>
                <dd class="col-sm-7"><?php echo $_smarty_tpl->tpl_vars['INFO_FILESIZE']->value;?>
</dd>
              </dl>
            </div>
<?php }
if ($_smarty_tpl->tpl_vars['display_info']->value['categories'] && (isset($_smarty_tpl->tpl_vars['related_categories']->value))) {?>
            <div id="Categories" class="imageInfo">
              <dl class="row mb-0">
                <dt class="col-sm-5"><?php echo l10n('Albums');?>
</dt>
                <dd class="col-sm-7">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['related_categories']->value, 'cat', false, NULL, 'cat_loop', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_cat_loop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_cat_loop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_cat_loop']->value['index'];
?>
                <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_cat_loop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_cat_loop']->value['first'] : null)) {?><br /><?php }
echo $_smarty_tpl->tpl_vars['cat']->value;?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </dd>
              </dl>
            </div>
<?php }
if ($_smarty_tpl->tpl_vars['display_info']->value['privacy_level'] && (isset($_smarty_tpl->tpl_vars['available_permission_levels']->value))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'core.scripts','load'=>'async','path'=>'themes/default/js/scripts.js'),$_smarty_tpl ) );?>

<?php $_block_plugin12 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin12, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery'));
$_block_repeat=true;
echo $_block_plugin12->block_footer_script(array('require'=>'jquery'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>function setPrivacyLevel(id, level, label) {(new PwgWS('<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
')).callService("pwg.images.setPrivacyLevel", { image_id:id, level:level},{method: "POST",onFailure: function(num, text) { alert(num + " " + text); },onSuccess: function(result) {jQuery('#dropdownPermissions').html(label);jQuery('.permission-li').removeClass('active');jQuery('#permission-' + level).addClass('active');}});}<?php $_block_repeat=false;
echo $_block_plugin12->block_footer_script(array('require'=>'jquery'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <div id="Privacy" class="imageInfo">
              <dl class="row mb-0">
                <dt class="col-sm-5"><?php echo l10n('Who can see this photo?');?>
</dt>
                <dd class="col-sm-7">
                  <div class="dropdown">
                    <button class="btn btn-primary btn-raised dropdown-toggle ellipsis" type="button" id="dropdownPermissions" data-toggle="dropdown" aria-expanded="true">
                      <?php echo $_smarty_tpl->tpl_vars['available_permission_levels']->value[$_smarty_tpl->tpl_vars['current']->value['level']];?>

                    </button>
                    <div class="dropdown-menu" role="menu" aria-labelledby="dropdownPermissions">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['available_permission_levels']->value, 'label', false, 'level');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['level']->value => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
?>
                      <a id="permission-<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
" class="dropdown-item permission-li <?php if ($_smarty_tpl->tpl_vars['current']->value['level'] == $_smarty_tpl->tpl_vars['level']->value) {?> active<?php }?>" href="javascript:setPrivacyLevel(<?php echo $_smarty_tpl->tpl_vars['current']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
,'<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
')"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</a>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                  </div>
                </dd>
              </dl>
            </div>
<?php }?>
          </div>
        </div>
      </div>
<?php if ($_smarty_tpl->tpl_vars['display_info']->value['tags'] && (isset($_smarty_tpl->tpl_vars['related_tags']->value))) {?>
      <div id="card-tags" class="card mb-2">
        <div class="card-body">
          <h5 class="card-title"><?php echo l10n('Tags');?>
</h5>
            <div id="Tags" class="imageInfo">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['related_tags']->value, 'tag', false, NULL, 'tag_loop', array (
));
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?><a class="btn btn-primary btn-raised mr-1" href="<?php echo $_smarty_tpl->tpl_vars['tag']->value['URL'];?>
"><?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
</a><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
      </div>
<?php }?>
    </div>

<?php if ((isset($_smarty_tpl->tpl_vars['metadata']->value)) || ((isset($_smarty_tpl->tpl_vars['comment_add']->value)) || !empty($_smarty_tpl->tpl_vars['COMMENT_COUNT']->value))) {?>
    <div id="infopanel-right" class="col-lg-6 col-12">
    <!-- metadata -->
<?php if ((isset($_smarty_tpl->tpl_vars['metadata']->value))) {
if ((isset($_smarty_tpl->tpl_vars['loaded_plugins']->value['exif_view']))) {
ob_start();
echo l10n('exif_field_Make');
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('exif_make', $_prefixVariable1);
ob_start();
echo l10n('exif_field_Model');
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('exif_model', $_prefixVariable2);
ob_start();
echo l10n('exif_field_UndefinedTag:0xA434');
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_assignInScope('exif_lens', $_prefixVariable3);
ob_start();
echo l10n('exif_field_FNumber');
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->_assignInScope('exif_fnumber', $_prefixVariable4);
ob_start();
echo l10n('exif_field_ISOSpeedRatings');
$_prefixVariable5=ob_get_clean();
$_smarty_tpl->_assignInScope('exif_iso', $_prefixVariable5);
ob_start();
echo l10n('exif_field_FocalLength');
$_prefixVariable6=ob_get_clean();
$_smarty_tpl->_assignInScope('exif_focal_length', $_prefixVariable6);
ob_start();
echo l10n('exif_field_Flash');
$_prefixVariable7=ob_get_clean();
$_smarty_tpl->_assignInScope('exif_flash', $_prefixVariable7);
ob_start();
echo l10n('exif_field_ExposureTime');
$_prefixVariable8=ob_get_clean();
$_smarty_tpl->_assignInScope('exif_exposure_time', $_prefixVariable8);
ob_start();
echo l10n('exif_field_ExposureBiasValue');
$_prefixVariable9=ob_get_clean();
$_smarty_tpl->_assignInScope('exif_exposure_bias', $_prefixVariable9);
} else {
$_smarty_tpl->_assignInScope('exif_make', "Make");
$_smarty_tpl->_assignInScope('exif_model', "Model");
$_smarty_tpl->_assignInScope('exif_lens', "UndefinedTag:0xA434");
$_smarty_tpl->_assignInScope('exif_fnumber', "FNumber");
$_smarty_tpl->_assignInScope('exif_iso', "ISOSpeedRatings");
$_smarty_tpl->_assignInScope('exif_focal_length', "FocalLength");
$_smarty_tpl->_assignInScope('exif_flash', "Flash");
$_smarty_tpl->_assignInScope('exif_exposure_time', "ExposureTime");
$_smarty_tpl->_assignInScope('exif_exposure_bias', "ExposureBiasValue");
}?>

      <div id="card-metadata" class="card mb-2">
        <div class="card-body">
          <h5 class="card-title"><?php echo l10n('EXIF Metadata');?>
</h5>
          <div id="metadata">
            <?php if (is_array($_smarty_tpl->tpl_vars['metadata']->value[0]['lines']) && (array_key_exists(((string)$_smarty_tpl->tpl_vars['exif_make']->value),$_smarty_tpl->tpl_vars['metadata']->value[0]['lines']) || array_key_exists(((string)$_smarty_tpl->tpl_vars['exif_model']->value),$_smarty_tpl->tpl_vars['metadata']->value[0]['lines']))) {?>
            <div class="row" style="line-height: 40px">
              <div class="col-12">
                <span class="camera-compact fa-3x mr-3" title="<?php echo $_smarty_tpl->tpl_vars['exif_make']->value;?>
 &amp; <?php echo $_smarty_tpl->tpl_vars['exif_model']->value;?>
"></span>
                <?php if (is_array($_smarty_tpl->tpl_vars['metadata']->value[0]['lines']) && (array_key_exists(((string)$_smarty_tpl->tpl_vars['exif_make']->value),$_smarty_tpl->tpl_vars['metadata']->value[0]['lines']))) {
ob_start();
echo $_smarty_tpl->tpl_vars['exif_make']->value;
$_prefixVariable10 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['metadata']->value[0]['lines'][$_prefixVariable10];
}?>
                <?php if (is_array($_smarty_tpl->tpl_vars['metadata']->value[0]['lines']) && (array_key_exists(((string)$_smarty_tpl->tpl_vars['exif_model']->value),$_smarty_tpl->tpl_vars['metadata']->value[0]['lines']))) {
ob_start();
echo $_smarty_tpl->tpl_vars['exif_model']->value;
$_prefixVariable11 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['metadata']->value[0]['lines'][$_prefixVariable11];
}?>
              </div>
            </div>
<?php }?>
            <?php if (is_array($_smarty_tpl->tpl_vars['metadata']->value[0]['lines']) && (array_key_exists(((string)$_smarty_tpl->tpl_vars['exif_lens']->value),$_smarty_tpl->tpl_vars['metadata']->value[0]['lines']))) {?>
            <div class="row" style="line-height: 40px">
              <div class="col-12">
                <span class="camera-lens-h fa-3x mr-3" title="<?php echo $_smarty_tpl->tpl_vars['exif_lens']->value;?>
"></span>
                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['exif_lens']->value;
$_prefixVariable12 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['metadata']->value[0]['lines'][$_prefixVariable12];?>

              </div>
            </div>
<?php }?>
            <div class="row">
              <div class="col-12<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->fluid_width) {?> col-xl-10<?php }?>">
                <div class="row">
                  <?php if (is_array($_smarty_tpl->tpl_vars['metadata']->value[0]['lines']) && (array_key_exists(((string)$_smarty_tpl->tpl_vars['exif_fnumber']->value),$_smarty_tpl->tpl_vars['metadata']->value[0]['lines']))) {?>
                  <div class="col-6 col-sm-4">
                    <span class="camera-aperture fa-2x pr-2" title="<?php echo $_smarty_tpl->tpl_vars['exif_fnumber']->value;?>
"></span> f/<?php ob_start();
echo $_smarty_tpl->tpl_vars['exif_fnumber']->value;
$_prefixVariable13 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['metadata']->value[0]['lines'][$_prefixVariable13];?>

                  </div>
<?php }?>
                  <?php if (is_array($_smarty_tpl->tpl_vars['metadata']->value[0]['lines']) && (array_key_exists(((string)$_smarty_tpl->tpl_vars['exif_focal_length']->value),$_smarty_tpl->tpl_vars['metadata']->value[0]['lines']))) {?>
                  <div class="col-6 col-sm-4">
                    <span class="camera-focal-length fa-2x pr-2" title="<?php echo $_smarty_tpl->tpl_vars['exif_focal_length']->value;?>
"></span> <?php ob_start();
echo $_smarty_tpl->tpl_vars['exif_focal_length']->value;
$_prefixVariable14 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['metadata']->value[0]['lines'][$_prefixVariable14];?>

                  </div>
<?php }?>
                  <?php if (is_array($_smarty_tpl->tpl_vars['metadata']->value[0]['lines']) && (array_key_exists(((string)$_smarty_tpl->tpl_vars['exif_exposure_time']->value),$_smarty_tpl->tpl_vars['metadata']->value[0]['lines']))) {?>
                  <div class="col-6 col-sm-4">
                    <span class="camera-shutter-speed fa-2x pr-2" title="<?php echo $_smarty_tpl->tpl_vars['exif_exposure_time']->value;?>
"></span> <?php ob_start();
echo $_smarty_tpl->tpl_vars['exif_exposure_time']->value;
$_prefixVariable15 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['metadata']->value[0]['lines'][$_prefixVariable15];?>

                  </div>
<?php }?>
                  <?php if (is_array($_smarty_tpl->tpl_vars['metadata']->value[0]['lines']) && (array_key_exists(((string)$_smarty_tpl->tpl_vars['exif_iso']->value),$_smarty_tpl->tpl_vars['metadata']->value[0]['lines']))) {?>
                  <div class="col-6 col-sm-4">
                    <span class="camera-iso fa-2x pr-2" title="<?php echo $_smarty_tpl->tpl_vars['exif_iso']->value;?>
"></span> <?php ob_start();
echo $_smarty_tpl->tpl_vars['exif_iso']->value;
$_prefixVariable16 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['metadata']->value[0]['lines'][$_prefixVariable16];?>

                  </div>
<?php }?>
                  <?php if (is_array($_smarty_tpl->tpl_vars['metadata']->value[0]['lines']) && (array_key_exists(((string)$_smarty_tpl->tpl_vars['exif_exposure_bias']->value),$_smarty_tpl->tpl_vars['metadata']->value[0]['lines']))) {?>
                  <div class="col-6 col-sm-4">
                    <span class="camera-exposure fa-2x pr-2" title="<?php echo $_smarty_tpl->tpl_vars['exif_exposure_bias']->value;?>
"></span> <?php ob_start();
echo $_smarty_tpl->tpl_vars['exif_exposure_bias']->value;
$_prefixVariable17 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['metadata']->value[0]['lines'][$_prefixVariable17];?>

                  </div>
<?php }?>
                  <?php if (is_array($_smarty_tpl->tpl_vars['metadata']->value[0]['lines']) && (array_key_exists(((string)$_smarty_tpl->tpl_vars['exif_flash']->value),$_smarty_tpl->tpl_vars['metadata']->value[0]['lines']))) {?>
                  <div class="col-6 col-sm-4">
                    <span class="camera-flash fa-2x pr-2 float-left h-100" title="<?php echo $_smarty_tpl->tpl_vars['exif_flash']->value;?>
"></span><div> <?php ob_start();
echo $_smarty_tpl->tpl_vars['exif_flash']->value;
$_prefixVariable18 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['metadata']->value[0]['lines'][$_prefixVariable18];?>
</div>
                  </div>
<?php }?>
                </div>
              </div>
            </div>
          </div>
          <button id="show_exif_data" class="btn btn-primary btn-raised mt-1" style="text-transform: none;"><i class="fas fa-info mr-1"></i> <?php echo l10n('Show EXIF data');?>
</button>
<?php $_block_plugin13 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin13, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery'));
$_block_repeat=true;
echo $_block_plugin13->block_footer_script(array('require'=>'jquery'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
$('#show_exif_data').on('click', function() {
  if ($('#full_exif_data').hasClass('d-none')) {
    $('#full_exif_data').addClass('d-flex').removeClass('d-none');
    $('#show_exif_data').html('<i class="fas fa-info mr-1"></i> <?php echo l10n("Hide EXIF data");?>
');
  } else {
    $('#full_exif_data').addClass('d-none').removeClass('d-flex');
    $('#show_exif_data').html('<i class="fas fa-info mr-1"></i> <?php echo l10n("Show EXIF data");?>
');
  }
});
<?php $_block_repeat=false;
echo $_block_plugin13->block_footer_script(array('require'=>'jquery'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
          <div id="full_exif_data" class="d-none flex-column mt-2">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['metadata']->value, 'meta');
$_smarty_tpl->tpl_vars['meta']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['meta']->value) {
$_smarty_tpl->tpl_vars['meta']->do_else = false;
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['meta']->value['lines'], 'value', false, 'label');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['label']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
            <div>
              <dl class="row mb-0">
                <dt class="col-sm-6"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</dt>
                <dd class="col-sm-6"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</dd>
              </dl>
            </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </div>
        </div>
      </div>
<?php }?>
      <div id="card-comments" class="ml-2">
<?php $_smarty_tpl->_subTemplateRender('file:picture_info_comments.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      </div>
    </div>
<?php }
}
}
