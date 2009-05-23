<?php

namespace argil\framework;

class Framework
{
    public static function run($routes = null) {
        if (is_null($routes)) {
            return new \argil\http\ResourceNotFoundResponse;
        }
        $response = new \argil\http\Response;
        $callback_func = array_shift($routes);
        $raw_response = $callback_func();
        $response->body = $raw_response['body'];
        return $response;
    }
}

