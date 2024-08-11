<?php
/*
Plugin Name: Prepaid Credits
Version: 12.b
Description: Visitors buy photos with prepaid credits
Plugin URI: http://piwigo.org/ext/extension_view.php?eid=890
Author: plg
Author URI: http://le-gall.net/pierrick
Has Settings: true
*/

if (!defined('PHPWG_ROOT_PATH'))
{
  die('Hacking attempt!');
}

global $prefixeTable;

// +-----------------------------------------------------------------------+
// | Define plugin constants                                               |
// +-----------------------------------------------------------------------+

defined('PPCREDITS_ID') or define('PPCREDITS_ID', basename(dirname(__FILE__)));
define('PPCREDITS_PATH' , PHPWG_PLUGINS_PATH.basename(dirname(__FILE__)).'/');
define('PPCREDITS_PAID_TABLE', $prefixeTable.'ppcredits_paid');
define('PPCREDITS_SPENT_TABLE', $prefixeTable.'ppcredits_spent');
define('PPCREDITS_USERS_TABLE', $prefixeTable.'users');
define('PPCREDITS_USER_INFOS_TABLE', $prefixeTable.'user_infos');

include_once(PPCREDITS_PATH.'include/functions.inc.php');

// init the plugin
add_event_handler('init', 'ppcredits_init');
/**
 * plugin initialization
 *   - check for upgrades
 *   - unserialize configuration
 *   - load language
 */
function ppcredits_init()
{
  global $conf, $user;

  // prepare plugin configuration
  $conf['ppcredits'] = safe_unserialize($conf['ppcredits']);

  // overwrite $user['enabled_high']: downloads managed by specific prepaid_credits/action.php
  if ('action' == script_basename())
  {
    $user['enabled_high'] = false;
  }

  load_language('plugin.lang', dirname(__FILE__).'/');
  load_language('lang', PHPWG_ROOT_PATH.PWG_LOCAL_DIR, array('no_fallback'=>true, 'local'=>true) );
}

add_event_handler('loc_end_profile', 'ppcredits_end_profile', 70);
function ppcredits_end_profile()
{
  global $template, $conf, $user;

  $template->set_prefilter('profile', 'ppcredits_profile_prefilter');
  
  $template->set_filename('credits', realpath(PPCREDITS_PATH.'profile.tpl'));

  $default_nb_credits = 5;

  $template->assign(
    array(
      'CREDITS_LEFT' => $user['ppcredits'],
      'NB_CREDITS' => $default_nb_credits,
      'SELL_CREDITS' => $conf['ppcredits']['sell_credits'],
      )
    );

  if ($conf['ppcredits']['sell_credits'])
  {
    $template->assign(
      array(
        'PRICE_PER_CREDIT' => $conf['ppcredits']['price_per_credit'],
        'PAYPAL_ACCOUNT' => $conf['ppcredits']['paypal_account'],
        'MONEY_AMOUNT' => $default_nb_credits * $conf['ppcredits']['price_per_credit'],
        'CURRENCY' => $conf['ppcredits']['currency'],
        'RETURN_URL' => get_absolute_root_url().'profile.php',
        // 'IPN_URL' => get_absolute_root_url().'ws.php?method=ppcredits.paypal.ipn',
        'IPN_URL' => get_absolute_root_url().'plugins/prepaid_credits/paypal_ipn.php',
        )
      );
  }

  $query = '
SELECT
    *,
    validated_on AS occured_on
  FROM '.PPCREDITS_PAID_TABLE.'
  WHERE user_id = '.$user['id'].'
    AND validated_on IS NOT NULL
;';
  $paid_lines = query2array($query);

  $query = '
SELECT
    *,
    used_on AS occured_on
  FROM '.PPCREDITS_SPENT_TABLE.'
    LEFT JOIN '.IMAGES_TABLE.' AS i ON image_id = i.id
  WHERE user_id = '.$user['id'].'
;';
  $spent_lines = query2array($query);

  $history_lines = array_merge($paid_lines, $spent_lines);
  $occured_on = array();

  // echo '<pre>'; print_r($history_lines); echo '</pre>';

  foreach ($history_lines as $key => $row)
  {
    $occured_on[$key]  = $row['occured_on'];
    
    $history_lines[$key]['since'] = time_since($row['occured_on'], 'year');
    $history_lines[$key]['occured_on_string'] = format_date($row['occured_on'], array('day', 'month', 'year', 'time'));

    if (isset($row['order_uuid']))
    {
      // we are on a paid line
      $history_lines[$key]['details'] = l10n(
        '%u credits bought on %s (%s %s)',
        $row['nb_credits'],
        (!empty($row['paypal_transaction_id']) ? 'PayPal' : '?'),
        $row['amount'],
        $row['currency']
        );
    }
    else
    {
      // we are on a spent line
      $history_lines[$key]['details'] = l10n(
        '%u credits spent for %s (size %s)',
        $row['nb_credits'],
        $row['name'],
        l10n($row['size'])
        );

      $history_lines[$key]['details'] .= sprintf(
        ', <a href="%s">%s →</a>',
        make_picture_url(array('image_id' => $row['image_id'], 'image_file' => $row['file'])),
        l10n('open it')
        );
    }
  }

  array_multisort($occured_on, SORT_DESC, $history_lines);

  $template->assign('history_lines', $history_lines);

  $template->assign_var_from_handle('CREDITS_CONTENT', 'credits');

}

