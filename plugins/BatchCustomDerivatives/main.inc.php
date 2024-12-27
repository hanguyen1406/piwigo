<?php
/*
Plugin Name: BatchCustomDerivatives
Version: 0.3.0
Description: Adds batch action and web service to create custom derivatives
Plugin URI: http://piwigo.org/ext/extension_view.php?eid=899
Author: Scott Shambarger
Author URI: http://github.com/sshambar/BatchCustomDerivatives
*/

/*
 This program is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

defined('PHPWG_ROOT_PATH') or trigger_error('Hacking attempt!', E_USER_ERROR);

// +-----------------------------------------------------------------------+
// | Define plugin constants                                               |
// +-----------------------------------------------------------------------+
define('BATCHCUSTOMDERIVATIVES_ID', basename(dirname(__FILE__)));
define('BATCHCUSTOMDERIVATIVES_PATH',
       PHPWG_PLUGINS_PATH . BATCHCUSTOMDERIVATIVES_ID . '/');

if (defined('IN_ADMIN') && IN_ADMIN)
{
  // Initialize global with default instance
  add_event_handler('init', 'BatchCustomDerivatives_Load',
		    EVENT_HANDLER_PRIORITY_NEUTRAL,
		    BATCHCUSTOMDERIVATIVES_PATH .
		    'include/admin_events.inc.php');
}

// Add webservice apis
add_event_handler('ws_add_methods', 'BatchCustomDerivatives_Load_WS',
		  EVENT_HANDLER_PRIORITY_NEUTRAL,
		  BATCHCUSTOMDERIVATIVES_PATH .
		  'include/ws_functions.inc.php');

