{combine_script id='common' load='footer' path='admin/themes/default/js/common.js'}
{combine_script id='jquery.dataTables' load='footer' path='themes/default/js/plugins/jquery.dataTables.js'}

{html_style}
.sorting { background: url({$ROOT_URL}themes/default/js/plugins/datatables/images/sort_both.png) no-repeat center right; cursor:pointer; }
.sorting_asc { background: url({$ROOT_URL}themes/default/js/plugins/datatables/images/sort_asc.png) no-repeat center right; }
.sorting_desc { background: url({$ROOT_URL}themes/default/js/plugins/datatables/images/sort_desc.png) no-repeat center right; }

.sorting, .sorting_asc, .sorting_desc { 
	padding: 3px 18px 3px 10px;
}
.sorting_asc_disabled { background: url({$ROOT_URL}themes/default/js/plugins/datatables/images/sort_asc_disabled.png) no-repeat center right; }
.sorting_desc_disabled { background: url({$ROOT_URL}themes/default/js/plugins/datatables/images/sort_desc_disabled.png) no-repeat center right; }

.dtBar {
	text-align:left;
	padding: 10px 0 10px 20px
}
.dtBar DIV{
	display:inline;
	padding-right: 5px;
}

.dataTables_paginate A {
	padding-left: 3px;
}

.historyDetails {
  text-align:left;
}

.filter input[type="submit"] {
  padding:3px 10px;
}
{/html_style}

<h2>Prepaid Credits - {'Credit'|@translate}</h2>
<div>
  
</div>
{footer_script}{literal}
var oTable = jQuery('#historyTable').dataTable({
  language: {
    processing: "{/literal}{'Loading...'|translate|escape:'javascript'}{literal}",
    lengthMenu: sprintf("{/literal}{'Show %s lines'|translate|escape:'javascript'}{literal}", '_MENU_'),
    zeroRecords: "{/literal}{'No matching line found'|translate|escape:'javascript'}{literal}",
    info: sprintf("{/literal}{'Showing %s to %s of %s lines'|translate|escape:'javascript'}{literal}", '_START_', '_END_', '_TOTAL_'),
    infoEmpty: "{/literal}{'No matching line found'|translate|escape:'javascript'}{literal}",
    infoFiltered: sprintf("{/literal}{'(filtered from %s total lines)'|translate|escape:'javascript'}{literal}", '_MAX_'),
    search: '<span class="icon-search"></span>'+"{/literal}{'Search'|translate|escape:'javascript'}{literal}",
    loadingRecords: "{/literal}{'Loading...'|translate|escape:'javascript'}{literal}",
    paginate: {
        first:    "{/literal}{'First'|translate|escape:'javascript'}{literal}",
        previous: '← '+"{/literal}{'Previous'|translate|escape:'javascript'}{literal}",
        next:     "{/literal}{'Next'|translate|escape:'javascript'}{literal}"+' →',
        last:     "{/literal}{'Last'|translate|escape:'javascript'}{literal}",
    }
  }
});
{/literal}{/footer_script}

<table id="historyTable">
<thead>
<tr class="throw">
	<th class="dtc_date">{'Ngày đăng ký'}</th>
	<th class="dtc_user">{'Tên đăng nhập'}</th>
	<th class="dtc_user">{'Địa chỉ Email'}</th>
	<th class="dtc_stat">{'Credit'}</th>
	
</tr>
</thead>

{foreach from=$user_info item=user}
{strip}
<tr>
  <td>{$user['registration_date']}</td>
  <td>{$user.username}</td>
  <td>{$user.mail_address}</td>
  <td><input id="credit_{$user.user_id}" onblur="handleBlur({$user.user_id})" type="text" value="{$user.ppcredits}"></td>
</tr>
{/strip}
{/foreach}
</table>
<script>
  async function handleBlur(id){
    var inputElement = document.querySelector("#credit_" + id);
    console.log(id ,inputElement.value);
    
    if (/^\d+$/.test(inputElement.value)){
      const data = {
        id: id,
        value: parseInt(inputElement.value)
      };
      //console.log(document.cookie);
      var formData = new FormData();
      formData.append('id', id);
      formData.append('value', data.value);

      fetch("ws.php?format=json&method=ppcredits.photo.editcredit", {
          method: "POST",
          body: formData
      })
      .then(response => {
          if (!response.ok) {
              throw new Error("Network response was not ok");
          }
          return response.text(); 
      })
      .then(data => {
          console.log(data);
      })
      .catch(error => {
          console.error("Error:", error);
      });
    }else{
      alert('Phải nhập số');
    }
  }
</script>