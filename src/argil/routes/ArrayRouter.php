<?php

namespace argil\routes;

class ArrayRouter
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

    protected function _findMatchingCallback($requested_route, $route) {
        return $requested_route == $route;
    }
}

