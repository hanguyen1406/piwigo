<?php 
/*
Plugin Name: Embedded Videos
Version: 14.a
Description: Add videos from Dailymotion, Youtube, Vimeo, Wideo and Wat.
Plugin URI: http://piwigo.org/ext/extension_view.php?eid=136
Author: Mistic
Author URI: http://www.strangeplanet.fr
Has Settings: true
*/

defined('PHPWG_ROOT_PATH') or die('Hacking attempt!');

if (basename(dirname(__FILE__)) != 'gvideo')
{
  add_event_handler('init', 'gvideo_error');
  function gvideo_error()
  {
    global $page;
    $page['errors'][] = 'Embedded Videos folder name is incorrect, uninstall the plugin and rename it to "gvideo"';
  }
  return;
}

global $prefixeTable, $conf;

define('GVIDEO_PATH',    PHPWG_PLUGINS_PATH . 'gvideo/');
define('GVIDEO_ADMIN',   get_root_url() . 'admin.php?page=plugin-gvideo');
define('GVIDEO_TABLE',   $prefixeTable.'image_video');

include_once(GVIDEO_PATH . 'include/events.inc.php');


$conf['gvideo'] = safe_unserialize($conf['gvideo']);


add_event_handler('picture_pictures_data', 'gvideo_prepare_picture');

add_event_handler('delete_elements', 'gvideo_delete_elements');

if (defined('IN_ADMIN'))
{
  add_event_handler('tabsheet_before_select','gvideo_tab', EVENT_HANDLER_PRIORITY_NEUTRAL+10, 2);
  
  add_event_handler('get_batch_manager_prefilters', 'gvideo_add_prefilter');
  add_event_handler('perform_batch_manager_prefilters', 'gvideo_apply_prefilter', EVENT_HANDLER_PRIORITY_NEUTRAL, 2);
}

/**
 * special tabs
 */
function gvideo_tab($sheets, $id)
{
  if ($id != 'photo') return $sheets;
  
  $query = '
SELECT *
  FROM '.GVIDEO_TABLE.'
  WHERE picture_id = '.$_GET['image_id'].'
;';
  $result = pwg_query($query);

  if (!pwg_db_num_rows($result)) return $sheets;
  
  global $gvideo, $page;
  
  load_language('plugin.lang', GVIDEO_PATH);

  if ($page['tab'] == 'properties')
  {
    $page['infos'][] = l10n('This element is a video added with "Embedded Video"');
  }
  
  $gvideo = pwg_db_fetch_assoc($result);
  
  $sheets['gvideo'] = array(
    'caption' => l10n('Video properties'),
    'url' => GVIDEO_ADMIN.'-photo&amp;image_id='.$_GET['image_id'],
    );
  unset($sheets['coi'], $sheets['update']);
  
  return $sheets;
}
