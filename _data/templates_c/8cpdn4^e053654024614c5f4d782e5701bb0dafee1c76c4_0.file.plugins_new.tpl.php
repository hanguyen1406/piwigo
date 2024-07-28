<?php
/* Smarty version 4.3.1, created on 2024-06-22 15:31:01
  from '/var/www/html/piwigo/admin/themes/default/template/plugins_new.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676ee35a17c59_33904367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e053654024614c5f4d782e5701bb0dafee1c76c4' => 
    array (
      0 => '/var/www/html/piwigo/admin/themes/default/template/plugins_new.tpl',
      1 => 1702327276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6676ee35a17c59_33904367 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/piwigo/include/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.sort','load'=>'footer','path'=>'themes/default/js/plugins/jquery.sort.js'),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.ui.slider','require'=>'jquery.ui','load'=>'header','path'=>'themes/default/js/ui/minified/jquery.ui.slider.min.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/default/js/ui/theme/jquery.ui.slider.css"),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.selectize','load'=>'footer','path'=>'themes/default/js/plugins/selectize.min.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('id'=>'jquery.selectize','path'=>"themes/default/js/plugins/selectize.".((string)$_smarty_tpl->tpl_vars['themeconf']->value['colorscheme']).".css"),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'common','load'=>'footer','path'=>'admin/themes/default/js/common.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.confirm','load'=>'footer','require'=>'jquery','path'=>'themes/default/js/plugins/jquery-confirm.min.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'pluginsNew','load'=>'footer','require'=>'jquery.ui.effect-blind,jquery.sort','path'=>'admin/themes/default/js/plugins_new.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/default/js/plugins/jquery-confirm.min.css"),$_smarty_tpl ) );?>


<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin1->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
const str_confirm_msg = "<?php echo l10n("Yes, I am sure");?>
";
const str_cancel_msg = "<?php echo l10n("No, I have chaged my mind");?>
";
const str_install_title = "<?php echo strtr((string)l10n('Are you sure you want to install the plugin "%s"?'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
";
const strs_certification = {
  "-1" : "<?php echo l10n('This plugin is incompatible with your version');?>
",
  "0" : "<?php echo l10n('This plugin have no update since 3 years ! It may be outdated');?>
",
  "1" : "<?php echo l10n('This plugin has no recent update');?>
", 
  "2" : "<?php echo l10n('This plugin was updated less than 6 months ago');?>
",
  "3" : "<?php echo l10n('This plugin have been updated recently');?>
",
};
const str_x_month = "<?php echo l10n("%d month");?>
";
const str_x_months = "<?php echo l10n("%d months");?>
";
const str_x_year = "<?php echo l10n("%d year");?>
";
const str_x_years = "<?php echo l10n("%d years");?>
";
const str_from_begining = "<?php echo l10n("since the beginning");?>
";
<?php $_block_repeat=false;
echo $_block_plugin1->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<div class="titrePage">
  <div class="sort">
    <div class="sort-actions">
      <div class="beta-test-plugin-switch tiptip" title="<?php echo htmlspecialchars((string)l10n('Show plugins compatible with previous version of Piwigo'), ENT_QUOTES, 'UTF-8', true);?>
">
        <label class="switch">
          <input type="checkbox" id="showBetaTestPlugin" <?php if ($_smarty_tpl->tpl_vars['BETA_TEST']->value) {?>checked<?php }?>>
          <span class="slider round"></span>
        </label>
        <label for='showBetaTestPlugin'><?php echo l10n('Show beta test plugins');?>
</label>
      </div>
      
      <div class="sort-by">
      <label><?php echo l10n('Sort order');?>
</label>
      <div class="select-container">
        <?php echo smarty_function_html_options(array('name'=>"selectOrder",'options'=>$_smarty_tpl->tpl_vars['order_options']->value,'selected'=>$_smarty_tpl->tpl_vars['order_selected']->value),$_smarty_tpl);?>

      </div>
      </div>
      
      <div class="advanced-filter-btn icon-filter"> <span><?php echo l10n('Filters');?>
</span></div>
      
      <div id="search-plugin">
          <span class="icon-search search-icon"> </span>
          <span class="icon-cancel search-cancel"></span>
          <input class="search-input" type="text" placeholder="<?php echo l10n('Search');?>
" id="search">
      </div>
    
    </div>

    <div class="advanced-filter advanced-filter-new-plugin">
      <div class="advanced-filter-header">
        <span class="advanced-filter-title"><?php echo l10n('Advanced filters');?>
</span>
        <span class="advanced-filter-close icon-cancel"></span>
      </div>
      <div class="advanced-filter-container">
        
        <div class="advanced-filter-item advanced-filter-author">
          <label class="advanced-filter-item-label" for="author-filter"><?php echo l10n('Author');?>
</label>
          <div class="advanced-filter-item-container">
            <select name="author-filter" id="author-filter"></select>
          </div>
        </div>

        <div class="advanced-filter-item advanced-filter-tag">
          <label class="advanced-filter-item-label" for="tag-filter"><?php echo l10n('Tag');?>
</label>
          <div class="advanced-filter-item-container">
            <select name="tag-filter" id="tag-filter"></select>
          </div>
        </div>

        <div class="advanced-filter-item advanced-filter-rating">
          <label class="advanced-filter-item-label" for="notation-filter">
            <?php echo l10n('Rating greater than');?>

            <span class="rating-star-container">
              <span data-star="0"><i></i></span>
              <span data-star="1"><i></i></span>
              <span data-star="2"><i></i></span>
              <span data-star="3"><i></i></span>
              <span data-star="4"><i></i></span>
            </span>
          </label>
          <div class="advanced-filter-item-container">
            <div id="notation-filter" class="select-bar"></div>
            <div class="slider-bar-wrapper">
            <div class="slider-bar-container notation-filter-slider"></div>
            </div>
          </div>
        </div>

        <div class="advanced-filter-item advanced-filter-revision-date">
            <label class="advanced-filter-item-label" for="revision-date-filter">
                <?php echo l10n('Last revision date is newer than');?>
<span class="revision-date"></span>
            </label>
            <div class="advanced-filter-item-container">
                <div id="revision-date" class="select-bar"></div>
                <div class="slider-bar-wrapper">
                    <div class="slider-bar-container revision-date-filter-slider"></div>
                </div>
            </div>
        </div>

        <div class="advanced-filter-item advanced-filter-certification">
          <label class="advanced-filter-item-label" for="certification-filter">
              <?php echo l10n('Certification higher or equal to');?>

              <span><i class="certification tiptip" title=""></i></span>
          </label>
          <div class="advanced-filter-item-container">
            <div id="certification-filter" class="select-bar"></div>
              <div class="slider-bar-wrapper">
                  <div class="slider-bar-container certification-filter-slider"></div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php if (!empty($_smarty_tpl->tpl_vars['plugins']->value)) {?>
<div id="availablePlugins">

<?php $_smarty_tpl->_assignInScope('color_tab', array("icon-red","icon-blue","icon-yellow","icon-purple","icon-green"));?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plugins']->value, 'plugin', false, NULL, 'plugins_loop', array (
));
$_smarty_tpl->tpl_vars['plugin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->value) {
$_smarty_tpl->tpl_vars['plugin']->do_else = false;
?>
<div class="pluginBox pluginBigBox" id="plugin_<?php echo $_smarty_tpl->tpl_vars['plugin']->value['ID'];?>
"
  data-id="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['ID'];?>
"
  data-date="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['ID'];?>
"
  data-name="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['EXT_NAME'];?>
"
  data-revision="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['REVISION_DATE'];?>
"
  data-downloads="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['DOWNLOADS'];?>
"
  data-author="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['AUTHOR'];?>
"
  data-tags="<?php echo implode(', ',$_smarty_tpl->tpl_vars['plugin']->value['TAGS']);?>
"
>
  <div class="pluginContent">
    <div class="pluginImage">
<?php if ($_smarty_tpl->tpl_vars['plugin']->value['SCREENSHOT'] == '') {?>
        <span class="noImage <?php echo $_smarty_tpl->tpl_vars['color_tab']->value[$_smarty_tpl->tpl_vars['plugin']->value['ID']%5];?>
"><i class="icon-puzzle"></i></span>
<?php } else { ?>
        <span class="screenshot" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['plugin']->value['SCREENSHOT'];?>
);"></span>
<?php }?>
    </div>
    <div class="pluginInfo">
      <div>
        <div class="pluginName">
          <span title="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['EXT_NAME'];?>
"><?php echo $_smarty_tpl->tpl_vars['plugin']->value['EXT_NAME'];?>
</span>
          <i class="certification tiptip" data-certification=<?php echo $_smarty_tpl->tpl_vars['plugin']->value['CERTIFICATION'];?>

<?php if ($_smarty_tpl->tpl_vars['plugin']->value['CERTIFICATION'] == 3) {?>
              title="<?php echo l10n('This plugin have been updated recently');?>
"
<?php } elseif ($_smarty_tpl->tpl_vars['plugin']->value['CERTIFICATION'] == 2) {?>
              title="<?php echo l10n('This plugin was updated less than 6 months ago');?>
"
<?php } elseif ($_smarty_tpl->tpl_vars['plugin']->value['CERTIFICATION'] == 1) {?>
              title="<?php echo l10n('This plugin has no recent update');?>
"
<?php } elseif ($_smarty_tpl->tpl_vars['plugin']->value['CERTIFICATION'] == 0) {?>
              title="<?php echo l10n('This plugin have no update since 3 years ! It may be outdated');?>
"
<?php } elseif ($_smarty_tpl->tpl_vars['plugin']->value['CERTIFICATION'] == -1) {?>
              title="<?php echo l10n('This plugin is incompatible with your version');?>
"
<?php }?>
          ></i>
        </div>
        <div class="pluginAuthorVersion"><?php echo l10n('by %s',$_smarty_tpl->tpl_vars['plugin']->value['AUTHOR']);?>
</div>
      </div>

      <div>
<?php if (!is_null($_smarty_tpl->tpl_vars['plugin']->value['RATING'])) {?>
          <div class="pluginRating tiptip" data-rating="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['RATING'];?>
" title="<?php echo l10n('On %d rating(s)',$_smarty_tpl->tpl_vars['plugin']->value['NB_RATINGS']);?>
">
            <div class="rating-star-container">
              <span data-star="0"><i></i></span>
              <span data-star="1"><i></i></span>
              <span data-star="2"><i></i></span>
              <span data-star="3"><i></i></span>
              <span data-star="4"><i></i></span>
            </div>
            <span class="rating"><?php echo $_smarty_tpl->tpl_vars['plugin']->value['RATING'];?>
</span>
          </div>
<?php }?>
        <div class="pluginDownload tiptip" title="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['DOWNLOADS'];?>
 <?php echo l10n('Downloads');?>
"><i class="icon-download"><?php echo $_smarty_tpl->tpl_vars['plugin']->value['DOWNLOADS'];?>
</i></div>
        <div class="pluginVersion tiptip" title="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['REVISION_FORMATED_DATE'];?>
"><i class="icon-flow-branch"></i><?php echo l10n('Version %s',$_smarty_tpl->tpl_vars['plugin']->value['VERSION']);?>
</div>
        <a class="pluginLink" href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['EXT_URL'];?>
"><i class="icon-link"></i><?php echo l10n('Website');?>
</a>
      </div>

      <div class="pluginInstall">
        <a class="buttonLike buttonInstall" href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['URL_INSTALL'];?>
"><i class="icon-plus-circled"></i><?php echo l10n('Add');?>
</a>
      </div>
    </div>
    <div class="pluginMoreInfo">
      <div class="pluginTags tiptip" title="<?php echo l10n('Tags');?>
 : <?php echo implode(', ',$_smarty_tpl->tpl_vars['plugin']->value['TAGS']);?>
">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plugin']->value['TAGS'], 'tag_label', false, 'tag_id');
$_smarty_tpl->tpl_vars['tag_label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag_id']->value => $_smarty_tpl->tpl_vars['tag_label']->value) {
$_smarty_tpl->tpl_vars['tag_label']->do_else = false;
?>
        <span data-id="<?php echo $_smarty_tpl->tpl_vars['tag_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['tag_label']->value;?>
</span>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
      <div class="pluginDesc" >
      <?php echo nl2br((string) $_smarty_tpl->tpl_vars['plugin']->value['BIG_DESC'], (bool) 1);?>

      </div>
    </div>
  </div>
</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php } else { ?>
<p><?php echo l10n('There is no other plugin available.');?>

<?php if ((isset($_smarty_tpl->tpl_vars['BETA_URL']->value))) {?>
  <a href="<?php echo $_smarty_tpl->tpl_vars['BETA_URL']->value;?>
" class="buttonLike icon-fire"><?php echo l10n('Show beta test plugins');?>
</a>
<?php }?>
</p>
<?php }
}
}
