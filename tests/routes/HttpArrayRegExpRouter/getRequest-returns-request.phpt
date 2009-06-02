--TEST--
Should return an argil\http\Request object on getRequest()
--FILE--
<?php

require __DIR__ . '/_config.php';

$route = new \argil\routes\HttpArrayRegExpRouter();
$request = $route->getRequest();

assert('$request instanceof \argil\http\Request');

?>
===DONE===
--EXPECT--
===DONE===

