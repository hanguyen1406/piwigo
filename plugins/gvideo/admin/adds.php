<?php
defined('GVIDEO_PATH') or die('Hacking attempt!');

include_once(GVIDEO_PATH.'include/functions.inc.php');
include_once(PHPWG_ROOT_PATH . 'admin/include/functions_upload.inc.php');



// template
$template->assign(array(
  'gvideo' => $conf['gvideo'],
  'POST' => @$_POST,
  'CACHE_KEYS' => get_admin_client_cache_keys(array('categories')),
  ));

$template->set_filename('gvideo_content', realpath(GVIDEO_PATH . 'admin/template/adds.tpl'));
