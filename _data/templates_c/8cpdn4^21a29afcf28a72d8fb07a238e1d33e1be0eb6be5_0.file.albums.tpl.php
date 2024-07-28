<?php
/* Smarty version 4.3.1, created on 2024-06-22 14:53:49
  from '/var/www/html/piwigo/admin/themes/default/template/albums.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676e57dcca669_50327256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21a29afcf28a72d8fb07a238e1d33e1be0eb6be5' => 
    array (
      0 => '/var/www/html/piwigo/admin/themes/default/template/albums.tpl',
      1 => 1702327276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6676e57dcca669_50327256 (Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin1->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
var data = <?php echo json_encode($_smarty_tpl->tpl_vars['album_data']->value);?>
;
var pwg_token = "<?php echo $_smarty_tpl->tpl_vars['PWG_TOKEN']->value;?>
";
var str_show_sub = "<?php echo l10n('Show sub-albums');?>
";
var str_hide_sub = "<?php echo l10n('Hide sub-albums');?>
";
var str_manage_sub_album = "<?php echo l10n('Manage sub-albums');?>
";
var str_apply_order_raw = "<?php echo l10n('apply automatic sort order');?>
";
var str_apply_order = str_apply_order_raw.charAt(0).toUpperCase() + str_apply_order_raw.slice(1);
var str_edit = "<?php echo l10n('Edit album');?>
";
var str_are_you_sure = "<?php echo l10n('The status of the album \'%s\' and its sub-albums will change to private. Are you sure?');?>
";
var str_yes_change_parent = "<?php echo l10n('Yes change parent anyway');?>
";
var str_no_change_parent = "<?php echo l10n('No, don\'t move this album here');?>
";
var str_root = "<?php echo l10n('Root');?>
";
var openCat = <?php echo $_smarty_tpl->tpl_vars['open_cat']->value;?>
;
var nb_albums = <?php echo $_smarty_tpl->tpl_vars['nb_albums']->value;?>
;
var light_album_manager = <?php echo $_smarty_tpl->tpl_vars['light_album_manager']->value;?>
;

var x_nb_subcats = "<?php echo l10n('%d sub-albums');?>
";
var x_nb_images = "<?php echo l10n('%d photos');?>
";
var x_nb_sub_photos = "<?php echo l10n('%d pictures in sub-albums');?>
";

var delay_autoOpen = <?php echo $_smarty_tpl->tpl_vars['delay_before_autoOpen']->value;?>

<?php $_block_repeat=false;
echo $_block_plugin1->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.confirm','load'=>'footer','require'=>'jquery','path'=>'themes/default/js/plugins/jquery-confirm.min.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/default/js/plugins/jquery-confirm.min.css"),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'common','load'=>'footer','path'=>'admin/themes/default/js/common.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/default/js/plugins/jqtree.css"),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jtree','load'=>'footer','path'=>'themes/default/js/plugins/tree.jquery.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"admin/themes/default/fontello/css/animation.css",'order'=>10),$_smarty_tpl ) );?>
 
<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin2->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
const delete_album_with_name = '<?php echo strtr((string)l10n('Delete album "%s".'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
const delete_album_with_subs = '<?php echo strtr((string)l10n('Delete album "%s" and its %d sub-albums.'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
'
const has_images_associated_outside = '<?php echo strtr((string)l10n("delete album and all %d photos, even the %d associated to other albums"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
const has_images_becomming_orphans = '<?php echo strtr((string)l10n('delete album and the %d orphan photos'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
const has_images_recursives = '<?php echo strtr((string)l10n('delete only album, not photos'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
const rename_item = '<?php echo strtr((string)l10n('Rename "%s"'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';

const str_add_album = '<?php echo strtr((string)l10n('Add Album'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
const str_edit_album = '<?php echo strtr((string)l10n('Edit album'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
const str_add_photo = '<?php echo strtr((string)l10n('Add Photos'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
const str_visit_gallery = '<?php echo strtr((string)l10n('Visit Gallery'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
const str_sort_order = '<?php echo strtr((string)l10n('Automatic sort order'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
const str_delete_album = '<?php echo strtr((string)l10n('Delete album'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
const str_root_order = '<?php echo strtr((string)l10n('Apply to root albums'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
str_sub_album_order = '<?php echo strtr((string)l10n('Apply to direct sub-albums'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
str_album_name_empty = '<?php echo strtr((string)l10n('Album name must not be empty'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
'

const add_album_root_title = '<?php echo strtr((string)l10n('Create a new album at root'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
const add_sub_album_of = '<?php echo strtr((string)l10n('Create a sub-album of "%s"'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
const tiptip_locked_album = "<?php echo strtr((string)l10n('Locked album'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
";
<?php $_block_repeat=false;
echo $_block_plugin2->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.tipTip','load'=>'footer','path'=>'themes/default/js/plugins/jquery.tipTip.minified.js'),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'albums','load'=>'footer','path'=>'admin/themes/default/js/albums.js'),$_smarty_tpl ) );?>


<div class="cat-move-order-popin">
  <div class="order-popin-container">
    <a class="close-popin icon-cancel" onClick="$('.cat-move-order-popin').fadeOut()"> </a>
    <div class="popin-title"><span class="icon-sort-name-up icon-purple"></span><span class="popin-title-text"><?php echo l10n('apply automatic sort order');?>
</span></div>
    <div class="album-name icon-sitemap"></div>
    <form action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
" method="post">
      <input type="hidden" name="id" value="-1">
      <div class="choice-container">
        <label class="font-checkbox">
          <span class="icon-dot-circled"> </span>
          <input type="radio" value="name ASC" name="order" checked>
          <?php echo l10n('Album name, A &rarr; Z');?>

        </label>

        <label class="font-checkbox">
          <span class="icon-dot-circled"> </span>
          <input type="radio" value="name DESC" name="order">
          <?php echo l10n('Album name, Z &rarr; A');?>

        </label>

        <label class="font-checkbox">
          <span class="icon-dot-circled"> </span>
          <input type="radio" value="natural_order ASC" name="order">
          <?php echo l10n('Album name, 1 &rarr; 5 &rarr; 10 &rarr; 100');?>

        </label>
        
        <label class="font-checkbox">
          <span class="icon-dot-circled"> </span>
          <input type="radio" value="natural_order DESC" name="order">
          <?php echo l10n('Album name, 100 &rarr; 10 &rarr; 5 &rarr; 1');?>

        </label>
        
        <label class="font-checkbox">
          <span class="icon-dot-circled"> </span>
          <input type="radio" value="date_creation DESC" name="order">
          <?php echo l10n('Date created, new &rarr; old');?>

        </label>

        <label class="font-checkbox">
          <span class="icon-dot-circled"> </span>
          <input type="radio" value="date_creation ASC" name="order">
          <?php echo l10n('Date created, old &rarr; new');?>

        </label>

        <label class="font-checkbox">
          <span class="icon-dot-circled"> </span>
          <input type="radio" value="date_available DESC" name="order">
          <?php echo l10n('Date posted, new &rarr; old');?>

        </label>

        <label class="font-checkbox">
          <span class="icon-dot-circled"> </span>
          <input type="radio" value="date_available ASC" name="order">
          <?php echo l10n('Date posted, old &rarr; new');?>

        </label>
      </div>
      <input type="submit" name="simpleAutoOrder" value="<?php echo l10n('Apply to direct sub-albums');?>
"/>
      <input type="submit" name="recursiveAutoOrder" value="<?php echo l10n('Apply to the whole hierarchy');?>
"/>
    </form>
  </div>
</div>

<div class="cat-move-header"> 
  <div class="add-album-button">
    <label class="head-button-2 icon-add-album">
      <p><?php echo l10n('Add Album');?>
</p>
    </label>
  </div>
  <div class="order-root-button">
    <label class="order-root head-button-2 icon-sort-name-up">
      <p><?php echo l10n('Automatic sort order');?>
</p>
    </label>
  </div>
  <div class="cat-move-info icon-help-circled"> <?php echo l10n('Drag and drop to reorder albums');?>
</div>
</div>

<div id="AddAlbum" class="AddAlbumPopIn">
  <div class="AddAlbumPopInContainer">
    <a class="icon-cancel CloseAddAlbum"></a>
    
    <div class="AddIconContainer">
      <span class="AddIcon icon-blue icon-add-album"></span>
    </div>
    <div class="AddIconTitle">
      <span></span>
    </div>

    <div class="AddAlbumInputContainer">
      <label class="user-property-label AddAlbumLabelUsername"><?php echo l10n('Album name');?>

        <input class="user-property-input" />
      </label>
    </div>

    <div class="AddAlbumInputContainer">
      <label class="user-property-label AddAlbumLabelUsername"><?php echo l10n('Position');?>


      <div class="AddAlbumPositionSelect">
        <div class="AddAlbumRadioInput">
          <input type="radio" id="place-start"
          name="position" value="first" <?php ob_start();
echo $_smarty_tpl->tpl_vars['POS_PREF']->value;
$_prefixVariable1 = ob_get_clean();
if ("first" == $_prefixVariable1) {?> checked <?php }?>>
          <label for="place-start"><?php echo l10n('Place first');?>
</label>
        </div>
        <div class="AddAlbumRadioInput">
          <input type="radio" id="place-end"
          name="position" value="last" <?php ob_start();
echo $_smarty_tpl->tpl_vars['POS_PREF']->value;
$_prefixVariable2 = ob_get_clean();
if ("last" == $_prefixVariable2) {?> checked <?php }?>>
          <label for="place-end"><?php echo l10n('Place last');?>
</label>
        </div>
      </div>
    </div>
    

    <div class="AddAlbumErrors icon-cancel">
    </div>

    <div class="AddAlbumFormValidation">
      <div class="AddAlbumSubmit">
        <span><?php echo l10n('Add');?>
</span>
      </div>

      <div class="AddAlbumCancel">
        <span><?php echo l10n('Cancel');?>
</span>
      </div>
    </div>
  </div>
</div>

<div id="RenameAlbum" class="RenameAlbumPopIn">
  <div class="RenameAlbumPopInContainer">
    <a class="icon-cancel CloseRenameAlbum"></a>
    
    <div class="AddIconContainer">
      <span class="AddIcon icon-blue icon-pencil"></span>
    </div>
    <div class="RenameAlbumTitle">
      <span></span>
    </div>

    <div class="RenameAlbumInputContainer">
      <label class="user-property-label RenameAlbumLabelUsername"><?php echo l10n('Rename album');?>

        <input class="user-property-input" />
      </label>
    </div>

    <div class="RenameAlbumErrors icon-cancel">
    </div>

    <div class="RenameAlbumFormValidation">
      <div class="RenameAlbumSubmit">
        <span><?php echo l10n('Yes, rename');?>
</span>
      </div>

      <div class="RenameAlbumCancel">
        <span><?php echo l10n('Cancel');?>
</span>
      </div>
    </div>
  </div>
</div>

<div id="DeleteAlbum" class="DeleteAlbumPopIn">
  <div class="DeleteAlbumPopInContainer">
    <div class="DeleteIconTitle">
      <span><?php echo l10n('Supprimer l\'album : tatatatattata');?>
</span>
    </div>

    <div class="DeleteAlbumInputContainer">
      <ul class="deleteAlbumOptions">
        <li id="IMAGES_ASSOCIATED_OUTSIDE"><label class=""><input type="radio" name="photo_deletion_mode" value="force_delete"><span class="innerText"></span></label></li>
        <li id="IMAGES_BECOMING_ORPHAN"><label class=""><input type="radio" name="photo_deletion_mode" value="delete_orphans"><span class="innerText"></span></label></li>
        <li id="IMAGES_RECURSIVE"><label class=""><input type="radio" name="photo_deletion_mode" value="no_delete" checked="checked"><?php echo l10n('delete only album, not photos');?>
</label></li>
      </ul>
    </div>
    

    <div class="DeleteAlbumErrors icon-cancel">
    </div>

    <div class="DeleteAlbumFormValidation">
      <div class="DeleteAlbumSubmit">
        <span><?php echo l10n('Confirm deletion');?>
</span>
      </div>

      <div class="DeleteAlbumCancel">
        <span><?php echo l10n('Cancel');?>
</span>
      </div>
    </div>
  </div>
</div>

<div class='tree'> </div>

<style>

.animateFocus {
  position: relative;
  border-left: 4px solid #ff7700;
}

.animateFocus .icon-grip-vertical-solid {
  color: #ff7700;
}

.animateFocus:before {
  content: '';
  width: 100%;
  height: 100%;
  position:absolute;
  top:50%;
  left:50%;
  transform: translate(-50%,-50%);
  animation: ripples .8s ease-out 0.3s  ;
  opacity: 0;
  border-radius: 5px;
}

.jqtree_element {
  transition: 1s;
}

@keyframes ripples {
  0% {
      border: 0px solid #ff7700;
      opacity: 0.7;
  }
  100% {
      border: 20px solid #ff7700;
      opacity: 0;
  }
}

.add-album-button label::before {
  margin-right: 7px;
}

#AddAlbum, #DeleteAlbum, #RenameAlbum {
  display: none;
}

.AddAlbumPopIn, .DeleteAlbumPopIn, .RenameAlbumPopIn{
  position: fixed;
  z-index: 100;
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%;
  overflow: auto; 
  background-color: rgba(0,0,0,0.7);
}

.AddAlbumPopInContainer, .DeleteAlbumPopInContainer, .RenameAlbumPopInContainer{
  display:flex;
  position:absolute;
  left:50%;
  top: 50%;
  transform:translate(-50%, -48%);
  text-align:left;
  padding:20px;
  flex-direction:column;
  border-radius:15px;
  align-items:center;
  width: 270px;
}
.DeleteAlbumPopInContainer {
  width: 40%;
  border-radius: 4px;
  border-top: solid 7px #e74c3c;
}
.RenameAlbumPopInContainer {
  width: auto;
  min-width: 270px;
  max-width: 700px;
}

.user-property-input {
  width: 100%;
  box-sizing:border-box;
  font-size:1.1em;
  padding:8px 16px;
  border:none;
}

.user-property-label {
  color:#A4A4A4;
  font-weight:bold;
  font-size:1.1em;
  margin-bottom:5px;
}

.AddIconContainer, .DeleteIconContainer, .AddIconContainer {
  margin-top: 10px;
}

.AddIcon {
  border-radius:50%;
  padding:10px;
  font-size: 2em;
}

.AddIconTitle, .RenameAlbumTitle {
  font-size:1.4em;
  font-weight:bold;
  margin-bottom:20px;
  margin-top:15px;
  text-align: center;
}
.DeleteIconTitle {
  font-size:1.7em;
  font-weight:bold;
  margin-bottom:10px;
  margin-top:15px;
  text-align: center;
}

.AddAlbumSubmit,
.DeleteAlbumSubmit,
.RenameAlbumSubmit {
  cursor:pointer;
  font-weight:bold;
  padding: 10px;
  margin: 20px;
  font-size:1em;
  margin-bottom:0;
}

.DeleteAlbumSubmit {
  border-radius: 4px;
  transition: .1s;
}

.AddAlbumCancel, .RenameAlbumCancel {
  font-weight: bold;
  cursor: pointer;
  font-size:1em;
}

.CloseAddAlbum, .CloseRenameAlbum {
  position:absolute;
  right:-40px;
  top:-40px;
  font-size:30px;
}

.AddAlbumPositionSelect {
  display: flex;
  flex-direction: column;
}
.AddAlbumInputContainer {
  width: 100%;
  margin: 15px 0;
}
.DeleteAlbumInputContainer {
  width: 70%;
  margin: 15px auto;
}
input[name="position"] {
  margin-right: 5px;
}

.AddAlbumRadioInput {
  display: flex;
  flex-direction: row;
  align-items: center;
  margin-top: 10px;
}
.AddAlbumRadioInput label {
  font-size: 12px;
  font-weight: 600;
}
.deleteAlbumOptions label {
  font-size: 13px;
  font-weight: 700;
  display: flex;
  flex-direction: row;
  align-items: center;
}
.AddAlbumFormValidation,
.DeleteAlbumFormValidation,
.RenameAlbumFormValidation {
  display: flex;
  flex-direction: row;
  align-items: baseline;
}
.AddAlbumCancel,
.DeleteAlbumCancel,
.RenameAlbumCancel {
  cursor: pointer;
  font-weight: bold;
  padding: 10px 20px;
  margin: 20px;
  margin-bottom: 20px;
  margin-left: 10px;
  font-size: 1em;
  margin-bottom: 0;
}
.DeleteAlbumCancel {
  background-color: #ecf0f1;
  color: #000;
  border-radius: 4px;
  transition: .1s;
}
.DeleteAlbumCancel:hover {
  background: #bdc3c7;
}
.AddAlbumSubmit,
.DeleteAlbumSubmit,
.RenameAlbumSubmit {
  margin-right: 10px;
  padding: 10px 20px;
}
.DeleteAlbumSubmit:hover {
  background: #c0392b;
}

.deleteAlbumOptions {
  list-style-type: none;
}
.deleteAlbumOptions input{
  margin-right: 5px;
}

.album-add-button-label, .order-root-button-label {
  padding: 10px;
  border-radius: 5px;
  font-weight: bold;
  display: flex;
  align-items: baseline;
  cursor: pointer;
  font-size: 13px;
  height: 18px;
}
.album-add-button-label p,
.order-root-button-label p {
  white-space: nowrap;
  margin: 0 !important;
}

.badge-container {
  position: absolute;
  right: 275px;
}

.badge-container i {
  padding: 2px 6px 2px 4px!important;
  border-radius: 10px !important;
  font-size: 0.85em !important;
  margin: 0 2px !important;
  font-weight: 700;
  font-style: normal;
}

.notClickable {
  pointer-events: none;
  opacity: 0.5;
}

.notClickable:hover {
  cursor: not-allowed;
}

.move-cat-container, .move-cat-container .badge-container i {
  transition: 0.2s;
}

.jqtree-moving .move-cat-container {
  background-color: #ffd7ad;
}

.jqtree-moving .move-cat-container .badge-container i,
.jqtree-moving .move-cat-container .node-icon {
  color: #ffd7ad;
  background-color: #f98100;
}

.dragging .move-cat-container {
  pointer-events: none;
}

.dragging .move-cat-container .move-cat-toogler,
.dragging .move-cat-container .move-cat-action-cont a,
.dragging .move-cat-container .move-cat-title-container{
  pointer-events: all;
}


.last-update {
    display: none;
}

.badge-container:hover .badge-dropdown {
  display: flex;
}

.badge-dropdown {
  position: absolute;
  display: none;
  flex-direction: column;
  right: 50%;
  top: 30px;
  width: max-content;
  border-radius: 10px;
  z-index: 10;
  transform: translateX(48%);
  box-shadow: 0px 3px 3px 1px rgba(0,0,0,0.2);
  padding: 10px 20px;
}

.badge-dropdown:after {
  content: " ";
  position: absolute;
  top: -10px;
  left: 50%;
  transform: rotate(0);
  border-width: 5px;
  border-style: solid;
}

.badge-dropdown span {
  background: transparent;
  font-size: 14px;
  font-weight: 600;
  margin: 5px 0;
}
.badge-dropdown span::before {
  margin: 0 8px 0 0;
  width: 20px;
}

@media (max-width: 1415px) { 
  .badge-container  .last-update {
    display: none;
  }

  .badge-container .nb-sub-photos {
    display: none;
  }
}

@media (max-width: 1300px) { 
  .badge-container {
    display: none;
  }
}

@media (max-width: 1230px) { 
  .badge-container {
    display: none;
  }

  ul.jqtree-tree ul.jqtree_common {
    margin-left: 20px !important;
  }

  .move-cat-title-container {
    max-width: 60%;
  }
}

@media (max-width: 1100px) { 
  .move-cat-title-container {
    max-width: 50%;
  }
}

@media (max-width: 850px) { 
  .move-cat-title-container {
    max-width: 40%;
  }
}

</style><?php }
}
