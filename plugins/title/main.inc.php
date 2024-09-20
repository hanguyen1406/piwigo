<?php
/*
Plugin Name: Title
Version: 14.0.c
Description: Allows you to customize tag < title > of different Piwigo page
Plugin URI: http://piwigo.org/ext/extension_view.php?eid=507
Author: ddtddt
Author URI: http://temmii.com/piwigo/
Has Settings: true
*/

// +-----------------------------------------------------------------------+
// | Title plugin for piwigo by TEMMII                                     |
// +-----------------------------------------------------------------------+
// | Copyright(C) 2011 - 2024 ddtddt             http://temmii.com/piwigo/ |
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

global $prefixeTable, $template;

define('TITLE_DIR' , basename(dirname(__FILE__)));
define('TITLE_PATH' , PHPWG_PLUGINS_PATH . TITLE_DIR . '/');
if (!defined('TITLE_TABLE')) define('TITLE_TABLE' , $prefixeTable . 'title');
if (!defined('TITLE_PHOTO_TABLE')) define('TITLE_PHOTO_TABLE' , $prefixeTable . 'title_photo');
if (!defined('TITLE_ALBUM_TABLE')) define('TITLE_ALBUM_TABLE' , $prefixeTable . 'title_album');
define('TITLE_ADMIN',get_root_url().'admin.php?page=plugin-'.TITLE_DIR);

add_event_handler('loading_lang', 'title_loading_lang');	  
function title_loading_lang(){
  load_language('plugin.lang', TITLE_PATH);
}

//prefiltre for change <title>
add_event_handler('loc_begin_page_header', 'plug_Title', 56 );

function plug_Title(){
  global $template, $pwg_loaded_plugins;
  $template->set_prefilter('header', 'plug_TitleP');
  if (isset($pwg_loaded_plugins['ExtendedDescription'])){
	add_event_handler('AP_render_content', 'get_user_language_desc');
  }  
}

function plug_TitleP($content){
  $search = '#<title>.*?</title>#';
  $replacement = '<title>{$PERSO_TITLE}</title>
  ';
  return preg_replace($search, $replacement, $content);
}

// Plugin for admin
if (script_basename() == 'admin'){
  include_once(dirname(__FILE__).'/initadmin.php');
}

// no empty !
add_event_handler('loc_begin_page_header', 'plugTitle', 61 );
function plugTitle(){
  global $template, $conf;
  $titlegen = & $conf['gallery_title'];
  if (!empty($titlegen)){				
	$template->assign('PERSO_TITLE', $titlegen);
  }
} 

//use title on photo page
add_event_handler('loc_begin_page_header', 'TitlePhoto', 76 );
function TitlePhoto(){
  global $template, $page;
  if ( !empty($page['image_id']) ){
    $query = '
select id,title
  FROM ' . TITLE_PHOTO_TABLE . '
  WHERE id = \''.$page['image_id'].'\'
  ;';
$result = pwg_query($query);
$row = pwg_db_fetch_assoc($result);
 if(isset($row['title'])){$titleP=$row['title'];
  $titlePED=trigger_change('AP_render_content', $titleP);
	if (!empty($titlePED)){
	  $template->assign('PERSO_TITLE', $titlePED);
	}
  }
 }
}

// use title on album page
add_event_handler('loc_begin_page_header', 'Titlealbum', 71 );
function Titlealbum(){
  global $template, $page;
  if (!empty($page['category']['id']) ){
    $query = '
select id,title
  FROM ' . TITLE_ALBUM_TABLE . '
  WHERE id = \''.$page['category']['id'].'\'
  ;';
$result = pwg_query($query);
$row = pwg_db_fetch_assoc($result);
 if(isset($row['title'])){$titleA=$row['title'];
   $titleAED=trigger_change('AP_render_content', $titleA);
	if (!empty($titleAED)){
				$template->assign('PERSO_TITLE', $titleAED);
	}
  }
 }
}

