<?php 
/*
Plugin Name: Linked Pages
Version: 12.a
Description: Link Additional Pages to albums.
Plugin URI: http://piwigo.org/ext/extension_view.php?eid=635
Author: Mistic
Author URI: http://www.strangeplanet.fr
*/

defined('PHPWG_ROOT_PATH') or die('Hacking attempt!');

if (basename(dirname(__FILE__)) != 'linked_pages')
{
  add_event_handler('init', 'linked_pages_error');
  function linked_pages_error()
  {
    global $page;
    $page['errors'][] = 'Linked Pages folder name is incorrect, uninstall the plugin and rename it to "linked_pages"';
  }
  return;
}

if (mobile_theme())
{
  return;
}

global $prefixeTable;

define('LINKEDPAGES_PATH' , PHPWG_PLUGINS_PATH . 'linked_pages/');
define('LINKEDPAGES_TABLE', $prefixeTable . 'linked_pages');
define('LINKEDPAGES_ADMIN', get_root_url() . 'admin.php?page=plugin-linked_pages');


add_event_handler('init', 'linked_pages_init');


function linked_pages_init()
{
  global $conf, $pwg_loaded_plugins;
  
  if (!isset($pwg_loaded_plugins['AdditionalPages']))
  {
    return;
  }
  
  // add event handlers
  if (defined('IN_ADMIN'))
  {
    add_event_handler('tabsheet_before_select', 'linked_pages_tabsheet_before_select', EVENT_HANDLER_PRIORITY_NEUTRAL, 2);
  }
  else
  {
    add_event_handler('loc_end_index', 'linked_pages_loc_end_index', EVENT_HANDLER_PRIORITY_NEUTRAL+20);
  }

  include_once(LINKEDPAGES_PATH . 'include/functions.inc.php');
}
