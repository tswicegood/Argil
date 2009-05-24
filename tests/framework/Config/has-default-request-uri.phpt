--TEST--
Should use _SERVER['REQUEST_URI'] super globals if no values are provided
--FILE--
<?php

require __DIR__ . '/_config.php';

$expected_uri = '/some/random/path?id=' . rand(100, 200);
$_SERVER['REQUEST_URI'] = $expected_uri;

$config = new argil\framework\Config();
assert('$config->request_uri == $expected_uri');

?>
===DONE===
--EXPECT--
===DONE===

