--TEST--
Should contain an attribute called GET that has all of the GET values in it
--FILE--
<?php

require __DIR__ . '/_config.php';

for ($i = 0; $i < 100; ++$i) {
    $_GET[rand(1, $i*1000)] = rand(1, $i*1000);
}

$request = new \argil\http\Request();
assert('count($request->GET) == count($_GET)');

foreach ($_GET as $key => $value) {
    assert('(string)$request->GET[$key] == $value');
}

?>
===DONE===
--EXPECT--
===DONE===

