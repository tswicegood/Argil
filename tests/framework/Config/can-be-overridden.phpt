--TEST--
Should use _SERVER super globals if no values are provided
--FILE--
<?php

require __DIR__ . '/_config.php';

$_SERVER['REQUEST_METHOD'] = 'GET';

$config = new argil\framework\Config(array(
    'REQUEST_METHOD' => 'POST',
));
assert('$config->request_method == "POST"');

$_SERVER['REQUEST_METHOD'] = 'POST';
$config = new argil\framework\Config(array(
    'REQUEST_METHOD' => 'GET',
));
assert('$config->request_method == "GET"');

?>
===DONE===
--EXPECT--
===DONE===


