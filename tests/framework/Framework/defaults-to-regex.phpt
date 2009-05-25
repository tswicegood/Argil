--TEST--
Should parse regular expressions as routes by default
--FILE--
<?php

require __DIR__ . '/_config.php';

$expected_body = "Foobar: " . rand(100, 200);
$config = new argil\framework\Config(array(
    'REQUEST_METHOD' => 'GET',
    'REQUEST_URI' => '/foo/123',
));
$routes = array(
    'GET /foo/\d+$' => function() use ($expected_body) {
        return array('body' => $expected_body);
    },
);

$framework = new argil\framework\Framework($config);
$response = $framework->run($routes);
assert('$response->body == $expected_body');

?>
===DONE===
--EXPECT--
===DONE===

