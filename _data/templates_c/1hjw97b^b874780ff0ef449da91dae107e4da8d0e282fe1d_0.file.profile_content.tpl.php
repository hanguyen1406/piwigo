<?php
/* Smarty version 4.3.1, created on 2024-08-10 09:36:03
  from '/var/www/html/piwigo/themes/bootstrap_darkroom/template/profile_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66b734838a8ae3_24742024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b874780ff0ef449da91dae107e4da8d0e282fe1d' => 
    array (
      0 => '/var/www/html/piwigo/themes/bootstrap_darkroom/template/profile_content.tpl',
      1 => 1723282560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b734838a8ae3_24742024 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/piwigo/include/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
?>
<div class="container<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->fluid_width) {?>-fluid<?php }?>">
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
                <div class="form-group row">
                    <label for="nb_image_page" class="col-12 col-md-3 col-form-label"><?php echo l10n('Number of photos per page');?>
</label>
                    <div class="col-12 col-md-2">
                        <input type="text" maxlength="3" name="nb_image_page" id="nb_image_page" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['NB_IMAGE_PAGE']->value;?>
">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="language" class="col-12 col-md-3 col-form-label"><?php echo l10n('Language');?>
</label>
                    <div class="col-12 col-md-4">
                        <select class="form-control" name="language">
<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['language_options']->value,'selected'=>$_smarty_tpl->tpl_vars['language_selection']->value),$_smarty_tpl);?>

                        </select>
                    </div>
                </div>
            </div>

        </div>
        <hr>
        <input class="btn btn-primary btn-raised" type="submit" name="validate" value="<?php echo l10n('Submit');?>
">
        <input class="btn btn-info btn-raised" type="reset" name="reset" value="<?php echo l10n('Reset');?>
">
        <input class="btn btn-warning btn-raised" type="submit" name="reset_to_default" value="<?php echo l10n('Reset to default values');?>
">

        <div class="card my-3">
            <h4 class="card-header">
                Nhiệm vụ nhận xu free
            </h4>
            <div class="card-body">
                <table class="table">
                    <thead class="table-dark">
                        <th>Nhiệm vụ</th>
                        <th>Trạng thái</th>
                        <th>Credit</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Liên kết Facebook vào hệ thống Piwigo <br>
                            <div onclick="copyToClipboard('<?php echo $_smarty_tpl->tpl_vars['HASH']->value;?>
')" style="cursor: pointer; width:fit-content">
                                Mã của bạn: 
                                <span id="copyHash" style="color: red;"><b id="hash"><?php echo $_smarty_tpl->tpl_vars['HASH']->value;?>
</b></span>
                                <img style="position:relative; top: -2px" width=20 height=20 src="/piwigo/icons/copy.png"/>
                                (Bình luận vào <a target="_blank" style="color: blue" href="https://www.facebook.com/share/p/AHCxCvBjChfXrxsr/">bài viết</a> này)
                            </div>
                            </td>
                            <td>Chưa làm</td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <td>Follow fanpage Admin Đặng Tuấn</td>
                            <td>Chưa làm</td>
                            <td>100</td>
                        </tr>
                    </tbody>
                </table>
            <div>
        <div>

<?php if ($_smarty_tpl->tpl_vars['ALLOW_USER_CUSTOMIZATION']->value) {
}?>
        <input type="hidden" name="redirect" value="<?php echo $_smarty_tpl->tpl_vars['REDIRECT']->value;?>
">
        <input type="hidden" name="pwg_token" value="<?php echo $_smarty_tpl->tpl_vars['PWG_TOKEN']->value;?>
">
    </form>
</div>
<?php echo '<script'; ?>
>
    async function copyToClipboard(text) {
        try {
            await navigator.clipboard.writeText(text);
            alert("Đã copy");

        } catch (error) {
            console.log("An error occurred:", error.message);
        };
    };
<?php echo '</script'; ?>
><?php }
}
