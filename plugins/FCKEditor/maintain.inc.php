<?php

function plugin_activate()
{
  global $conf, $prefixeTable;

  if (!isset($conf['FCKEditor']))
  {
    $query = '
INSERT INTO ' . CONFIG_TABLE . ' (param,value,comment)
VALUES ("FCKEditor" , "'.addslashes(serialize(array())).'" , "FCKEditor areas");';

    pwg_query($query);
  }
}

function plugin_deactivate()
{
  global $prefixeTable;

  $query = 'DELETE FROM ' . CONFIG_TABLE . ' WHERE param="FCKEditor" LIMIT 1;';
  pwg_query($query);
}

?>