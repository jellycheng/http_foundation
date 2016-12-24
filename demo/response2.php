<?php
/**
 * 响应json内容
 */
require __DIR__ . '/common.php';

use Symfony\Component\HttpFoundation\Response;

$response = new Response();
$response->setContent(json_encode(array(
    'data' => 123,
)));
$response->headers->set('Content-Type', 'application/json');
//jsonp方式
//$response->setCallback('handleResponse');


$response->send();

//以上代码等价以下代码
/**
use Symfony\Component\HttpFoundation\JsonResponse;

$response = new JsonResponse();
$response->setData(array(
    'data' => 123
));
//jsonp方式:
$response->setCallback('handleResponse');

$response->send();
*/