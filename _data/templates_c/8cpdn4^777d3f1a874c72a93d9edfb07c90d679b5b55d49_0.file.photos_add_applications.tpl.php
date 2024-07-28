<?php
/* Smarty version 4.3.1, created on 2024-06-22 14:54:09
  from '/var/www/html/piwigo/admin/themes/default/template/photos_add_applications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6676e591318a53_50579275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '777d3f1a874c72a93d9edfb07c90d679b5b55d49' => 
    array (
      0 => '/var/www/html/piwigo/admin/themes/default/template/photos_add_applications.tpl',
      1 => 1702327276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/colorbox.inc.tpl' => 1,
  ),
),false)) {
function content_6676e591318a53_50579275 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:include/colorbox.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin1->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
jQuery().ready(function(){
  jQuery(".illustration a").colorbox({rel:'group1'});
});
<?php $_block_repeat=false;
echo $_block_plugin1->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['html_head'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['html_head'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'block_html_head'))) {
throw new SmartyException('block tag \'html_head\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('html_head', array());
$_block_repeat=true;
echo $_block_plugin2->block_html_head(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
<style type="text/css">
  .applicationContainer {
    width: 100%;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
  }

  .applicationCard {
    max-width: 500px;
    margin: 20px;

    display: flex;
    flex-direction: row;
  }

  .applicationCard img {
    max-width: 210px;
    height: 175px;
    margin: 20px;
  }

  .applicationCard .textSide {
    display: flex;
    flex-direction: column;
  }

  .applicationCard .applicationName {
    font-size: 15px;
    font-weight: bold;
    margin: 20px 0 10px 0;
    padding-right: 15px;
    text-align: left;
  }

  .applicationCard .applicationDesc {
    text-align: left;
    padding-right: 15px;

    display: -webkit-box;
    -webkit-line-clamp: 6;
    -webkit-box-orient: vertical;  
    overflow: hidden;
  }
  
  .applicationCard .applicationLink {
    width: fit-content;
    margin-top: auto;
    margin-bottom: 20px;
    display: flex;
    justify-content: flex-start;
  }

  .applicationCard .applicationLink a {
    text-decoration: none;
    margin-left: 0;
  }

</style>
<?php $_block_repeat=false;
echo $_block_plugin2->block_html_head(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<div class="applicationContainer">

  <div class="applicationCard"> 
    <div class="illustration"><a href="https://piwigo.org/screenshots/applications/piwigo-remote-sync.png" title="Piwigo Remote Sync"><img src="https://piwigo.org/screenshots/applications/piwigo-remote-sync.png"></a></div>

    <div class="textSide">
      <div class="applicationName"> Piwigo Remote Sync </div> 
      <div class="applicationDesc"> <?php echo l10n('Piwigo Remote Sync is able to upload a whole folder hierarchy. If you run it again, only new photos will be uploaded.');?>
 </div> 
      <div class="applicationLink">
        <a class="buttonGradient" href="http://piwigo.org/ext/extension_view.php?eid=851" target="_blank"><?php echo l10n('Learn more');?>
</a>
      </div> 
    </div>
  </div>

  <div class="applicationCard"> 
    <div class="illustration"><a href="https://piwigo.org/screenshots/applications/piwigo-ios.png" title="<?php echo l10n('Piwigo for iOS (iPhone, iPad, iPod Touch)');?>
"><img src="https://piwigo.org/screenshots/applications/thumbnail/piwigo-ios.png"></a></div>

    <div class="textSide">
      <div class="applicationName"> <?php echo l10n('Piwigo for iOS (iPhone, iPad, iPod Touch)');?>
</div> 
      <div class="applicationDesc"> <?php echo l10n('<em>Piwigo for iOS</em> application empowers you to connect to your Piwigo gallery from your iPhone, iPad or iPod Touch, create some albums and upload several photos at once.');?>
</div> 
      <div class="applicationLink">
        <a class="buttonGradient" target="_blank" href="http://itunes.apple.com/us/app/piwigo/id472225196"> <?php echo l10n('Available on');?>
 Apple AppStore</a>
      </div> 
    </div>
  </div>

  <div class="applicationCard"> 
    <div class="illustration"><a href="https://piwigo.org/screenshots/applications/piwigo-android.png" title="<?php echo l10n('Piwigo for Android');?>
"><img src="https://piwigo.org/screenshots/applications/thumbnail/piwigo-android.png"></a></div>

    <div class="textSide">
      <div class="applicationName"> <?php echo l10n('Piwigo for Android');?>
 </div> 
      <div class="applicationDesc"> <?php echo l10n('<em>Piwigo for Android</em> application empowers you to connect your Android phone or table to your Piwigo gallery, create some albums and upload several photos at once.');?>
 </div> 
      <div class="applicationLink">
        <a class="buttonGradient" target="_blank" href="https://play.google.com/store/apps/details?id=com.piwigo.piwigo_ng"><?php echo l10n('Available on');?>
 Google Play</a> 
      </div>
    </div>
  </div>

  <div class="applicationCard"> 
    <div class="illustration"><a href="https://piwigo.org/screenshots/applications/lightroom.png" title="<?php echo l10n('Piwigo Publish plugin for Lightroom');?>
"><img src="https://piwigo.org/screenshots/applications/lightroom.png"></a></div>

    <div class="textSide">
      <div class="applicationName"> Lightroom </div> 
      <div class="applicationDesc"> 
        <?php echo l10n('Adobe Photoshop Lightroom is a photography software designed to manage large quantities of digital images and doing post production work.');?>

        <?php echo l10n('The Piwigo publish Plug-in allows you to export and synchronize photos from Lightroom directly to your Piwigo photo gallery.');?>
 
      </div> 
      <div class="applicationLink">
        <a class="buttonGradient" target="_blank" href="http://alloyphoto.com/plugins/piwigo/"><?php echo l10n('Available on');?>
 alloyphoto.com</a>
      </div>
    </div>
  </div>

  <div class="applicationCard"> 
    <div class="illustration"><a href="https://piwigo.org/screenshots/applications/shotwell.png" title="<?php echo l10n('Piwigo publish plugin for Shotwell');?>
"><img src="https://piwigo.org/screenshots/applications/shotwell.png"></a></div>

    <div class="textSide">
      <div class="applicationName"> Shotwell </div> 
      <div class="applicationDesc"> <?php echo l10n('Shotwell is an open source digital photo organizer that runs on Linux. It is the default photo manager in Ubuntu and Fedora.');?>
</div> 
      <div class="applicationLink">
        <a title="<?php echo l10n('On your Linux, simply install Shotwell with your package manager and the activate Piwigo publishing option.');?>
" class="buttonGradient" href="http://yorba.org/shotwell/" target="_blank"><?php echo l10n('Learn more');?>
</a>
      </div>
    </div>
  </div>

  <div class="applicationCard"> 
    <div class="illustration"><a href="https://piwigo.org/screenshots/applications/digikam.png" title="<?php echo l10n('Piwigo publish plugin for digiKam');?>
"><img src="https://piwigo.org/screenshots/applications/digikam.png"></a></div>

    <div class="textSide">
      <div class="applicationName"> digiKam </div> 
      <div class="applicationDesc"> 
        <?php echo l10n('digiKam is an advanced digital photo management free software for Linux, Windows, and MacOSX.');?>

        <?php echo l10n('digiKam is designed for photographers who want to view, manage, edit, enhance, organize, tag, and share photographs.');?>

      </div> 
      <div class="applicationLink">
        <a title="<?php echo l10n('To export your photos from digiKam to Piwigo, simply install digiKam and the Kipi-plugins.');?>
" class="buttonGradient" href="http://digikam.org/" target="_blank"><?php echo l10n('Learn more');?>
</a>
      </div>
    </div>
  </div>

  <div class="applicationCard"> 
    <div class="illustration"><a href="https://piwigo.org/screenshots/applications/macsharetopiwigo.jpg" title="MacShareToPiwigo"><img src="https://piwigo.org/screenshots/applications/macsharetopiwigo.jpg"></a></div>

    <div class="textSide">
      <div class="applicationName"> MacShareToPiwigo </div> 
      <div class="applicationDesc"> <?php echo l10n('Share / Send your photos directly from your Mac Os X (10.10 and following) to Piwigo');?>
 </div> 
      <div class="applicationLink">
        <a class="buttonGradient" target="_blank" href="http://piwigo.org/ext/extension_view.php?eid=804"><?php echo l10n('Learn more');?>
</a>
      </div>
    </div>
  </div>

  <div class="applicationCard"> 
    <div class="illustration"><a href="https://piwigo.org/screenshots/applications/iphoto.jpg" title="<?php echo l10n('Piwigo export plugin for iPhoto');?>
"><img src="https://piwigo.org/screenshots/applications/iphoto.jpg"></a></div>

    <div class="textSide">
      <div class="applicationName"> iPhoto </div> 
      <div class="applicationDesc"> <?php echo l10n('iPhoto is the default photo manager on MacOSX. The Piwigo export plugin let you create new albums and export your photos directly from iPhoto to your Piwigo photo gallery.');?>
 </div> 
      <div class="applicationLink">
        <a class="buttonGradient" target="_blank" href="http://piwigo.org/ext/extension_view.php?eid=592"><?php echo l10n('Learn more');?>
</a>
      </div>
    </div>
  </div>

  <div class="applicationCard"> 
    <div class="illustration"><a href="https://piwigo.org/screenshots/applications/aperture.png" title="<?php echo l10n('Piwigo export plugin for Aperture');?>
"><img src="https://piwigo.org/screenshots/applications/aperture.png"></a></div>

    <div class="textSide">
      <div class="applicationName"> Aperture </div> 
      <div class="applicationDesc"> 
        <?php echo l10n('Aperture is a powerful tool to refine images and manage massive libraries on Mac.');?>

        <?php echo l10n('Aperture is designed for professional photographers with iPhoto simplicity.');?>

        <?php echo l10n('The Piwigo export plugin allows you to create albums and export photos.');?>

      </div> 
      <div class="applicationLink">
        <a class="buttonGradient" target="_blank" href="http://piwigo.org/ext/extension_view.php?eid=598"><?php echo l10n('Learn more');?>
</a>
      </div>
    </div>
  </div>

</div><?php }
}
