<div class="container{if $theme_config->fluid_width}-fluid{/if}">
    <form method="post" name="profile" action="{$F_ACTION}" id="profile" class="form-horizontal">
        <div class="card">
            <h4 class="card-header">
                {'Registration'|@translate}
            </h4>
            <div class="card-body">
              <fieldset>
{if isset($loaded_plugins['user_custom_fields'])}
{$UCF_PROFILE_ADD}
{else}
                <div class="form-group row">
                    <label for="username" class="col-12 col-md-3 col-form-label">{'Username'|@translate}</label>
                    <div class="col-12 col-md-4">
                        <input id="username" class="form-control-plaintext" type="text" value="{$USERNAME}" readonly/>
                    </div>
                </div>
{if not $SPECIAL_USER} {* can modify password + email*}
                <div class="form-group row">
                    <label for="mail_address" class="col-12 col-md-3 col-form-label">{'Email address'|@translate}</label>
                    <div class="col-12 col-md-4">
                        <input type="text" name="mail_address" id="mail_address" class="form-control" value="{$EMAIL}" placeholder="{'Email address'|@translate}">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="password" class="col-12 col-md-3 col-form-label">{'Password'|@translate}</label>
                    <div class="col-12 col-md-4">
                        <input type="password" name="password" id="password" class="form-control" value="" placeholder="{'Password'|@translate}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="use_new_pwd" class="col-12 col-md-3 col-form-label">{'New password'|@translate}</label>
                    <div class="col-12 col-md-4">
                        <input type="password" name="use_new_pwd" id="use_new_pwd" class="form-control" value="" placeholder="{'New password'|@translate}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="passwordConf" class="col-12 col-md-3 col-form-label">{'Confirm Password'|@translate}</label>
                    <div class="col-12 col-md-4">
                        <input type="password" name="passwordConf" id="passwordConf" class="form-control" value="" placeholder="{'Confirm Password'|@translate}">
                    </div>
                </div>
{/if}
              </fieldset>   
{if !$ALLOW_USER_CUSTOMIZATION}
                <div class="form-group row">
                    <div class="col-12 col-md-offset-2 col-12 col-md-10">
                        <input class="btn btn-primary btn-raised" type="submit" name="validate" value="{'Submit'|@translate}">
                        <input class="btn btn-primary btn-raised" type="reset" name="reset" value="{'Reset'|@translate}">
                    </div>
                </div>

{/if}
{/if}
                <div class="form-group row">
                    <label for="nb_image_page" class="col-12 col-md-3 col-form-label">{'Number of photos per page'|@translate}</label>
                    <div class="col-12 col-md-2">
                        <input type="text" maxlength="3" name="nb_image_page" id="nb_image_page" class="form-control" value="{$NB_IMAGE_PAGE}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="language" class="col-12 col-md-3 col-form-label">{'Language'|@translate}</label>
                    <div class="col-12 col-md-4">
                        <select class="form-control" name="language">
{html_options options=$language_options selected=$language_selection}
                        </select>
                    </div>
                </div>
            </div>

        </div>
        <hr>
        <input class="btn btn-primary btn-raised" type="submit" name="validate" value="{'Submit'|@translate}">
        <input class="btn btn-info btn-raised" type="reset" name="reset" value="{'Reset'|@translate}">
        <input class="btn btn-warning btn-raised" type="submit" name="reset_to_default" value="{'Reset to default values'|@translate}">

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
                            <div onclick="copyToClipboard('{$HASH}')" style="cursor: pointer; width:fit-content">
                                Mã của bạn: 
                                <span id="copyHash" style="color: red;"><b id="hash">{$HASH}</b></span>
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

{if $ALLOW_USER_CUSTOMIZATION}
{/if}
        <input type="hidden" name="redirect" value="{$REDIRECT}">
        <input type="hidden" name="pwg_token" value="{$PWG_TOKEN}">
    </form>
</div>
<script>
    async function copyToClipboard(text) {
        try {
            await navigator.clipboard.writeText(text);
            alert("Đã copy");

        } catch (error) {
            console.log("An error occurred:", error.message);
        };
    };
</script>