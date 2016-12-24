<?php
require __DIR__ . '/common.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
//https://symfony.com/doc/current/components/http_foundation.html

//对$_GET, $_POST, $_FILES, $_COOKIE, $_SERVER,$_SESSION变量处理
$request = Request::createFromGlobals();//返回Request类对象,
//request对象暴露的公共属性:query,cookies,headers,files,server,request,attributes
echo $request->getPathInfo();

echo PHP_EOL;
echo $request->query->get('abc'); //获取get abc参数

echo PHP_EOL;
echo $request->query->get('xyz', "不存在xyz参数返回的默认值");


//url?foo[bar]=baz
echo PHP_EOL;
echo $request->query->get('foo[bar]', "不存在foo[bar]参数返回的默认值");


//echo $content = $request->getContent(); //基本等价 file_get_contents('php://input')  一般用于post请求获取内容


