# PHP Curl Class(Curl 类库)
[![Build Status](https://travis-ci.org/fifths/php_curl.svg?branch=master)](https://travis-ci.org/fifths/php_curl)
[![Latest Stable Version](https://poser.pugx.org/fifths/php_curl/v/stable)](https://packagist.org/packages/fifths/php_curl)
[![Total Downloads](https://poser.pugx.org/fifths/php_curl/downloads)](https://packagist.org/packages/fifths/php_curl)
[![Latest Unstable Version](https://poser.pugx.org/fifths/php_curl/v/unstable)](https://packagist.org/packages/fifths/php_curl)
[![License](https://poser.pugx.org/fifths/php_curl/license)](https://packagist.org/packages/fifths/php_curl)

### Installation(安装)

    composer require fifths/php_curl

### Quick Start and Examples(快速启动和实例)

#### HTTP GET(请求)
```
require __DIR__ . '/vendor/autoload.php';

use \Curl\Curl;

$curl = new Curl();
$curl->get('http://www.example.com/');
```

```
$curl = new Curl();
$curl->get('http://www.example.com/search', array(
        'key' => 'keyword',
));
```

#### HTTP POST(请求)
```
$curl = new Curl();
$curl->post('http://www.example.com/login/', array(
    'username' => 'test',
    'password' => '123456',
));
```


#### HTTP PUT(请求)
```
$curl = new Curl();
$curl->put('http://www.example.com/put', array(
    'a' => 'a123456',
    'b' => 'b123456',
));
```

#### HTTP DELETE(请求)
```
$curl = new Curl();
$curl->delete('http://www.example.com/delete', array(
    'id' => '123',
));
```

#### DOWNLOAD(下载文件)
```
$curl = new Curl();

$url = 'https://ss0.bdstatic.com/70cFvHSh_Q1YnxGkpoWK1HF6hhy/it/u=1070902365,2619384777&fm=116&gp=0.jpg';
$filename = 'example.jpg';
print_r($curl->download($url, $filename));
```

#### OTHER(其他)
```
$curl = new Curl();
$curl->setBasicAuthentication('username', 'password');
$curl->setReferer('');
$curl->setUserAgent('');
$curl->setHeader('X-Requested-With', 'XMLHttpRequest');
$curl->setOpt(CURLOPT_SSL_VERIFYPEER, false);
$curl->setCookie('key', 'value');
$curl->get('http://www.example.com/');

if ($curl->error) {
    echo 'Error: ' . $curl->errorCode . ': ' . $curl->errorMessage;
}
else {
    echo $curl->response;
}

var_dump($curl->requestHeaders);
var_dump($curl->responseHeaders);
```