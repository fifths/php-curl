<?php

require __DIR__."/../vendor/autoload.php";
$curl=new \Curl\Curl();

$url='http://localhost/php_curl/get.php';
$cc=array(
    'b'=>"呵呵地点",
    'a'=>2
);
$data=array(
    'json'=>json_encode($cc,JSON_UNESCAPED_UNICODE)
);
$getData=$curl->get($url);
echo $getData;