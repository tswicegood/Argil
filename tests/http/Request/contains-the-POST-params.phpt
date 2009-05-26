--TEST--
Should contain an attribute called POST that has all of the POST values in it
--FILE--
<?php

require __DIR__ . '/_config.php';

$_POST = array(
    'foobar' => 'barfoo',
    'rand' => rand(10, 20),
);

$request = new \argil\http\Request();
assert('count($request->POST) == count($_POST)');

foreach ($_POST as $key => $value) {
    assert('(string)$request->POST[$key] == $value');
}

?>
===DONE===
--EXPECT--
===DONE===

