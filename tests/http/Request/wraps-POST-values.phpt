--TEST--
Should wrap all POST parameters passed in with argil\framework\Parameter
--FILE--
<?php

require __DIR__ . '/_config.php';

$_POST = array(
    'foobar' => 'barfoo',
);

$request = new \argil\http\Request();
assert('$request->POST["foobar"] instanceof argil\framework\Parameter');

?>
===DONE===
--EXPECT--
===DONE===

