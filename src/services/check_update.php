<?php
$ver = $_GET['ver'] ?? '6.0';
$callback = $_GET['callback'] ?? '6.0';


{
    $data = [];
    $data["ver"] = "6.2.0";
    $data["file"] = "services/emlog_autoup/em610to620.zip";
    $data["sql"] = "services/emlog_autoup/em610to620.sql";
    $data["result"] = "yes";
}

{
    $data = [];
    $data["result"] = "no";
}

$js_data = json_encode($data, JSON_UNESCAPED_UNICODE);
echo "$callback($js_data)";

?>