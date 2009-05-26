<?php

namespace argil\http;

class Request
{
    public function __construct() {
        $this->GET = $_GET;
    }
}

