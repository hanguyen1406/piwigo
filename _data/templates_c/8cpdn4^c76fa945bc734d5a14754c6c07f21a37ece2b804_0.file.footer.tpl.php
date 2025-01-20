<?php
/* Smarty version 4.3.1, created on 2025-01-20 10:33:10
  from '/var/www/html/piwigo/admin/themes/default/template/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_678dc3f6317388_16579118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c76fa945bc734d5a14754c6c07f21a37ece2b804' => 
    array (
      0 => '/var/www/html/piwigo/admin/themes/default/template/footer.tpl',
      1 => 1737300690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_678dc3f6317388_16579118 (Smarty_Internal_Template $_smarty_tpl) {
?></div>
<?php if ((isset($_smarty_tpl->tpl_vars['footer_elements']->value))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['footer_elements']->value, 'elt');
$_smarty_tpl->tpl_vars['elt']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['elt']->value) {
$_smarty_tpl->tpl_vars['elt']->do_else = false;
?>
  <?php echo $_smarty_tpl->tpl_vars['elt']->value;?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['debug']->value['QUERIES_LIST']))) {?>
<div id="debug">
  <?php echo $_smarty_tpl->tpl_vars['debug']->value['QUERIES_LIST'];?>

</div>
<?php }?>

<div id="footer">
  <div>
    <a class="externalLink tiptip piwigo-logo" href="<?php echo $_smarty_tpl->tpl_vars['PHPWG_URL']->value;?>
" title="<?php echo l10n('Visit Piwigo project website');?>
"><img src="admin/themes/default/images/piwigo-grey.svg"></a>
<?php if ((isset($_smarty_tpl->tpl_vars['DISPLAY_BELL']->value)) && $_smarty_tpl->tpl_vars['DISPLAY_BELL']->value) {?>
    <span id="whats_new_notification" class="icon-blue tiptip" onclick="show_user_whats_new()" title="<?php echo l10n('What\'s new in version %s',$_smarty_tpl->tpl_vars['WHATS_NEW_MAJOR_VERSION']->value);?>
">
      <i class="icon-bell"></i>
    </span>
<?php }?>
  </div>
  <div id="pageInfos">
<?php if ((isset($_smarty_tpl->tpl_vars['debug']->value['TIME']))) {?>
    <?php echo l10n('Page generated in');?>
 <?php echo $_smarty_tpl->tpl_vars['debug']->value['TIME'];?>
 (<?php echo $_smarty_tpl->tpl_vars['debug']->value['NB_QUERIES'];?>
 <?php echo l10n('SQL queries in');?>
 <?php echo $_smarty_tpl->tpl_vars['debug']->value['SQL_TIME'];?>
) -
<?php }?>
    <?php echo l10n('Contact');?>

    <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['CONTACT_MAIL']->value;?>
?subject=<?php echo rawurlencode((string)l10n('A comment on your site'));?>
"><?php echo l10n('Webmaster');?>
</a>
  </div>
</div></div>
<div id="whats_new">
    <div id="whats_new_popin">
      <a class="icon-cancel close_whats_new" onClick="hide_user_whats_new()"></a>
      <h3><?php echo l10n('What\'s new in version %s',$_smarty_tpl->tpl_vars['WHATS_NEW_MAJOR_VERSION']->value);?>
</h3>
      <div>
        <div class="whats_new_block_container">
          <div class="whats_new_block icon-yellow">
            <h4><?php echo l10n('A new interface for user management');?>
</h4>
            <a href="<?php echo $_smarty_tpl->tpl_vars['RELEASE_NOTE_URL']->value;?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['WHATS_NEW_IMGS']->value[1];?>
"></a>
          </div>
          <div class="whats_new_block icon-green">
            <h4><?php echo l10n('Brand new features : Activities logs and PDF reader');?>
</h4>
            <a href="<?php echo $_smarty_tpl->tpl_vars['RELEASE_NOTE_URL']->value;?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['WHATS_NEW_IMGS']->value[2];?>
"></a>
          </div>
        </div>
        <div class="whats_new_block_container">
          <div class="whats_new_block icon-blue">
            <h4><?php echo l10n('Enhanced interface for batch manager and album selector');?>
</h4>
            <a href="<?php echo $_smarty_tpl->tpl_vars['RELEASE_NOTE_URL']->value;?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['WHATS_NEW_IMGS']->value[3];?>
"></a>
          </div>
          <div class="whats_new_block icon-purple">
            <h4><?php echo l10n('Even more filters for the gallery search engine');?>
</h4>
            <a href="<?php echo $_smarty_tpl->tpl_vars['RELEASE_NOTE_URL']->value;?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['WHATS_NEW_IMGS']->value[4];?>
"></a>
          </div>
        </div>
      </div>
      <div class="whats_new_buttons">
        <button onClick="hide_user_whats_new()"><i class="icon-thumbs-up"></i> <?php echo l10n('Ok, got it!');?>
</button>
        <a class="buttonLike" href="<?php echo $_smarty_tpl->tpl_vars['RELEASE_NOTE_URL']->value;?>
" target="_blank"><i class="icon-book"></i> <?php echo l10n('Read the release note');?>
</a>
      </div>
    </div>
</div>

<style>


</style>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.tipTip','load'=>'footer','path'=>'themes/default/js/plugins/jquery.tipTip.minified.js'),$_smarty_tpl ) );?>

<?php $_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array('require'=>'jquery.tipTip'));
$_block_repeat=true;
echo $_block_plugin6->block_footer_script(array('require'=>'jquery.tipTip'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
jQuery('.tiptip').tipTip({
  delay: 0,
  fadeIn: 200,
  fadeOut: 200
});

jQuery('a.externalLink').click(function() {
  window.open(jQuery(this).attr("href"));
  return false;
});

function hide_user_whats_new() {
  $.ajax({
    url: "ws.php?format=json&method=pwg.users.preferences.set",
    type: "POST",
    dataType: "JSON",
    data: {
      param: 'show_whats_new_<?php echo $_smarty_tpl->tpl_vars['WHATS_NEW_MAJOR_VERSION']->value;?>
',
      value: false,
    }
  })
  $('#whats_new').hide();
}

function show_user_whats_new() {
  $('#whats_new').show();
}

<?php if ((isset($_smarty_tpl->tpl_vars['SHOW_WHATS_NEW']->value)) && $_smarty_tpl->tpl_vars['SHOW_WHATS_NEW']->value) {?>
  show_user_whats_new()
<?php }?>



<?php $_block_repeat=false;
echo $_block_plugin6->block_footer_script(array('require'=>'jquery.tipTip'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<!-- BEGIN get_combined -->
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_combined_scripts'][0], array( array('load'=>'footer'),$_smarty_tpl ) );?>

<!-- END get_combined -->

</body>
</html><?php }
}
