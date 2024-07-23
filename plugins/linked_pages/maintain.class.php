<?php
defined('PHPWG_ROOT_PATH') or die('Hacking attempt!');

class linked_pages_maintain extends PluginMaintain
{
  private $table;
  
  function __construct($plugin_id)
  {
    global $prefixeTable;
    
    parent::__construct($plugin_id);
    $this->table = $prefixeTable . 'linked_pages';
  }
  
  function install($plugin_version, &$errors=array())
  {
    pwg_query('
CREATE TABLE IF NOT EXISTS `' . $this->table . '` (
  `page_id` smallint(5) unsigned NOT NULL,
  `category_id` smallint(5) unsigned NOT NULL,
  `pos` smallint(5) unsigned NOT NULL,
  UNIQUE KEY `UNIQUE`(`page_id`,`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8
;');
  }

  function update($old_version, $new_version, &$errors=array())
  {
    $this->install($new_version, $errors);
  }

  function uninstall()
  {
    pwg_query('DROP TABLE `' . $this->table . '`;');
  }
}
