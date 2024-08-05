<?php
// +-----------------------------------------------------------------------+
// | This file is part of Piwigo.                                          |
// |                                                                       |
// | For copyright and license information, please view the COPYING.txt    |
// | file that was distributed with this source code.                      |
// +-----------------------------------------------------------------------+


check_input_parameter('group', $_GET, false, PATTERN_ID);

// +-----------------------------------------------------------------------+
// | tabs                                                                  |
// +-----------------------------------------------------------------------+

$page['tab'] = 'verify_facebook';
include(PHPWG_ROOT_PATH.'admin/include/user_tabs.inc.php');


print("facebook");

$template->assign_var_from_handle('ADMIN_CONTENT', 'verify_facebook');
?>