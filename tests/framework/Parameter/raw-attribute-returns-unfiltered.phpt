--TEST--
Should have a raw attribute that returns the unfiltered value
--FILE--
<?php

require __DIR__ . '/_config.php';

$rand = rand(100, 200);
$foo = new \argil\framework\Parameter($rand);

assert('$foo->raw === $rand');

?>
===DONE===
--EXPECT--
===DONE===

