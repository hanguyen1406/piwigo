<?php
/*
Plugin Name: pdf2tab
Version: 12.0.a
Description: open pdf files in new tab instead of downloading it
Plugin URI: http://piwigo.org/ext/extension_view.php?eid=655
Author: Julien1311
Has Settings: true
*/

//Check whether we are indeed included by Piwigo.
if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

if (mobile_theme())
	return;

define('PDF2TAB_ABSOLUTE_PATH' , dirname(__FILE__).'/');
define('PDF2TAB_DIR' , basename(dirname(__FILE__)));
define('PDF2TAB_PATH' , PHPWG_PLUGINS_PATH.PDF2TAB_DIR.'/');
define('PDF2TAB_ADMIN' , get_root_url() . 'admin.php?page=plugin-'.PDF2TAB_DIR);

/* +-----------------------------------------------------------------------+
 * | Plugin code                                                          |
 * +-----------------------------------------------------------------------+ */

include_once(PDF2TAB_PATH.'include/thumbnails.inc.php');
include_once(PDF2TAB_PATH.'include/picture.inc.php');

add_event_handler('loc_begin_admin_page', 'pdf2tab_css');

function pdf2tab_css() {
	global $template, $conf;

	if (defined('IN_ADMIN') and IN_ADMIN)
		$template->append('head_elements', '<link rel="stylesheet" type="text/css" href="'.PDF2TAB_PATH.'css/admin.css">');
}
?>