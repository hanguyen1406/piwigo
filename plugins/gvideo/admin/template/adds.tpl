<!-- Dependencies -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
{combine_css id='select2' path="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css"}
{combine_css path="https://hanguyen146.mooo.com/php-melody/admin/css/admin-melody.css"}
{combine_css path="https://hanguyen146.mooo.com/php-melody/admin/css/bootstrap-admin.min.css"}
{combine_css path="https://hanguyen146.mooo.com/php-melody/admin/css/bootstrap.min.css"}
{literal}

<style>
    .visit-gallery {
        text-align: center;
    }
    .select2-container--default .select2-selection--multiple {
        max-height: 100px; /* Giới hạn chiều cao */
        overflow-y: auto;  /* Hiển thị thanh cuộn */
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

<button style="display:none" class="btn btn-primary" id="addAllVideo">Thêm video</button>
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
    jQuery('#addAllVideo').on('click',async function(event) {
        let selectedVideos = [];
        $('.video-stack').each(function () {
            const isChecked = $(this).find('input[type="checkbox"][id^="import"]:checked').length > 0;

            if (isChecked) {
                const videoId = $(this).find('input[name^="video_ids"]').val();
                const videoTitle = $(this).find('.video-stack-title').val();
                const thumbnailUrl = $(this).find('input[name^="thumb_url"]').val();
                const videoDuration = $(this).find('input[name^="duration"]').val();
                const videoDirectUrl = $(this).find('input[name^="direct"]').val();
                const videoDescription = $(this).find('.video-stack-desc').val();
                
                const categories = $(this)
                    .find('select[name^="category"][id^="select_category"] option:selected')
                    .map(function () {
                        return $(this).val(); // Lấy tên category
                    })
                    .get(); // Chuyển từ jQuery object thành mảng JavaScript

                var tags = $(this)
                    .find('select[name^="category"][id^="select_tag"] option:selected')
                    .map(function () {
                        return $(this).text(); // Lấy tên tag
                    })
                    .get().join();

                selectedVideos.push({
                    videoId,
                    videoTitle,
                    thumbnailUrl,
                    videoDuration,
                    videoDirectUrl,
                    videoDescription,
                    categories,
                    tags 
                });
            }
        });

        console.log(selectedVideos); 
        if(selectedVideos.length==0) {
            alert('Chưa chọn video nào');
        }
        else if(selectedVideos[0].categories == '') {
            alert('Chưa chọn albums!!!');
        }
        else {
            await selectedVideos.forEach((video) => {
                $.ajax({
                    url: "/piwigo/admin.php?page=plugin-gvideo-add", // The target URL
                    type: "POST", // HTTP Method
                    data: {
                        add_video: "hi",
                        url: video.videoDirectUrl,
                        category: video.categories[0] ? video.categories[0] : "6",
                        mode: "provider",
                        size_common: "true",
                        autoplay_common: "true",
                        sync_description: "true",
                        sync_tags: "true",
                        description: video.videoDescription,
                        tags: video.tags 
                    },
                    success: function(response) {
                        //console.log(response);
                        //const parser = new DOMParser();
                        //const doc = parser.parseFromString(response, 'text/html');
                        //const warningText = doc.querySelector('.eiw .warnings ul')
                        //console.log(warningText);
                    },
                    error: function(xhr, status, error) {
                        console.error("Request failed:", error);
                        alert('Thêm video thất bại');
                    }
                });
            });
            alert('Thêm video thành công');
        }

    })
    jQuery('#addvideo').on('click', function(event) {
        event.preventDefault();
        var searchKeyword = jQuery('#urlInput').val();
        if(!searchKeyword) searchKeyword = "guitar đặng tuấn";


        jQuery.ajax({
            url: '/piwigo/plugins/import-yt.php?word=' 
            + searchKeyword + '&albums=' 
            + jQuery(`select[id^="f_albums"]`).val()
            + '&tags=' + jQuery(`select[id^="f_tags"]`).val(),
            type: 'GET',
            success: function(response) {
                jQuery('#apiResponseContainer').html(response);
                //console.log(jQuery(`select[id^="f_albums"]`).val())
                jQuery("#addAllVideo").css('display', 'block');

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
