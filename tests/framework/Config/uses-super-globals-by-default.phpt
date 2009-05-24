--TEST--
Should use _SERVER super globals if no values are provided
--FILE--
<?php

require __DIR__ . '/_config.php';

$_SERVER['REQUEST_METHOD'] = 'GET';

$config = new argil\framework\Config();
assert('$config->request_method == "GET"');

$_SERVER['REQUEST_METHOD'] = 'POST';
$config = new argil\framework\Config();
assert('$config->request_method == "POST"');

?>
===DONE===
--EXPECT--
===DONE===

