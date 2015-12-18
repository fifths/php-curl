<?php
/**
 * Created by PhpStorm.
 * User: lee
 * Date: 15-12-17
 * Time: 下午4:14
 */
$a=$_GET;
setcookie("user", $a['a'], time()+3600);
setcookie("user1", $a['b'], time()+3600);
setcookie("user2", $a['c'], time()+3600);
echo json_encode($a,JSON_UNESCAPED_UNICODE);