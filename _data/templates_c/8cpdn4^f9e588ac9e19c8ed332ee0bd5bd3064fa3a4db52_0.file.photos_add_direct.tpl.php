<?php
/* Smarty version 4.3.1, created on 2024-09-07 17:13:48
  from '/var/www/html/piwigo/admin/themes/default/template/photos_add_direct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66dc275c39cd40_72000526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9e588ac9e19c8ed332ee0bd5bd3064fa3a4db52' => 
    array (
      0 => '/var/www/html/piwigo/admin/themes/default/template/photos_add_direct.tpl',
      1 => 1702327276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/colorbox.inc.tpl' => 1,
    'file:include/add_album.inc.tpl' => 1,
  ),
),false)) {
function content_66dc275c39cd40_72000526 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'common','load'=>'footer','path'=>'admin/themes/default/js/common.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.plupload','load'=>'footer','require'=>'jquery','path'=>'themes/default/js/plugins/plupload/plupload.full.min.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.plupload.queue','load'=>'footer','require'=>'jquery','path'=>'themes/default/js/plugins/plupload/jquery.plupload.queue/jquery.plupload.queue.min.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.confirm','load'=>'footer','require'=>'jquery','path'=>'themes/default/js/plugins/jquery-confirm.min.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/default/js/plugins/jquery-confirm.min.css"),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('path'=>"themes/default/js/plugins/plupload/jquery.plupload.queue/css/jquery.plupload.queue.css"),$_smarty_tpl ) );?>


<?php $_smarty_tpl->_assignInScope('plupload_i18n', "themes/default/js/plugins/plupload/i18n/".((string)$_smarty_tpl->tpl_vars['lang_info']->value['plupload_code']).".js");
if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'file_exists' ][ 0 ], array( (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'constant' ][ 0 ], array( "PHPWG_ROOT_PATH" ))).($_smarty_tpl->tpl_vars['plupload_i18n']->value) ))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>"plupload_i18n-".((string)$_smarty_tpl->tpl_vars['lang_info']->value['plupload_code']),'load'=>"footer",'path'=>$_smarty_tpl->tpl_vars['plupload_i18n']->value,'require'=>"jquery.plupload.queue"),$_smarty_tpl ) );?>

<?php }?>

<?php $_smarty_tpl->_subTemplateRender('file:include/colorbox.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if (!$_smarty_tpl->tpl_vars['DISPLAY_FORMATS']->value) {
$_smarty_tpl->_subTemplateRender('file:include/add_album.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'LocalStorageCache','load'=>'footer','path'=>'admin/themes/default/js/LocalStorageCache.js'),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'jquery.selectize','load'=>'footer','path'=>'themes/default/js/plugins/selectize.min.js'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0], array( array('id'=>'jquery.selectize','path'=>"themes/default/js/plugins/selectize.".((string)$_smarty_tpl->tpl_vars['themeconf']->value['colorscheme']).".css"),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0], array( array('id'=>'piecon','load'=>'footer','path'=>'themes/default/js/plugins/piecon.js'),$_smarty_tpl ) );?>


<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'block_html_style'))) {
throw new SmartyException('block tag \'html_style\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('html_style', array());
$_block_repeat=true;
echo $_block_plugin1->block_html_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
.addAlbumFormParent { display: none; } /* specific to this page, do not move in theme.css */
<?php $_block_repeat=false;
echo $_block_plugin1->block_html_style(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'block_footer_script'))) {
throw new SmartyException('block tag \'footer_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('footer_script', array());
$_block_repeat=true;
echo $_block_plugin2->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

const formatMode = <?php if ($_smarty_tpl->tpl_vars['DISPLAY_FORMATS']->value) {?>true<?php } else { ?>false<?php }?>;
const haveFormatsOriginal = <?php if ($_smarty_tpl->tpl_vars['HAVE_FORMATS_ORIGINAL']->value) {?>true<?php } else { ?>false<?php }?>;
const originalImageId = haveFormatsOriginal? '<?php if ((isset($_smarty_tpl->tpl_vars['FORMATS_ORIGINAL_INFO']->value['id']))) {?> <?php echo $_smarty_tpl->tpl_vars['FORMATS_ORIGINAL_INFO']->value['id'];?>
 <?php } else { ?> -1 <?php }?>' : -1;

if (!formatMode) {
  var categoriesCache = new CategoriesCache({
    serverKey: '<?php echo $_smarty_tpl->tpl_vars['CACHE_KEYS']->value['categories'];?>
',
    serverId: '<?php echo $_smarty_tpl->tpl_vars['CACHE_KEYS']->value['_hash'];?>
',
    rootUrl: '<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
'
  });

  categoriesCache.selectize(jQuery('[data-selectize=categories]'), {
    filter: function(categories, options) {
      if (categories.length > 0) {
        jQuery(".addAlbumEmptyCenter").css( "height", "auto" );
        jQuery(".addAlbumFormParent").attr( "style", "display: block !important;" );
      }
      
      return categories;
    }
  });

  jQuery('[data-add-album]').pwgAddAlbum({
    afterSelect: function() {
      jQuery("#uploadForm").show();
      jQuery(".addAlbumEmptyCenter").hide();
      jQuery(".addAlbumEmptyCenter").css( "height", "auto" );
      jQuery(".addAlbumFormParent").attr( "style", "display: block !important;" );

      var categorySelectedId = jQuery("select[name=category] option:selected").val();
      var categorySelectedPath = jQuery("select[name=category]")[0].selectize.getItem(categorySelectedId).text();
      jQuery('.selectedAlbum').show().find('span').html(categorySelectedPath);
      jQuery('.selectAlbumBlock').hide();
    }
  });

  Piecon.setOptions({
    color: '#ff7700',
    background: '#bbb',
    shadow: '#fff',
    fallback: 'force'
  });
}

var pwg_token = '<?php echo $_smarty_tpl->tpl_vars['pwg_token']->value;?>
';
var photosUploaded_label = "<?php echo l10n('%d photos uploaded');?>
";
var formatsUploaded_label = "<?php echo l10n('%d formats uploaded for %d photos');?>
";
var batch_Label = "<?php echo l10n('Manage this set of %d photos');?>
";
var albumSummary_label = "<?php echo htmlspecialchars((string)l10n('Album "%s" now contains %d photos'), ENT_QUOTES, 'UTF-8', true);?>
";
var str_format_warning = "<?php echo l10n('Error when trying to detect formats');?>
";
var str_ok = "<?php echo l10n('Ok');?>
";
var str_format_warning_multiple = "<?php echo l10n('There is multiple image in the database with the following names : %s.');?>
";
var str_format_warning_notFound = "<?php echo l10n('No picture found with the following name : %s.');?>
";
var str_and_X_others = "<?php echo l10n('and %d more');?>
";
var file_ext = "<?php echo $_smarty_tpl->tpl_vars['file_exts']->value;?>
";
var format_ext = "<?php echo $_smarty_tpl->tpl_vars['format_ext']->value;?>
"; 
var uploadedPhotos = [];
var uploadCategory = null;


jQuery(document).ready(function(){
  jQuery(".dont-show-again").on("click", function() {
    jQuery.ajax({
      url: "ws.php?format=json&method=pwg.users.preferences.set",
      type: "POST",
      dataType: "JSON",
      data: {
        param: 'promote-mobile-apps',
        value: false,
      },
      success: function(res) {
        jQuery(".promote-apps").hide();
      }
    })
  })

  jQuery("#uploadWarningsSummary a.showInfo").click(function() {
    jQuery("#uploadWarningsSummary").hide();
    jQuery("#uploadWarnings").show();
    return false;
  });

  jQuery("#showPermissions").click(function() {
    jQuery(this).parent(".showFieldset").hide();
    jQuery("#permissions").show();
    return false;
  });

	jQuery("#uploader").pluploadQueue({
		// General settings
    browse_button : 'addFiles',
    container : 'uploadForm',
    
		// runtimes : 'html5,flash,silverlight,html4',
		runtimes : 'html5',

		// url : '../upload.php',
		url : 'ws.php?method=pwg.images.upload&format=json',
		
		chunk_size: '<?php echo $_smarty_tpl->tpl_vars['chunk_size']->value;?>
kb',
		
		filters : {
			// Maximum file size
			max_file_size : '<?php echo $_smarty_tpl->tpl_vars['max_file_size']->value;?>
mb',
			// Specify what files to browse for
			mime_types: [
				{title : "Image files", extensions : formatMode ? format_ext : file_ext}
			]
		},

		// Rename files by clicking on their titles
		rename: formatMode,

		// Enable ability to drag'n'drop files onto the widget (currently only HTML5 supports that)
		dragdrop: true,

    preinit: {
      Init: function (up, info) {
        jQuery('#uploader_container').removeAttr("title"); //remove the "using runtime" text
        
        jQuery('#startUpload').on('click', function(e) {
            e.preventDefault();
            up.start();
          });
        
        jQuery('#cancelUpload').on('click', function(e) {
            e.preventDefault();
            up.stop();
            up.trigger('UploadComplete', up.files);
          });
      }
    },

    init : {
      // update custom button state on queue change
      QueueChanged : function(up) {
        jQuery('#addFiles').addClass("addFilesButtonChanged");
        jQuery('#startUpload').prop('disabled', up.files.length == 0);
        jQuery("#addFiles").removeClass('buttonGradient').addClass('buttonLike');

        if (up.files.length > 0) {
          jQuery('.plupload_filelist_footer').show();
          jQuery('.plupload_filelist').css("overflow-y", "scroll");
        }

        if (up.files.length == 0) {
          jQuery('#addFiles').removeClass("addFilesButtonChanged");
          jQuery("#addFiles").removeClass('buttonLike').addClass('buttonGradient');
          jQuery('.plupload_filelist_footer').hide();
          jQuery('.plupload_filelist').css("overflow-y", "hidden");
        }
      },

      FilesAdded: async function(up, files) {
        // Création de la liste avec plupload_id : image_name
        fileNames = {};
        files.forEach((file) => {
          fileNames[file.id] = file.name;
        });

        if (formatMode) {
          // If no original image is specified
          if (!haveFormatsOriginal) {
            const images_search = await new Promise((res, rej) => {
              //ajax qui renvois les id des images dans la gallerie.
              jQuery.ajax({
                url: "ws.php?format=json&method=pwg.images.formats.searchImage",
                type: "POST",
                data: {
                  category_id: jQuery("select[name=category] option:selected").val(),
                  filename_list: JSON.stringify(fileNames),
                },
                success: function(result) {
                  let data = JSON.parse(result);
                  res(data.result)
                }
              })
            })

            const notFound = [];
            const multiple = [];

            files.forEach((f) => {
              const search = images_search[f.id];
              if (search.status == "found") 
                f.format_of = search.image_id;
              else {
                if (search.status == "multiple")
                  multiple.push(f.name);
                else 
                  notFound.push(f.name);
                up.removeFile(f.id);
              } 
            })

            files.filter(f => images_search[f.id].status === "found");

            // If a file is not found or found more than one time
            if (notFound.length || multiple.length) {
              const [multStr, notFoundStr] = [multiple, notFound].map((tab) => {
                //Get names
                tab = tab.map(f => f.slice(0,f.indexOf('.')))
                // Remove duplicates
                tab = tab.filter((f,i) => i === tab.indexOf(f))

                // Add "and X more" if necessary
                if (tab.length > 5) {
                  tab[5] = str_and_X_others.replace('%d', tab.length - 5);
                  tab = tab.splice(0,6);
                }
                return tab;
              })

              $.alert({
                title: str_format_warning,
                content : (notFound.length ? `<p>${str_format_warning_notFound.replace('%s', notFoundStr.join(', '))}</p>` : "")
                  +(multiple.length ? `<p>${str_format_warning_multiple.replace('%s', multStr.join(', '))}</p>` : ""),
                ...jConfirm_warning_options
              })
            }
          } else { //If an original image is specified
            files.forEach((f) => {
              f.format_of = originalImageId;
            })
          }
        }
      },

      UploadProgress: function(up, file) {
        jQuery('#uploadingActions .progressbar').width(up.total.percent+'%');
        Piecon.setProgress(up.total.percent);
      },
      
      BeforeUpload: function(up, file) {
        // hide buttons
        jQuery('#startUpload, .selectFilesButtonBlock, .selectAlbumBlock').hide();
        jQuery('#uploadingActions').show();
        jQuery('.format-mode-group-manager').hide();
        if (!formatMode) {
          var categorySelectedId = jQuery("select[name=category] option:selected").val();
          var categorySelectedPath = jQuery("select[name=category]")[0].selectize.getItem(categorySelectedId).text();
          jQuery('.selectedAlbum').show().find('span').html(categorySelectedPath);
        }

        // warn user if she wants to leave page while upload is running
        jQuery(window).bind('beforeunload', function() {
          return "<?php echo htmlspecialchars((string)l10n('Upload in progress'), ENT_QUOTES, 'UTF-8', true);?>
";
        });

        // no more change on category/level
        jQuery("select[name=level]").attr("disabled", "disabled");

        // You can override settings before the file is uploaded
        var options = {
          pwg_token : pwg_token
        };

        if (formatMode) {
          options.format_of = file.format_of;
        } else {
          options.category = jQuery("select[name=category] option:selected").val();
          options.level = jQuery("select[name=level] option:selected").val();
          options.name = file.name;
        }

        up.setOption('multipart_params', options);
      },

      FileUploaded: function(up, file, info) {
        // Called when file has finished uploading
        //console.log('[FileUploaded] File:', file, "Info:", info);
        
        // hide item line
        jQuery('#'+file.id).hide();

        let data = jQuery.parseJSON(info.response);
      
        jQuery("#uploadedPhotos").parent("fieldset").show();
      
        html = '<a href="admin.php?page=photo-'+data.result.image_id+'" style="position : relative" target="_blank">';
        html += '<img src="'+data.result.square_src+'" class="thumbnail" title="'+data.result.name+'">';
        if (formatMode) html += '<div class="format-ext-name" title="'+file.name+'"><span>'+file.name.slice(file.name.indexOf('.'))+'</span></div>';
        html += '</a> ';
      
        jQuery("#uploadedPhotos").prepend(html);

        // do not remove file, or it will reset the progress bar :-/
        // up.removeFile(file);
        uploadedPhotos.push(parseInt(data.result.image_id));
        if (!formatMode)
          uploadCategory = data.result.category;
      },

      Error: function(up, error) {
        // Called when file has finished uploading
        //console.log('[Error] error: ', error);
        var piwigoApiResponse = jQuery.parseJSON(error.response);

        jQuery(".errors ul").append('<li>'+piwigoApiResponse.message+'</li>');
        jQuery(".errors").show();
      },

      UploadComplete: function(up, files) {
        // Called when all files are either uploaded or failed
        //console.log('[UploadComplete]');
        
        Piecon.reset();

        if (!formatMode) {
          jQuery.ajax({
            url: "ws.php?format=json&method=pwg.images.uploadCompleted",
            type:"POST",
            data: {
              pwg_token: pwg_token,
              image_id: uploadedPhotos.join(","),
              category_id: uploadCategory.id,
            }
          });
        }

        jQuery("#uploadForm, #permissions, .showFieldset").hide();

        const infoText = formatMode?
          sprintf(formatsUploaded_label, uploadedPhotos.length, [...new Set(files.map(f => f.format_of))].length)
          : sprintf(photosUploaded_label, uploadedPhotos.length)

        jQuery(".infos").append('<ul><li>'+infoText+'</li></ul>');


        if (!formatMode) {
          html = sprintf(
            albumSummary_label,
            '<a href="admin.php?page=album-'+uploadCategory.id+'">'+uploadCategory.label+'</a>',
            parseInt(uploadCategory.nb_photos)
          );

          jQuery(".infos ul").append('<li>'+html+'</li>');
        }

        jQuery(".infos").show();

        // TODO: use a new method pwg.caddie.empty +
        // pwg.caddie.add(uploadedPhotos) instead of relying on huge GET parameter
        // (and remove useless code from admin/photos_add_direct.php)

        jQuery(".batchLink").attr("href", "admin.php?page=photos_add&section=direct&batch="+uploadedPhotos.join(","));
        jQuery(".batchLink").html(sprintf(batch_Label, uploadedPhotos.length));

        jQuery(".afterUploadActions").show();
        jQuery('#uploadingActions').hide();

        // user can safely leave page without warning
        jQuery(window).unbind('beforeunload');
      }
    }
	});

});
<?php $_block_repeat=false;
echo $_block_plugin2->block_footer_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<div id="photosAddContent">

<?php if (count($_smarty_tpl->tpl_vars['setup_errors']->value) > 0) {?>
  <div class="errors">
    <ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['setup_errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
      <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  </div>
<?php } else {
if (count($_smarty_tpl->tpl_vars['setup_warnings']->value) > 0) {?>
  <div class="warnings">
    <ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['setup_warnings']->value, 'warning');
$_smarty_tpl->tpl_vars['warning']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['warning']->value) {
$_smarty_tpl->tpl_vars['warning']->do_else = false;
?>
      <li><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    <div class="hideButton" style="text-align:center"><a href="<?php echo $_smarty_tpl->tpl_vars['hide_warnings_link']->value;?>
"><?php echo l10n('Hide');?>
</a></div>
  </div>
<?php }?>
  <?php }?>   
<?php if ($_smarty_tpl->tpl_vars['PROMOTE_MOBILE_APPS']->value) {?>
    <div class="promote-apps">
      <div class="promote-content">
        <div class="left-side">
          <img src="https://sandbox.piwigo.com/uploads/4/y/1/4y1zzhnrnw//2023/01/24/20230124175152-015bc1e3.png">
        </div>
        <div class="promote-text">
          <span><?php echo strtr((string)l10n("Piwigo is also on mobile."), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
</span>
          <span><?php echo strtr((string)l10n("Try now !"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
</span>
        </div>
        <div class="right-side">
          <div>
            <a href="<?php echo $_smarty_tpl->tpl_vars['PHPWG_URL']->value;?>
/mobile-applications" target="_blank"><span class="go-to-porg icon-link-1"><?php echo strtr((string)l10n("Discover"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
</span></a>
          </div>
        </div>
      </div>
      <span class="dont-show-again icon-cancel tiptip" title="<?php echo strtr((string)l10n('Understood, do not show again'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
"></span>
    </div>
<?php }
if ($_smarty_tpl->tpl_vars['ENABLE_FORMATS']->value) {?>
    <div class="format-mode-group-manager">
    <label class="switch" onClick="window.location.replace('<?php echo $_smarty_tpl->tpl_vars['SWITCH_MODE_URL']->value;?>
'); $('.switch .slider').addClass('loading');">
      <input type="checkbox" id="toggleFormatMode" <?php if ($_smarty_tpl->tpl_vars['DISPLAY_FORMATS']->value) {?>checked<?php }?>>
      <span class="slider round"></span>
    </label>
      <p><?php echo l10n('Upload Formats');?>
</p>
    </div>
<?php }
if (!$_smarty_tpl->tpl_vars['DISPLAY_FORMATS']->value) {?>
  <div class="addAlbumEmptyCenter"<?php if ($_smarty_tpl->tpl_vars['NB_ALBUMS']->value > 0) {?> style="display:none;"<?php }?>>
    <div class="addAlbumEmpty">
      <div class="addAlbumEmptyTitle"><?php echo l10n('Welcome!');?>
</div>
      <p class="addAlbumEmptyInfos"><?php echo l10n('Piwigo requires an album to add photos.');?>
</p>
      <a href="#" data-add-album="category" class="buttonLike"><?php echo l10n('Create a first album');?>
</a>
    </div>
  </div>
<?php }?>
<div class="infos" style="display:none"><i class="eiw-icon icon-ok"></i></div>
<div class="errors" style="display:none"><i class="eiw-icon icon-cancel"></i><ul></ul></div>

<p class="afterUploadActions" style="margin:10px; display:none;"> 
<?php if (!$_smarty_tpl->tpl_vars['DISPLAY_FORMATS']->value) {?>
    <a class="batchLink icon-pencil"></a><span class="buttonSeparator"><?php echo l10n('or');?>
</span><a href="admin.php?page=photos_add" class="icon-plus-circled"><?php echo l10n('Add another set of photos');?>
</a>
<?php } else { ?>
    <a href="admin.php?page=photos_add&formats" class="icon-plus-circled"><?php echo l10n('Add another set of formats');?>
</a>
<?php }?>
</p>

  <form id="uploadForm" class="<?php if ($_smarty_tpl->tpl_vars['DISPLAY_FORMATS']->value) {?>format-mode<?php }?>" enctype="multipart/form-data" method="post" action="<?php echo $_smarty_tpl->tpl_vars['form_action']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['NB_ALBUMS']->value == 0) {?> style="display:none;"<?php }?>>
<?php if (!$_smarty_tpl->tpl_vars['DISPLAY_FORMATS']->value) {?>
    <fieldset class="selectAlbum">
      <legend><span class="icon-folder-open icon-red"></span><?php echo l10n('Drop into album');?>
</legend>
      <div class="selectedAlbum"<?php if (!(isset($_smarty_tpl->tpl_vars['ADD_TO_ALBUM']->value))) {?> style="display: none"<?php }?>><span class="icon-sitemap"><?php if ((isset($_smarty_tpl->tpl_vars['ADD_TO_ALBUM']->value))) {
echo $_smarty_tpl->tpl_vars['ADD_TO_ALBUM']->value;
}?></span></div>
      <div class="selectAlbumBlock"<?php if ((isset($_smarty_tpl->tpl_vars['ADD_TO_ALBUM']->value))) {?> style="display: none"<?php }?>>
        <span id="albumSelection">
          <select data-selectize="categories" data-value="<?php echo htmlspecialchars((string)call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['selected_category']->value )), ENT_QUOTES, 'UTF-8', true);?>
"
          data-default="first" name="category" style="width:600px"></select>
        </span>
        <span class="orChoice"><?php echo l10n('... or ');?>
 </span>
        <a href="#" data-add-album="category" class="orCreateAlbum icon-plus-circled"> <?php echo l10n('create a new album');?>
</a>
      </div>
    </fieldset>
<?php } elseif ($_smarty_tpl->tpl_vars['HAVE_FORMATS_ORIGINAL']->value) {?>
    <fieldset class="originalPicture">
      <legend><span class="icon-link-1 icon-red"></span><?php echo l10n('Picture to associate formats with');?>
</legend>
      <a class='info-framed' href='<?php echo $_smarty_tpl->tpl_vars['FORMATS_ORIGINAL_INFO']->value['u_edit'];?>
' title='<?php echo l10n('Edit photo');?>
'>
        <div class='info-framed-icon'>
          <img src='<?php echo $_smarty_tpl->tpl_vars['FORMATS_ORIGINAL_INFO']->value['src'];?>
'></i>
        </div>
        <div class='info-framed-container'>
          <div class='info-framed-title'><?php echo $_smarty_tpl->tpl_vars['FORMATS_ORIGINAL_INFO']->value['name'];?>
</div>
          <?php if ((isset($_smarty_tpl->tpl_vars['FORMATS_ORIGINAL_INFO']->value['formats']))) {?><div><?php echo $_smarty_tpl->tpl_vars['FORMATS_ORIGINAL_INFO']->value['formats'];?>
</div><?php }?>
          <div><?php echo $_smarty_tpl->tpl_vars['FORMATS_ORIGINAL_INFO']->value['ext'];?>
</div>
        </div>
      </a>
    </fieldset>
<?php }?>
    <fieldset class="selectFiles">
      <legend><span class="icon-file-image icon-yellow"></span><?php echo l10n('Select files');?>
</legend>
      <div class="selectFilesButtonBlock">
        <button id="addFiles" class="buttonGradient"><?php if (!$_smarty_tpl->tpl_vars['DISPLAY_FORMATS']->value) {
echo l10n('Add Photos');
} else {
echo l10n('Add formats');
}?><i class="icon-plus-circled"></i></button>
        <div class="selectFilesinfo">
<?php if ((isset($_smarty_tpl->tpl_vars['original_resize_maxheight']->value))) {?>
          <p class="uploadInfo"><?php echo l10n('The picture dimensions will be reduced to %dx%d pixels.',$_smarty_tpl->tpl_vars['original_resize_maxwidth']->value,$_smarty_tpl->tpl_vars['original_resize_maxheight']->value);?>
</p>
<?php }?>
            <p id="uploadWarningsSummary">
<?php if (!$_smarty_tpl->tpl_vars['DISPLAY_FORMATS']->value) {?>
              <?php echo l10n('Allowed file types: %s.',$_smarty_tpl->tpl_vars['upload_file_types']->value);?>

<?php } else { ?>
              <?php echo l10n('Allowed file types: %s.',$_smarty_tpl->tpl_vars['str_format_ext']->value);?>
 
              <?php if (!$_smarty_tpl->tpl_vars['HAVE_FORMATS_ORIGINAL']->value) {?><p><?php echo l10n('The original picture will be detected with the filename (without extension).');?>
</p><?php }
}?>
            </p>
          </p>
<?php if ((isset($_smarty_tpl->tpl_vars['max_upload_resolution']->value))) {?>
            <?php echo l10n('Approximate maximum resolution: %dM pixels (that\'s %dx%d pixels).',$_smarty_tpl->tpl_vars['max_upload_resolution']->value,$_smarty_tpl->tpl_vars['max_upload_width']->value,$_smarty_tpl->tpl_vars['max_upload_height']->value);?>

<?php }?>
          </p>
        </div>
      </div>
      <div id="uploader">
        <p>Your browser doesn't have HTML5 support.</p>
      </div>

    </fieldset>
    
    <div id="uploadingActions" style="display:none">
      <div class="big-progressbar" style="max-width:98%;margin-bottom: 10px;">
        <div class="progressbar" style="width:0%"></div>
      </div>
      <button id="cancelUpload" class="buttonLike icon-cancel-circled"><?php echo l10n('Cancel');?>
</button>
    </div>

    <button id="startUpload" class="buttonGradient icon-upload" disabled><?php echo l10n('Start Upload');?>
</button>

  </form>

  <fieldset style="display:none" class="Addedphotos">
    <div id="uploadedPhotos"></div>
  </fieldset>

</div> <!-- photosAddContent -->
<?php }
}
