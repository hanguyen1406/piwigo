<?php

define('PHPWG_ROOT_PATH', '../../');
include_once(PHPWG_ROOT_PATH . 'include/common.inc.php');
check_status(ACCESS_ADMINISTRATOR);

$possible_values = array('on', 'off');

if (isset($_POST['area']) and isset($_POST['status']) and in_array($_POST['status'], $possible_values))
{
  if (!($config = unserialize($conf['FCKEditor'])))
  {
    $config = array();
  }

  $config[$_POST['area']] = $_POST['status'] == 'on' ? true : false;

  $query = '
UPDATE ' . CONFIG_TABLE . '
SET value = "' . addslashes(serialize($config)) . '"
WHERE param="FCKEditor"
LIMIT 1';
  pwg_query($query);
}

?>