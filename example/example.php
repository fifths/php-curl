<?php
/**
 * Created by PhpStorm.
 * User: lee
 * Date: 15-12-18
 * Time: 下午4:51
 */
require __DIR__ . "/../vendor/autoload.php";
use \Curl\Curl;

$curl = new Curl();
$curl->setUserAgent('');
$curl->setHeader('X-Requested-With', 'XMLHttpRequest');
$curl->setOpt(CURLOPT_SSL_VERIFYPEER, false);
$curl->get('http://www.example.com/');

if ($curl->error) {
    echo 'Error: ' . $curl->errorCode . ': ' . $curl->errorMessage;
}
else {
    echo $curl->response;
}

var_dump($curl->requestHeaders);
var_dump($curl->responseHeaders);