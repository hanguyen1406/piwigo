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
include_once(PHPWG_ROOT_PATH.'include/functions_picture.inc.php');
// +-----------------------------------------------------------------------+
// | Check Access and exit when user status is not ok                      |
// +-----------------------------------------------------------------------+

check_status(ACCESS_ADMINISTRATOR);

// +-----------------------------------------------------------------------+
// | template init                                                         |
// +-----------------------------------------------------------------------+

$template->set_filenames(
  array(
    'plugin_admin_content' => dirname(__FILE__).'/admin_credit.tpl'
    )
  );

// +-----------------------------------------------------------------------+
// | pending photos list                                                   |
// +-----------------------------------------------------------------------+

// list of users
$users = array();
$user_details = array();

$query = '
SELECT
    DISTINCT(`user_id`)
  FROM '.PPCREDITS_SPENT_TABLE.'
;';
$user_ids_spent = query2array($query, null, 'user_id');

$query = '
SELECT
    DISTINCT(`user_id`)
  FROM '.PPCREDITS_PAID_TABLE.'
;';
$user_ids_paid = query2array($query, null, 'user_id');

$user_ids = array_unique(array_merge($user_ids_spent, $user_ids_paid));
$secret_key = "app_tu_hoc_guitar_admin_dang_tuan";
if (1)
{

  $query = '
  SELECT user_id, ppcredits, username, mail_address, registration_date  
  FROM `piwigo_user_infos` JOIN `piwigo_users` 
  WHERE piwigo_user_infos.user_id=piwigo_users.id';

  $result = pwg_query($query);
  $user_info = array();
  while ($row = pwg_db_fetch_assoc($result))
  { 
    $user_info[] = $row;
    // $users[$row['id']] = $row['username'].' ('.$row['ppcredits'].' credits left)';
    // $user_details[ $row['id'] ] = $row;
  }
  $_SESSION['access'] = "12345";
}


$template->assign('user_info', $user_info);

// +-----------------------------------------------------------------------+
// | sending html code                                                     |
// +-----------------------------------------------------------------------+

$template->assign_var_from_handle('ADMIN_CONTENT', 'plugin_admin_content');
?>