<?php

namespace argil\routes;

class HttpArrayRegExpRouter extends HttpArrayRouter
{
    public function getRequest($requested_route = null) {
        $return = parent::getRequest($requested_route);
        foreach ($this->_routes as $route => $callback) {
            if (preg_match("@{$route}@", $requested_route, $matches)) {
                foreach ($matches as $k => $v) {
                    $return->$k = $v;
                }
            }
        }
        return $return;
    }

    protected function _findMatchingCallback($requested_route, $route) {
        $parent_return = parent::_findMatchingCallback($requested_route, $route);
        if ($parent_return !== false) {
            return $parent_return;
        }

        return preg_match("@{$route}@", $requested_route);
    }
}

