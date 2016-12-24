<?php
/**
 * 响应内容
 */
require __DIR__ . '/common.php';

use Symfony\Component\HttpFoundation\Response;

//实例化响应对象,响应内容可选
$response = new Response(
    'Content响应的内容',
    Response::HTTP_OK,
    array('content-type' => 'text/html')
);

//$response->setContent('Hello World'); //设置响应内容

//设置响应头
$response->headers->set('Content-Type', 'text/plain');
//设置响应状态码
$response->setStatusCode(Response::HTTP_NOT_FOUND);

//设置cookie: use Symfony\Component\HttpFoundation\Cookie;
//$response->headers->setCookie(new Cookie('foo', 'bar'));

//$response->setCache(array(
//    'etag'          => 'abcdef',
//    'last_modified' => new \DateTime(),
//    'max_age'       => 600,
//    's_maxage'      => 600,
//    'private'       => false,
//    'public'        => true,
//));

//设置编码
//$response->setCharset('ISO-8859-1');
$response->send(); //响应内容: 设置响应头和输出响应内容


