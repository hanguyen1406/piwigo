<?php
/* Smarty version 4.3.1, created on 2024-06-22 14:48:11
  from '/var/www/html/piwigo/themes/bootstrap_darkroom/template/grid_classes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676e42b064419_46544996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99877a40e31fc07abebdfd9a4f6da140d04b0076' => 
    array (
      0 => '/var/www/html/piwigo/themes/bootstrap_darkroom/template/grid_classes.tpl',
      1 => 1713951806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6676e42b064419_46544996 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('width_xxl', 1410);
$_smarty_tpl->_assignInScope('width_xl', 1170);
$_smarty_tpl->_assignInScope('width_lg', 970);
$_smarty_tpl->_assignInScope('width_md', 750);
$_smarty_tpl->_assignInScope('width_sm', 540);
ob_start();
echo (($tmp = $_smarty_tpl->tpl_vars['col_padding']->value ?? null)===null||$tmp==='' ? '5' ?? null : $tmp);
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('col_padding', $_prefixVariable1);?>

<?php $_smarty_tpl->_assignInScope('col_class', '');?>

<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->fluid_width && $_smarty_tpl->tpl_vars['theme_config']->value->fluid_width_col_xxl) {
if ($_smarty_tpl->tpl_vars['width']->value > ($_smarty_tpl->tpl_vars['width_xxl']->value-(4*$_smarty_tpl->tpl_vars['col_padding']->value))/2) {?>
    <?php $_smarty_tpl->_assignInScope('col_class', ($_smarty_tpl->tpl_vars['col_class']->value).("col-xxl-12"));
} elseif ($_smarty_tpl->tpl_vars['width']->value > ($_smarty_tpl->tpl_vars['width_xxl']->value-(6*$_smarty_tpl->tpl_vars['col_padding']->value))/3) {?>
    <?php $_smarty_tpl->_assignInScope('col_class', ($_smarty_tpl->tpl_vars['col_class']->value).("col-xxl-4"));
} elseif ($_smarty_tpl->tpl_vars['width']->value > ($_smarty_tpl->tpl_vars['width_xxl']->value-(8*$_smarty_tpl->tpl_vars['col_padding']->value))/4) {?>
    <?php $_smarty_tpl->_assignInScope('col_class', ($_smarty_tpl->tpl_vars['col_class']->value).("col-xxl-3"));
} elseif ($_smarty_tpl->tpl_vars['width']->value <= ($_smarty_tpl->tpl_vars['width_xxl']->value-(8*$_smarty_tpl->tpl_vars['col_padding']->value))/4 && $_smarty_tpl->tpl_vars['width']->value > ($_smarty_tpl->tpl_vars['width_xxl']->value-(12*$_smarty_tpl->tpl_vars['col_padding']->value))/6) {?>
    <?php $_smarty_tpl->_assignInScope('col_class', ($_smarty_tpl->tpl_vars['col_class']->value).("col-xxl-2"));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('col_class', ($_smarty_tpl->tpl_vars['col_class']->value).("col-xxl-1"));
}
}?>

<?php if ($_smarty_tpl->tpl_vars['width']->value > ($_smarty_tpl->tpl_vars['width_xl']->value-(4*$_smarty_tpl->tpl_vars['col_padding']->value))/2) {?>
    <?php $_smarty_tpl->_assignInScope('col_class', ($_smarty_tpl->tpl_vars['col_class']->value).(" col-xl-12"));
} elseif ($_smarty_tpl->tpl_vars['width']->value > ($_smarty_tpl->tpl_vars['width_xl']->value-(6*$_smarty_tpl->tpl_vars['col_padding']->value))/3) {?>
    <?php $_smarty_tpl->_assignInScope('col_class', ($_smarty_tpl->tpl_vars['col_class']->value).(" col-xl-6"));
} elseif ($_smarty_tpl->tpl_vars['width']->value > ($_smarty_tpl->tpl_vars['width_xl']->value-(8*$_smarty_tpl->tpl_vars['col_padding']->value))/4) {?>
    <?php $_smarty_tpl->_assignInScope('col_class', ($_smarty_tpl->tpl_vars['col_class']->value).(" col-xl-4"));
} elseif ($_smarty_tpl->tpl_vars['width']->value <= ($_smarty_tpl->tpl_vars['width_xl']->value-(8*$_smarty_tpl->tpl_vars['col_padding']->value))/4 && $_smarty_tpl->tpl_vars['width']->value > ($_smarty_tpl->tpl_vars['width_xl']->value-(12*$_smarty_tpl->tpl_vars['col_padding']->value))/6) {?>
    <?php $_smarty_tpl->_assignInScope('col_class', ($_smarty_tpl->tpl_vars['col_class']->value).(" col-xl-3"));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('col_class', ($_smarty_tpl->tpl_vars['col_class']->value).(" col-xl-2"));
}?>

<?php if ($_smarty_tpl->tpl_vars['width']->value > ($_smarty_tpl->tpl_vars['width_lg']->value-(4*$_smarty_tpl->tpl_vars['col_padding']->value))/2) {?>
    <?php $_smarty_tpl->_assignInScope('col_class', ($_smarty_tpl->tpl_vars['col_class']->value).(" col-lg-12"));
} elseif ($_smarty_tpl->tpl_vars['width']->value > ($_smarty_tpl->tpl_vars['width_lg']->value-(6*$_smarty_tpl->tpl_vars['col_padding']->value))/3) {?>
    <?php $_smarty_tpl->_assignInScope('col_class', ($_smarty_tpl->tpl_vars['col_class']->value).(" col-lg-6"));
} elseif ($_smarty_tpl->tpl_vars['width']->value > ($_smarty_tpl->tpl_vars['width_lg']->value-(8*$_smarty_tpl->tpl_vars['col_padding']->value))/4) {?>
    <?php $_smarty_tpl->_assignInScope('col_class', ($_smarty_tpl->tpl_vars['col_class']->value).(" col-lg-4"));
} elseif ($_smarty_tpl->tpl_vars['width']->value <= ($_smarty_tpl->tpl_vars['width_lg']->value-(8*$_smarty_tpl->tpl_vars['col_padding']->value))/4 && $_smarty_tpl->tpl_vars['width']->value > ($_smarty_tpl->tpl_vars['width_lg']->value-(12*$_smarty_tpl->tpl_vars['col_padding']->value))/6) {?>
    <?php $_smarty_tpl->_assignInScope('col_class', ($_smarty_tpl->tpl_vars['col_class']->value).(" col-lg-3"));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('col_class', ($_smarty_tpl->tpl_vars['col_class']->value).(" col-lg-2"));
}?>

<?php if ($_smarty_tpl->tpl_vars['width']->value > ($_smarty_tpl->tpl_vars['width_md']->value-(4*$_smarty_tpl->tpl_vars['col_padding']->value))/2) {?>
    <?php $_smarty_tpl->_assignInScope('col_class', ($_smarty_tpl->tpl_vars['col_class']->value).(" col-md-12"));
} elseif ($_smarty_tpl->tpl_vars['width']->value > ($_smarty_tpl->tpl_vars['width_md']->value-(6*$_smarty_tpl->tpl_vars['col_padding']->value))/3) {?>
    <?php $_smarty_tpl->_assignInScope('col_class', ($_smarty_tpl->tpl_vars['col_class']->value).(" col-md-6"));
} elseif ($_smarty_tpl->tpl_vars['width']->value > ($_smarty_tpl->tpl_vars['width_md']->value-(8*$_smarty_tpl->tpl_vars['col_padding']->value))/4) {?>
    <?php $_smarty_tpl->_assignInScope('col_class', ($_smarty_tpl->tpl_vars['col_class']->value).(" col-md-4"));
} elseif ($_smarty_tpl->tpl_vars['width']->value <= ($_smarty_tpl->tpl_vars['width_md']->value-(8*$_smarty_tpl->tpl_vars['col_padding']->value))/4 && $_smarty_tpl->tpl_vars['width']->value > ($_smarty_tpl->tpl_vars['width_md']->value-(12*$_smarty_tpl->tpl_vars['col_padding']->value))/6) {?>
    <?php $_smarty_tpl->_assignInScope('col_class', ($_smarty_tpl->tpl_vars['col_class']->value).(" col-md-3"));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('col_class', ($_smarty_tpl->tpl_vars['col_class']->value).(" col-md-2"));
}?>

<?php if ($_smarty_tpl->tpl_vars['width']->value > ($_smarty_tpl->tpl_vars['width_sm']->value-(4*$_smarty_tpl->tpl_vars['col_padding']->value))/2) {?>
    <?php $_smarty_tpl->_assignInScope('col_class', ($_smarty_tpl->tpl_vars['col_class']->value).(" col-sm-12"));
} elseif ($_smarty_tpl->tpl_vars['width']->value > ($_smarty_tpl->tpl_vars['width_sm']->value-(6*$_smarty_tpl->tpl_vars['col_padding']->value))/3) {?>
    <?php $_smarty_tpl->_assignInScope('col_class', ($_smarty_tpl->tpl_vars['col_class']->value).(" col-sm-6"));
} elseif ($_smarty_tpl->tpl_vars['width']->value > ($_smarty_tpl->tpl_vars['width_sm']->value-(8*$_smarty_tpl->tpl_vars['col_padding']->value))/4) {?>
    <?php $_smarty_tpl->_assignInScope('col_class', ($_smarty_tpl->tpl_vars['col_class']->value).(" col-sm-4"));
} elseif ($_smarty_tpl->tpl_vars['width']->value <= ($_smarty_tpl->tpl_vars['width_sm']->value-(8*$_smarty_tpl->tpl_vars['col_padding']->value))/4 && $_smarty_tpl->tpl_vars['width']->value > ($_smarty_tpl->tpl_vars['width_sm']->value-(12*$_smarty_tpl->tpl_vars['col_padding']->value))/6) {?>
    <?php $_smarty_tpl->_assignInScope('col_class', ($_smarty_tpl->tpl_vars['col_class']->value).(" col-sm-3"));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('col_class', ($_smarty_tpl->tpl_vars['col_class']->value).(" col-sm-2"));
}?>

<?php $_smarty_tpl->_assignInScope('col_class', ($_smarty_tpl->tpl_vars['col_class']->value).(" col-12"));?>

<?php $_smarty_tpl->_assignInScope('col_class', $_smarty_tpl->tpl_vars['col_class']->value ,false ,2);
}
}
