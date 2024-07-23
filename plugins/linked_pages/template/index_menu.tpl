{combine_css path=$LINKEDPAGES_PATH|cat:"template/style.css"}

<ul id="linked_pages">
{foreach from=$category_pages item=page name=foo}
  <li id="linked_page_{$page.page_id}" class="row_{$smarty.foreach.foo.index}"><a href="{$page.U_PAGE}">{$page.TITLE}</a></li>
{/foreach}
</ul>