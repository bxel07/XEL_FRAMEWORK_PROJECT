<?php

namespace xel_tech\xel_framework\App;

class View {
    public static function view(string $view, array $model) {
        require __DIR__ .'/../View/'.$view . '.php';
    }
} 