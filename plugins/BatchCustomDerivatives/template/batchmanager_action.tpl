{combine_script id='common' load='footer' path='admin/themes/default/js/common.js'}
{footer_script require="jquery"}
function bcd_selectAll() {
  $("#bcd_action_generate_derivatives input[type=checkbox]").prop("checked", true);
}

function bcd_selectNone() {
  $("#bcd_action_generate_derivatives input[type=checkbox]").prop("checked", false);
}

var bcd_derivatives = {
  elements: null,
  done: 0,
  total: 0,

  finished: function() {
    return bcd_derivatives.done == bcd_derivatives.total && bcd_derivatives.elements && bcd_derivatives.elements.length==0;
  }
};

function bcd_progress(success) {
  jQuery('#progressBar').progressBar(bcd_derivatives.done, {
    max: bcd_derivatives.total,
    textFormat: 'fraction',
    boxImage: 'themes/default/images/progressbar.gif',
    barImage: 'themes/default/images/progressbg_orange.gif'
  });
  if (success !== undefined) {
    var type = success ? 'regenerateSuccess': 'regenerateError',
	s = jQuery('[name="'+type+'"]').val();
    jQuery('[name="'+type+'"]').val(++s);
  }

  if (bcd_derivatives.finished()) {
    jQuery('#applyAction').click();
  }
}

function delete_derivatives_new(ids){
  $.ajax({
    url: 'http://192.168.157.128/piwigo/admin.php?page=batch_manager',
    method: 'POST',
    headers: {
        'Accept': 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8',
        'Content-Type': 'application/x-www-form-urlencoded',
    },
    data: {
        start: '0',
        pwg_token: '{$PWG_TOKEN}',
        filter_prefilter: 'caddie',
        filter_category_use: 'on',
        filter_category: '6',
        filter_category_recursive: 'on',
        tag_mode: 'AND',
        filter_level: '0',
        filter_dimension_min_width: '480',
        filter_dimension_max_width: '1920',
        filter_dimension_min_height: '358',
        filter_dimension_max_height: '1920',
        filter_dimension_min_ratio: '0.56',
        filter_dimension_max_ratio: '1.77',
        q: '',
        filter_filesize_min: '0.0',
        filter_filesize_max: '0.7',
        whole_set: '',
        'selection[]': ids,
        selectAction: 'delete_derivatives',
        confirm_deletion: '1',
        submit: '',
        associate: '',
        dissociate: '6',
        author: '',
        title: '',
        date_creation: '2025-01-03 00:00:00',
        level: '0',
        'del_derivatives_type[]': ['square', 'thumb', 'medium', 'custom'],
        fs_price: 'default',
        swap_price: '',
        swap_dl_price: '',
        price: 'default',
        nb_credits: '4',
        radio: 'apply',
        albums: '-',
        file_link: '',
        'w[file]': '',
        watermarkImage: '',
        isSelectImage: 'true',
        'w[opacity]': '',
        regenerateSuccess: '0',
        regenerateError: '0'
    },
    success: (response) => {
        console.log('Response:', response);
    },
    error: (xhr, status, error) => {
        console.error('Error:', error);
    }
  });

}

