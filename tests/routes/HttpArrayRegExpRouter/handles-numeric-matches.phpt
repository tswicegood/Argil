--TEST--
Should not assign numeric values as direct attributes
--FILE--
<?php

require __DIR__ . '/_config.php';

$route = new \argil\routes\HttpArrayRegExpRouter(array(
    'GET /foo/(\d+)' => function() {},
));

$request = $route->getRequest('GET /foo/123');
assert('!isset($request->{"1"})');

?>
===DONE===
--EXPECT--
===DONE===

