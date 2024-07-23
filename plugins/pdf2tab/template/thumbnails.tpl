{combine_script id="jquery" load="header"}
{html_head}
{literal}
<script type="text/javascript">
	//Add a link to the thumbnail
	function pdf2tab_link() {
		$("img[class=thumbnail]").each(function() {
			var filename_array = $(this).attr("pdf2tab").split(".");
			var filename_extension = filename_array[filename_array.length-1].toLowerCase();
			
{/literal}
			var pdf2tab_supported_extensions = new Array();
			{foreach from=$pdf2tab_supported_extensions item=extension name=loop}
				pdf2tab_supported_extensions[{$smarty.foreach.loop.index}] = "{$extension}";
			{/foreach}
{literal}
			if(jQuery.inArray(filename_extension, pdf2tab_supported_extensions) != -1)
			{
				$(this).closest('a').attr({
					target: "_blank",
					href: $(this).attr("pdf2tab")
				});
{/literal}
				$(this).attr("title","{'pdf2tab_tooltip'|@translate}");
{literal}
			}			
		});
	}
  
	//When the document has finiched to load
	jQuery(document).ready(function(){
		pdf2tab_link();
	});
  
	//Allow pdf2tab to work with RV Thumb Scroller 
	jQuery(window).bind("RVTS_loaded", function(){
		pdf2tab_link();
	});
</script>
{/literal}
{/html_head}