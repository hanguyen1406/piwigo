<?php
/* Smarty version 4.3.1, created on 2024-06-22 15:32:59
  from '/var/www/html/piwigo/themes/default/template/mail/text/html/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676eeab207b09_47610763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f097d3589c4d3527a2c1e4196794b99f7a92348' => 
    array (
      0 => '/var/www/html/piwigo/themes/default/template/mail/text/html/footer.tpl',
      1 => 1702327276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6676eeab207b09_47610763 (Smarty_Internal_Template $_smarty_tpl) {
?>                      </td></tr>

          <tr><td id="footer">
                  
            <?php echo l10n('Sent by');?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['GALLERY_URL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['GALLERY_TITLE']->value;?>
</a>
            - <?php echo l10n('Powered by');?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['PHPWG_URL']->value;?>
" class="Piwigo">Piwigo</a>
            <?php if (!empty($_smarty_tpl->tpl_vars['VERSION']->value)) {
echo $_smarty_tpl->tpl_vars['VERSION']->value;
}?>
            
            - <?php echo l10n('Contact');?>

            <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['CONTACT_MAIL']->value;?>
?subject=<?php echo rawurlencode((string)l10n('A comment on your site'));?>
"><?php echo l10n('Webmaster');?>
</a>
                      </td></tr>
        </table>

      </td></tr>
    </table>
  </body>
</html><?php }
}
