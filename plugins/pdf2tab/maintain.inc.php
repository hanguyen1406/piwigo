<?php
if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

function plugin_install() {
	require_once(dirname(__FILE__).'/install/functions.inc.php');
	require(dirname(__FILE__).'/install/config_default.inc.php');

	pdf2tab_install($config_default);
}

function plugin_activate() {
	require_once(dirname(__FILE__).'/install/functions.inc.php');
	
	pdf2tab_update_db();
}

function plugin_uninstall() {
	require_once(dirname(__FILE__).'/install/functions.inc.php');

	pdf2tab_delete_conf("pdf2tab");
}

?>