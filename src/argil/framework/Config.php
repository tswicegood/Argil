<?php

namespace argil\framework;

class Config
{
    public $request_method = '';

    public function __construct($config = array()) {
        $this->request_uri = isset($config['REQUEST_URI']) ?
            $config['REQUEST_URI'] :
            $_SERVER['REQUEST_URI'];
        $this->request_method = isset($config['REQUEST_METHOD']) ?
            $config['REQUEST_METHOD'] :
            $_SERVER['REQUEST_METHOD'];
    }
}

