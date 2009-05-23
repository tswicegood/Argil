<?php

namespace argil\http;

class Response implements \argil\http\ResponseInterface
{
    public function __toString() {
        return $this->body;
    }
}

