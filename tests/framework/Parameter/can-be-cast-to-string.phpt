--TEST--
Should take values provided and return them as strings
--FILE--
<?php

require __DIR__ . '/_config.php';

$rand = rand(100, 200);
$foo = new \argil\framework\Parameter($rand);

assert('(string)$foo == (string)$rand');

?>
===DONE===
--EXPECT--
===DONE===

