{html_style}{literal}
#newPrice {display:none;}
.permitActionItem{
  width: 100%;
}
.radio{
  width: fit-content;
}
#ppcredits{
  display: flex;
}
span{
  margin-right: 10px;
  margin-left: 10px;
}
.p{
  display: flex;
  justify-content: space-between;
}
.p input{
  margin: 2px;
}
{/literal}{/html_style}

{footer_script}{literal}
jQuery(document).ready(function() {
  function checkPriceOptions() {
    if (jQuery("input[name=fs-price]:checked").val() == "new") {
      jQuery("#newPrice").show();
    }
    else {
      jQuery("#newPrice").hide();
    }
  }

  checkPriceOptions();

  jQuery("input[name=fs-price]").change(function() {
    checkPriceOptions();
  });
});
{/literal}{/footer_script}

<div id="ppcredits">
  <span>
    <div class="radio">
      <input id="radio-1" name="radio" value="apply" type="radio" checked>
      <label for="radio-1" class="radio-label">Áp dụng</label>
    </div>
    <div class="radio">
      <input id="radio-2" name="radio" value="remove" type="radio">
      <label  for="radio-2" class="radio-label">Gỡ bỏ</label>
    </div>
  </span>
  <span>
    <div class="radio">
      <input id="radio-3" name="fs-price" value="default" type="radio" checked>
      <label for="radio-3" class="price-label">Follow default price (swap: {$swap}, download: {$download})</label>
      <br>
      <input id="radio-4" name="fs-price" value="new" type="radio">
      <label  for="radio-4" class="price-label">Set new price</label>
    </div>
    <div class="radio">
    </div>
    <div id="newPrice">
      <div class="p">
        Swap price <input type="number" id="swap-price" name="swap-price">
      </div>
      <div class="p">
        Download price <input type="number" id="swap-dl-price" name="swap-dl-price">
      </div>
    </div>
  </span>
</div>