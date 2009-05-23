<?php

namespace argil\http;

abstract class ResponseAbstract implements ResponseInterface
{
    protected $_header_callback = 'header';
    public $body = '';
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
        return $this->body;
    }
}

