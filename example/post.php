<?php

require __DIR__."/../vendor/autoload.php";
$curl=new \Curl\Curl();
$url='http://localhost/php_curl/post.php';
$data=array(
    'b'=>10,
    'a'=>20
);
$getData=$curl->post($url);
echo $getData;