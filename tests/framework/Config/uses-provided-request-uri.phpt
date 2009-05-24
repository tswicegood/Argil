--TEST--
Should use provided REQUEST_URI if set
--FILE--
<?php

require __DIR__ . '/_config.php';

$real_uri = '/some/random/path?id=' . rand(100, 200);
$_SERVER['REQUEST_URI'] = $real_uri;

$expected_uri = '/provided/path/?id=' . rand(1000, 2000);

$config = new argil\framework\Config(array(
    'REQUEST_URI' => $expected_uri,
));
assert('$config->request_uri == $expected_uri');

?>
===DONE===
--EXPECT--
===DONE===

