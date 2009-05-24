--TEST--
Should return a callable when a matching pattern is found
--FILE--
<?php

require __DIR__ . '/_config.php';

$expected_callable = function() {};
$routes = array(
    'GET /foo/\d+' => $expected_callable,
);

$router = new argil\routes\ArrayRegExpRouter($routes);
$callable = $router->getCallable('GET /foo/123');

assert('$callable == $expected_callable');

?>
===DONE===
--EXPECT--
===DONE===

