<?php

namespace argil\framework;

class Parameter
{
    public function __construct($scalar) {
        $this->_value = $scalar;
    }

    // TODO: allow custom callbacks to be used to filter values
    public function __get($key) {
        if ($key == 'raw') {
            return $this->_value;
        }
    }

    public function __toString() {
        return (string)$this->_value;
    }
}

