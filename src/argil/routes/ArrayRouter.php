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
            if ($route == $requested_route) {
                return $route_callback;
            }
        }
        return false;
    }
}

