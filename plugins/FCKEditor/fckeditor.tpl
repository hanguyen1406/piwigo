{html_head}
<style type="text/css">
FORM#catModify TABLE TABLE {ldelim} width: 100%; }
#cke_page_banner {ldelim} overflow: auto; }
</style>

<script type="text/javascript" src="plugins/FCKEditor/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
{if $FCK_TOOLBAR == 'Basic'}
CKEDITOR.config.toolbar_Basic =
[
  ["Source"],["Bold","Italic","Underline"],
  ["JustifyLeft","JustifyCenter","JustifyRight","JustifyBlock"],
  ["Styles","Format","Font","FontSize"],
  ["Link","Unlink","ShowBlocks"]
];
{/if}
CKEDITOR.config.width = "{$FCK_WIDTH}";
CKEDITOR.config.height = "{$FCK_HEIGHT}";
CKEDITOR.config.toolbar = "{$FCK_TOOLBAR}";

{if !empty($FCK_areas)}
window.onload = function() {ldelim}
{foreach from=$FCK_areas item=area}
  {if !isset($FCK_config.$area) or $FCK_config.$area}
  CKEDITOR.replace('{$area}');
  {/if}
{/foreach}
}
{/if}

function toogleEditor(name) {ldelim}
  if (typeof( CKEDITOR.instances[name] ) != "undefined") {ldelim}
    CKEDITOR.instances[name].destroy();
    jQuery.post("plugins/FCKEditor/update_config.php", {ldelim}area: name, status: "off"});
  } else {ldelim}
    CKEDITOR.replace(name);
    jQuery.post("plugins/FCKEditor/update_config.php", {ldelim}area: name, status: "on"});
  }
}
</script>
{/html_head}