--TEST--
Should declare a __toString() method
--FILE--
<?php

require __DIR__ . '/_config.php';

$reflection = new ReflectionClass('\argil\http\ResponseInterface');
assert('$reflection->hasMethod("__toString")');

?>
===DONE===
--EXPECT--
===DONE===

