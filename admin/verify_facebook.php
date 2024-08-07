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

$template->set_filenames(array('verify_facebook'=>'verify_facebook.tpl.html'));

$template->assign(
    array(
      'ADMIN_PAGE_TITLE' => "Quản lý liên kết tài khoản Facebook",
    )
);



// print("facebook");

$template->assign_var_from_handle('ADMIN_CONTENT', 'verify_facebook');
?>