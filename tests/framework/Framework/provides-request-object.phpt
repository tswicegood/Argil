--TEST--
Should provide a Request object as the first parameter to the callback
--FILE--
<?php

require __DIR__ . '/_config.php';

$callable = function($request) {
    assert('$request instanceof argil\http\Request');
};

$config = new \argil\framework\Config(array(
    'REQUEST_METHOD' => 'GET',
    'REQUEST_URI' => '/foobar/',
));

$framework = new \argil\framework\Framework($config);
$framework->run(array(
    'GET /foobar/' => $callable,
));

?>
===DONE===
--EXPECT--
===DONE===

