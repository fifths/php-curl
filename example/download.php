<?php
/**
 * Created by PhpStorm.
 * User: lee
 * Date: 15-12-18
 * Time: 下午3:37
 */

require __DIR__ . "/../vendor/autoload.php";
use \Curl\Curl;

$curl = new Curl();

$url = 'https://ss0.bdstatic.com/70cFvHSh_Q1YnxGkpoWK1HF6hhy/it/u=1070902365,2619384777&fm=116&gp=0.jpg';
$filename = 'example.jpg';
print_r($curl->download($url, $filename));
