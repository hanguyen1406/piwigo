<?php
header("Access-Control-Allow-Origin: *"); // Allow all origins
header("Access-Control-Allow-Methods: GET, POST, OPTIONS"); // Allow specific methods
header("Access-Control-Allow-Headers: Content-Type, Authorization"); // Allow specific headers
header("Access-Control-Allow-Credentials: true"); // Allow credentials (if needed)
// Lấy từ khóa từ URL (ví dụ: http://example.com/script.php?word=thaythe)
// Lấy giá trị từ query string
$word = isset($_GET['word']) ? $_GET['word'] : "guitar Đặng tuấn"; 
$albums = isset($_GET['albums']) ? $_GET['albums'] : ""; 
$tags = isset($_GET['tags']) ? $_GET['tags'] : ""; 
if($albums != ""){
    $albums = explode(",", $albums);
    $albums = array_map(function($item) {
        return "\"$item\"";
    }, $albums);
    $albumsString = "var albums = [\n" . implode(",", $albums) . "\n];";
}
if($tags != ""){
    $tags = explode(",", $tags);
    $tags = array_map(function($item) {
        return "\"$item\"";
    }, $tags);
    $tagsString = "var tags = [\n" . implode(",\n", $tags) . "\n];";
}

// Initialize a cURL session
$ch = curl_init();

// Set the URL
$url = "http://103.200.23.179/~hanguye6/php-melody/admin/admin-ajax.php";

// Set the request headers
$headers = [
    "Accept: application/json, text/javascript, */*; q=0.01",
    "Accept-Language: en-US,en;q=0.9,vi;q=0.8,la;q=0.7,zh-CN;q=0.6,zh;q=0.5",
    "Connection: keep-alive",
    "Content-Type: application/x-www-form-urlencoded; charset=UTF-8",
    "Cookie: showNotice=off; melody_09cd3f76bb6dd15bef45c5917170d743=admin; melody_key_09cd3f76bb6dd15bef45c5917170d743=3d84cd1e4c694061cf1e2ef0c5216524; aa_import_from=youtube; PHPSESSID=9ed54d058118a69be0db13ffe97a38bd; sidebar-main-state=maxi",    
    "Sec-Fetch-Dest: empty",
    "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36",
    "X-Requested-With: XMLHttpRequest",
    'sec-ch-ua: "Google Chrome";v="129", "Not=A?Brand";v="8", "Chromium";v="129"',
    "sec-ch-ua-mobile: ?0",
    'sec-ch-ua-platform: "Windows"'
];

// Set the POST fields
$data = http_build_query([
    "p" => "import",
    "do" => "search",
    "keyword" => $word, // Thay thế từ khóa bằng giá trị từ URL
    "data_source" => "youtube",
    "results" => "50",
    "autodata" => "1",
    "search_duration" => "all",
    "search_time" => "all_time",
    "search_orderby" => "relevance",
    "search_language" => "all",
    "search_license" => "all",
    "checkall" => "false"
]);

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the response instead of printing it
curl_setopt($ch, CURLOPT_POST, true); // Send as POST request
curl_setopt($ch, CURLOPT_POSTFIELDS, $data); // Attach POST data
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); // Attach the headers

// Execute the request
$response = curl_exec($ch);

$domain = $_SERVER['HTTP_HOST'];
$ch2 = curl_init();
$url2 = $domain."/piwigo/ws.php?format=json&method=pwg.album.get";

curl_setopt($ch2, CURLOPT_URL, $url2);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch2, CURLOPT_HTTPGET, true); 
curl_setopt($ch2, CURLOPT_HTTPHEADER, ["Accept: application/json"]);

// Execute the second request
$response2 = curl_exec($ch2);
$response_data2 = json_decode($response2, true);

$newOptions = [];
foreach ($response_data2['result'] as $index => $item) {
    $item = explode(",", $item);
    $newOptions[] = "{ value: \"$item[0]\", text: \"$item[1]\" }";
}
$newOptionsString = "var newOptions = [\n" . implode(",\n", $newOptions) . "\n];";

//get tag list
$ch3 = curl_init();
$url3 = $domain."/piwigo/ws.php?format=json&method=pwg.tags.getAdminList";

curl_setopt($ch3, CURLOPT_URL, $url3);
curl_setopt($ch3, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch3, CURLOPT_HTTPGET, true); 
curl_setopt($ch3, CURLOPT_HTTPHEADER, ["Accept: application/json"]);

// Execute the second request
$response3 = curl_exec($ch3);
$response_data3 = json_decode($response3, true);

// $newOptions = [];
foreach ($response_data3['result']['tags'] as $index => $item) {
    // echo $item['name'];
    $newTags[] = "{ value: '".$item['id']."', text: '".$item['name']."' }";
}
$newTagsString = "var newTags = [\n" . implode(",\n", $newTags) . "\n];";

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
} else {
    // Output the response (you can modify this part as needed)
    $response_data = json_decode($response, true);

    // Chuỗi HTML với thay thế từ khóa
    $html_code = '<div class="row">
    
    <style>
        .bootstrap-tagsinput .tag {
            margin-right: 10px;
            color: black;
            background-color: #007bff;
            padding: 0.2em 0.5em;
            border-radius: 3px;
        }

        .bootstrap-tagsinput .tag [data-role="remove"] {
            position: absolute;
            right: 5px;
            cursor: pointer;
            color: #000000;
        }

        .bootstrap-tagsinput {
            width: 100%;
        }

        .bootstrap-tagsinput input {
            width: auto !important;
        }
        .select2 {
            width: 100% !important;
        }
    </style>
    '.$response_data['html'].'
    <script>
        jQuery(document).ready(function () {
            $("pre").remove();
            jQuery(`select[id^="select_category-"]`).html(``);
            jQuery(`select[id^="select_tag"]`).html(``);
            '.$albumsString.$tagsString.$newTagsString.'
            jQuery(`select[id^="select_tag-"]`).each(function() {
                var selects = jQuery(this);
                jQuery.each(newTags, function(index, optionData) {
                    var newOption = jQuery(`<option></option>`).val(optionData.value).text(optionData.text);
                    selects.append(newOption); 
                });
                selects.select2({
                    placeholder: "Chọn tag",  
                    allowClear: false               
                });
                // Set multiple values
                selects.val(tags).trigger("change"); 

            });
            
            '.$newOptionsString.'
            console.log(newOptions);
            jQuery(`select[id^="select_category-"]`).each(function() {
                var selectElement = jQuery(this); // Lấy phần tử select hiện tại

                jQuery.each(newOptions, function(index, optionData) {
                    var newOption = jQuery(`<option></option>`).val(optionData.value).text(optionData.text);
                    selectElement.append(newOption); 
                });

                selectElement.select2({
                    placeholder: "Chọn albums",  
                    allowClear: false               
                });

                selectElement.val(albums).trigger("change"); 
            });
        });
    </script>
    ';

    $html_code = str_replace("//i.ytimg.com", "http://i.ytimg.com", $html_code);

    // file_put_contents("index.html", jQueryhtml_code);
    echo $html_code;
}

