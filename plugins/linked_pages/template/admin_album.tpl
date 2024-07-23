{combine_script id='jquery.underscore' load='footer' path='themes/default/js/plugins/underscore.js'}

{footer_script require='jquery.ui.sortable'}
(function($){
  $("#menuOrdering").submit(function() {
    $('.menuUl li').each(function(i) {
      $('.menuPos[name="position[' + $(this).data('id') + ']"]').val(i);
    });
  });

  $('.menuUl').on('click', 'a.deletePage', function() {
    var id = $(this).parents("li.menuLi").data('id');
    $(this).parents("li.menuLi").remove();
    $("select[name='add_page'] option[value='"+ id +"']").removeAttr("disabled");
  });

  function init_sortable() {
    $(".menuUl").sortable({
      axis: "y",
      opacity: 0.8
    });
  }

  var template = _.template($('#lp_template').html());

  $("select[name='add_page']").change(function() {
    if ($(this).val() != -1) {
      var $option = $(this).children("option:selected");

      $("ul.menuUl").append(template({
        id: $(this).val(),
        name: $option.html(),
        href: $option.data('href'),
        standalone: $option.data('standalone'),
        language: $option.data('language')
      }));

      $option.attr("disabled", "disabled");
      $(this).val(-1);
      init_sortable();
    }
  });

  init_sortable();
  
  {foreach from=$cat_pages item=page}
  $("ul.menuUl").append(template({
    id: {$page.page_id},
    name: '{$page.title}',
    href: '{$page.U_PAGE}',
    standalone: {$page.standalone},
    language: '{$page.language}'
  }));
  {/foreach}
}(jQuery));
{/footer_script}

{html_style}
#menuOrdering a:hover { border:none; }
.menuPos { display:none; }
.menuLi { cursor:move; }
{/html_style}


<div class="titrePage">
  <h2><span style="letter-spacing:0">{$CATEGORIES_NAV}</span> &#8250; {'Edit album'|translate} {$TABSHEET_TITLE}</h2>
</div>

<form id="menuOrdering" action="{$F_ACTION}" method="post">
{if count($pages)}
  <p style="margin-bottom:15px;">
    {'ap_add_page'|translate}
    <select name="add_page">
      <option value="-1" selected="selected">------------</option>
      {foreach from=$pages item=page}
      <option value="{$page.id}" {$page.disabled} data-href="{$page.U_PAGE}" data-standalone="{$page.standalone}" data-language="{$page.language}">
        {$page.title}
      </option>
      {/foreach}
    </select>
  </p>

  <ul class="menuUl"></ul>
  
  <p class="menuSubmit">
    <input type="submit" name="save_pages" value="{'Submit'|translate}">
    <input type="submit" name="reset" value="{'Reset'|translate}">
  </p>
{/if}

<p style="text-align:left;">
  <a href="{$AP_ADMIN}">{'ap_add_page'|translate}</a>
</p>

</form>

<script type="text/template" id="lp_template">
  <li class="menuLi" data-id=<%= id %>>
    <p>
      <span style="margin:2px 5px;">
        <a href="#" class="deletePage"><img src="{$ROOT_URL}{$themeconf.admin_icon_dir}/category_delete.png" alt="{'delete'|translate}" title="{'delete'|translate}"></a>
      </span>

      <img src="{$themeconf.admin_icon_dir}/cat_move.png" class="button drag_button" alt="{'Drag to re-order'|translate}" title="{'Drag to re-order'|translate}">
      <b><a href="<%= href %>"><%= name %></a></b>
    <% if (standalone) { %>
      - {'ap_standalone_page'|translate}
    <% } %>
    <% if (language) { %>
      <i>(<%= language %>)</i>
    <% } %>
    </p>
    
    <input class="menuPos" type="text" size="4" name="position[<%= id %>]" maxlength="4" value="0">
  </li>
</script>