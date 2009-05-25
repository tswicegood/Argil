<?php

namespace argil\framework;

class Config
{
    public $request_method = '';
    public $default_router = '\argil\routes\HttpArrayRegExpRouter';

    public function __construct($config = array()) {
        $values_to_check = array(
            'REQUEST_URI' => 'request_uri',
            'REQUEST_METHOD' => 'request_method',
            'default_router' => 'default_router',
        );

        foreach ($values_to_check as $key => $instance_key) {
            if (isset($config[$key])) {
                $this->$instance_key = $config[$key];
            } elseif (isset($_SERVER[$key])) {
                $this->$instance_key = $_SERVER[$key];
            }
        }
    }
}

