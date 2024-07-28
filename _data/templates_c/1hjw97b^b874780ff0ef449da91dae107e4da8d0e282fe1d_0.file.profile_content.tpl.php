<?php
/* Smarty version 4.3.1, created on 2024-07-28 16:04:50
  from '/var/www/html/piwigo/themes/bootstrap_darkroom/template/profile_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66a66c2220cc30_24253018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b874780ff0ef449da91dae107e4da8d0e282fe1d' => 
    array (
      0 => '/var/www/html/piwigo/themes/bootstrap_darkroom/template/profile_content.tpl',
      1 => 1722182687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a66c2220cc30_24253018 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->fluid_width) {?>-fluid<?php }?>">
    <form method="post" name="profile" action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
" id="profile" class="form-horizontal">
        <div class="card">
            <h4 class="card-header">
                <?php echo l10n('Registration');?>

            </h4>
            <div class="card-body">
              <fieldset>
<?php if ((isset($_smarty_tpl->tpl_vars['loaded_plugins']->value['user_custom_fields']))) {
echo $_smarty_tpl->tpl_vars['UCF_PROFILE_ADD']->value;?>

<?php } else { ?>
                <div class="form-group row">
                    <label for="username" class="col-12 col-md-3 col-form-label"><?php echo l10n('Username');?>
</label>
                    <div class="col-12 col-md-4">
                        <input id="username" class="form-control-plaintext" type="text" value="<?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
" readonly/>
                    </div>
                </div>
<?php if (!$_smarty_tpl->tpl_vars['SPECIAL_USER']->value) {?>                 <div class="form-group row">
                    <label for="mail_address" class="col-12 col-md-3 col-form-label"><?php echo l10n('Email address');?>
</label>
                    <div class="col-12 col-md-4">
                        <input type="text" name="mail_address" id="mail_address" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
" placeholder="<?php echo l10n('Email address');?>
">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="password" class="col-12 col-md-3 col-form-label"><?php echo l10n('Password');?>
</label>
                    <div class="col-12 col-md-4">
                        <input type="password" name="password" id="password" class="form-control" value="" placeholder="<?php echo l10n('Password');?>
">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="use_new_pwd" class="col-12 col-md-3 col-form-label"><?php echo l10n('New password');?>
</label>
                    <div class="col-12 col-md-4">
                        <input type="password" name="use_new_pwd" id="use_new_pwd" class="form-control" value="" placeholder="<?php echo l10n('New password');?>
">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="passwordConf" class="col-12 col-md-3 col-form-label"><?php echo l10n('Confirm Password');?>
</label>
                    <div class="col-12 col-md-4">
                        <input type="password" name="passwordConf" id="passwordConf" class="form-control" value="" placeholder="<?php echo l10n('Confirm Password');?>
">
                    </div>
                </div>
<?php }?>
              </fieldset>   
<?php if (!$_smarty_tpl->tpl_vars['ALLOW_USER_CUSTOMIZATION']->value) {?>
                <div class="form-group row">
                    <div class="col-12 col-md-offset-2 col-12 col-md-10">
                        <input class="btn btn-primary btn-raised" type="submit" name="validate" value="<?php echo l10n('Submit');?>
">
                        <input class="btn btn-primary btn-raised" type="reset" name="reset" value="<?php echo l10n('Reset');?>
">
                    </div>
                </div>
<?php }
}?>
            </div>
        </div>

        <input type="hidden" name="redirect" value="<?php echo $_smarty_tpl->tpl_vars['REDIRECT']->value;?>
">
        <input type="hidden" name="pwg_token" value="<?php echo $_smarty_tpl->tpl_vars['PWG_TOKEN']->value;?>
">
    </form>
</div>
<?php }
}
