<?php 
namespace xel_tech\xel_framework\Middleware;

class AuthMiddleware implements Middleware {
    function before(): void
    {
        session_start();
        if(!isset($_SESSION['user'])) {
            header('Location: /public/');
            exit();
        }
    }
}