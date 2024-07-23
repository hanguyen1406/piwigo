<?php
/*
Plugin Name: Batch Manager Prefilters
Version: 14.a
Description: Add some prefilters in Batch Manager.
Plugin URI: http://piwigo.org/ext/extension_view.php?eid=530
Author: P@t
Author URI: http://www.gauchon.com
*/

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

add_event_handler('get_batch_manager_prefilters', 'add_bmp');
add_event_handler('perform_batch_manager_prefilters', 'perform_bmp', 50, 2);
add_event_handler('element_set_global_action', 'element_set_global_action_bmp');

function add_bmp($prefilters)
{
  load_language('plugin.lang', dirname(__FILE__).'/');

  array_push(
    $prefilters,
    array('ID' => 'only_one_album', 'NAME' => l10n('in only one album')),
    array('ID' => 'in_several_albums', 'NAME' => l10n('in several albums')),
    array('ID' => 'with tags', 'NAME' => l10n('with tags')),
    array('ID' => 'with author', 'NAME' => l10n('with author')),
    array('ID' => 'without author', 'NAME' => l10n('without author')),
    array('ID' => 'no_title', 'NAME' => l10n('With no title')),
    array('ID' => 'no_date_creation', 'NAME' => l10n('With no creation date'))
  );

  return $prefilters;
}

function perform_bmp($filter_sets, $prefilter)
{
  if ('with tags' == $prefilter)
  {
    $query = 'SELECT DISTINCT image_id FROM '.IMAGE_TAG_TABLE.';';
    array_push($filter_sets, array_from_query($query, 'image_id'));
  }

  if ('with author' == $prefilter)
  {
    $query = 'SELECT id FROM '.IMAGES_TABLE.' WHERE author IS NOT NULL;';
    array_push($filter_sets, array_from_query($query, 'id'));
  }

  if ('without author' == $prefilter)
  {
    $query = 'SELECT id FROM '.IMAGES_TABLE.' WHERE author IS NULL;';
    array_push($filter_sets, array_from_query($query, 'id'));
  }

  if ('no_title' == $prefilter)
  {
    $query = 'SELECT id FROM '.IMAGES_TABLE.' WHERE name IS NULL OR name = \'\';';
    array_push($filter_sets, array_from_query($query, 'id'));
  }

  if ('no_date_creation' == $prefilter)
  {
    $query = 'SELECT id FROM '.IMAGES_TABLE.' WHERE date_creation IS NULL;';
    array_push($filter_sets, array_from_query($query, 'id'));
  }
  
  if ('only_one_album' == $prefilter)
  {
    $query = 'SELECT image_id FROM '.IMAGE_CATEGORY_TABLE.' GROUP BY image_id HAVING COUNT(category_id) = 1;';
    array_push($filter_sets, array_from_query($query, 'image_id'));
  }

  if ('in_several_albums' == $prefilter)
  {
    $query = 'SELECT image_id FROM '.IMAGE_CATEGORY_TABLE.' GROUP BY image_id HAVING COUNT(category_id) > 1;';
    array_push($filter_sets, array_from_query($query, 'image_id'));
  }

  return $filter_sets;
}

function element_set_global_action_bmp($action)
{
  if ((@$_SESSION['bulk_manager_filter']['prefilter'] == 'with tags' and in_array($action, array('add_tags', 'del_tags')))
    or (in_array(@$_SESSION['bulk_manager_filter']['prefilter'], array('with author', 'without author')) and $action == 'author')
      or (in_array(@$_SESSION['bulk_manager_filter']['prefilter'], array('no_date_creation')) and $action == 'date_creation')
      or (in_array(@$_SESSION['bulk_manager_filter']['prefilter'], array('no_title')) and $action == 'title')
      or (@$_SESSION['bulk_manager_filter']['prefilter'] == 'only_one_album' and in_array($action, array('associate', 'move', 'dissociate')))
      or (@$_SESSION['bulk_manager_filter']['prefilter'] == 'in_several_albums' and in_array($action, array('associate', 'move', 'dissociate')))
    )
  {
    // let's refresh the page because we the current set might be modified
    redirect(get_root_url().'admin.php?page='.$_GET['page']);
  }
}

?>