<?php
/* Smarty version 4.3.1, created on 2024-08-10 07:57:20
  from '/var/www/html/piwigo/plugins/prepaid_credits/admin_credit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66b71d60a7a610_91903510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3210b21e0a9d9b9b87fa9c9d2b2a561b6ab99d8' => 
    array (
      0 => '/var/www/html/piwigo/plugins/prepaid_credits/admin_credit.tpl',
      1 => 1719046145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b71d60a7a610_91903510 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'common','load'=>'footer','path'=>'admin/themes/default/js/common.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.dataTables','load'=>'footer','path'=>'themes/default/js/plugins/jquery.dataTables.js'),$_smarty_tpl ) );?>


<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_html_style'))) {
throw new SmartyException('block tag \'html_style\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('html_style', array());
$_block_repeat=true;
echo $_block_plugin1->block_html_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
.sorting { background: url(<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
themes/default/js/plugins/datatables/images/sort_both.png) no-repeat center right; cursor:pointer; }
.sorting_asc { background: url(<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
themes/default/js/plugins/datatables/images/sort_asc.png) no-repeat center right; }
.sorting_desc { background: url(<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
themes/default/js/plugins/datatables/images/sort_desc.png) no-repeat center right; }

.sorting, .sorting_asc, .sorting_desc { 
	padding: 3px 18px 3px 10px;
}
.sorting_asc_disabled { background: url(<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
themes/default/js/plugins/datatables/images/sort_asc_disabled.png) no-repeat center right; }
.sorting_desc_disabled { background: url(<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
themes/default/js/plugins/datatables/images/sort_desc_disabled.png) no-repeat center right; }

.dtBar {
	text-align:left;
	padding: 10px 0 10px 20px
}
.dtBar DIV{
	display:inline;
	padding-right: 5px;
}

.dataTables_paginate A {
	padding-left: 3px;
}

.historyDetails {
  text-align:left;
}

.filter input[type="submit"] {
  padding:3px 10px;
}
<?php $_block_repeat=false;
echo $_block_plugin1->block_html_style(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<h2>Prepaid Credits - <?php echo l10n('Credit');?>
</h2>
<div>
  
</div>
<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin2->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
var oTable = jQuery('#historyTable').dataTable({
  language: {
    processing: "<?php echo strtr((string)l10n('Loading...'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
",
    lengthMenu: sprintf("<?php echo strtr((string)l10n('Show %s lines'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
", '_MENU_'),
    zeroRecords: "<?php echo strtr((string)l10n('No matching line found'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
",
    info: sprintf("<?php echo strtr((string)l10n('Showing %s to %s of %s lines'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
", '_START_', '_END_', '_TOTAL_'),
    infoEmpty: "<?php echo strtr((string)l10n('No matching line found'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
",
    infoFiltered: sprintf("<?php echo strtr((string)l10n('(filtered from %s total lines)'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
", '_MAX_'),
    search: '<span class="icon-search"></span>'+"<?php echo strtr((string)l10n('Search'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
",
    loadingRecords: "<?php echo strtr((string)l10n('Loading...'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
",
    paginate: {
        first:    "<?php echo strtr((string)l10n('First'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
",
        previous: '← '+"<?php echo strtr((string)l10n('Previous'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
",
        next:     "<?php echo strtr((string)l10n('Next'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
"+' →',
        last:     "<?php echo strtr((string)l10n('Last'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
",
    }
  }
});
<?php $_block_repeat=false;
echo $_block_plugin2->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<table id="historyTable">
<thead>
<tr class="throw">
	<th class="dtc_date"><?php echo 'Ngày đăng ký';?>
</th>
	<th class="dtc_user"><?php echo 'Tên đăng nhập';?>
</th>
	<th class="dtc_user"><?php echo 'Địa chỉ Email';?>
</th>
	<th class="dtc_stat"><?php echo 'Credit';?>
</th>
	
</tr>
</thead>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_info']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['user']->value['registration_date'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['mail_address'];?>
</td><td><input id="credit_<?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
" onblur="handleBlur(<?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
)" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['ppcredits'];?>
"></td></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<?php echo '<script'; ?>
>
  async function handleBlur(id){
    var inputElement = document.querySelector("#credit_" + id);
    console.log(id ,inputElement.value);
    
    if (/^\d+$/.test(inputElement.value)){
      const data = {
        id: id,
        value: parseInt(inputElement.value)
      };
      //console.log(document.cookie);
      var formData = new FormData();
      formData.append('id', id);
      formData.append('value', data.value);

      fetch("ws.php?format=json&method=ppcredits.photo.editcredit", {
          method: "POST",
          body: formData
      })
      .then(response => {
          if (!response.ok) {
              throw new Error("Network response was not ok");
          }
          return response.text(); 
      })
      .then(data => {
          console.log(data);
      })
      .catch(error => {
          console.error("Error:", error);
      });
    }else{
      alert('Phải nhập số');
    }
  }
<?php echo '</script'; ?>
><?php }
}
