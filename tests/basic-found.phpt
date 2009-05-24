--TEST--
Should return an argil\http\ResponseInterface when a route is found
--FILE--
<?php

require_once __DIR__ . '/_config.php';

$config = new argil\framework\Config(array(
    'REQUEST_METHOD' => 'GET',
    'REQUEST_URI' => '/some/endpoint',
));

$framework = new \argil\framework\Framework($config);
$response = $framework->run(array(
    'GET /some/endpoint' => function() { },
));

assert('$response instanceof argil\http\ResponseInterface');

?>
===DONE===
--EXPECT--
===DONE===


