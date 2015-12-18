<?php

require __DIR__ . "/../vendor/autoload.php";
use \Curl\Curl;

$curl = new Curl();
$url = 'localhost/php_curl/example/returnpost.php';
$data = array(
    'b' => "post",
    'a' => 2,
    'c' => "中文测试"
);
$getData = $curl->post($url, $data);
echo $getData;
