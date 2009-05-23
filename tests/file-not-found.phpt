--TEST--
Should return an argil\http\ResourceNotFoundResponse when requesting an unmappable request
--FILE--
<?php

require_once __DIR__ . '/_config.php';

$framework = new argil\framework\Framework();
$response = $framework->run();

assert('$response instanceof argil\http\ResourceNotFoundResponse');

?>
===DONE===
--EXPECT--
===DONE===

