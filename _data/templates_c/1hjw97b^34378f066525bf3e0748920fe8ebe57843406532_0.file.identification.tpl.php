<?php
/* Smarty version 4.3.1, created on 2024-06-22 10:32:05
  from '/var/www/html/piwigo/themes/bootstrap_darkroom/template/identification.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676a8255cb6a3_31157385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34378f066525bf3e0748920fe8ebe57843406532' => 
    array (
      0 => '/var/www/html/piwigo/themes/bootstrap_darkroom/template/identification.tpl',
      1 => 1713951806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:infos_errors.tpl' => 1,
  ),
),false)) {
function content_6676a8255cb6a3_31157385 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-contextual navbar-expand-lg <?php echo $_smarty_tpl->tpl_vars['theme_config']->value->navbar_contextual_style;?>
 <?php echo $_smarty_tpl->tpl_vars['theme_config']->value->navbar_contextual_bg;?>
 sticky-top mb-5">
    <div class="container<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->fluid_width) {?>-fluid<?php }?>">
        <div class="navbar-brand mr-auto"><a href="<?php echo $_smarty_tpl->tpl_vars['U_HOME']->value;?>
"><?php echo l10n('Home');?>
</a><?php echo $_smarty_tpl->tpl_vars['LEVEL_SEPARATOR']->value;?>
<a href><?php echo l10n('Identification');?>
</a></div>
        <ul class="navbar-nav justify-content-end">
             <?php if (!empty($_smarty_tpl->tpl_vars['PLUGIN_INDEX_ACTIONS']->value)) {
echo $_smarty_tpl->tpl_vars['PLUGIN_INDEX_ACTIONS']->value;
}?>
        </ul>
    </div>
</nav>

<?php $_smarty_tpl->_subTemplateRender('file:infos_errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->fluid_width) {?>-fluid<?php }?>">
    <form action="<?php echo $_smarty_tpl->tpl_vars['F_LOGIN_ACTION']->value;?>
" method="post" name="login_form" class="form-horizontal">
        <div class="card">
            <h4 class="card-header">
                <?php echo l10n('Connection settings');?>

            </h4>
            <div class="card-body">
                <div class="form-group">
                    <label for="username" class="col-sm-2 control-label"><?php echo l10n('Username');?>
</label>
                    <div class="col-sm-4">
                        <input tabindex="1" class="form-control" type="text" name="username" id="username" placeholder="<?php echo l10n('Username');?>
">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-2 control-label"><?php echo l10n('Password');?>
</label>
                    <div class="col-sm-4">
                        <input tabindex="2" class="form-control" type="password" name="password" id="password" placeholder="<?php echo l10n('Password');?>
">
                    </div>
                </div>
<?php if ($_smarty_tpl->tpl_vars['authorize_remembering']->value) {?>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label>
                                <input tabindex="3" type="checkbox" name="remember_me" id="remember_me" value="1"> <?php echo l10n('Auto login');?>

                            </label>
                        </div>
                    </div>
                </div>
<?php }?>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="hidden" name="redirect" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'urlencode' ][ 0 ], array( $_smarty_tpl->tpl_vars['U_REDIRECT']->value ));?>
">
                        <input tabindex="4" type="submit" name="login" value="<?php echo l10n('Submit');?>
" class="btn btn-primary btn-raised">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
<?php if ((isset($_smarty_tpl->tpl_vars['U_REGISTER']->value))) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['U_REGISTER']->value;?>
" title="<?php echo l10n('Register');?>
" class="pwg-state-default pwg-button">
                                <span class="fas fa-user"></span> <?php echo l10n('Register');?>

                            </a>
<?php }?>
                        &nbsp;&nbsp;&nbsp;
<?php if ((isset($_smarty_tpl->tpl_vars['U_LOST_PASSWORD']->value))) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['U_LOST_PASSWORD']->value;?>
" title="<?php echo l10n('Forgot your password?');?>
" class="pwg-state-default pwg-button">
                                <span class="fas fa-lock"></span> <?php echo l10n('Forgot your password?');?>

                            </a>
<?php }?>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<?php echo '<script'; ?>
 type="text/javascript"><!--
    document.getElementById('username').focus();
//--><?php echo '</script'; ?>
>
<?php }
}
