<!-- Dependencies -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
{combine_css id='select2' path="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css"}
{combine_css path="http://103.200.23.179/~hanguye6/php-melody/admin/css/admin-melody.css"}
{combine_css path="http://103.200.23.179/~hanguye6/php-melody/admin/css/bootstrap-admin.min.css"}
{combine_css path="http://103.200.23.179/~hanguye6/php-melody/admin/css/bootstrap.min.css"}
{literal}
<style>
    .visit-gallery {
        text-align: center;
    }
</style>
{/literal}
<form id="videoForm" method="post" action="" class="properties">
    <li>
        <input placeholder="Điền từ cần tìm kiếm" type="text" name="url" id="urlInput" style="width:400px;">
    </li>
    
    <select multiple id='f_albums' style="width: 100%">
    {foreach $albums as $key => $value}
        <option value='{$value['id']}'>{$value['name']}</option>
    {/foreach}
    </select>

    <select multiple id='f_tags' style="width: 100%">
    {foreach $tags as $key => $value}
        <option value='{$value['id']}'>{$value['name']}</option>
    {/foreach}
    </select>
</form>
<p style="text-align:left; margin: 5px">
    <button class="btn btn-primary" id="addvideo">Tìm kiếm</button>
    <button class="btn" id="selectAll">Chọn tất cả</button>
</p>

<div id="apiResponseContainer"></div>

<button style="display:none" class="btn btn-primary" id="addAllVideo">Thêm tất cả video</button>
<!-- JavaScript -->
<script>
jQuery(document).ready(function() {
    let isChecked = false;
    jQuery(`select[id^="f_albums"]`).select2({
        placeholder: "Chọn albums",  
        allowClear: false               
    });
    jQuery(`select[id^="f_tags"]`).select2({
        placeholder: "Chọn tags",  
        allowClear: false               
    });
    $("pre").remove();
    jQuery('#addvideo').on('click', function(event) {
        event.preventDefault();
        var searchKeyword = jQuery('#urlInput').val();
        if(!searchKeyword) searchKeyword = "guitar đặng tuấn";

        jQuery.ajax({
            url: 'http://192.168.157.128/piwigo/import-yt.php?word=' 
            + searchKeyword + '&albums=' 
            + jQuery(`select[id^="f_albums"]`).val()
            + '&tags=' + jQuery(`select[id^="f_tags"]`).val(),
            type: 'GET',
            success: function(response) {
                jQuery('#apiResponseContainer').html(response);
                //console.log(jQuery(`select[id^="f_albums"]`).val())
            },
            error: function(error) {
                alert('An error occurred while processing your request.');
            }
        });
    });

    jQuery('#selectAll').on('click', function () {
        isChecked = !isChecked; // Đảo ngược trạng thái
        jQuery('input[name^="video_ids"]').prop('checked', isChecked);
    });
});
</script>
