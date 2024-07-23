<?php
add_event_handler('loc_end_index_thumbnails', 'pdf2tab_thumbnails');

load_language('plugin.lang', PDF2TAB_PATH);

function pdf2tab_thumbnails($tpl_thumbnails_var) {
	global $template, $conf;
	
	$conf_pdf2tab = unserialize($conf['pdf2tab']);
	
	$template->set_prefilter('index_thumbnails', 'pdf2tab_add_tag_thumbnails');
	
	$template->assign('pdf2tab_supported_extensions', $conf_pdf2tab['extensions']);
	$template->set_filename('pdf2tab_template_thumbnails', PDF2TAB_ABSOLUTE_PATH.'template/thumbnails.tpl');
	$template->concat('PLUGIN_INDEX_CONTENT_END', $template->parse('pdf2tab_template_thumbnails', true));
	
	return $tpl_thumbnails_var;
}

function pdf2tab_add_tag_thumbnails($content) {
	global $template;

	$search = 'class="thumbnail"';
	
	$replacement = 'class="thumbnail" pdf2tab="{$thumbnail.path}"';
	$content= str_replace($search, $replacement, $content);

	return $content;
}
?>