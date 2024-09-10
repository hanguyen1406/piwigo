<?php
/* Smarty version 4.3.1, created on 2024-09-02 20:57:29
  from '/var/www/html/piwigo/admin/themes/default/template/navigation_bar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66d5c449f19562_87204184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cc10c70048329e0c495b83efd933f59cab64333' => 
    array (
      0 => '/var/www/html/piwigo/admin/themes/default/template/navigation_bar.tpl',
      1 => 1702327276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d5c449f19562_87204184 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pagination-container">
<?php if ((isset($_smarty_tpl->tpl_vars['navbar']->value['URL_FIRST']))) {?>
  <a href="<?php echo $_smarty_tpl->tpl_vars['navbar']->value['URL_PREV'];?>
" class='pagination-arrow left' rel="prev">
    <span class="icon-left-open"></span>
  </a>
<?php } else { ?>
  <a class='pagination-arrow left unavailable'>
    <span class="icon-left-open"></span>
  </a>
<?php }?>
  <?php $_smarty_tpl->_assignInScope('prev_page', 0);?>
  <div class="pagination-item-container">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navbar']->value['pages'], 'url', false, 'page');
$_smarty_tpl->tpl_vars['url']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value => $_smarty_tpl->tpl_vars['url']->value) {
$_smarty_tpl->tpl_vars['url']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value > $_smarty_tpl->tpl_vars['prev_page']->value+1) {?><span>...</span><?php }
if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['navbar']->value['CURRENT_PAGE']) {?>
    <a class="actual"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
<?php } else { ?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
<?php }?>
    <?php $_smarty_tpl->_assignInScope('prev_page', $_smarty_tpl->tpl_vars['page']->value);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>

<?php if ((isset($_smarty_tpl->tpl_vars['navbar']->value['URL_NEXT']))) {?>
  <a href="<?php echo $_smarty_tpl->tpl_vars['navbar']->value['URL_NEXT'];?>
" class='pagination-arrow rigth' rel="next">
    <span class="icon-left-open"></span>
  </a>
<?php } else { ?>
  <a class='pagination-arrow rigth unavailable'>
    <span class="icon-left-open"></span>
  </a>
<?php }?>
</div>
<?php }
}
