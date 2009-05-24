--TEST--
Should provide same behavior as a standard ArrayRouter
--FILE--
<?php

require __DIR__ . '/_config.php';

$expected_callable = function() {};
$routes = array(
    'GET /foo/123' => $expected_callable,
);

$router = new argil\routes\ArrayRegExpRouter($routes);
$callable = $router->getCallable('GET /foo/123');

assert('$callable == $expected_callable');

assert('$router->getCallable("GET /unknown-and-unknowable") === false');

?>
===DONE===
--EXPECT--
===DONE===


