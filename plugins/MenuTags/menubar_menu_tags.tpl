{if "bootstrap_darkroom" == $themeconf.name}
<li id="categoriesDropdownMenu" class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{'Tags'|@translate}</a>
    <div class="dropdown-menu dropdown-menu-right" role="menu">
  {foreach from=$block->data item=tag}
      <span>{strip}
        <a class="dropdown-item tagLevel{$tag.level}" href="{$tag.URL}" title="{'display photos linked to this tag'|@translate}">{$tag.name}</a></span>{/strip}
  {/foreach}
    </div>
</li>
{else}
<dt>{'Tags'|@translate}</dt>
<dd>
	<div id="menuTagCloud">
	{foreach from=$block->data item=tag}
		<span>{strip}
			<a class="tagLevel{$tag.level}" href="{$tag.URL}" title="{'display photos linked to this tag'|@translate}">{$tag.name}</a></span>{/strip}
	{/foreach}
	</div>
</dd>
{/if}