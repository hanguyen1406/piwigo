<?php
/* Smarty version 4.3.1, created on 2024-06-22 10:26:24
  from '/var/www/html/piwigo/themes/bootstrap_darkroom/template/menubar_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676a6d0c789b0_98557382',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd660f92052f4cb92dd8f91580b0b68385829c32b' => 
    array (
      0 => '/var/www/html/piwigo/themes/bootstrap_darkroom/template/menubar_menu.tpl',
      1 => 1713951806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6676a6d0c789b0_98557382 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['blocks']->value['mbMenu']->data['qsearch'])) && $_smarty_tpl->tpl_vars['blocks']->value['mbMenu']->data['qsearch'] == true && !$_smarty_tpl->tpl_vars['theme_config']->value->quicksearch_navbar) {?>
      <div class="dropdown-header">
        <form class="navbar-form" role="search" action="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
qsearch.php" method="get" id="quicksearch" onsubmit="return this.q.value!='' && this.q.value!=qsearch_prompt;">
            <div class="form-group">
                <input type="text" name="q" id="qsearchInput" class="form-control" placeholder="<?php echo l10n('Quick search');?>
" />
            </div>
        </form>
      </div>
      <div class="dropdown-divider"></div>
<?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blocks']->value['mbMenu']->data, 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
if (is_array($_smarty_tpl->tpl_vars['link']->value)) {?>
      <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['link']->value['URL'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['link']->value['TITLE']))) {?> title="<?php echo $_smarty_tpl->tpl_vars['link']->value['TITLE'];?>
"<?php }
if ((isset($_smarty_tpl->tpl_vars['link']->value['REL']))) {?> <?php echo $_smarty_tpl->tpl_vars['link']->value['REL'];
}?>><?php echo $_smarty_tpl->tpl_vars['link']->value['NAME'];?>

          <?php if ((isset($_smarty_tpl->tpl_vars['link']->value['COUNTER']))) {?><span class="badge badge-secondary ml-2"><?php echo $_smarty_tpl->tpl_vars['link']->value['COUNTER'];?>
</span><?php }?>
      </a>
<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
