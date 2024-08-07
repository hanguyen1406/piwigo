<?php
/* Smarty version 4.3.1, created on 2024-08-07 10:42:31
  from '/var/www/html/piwigo/admin/themes/default/template/verify_facebook.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66b34f97d3bef8_60472744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c72d573a12da89bec9d02a8d91f1cf460d11bc69' => 
    array (
      0 => '/var/www/html/piwigo/admin/themes/default/template/verify_facebook.tpl.html',
      1 => 1723027349,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b34f97d3bef8_60472744 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'common','load'=>'header','require'=>'jquery','path'=>'admin/themes/default/js/common.js'),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.selectize','load'=>'header','path'=>'themes/default/js/plugins/selectize.min.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('id'=>'jquery.selectize','path'=>"themes/default/js/plugins/selectize.".((string)$_smarty_tpl->tpl_vars['themeconf']->value['colorscheme']).".css"),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.ui.slider','require'=>'jquery.ui','load'=>'header','path'=>'themes/default/js/ui/minified/jquery.ui.slider.min.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/default/js/ui/theme/jquery.ui.slider.css"),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.confirm','load'=>'header','require'=>'jquery','path'=>'themes/default/js/plugins/jquery-confirm.min.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/default/js/plugins/jquery-confirm.min.css"),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.tipTip','load'=>'header','path'=>'themes/default/js/plugins/jquery.tipTip.minified.js'),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"admin/themes/default/fontello/css/animation.css",'order'=>10),$_smarty_tpl ) );?>
 
<style>
    #line1{
        width: 560px;
    }
    #user-table{
        display: flex;
    }
    #user_search{
        width: 500px;
    }
    #xn{
        width: 100px;
        margin-top: 3px;
    }
</style>
<div style="text-align: left;">
    <div id="user-table">
        <div id="line1">
            <input id="user_search" class='search-input' type='text' placeholder='Dán cookie ở đây'>
            <input id="user_search" class='search-input' type='text' placeholder='Dán link post ở đây'>
        </div>
        <div id="xn" class="user-header-button">
            <label class="head-button-2 edit-guest-user-button">
            <p>Xác nhận</p>
            </label>
        </div>
    </div>
    <div id="cookie_status">
        sống
    </div>
    <div id="cmtuser">

    </div>
</div>
<?php echo '<script'; ?>
>
    async function getcmt(url, formDataObject) {
        const urlEncodedData = new URLSearchParams();
        for (const key in formDataObject) {
            if (formDataObject.hasOwnProperty(key)) {
                urlEncodedData.append(key, formDataObject[key]);
            }
        }

        const headers = new Headers();
        headers.append("Content-Type", "application/x-www-form-urlencoded");
        // console.log(urlEncodedData);
        
        const requestOptions = {
            method: 'POST', 
            body: urlEncodedData.toString(),
            headers: headers
        };

        try {
            const response = await fetch(url, requestOptions);
            const result = await response.json();
            console.log(result);
            let cmtuser = document.querySelector("#content");
            if (result.status == 'success') {
                for (let i = 0; i < result.data.length; i++) {
                    const element = result.data[i];
                    let div = document.createElement('div');
                    div.innerHTML = element.content;
                    cmtuser.appendChild(div);
                }

            }

        } catch (error) {
            console.error('Error:', error);
        }
    }

    const url = 'https://hanguyen146.mooo.com/api'; // Replace with the actual URL
    const formDataObject = {
        cookie: 'sb=9dmxZv0R6OXtkW3yv1YJGaSd;wd=1536x695;datr=9dmxZrRDeLT0e6RHTKhDSfTx;dpr=1.25;locale=en_GB;c_user=100088421881491;xs=8%3AR2dqDoQsUCyhjg%3A2%3A1722931771%3A-1%3A387;ps_l=1;ps_n=1;fr=0v90t3m1ZFSEhLyMS.AWXpWg2jjPJQXWxKs3yYcuKTBvA.Bmsdn1..AAA.0.0.BmseAV.AWUQwugvGQw;presence=C%7B%22t3%22%3A%5B%5D%2C%22utc3%22%3A1722933271478%2C%22v%22%3A1%7D',
        linkpost: 'https://mbasic.facebook.com/groups/Tu.Hoc.Guitar/permalink/2277821359218528'
    };
    document.querySelector("#xn").addEventListener('click', async () => {
        getcmt(url, formDataObject);

    })


<?php echo '</script'; ?>
>
<?php }
}
