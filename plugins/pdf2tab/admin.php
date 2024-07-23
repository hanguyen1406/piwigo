<?php
//Chech whether we are indeed included by Piwigo.
if (!defined('PDF2TAB_PATH')) die('Hacking attempt!');

//Load globals
global $conf;

//Load translation files
load_language('plugin.lang', PDF2TAB_PATH);

//Check access and exit when user status is not ok
check_status(ACCESS_ADMINISTRATOR);

include_once(PDF2TAB_PATH.'admin/admin_config.php');
?>