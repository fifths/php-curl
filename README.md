# PHP Curl Class

## Installation

    composer require fifths/php_curl

## Quick Start and Examples

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

```
$curl = new Curl();
$curl->post('http://www.example.com/login/', array(
    'username' => 'test',
    'password' => '123456',
));
```

```
$curl = new Curl();

$url = 'https://ss0.bdstatic.com/70cFvHSh_Q1YnxGkpoWK1HF6hhy/it/u=1070902365,2619384777&fm=116&gp=0.jpg';
$filename = 'example.jpg';
print_r($curl->download($url, $filename));
```

```
$curl = new Curl();
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