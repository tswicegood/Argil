--TEST--
Should return a callable variable when a match is found
--FILE--
<?php

require __DIR__ . '/_config.php';

$route = new argil\routes\ArrayRouter(array(
    'GET /' => function() {},
));

$callable = $route->getCallable('GET /');

assert('is_callable($callable)');

?>
===DONE===
--EXPECT--
===DONE===

