<?php

namespace argil\framework;

class Parameter
{
    public function __construct($scalar) {
        $this->_value = $scalar;
    }

    public function __toString() {
        return (string)$this->_value;
    }
}