function ppcredits_profile_prefilter($content)
{
  $pattern = '#\{\$PROFILE_CONTENT\}#';
  $replacement = '{$PROFILE_CONTENT}{$CREDITS_CONTENT}';

  return preg_replace($pattern, $replacement, $content);
}

add_event_handler('ws_add_methods', 'ppcredits_add_methods');
function ppcredits_add_methods($arr)
{
  $service = &$arr[0];
  
  $service->addMethod(
    'ppcredits.paypal.create',
    'ws_ppcredits_paypal_create',
    array(
      'nb_credits' => array('default' => null, 'type' => WS_TYPE_ID),
      ),
    'Create a PayPal order (to be validated by IPN)'
    );

  // warning: this method won't work if $conf['guest_access'] is set to false
  $service->addMethod(
    'ppcredits.paypal.ipn',
    'ws_ppcredits_paypal_ipn',
    array(), // we manage with POST variables directly in the bind function
    'IPN request sent by PayPal'
    );  
  $service->addMethod(
    'ppcredits.photo.buy',
    'ws_ppcredits_photo_buy',
    array(
      'image_id' => array('default' => null, 'type' => WS_TYPE_ID),
      ),
    'Buy a photo with your credits'
    );
  $service->addMethod(
    'ppcredits.faceswap.swap',
    'ws_ppcredits_faceswap_swap',
    array(
      'image_id' => array('default' => null, 'type' => WS_TYPE_ID),
      ),
    'Buy a faceswap with your credits'
  );
  $service->addMethod(
    'ppcredits.faceswap.download',
    'ws_ppcredits_faceswap_download',
    array(
      'image_id' => array('default' => null, 'type' => WS_TYPE_ID),
      ),
    'Down load swapped image'
  );
  $service->addMethod(
    'attach.file.get.file',
    'attach_file_get_file',
    array(
      'image_id' => array('default' => null, 'type' => WS_TYPE_ID),
      ),
    'Get all file name in album'
  );
  $service->addMethod(
    'ppcredits.photo.editcredit',
    'ppcredits_photo_editcredit',
    array(
      'image_id' => array('default' => null, 'type' => WS_TYPE_ID),
      ),
    'Edit user credit'
  );
}

