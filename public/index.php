<?php
require_once "../vendor/autoload.php";
use xel_tech\xel_framework\App\Router;
use xel_tech\xel_framework\Controller\HomeController;
use xel_tech\xel_framework\Controller\ProductController;
use xel_tech\xel_framework\Middleware\AuthMiddleware;
//echo "hello world";

//to check path info
/* 
if(isset($_SERVER['PATH_INFO'])) {
    echo $_SERVER['PATH_INFO'];
} else {
    echo "nothing inside path info";
} */

// make basic route using path_info

/*
$path = '/index';
if(isset($_SERVER['PATH_INFO'])) {
    $path = $_SERVER['PATH_INFO'];
} else {
    echo "nothing inside path info";
}

require_once __DIR__ . '/../app/View' .$path .'.php';
*/

//make complex router
Router::add('GET','/',HomeController::class,'index');
Router::add('GET','/indexs',HomeController::class,'indexs', [AuthMiddleware::class]);
Router::add('GET','/dashboard','UserController','dashboard');

Router::add('GET','/product/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)',ProductController::class,'categories');

Router::run();