<?php
/* Smarty version 4.3.1, created on 2024-06-22 10:26:24
  from '/var/www/html/piwigo/themes/bootstrap_darkroom/template/menubar_identification.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676a6d0c8b296_57162313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2849570b77f148b88933b38639135ec96d28d3a' => 
    array (
      0 => '/var/www/html/piwigo/themes/bootstrap_darkroom/template/menubar_identification.tpl',
      1 => 1713951806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6676a6d0c8b296_57162313 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="nav-item dropdown" id="identificationDropdown">
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php if ((isset($_smarty_tpl->tpl_vars['USERNAME']->value))) {?><i class="fas fa-user"></i> <?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;
} else {
echo l10n('Login');
}?></a>
    <div class="dropdown-menu dropdown-menu-right" role="menu">
<?php if ((isset($_smarty_tpl->tpl_vars['USERNAME']->value))) {?><div class="dropdown-header"><?php echo l10n('Hello');?>
 <?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
!</div><div class="dropdown-divider"></div><?php }
if ((isset($_smarty_tpl->tpl_vars['U_LOGIN']->value))) {?><div class="dropdown-header"><form class="navbar-form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['U_LOGIN']->value;?>
" id="quickconnect"><div class="form-group"><input class="form-control mb-2" type="text" name="username" id="username" value="" placeholder="<?php echo l10n('Username');?>
"><input class="form-control" type="password" name="password" id="password" placeholder="<?php echo l10n('Password');?>
"></div><?php if ($_smarty_tpl->tpl_vars['AUTHORIZE_REMEMBERING']->value) {?><div class="form-check checkbox"><label class="form-check-label"><input class="form-check-input" type="checkbox" name="remember_me" id="remember_me" value="1"> <?php echo l10n('Auto login');?>
</label></div><?php }?><input type="hidden" name="redirect" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'urlencode' ][ 0 ], array( $_SERVER['REQUEST_URI'] ));?>
"><button type="submit" class="btn btn-primary btn-raised" name="login"><?php echo l10n('Login');?>
</button></form></div><?php if ((isset($_smarty_tpl->tpl_vars['U_REGISTER']->value)) || (isset($_smarty_tpl->tpl_vars['U_LOGOUT']->value)) || (isset($_smarty_tpl->tpl_vars['U_PROFILE']->value)) || (isset($_smarty_tpl->tpl_vars['U_ADMIN']->value))) {?><div class="dropdown-divider"></div><?php }
}
if ((isset($_smarty_tpl->tpl_vars['U_REGISTER']->value))) {?><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['U_REGISTER']->value;?>
" title="<?php echo l10n('Create a new account');?>
" rel="nofollow"><?php echo l10n('Register');?>
</a><?php }
if ((isset($_smarty_tpl->tpl_vars['U_LOGOUT']->value))) {?><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['U_LOGOUT']->value;?>
"><?php echo l10n('Logout');?>
</a><?php }
if ((isset($_smarty_tpl->tpl_vars['U_PROFILE']->value))) {?><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['U_PROFILE']->value;?>
" title="<?php echo l10n('customize the appareance of the gallery');?>
"><?php echo l10n('Customize');?>
</a><?php }
if ((isset($_smarty_tpl->tpl_vars['U_ADMIN']->value))) {?><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['U_ADMIN']->value;?>
" title="<?php echo l10n('available for administrators only');?>
"><?php echo l10n('Administration');?>
</a><?php }?>
    </div>
</li>
<?php }
}