add_event_handler('loc_end_picture', 'ppcredits_picture');
function ppcredits_picture()
{
  global $conf, $template, $user, $picture;

  // unset U_DOWNLOAD if user did not recently purchased the photo
  $template->append('current', array('U_DOWNLOAD' => null), true);
  $picture['current']['download_url'] = null;
  
  $template->set_prefilter('picture', 'ppcredits_picture_prefilter');
  
  $template->set_filename('credits', realpath(PPCREDITS_PATH.'picture.tpl'));

  // echo '<pre>'; print_r($picture['current']['derivatives']); echo '</pre>';

  $base_price = !empty($picture['current']['ppcredits_price'])
    ? $picture['current']['ppcredits_price']
    : $conf['ppcredits']['photo_cost']
    ;

  $sizes_purchased = array_fill_keys(ppcredits_recently_purchased_sizes($picture['current']['id']), 1);
  // echo '<pre>'; print_r($sizes_purchased); echo '</pre>';
  
  $sizes = array();

  $params = array(
    'id' => $picture['current']['id'],
    'part' => 'e',
    'nocache' => generate_key(6),
    'download' => null,
    );
  $base_dl_url = add_url_params(get_root_url().PHPWG_PLUGINS_PATH.'prepaid_credits/action.php', $params);
  $base_dl_url.= '&amp;size=';

  $size_types = array_merge(array_keys($picture['current']['derivatives']), array('original'));

  foreach ($size_types as $type)
  {
    if (isset($conf['ppcredits']['price_coefficient'][$type]))
    {
      if(!$picture['current']['ppcredits_price']) {
        $result = pwg_query("select price from piwigo_ppcredits_option where method='download.original'");
        $row = pwg_db_fetch_assoc($result);
        $nb_credits = $row['price'];
        // $conf['ppcredits']['price_coefficient'][$type] * $base_price
      } else {
        $nb_credits = $base_price;
      }
      $size = array(
        'type' => $type,
        'nb_credits' => $nb_credits,
        'label' => l10n('%s for %d credits', l10n($type), $nb_credits)
        );

      if (isset($sizes_purchased[$type]))
      {
        $size['download_url'] = $base_dl_url.$type;
      }

      $sizes[] = $size;
    }
  }
  
  // $nb_credits = $row['price'];

  $query = pwg_query('select path from piwigo_image_file where image_id='.$picture['current']['id']);
  if(pwg_db_num_rows($query) == 0) {
    $file_link = "";
  } else {
    $row = pwg_db_fetch_assoc($query);
    $file_link = $row['path'];
  }
  // print($file_link);

  $template->assign(
    array(
      'CREDITS_LEFT' => $user['ppcredits'],
      'ppcredits_sizes' => $sizes,
      'PHOTO_NB_CREDITS' => $nb_credits,
      'MISSING_CREDITS_SENTENCE' => $conf['ppcredits']['sell_credits']
        ? l10n('No worry!').' <a href="profile.php">'.l10n('Buy more credits on your profile page.').'</a>'
        : l10n('Need more? Contact us to get more credits.'),
      'FILE_LINK' => $file_link
      )
    );

  $template->assign_var_from_handle('CREDITS_CONTENT', 'credits');
  
  $template->assign('image_id', $picture['current']['id']);
}

function ppcredits_picture_prefilter($content)
{
  global $user;

  if ('bootstrap_darkroom' == $user['theme'])
  {
    $search = '<div id="theImageComment"';
    $replace = '{$CREDITS_CONTENT}'.$search;
  }
  else
  {
    $search = '<dl id="standard"';
    $replace = '{$CREDITS_CONTENT}'.$search;
  }
  
  $content = str_replace($search, $replace, $content);
  return $content;
}

// +-----------------------------------------------------------------------+
// | Batch Manager                                                         |
// +-----------------------------------------------------------------------+

add_event_handler('loc_begin_element_set_global', 'ppcredits_element_set_global_add_action');
function ppcredits_element_set_global_add_action()
{
  global $template, $page, $conf, $picture;

  $template->set_filename('ppcredits', realpath(PPCREDITS_PATH.'element_set_global_action.tpl'));
  //get price in database
  $result = pwg_query("select price from piwigo_ppcredits_option where method='download.original'");  
  $row = pwg_db_fetch_assoc($result);
  $price = $row['price'];  

  $result = pwg_query("select name, id from piwigo_categories");  
  $albums = array();
  while ($row = pwg_db_fetch_assoc($result)) {
    $albums[] = array('name' => $row['name'], 'id' => $row['id']);
  }
  
  $template->assign(
    array(
      'PPCREDITS_DEFAULT_PRICE' => $price,
      'albums' => $albums,
    )
  );
  
  $template->append(
    'element_set_global_plugins_actions',
    array(
      'ID' => 'ppcredits',
      'NAME' => 'Download',
      'CONTENT' => $template->parse('ppcredits', true),
      )
    );


  

}

add_event_handler('loc_begin_element_set_global', 'set_file_download');
function set_file_download()
{
  global $template, $page, $conf, $picture;
  $template->set_filename('attach_file', realpath(PPCREDITS_PATH.'attach_file.tpl'));

  $template->append(
    'element_set_global_plugins_actions',
    array(
      'ID' => 'attach_file',
      'NAME' => 'Attach file download',
      'CONTENT' => $template->parse('attach_file', true),
    )
  );

  
  // print(implode(", ", $albums));
}

