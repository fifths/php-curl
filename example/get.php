<?php

require __DIR__ . "/../vendor/autoload.php";
use \Curl\Curl;

$curl = new Curl();

$url='http://localhost/php_curl/example/returnget.php';
$data=array(
    'b'=>"get",
    'a'=>1,
    'c'=>"中文测试"
);
$curl->setHeader('Accept','text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8');
$curl->setHeader('Accept-Encoding','gzip, deflate, sdch');
$getData=$curl->get($url,$data);
echo $getData;

