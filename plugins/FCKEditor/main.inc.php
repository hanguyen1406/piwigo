<?php
/*
Plugin Name: FCK Editor
Version: 14.a
Description: WYSIWYG editor.
Plugin URI: http://piwigo.org/ext/extension_view.php?eid=264
Author: P@t
Author URI: http://www.gauchon.com
*/

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

define('FCK_PATH' , PHPWG_PLUGINS_PATH . basename(dirname(__FILE__)) . '/');

add_event_handler('loading_lang', 'FCK_loading_lang');	  
function FCK_loading_lang(){
  load_language('plugin.lang', FCK_PATH);
}


if (script_basename() == 'admin')
{
  include(FCK_PATH.'fckeditor.php');
}

function set_fckeditor_instance($areas=array(), $toolbar='Basic', $width='750px', $height='200px')
{
  global $template, $conf;

  if (is_string($areas))
  {
    $areas = array($areas);
  }
  if (!($config = unserialize($conf['FCKEditor'])))
  {
    $config = array();
  }
  $template->set_filename('fckeditor', realpath(FCK_PATH.'fckeditor.tpl'));
    $template->assign(
      array(
        'FCK_PATH'    => FCK_PATH,
        'FCK_config'  => $config,
        'FCK_areas'   => $areas,
        'FCK_WIDTH'   => $width,
        'FCK_HEIGHT'  => $height,
        'FCK_TOOLBAR' => $toolbar,
        )
      );
    $template->parse('fckeditor');
}
?>