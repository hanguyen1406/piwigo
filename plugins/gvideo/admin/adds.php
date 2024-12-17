<?php
defined('GVIDEO_PATH') or die('Hacking attempt!');

include_once(GVIDEO_PATH.'include/functions.inc.php');
include_once(PHPWG_ROOT_PATH . 'admin/include/functions_upload.inc.php');

$query = 'select id,name from piwigo_categories';
$result = pwg_query($query);
$albums=[];
while ($row = pwg_db_fetch_assoc($result)){
  $albums[]=$row;
}

$query = 'select id,name from piwigo_tags';
$result = pwg_query($query);
$tags=[];
while ($row = pwg_db_fetch_assoc($result)){
  $tags[]=$row;
}




// template
$template->assign(array(
  'albums' => $albums,
  'tags' => $tags,
  'gvideo' => $conf['gvideo'],
  'POST' => @$_POST,
  'CACHE_KEYS' => get_admin_client_cache_keys(array('categories')),
  ));

$template->set_filename('gvideo_content', realpath(GVIDEO_PATH . 'admin/template/adds.tpl'));


