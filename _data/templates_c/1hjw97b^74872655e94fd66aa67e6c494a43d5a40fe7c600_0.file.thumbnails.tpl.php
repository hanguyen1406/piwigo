<?php
/* Smarty version 4.3.1, created on 2024-09-02 20:56:15
  from '/var/www/html/piwigo/plugins/pdf2tab/template/thumbnails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66d5c3ff73cc13_70468562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74872655e94fd66aa67e6c494a43d5a40fe7c600' => 
    array (
      0 => '/var/www/html/piwigo/plugins/pdf2tab/template/thumbnails.tpl',
      1 => 1719042185,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d5c3ff73cc13_70468562 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>"jquery",'load'=>"header"),$_smarty_tpl ) );?>

<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['html_head'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['html_head'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_html_head'))) {
throw new SmartyException('block tag \'html_head\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('html_head', array());
$_block_repeat=true;
echo $_block_plugin1->block_html_head(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

<?php echo '<script'; ?>
 type="text/javascript">
	//Add a link to the thumbnail
	function pdf2tab_link() {
		$("img[class=thumbnail]").each(function() {
			var filename_array = $(this).attr("pdf2tab").split(".");
			var filename_extension = filename_array[filename_array.length-1].toLowerCase();
			

			var pdf2tab_supported_extensions = new Array();
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pdf2tab_supported_extensions']->value, 'extension', false, NULL, 'loop', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['extension']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extension']->value) {
$_smarty_tpl->tpl_vars['extension']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_loop']->value['index']++;
?>
				pdf2tab_supported_extensions[<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_loop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_loop']->value['index'] : null);?>
] = "<?php echo $_smarty_tpl->tpl_vars['extension']->value;?>
";
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

			if(jQuery.inArray(filename_extension, pdf2tab_supported_extensions) != -1)
			{
				$(this).closest('a').attr({
					target: "_blank",
					href: $(this).attr("pdf2tab")
				});

				$(this).attr("title","<?php echo l10n('pdf2tab_tooltip');?>
");

			}			
		});
	}
  
	//When the document has finiched to load
	jQuery(document).ready(function(){
		pdf2tab_link();
	});
  
	//Allow pdf2tab to work with RV Thumb Scroller 
	jQuery(window).bind("RVTS_loaded", function(){
		pdf2tab_link();
	});
<?php echo '</script'; ?>
>

<?php $_block_repeat=false;
echo $_block_plugin1->block_html_head(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
