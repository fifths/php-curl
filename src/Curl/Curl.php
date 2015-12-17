<?php

namespace Curl;
/**
 * User: lee
 */

class Curl
{

    public function get($url, $data = array())
    {
        $url = $url . '?' . http_build_query($data);
        $ch = curl_init();
        // 2. 设置选项，包括URL
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 获取数据返回
        curl_setopt($ch, CURLOPT_HEADER, 0);
        // 3. 执行并获取HTML文档内容
        $output = curl_exec($ch);
        // 4. 释放curl句柄
        curl_close($ch);
        return $output;
    }

    public function post($url, $data = array())
    {
        $ch = curl_init();
        // 2. 设置选项，包括URL
        curl_setopt($ch, CURLOPT_URL, $url);
        // 启用时会发送一个常规的POST请求，类型为：application/x-www-form-urlencoded，就像表单提交的一样
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // 在HTTP中的“POST”操作。如果要传送一个文件，需要一个@开头的文件名
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        // 3. 执行并获取HTML文档内容
        $output = curl_exec($ch);
        // 4. 释放curl句柄
        curl_close($ch);
        return $output;
    }


}