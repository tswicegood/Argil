<?php

namespace argil\framework;

class Framework
{
    public static function run($routes = null) {
        if (is_null($routes)) {
            return new \argil\http\ResourceNotFoundResponse;
        }
        return new \argil\http\Response;
    }
}

