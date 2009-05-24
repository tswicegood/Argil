--TEST--
Should return a ResourceNotFoundResponse when no match is found
--FILE--
<?php

require __DIR__ . '/_config.php';

$config = new argil\framework\Config(array(
    'REQUEST_METHOD' => 'GET',
    'REQUEST_URI' => '/foobar',
));

$framework = new argil\framework\Framework($config);
$response = $framework->run(array(
    'POST /foobar' => '',
    'GET /barfoo' => '',
));

assert('$response instanceof argil\http\ResourceNotFoundResponse');

?>
===DONE===
--EXPECT--
===DONE===

