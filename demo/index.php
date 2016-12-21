<?php
require __DIR__ . '/common.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

//对$_GET, $_POST, $_FILES, $_COOKIE, $_SERVER,$_SESSION变量处理
$request = Request::createFromGlobals();
echo $request->getPathInfo();

echo PHP_EOL;
echo $request->query->get('abc'); //获取get abc参数

//echo $content = $request->getContent();
