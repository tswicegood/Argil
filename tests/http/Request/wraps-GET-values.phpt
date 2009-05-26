--TEST--
Should wrap all GET parameters passed in with argil\framework\Parameter
--FILE--
<?php

require __DIR__ . '/_config.php';

$_GET = array(
    'foobar' => 'barfoo',
);

$request = new \argil\http\Request();
assert('$request->GET["foobar"] instanceof argil\framework\Parameter');

?>
===DONE===
--EXPECT--
===DONE===

