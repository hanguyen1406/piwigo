<?php
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

class title_maintain extends PluginMaintain
{
  function install($plugin_version, &$errors=array())
  {
    global $conf, $prefixeTable;

    $q = 'CREATE TABLE IF NOT EXISTS ' . $prefixeTable . 'title(
id SMALLINT( 5 ) UNSIGNED NOT NULL ,
page VARCHAR( 255 ) NOT NULL ,
title lONGTEXT NOT NULL ,
PRIMARY KEY (id))DEFAULT CHARSET=utf8;';
    pwg_query($q);
	
	$q = '
INSERT INTO ' . $prefixeTable . 'title(id,page,title)VALUES (1,"home","");';
    pwg_query($q);
	$q = '
INSERT INTO ' . $prefixeTable . 'title(id,page,title)VALUES (2,"best_rated","");';
    pwg_query($q);
		$q = '
INSERT INTO ' . $prefixeTable . 'title(id,page,title)VALUES (3,"most_visited","");';
    pwg_query($q);
		$q = '
INSERT INTO ' . $prefixeTable . 'title(id,page,title)VALUES (4,"recent_pics","");';
    pwg_query($q);
		$q = '
INSERT INTO ' . $prefixeTable . 'title(id,page,title)VALUES (5,"recent_cats","");';
    pwg_query($q);
		$q = '
INSERT INTO ' . $prefixeTable . 'title(id,page,title)VALUES (6,"favorites","");';
    pwg_query($q);	
		$q = '
INSERT INTO ' . $prefixeTable . 'title(id,page,title)VALUES (7,"tags","");';
    pwg_query($q);
		$q = '
INSERT INTO ' . $prefixeTable . 'title(id,page,title)VALUES (8,"comments","");';
    pwg_query($q);
		$q = '
INSERT INTO ' . $prefixeTable . 'title(id,page,title)VALUES (9,"about","");';
    pwg_query($q);
		$q = '
INSERT INTO ' . $prefixeTable . 'title(id,page,title)VALUES (10,"search","");';
    pwg_query($q);
		$q = '
INSERT INTO ' . $prefixeTable . 'title(id,page,title)VALUES (11,"random","");';
    pwg_query($q);
		$q = '
INSERT INTO ' . $prefixeTable . 'title(id,page,title)VALUES (12,"notification","");';
    pwg_query($q);	
	
if (!defined('TITLE_PHOTO_TABLE')) define('TITLE_PHOTO_TABLE', $prefixeTable.'title_photo');
	$query = "CREATE TABLE IF NOT EXISTS ". TITLE_PHOTO_TABLE ." (
id MEDIUMINT(8) UNSIGNED NOT NULL ,
title VARCHAR( 255 ) NOT NULL ,
PRIMARY KEY (id))DEFAULT CHARSET=utf8;";
	$result = pwg_query($query);

if (!defined('TITLE_ALBUM_TABLE')) define('TITLE_ALBUM_TABLE', $prefixeTable.'title_album');	
	$query = "CREATE TABLE IF NOT EXISTS ". TITLE_ALBUM_TABLE ." (
id MEDIUMINT(8) UNSIGNED NOT NULL ,
title VARCHAR( 255 ) NOT NULL ,
PRIMARY KEY (id))DEFAULT CHARSET=utf8;";
	$result = pwg_query($query);
	
  if (empty($conf['contacttitle']))
  {
	conf_update_param('contacttitle', '');
  }
  
  	if (!defined('TITLE_AP_TABLE')) define('TITLE_AP_TABLE', $prefixeTable.'title_ap');	
	$query = "CREATE TABLE IF NOT EXISTS ". TITLE_AP_TABLE ." (
id SMALLINT( 5 ) UNSIGNED NOT NULL ,
title VARCHAR( 255 ) NOT NULL ,
PRIMARY KEY (id))DEFAULT CHARSET=utf8;";
	$result = pwg_query($query);
  }

  function update($old_version, $new_version, &$errors=array())
  {
	//$this->install($new_version, $errors);
	global $conf, $prefixeTable;
	
if (!defined('TITLE_PHOTO_TABLE')) define('TITLE_PHOTO_TABLE', $prefixeTable.'title_photo');
$row = pwg_db_fetch_assoc(pwg_query('SHOW COLUMNS FROM `'.TITLE_PHOTO_TABLE.'` LIKE "id";'));
if (!preg_match('/^mediumint/i', $row['Type'])){
$q = 'ALTER TABLE ' . TITLE_PHOTO_TABLE . ' CHANGE `id` `id` MEDIUMINT(8) UNSIGNED NOT NULL ';
pwg_query($q);
}
	
  if (!isset($conf['contacttitle']))
  {
	conf_update_param('contacttitle', '');
  }
  
  	if (!defined('TITLE_AP_TABLE')) define('TITLE_AP_TABLE', $prefixeTable.'title_ap');	
	$query = "CREATE TABLE IF NOT EXISTS ". TITLE_AP_TABLE ." (
id SMALLINT( 5 ) UNSIGNED NOT NULL ,
title VARCHAR( 255 ) NOT NULL ,
PRIMARY KEY (id))DEFAULT CHARSET=utf8;";
	$result = pwg_query($query);
	
  }

  function uninstall()
  {
	global $prefixeTable;

	$q = 'DROP TABLE ' . $prefixeTable . 'title;';
    pwg_query($q);
	
	$q = 'DROP TABLE ' . $prefixeTable . 'title_photo;';
    pwg_query($q);

	$q = 'DROP TABLE ' . $prefixeTable . 'title_album;';
    pwg_query($q);
	
	$q = 'DROP TABLE ' . $prefixeTable . 'title_ap;';
    pwg_query($q);
	
	conf_delete_param('contacttitle');

  }
}
