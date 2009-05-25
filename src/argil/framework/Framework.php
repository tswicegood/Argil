<?php

namespace argil\framework;

class Framework
{
    private $_config = null;

    public function __construct($config = null) {
        $this->_config = is_null($config) ? new Config() : $config;
    }

    public function run($routes = array()) {
        $router_name = $this->_config->default_router;
        $routes = new $router_name($routes);
        $requested_route = sprintf("%s %s",
            $this->_config->request_method,
            $this->_config->request_uri
        );

        $callback = $routes->getCallable($requested_route);
        if ($callback === false) {
            return new \argil\http\ResourceNotFoundResponse;
        }

        $response = new \argil\http\Response;
        $raw_response = $callback();
        $response->body = $raw_response['body'];
        return $response;
    }
}

