--TEST--
Should return false when a match is not found
--FILE--
<?php

require __DIR__ . '/_config.php';

$route = new argil\routes\ArrayRouter(array(
    'GET /' => function() {},
));

$callable = $route->getCallable('GET /bar');

assert('is_callable($callable) == false');

?>
===DONE===
--EXPECT--
===DONE===

