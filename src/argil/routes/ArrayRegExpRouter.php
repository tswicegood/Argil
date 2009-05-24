<?php

namespace argil\routes;

class ArrayRegExpRouter extends ArrayRouter
{
    protected function _findMatchingCallback($requested_route, $route) {
        $parent_return = parent::_findMatchingCallback($requested_route, $route);
        if ($parent_return !== false) {
            return $parent_return;
        }

        return preg_match("@{$route}@", $requested_route);
    }
}