//other pages
add_event_handler('loc_begin_page_header', 'Titleother', 66 );
function Titleother(){
  global $template, $page, $conf, $pwg_loaded_plugins;
  $query = '
select id,page,title
  FROM ' . TITLE_TABLE . '
  WHERE page IN (\'home\', \'best_rated\', \'most_visited\', \'recent_pics\', \'recent_cats\', \'favorites\', \'tags\', \'comments\', \'about\', \'search\', \'random\', \'notification\')
  
  ;';
  $result = pwg_query($query);
  $titlespecial = array();
  while ($row = pwg_db_fetch_assoc($result)){
	$titlespecial[$row['page']] = $row['title'];
	$titlespecialED[$row['page']]=trigger_change('AP_render_content', $titlespecial[$row['page']]);
  }
  if (isset($page['section']) and $page['section'] == 'categories' and empty($page['category']['id']) and !empty($titlespecialED['home'])){
	$template->assign('PERSO_TITLE', $titlespecialED['home']);
  }
  if (isset($page['section']) and $page['section'] == 'best_rated' and !empty($titlespecialED['best_rated'])){
	$template->assign('PERSO_TITLE', $titlespecialED['best_rated']);
  }
  if (isset($page['section']) and $page['section'] == 'most_visited' and !empty($titlespecialED['most_visited'])){
	$template->assign('PERSO_TITLE', $titlespecialED['most_visited']);
  }
  if (isset($page['section']) and $page['section'] == 'recent_pics' and !empty($titlespecialED['recent_pics'])){
	$template->assign('PERSO_TITLE', $titlespecialED['recent_pics']);
  }
  if (isset($page['section']) and $page['section'] == 'recent_cats' and !empty($titlespecialED['recent_cats'])){
	$template->assign('PERSO_TITLE', $titlespecialED['recent_cats']);
  }
  if (isset($page['section']) and $page['section'] == 'favorites' and !empty($titlespecialED['favorites'])){
	$template->assign('PERSO_TITLE', $titlespecialED['favorites']);
  }
  if (script_basename() == 'tags' and !empty($titlespecialED['tags'])){
	$template->assign('PERSO_TITLE', $titlespecialED['tags']);
  }
  if (script_basename() == 'comments' and !empty($titlespecialED['comments'])){
	$template->assign('PERSO_TITLE', $titlespecialED['comments']);
  }
  if (script_basename() == 'about' and !empty($titlespecialED['about'])){
	$template->assign('PERSO_TITLE', $titlespecialED['about']);
  }
  if (script_basename() == 'search' and !empty($titlespecialED['search'])){
	$template->assign('PERSO_TITLE', $titlespecialED['search']);
  }
  if (isset($page['section']) and $page['section'] == 'list' and !empty($titlespecialED['random'])){
	$template->assign('PERSO_TITLE', $titlespecialED['random']);
  }
  if (script_basename() == 'notification' and !empty($titlespecialED['notification'])){
	$template->assign('PERSO_TITLE', $titlespecialED['notification']);
  }
  if (isset($pwg_loaded_plugins['ContactForm'])){
  	$titlespecialED['contact']=trigger_change('AP_render_content', $conf['contacttitle']);
	if (isset($page['section']) and $page['section'] == 'contact' and !empty($titlespecialED['contact'])){
	  $template->assign('PERSO_TITLE', $titlespecialED['contact']);
	}
  }
  if (isset($pwg_loaded_plugins['AdditionalPages'])){	
	global $prefixeTable;
    if ( !empty($page['additional_page']['id']) ){
		if (!defined('TITLE_AP_TABLE')) define('TITLE_AP_TABLE', $prefixeTable.'title_ap');	
	  $lire=$page['additional_page']['id'];
	  $query = '
  select id,title
  FROM ' . TITLE_AP_TABLE . '
  WHERE id = \''.$lire.'\'
  ;';
	  $result = pwg_query($query);
	  $row = pwg_db_fetch_assoc($result);
	  if(isset($row['title'])){
		$titleap=$row['title'];
	    $titlespecialED['AdditionalPages']=trigger_change('AP_render_content', $titleap);	
	  }
	}
	if (isset($page['section']) and $page['section'] == 'additional_page' and !empty($titlespecialED['AdditionalPages'])){
	  $template->assign('PERSO_TITLE', $titlespecialED['AdditionalPages']);
	}
  }
}

//adminmenu
add_event_handler('tabsheet_before_select', 'titlealbum_tabsheet_before_select', EVENT_HANDLER_PRIORITY_NEUTRAL, 2);
function titlealbum_tabsheet_before_select($sheets, $id){
 if ($id == 'album'){
	$sheets['titlealbum'] = array(
     'caption' => '<span class="icon-book"></span>'.l10n('Titles'),
     'url' => get_root_url().'admin.php?page=plugin-title-album&amp;cat_id='.$_GET['cat_id'],
    );
  }
  return $sheets;
}
 
?>