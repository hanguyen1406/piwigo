<?php
/* Smarty version 4.3.1, created on 2024-06-25 13:08:34
  from '/var/www/html/piwigo/themes/bootstrap_darkroom/template/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_667ac152ee6f11_13749417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac2f0fd94ff987d3649bfb3b15f4ac99b5ddc825' => 
    array (
      0 => '/var/www/html/piwigo/themes/bootstrap_darkroom/template/register.tpl',
      1 => 1719320909,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:infos_errors.tpl' => 1,
  ),
),false)) {
function content_667ac152ee6f11_13749417 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-contextual navbar-expand-lg <?php echo $_smarty_tpl->tpl_vars['theme_config']->value->navbar_contextual_style;?>
 <?php echo $_smarty_tpl->tpl_vars['theme_config']->value->navbar_contextual_bg;?>
 sticky-top mb-5">
    <div class="container<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->fluid_width) {?>-fluid<?php }?>">
        <div class="navbar-brand mr-auto"><a href="<?php echo $_smarty_tpl->tpl_vars['U_HOME']->value;?>
"><?php echo l10n('Home');?>
</a><?php echo $_smarty_tpl->tpl_vars['LEVEL_SEPARATOR']->value;?>
<a href><?php echo l10n('Registration');?>
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
    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
" class="form-horizontal" name="register_form">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <?php echo l10n('Enter your personnal informations');?>

            </div>
            <div class="panel-body">
              <fieldset>
                <div class="form-group">
                    <label for="login" class="col-sm-2 control-label"><?php echo l10n('Username');?>
 *</label>
                    <div class="col-sm-4">
                        <input type="text" name="login" id="login" value="<?php echo $_smarty_tpl->tpl_vars['F_LOGIN']->value;?>
" class="form-control" placeholder="<?php echo l10n('Username');?>
" required="required"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-2 control-label"><?php echo l10n('Password');?>
 *</label>
                    <div class="col-sm-4">
                        <input type="password" name="password" id="password" class="form-control" placeholder="<?php echo l10n('Password');?>
" required="required"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password_conf" class="col-sm-2 control-label"><?php echo l10n('Confirm Password');?>
 *</label>
                    <div class="col-sm-4">
                        <input type="password" name="password_conf" id="password_conf" class="form-control" placeholder="<?php echo l10n('Confirm Password');?>
" required="required"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="mail_address" class="col-sm-2 control-label"><?php echo l10n('Email address');
if ($_smarty_tpl->tpl_vars['obligatory_user_mail_address']->value) {?> *<?php }?></label>
                    <div class="col-sm-4">
                        <input type="email" name="mail_address" id="mail_address" value="<?php echo $_smarty_tpl->tpl_vars['F_EMAIL']->value;?>
" class="form-control" placeholder="<?php echo l10n('Email address');?>
"<?php if ($_smarty_tpl->tpl_vars['obligatory_user_mail_address']->value) {?> required="required"<?php }?>>
<?php if (!$_smarty_tpl->tpl_vars['obligatory_user_mail_address']->value) {?>
                        (<?php echo l10n('useful when password forgotten');?>
)
<?php }?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4">Số điện thoại *</label>
                    <div class="col-sm-4">
                        <input type="text" name="phone" id="phone" placeholder="012345678" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="send_password_by_mail" value="1" checked="checked"> <?php echo l10n('Send my connection settings by email');?>

                            </label>
                        </div>
                    </div>
                </div>
              </fieldset>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="hidden" name="key" value="<?php echo $_smarty_tpl->tpl_vars['F_KEY']->value;?>
" >
                        <input type="submit" name="submit" value="<?php echo l10n('Register');?>
" class="btn btn-primary btn-raised">
                        <input type="reset" value="<?php echo l10n('Reset');?>
" class="btn btn-primary btn-raised">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<?php echo '<script'; ?>
 type="text/javascript"><!--
    document.getElementById('login').focus();
//--><?php echo '</script'; ?>
>
<?php }
}
