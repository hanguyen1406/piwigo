<!-- Dependencies -->

<script  cript src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

{combine_css id='select2' path="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css"}

<form id="videoForm" method="post" action="" class="properties">
    <li>
        <input placeholder="Điền từ cần tìm kiếm" type="text" name="url" id="urlInput" style="width:400px;">
    </li>
    <p style="text-align:left;">
        <button id="addvideo">Add</button>
    </p>
</form>

<div id="apiResponseContainer"></div>

<!-- JavaScript -->
<script>
jQuery('#addvideo').on('click', function(event) {
    event.preventDefault();

    var searchKeyword = jQuery('#urlInput').val();
    if(!searchKeyword) searchKeyword = "guitar đặng tuấn";

    jQuery.ajax({
        url: 'http://192.168.157.128/piwigo/import-yt.php?word=' + searchKeyword,
        type: 'GET',
        success: function(response) {
            jQuery('#apiResponseContainer').html(response);

        },
        error: function(error) {
            alert('An error occurred while processing your request.');
        }
    });
});


</script>
