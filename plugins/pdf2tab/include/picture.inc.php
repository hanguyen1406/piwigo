<?php
add_event_handler('render_element_content','pdf2tab_add_links_picture',EVENT_HANDLER_PRIORITY_NEUTRAL+10,2);

load_language('plugin.lang', PDF2TAB_PATH);

function pdf2tab_add_links_picture($content, $element_info) {
	global $conf;
	
	$conf_pdf2tab = unserialize($conf['pdf2tab']);
	
	if (in_array(strtolower(substr(strrchr($element_info['file'], "."),1)), $conf_pdf2tab['extensions'])) {
		$content = pdf2tab_add_link_image($content, $element_info);
		$content = pdf2tab_add_link_beside_image($content, $element_info);
	}
	
	return $content;
}

function pdf2tab_add_link_image($content, $element_info) {
	preg_match('/<\s*img\s+[^>]*?src\s*=\s*(\'|\")(.*?)\\1[^>]*?\/?\s*>/i',$content,$match);
	$content = str_replace($match[0],'<a href="'.$element_info['element_url'].'" target="_blank" title="'.l10n('pdf2tab_tooltip').'">'.$match[0].'</a>',$content);
	
	return $content;
}

function pdf2tab_add_link_beside_image($content, $element_info) {
	$content .= '<p class="imageComment"><a href="'.$element_info['element_url'].'" target="_blank" title="'.l10n('pdf2tab_tooltip').'">'.l10n('pdf2tab_tooltip').'</a>';
	
	return $content;
}
?>