function bcd_getDerivativeUrls() {
  var ids = bcd_derivatives.elements.splice(0, 500);
  var params = { max_urls: 100000, ids: ids, types: [] };
  jQuery("#bcd_action_generate_derivatives input").each( function(i, t) {
    if ($(t).is(":checked"))
      params.types.push( t.value );
  } );
  params.watermark = jQuery("#wSelect").find(":selected").val();
  params.opacity = jQuery("#wOpacity").val();
  console.log(params);
  delete_derivatives_new(params.ids)

  //return 1;
{*  if(jQuery("#isSelectImage").val() == 'false'){*}
{*    params.append('watermarkImages', $('input[type=file]')[0].files[0])*}
{*  }*}
  jQuery.ajax( {
    type: "POST",
    url: 'ws.php?format=json&method=bcd.getMissingCustomDerivatives',
    data: params,
    dataType: "json",
    success: function(data) {
    console.log(data);
      if (!data.stat || data.stat != "ok") {
	  return;
      }
      bcd_derivatives.total += data.result.urls.length;
      bcd_progress();
      for (var i=0; i < data.result.urls.length; i++) {
	jQuery.manageAjax.add("queued", {
	  type: 'GET',
	  url: data.result.urls[i] + "&ajaxload=true",
	  dataType: 'json',
	  success: ( function(data) { bcd_derivatives.done++; bcd_progress(true) }),
	  error: ( function(data) { bcd_derivatives.done++; bcd_progress(false) })
	});
      }
      if (bcd_derivatives.elements.length)
	  setTimeout( bcd_getDerivativeUrls, 10000 * (bcd_derivatives.total-bcd_derivatives.done));
    }
  });
}
$(document).ready(function() {
  jQuery('#applyAction').click(function() {
    var action = jQuery('[name="selectAction"]').val();
    if (action != 'batch_custom_derivatives'
	|| bcd_derivatives.finished() )
    {
      return true;
    }

    jQuery('.bulkAction').hide();

    var queuedManager = jQuery.manageAjax.create('queued', {
      queue: true,
      cacheResponse: false,
      maxRequests: 1
    });

    bcd_derivatives.elements = [];
    if (jQuery('input[name="setSelected"]').is(':checked'))
      bcd_derivatives.elements = all_elements;
    else
      jQuery('.thumbnails input[type=checkbox]').each(function() {
	if (jQuery(this).is(':checked')) {
	  bcd_derivatives.elements.push(jQuery(this).val());
	}
      });

    jQuery('#applyActionBlock').hide();
    jQuery('select[name="selectAction"]').hide();
    jQuery('#regenerationMsg').show();

    bcd_progress();
    bcd_getDerivativeUrls();
    return false;
  });

  jQuery(".addWatermarkOpen").click(function(){
    jQuery("#addWatermark, #selectWatermark-custom").toggle();
    oldOption = jQuery("#isSelectImage").val();
    if(oldOption == 'false') {
    jQuery("#isSelectImage").val('true');
    } else {
    jQuery("#isSelectImage").val('false');
    }

    return false;
  });
});
{/footer_script}
<!-- generate derivatives -->
<div id="bcd_action_generate_derivatives" class="bulkAction">
  <p>{$PWG_TOKEN}</p>
  <a href="javascript:bcd_selectAll()">{'All'|translate}</a>,
  <a href="javascript:bcd_selectNone()">{'None'|translate}</a>
  <br>
  {foreach from=$bcd_derivatives_types key=type item=disp}
    <label><input type="checkbox" name="bcd_derivatives_type[]" value="{$type}"> {$disp}</label>
  {/foreach}
</div>
<div id="configContent">
  <fieldset id="watermarkConf-custom" class="no-border">
    <legend></legend>
        <span id="selectWatermark-custom"{if isset($ferrors.watermarkImage)} style="display:none"{/if}><label>{'Select a file'|translate}</label>
          <label for="wSelect"></label>
          <select name="w[file]" id="wSelect" class="select-watermark-custom">
            {html_options options=$watermark_files selected=$watermark.file}
          </select>

          {'... or '|translate}<a href="#" class="addWatermarkOpen">{'add a new watermark'|translate}</a>
          <br>
        </span>
        <span id="addWatermark"{if isset($ferrors.watermarkImage)} style="display:inline"{/if}>
          {'add a new watermark'|translate} {'... or '|translate}<a href="#" class="addWatermarkOpen">{'Select a file'|translate}</a>
          <br>
          <input type="file" size="60" id="watermarkImage" name="watermarkImage"{if isset($ferrors.watermarkImage)} class="dError"{/if}> (png)
          {if isset($ferrors.watermarkImage)}<span class="dErrorDesc" title="{$ferrors.watermarkImage|@htmlspecialchars}">!</span>{/if}
        </span>
        <input type="hidden" id="isSelectImage" name="isSelectImage" value="true" >
        <label style="margin-top: 10px">{'Opacity'|translate}</label>
        <label>
          <input size="3" maxlength="3" type="text" id="wOpacity" name="w[opacity]" value="{if isset($watermark.opacity)} {$watermark.opacity} {/if}"{if isset($ferrors.watermark.opacity)} class="dError"{/if}>
        </label> %
        {if isset($ferrors.watermark.opacity)}<span class="dErrorDesc" title="{$ferrors.watermark.opacity}">!</span>{/if}
  </fieldset>

</div>
<style>
  #watermarkConf-custom{
    padding-left: 0!important;
    margin-top: 0!important;
    #selectWatermark-custom{
      display: inline;
    }
    width: 500px;
  }
  .select-watermark-custom {
    color: #666!important;
    background-color: #ccc!important;
    width: 132px !important;
    margin-bottom: 10px !important;
    padding: 0!important;
    -webkit-appearance: default-button !important;
  }
</style>
