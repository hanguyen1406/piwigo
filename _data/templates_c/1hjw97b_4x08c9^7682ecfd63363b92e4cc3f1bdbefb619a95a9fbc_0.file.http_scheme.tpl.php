<?php
/* Smarty version 4.3.1, created on 2024-06-22 14:48:17
  from '/var/www/html/piwigo/themes/bootstrap_darkroom/template/http_scheme.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676e431373643_56681545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7682ecfd63363b92e4cc3f1bdbefb619a95a9fbc' => 
    array (
      0 => '/var/www/html/piwigo/themes/bootstrap_darkroom/template/http_scheme.tpl',
      1 => 1713951806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6676e431373643_56681545 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_SERVER['HTTP_X_FORWARDED_PROTO']))) {?>
    <?php $_smarty_tpl->_assignInScope('http_scheme', $_SERVER['HTTP_X_FORWARDED_PROTO'] ,false ,2);
} elseif ((isset($_SERVER['HTTPS'])) && $_SERVER['HTTPS'] == "on") {?>
    <?php $_smarty_tpl->_assignInScope('http_scheme', 'https' ,false ,2);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('http_scheme', 'http' ,false ,2);
}
}
}
