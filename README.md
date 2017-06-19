# PHP Curl Class
[![Build Status](https://travis-ci.org/fifths/php-curl.svg?branch=master)](https://travis-ci.org/fifths/php-curl)
[![Latest Stable Version](https://poser.pugx.org/fifths/php-curl/v/stable)](https://packagist.org/packages/fifths/php-curl)
[![Total Downloads](https://poser.pugx.org/fifths/php-curl/downloads)](https://packagist.org/packages/fifths/php-curl)
[![Latest Unstable Version](https://poser.pugx.org/fifths/php-curl/v/unstable)](https://packagist.org/packages/fifths/php-curl)
[![License](https://poser.pugx.org/fifths/php-curl/license)](https://packagist.org/packages/fifths/php-curl)

### Installation

    composer require fifths/php-curl

### Quick Start and Examples

#### HTTP GET
```php
use \Curl\Curl;

$curl = new Curl();
$curl->get('http://www.example.com/');
```

```php
$curl = new Curl();
$curl->get('http://www.example.com/search', array(
        'key' => 'keyword',
));
```

#### HTTP POST
```php
$curl = new Curl();
$curl->post('http://www.example.com/login/', array(
    'username' => 'test',
    'password' => '123456',
));
```


#### HTTP PUT
```php
$curl = new Curl();
$curl->put('http://www.example.com/put', array(
    'a' => 'a123456',
    'b' => 'b123456',
));
```

#### HTTP DELETE
```php
$curl = new Curl();
$curl->delete('http://www.example.com/delete', array(
    'id' => '123',
));
```

#### DOWNLOAD
```php
$curl = new Curl();

$url = 'https://ss0.bdstatic.com/70cFvHSh_Q1YnxGkpoWK1HF6hhy/it/u=1070902365,2619384777&fm=116&gp=0.jpg';
$filename = 'example.jpg';
print_r($curl->download($url, $filename));
```

#### OTHER
```php
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
