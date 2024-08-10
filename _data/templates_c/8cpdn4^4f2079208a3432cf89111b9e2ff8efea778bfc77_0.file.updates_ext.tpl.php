<?php
/* Smarty version 4.3.1, created on 2024-08-10 07:51:33
  from '/var/www/html/piwigo/admin/themes/default/template/updates_ext.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66b71c05676318_23347106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f2079208a3432cf89111b9e2ff8efea778bfc77' => 
    array (
      0 => '/var/www/html/piwigo/admin/themes/default/template/updates_ext.tpl',
      1 => 1702327276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b71c05676318_23347106 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.ajaxmanager','load'=>'footer','require'=>'jquery','path'=>'themes/default/js/plugins/jquery.ajaxmanager.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.jgrowl','load'=>'footer','require'=>'jquery','path'=>'themes/default/js/plugins/jquery.jgrowl_minimized.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/default/js/plugins/jquery.jgrowl.css"),$_smarty_tpl ) );?>


<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery.ui.effect-blind,jquery.ajaxmanager,jquery.jgrowl'));
$_block_repeat=true;
echo $_block_plugin1->block_footer_script(array('require'=>'jquery.ui.effect-blind,jquery.ajaxmanager,jquery.jgrowl'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
var pwg_token = '<?php echo $_smarty_tpl->tpl_vars['PWG_TOKEN']->value;?>
';
var extType = '<?php echo $_smarty_tpl->tpl_vars['EXT_TYPE']->value;?>
';
var confirmMsg  = '<?php echo strtr((string)l10n('Are you sure?'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
var errorHead   = '<?php echo strtr((string)l10n('ERROR'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
var successHead = '<?php echo strtr((string)l10n('Update Complete'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
var errorMsg    = '<?php echo strtr((string)l10n('an error happened'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
var restoreMsg  = '<?php echo strtr((string)l10n('Reset ignored updates'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';


var todo = 0;
var queuedManager = $.manageAjax.create('queued', { 
	queue: true,  
	maxRequests: 1,
  beforeSend: function() { autoupdate_bar_toggle(1); },
  complete: function() { autoupdate_bar_toggle(-1); }
});

function updateAll() {
  jQuery('.updateExtension').each( function() {
    if (jQuery(this).parents('div').css('display') == 'block')
      jQuery(this).click();
  });
};

function ignoreAll() {
  jQuery('.ignoreExtension').each( function() {
    if (jQuery(this).parents('div').css('display') == 'block')
      jQuery(this).click();
  });
};

function resetIgnored() {
  jQuery.ajax({
    type: 'GET',
    url: 'ws.php',
    dataType: 'json',
    data: { method: 'pwg.extensions.ignoreUpdate', reset: true, type: extType, pwg_token: pwg_token, format: 'json' },
    success: function(data) {
      if (data['stat'] == 'ok') {
        jQuery(".pluginBox, fieldset").show();
        jQuery(".pluginBox").attr('data-ignored', 'false')
        jQuery("#update_all").show();
        jQuery("#ignore_all").show();
        jQuery("#up_to_date").hide();
        jQuery("#reset_ignore").hide();
        jQuery("#ignored").hide();
        checkFieldsets();
      }
    }
  });
};

function checkFieldsets() {
  var types = new Array('plugins', 'themes', 'languages');
  var total = 0;
  var ignored = 0;
  for (i=0;i<3;i++) {
    nbExtensions = 0;
    jQuery("fieldset[data-type="+types[i]+"] .pluginBox").each(function(index) {
      if (jQuery(this).attr('data-ignored')== 'true')
        ignored++;
      else
        nbExtensions++;
    });
    total = total + nbExtensions;
    if (nbExtensions == 0)
      jQuery("#"+types[i]).hide();
  }

  if (total == 0) {
    jQuery("#update_all").hide();
    jQuery("#ignore_all").hide();
    jQuery("#up_to_date").show();
  }
  if (ignored > 0) {
    jQuery("#reset_ignore").val(restoreMsg + ' (' + ignored + ')');
  }
};

function updateExtension(type, id, revision) {
  queuedManager.add({
    type: 'GET',
    dataType: 'json',
    url: 'ws.php',
    data: { method: 'pwg.extensions.update', type: type, id: id, revision: revision, pwg_token: pwg_token, format: 'json' },
    success: function(data) {
      if (data['stat'] == 'ok') {
        jQuery.jGrowl( data['result'], { theme: 'success', header: successHead, life: 4000, sticky: false });
        jQuery("#"+type+"_"+id).remove();
        checkFieldsets();
      } else {
        jQuery.jGrowl( data['result'], { theme: 'error', header: errorHead, sticky: true });
      }
    },
    error: function(data) {
      jQuery.jGrowl( errorMsg, { theme: 'error', header: errorHead, sticky: true });
    }
  });
};

function ignoreExtension(type, id) {
  queuedManager.add({
    type: 'GET',
    url: 'ws.php',
    dataType: 'json',
    data: { method: 'pwg.extensions.ignoreUpdate', type: type, id: id, pwg_token: pwg_token, format: 'json' },
    success: function(data) {
      if (data['stat'] == 'ok') {
        jQuery("#"+type+"_"+id).hide();
        jQuery("#"+type+"_"+id).attr('data-ignored', 'true')
        jQuery("#reset_ignore").show();
        checkFieldsets();
      }
    }
  });
};

function autoupdate_bar_toggle(i) {
  todo = todo + i;
  if ((i == 1 && todo == 1) || (i == -1 && todo == 0))
    jQuery('.autoupdate_bar').toggle();
}

checkFieldsets();

<?php $_block_repeat=false;
echo $_block_plugin1->block_footer_script(array('require'=>'jquery.ui.effect-blind,jquery.ajaxmanager,jquery.jgrowl'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'common','load'=>'footer','path'=>'admin/themes/default/js/common.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.confirm','load'=>'footer','require'=>'jquery','path'=>'themes/default/js/plugins/jquery-confirm.min.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/default/js/plugins/jquery-confirm.min.css"),$_smarty_tpl ) );?>

<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin2->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

const are_you_sure_msg  = '<?php echo strtr((string)l10n('Are you sure?'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
const confirm_msg = '<?php echo l10n("Yes, I am sure");?>
';
const cancel_msg = "<?php echo l10n("No, I have changed my mind");?>
";
$("#update_all").click(function() {
  const title_msg = "<?php echo l10n('Are you sure you want to update all extensions?');?>
";
  $.confirm({
      title: title_msg,
      buttons: {
        confirm: {
          text: confirm_msg,
          btnClass: 'btn-red',
          action: function () {
            updateAll();
          }
        },
        cancel: {
          text: cancel_msg
        }
      },
      ...jConfirm_confirm_options
    });
})
<?php $_block_repeat=false;
echo $_block_plugin2->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php if ($_smarty_tpl->tpl_vars['isWebmaster']->value == 1) {?>

<div class="autoupdate_bar">
<div class="head-button-1 icon-ok-circled" id="update_all"><?php echo l10n('Update All');?>
</div>
<div class="head-button-2 icon-block" id="ignore_all" onClick="ignoreAll(); return false;"><?php echo l10n('Ignore All');?>
</div>
<div class="head-button-2 icon-ccw" id="reset_ignore" onClick="resetIgnored(); return false;" <?php if (!$_smarty_tpl->tpl_vars['SHOW_RESET']->value) {?>style="display:none;"<?php }?>><?php echo l10n('Reset ignored updates');?>
</div>
</div>
<div class="autoupdate_bar" style="display:none;">
<?php echo l10n('Please wait...');?>
<br><img src="admin/themes/default/images/ajax-loader-bar.gif">
</div>

<p id="up_to_date" style="display:none; text-align:left; margin-left:20px;"><?php echo l10n(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sprintf' ][ 0 ], array( 'All %s are up to date.',$_smarty_tpl->tpl_vars['EXT_TYPE']->value )));?>
</p>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['UPDATES_EXTENSION']->value, 'updates', false, 'type');
$_smarty_tpl->tpl_vars['updates']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['updates']->value) {
$_smarty_tpl->tpl_vars['updates']->do_else = false;
if (!empty($_smarty_tpl->tpl_vars['updates']->value)) {?>
    <fieldset id="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" class="pluginContainer pluginUpdateContainer line-form" data-type="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
    <legend>
<?php if ($_smarty_tpl->tpl_vars['type']->value == 'plugins') {?>
      <span class="icon-puzzle icon-green"></span><?php echo l10n('Plugins');?>

<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'themes') {?>
      <span class="icon-brush icon-blue"></span><?php echo l10n('Themes');?>

<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'languages') {?>
      <span class="icon-language icon-purple"></span><?php echo l10n('Languages');?>

<?php }?>
    </legend>
    
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['updates']->value, 'extension');
$_smarty_tpl->tpl_vars['extension']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extension']->value) {
$_smarty_tpl->tpl_vars['extension']->do_else = false;
?>
      <div class="pluginBox pluginMiniBox" id="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['extension']->value['EXT_ID'];?>
" <?php if ($_smarty_tpl->tpl_vars['extension']->value['IGNORED']) {?>data-ignored="true" style="display:none;"<?php }?>>
        <div class="pluginContent">
          <div class="pluginName">
            <?php echo $_smarty_tpl->tpl_vars['extension']->value['EXT_NAME'];?>

          </div>
          <div class="pluginDesc" id="desc_<?php echo $_smarty_tpl->tpl_vars['extension']->value['ID'];?>
">
            <span class="plugin-version plugin-version-old icon-flow-branch" title="<?php echo l10n("Current Version");?>
"><?php echo $_smarty_tpl->tpl_vars['extension']->value['CURRENT_VERSION'];?>
</span> <i class="icon-right"></i> <span class="plugin-version icon-flow-branch" title="<?php echo l10n("New Version");?>
"><?php echo $_smarty_tpl->tpl_vars['extension']->value['NEW_VERSION'];?>
</span>
            <div class="plugin-revision-info"><span><?php echo $_smarty_tpl->tpl_vars['extension']->value['REV_DESC'];?>
</span></div>
            <a href='<?php echo $_smarty_tpl->tpl_vars['extension']->value['EXT_URL'];?>
' target="_blank" class="plugin-update-link icon-info-circled-1"><?php echo l10n('More information');?>
</a>
          </div>
          <div class="pluginActions">
            <a href="#" onClick="updateExtension('<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['extension']->value['EXT_ID'];?>
', <?php echo $_smarty_tpl->tpl_vars['extension']->value['REVISION_ID'];?>
);" class="updateExtension pluginActionLevel1"> <i class="icon-ok-circled"></i> <?php echo l10n('Install');?>
</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['extension']->value['URL_DOWNLOAD'];?>
" class="pluginActionLevel2"> <i class="icon-download"></i> <?php echo l10n('Download');?>
</a>
            <a href="#" onClick="ignoreExtension('<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['extension']->value['EXT_ID'];?>
'); return false;" class="ignoreExtension pluginActionLevel2"><i class="icon-block"></i><?php echo l10n('Ignore this update');?>
</a>
          </div>
        </div>
      </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </fieldset>
<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
