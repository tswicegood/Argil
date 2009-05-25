--TEST--
Should allow for default_router value to be conifgured
--FILE--
<?php

require __DIR__ . '/_config.php';

$c = new argil\framework\Config(array(
    'default_router' => '\argil\routes\HttpArrayRouter',
));
assert('$c->default_router == \'\argil\routes\HttpArrayRouter\'');

?>
===DONE===
--EXPECT--
===DONE===

