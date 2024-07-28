<?php
/* Smarty version 4.3.1, created on 2024-06-22 14:58:19
  from '/var/www/html/piwigo/admin/themes/default/template/double_select.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676e68b7989d2_09707903',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '442d691568dc5647a61811daab11cda4430e3ac9' => 
    array (
      0 => '/var/www/html/piwigo/admin/themes/default/template/double_select.tpl',
      1 => 1702327276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6676e68b7989d2_09707903 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/piwigo/include/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
?>
<table class="doubleSelect">
  <tr>
    <td>
      <h3><?php echo $_smarty_tpl->tpl_vars['L_CAT_OPTIONS_TRUE']->value;?>
</h3>
      <select class="categoryList" name="cat_true[]" multiple="multiple" size="30">
        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['category_option_true']->value,'selected'=>$_smarty_tpl->tpl_vars['category_option_true_selected']->value),$_smarty_tpl);?>

      </select>
      <p><input class="submit" type="submit" value="&raquo;" name="falsify" style="font-size:15px;"></p>
    </td>

    <td>
      <h3><?php echo $_smarty_tpl->tpl_vars['L_CAT_OPTIONS_FALSE']->value;?>
</h3>
      <select class="categoryList" name="cat_false[]" multiple="multiple" size="30">
        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['category_option_false']->value,'selected'=>$_smarty_tpl->tpl_vars['category_option_false_selected']->value),$_smarty_tpl);?>

      </select>
      <p><input class="submit" type="submit" value="&laquo;" name="trueify" style="font-size:15px;"></p>
    </td>
  </tr>
</table>
<?php }
}
