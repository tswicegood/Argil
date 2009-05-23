<?php

namespace argil\http;

class ResourceNotFoundResponse implements \argil\http\ResponseInterface
{
    private $_header_callback = 'header';
    public $headers = array();

    public function __construct($options = array()) {
        if (isset($options['header_callback'])) {
            $this->_header_callback = $options['header_callback'];
        }
    }

    public function __toString() {
        foreach ($this->headers as $key => $value) {
            $header = $this->_header_callback;
            $header("{$key}: {$value}\r\n");
        }
        return '';
    }
}

