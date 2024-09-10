<?php
/* Smarty version 4.3.1, created on 2024-09-07 17:05:55
  from '/var/www/html/piwigo/admin/themes/default/template/configuration_display.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66dc2583602333_83658867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00825412cbaff874c0a1abf2cac20f258199b46a' => 
    array (
      0 => '/var/www/html/piwigo/admin/themes/default/template/configuration_display.tpl',
      1 => 1702327276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66dc2583602333_83658867 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'common','load'=>'footer','path'=>'admin/themes/default/js/common.js'),$_smarty_tpl ) );?>


<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_html_style'))) {
throw new SmartyException('block tag \'html_style\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('html_style', array());
$_block_repeat=true;
echo $_block_plugin1->block_html_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
/*
.adminOnlyIcon::before {
  content:"(";
}
.adminOnlyIcon::after {
  content:")";
}
*/
.adminOnlyIcon {
  background-color:#ddd;
  padding:2px 5px;
  border-radius:5px;
  font-size:90%;
}
<?php $_block_repeat=false;
echo $_block_plugin1->block_html_style(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
" class="properties">

<div id="configContent">

  <fieldset id="indexDisplayConf">
    <legend><span class="icon-television icon-green"></span><?php echo l10n('Main Page');?>
</legend>
    <ul>
      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="menubar_filter_icon" <?php if (($_smarty_tpl->tpl_vars['display']->value['menubar_filter_icon'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Activate icon "%s"',(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'ucfirst' ][ 0 ], array( l10n('display only recently posted photos') ))));?>

        </label>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="index_new_icon" <?php if (($_smarty_tpl->tpl_vars['display']->value['index_new_icon'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Activate icon "new" next to albums and pictures');?>

        </label>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="index_search_in_set_button" <?php if (($_smarty_tpl->tpl_vars['display']->value['index_search_in_set_button'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Activate button "%s"',(l10n('Search in this set')));?>

        </label>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="index_search_in_set_action" <?php if (($_smarty_tpl->tpl_vars['display']->value['index_search_in_set_action'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Activate icon "%s"',(l10n('Search in this set')));?>

        </label>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="index_sort_order_input" <?php if (($_smarty_tpl->tpl_vars['display']->value['index_sort_order_input'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Activate icon "%s"',(l10n('Sort order')));?>

        </label>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="index_flat_icon" <?php if (($_smarty_tpl->tpl_vars['display']->value['index_flat_icon'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Activate icon "%s"',(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'ucfirst' ][ 0 ], array( l10n('display all photos in all sub-albums') ))));?>

        </label>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="index_posted_date_icon" <?php if (($_smarty_tpl->tpl_vars['display']->value['index_posted_date_icon'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Activate icon "%s"',(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'ucfirst' ][ 0 ], array( l10n('display a calendar by posted date') ))));?>

        </label>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="index_created_date_icon" <?php if (($_smarty_tpl->tpl_vars['display']->value['index_created_date_icon'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Activate icon "%s"',(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'ucfirst' ][ 0 ], array( l10n('display a calendar by creation date') ))));?>

        </label>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="index_slideshow_icon" <?php if (($_smarty_tpl->tpl_vars['display']->value['index_slideshow_icon'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Activate icon "%s"',(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'ucfirst' ][ 0 ], array( l10n('slideshow') ))));?>

        </label>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="index_sizes_icon" <?php if (($_smarty_tpl->tpl_vars['display']->value['index_sizes_icon'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Activate icon "%s"',(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'ucfirst' ][ 0 ], array( l10n('Photo sizes') ))));?>

        </label>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="index_edit_icon" <?php if (($_smarty_tpl->tpl_vars['display']->value['index_edit_icon'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Activate icon "%s"',(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'ucfirst' ][ 0 ], array( l10n('Edit album') ))));?>
 <span class="adminOnlyIcon tiptip" title="<?php echo l10n('available for administrators only');?>
"><i class="icon-users"></i> <?php echo 'administrators';?>
</span>
        </label>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="index_caddie_icon" <?php if (($_smarty_tpl->tpl_vars['display']->value['index_caddie_icon'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Activate icon "%s"',(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'ucfirst' ][ 0 ], array( l10n('Add to caddie') ))));?>
 <span class="adminOnlyIcon tiptip" title="<?php echo l10n('available for administrators only');?>
"><i class="icon-users"></i> <?php echo 'administrators';?>
</span>
        </label>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="display_fromto" <?php if (($_smarty_tpl->tpl_vars['display']->value['display_fromto'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Display album date period');?>

        </label>
      </li>

      <li>
        <label>
          <?php echo l10n('Number of albums per page');?>

          <input type="text" size="3" maxlength="4" name="nb_categories_page" id="nb_categories_page" value="<?php echo $_smarty_tpl->tpl_vars['display']->value['NB_CATEGORIES_PAGE'];?>
">
        </label>
      </li>
    </ul>
  </fieldset>

  <fieldset id="pictureDisplayConf">
    <legend><span class="icon-picture icon-blue"></span><?php echo l10n('Photo Page');?>
</legend>
    <ul>
      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="picture_slideshow_icon" <?php if (($_smarty_tpl->tpl_vars['display']->value['picture_slideshow_icon'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Activate icon "%s"',(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'ucfirst' ][ 0 ], array( l10n('slideshow') ))));?>

        </label>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="picture_metadata_icon" <?php if (($_smarty_tpl->tpl_vars['display']->value['picture_metadata_icon'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Activate icon "%s"',(l10n('Show file metadata')));?>

        </label>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="picture_download_icon" <?php if (($_smarty_tpl->tpl_vars['display']->value['picture_download_icon'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Activate icon "%s"',(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'ucfirst' ][ 0 ], array( l10n('Download this file') ))));?>

        </label>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="picture_favorite_icon" <?php if (($_smarty_tpl->tpl_vars['display']->value['picture_favorite_icon'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Activate icon "%s"',(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'ucfirst' ][ 0 ], array( l10n('add this photo to your favorites') ))));?>

        </label>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="picture_sizes_icon" <?php if (($_smarty_tpl->tpl_vars['display']->value['picture_sizes_icon'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Activate icon "%s"',(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'ucfirst' ][ 0 ], array( l10n('Photo sizes') ))));?>

        </label>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="picture_edit_icon" <?php if (($_smarty_tpl->tpl_vars['display']->value['picture_edit_icon'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Activate icon "%s"',(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'ucfirst' ][ 0 ], array( l10n('Edit photo') ))));?>
 <span class="adminOnlyIcon tiptip" title="<?php echo l10n('available for administrators only');?>
"><i class="icon-users"></i> <?php echo 'administrators';?>
</span>
        </label>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="picture_caddie_icon" <?php if (($_smarty_tpl->tpl_vars['display']->value['picture_caddie_icon'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Activate icon "%s"',(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'ucfirst' ][ 0 ], array( l10n('Add to caddie') ))));?>
 <span class="adminOnlyIcon tiptip" title="<?php echo l10n('available for administrators only');?>
"><i class="icon-users"></i> <?php echo 'administrators';?>
</span>
        </label>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="picture_representative_icon" <?php if (($_smarty_tpl->tpl_vars['display']->value['picture_representative_icon'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Activate icon "%s"',(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'ucfirst' ][ 0 ], array( l10n('set as album representative') ))));?>
 <span class="adminOnlyIcon tiptip" title="<?php echo l10n('available for administrators only');?>
"><i class="icon-users"></i> <?php echo 'administrators';?>
</span>
        </label>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="picture_navigation_icons" <?php if (($_smarty_tpl->tpl_vars['display']->value['picture_navigation_icons'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Activate Navigation Bar');?>

        </label>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="picture_navigation_thumb" <?php if (($_smarty_tpl->tpl_vars['display']->value['picture_navigation_thumb'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Activate Navigation Thumbnails');?>

        </label>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="picture_menu" <?php if (($_smarty_tpl->tpl_vars['display']->value['picture_menu'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Show menubar');?>

        </label>
      </li>
    </ul>
  </fieldset>

  <fieldset id="pictureInfoConf">
    <legend><span class="icon-cog icon-red"></span><?php echo l10n('Photo Properties');?>
</legend>
    <ul>
      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="picture_informations[author]" <?php if (($_smarty_tpl->tpl_vars['display']->value['picture_informations']['author'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Author');?>

        </label>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="picture_informations[created_on]" <?php if (($_smarty_tpl->tpl_vars['display']->value['picture_informations']['created_on'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Created on');?>

        </label>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="picture_informations[posted_on]" <?php if (($_smarty_tpl->tpl_vars['display']->value['picture_informations']['posted_on'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Posted on');?>

        </label>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="picture_informations[dimensions]" <?php if (($_smarty_tpl->tpl_vars['display']->value['picture_informations']['dimensions'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Dimensions');?>

        </label>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="picture_informations[file]" <?php if (($_smarty_tpl->tpl_vars['display']->value['picture_informations']['file'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('File');?>

        </label>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="picture_informations[filesize]" <?php if (($_smarty_tpl->tpl_vars['display']->value['picture_informations']['filesize'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Filesize');?>

        </label>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="picture_informations[tags]" <?php if (($_smarty_tpl->tpl_vars['display']->value['picture_informations']['tags'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Tags');?>

        </label>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="picture_informations[categories]" <?php if (($_smarty_tpl->tpl_vars['display']->value['picture_informations']['categories'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Albums');?>

        </label>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="picture_informations[visits]" <?php if (($_smarty_tpl->tpl_vars['display']->value['picture_informations']['visits'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Visits');?>

        </label>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="picture_informations[rating_score]" <?php if (($_smarty_tpl->tpl_vars['display']->value['picture_informations']['rating_score'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Rating score');?>

        </label>
      </li>

      <li>
        <label class="font-checkbox">
          <span class="icon-check"></span>
          <input type="checkbox" name="picture_informations[privacy_level]" <?php if (($_smarty_tpl->tpl_vars['display']->value['picture_informations']['privacy_level'])) {?>checked="checked"<?php }?>>
          <?php echo l10n('Who can see this photo?');?>
 <span class="adminOnlyIcon tiptip" title="<?php echo l10n('available for administrators only');?>
"><i class="icon-users"></i> <?php echo 'administrators';?>
</span>
        </label>
      </li>
    </ul>
  </fieldset>

</div> <!-- configContent -->

<p class="formButtons">
  <button name="submit" type="submit" class="buttonLike" <?php if ($_smarty_tpl->tpl_vars['isWebmaster']->value != 1) {?>disabled<?php }?>>
    <i class="icon-floppy"></i> <?php echo l10n('Save Settings');?>

  </button>
</p>

<input type="hidden" name="pwg_token" value="<?php echo $_smarty_tpl->tpl_vars['PWG_TOKEN']->value;?>
">
</form><?php }
}
