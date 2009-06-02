<?php

namespace argil\routes;

class HttpArrayRouter
{
    protected $_routes;

    public function __construct(array $routes = array()) {
        $this->_routes = $routes;
    }

    public function getCallable($requested_route) {
        foreach ($this->_routes as $route => $route_callback) {
            if ($this->_findMatchingCallback($requested_route, $route)) {
                return $route_callback;
            }
        }
        return false;
    }

    public function getRequest() {
        return new \argil\http\Request();
    }

    protected function _findMatchingCallback($requested_route, $route) {
        return $requested_route == $route;
    }
}

