<?php
/*
Plugin Name: Menu Tags
Version: 1.1.1
Description: Display unrelated tags in menu
Plugin URI: http://piwigo.org/ext/extension_view.php?eid=789
Author: plg
Author URI: http://le-gall.net/pierrick
Has Settings: false
*/

global $conf;

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

define('MT_ID',    basename(dirname(__FILE__)));
define('MT_PATH' , PHPWG_PLUGINS_PATH . MT_ID . '/');

add_event_handler('init', 'mt_init');
function mt_init()
{
  global $conf, $user;
  $conf['menubar_tag_cloud_content'] = 'current_only';

  load_language('plugin.lang', MT_PATH);
}

add_event_handler('blockmanager_register_blocks', 'mt_register_menubar_blocks', EVENT_HANDLER_PRIORITY_NEUTRAL-1);
function mt_register_menubar_blocks($menu_ref_arr)
{
  $menu = &$menu_ref_arr[0];
  if ($menu->get_id() != 'menubar')
  {
    return;
  }
  
  $menu->register_block(new RegisteredBlock('mbMenuTags', 'Menu Tags', 'plugin MenuTags'));
}

add_event_handler('blockmanager_apply', 'mt_blockmanager_apply');
function mt_blockmanager_apply($menu_ref_arr)
{
  global $user, $conf;

  $menu = &$menu_ref_arr[0];
  
  if (($block = $menu->get_block('mbMenuTags')) != null)
  {
    // if mbTags (core feature, related tags) is displayed, don't display
    // this one
    if (($block_core_mbTags = $menu->get_block('mbTags')) != null)
    {
      if ($block_core_mbTags->data)
      {
        return;
      }
    }
    
    $tags = get_available_tags();
    
    usort($tags, 'mt_counter_compare');
    $tags = array_slice($tags, 0, $conf['menubar_tag_cloud_items_number']);

    // depending on its counter and the other tags counter, each tag has a level
    $tags = add_level_to_tags($tags);

    // we want tags diplayed in alphabetic order
    usort($tags, 'tag_alpha_compare');

    foreach ($tags as $tag)
    {
      $block->data[] = array_merge(
        $tag,
        array(
          'URL' => make_index_url( array( 'tags' => array($tag) ) ),
          )
        );
    }

    $block->template = realpath(MT_PATH.'menubar_menu_tags.tpl');
  }
}

function mt_counter_compare($a, $b)
{
  if ($a['counter'] == $b['counter'])
  {
    return mt_id_compare($a, $b);
  }

  return ($a['counter'] < $b['counter']) ? +1 : -1;
}

function mt_id_compare($a, $b)
{
  return ($a['id'] < $b['id']) ? -1 : 1;
}


?>