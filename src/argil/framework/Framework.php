<?php

namespace argil\framework;

class Framework
{
    private $_config = null;

    public function __construct($config = null) {
        $this->_config = is_null($config) ? new Config() : $config;
    }

    public function run($routes = null) {
        if (is_null($routes)) {
            return new \argil\http\ResourceNotFoundResponse;
        }

        foreach ($routes as $route => $callback) {
            list($request_method, $regexp) = explode(' ', $route, 2);
            if ($request_method != $this->_config->request_method) {
                continue;
            }

            if ($regexp != $this->_config->request_uri) {
                continue;
            }

            $response = new \argil\http\Response;
            $raw_response = $callback();
            $response->body = $raw_response['body'];
            return $response;
        }
    }
}

