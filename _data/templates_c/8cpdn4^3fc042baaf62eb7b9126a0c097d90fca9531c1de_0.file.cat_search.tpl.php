<?php
/* Smarty version 4.3.1, created on 2024-06-22 14:58:24
  from '/var/www/html/piwigo/admin/themes/default/template/cat_search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676e6906bbe01_02481694',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fc042baaf62eb7b9126a0c097d90fca9531c1de' => 
    array (
      0 => '/var/www/html/piwigo/admin/themes/default/template/cat_search.tpl',
      1 => 1702327276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6676e6906bbe01_02481694 (Smarty_Internal_Template $_smarty_tpl) {
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
$(document).ready(() => {
  $("h1").append("<span class='badge-number'>"+<?php echo $_smarty_tpl->tpl_vars['nb_cats']->value;?>
+"</span>");
});
var data = <?php echo json_encode($_smarty_tpl->tpl_vars['data_cat']->value);?>
;
/* 
  Here data is an associative array id => category under this form 
  [0] : name
  [1] : array of id, path to find this album (root to album)
  [2] : 1 = private or 0 = public
*/

// Numeric array of all categories
var categories = Object.values(data);

const RESULT_LIMIT = 100;

var str_albums_found = '<?php echo l10n("<b>%d</b> albums found");?>
';
var str_album_found = '<?php echo l10n("<b>1</b> album found");?>
';
var str_result_limit = '<?php echo strtr((string)l10n("<b>%d+</b> albums found, try to refine the search"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';


var editLink = "admin.php?page=album-";
var colors = ["icon-red", "icon-blue", "icon-yellow", "icon-purple", "icon-green"];

$(".limit-album-reached").hide();

$('.search-input').on('input', () => {
  updateSearch();
})

// Update the page according to the search field
function updateSearch () {
  string = $('.search-input').val();
  $('.search-album-result').html("");
  $('.search-album-noresult').hide();
  $(".limit-album-reached").hide();
  if (string == '') {
    // help button unnecessary so do not show
    // $('.search-album-help').show();
    $('.search-album-ghost').show();
    $('.search-album-num-result').hide();
  } else {
    $('.search-album-ghost').hide();
    $('.search-album-help').hide();
    $('.search-album-num-result').show();

    nbResult = 0;
    categories.forEach((c) => {
      if (c[0].toString().toLowerCase().search(string.toLowerCase()) != -1 && nbResult < RESULT_LIMIT) {
        nbResult++;
        addAlbumResult(c, nbResult);
      }
    })

    if (nbResult != 1) {
      if (nbResult >= RESULT_LIMIT) {
        $('.search-album-num-result').html(str_result_limit.replace('%d', nbResult));
      } else {
        $('.search-album-num-result').html(str_albums_found.replace('%d', nbResult));
      }
    } else {
      $('.search-album-num-result').html(str_album_found);
    }

    if (nbResult != 0) {
      resultAppear($('.search-album-result .search-album-elem').first());
    } else {
      $('.search-album-noresult').show();
    }
  }
}

// Add an album as a result in the page
function addAlbumResult (cat, nbResult) {
  id = cat[1][cat[1].length - 1];
  template = $('.search-album-elem-template').html();
  newCatNode = $(template);

  hasChildren = false;
  categories.forEach((c) => {
    for (let i = 0; i < c[1].length - 1; i++) {
      if (c[1][i] == id) {
        hasChildren = true;
      }
    }
  })

  if (hasChildren) {
    newCatNode.find('.search-album-icon').addClass('icon-sitemap');
  } else {
    newCatNode.find('.search-album-icon').addClass('icon-folder-open');
  }

  colorId = id%5;
  newCatNode.find('.search-album-icon').addClass(colors[colorId]);

  newCatNode.find('.search-album-name').html(getHtmlPath(cat));

  href = "admin.php?page=album-" + id;
  newCatNode.find('.search-album-edit').attr('href', href);

  $('.search-album-result').append(newCatNode);

  if(nbResult >= RESULT_LIMIT) {
    $(".limit-album-reached").show(1000);
    $('.limit-album-reached').html(str_result_limit.replace('%d', nbResult));
  }
}

// Get the path "PARENT / parent / album" with link to the edition of all albums
function getHtmlPath (cat) {
  html = '';
  for (let i = 0; i < cat[1].length - 1; i++) {
    id_bis = cat[1][i];
    c = data[id_bis];
    html += '<a href="' + editLink + id_bis + '">' + c[0] + '</a> <b>/</b> '
  }
  html += '<a href="' + editLink + cat[1][cat[1].length - 1] + '">' + cat[0] + '</a>';

  return html
}

// Make the results appear one after one [and limit results to 100]
function resultAppear(result) {
  result.fadeIn();
  if (result.next().length != 0) {
    setTimeout(() => {resultAppear(result.next().first())}, 50);
  }
}

updateSearch();
$('.search-input').focus();

<?php $_block_repeat=false;
echo $_block_plugin1->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<div class="search-album">
  <div class="search-album-cont">
    <div class="search-album-label"><?php echo l10n('Search albums');?>
</div>
    <div class="search-album-input-container" style="position:relative">
      <span class="icon-search search-icon"></span>
      <span class="icon-cancel search-cancel"></span>
      <input class='search-input' type="text" placeholder="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['placeholder']->value, ENT_QUOTES, 'UTF-8', true);?>
">
    </div>
    <span class="search-album-help icon-help-circled" title="<?php echo l10n('Enter a term to search for album');?>
"></span>
    <span class="search-album-num-result"></span>
  </div>
</div>

<div class="search-album-ghost">
  <span><?php echo l10n('No research in progress');?>
</span>
</div>

<div class="search-album-elem-template" style="display:none">
  <div class="search-album-elem" style="display:none">
    <span class='search-album-icon'></span>
    <p class='search-album-name'></p>
    <div class="search-album-action-cont">
      <div class="search-album-action">
        <a class="icon-pencil search-album-edit"><?php echo l10n('Edit album');?>
</a>
      </div>
    </div>
  </div>
</div>

<div class="search-album-result">

</div>
<div class="search-album-elem limit-album-reached"></div>

<div class="search-album-noresult">
  <?php echo l10n('No albums found');?>

</div>

<style>
.limit-album-reached {
  display: flex;
  justify-content: center;
  align-items: center;
}
</style>

<?php }
}