add_event_handler('element_set_global_action', 'ppcredits_batch_global_submit', EVENT_HANDLER_PRIORITY_NEUTRAL, 2);
function ppcredits_batch_global_submit($action, $collection)
{
  global $page;
  
  // If its our plugin that is called
  if ($action == 'ppcredits')
  {
    // check_input_parameter('price', $_POST, false, '/^(default|specific)$/');
    
    if ('specific' == $_POST['price'])
    {
      // check_input_parameter('nb_credits', $_POST, false, PATTERN_ID);
    }
    
    $datas = array();
    foreach ($collection as $image_id)
    {
      array_push(
        $datas,
        array(
          'id' => $image_id,
          'ppcredits_price' => ('default' == $_POST['price'] ? null : $_POST['nb_credits']),
        )
      );
    }

    mass_updates(
      IMAGES_TABLE,
      array('primary' => array('id'), 'update' => array('ppcredits_price')),
      $datas
    );

    $page['infos'][] = l10n('Information data registered in database');
  } else if ($action == 'attach_file') {
    if($_POST['radio'] == "remove") {
      foreach ($collection as $image_id)
      {
        // $image_id
        $query = 'delete from piwigo_image_file where image_id='.$image_id;
        pwg_query($query);
      }
      $page['infos'][] = "Gỡ file thành công";

    } else {
      if (sizeof($collection) == 1) {
        if($_POST['albums'] == '-') {
          $file_link = trim($_POST['file_link']);
          if($file_link == "") {
            $page['infos'][] = "Vui lòng dán link";
          } else {
            $query = '
            insert into piwigo_image_file values ('.$collection[0].', null, "'.$file_link.'")
            ON DUPLICATE KEY UPDATE path=VALUES(path), file_id=VALUES(file_id)';
  
            pwg_query($query);
  
            $page['infos'][] = "Gắn link thành công";
  
          }
        } else {
          $file = explode("||", $_POST['file_id']);
          $query = '
          insert into piwigo_image_file values ('.$collection[0].', '.$file[0].', "'.$file[1].'")
          ON DUPLICATE KEY UPDATE path=VALUES(path), file_id=VALUES(file_id)';
  
          pwg_query($query);
  
          $page['infos'][] = "Gắn file thành công";
  
        }
        
      } else $page['infos'][] = l10n('Chỉ được chọn 1 ảnh');
    }
  }
}

// +-----------------------------------------------------------------------+
// | User Manager                                                          |
// +-----------------------------------------------------------------------+

add_event_handler('loc_begin_admin_page', 'ppcredits_add_users_column');
function ppcredits_add_users_column()
{
  global $template;
  
  $template->set_prefilter('user_list', 'ppcredits_add_users_column_prefilter');
}

