--TEST--
Should return the matching callback when found
--FILE--
<?php

require __DIR__ . '/_config.php';

$bad_callback = function() {
    echo "this is wrong";
};

$good_callback = function() {
    echo "this is good";
};

$good_route = 'POST /path/to/?id=' . rand(100, 200);

$route = new argil\routes\HttpArrayRouter(array(
    'GET /' => $bad_callback,
    $good_route => $good_callback,
));

assert('$route->getCallable($good_route) == $good_callback');

?>
===DONE===
--EXPECT--
===DONE===

