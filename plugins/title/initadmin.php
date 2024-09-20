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

//add prefiltre photo
add_event_handler('loc_begin_admin', 'titlePadminf',60);
add_event_handler('loc_begin_admin_page', 'titlePadminA',60);

function titlePadminf(){
  global $template;
  $template->set_prefilter('picture_modify', 'titlePadminfT');
}

function titlePadminfT($content){
  $search = '#<input type="hidden" name="pwg_token"#';
  $replacement = '
    <p>
      <strong>{\'title_photo\'|@translate}</strong>
      <br>
      <textarea rows="4" cols="80" {if $useED==1}placeholder="{\'Use Extended Description tags...\'|@translate}"{/if} name="insertitleP" id="insertitleP" class="insertitleP">{$titleICONTENT}</textarea>
    </p>
	
<input type="hidden" name="pwg_token"';

  return preg_replace($search, $replacement, $content);
}
 
function titlePadminA(){
  if (isset($_GET['image_id'])){
	global $template, $prefixeTable, $pwg_loaded_plugins;
	$query = 'select id,title FROM ' . TITLE_PHOTO_TABLE . ' WHERE id = '.$_GET['image_id'].';';
	$result = pwg_query($query);
	$row = pwg_db_fetch_assoc($result);
	if (isset($row['title'])){
     $titleP=$row['title'];
	 $template->assign(
      array(
        'titleICONTENT' => $titleP,
     ));
	}else{
	 $template->assign(
      array(
        'titleICONTENT' => "",
     ));		
	}
	if (isset($pwg_loaded_plugins['ExtendedDescription'])){
	  $template->assign('useED',1);
    }else{
      $template->assign('useED',0);
    }

  }
  if (isset($_POST['insertitleP'])){
	$query = 'DELETE FROM ' . TITLE_PHOTO_TABLE . ' WHERE id = '.$_GET['image_id'].';';
	$result = pwg_query($query);
	$q = 'INSERT INTO ' . $prefixeTable . 'title_photo(id,title)VALUES ('.$_GET['image_id'].',"'.$_POST['insertitleP'].'");';
	pwg_query($q);
	$template->assign(
	  array(
		'titleICONTENT' => $_POST['insertitleP'],
	));
  }
}
/*	
//add prefiltre album
add_event_handler('loc_begin_admin', 'titleAadminf', 60);
add_event_handler('loc_begin_admin_page', 'titleAadminA', 60);

function titleAadminf()
 {
	global $template;
	$template->set_prefilter('album_properties', 'titleAadminfT');
 }

function titleAadminfT($content)
 {
  $search = '#<p style="margin:0">#';
  
  $replacement = '
    <p>
      <strong>{\'title_album\'|@translate}</strong>
      <br>
      <textarea rows="4" cols="80" {if $useED==1}placeholder="{\'Use Extended Description tags...\'|@translate}"{/if} name="insertitleA" id="insertitleA" class="insertitleA">{$titleCONTENT}</textarea>
    </p>	
	
	
<p style="margin:0">';

  return preg_replace($search, $replacement, $content);
 }

function titleAadminA(){ 
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
  if (isset($_POST['insertitleA'])){
	$query = 'DELETE FROM ' . TITLE_ALBUM_TABLE . ' WHERE id = '.$_GET['cat_id'].';';
	$result = pwg_query($query);
	$q = 'INSERT INTO ' . $prefixeTable . 'title_album(id,title)VALUES ('.$_GET['cat_id'].',"'.$_POST['insertitleA'].'");';
    pwg_query($q);
	$template->assign(
      array(
        'titleCONTENT' => $_POST['insertitleA'],
    ));
  }
}
*/
?>