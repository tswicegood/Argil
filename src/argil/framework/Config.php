<?php

namespace argil\framework;

class Config
{
    public $request_method = '';

    public function __construct($config = array()) {
        $values_to_check = array(
            'REQUEST_URI' => 'request_uri',
            'REQUEST_METHOD' => 'request_method',
        );

        foreach ($values_to_check as $key => $instance_key) {
            $this->$instance_key = isset($config[$key]) ? $config[$key] : $_SERVER[$key];
        }
    }
}

