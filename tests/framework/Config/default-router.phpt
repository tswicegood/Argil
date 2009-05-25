--TEST--
Should provide a valid class-name as its default_router property
--FILE--
<?php

require __DIR__ . '/_config.php';

$c = new argil\framework\Config();
assert('class_exists($c->default_router)');

?>
===DONE===
--EXPECT--
===DONE===

