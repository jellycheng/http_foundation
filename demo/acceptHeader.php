<?php
require __DIR__ . '/common.php';

use Symfony\Component\HttpFoundation\AcceptHeader;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
//https://symfony.com/doc/current/components/http_foundation.html

//对$_GET, $_POST, $_FILES, $_COOKIE, $_SERVER,$_SESSION变量处理
$request = Request::createFromGlobals();//返回Request类对象,
//返回AcceptHeader类对象
$accept = AcceptHeader::fromString($request->headers->get('Accept'));
if ($accept->has('text/html')) {
    $item = $accept->get('text/html');
    $charset = $item->getAttribute('charset', 'utf-8');
    $quality = $item->getQuality();
}

// 获取Accept头值
$accepts = AcceptHeader::fromString($request->headers->get('Accept'))->all();

