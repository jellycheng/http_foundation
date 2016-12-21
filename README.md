HttpFoundation Component 2.6分支源码分析
========================
源码地址: https://github.com/symfony/http-foundation
文档: https://symfony.com/doc/current/components/http_foundation.html

使用例子
```php
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();
echo $request->getPathInfo();
```


```php
$request = Request::create('/?foo=bar', 'GET');
echo $request->getPathInfo();
```


```php
$response = new Response('Not Found', 404, array('Content-Type' => 'text/plain'));
$response->send();
```


```php
// SessionHandlerInterface
if (!interface_exists('SessionHandlerInterface')) {
    $loader->registerPrefixFallback(__DIR__.'/../vendor/symfony/src/Symfony/Component/HttpFoundation/Resources/stubs');
}
```