function ppcredits_add_users_column_prefilter($content)
{
  // add the "Credits" column in the user table
  $search = '<th>{\'registration date\'|@translate}</th>';
  $content = str_replace($search, $search.'<th>{\'Credits\'|@translate}</th>', $content);

  // add the "add_credits" action in the select list
  $search = '<option value="show_nb_hits">';
  $replace = '<option value="add_credits">{\'Add credits\'|translate}</option><option value="remove_credits">{\'Remove credits\'|translate}</option>'.$search;
  $content = str_replace($search, $replace, $content);
  
  // add the "add_credits" action
  $search = '<p id="applyActionBlock"';
  $replace = '{* add_credits *}
    <div id="action_add_credits" class="bulkAction">
      <input name="add_credits" type="number" value="5" min="1" max="999"> {\'credits\'|translate}
    </div>
    {* remove_credits *}
    <div id="action_remove_credits" class="bulkAction">
      <input name="remove_credits" type="number" value="5" min="1" max="999"> {\'credits\'|translate}
    </div>'.$search;
  $content = str_replace($search, $replace, $content);

  // add the "add_credits" js action
  $search = 'default:';
  $replace = '
      case \'add_credits\':
        data.add_credits = jQuery("input[name=add_credits]").val();
        break;
      case \'remove_credits\':
        data.remove_credits = jQuery("input[name=remove_credits]").val();
        break;
      default:';
  $content = str_replace($search, $replace, $content);

  return $content;
}

add_event_handler('user_list_columns', 'ppcredits_user_list_columns', EVENT_HANDLER_PRIORITY_NEUTRAL+1, 1);
function ppcredits_user_list_columns($aColumns)
{
  $aColumns[] = 'ppcredits';

  return $aColumns;
}

add_event_handler('ws_invoke_allowed', 'ppcredits_ws_users_setInfo', EVENT_HANDLER_PRIORITY_NEUTRAL, 3);
function ppcredits_ws_users_setInfo($res, $methodName, $params)
{
  check_input_parameter('add_credits', $_POST, false, PATTERN_ID);
  check_input_parameter('remove_credits', $_POST, false, PATTERN_ID);
  
  if ($methodName != 'pwg.users.setInfo')
  {
    return $res;
  }

  if (count($params['user_id']) == 0)
  {
    return $res;
  }

  if (isset($_POST['add_credits']) or isset($_POST['remove_credits']))
  {
    $query = '
SELECT
    `user_id`,
    `ppcredits`
  FROM '.USER_INFOS_TABLE.'
  WHERE `user_id` IN ('.implode(',', $params['user_id']).')
;';
    $credits_of_user = query2array($query, 'user_id', 'ppcredits');
  }

  if (isset($_POST['add_credits']))
  {
    $query = '
UPDATE '.USER_INFOS_TABLE.'
  SET ppcredits = ppcredits + '.$_POST['add_credits'].'
  WHERE user_id IN ('.implode(',', $params['user_id']).')
;';
    pwg_query($query);

    foreach ($params['user_id'] as $user_id)
    {
      pwg_activity(
        'user',
        $user_id,
        'add_credits',
        array(
          'add_credits' => (int)$_POST['add_credits'],
          'ppcredits' => $credits_of_user[$user_id] + $_POST['add_credits'],
        )
      );
    }
  }

  if (isset($_POST['remove_credits']))
  {
    // we let the admin remove as many credits as (s)he wants, event bought ones.
    // That is not perfect. We should instead calculate how many given credits
    // were not consumed and remove only from those. Not from unused bought credits.
    $updates = array();

    foreach ($params['user_id'] as $user_id)
    {
      $new_ppcredits = max(0, $credits_of_user[$user_id] - $_POST['remove_credits']);

      if ($new_ppcredits < $credits_of_user[$user_id])
      {
        $updates[] = array(
          'user_id' => $user_id,
          'ppcredits' => $new_ppcredits,
        );

        pwg_activity(
          'user',
          $user_id,
          'remove_credits',
          array(
            'remove_credits' => $credits_of_user[$user_id] - $new_ppcredits,
            'ppcredits' => $new_ppcredits,
          )
        );
      }
    }

    if (count($updates) > 0)
    {
      mass_updates(
        USER_INFOS_TABLE,
        array(
          'primary' => array('user_id'),
          'update' => array('ppcredits')
        ),
        $updates
      );
    }
  }

  return $res;
}

//check table credit option (create if not exist and get row)
$query='SHOW TABLES LIKE "piwigo_ppcredits_option";';
$result = pwg_query($query);
if(pwg_db_num_rows($result) == 0)
{
  pwg_query('create table piwigo_ppcredits_option(
    name varchar(50),
    method varchar(50) primary key,
    price int
  )');
}


//create table piwig_ppcredits_option_price
$query='SHOW TABLES LIKE "piwigo_ppcredits_option_price";';
$result = pwg_query($query);
if(pwg_db_num_rows($result) == 0)
{
  pwg_query('create table piwigo_ppcredits_option_price(
    image_id int,
    method varchar(50),
    price int,
    primary key(image_id, method)
  )');
}

#git worked

add_event_handler('ws_users_getList', 'ppcredits_ws_users_getList', EVENT_HANDLER_PRIORITY_NEUTRAL, 1);
function ppcredits_ws_users_getList($users)
{
  $user_ids = array();
  foreach ($users as $user_id => $user)
  {
    $user_ids[] = $user_id;
  }

  if (count($user_ids) == 0)
  {
    return $users;
  }

  $query = '
SELECT
    user_id,
    ppcredits
  FROM '.USER_INFOS_TABLE.'
  WHERE user_id IN ('.implode(',', $user_ids).')
;';
  $result = pwg_query($query);
  while ($row = pwg_db_fetch_assoc($result))
  {
    $users[$row['user_id']]['ppcredits'] = $row['ppcredits'];
  }

  
  $query = '
SELECT 
    id,
    fblink
  FROM '.PPCREDITS_USERS_TABLE.'
  WHERE id IN ('.implode(',', $user_ids).')
;';
  $result = pwg_query($query);
  while ($row = pwg_db_fetch_assoc($result))
  {
    $users[$row['id']]['fb_link'] = $row['fblink'];
  }

  return $users;
}
?>
