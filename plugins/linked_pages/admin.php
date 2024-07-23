<?php
if(!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');
 
global $template, $page, $conf;

if (strpos($_GET['tab'], 'album-') !== false)
{
  $_GET['cat_id'] = substr($_GET['tab'], 6);
}
else
{
  die('Hacking attempt!');
}

// +-----------------------------------------------------------------------+
// | Basic checks                                                          |
// +-----------------------------------------------------------------------+
check_status(ACCESS_ADMINISTRATOR);

check_input_parameter('cat_id', $_GET, false, PATTERN_ID);

$admin_album_base_url = get_root_url().'admin.php?page=album-'.$_GET['cat_id'];
$self_url = LINKEDPAGES_ADMIN.'-album-'.$_GET['cat_id'];


// +-----------------------------------------------------------------------+
// | Init                                                                  |
// +-----------------------------------------------------------------------+
$query = '
SELECT *
  FROM '.CATEGORIES_TABLE.'
  WHERE id = '.$_GET['cat_id'].'
;';
$category = pwg_db_fetch_assoc(pwg_query($query));

if (!isset($category['id']))
{
  die("unknown album");
}

include_once(PHPWG_ROOT_PATH.'admin/include/tabsheet.class.php');
$tabsheet = new tabsheet();
$tabsheet->set_id('album');
$tabsheet->select('linked_pages');
$tabsheet->assign();

$page['active_menu'] = get_active_menu('album');

load_language('plugin.lang', AP_PATH);
$languages = get_languages();


// +-----------------------------------------------------------------------+
// | Save pages                                                            |
// +-----------------------------------------------------------------------+
if (isset($_POST['save_pages']))
{
  $query = '
DELETE FROM '.LINKEDPAGES_TABLE.'
  WHERE category_id = '.$_GET['cat_id'].'
;';
  pwg_query($query);
  
  if (isset($_POST['position']))
  {
    $inserts = array();
    foreach ($_POST['position'] as $page_id => $pos)
    {
      array_push($inserts, array(
        'category_id' => $_GET['cat_id'],
        'page_id' => $page_id,
        'pos' => $pos,
        ));
    }
    
    mass_inserts(
      LINKEDPAGES_TABLE, 
      array('category_id','page_id','pos'), 
      $inserts
      );
  }
  
  array_push($page['infos'], l10n('Information data registered in database'));
}

// +-----------------------------------------------------------------------+
// | Get pages                                                             |
// +-----------------------------------------------------------------------+
$query = '
SELECT
    lp.*,
    ap.lang,
    ap.title,
    ap.standalone,
    ap.permalink
  FROM '.LINKEDPAGES_TABLE.' AS lp
    INNER JOIN '.ADD_PAGES_TABLE.' AS ap
    ON lp.page_id = ap.id
  WHERE category_id = '.$_GET['cat_id'].'
  ORDER BY lp.pos
';
$result = pwg_query($query);

$cat_pages = array();
while ($row = pwg_db_fetch_assoc($result))
{
  $row['U_PAGE'] = make_index_url(array('section'=>'page')).'/'.(isset($row['permalink']) ? $row['permalink'] : $row['page_id']);
  $row['title'] = trigger_change('AP_render_title', $row['title']);
  $row['language'] = @$languages[$row['lang']];
  $cat_pages[$row['page_id']] = $row;
}
$template->assign('cat_pages', $cat_pages);

$query = '
SELECT
    id,
    lang,
    title,
    standalone,
    permalink
  FROM '.ADD_PAGES_TABLE.'
  '.(!empty($conf['AP']['homepage']) ? 'WHERE id != '.$conf['AP']['homepage'] : null).'
  ORDER BY title ASC
;';
$result = pwg_query($query);

while ($row = pwg_db_fetch_assoc($result))
{
  if (array_key_exists($row['id'], $cat_pages))
  {
    $row['disabled'] = 'disabled="disabled"';
  }
  $row['U_PAGE'] = make_index_url(array('section'=>'page')).'/'.(isset($row['permalink']) ? $row['permalink'] : $row['id']);
  $row['title'] = trigger_change('AP_render_title', $row['title']);
  $row['language'] = @$languages[$row['lang']];
  $template->append('pages', $row);
}


// +-----------------------------------------------------------------------+
// | Template                                                             |
// +-----------------------------------------------------------------------+
$template->assign(array(
  'F_ACTION' => $self_url,
  'CATEGORIES_NAV' => get_cat_display_name_cache(
    $category['uppercats'],
    LINKEDPAGES_ADMIN.'-album-'
    ),
  'LINKEDPAGES_PATH'=> get_root_url() . LINKEDPAGES_PATH,
  'AP_ADMIN' => get_root_url() . 'admin.php?page=plugin-' . AP_DIR
  ));
 
$template->set_filename('linked_pages_content', realpath(LINKEDPAGES_PATH . 'template/admin_album.tpl'));
$template->assign_var_from_handle('ADMIN_CONTENT', 'linked_pages_content');

?>