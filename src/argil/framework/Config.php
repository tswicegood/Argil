<?php

namespace argil\framework;

class Config
{
    public $request_method = '';

    public function __construct() {
        $this->request_method = $_SERVER['REQUEST_METHOD'];
    }
}

