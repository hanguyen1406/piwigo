<?php
//Initialization
$conf_pdf2tab = unserialize($conf['pdf2tab']);

load_language('plugin.lang', PDF2TAB_PATH);

//Save config
if (isset($_POST['submit'])) { 
	$conf_pdf2tab['extensions'] = $_POST['pdf2tab_extensions'];
	$conf_pdf2tab['extensions'] = explode(',', $conf_pdf2tab['extensions']);
	
	//Save
	conf_update_param('pdf2tab', serialize($conf_pdf2tab));
	array_push($page['infos'], l10n('Information data registered in database'));
}

//Parameters of the template
if ($conf_pdf2tab['extensions'][0]=='')
		$conf_pdf2tab['extensions'] = null;
$template->assign('pdf2tab_extensions',$conf_pdf2tab['extensions']);

//Add our template to the global template
$template->set_filenames(
	array(
		'plugin_admin_content_general' => dirname(__FILE__).'/admin_config.tpl'
	)
);
 
//Assign the template contents to ADMIN_CONTENT
$template->assign_var_from_handle('ADMIN_CONTENT', 'plugin_admin_content_general');
?>