<?php

namespace xel_tech\xel_framework\Controller;
use xel_tech\xel_framework\App\View;

class HomeController{
    public function indexs() {
        echo "segs";
    }

    public function index() {
        $model = [
            "title" => "Belajar MVC",
            "content" => "loremipsum dolor siamet",
        ];

        View::view('Home/index', $model);
    }
}