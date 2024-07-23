{html_style}{literal}
.radio {
    margin-bottom: 10px;
}
.radio-label {
    margin-left: 5px;
}
#attach {
    display: flex;
}
#option {
    width: fit-content !important;
    margin-left: 5px;
    overflow-y: scroll;
}
#files {
    display: none;
}
#file_link {
    padding: 10px
}
{/literal}{/html_style}

{footer_script}{literal}

jQuery(document).ready(function() {
    jQuery('#option').on('change', function() {
        const album_id = jQuery('#option').val();
        var rootUrl = window.location.protocol;
        if(album_id == "-") {
            jQuery('#files').hide();
            jQuery('#file_link').show();

        } else {
            jQuery('#files').show();
            jQuery('#file_link').hide();

        }
        jQuery.ajax({
          url: rootUrl + "ws.php?format=json&method=attach.file.get.file",
          type:"POST",
          data: {
            album_id: album_id
          },
          dataType: "json",
          success:function(data) {
            var albums = data['result'];
            var select = document.getElementById('files');
            select.innerHTML = '';
            if(albums != 'error') {
                albums.forEach(function(album) {
                    var option = document.createElement('option');
                    option.value = album.id + "||" + album.path; 
                    option.textContent = album.file; 

                    select.appendChild(option);
                });
            }

          },
          error:function(XMLHttpRequest, textStatus, errorThrows) {}
        });

    });

    jQuery("input[name=radio]").change(function() {
        checkOptions();
    });

    jQuery('.dropdown').dropdown({
        label: {
            duration: 0,
        },
        debug: true,
        performance: true,
    });
    jQuery('#files').hide();

});
{/literal}{/footer_script}

<div id="attach">
    <div>
        <div class="radio">
            <input id="radio1" name="radio" value="apply" type="radio" checked>
            <label for="radio1" class="radio-label">Áp dụng</label>
        </div>
        <div class="radio">
            <input id="radio2" name="radio" value="remove" type="radio">
            <label for="radio2" class="radio-label">Gỡ bỏ</label>
        </div>
    </div>
    <div>
        <select id="option" name="albums" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
            <option value="-">Dán link download</option>
            {foreach from=$albums item=album}
            {strip}
                <option value="{$album.id}" >{$album.name}</option>
            {/strip}
            {/foreach}
        </select>
        <input name="file_link" id="file_link" type="text" ><br>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/semantic.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/semantic.js"></script>
        <select class="ui fluid search dropdown" name="file_id" id="files">
        </select>
     
    </div>
</div>