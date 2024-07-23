<?php
// +-----------------------------------------------------------------------+
// | This file is part of Piwigo plugin Prepaid Credits                    |
// |                                                                       |
// | For copyright and license information, please view the COPYING.txt    |
// | file that was distributed with this source code.                      |
// +-----------------------------------------------------------------------+

if( !defined("PHPWG_ROOT_PATH") )
{
  die ("Hacking attempt!");
}

include_once(PHPWG_ROOT_PATH.'admin/include/functions.php');
include_once(PHPWG_ROOT_PATH.'admin/include/tabsheet.class.php');

define('PPCREDITS_BASE_URL', get_root_url().'admin.php?page=plugin-prepaid_credits');

// +-----------------------------------------------------------------------+
// | Check Access and exit when user status is not ok                      |
// +-----------------------------------------------------------------------+

check_status(ACCESS_ADMINISTRATOR);

// +-----------------------------------------------------------------------+
// | Tabs                                                                  |
// +-----------------------------------------------------------------------+

$tabs = array(
  array(
    'code' => 'history',
    'label' => l10n('History'),
    ),
  array(
    'code' => 'config',
    'label' => l10n('Configuration'),
    ),
  array(
    'code' => 'credit',
    'label' => l10n('Credit'),
  )   
);

$tab_codes = array_map(
  function ($a) { return $a["code"]; },
  $tabs
  );

if (isset($_GET['tab']) and in_array($_GET['tab'], $tab_codes))
{
  $page['tab'] = $_GET['tab'];
}
else
{
  $page['tab'] = $tabs[0]['code'];
}

$tabsheet = new tabsheet();
foreach ($tabs as $tab)
{
  $tabsheet->add(
    $tab['code'],
    $tab['label'],
    PPCREDITS_BASE_URL.'-'.$tab['code']
    );
}
$tabsheet->select($page['tab']);
$tabsheet->assign();

//add table credit cho tung chuc nang
$query='SHOW TABLES LIKE "piwigo_image_plugin";';
$result = pwg_query($query);
if(pwg_db_num_rows($result) == 0)
{
  pwg_query('create table piwigo_image_plugin(
    image_id int,
    plugin_id varchar(64)
  )');
}

pwg_query('CREATE TABLE IF NOT EXISTS piwigo_image_file (
  image_id int primary key,
  file_id int REFERENCES piwigo_images(id) ON DELETE CASCADE,
  path varchar(255)
)');

// +-----------------------------------------------------------------------+
// |                             Load the tab                              |
// +-----------------------------------------------------------------------+

include(PPCREDITS_PATH.'admin_'.$page['tab'].'.php');

?>