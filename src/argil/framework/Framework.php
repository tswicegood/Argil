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

        $request = new \argil\http\Request();

        $response = new \argil\http\Response;
        $raw_response = $callback($request);
        $response->body = $raw_response['body'];
        if (isset($raw_response['headers'])) {
            $response->headers = $raw_response['headers'];
        }
        return $response;
    }
}

