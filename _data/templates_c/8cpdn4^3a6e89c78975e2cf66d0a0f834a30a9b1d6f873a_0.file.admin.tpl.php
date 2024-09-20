<?php
/* Smarty version 4.3.1, created on 2024-09-20 11:58:53
  from '/var/www/html/piwigo/admin/themes/default/template/admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66ed010d07b8f0_75833618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a6e89c78975e2cf66d0a0f834a30a9b1d6f873a' => 
    array (
      0 => '/var/www/html/piwigo/admin/themes/default/template/admin.tpl',
      1 => 1722853214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/colorbox.inc.tpl' => 1,
  ),
),false)) {
function content_66ed010d07b8f0_75833618 (Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin2->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
jQuery.fn.lightAccordion = function(options) {
  var settings = $.extend({
    header: 'dt',
    content: 'dd',
    active: 0
  }, options);
  
  return this.each(function() {
    var self = jQuery(this);
    
    var contents = self.find(settings.content),
        headers = self.find(settings.header);
    
    contents.not(contents[settings.active]).hide();
  
    self.on('click', settings.header, function() {
        var content = jQuery(this).next(settings.content);
        content.slideDown();
        contents.not(content).slideUp();
    });
  });
};

$('#menubar').lightAccordion({
  active: <?php echo $_smarty_tpl->tpl_vars['ACTIVE_MENU']->value;?>

});

/* in case we have several infos/errors/warnings display bullets */
jQuery(document).ready(function() {
  var eiw = ["infos","erros","warnings", "messages"];

  for (var i = 0; i < eiw.length; i++) {
    var boxType = eiw[i];

    if (jQuery("."+boxType+" ul li").length > 1) {
      jQuery("."+boxType+" ul li").css("list-style-type", "square");
      jQuery("."+boxType+" .eiw-icon").css("margin-right", "20px");
    }
  }

  if (jQuery('h2').length > 0) {
    jQuery('h1').html(jQuery('h2').html());
  }
});
<?php $_block_repeat=false;
echo $_block_plugin2->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<div id="menubar">
  
  <div id="adminHome"><a href="<?php echo $_smarty_tpl->tpl_vars['U_ADMIN']->value;?>
" class="admin-main"><i class="icon-television"></i> <?php echo l10n('Dashboard');?>
</a></div>
	<dl>
		<dt><i class="icon-picture"> </i><span><?php echo l10n('Photos');?>
&nbsp;</span><i class="icon-down-open open-menu"></i></dt>
		<dd>
			<ul>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['U_ADD_PHOTOS']->value;?>
"><i class="icon-plus-circled"></i><?php echo l10n('Add');?>
</a></li>
<?php if ($_smarty_tpl->tpl_vars['SHOW_RATING']->value) {?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['U_RATING']->value;?>
"><i class="icon-star"></i><?php echo l10n('Rating');?>
</a></li>
<?php }?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['U_TAGS']->value;?>
"><i class="icon-tags"></i><?php echo l10n('Tags');?>
</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['U_RECENT_SET']->value;?>
"><i class="icon-clock"></i><?php echo l10n('Recent photos');?>
</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['U_BATCH']->value;?>
"><i class="icon-th"></i><?php echo l10n('Batch Manager');?>
</a></li>
<?php if ($_smarty_tpl->tpl_vars['NB_PHOTOS_IN_CADDIE']->value > 0) {?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['U_CADDIE']->value;?>
"><i class="icon-flag"></i><?php echo l10n('Caddie');?>
<span class="adminMenubarCounter"><?php echo $_smarty_tpl->tpl_vars['NB_PHOTOS_IN_CADDIE']->value;?>
</span></a></li>
<?php }
if ($_smarty_tpl->tpl_vars['NB_ORPHANS']->value > 0) {?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['U_ORPHANS']->value;?>
"><i class="icon-heart-broken"></i><?php echo l10n('Orphans');?>
<span class="adminMenubarCounter"><?php echo $_smarty_tpl->tpl_vars['NB_ORPHANS']->value;?>
</span></a></li>
<?php }?>
			</ul>
		</dd>
  </dl>
  <dl>
		<dt><i class="icon-sitemap"> </i><span><?php echo l10n('Albums');?>
&nbsp;</span><i class="icon-down-open open-menu"></i></dt>
    <dd>
      <ul>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['U_ALBUMS']->value;?>
"><i class="icon-folder-open"></i><?php echo l10n('Manage');?>
</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['U_CAT_OPTIONS']->value;?>
"><i class="icon-pencil"></i><?php echo l10n('Properties');?>
</a></li>
      </ul>
    </dd>
  </dl>
  <dl>
		<dt><i class="icon-users"> </i><span><?php echo l10n('Users');?>
&nbsp;</span><i class="icon-down-open open-menu"></i></dt>
		<dd>
      <ul>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['U_USERS']->value;?>
"><i class="icon-user-add"></i><?php echo l10n('Manage');?>
</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['U_FACEBOOK']->value;?>
"><i class="icon-user-1"></i>Liên kết Facebook</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['U_GROUPS']->value;?>
"><i class="icon-group"></i><?php echo l10n('Groups');?>
</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['U_NOTIFICATION_BY_MAIL']->value;?>
"><i class="icon-mail-1"></i><?php echo l10n('Notification');?>
</a></li>
      </ul>
		</dd>
  </dl>
  <dl>
		<dt><a href="<?php echo $_smarty_tpl->tpl_vars['U_PLUGINS']->value;?>
