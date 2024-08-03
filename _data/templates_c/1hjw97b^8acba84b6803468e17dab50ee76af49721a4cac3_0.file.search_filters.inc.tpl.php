<?php
/* Smarty version 4.3.1, created on 2024-07-29 09:35:32
  from '/var/www/html/piwigo/themes/default/template/include/search_filters.inc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66a76264860199_11797442',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8acba84b6803468e17dab50ee76af49721a4cac3' => 
    array (
      0 => '/var/www/html/piwigo/themes/default/template/include/search_filters.inc.tpl',
      1 => 1702327276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/themes/default/template/include/album_selector.inc.tpl' => 1,
  ),
),false)) {
function content_66a76264860199_11797442 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.selectize','load'=>'footer','path'=>'themes/default/js/plugins/selectize.min.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"admin/themes/default/fontello/css/animation.css",'order'=>10),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.tipTip','load'=>'header','path'=>'themes/default/js/plugins/jquery.tipTip.minified.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/default/css/search.css",'order'=>-100),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/default/css/".((string)$_smarty_tpl->tpl_vars['themeconf']->value['colorscheme'])."-search.css",'order'=>-100),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/default/vendor/fontello/css/fontello.css",'order'=>-10),$_smarty_tpl ) );?>
 

<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin1->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ((isset($_smarty_tpl->tpl_vars['GP']->value))) {?>
  global_params = <?php echo $_smarty_tpl->tpl_vars['GP']->value;?>
;
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['fullname_of']->value))) {?>
fullname_of_cat = <?php echo $_smarty_tpl->tpl_vars['fullname_of']->value;?>
;
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['SEARCH_ID']->value))) {?>
search_id = '<?php echo $_smarty_tpl->tpl_vars['SEARCH_ID']->value;?>
';
<?php }?>

str_word_widget_label = "<?php echo strtr((string)l10n('Search for words'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
";
str_tags_widget_label = "<?php echo strtr((string)l10n('Tag'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
";
str_album_widget_label = "<?php echo strtr((string)l10n('Album'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
";
str_author_widget_label = "<?php echo strtr((string)l10n('Author'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
";
str_added_by_widget_label = "<?php echo strtr((string)l10n('Added by'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
";
str_filetypes_widget_label = "<?php echo strtr((string)l10n('File type'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
";

str_empty_search_top_alt = "<?php echo strtr((string)l10n('Fill in the filters to start a search'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
";
str_empty_search_bot_alt = "<?php echo strtr((string)l10n('Pre-established filters are proposed, but you can add or remove them using the "Choose filters" button.'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
";

<?php $_block_repeat=false;
echo $_block_plugin1->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'mcs','load'=>'async','require'=>'jquery','path'=>'themes/default/js/mcs.js'),$_smarty_tpl ) );?>

<div class="mcs-container">
  <div class="filter-manager-popin">
    <div class="filter-manager-popin-container">
      <span class="pwg-icon-cancel filter-manager-close"></span>

      <div class="mcs-popin-title"><?php echo l10n('Choose filters');?>
</div>

      <div class="filter-manager-controller-container">
        <label>
          <input data-wid='word' class="filter-manager-controller word" type="checkbox"/>
          <span class="mcs-icon pwg-icon-search"><?php echo l10n('Search for words');?>
</span>
        </label>
        <label>
          <input data-wid='tag' class="filter-manager-controller tags" type="checkbox"/>
          <span class="mcs-icon pwg-icon-tag"><?php echo l10n('Tag');?>
</span>
        </label>
        <label>
          <input data-wid='date_posted' class="filter-manager-controller date_posted" type="checkbox"/>
          <span class="mcs-icon pwg-icon-calendar-plus"><?php echo l10n('Post date');?>
</span>
        </label>
        <label>
          <input data-wid='album' class="filter-manager-controller album" type="checkbox"/>
          <span class="mcs-icon pwg-icon-album"><?php echo l10n('Album');?>
</span>
        </label>
        <label>
          <input data-wid='authors' class="filter-manager-controller author" type="checkbox"/>
          <span class="mcs-icon pwg-icon-user-edit"><?php echo l10n('Author');?>
</span>
        </label>
        <label>
          <input data-wid='added_by' class="filter-manager-controller added_by" type="checkbox"/>
          <span class="mcs-icon pwg-icon-user"><?php echo l10n('Added by');?>
</span>
        </label>
        <label>
          <input data-wid='filetypes' class="filter-manager-controller filetypes" type="checkbox"/>
          <span class="mcs-icon pwg-icon-file-image"><?php echo l10n('File type');?>
</span>
        </label>
      </div>

      <div class="filter-manager-actions">
        <div class="filter-cancel">
          <?php echo l10n('Cancel');?>

        </div>
        <div class="filter-validate">
          <i class="loading pwg-icon-spin6 animate-spin"></i>
          <span class="validate-text"><?php echo l10n('Validate');?>
</span>
        </div>
      </div>
    </div>
  </div>
  <div class="filter-manager">
    <span class="mcs-icon pwg-icon-selecters"></span><?php echo l10n('Choose filters');?>

  </div>
  <i class="filter-spinner pwg-icon-spin6 animate-spin"></i>

   <div class="filter filter-word">
    <span class="mcs-icon pwg-icon-search filter-icon"></span>
    <span class="search-words"></span>
    <span class="filter-arrow pwg-icon-up-open"></span>

    <div class="filter-form filter-word-form">
      <div class="filter-form-title pwg-icon-search"><?php echo l10n('Search for words');?>
</div>
      <div class="filter-actions"> 
        <span class="delete mcs-icon pwg-icon-trash"><?php echo l10n('Delete');?>
</span>
        <span class="clear mcs-icon pwg-icon-arrow-rotate-left"><?php echo l10n('Clear');?>
</span>
      </div>
            <div class="word-search-options">
        <label><input type="radio" name="mode" value="AND" checked> <?php echo l10n('Search for all terms');?>
</label>
        <label><input type="radio" name="mode" value="OR"> <?php echo l10n('Search for any term');?>
</label>
      </div>

      <input type="text" id="word-search" name="word">
      <span class="search-params-title"><?php echo l10n('Search in :');?>
</span>
      <div class="search-params"> 
        <div>
          <input type="checkbox" id="name" name="name">
          <label for="name"><?php echo l10n('Photo title');?>
</label>
        </div>
        <div>
          <input type="checkbox" id="file" name="file">
          <label for="file"><?php echo l10n('File name');?>
</label>
        </div>
        <div>
          <input type="checkbox" id="author" name="author">
          <label for="author"><?php echo l10n('Author');?>
</label>
        </div>
        <div>
          <input type="checkbox" id="comment" name="comment">
          <label for="comment"><?php echo l10n('Photo description');?>
</label>
        </div>
        <div>
          <input type="checkbox" id="tags" name="tags">
          <label for="tags"><?php echo l10n('Tags');?>
</label>
        </div>
        <div>
          <input type="checkbox" id="cat-title" name="cat-title">
          <label for="cat-title"><?php echo l10n('Album title');?>
</label>
        </div>
        <div>
          <input type="checkbox" id="cat-desc" name="cat-desc">
          <label for="cat-desc"><?php echo l10n('Album description');?>
</label>
        </div>
      </div>
      <div class="filter-validate">
        <i class="loading pwg-icon-spin6 animate-spin"></i>
        <span class="validate-text"><?php echo l10n('Validate');?>
</span>
      </div>
      </div>
    </div>
<?php if ((isset($_smarty_tpl->tpl_vars['TAGS']->value))) {?>
  <div class="filter filter-tag">
    <span class="mcs-icon pwg-icon-tag filter-icon"></span>
    <span class="search-words"></span>
    <span class="filter-arrow pwg-icon-up-open"></span>

    <div class="filter-form filter-tag-form">
      <div class="filter-form-title pwg-icon-tag"><?php echo l10n('Tag');?>
</div>
      <div class="filter-actions"> 
        <span class="delete mcs-icon pwg-icon-trash"><?php echo l10n('Delete');?>
</span>
        <span class="clear mcs-icon pwg-icon-arrow-rotate-left"><?php echo l10n('Clear');?>
</span>
      </div>
      <div class="search-params"> 
        <div>
          <input type="radio" id="tag-all" name="tag_mode" value="AND" checked>
          <label for="tag-all"><?php echo l10n('All tags');?>
</label>
        </div>
        <div>
          <input type="radio" id="tag-one" name="tag_mode" value="OR">
          <label for="tag-one"><?php echo l10n('Any tag');?>
</label>
        </div>
      </div>
      <div class="form-container">
        <select id="tag-search" placeholder="<?php echo l10n('Type in a search term');?>
" name="tags[]" multiple>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TAGS']->value, 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['tag']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
 (<?php echo l10n_dec('%d photo','%d photos',$_smarty_tpl->tpl_vars['tag']->value['counter']);?>
)</option>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <div class="filter-validate">
          <i class="loading pwg-icon-spin6 animate-spin"></i>
          <span class="validate-text"><?php echo l10n('Validate');?>
</span>
        </div>
      </div>
    </div>
  </div>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['DATE_POSTED']->value))) {?>
  <div class="filter filter-date_posted">
    <span class="mcs-icon pwg-icon-calendar-plus filter-icon"></span>
    <span class="search-words"><?php echo l10n('Post date');?>
</span>
    <span class="filter-arrow pwg-icon-up-open"></span>

    <div class="filter-form filter-date_posted-form">
      <div class="filter-form-title pwg-icon-calendar-plus"><?php echo l10n('Post date');?>
</div>
      <div class="filter-actions"> 
        <span class="delete mcs-icon pwg-icon-trash" title="<?php echo l10n('Delete');?>
"></span>
        <span class="clear mcs-icon pwg-icon-arrow-rotate-left" title="<?php echo l10n('Clear');?>
"></span>
      </div>

      <div class="date_posted-option-container">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DATE_POSTED']->value, 'date_posted', false, 'k');
$_smarty_tpl->tpl_vars['date_posted']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['date_posted']->value) {
$_smarty_tpl->tpl_vars['date_posted']->do_else = false;
?>
          <div class="date_posted-option">
            <input type="radio" id="date_posted-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" value=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 name="date_posted-period">
            <label for="date_posted-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
              <span class="mcs-icon pwg-icon-checkmark checked-icon"></span>
              <span class="date-period"><?php echo $_smarty_tpl->tpl_vars['date_posted']->value['label'];?>
</span>
              <span class="date_posted-badge"><?php echo $_smarty_tpl->tpl_vars['date_posted']->value['counter'];?>
</span>
            </label>
          </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
      <div class="filter-validate">
        <i class="loading pwg-icon-spin6 animate-spin"></i>
        <span class="validate-text"><?php echo l10n('Validate');?>
</span>
      </div>
    </div>
  </div>
<?php }?>
  <div class="filter filter-album">
    <span class="mcs-icon pwg-icon-album filter-icon"></span>
    <span class="search-words"></span>
    <span class="filter-arrow pwg-icon-up-open"></span>

    <div class="filter-form filter-album-form">
    <div class="filter-form-title pwg-icon-album"> <?php echo l10n('Album');?>
</div>
    <div class="filter-actions"> 
      <span class="delete mcs-icon pwg-icon-trash"><?php echo l10n('Delete');?>
</span>
      <span class="clear mcs-icon pwg-icon-arrow-rotate-left"><?php echo l10n('Clear');?>
</span>
    </div>
      <div class="search-params"> 
      </div>
      <div class="selected-categories-container">
      </div>
      <div class="add-album-button">
        <label class="head-button-2 icon-add-album">
          <p class="mcs-icon pwg-icon-plus-circled"><?php echo l10n('Add Album');?>
</p>
        </label>
      </div>
      <div class="search-sub-cats">
        <input type="checkbox" id="search-sub-cats" name="search-sub-cats">
        <label for="search-sub-cats"><?php echo l10n('Search in sub-albums');?>
</label>
      </div>
      <div class="filter-validate">
        <i class="loading pwg-icon-spin6 animate-spin"></i>
        <span class="validate-text"><?php echo l10n('Validate');?>
</span>
      </div>
    </div>
  </div>
  <?php ob_start();
echo l10n('Search in albums');
$_prefixVariable1 = ob_get_clean();
ob_start();
echo l10n('Search');
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:admin/themes/default/template/include/album_selector.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_prefixVariable1,'searchPlaceholder'=>$_prefixVariable2,'show_root_btn'=>false,'api_method'=>'pwg.categories.getList'), 0, false);
if ((isset($_smarty_tpl->tpl_vars['AUTHORS']->value))) {?>
  <div class="filter filter-authors">
    <span class="mcs-icon pwg-icon-user-edit filter-icon"></span>
    <span class="search-words"></span>
    <span class="filter-arrow pwg-icon-up-open"></span>
    
    <div class="filter-form filter-author-form">
      <div class="filter-form-title pwg-icon-user-edit"> <?php echo l10n('Author');?>
</div>
      <div class="filter-actions"> 
        <span class="delete mcs-icon pwg-icon-trash"><?php echo l10n('Delete');?>
</span>
        <span class="clear mcs-icon pwg-icon-arrow-rotate-left"><?php echo l10n('Clear');?>
</span>
      </div>
      <div class="form-container">
        <select id="authors" placeholder="<?php echo l10n('Type in a search term');?>
" name="authors[]" multiple>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['AUTHORS']->value, 'author');
$_smarty_tpl->tpl_vars['author']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
$_smarty_tpl->tpl_vars['author']->do_else = false;
?>
          <option value="<?php echo htmlspecialchars((string)strip_tags((string) $_smarty_tpl->tpl_vars['author']->value['author']), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo strip_tags((string) $_smarty_tpl->tpl_vars['author']->value['author']);?>
 (<?php echo l10n_dec('%d photo','%d photos',$_smarty_tpl->tpl_vars['author']->value['counter']);?>
)</option>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>

        <div class="filter-validate">
          <i class="loading pwg-icon-spin6 animate-spin"></i>
          <span class="validate-text"><?php echo l10n('Validate');?>
</span>
        </div>
      </div>
    </div>
  </div>
<?php }
if ((isset($_smarty_tpl->tpl_vars['ADDED_BY']->value))) {?>
  <div class="filter filter-added_by">
    <span class="mcs-icon pwg-icon-user filter-icon"></span>
    </span><span class="search-words"></span>
    <span class="filter-arrow pwg-icon-up-open"></span>

    <div class="filter-form filter-added_by-form">
      <div class="filter-form-title pwg-icon-user"><?php echo l10n('Added by');?>
</div>
      <div class="filter-actions"> 
        <span class="delete mcs-icon pwg-icon-trash tiptip" title="<?php echo l10n('Delete');?>
"></span>
        <span class="clear mcs-icon pwg-icon-arrow-rotate-left tiptip" title="<?php echo l10n('Clear');?>
"></span>
      </div>

      <div class="form-container">
        <div class="added_by-option-container">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ADDED_BY']->value, 'added_by', false, 'k');
$_smarty_tpl->tpl_vars['added_by']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['added_by']->value) {
$_smarty_tpl->tpl_vars['added_by']->do_else = false;
?>
          <div class="added_by-option">
              <input type="checkbox" id="added_by-<?php echo $_smarty_tpl->tpl_vars['added_by']->value['added_by_id'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['added_by']->value['added_by_id'];?>
">
              <label for="added_by-<?php echo $_smarty_tpl->tpl_vars['added_by']->value['added_by_id'];?>
">
                <span class="mcs-icon pwg-icon-checkmark checked-icon"></span>
                <span class="added_by-name"><?php echo strip_tags((string) $_smarty_tpl->tpl_vars['added_by']->value['added_by_name']);?>
</span>
                <span class="added_by-badge"><?php echo $_smarty_tpl->tpl_vars['added_by']->value['counter'];?>
</span>
              </label>
            </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
      </div>
      <div class="filter-validate">
        <i class="loading pwg-icon-spin6 animate-spin"></i>
        <span class="validate-text"><?php echo l10n('Validate');?>
</span>
      </div>
    </div>
  </div>
<?php }
if ((isset($_smarty_tpl->tpl_vars['FILETYPES']->value))) {?>
  <div class="filter filter-filetypes">
    <span class="mcs-icon pwg-icon-file-image filter-icon"></span>
    </span><span class="search-words"></span>
    <span class="filter-arrow pwg-icon-up-open"></span>

    <div class="filter-form filter-filetypes-form">
      <div class="filter-form-title pwg-icon-file-image"><?php echo l10n('File type');?>
</div>
      <div class="filter-actions"> 
        <span class="delete mcs-icon pwg-icon-trash tiptip" title="<?php echo l10n('Delete');?>
"></span>
        <span class="clear mcs-icon pwg-icon-arrow-rotate-left tiptip" title="<?php echo l10n('Clear');?>
"></span>
      </div>
      <div class="form-container">
        <div class="filetypes-option-container">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FILETYPES']->value, 'filetypes', false, 'k');
$_smarty_tpl->tpl_vars['filetypes']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['filetypes']->value) {
$_smarty_tpl->tpl_vars['filetypes']->do_else = false;
?>
          <div class="filetypes-option">
              <input type="checkbox" id="filetype-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
              <label for="filetype-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                <span class="mcs-icon pwg-icon-checkmark checked-icon"></span>
                <span class="ext-name"><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</span>
                <span class="ext-badge"><?php echo $_smarty_tpl->tpl_vars['filetypes']->value;?>
</span>
              </label>
            </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
      </div>
      <div class="filter-validate">
        <i class="loading pwg-icon-spin6 animate-spin"></i>
        <span class="validate-text"><?php echo l10n('Validate');?>
</span>
      </div>
    </div>
  </div>
<?php }?>
  <div>
    <span class="mcs-icon pwg-icon-arrow-rotate-left clear-all"><?php echo l10n('Empty filters');?>
</span>
  </div>
</div>

<?php if ((isset($_smarty_tpl->tpl_vars['TAGS_FOUND']->value)) || (isset($_smarty_tpl->tpl_vars['ALBUMS_FOUND']->value))) {?>
<div class="mcs-side-results">
<?php if ((isset($_smarty_tpl->tpl_vars['TAGS_FOUND']->value))) {?>
  <div class="mcs-tags-found">
    <span class="mcs-side-badge"><?php echo count($_smarty_tpl->tpl_vars['TAGS_FOUND']->value);?>
</span>
    <p><?php echo l10n('Tags found');?>
</p>
  </div>
<?php }
if ((isset($_smarty_tpl->tpl_vars['ALBUMS_FOUND']->value))) {?>
  <div class="mcs-albums-found">
    <span class="mcs-side-badge"><?php echo count($_smarty_tpl->tpl_vars['ALBUMS_FOUND']->value);?>
</span>
    <p><?php echo l10n('Albums found');?>
</p>
  </div>
<?php }?>
</div>

<?php if ((isset($_smarty_tpl->tpl_vars['TAGS_FOUND']->value))) {?>
<div class="tags-found-popin">
  <div class="tags-found-popin-container">
    <span class="pwg-icon-cancel tags-found-close"></span>
    <div class="mcs-popin-title"><?php echo l10n('Tags found');?>
</div>
    <div class="mcs-popin-desc"><?php echo l10n('Tags listed here match your search by word. Click on one to browse by tag.');?>
</div>
    <div class="tags-found-container">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TAGS_FOUND']->value, 'tag_path', false, 'k');
$_smarty_tpl->tpl_vars['tag_path']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['tag_path']->value) {
$_smarty_tpl->tpl_vars['tag_path']->do_else = false;
?>
      <div class="tag-item">
        <?php echo $_smarty_tpl->tpl_vars['tag_path']->value;?>

      </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
</div>
<?php }
if ((isset($_smarty_tpl->tpl_vars['ALBUMS_FOUND']->value))) {?>
<div class="albums-found-popin">
  <div class="albums-found-popin-container">
    <span class="pwg-icon-cancel albums-found-close"></span>
    <div class="mcs-popin-title"><?php echo l10n('Albums found');?>
</div>
    <div class="mcs-popin-desc"><?php echo l10n('Albums listed here match your search by word. Click on one to browse by album.');?>
</div>
    <div class="albums-found-container">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALBUMS_FOUND']->value, 'album_path', false, 'k');
$_smarty_tpl->tpl_vars['album_path']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['album_path']->value) {
$_smarty_tpl->tpl_vars['album_path']->do_else = false;
?>
        <div class="album-item">
          <?php echo $_smarty_tpl->tpl_vars['album_path']->value;?>

        </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
</div>
<?php }
}
}
}
