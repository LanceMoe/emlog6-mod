<?php
$ver = $_GET['v'] ?? '6.0';
$callback = $_GET['callback'] ?? '6.0';

$data = [];
$data["title"] = "emlog message";

{
    $item = [];
    $item["title"] = "emlog6.1.0发布";
    $item["url"] = "https://lance.moe/";
    $item["image"] = "";
    $item["date"] = "2018年5月5日";
    $item["type"] = 0;
    $data["items"][] = $item;
}

{
    $item = [];
    $item["title"] = "emlog6.0.0-beta发布";
    $item["url"] = "http://bbs.emlog.net/thread-51034-1-1.html";
    $item["image"] = "";
    $item["date"] = "2015年10月2日";
    $item["type"] = 0;
    $data["items"][] = $item;
}

{
    $item = [];
    $item["title"] = "emlog5.3.1发布";
    $item["url"] = "http://bbs.emlog.net/thread-36585-1-1.html";
    $item["image"] = "";
    $item["date"] = "2014年7月21日";
    $item["type"] = 0;
    $data["items"][] = $item;
}

{
    $item = [];
    $item["title"] = "emlog5.3.0发布";
    $item["url"] = "http://bbs.emlog.net/thread-34815-1-1.html";
    $item["image"] = "";
    $item["date"] = "2014年4月10日";
    $item["type"] = 0;
    $data["items"][] = $item;
}

{
    $item = [];
    $item["title"] = "emlog5.1.2发布";
    $item["url"] = "http://bbs.emlog.net/thread-29559-1-1.html";
    $item["image"] = "";
    $item["date"] = "2013年6月2日";
    $item["type"] = 0;
    $data["items"][] = $item;
}

{
    $item = [];
    $item["title"] = "emlog5.0.1发布";
    $item["url"] = "http://blog.emlog.net/post-633.html";
    $item["image"] = "";
    $item["date"] = "2012年12月16日";
    $item["type"] = 0;
    $data["items"][] = $item;
}

{
    $item = [];
    $item["title"] = "emlog5.0.0发布";
    $item["url"] = "http://blog.emlog.net/post-627.html";
    $item["image"] = "";
    $item["date"] = "2012年10月7日";
    $item["type"] = 0;
    $data["items"][] = $item;
}

$js_data = json_encode($data, JSON_UNESCAPED_UNICODE);
echo "$callback($js_data)";

?>