" class="admin-main"><i class="icon-puzzle"> </i><span><?php echo l10n('Plugins');?>
&nbsp;</span></a></dt>
  </dl>
  <dl>
		<dt><i class="icon-wrench"> </i><span><?php echo l10n('Tools');?>
&nbsp;</span><i class="icon-down-open open-menu"></i></dt>
		<dd>
      <ul>
<?php if ($_smarty_tpl->tpl_vars['ENABLE_SYNCHRONIZATION']->value) {?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['U_CAT_UPDATE']->value;?>
"><i class="icon-exchange"></i><?php echo l10n('Synchronize');?>
</a></li>
<?php }?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['U_HISTORY_STAT']->value;?>
"><i class="icon-signal"></i><?php echo l10n('History');?>
</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['U_MAINTENANCE']->value;?>
"><i class="icon-tools"></i><?php echo l10n('Maintenance');?>
</a></li>
<?php if ((isset($_smarty_tpl->tpl_vars['U_COMMENTS']->value))) {?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['U_COMMENTS']->value;?>
"><i class="icon-chat"></i><?php echo l10n('Comments');?>

<?php if ((isset($_smarty_tpl->tpl_vars['NB_PENDING_COMMENTS']->value)) && $_smarty_tpl->tpl_vars['NB_PENDING_COMMENTS']->value > 0) {?>
          <span class="adminMenubarCounter" title="<?php echo l10n('%d waiting for validation',$_smarty_tpl->tpl_vars['NB_PENDING_COMMENTS']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['NB_PENDING_COMMENTS']->value;?>
</span>
        <?php }?></a></li>
<?php }
if ((isset($_smarty_tpl->tpl_vars['U_UPDATES']->value))) {?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['U_UPDATES']->value;?>
"><i class="icon-arrows-cw"></i><?php echo l10n('Updates');?>
</a></li>
<?php }?>
      </ul>
		</dd>
  </dl>
  <dl>
		<dt><i class="icon-cog"> </i><span><?php echo l10n('Configuration');?>
&nbsp;</span><i class="icon-down-open open-menu"></i></dt>
		<dd>
      <ul>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['U_CONFIG_GENERAL']->value;?>
"><i class="icon-cog-alt"></i><?php echo l10n('Options');?>
</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['U_CONFIG_MENUBAR']->value;?>
"><i class="icon-menu"></i><?php echo l10n('Menu Management');?>
</a></li>
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['U_SHOW_TEMPLATE_TAB']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['U_CONFIG_EXTENTS']->value;?>
"><i class="icon-code"></i><?php echo l10n('Templates');?>
</a></li>
<?php }?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['U_CONFIG_LANGUAGES']->value;?>
"><i class="icon-language"></i><?php echo l10n('Languages');?>
</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['U_CONFIG_THEMES']->value;?>
"><i class="icon-brush"></i><?php echo l10n('Themes');?>
</a></li>
      </ul>
    </dd>
  </dl>
</div> <!-- menubar -->

<div id="content" class="content">

  <h1><?php echo $_smarty_tpl->tpl_vars['ADMIN_PAGE_TITLE']->value;?>
<span class="admin-object-id"><?php echo $_smarty_tpl->tpl_vars['ADMIN_PAGE_OBJECT_ID']->value;?>
</span></h1>

<?php if ((isset($_smarty_tpl->tpl_vars['TABSHEET']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['TABSHEET']->value;?>

<?php }
if ((isset($_smarty_tpl->tpl_vars['U_HELP']->value))) {
$_smarty_tpl->_subTemplateRender('file:include/colorbox.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin3->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
  jQuery('.help-popin').colorbox({ width:"500px" });
<?php $_block_repeat=false;
echo $_block_plugin3->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
  <ul class="HelpActions">
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['U_HELP']->value;?>
&amp;output=content_only" title="<?php echo l10n('Help');?>
" class="help-popin"><span class="icon-help-circled"></span></a></li>
  </ul>
<?php }?>
<div class="eiw">
<?php if ((isset($_smarty_tpl->tpl_vars['errors']->value))) {?>
  <div class="errors">
    <i class="eiw-icon icon-cancel"></i>
    <ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
      <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  </div>
<?php }
if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
  <div class="infos">
    <i class="eiw-icon icon-ok"></i>
    <ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'info');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?>
      <li><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  </div>
<?php }
if ((isset($_smarty_tpl->tpl_vars['warnings']->value))) {?>
  <div class="warnings">
    <i class="eiw-icon icon-attention"></i>
    <ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['warnings']->value, 'warning');
$_smarty_tpl->tpl_vars['warning']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['warning']->value) {
$_smarty_tpl->tpl_vars['warning']->do_else = false;
?>
      <li><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  </div>
<?php }
if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
  <div class="messages">
    <i class="eiw-icon icon-info-circled-1"></i>
    <ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'message');
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
?>
      <li><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  </div>
<?php }?>
</div> 
  <?php echo $_smarty_tpl->tpl_vars['ADMIN_CONTENT']->value;?>

</div>
<?php }
}
