--TEST--
Should implement argil\http\ResponseInterface
--FILE--
<?php

require __DIR__ . '/_config.php';

$reflection = new ReflectionClass('\argil\http\ResourceNotFoundResponse');
assert('$reflection->implementsInterface("\argil\http\ResponseInterface")');

?>
===DONE===
--EXPECT--
===DONE===

