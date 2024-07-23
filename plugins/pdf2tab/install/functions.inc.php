<?php
/**
 * create the entry in the config table
 * @param string default parameters
 */
function pdf2tab_install($config) {
	$query = 'INSERT INTO '.CONFIG_TABLE.' (param,value,comment) VALUES ("pdf2tab" ,"'.pwg_db_real_escape_string(serialize($config)).'", "PDF2Tab plugin parameters");';
	pwg_query($query);
}

/**
 * update the config entry if new default parameters have been added since last version
 */
function pdf2tab_update_db() {
	global $conf;
	include(dirname(__FILE__).'/config_default.inc.php');

	$config = array();
	if (isset($conf['pdf2tab']))
		$conf_pdf2tab = unserialize($conf['pdf2tab']);
	
	if (isset($conf_pdf2tab)) {
		foreach ($config_default as $key => $value) {
			if (isset($conf_pdf2tab[$key]))
				$config[$key] = $conf_pdf2tab[$key];
			else
				$config[$key] = $config_default[$key];
		}
		pdf2tab_delete_conf("pdf2tab");
		pdf2tab_install($config);
	} else {
		pdf2tab_install($config_default);
	}
}

/**
 * delete an entry from the config table
 * @param string the param entry to delete
 */
function pdf2tab_delete_conf($where) {
	$query = 'DELETE FROM ' . CONFIG_TABLE . ' WHERE (param="'.$where.'");';
	pwg_query($query);
}
?>