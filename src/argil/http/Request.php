<?php

namespace argil\http;

class Request
{
    public function __construct() {
        $this->GET = new _DecoratedArrayObject($_GET);
    }
}

// TODO: find a real home for this instead of as a private class
class _DecoratedArrayObject extends \ArrayObject
{
    // TODO: revisit this - there has to be a better way
    public function offsetGet($index) {
        $a = $this->getArrayCopy();
        return new \argil\framework\Parameter($a[$index]);
    }
}

