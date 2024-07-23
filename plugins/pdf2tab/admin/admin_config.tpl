{include file='include/colorbox.inc.tpl'}

{combine_script id='jquery.tokeninput' load='async' require='jquery' path='themes/default/js/plugins/jquery.tokeninput.js'}
{footer_script require='jquery.tokeninput'}
jQuery(document).ready(function() {ldelim}
	jQuery('select[name="pdf2tab_extensions"]').tokenInput(
		[{foreach from=$extensions item=extension name=extensions}{ldelim}"{$extension|@escape:'javascript'}"{rdelim}{if !$smarty.foreach.extensions.last},{/if}{/foreach}],
    {ldelim}
      hintText: '{'pdf2tab_hint_text'|@translate}',
      noResultsText: '',
      searchingText: '',
      newText: '',
	  searchDelay: 0,
	  minChars: 1,
      animateDropdown: false,
      preventDuplicates: true,
      allowCreation: true
    }
  );

  jQuery("a.preview-box").colorbox();
});
{/footer_script}


<div class="titrePage">
  <h2>{'pdf2tab_name'|@translate}</h2>
</div>

<form method="post" action="" class="pdf2tab properties" ENCTYPE="multipart/form-data"> 
	<fieldset>
    <legend>{'pdf2tab_configuration'|@translate}</legend>
	<p>
		{'pdf2tab_supported_extensions_description'|@translate}
	</p>
	<p>	
		<select class="pdf2tab_select" name="pdf2tab_extensions">
			{foreach from=$pdf2tab_extensions item=pdf2tab_extension}
				<option value="{$pdf2tab_extension}" class="selected">{$pdf2tab_extension}</option>
			{/foreach}
		</select>
	</p>
	</fieldset>
  
	<p><input class="submit" type="submit" value="{'Submit'|@translate}" name="submit"/></p>
</form>