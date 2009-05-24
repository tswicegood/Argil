<?php

namespace argil\routes;

class ArrayRouter
{
    public function getCallable($route) {
        if ($route == 'GET /') {
            return function() { };
        }
        return false;
    }
}

