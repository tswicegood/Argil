--TEST--
Should return Request object with attributes matching matched regexps
--FILE--
<?php

require __DIR__ . '/_config.php';

$route = new \argil\routes\HttpArrayRegExpRouter(array(
    'GET /foo/(?P<random>\d+)$' => function() {},
));

$random = rand(10, 20);
$request = $route->getRequest('GET /foo/' . $random);

assert('$request->random == $random');

?>
===DONE===
--EXPECT--
===DONE===

