<?php
// +-----------------------------------------------------------------------+
// | Title plugin for piwigo by TEMMII                                     |
// +-----------------------------------------------------------------------+
// | Copyright(C) 2011 - 2023 ddtddt             http://temmii.com/piwigo/ |
// +-----------------------------------------------------------------------+
// | This program is free software; you can redistribute it and/or modify  |
// | it under the terms of the GNU General Public License as published by  |
// | the Free Software Foundation                                          |
// |                                                                       |
// | This program is distributed in the hope that it will be useful, but   |
// | WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU      |
// | General Public License for more details.                              |
// |                                                                       |
// | You should have received a copy of the GNU General Public License     |
// | along with this program; if not, write to the Free Software           |
// | Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, |
// | USA.                                                                  |
// +-----------------------------------------------------------------------+

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');
global $template, $conf, $user, $pwg_loaded_plugins;
include_once(PHPWG_ROOT_PATH .'admin/include/tabsheet.class.php');
$my_base_url = PHPWG_ROOT_PATH.'admin.php?page=plugin-';

// +-----------------------------------------------------------------------+
// | Check Access and exit when user status is not ok                      |
// +-----------------------------------------------------------------------+
check_status(ACCESS_ADMINISTRATOR);

// Gestion des onglets
$page['tab'] = (isset($_GET['tab'])) ? $_GET['tab'] : 'permissions';
if ('album' == $page['tab']){
	check_input_parameter('cat_id', $_GET, false, PATTERN_ID);
	$cat_id = $_GET['cat_id'];
	$page['tab'] = 'title-album';
	$admin_album_base_url = get_root_url().'admin.php?page=album-'.$cat_id;
	$query = '
     SELECT *
	 FROM '.CATEGORIES_TABLE.'
	 WHERE id = '.$cat_id.'
	 ;';
	$category = pwg_db_fetch_assoc(pwg_query($query));
	if (!isset($category['id'])){
	 die("unknown album");
	}

	$tabsheet = new tabsheet();
	$tabsheet->set_id('album');
	$tabsheet->select('title-album');
	$tabsheet->assign();
    $template->assign(
      'titlegestalbum', array(
      'A' => 'A'
    ));
  if (isset($_GET['cat_id'])){
 	global $template, $prefixeTable, $pwg_loaded_plugins;
	$query = 'select id,title FROM ' . TITLE_ALBUM_TABLE . ' WHERE id = '.$_GET['cat_id'].';';
	$result = pwg_query($query);
	$row = pwg_db_fetch_assoc($result);
	if (isset($row['title'])){
	 $titleA=$row['title'];
	 $template->assign(
      array(
        'titleCONTENT' => $titleA,
     ));
	}else{
		$template->assign(
      array(
        'titleCONTENT' => "",
     ));
	}
	if (isset($pwg_loaded_plugins['ExtendedDescription'])){
	  $template->assign('useED',1);
    }else{
      $template->assign('useED',0);
    }

  }
  if (isset($_POST['submittitlealbum'])){
	$query = 'DELETE FROM ' . TITLE_ALBUM_TABLE . ' WHERE id = '.$_GET['cat_id'].';';
	$result = pwg_query($query);
	$q = 'INSERT INTO ' . $prefixeTable . 'title_album(id,title)VALUES ('.$_GET['cat_id'].',"'.$_POST['insertitleA'].'");';
    pwg_query($q);
	$template->assign(
      array(
        'titleCONTENT' => $_POST['insertitleA'],
    ));
	$page['infos'][] = l10n('Album updated successfully');
  }
   
}else{
if (!isset($_GET['tab']))
  $page['tab'] = 'plugtitle';
else
  $page['tab'] = $_GET['tab'];

$tabsheet = new tabsheet();
  $tabsheet->add('plugtitle', l10n('title_tab_plgtitle'), TITLE_ADMIN . '-plugtitle');
  if (isset($pwg_loaded_plugins['ContactForm'])){
	$tabsheet->add('contacttitle', l10n('Contact Title'), TITLE_ADMIN . '-contacttitle');
  }
  if (isset($pwg_loaded_plugins['AdditionalPages'])){
	$tabsheet->add('AdditionalPagestitle', l10n('Additional Pages Title'), TITLE_ADMIN . '-AdditionalPagestitle');
  }			   
$tabsheet->select($page['tab']);
$tabsheet->assign();
}
// Tab Title on specials pages
switch ($page['tab'])
{
  case 'plugtitle':

$titlepagelistT = array(
    l10n('title_select'),
	'----------------------',
    l10n('Home'),
    l10n('Best rated'),
    l10n('Most visited'),
	l10n('Recent pictures'),
	l10n('Recent categories'),
	l10n('Favorites'),
	l10n('Tags'),
	l10n('Comments'),
	l10n('About'),
	l10n('search'),
	l10n('Random pictures'),
	l10n('Notification'),
  );
  
$titlepagelist = array(
    '',
    '',
    'home',
    'best_rated',
    'most_visited',
	'recent_pics',
	'recent_cats',
	'favorites',
	'tags',
	'comments',
	'about',
	'search',
	'random',
	'notification',
  );
  
    $template->assign(
    'gestionA',
    array(
      ));

$template->assign('titlepagelist', $titlepagelist);
$template->assign('titlepagelistT', $titlepagelistT);

if (isset($_POST['subtitlespecialET']) and (!$_POST['titlelist'])==0)
	{
$lire=$_POST['titlelist'];
	$query = '
select id,page,title
  FROM ' . TITLE_TABLE . '
  WHERE page = \''.$lire.'\'
  ;';
$result = pwg_query($query);

$row = pwg_db_fetch_assoc($result);
$titlepage=$row['page'];
$titletitle=$row['title'];

  $selected2 = "";
  
  $template->assign(
    'title_edit',
    array(
      'VALUE' => $titlepage,
      'CONTENT' => $titletitle,
      'SELECTED' => $selected2
      ));
	}

if (isset($_POST['subtitlespecial']))
	{
	$query = '
UPDATE ' . TITLE_TABLE . '
  SET title= \''.$_POST['inser'].'\'
  WHERE page = \''.$_POST['invisible'].'\'
    ;';
$result = pwg_query($query);
	}

    break;
	
	case 'contacttitle':
	
	$template->assign('gestB',
    array('CTBASE' => $conf['contacttitle'],));

if (isset($_POST['submitct']))
	{
conf_update_param('contacttitle', $_POST['contacttitle']);
$template->assign(
    'gestB',
    array('CTBASE' => stripslashes($_POST['contacttitle']),));
	}
	
	break;

	case 'AdditionalPagestitle':
if (!defined('TITLE_AP_TABLE')) define('TITLE_AP_TABLE', $prefixeTable.'title_ap');
$groups = array();
$query = '
select id,title
  FROM ' . ADD_PAGES_TABLE . '
  ORDER BY id ASC;';
$result = pwg_query($query);
	
	while ($row = pwg_db_fetch_assoc($result))
	{
  $groups[$row['id']] = $row['id'].' : '.$row['title'];
	}
	
	$selected = 0;
	$options[] = l10n('Choose the page');
	$options['a'] = '----------------------';
	
foreach($groups as $listid => $listid2)
	{
    $options[$listid] = $listid2;
	}
  $template->assign(
    'gestionC',
    array(
	  'OPTIONS' => $options,
      'SELECTED' => $selected
      ));
	
	if (isset($_POST['submitchoixAP'])and is_numeric($_POST['APchoix']) and (!$_POST['APchoix'])==0)
	{
$lire=$_POST['APchoix'];
	$query = '
select id,title
  FROM ' . TITLE_AP_TABLE . '
  WHERE id = \''.$lire.'\'
  ;';
$result = pwg_query($query);
$row = pwg_db_fetch_assoc($result);
$idap=$row['id'];
$titleap=$row['title'];

$query = '
select id,title
  FROM ' . ADD_PAGES_TABLE . '
  WHERE id = \''.$lire.'\'
    ;';
$result = pwg_query($query);
$row = pwg_db_fetch_assoc($result);
$idap=$row['id'];
$nameap=$row['title'];

  $selected3 = 0;
  
  $template->assign(
    'ap_edit',
    array(
      'VALUE' => $idap,
	  'VALUEN' => $nameap,
      'CONTENT' => $titleap,
      'SELECTED' => $selected3
      ));
	}

if (isset($_POST['submitinsapt']))
	{
	$query = '
DELETE 
  FROM ' . TITLE_AP_TABLE . '
  WHERE id = \''.$_POST['invisible'].'\'
  ;';
$result = pwg_query($query);
	$q = '
INSERT INTO ' . $prefixeTable . 'title_ap(id,title)VALUES ('.$_POST['invisible'].',"'.$_POST['insertitle'].'");';
    pwg_query($q);
	}
	
	break;
	
} 

$template->set_filenames(array('plugin_admin_content' => dirname(__FILE__) . '/admin.tpl')); 
$template->assign_var_from_handle('ADMIN_CONTENT', 'plugin_admin_content');
?>