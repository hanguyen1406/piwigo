<?php
/* Smarty version 4.3.1, created on 2024-09-04 22:20:22
  from '/var/www/html/piwigo/themes/bootstrap_darkroom/template/navigation_bar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66d87ab63966b4_51094678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf6e53bb8e81c9de1d9354074bf5d2eb4f4d8e33' => 
    array (
      0 => '/var/www/html/piwigo/themes/bootstrap_darkroom/template/navigation_bar.tpl',
      1 => 1713951806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d87ab63966b4_51094678 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="mt-5" aria-label="Page navigation">
    <ul class="pagination justify-content-center">
<?php if ((isset($_smarty_tpl->tpl_vars['navbar']->value['URL_FIRST']))) {?>
        <li class="page-item"><a class="page-link" href="<?php echo $_smarty_tpl->tpl_vars['navbar']->value['URL_FIRST'];
if ($_smarty_tpl->tpl_vars['fragment']->value) {?>#<?php echo $_smarty_tpl->tpl_vars['fragment']->value;
}?>" rel="first"><i class="fas fa-fast-backward" title="<?php echo l10n('First');?>
"></i></a></li>
        <li class="page-item"><a class="page-link" href="<?php echo $_smarty_tpl->tpl_vars['navbar']->value['URL_PREV'];
if ($_smarty_tpl->tpl_vars['fragment']->value) {?>#<?php echo $_smarty_tpl->tpl_vars['fragment']->value;
}?>" rel="prev"><i class="fas fa-backward" title="<?php echo l10n('Previous');?>
"></i></a></li>
<?php } else { ?>
        <li class="page-item disabled"><a class="page-link" href="#"><i class="fas fa-fast-backward" title="<?php echo l10n('First');?>
"></i></a></li>
        <li class="page-item disabled"><a class="page-link" href="#"><i class="fas fa-backward" title="<?php echo l10n('Previous');?>
"></i></a></li>
<?php }
$_smarty_tpl->_assignInScope('prev_page', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navbar']->value['pages'], 'url', false, 'page');
$_smarty_tpl->tpl_vars['url']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value => $_smarty_tpl->tpl_vars['url']->value) {
$_smarty_tpl->tpl_vars['url']->do_else = false;
if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['navbar']->value['CURRENT_PAGE']) {?>
        <li class="page-item active"><a class="page-link" href="#"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
<?php } else { ?>
        <li class="page-item"><a class="page-link" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;
if ($_smarty_tpl->tpl_vars['fragment']->value) {?>#<?php echo $_smarty_tpl->tpl_vars['fragment']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
<?php }
$_smarty_tpl->_assignInScope('prev_page', $_smarty_tpl->tpl_vars['page']->value);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if ((isset($_smarty_tpl->tpl_vars['navbar']->value['URL_NEXT']))) {?>
        <li class="page-item"><a class="page-link" href="<?php echo $_smarty_tpl->tpl_vars['navbar']->value['URL_NEXT'];
if ($_smarty_tpl->tpl_vars['fragment']->value) {?>#<?php echo $_smarty_tpl->tpl_vars['fragment']->value;
}?>" rel="next"><i class="fas fa-forward" title="<?php echo l10n('Next');?>
"></i></a></li>
        <li class="page-item"><a class="page-link" href="<?php echo $_smarty_tpl->tpl_vars['navbar']->value['URL_LAST'];
if ($_smarty_tpl->tpl_vars['fragment']->value) {?>#<?php echo $_smarty_tpl->tpl_vars['fragment']->value;
}?>" rel="last"><i class="fas fa-fast-forward" title="<?php echo l10n('Last');?>
"></i></a></li>
<?php } else { ?>
        <li class="page-item disabled"><a class="page-link" href="#"><i class="fas fa-forward" title="<?php echo l10n('Next');?>
"></i></a></li>
        <li class="page-item disabled"><a class="page-link" href="#"><i class="fas fa-fast-forward" title="<?php echo l10n('Last');?>
"></i></a></li>
<?php }?>
    </ul>
</nav>
<?php }
}
