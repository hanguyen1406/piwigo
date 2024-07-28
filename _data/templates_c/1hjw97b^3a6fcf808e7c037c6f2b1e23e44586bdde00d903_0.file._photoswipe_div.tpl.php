<?php
/* Smarty version 4.3.1, created on 2024-06-22 14:48:17
  from '/var/www/html/piwigo/themes/bootstrap_darkroom/template/_photoswipe_div.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676e431467392_34154076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a6fcf808e7c037c6f2b1e23e44586bdde00d903' => 
    array (
      0 => '/var/www/html/piwigo/themes/bootstrap_darkroom/template/_photoswipe_div.tpl',
      1 => 1713951806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6676e431467392_34154076 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
     <div class="pswp__bg"></div>
     <div class="pswp__scroll-wrap">
           <div class="pswp__container">
             <div class="pswp__item"></div>
             <div class="pswp__item"></div>
             <div class="pswp__item"></div>
           </div>
           <div class="pswp__ui pswp__ui--hidden">
             <div class="pswp__top-bar">
                 <div class="pswp__counter"></div>
                 <button class="pswp__button pswp__button--close" title="<?php echo l10n('Close (Esc)');?>
"></button>
<?php if ($_smarty_tpl->tpl_vars['theme_config']->value->social_enabled) {?>
                 <button class="pswp__button pswp__button--share" title="<?php echo l10n('Share');?>
"></button>
<?php }?>
                 <button class="pswp__button pswp__button--fs" title="<?php echo l10n('Toggle fullscreen');?>
"></button>
                 <button class="pswp__button pswp__button--zoom" title="<?php echo l10n('Zoom in/out');?>
"></button>
                 <button class="pswp__button pswp__button--details" title="<?php echo l10n('Picture details');?>
"></button>
                 <button class="pswp__button pswp__button--autoplay" title="<?php echo l10n('AutoPlay');?>
"></button>
                 <div class="pswp__preloader">
                     <div class="pswp__preloader__icn">
                       <div class="pswp__preloader__cut">
                         <div class="pswp__preloader__donut"></div>
                       </div>
                     </div>
                 </div>
             </div>
             <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                 <div class="pswp__share-tooltip"></div>
             </div>
             <button class="pswp__button pswp__button--arrow--left" title="<?php echo l10n('Previous (arrow left)');?>
"></button>
             <button class="pswp__button pswp__button--arrow--right" title="<?php echo l10n('Next (arrow right)');?>
"></button>
             <div class="pswp__caption">
                 <div class="pswp__caption__center"></div>
             </div>
         </div>
     </div>
</div>
<?php }
}
