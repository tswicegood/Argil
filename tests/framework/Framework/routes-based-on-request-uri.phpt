--TEST--
Should route differently based on REQUEST_URI that is provided
--FILE--
<?php

require __DIR__ . '/_config.php';

$foobar_config = new argil\framework\Config(array(
    'REQUEST_METHOD' => 'GET',
    'REQUEST_URI' => '/foobar',
));

$barfoo_config = new argil\framework\Config(array(
    'REQUEST_METHOD' => 'GET',
    'REQUEST_URI' => '/barfoo',
));

$foobar_output = 'foobar callback called: ' . rand(100, 200);
$barfoo_output = 'barfoo callback called: ' . rand(100, 200);

$routes = array(
    'GET /foobar' => function() use($foobar_output) {
        return array(
            'body' => $foobar_output,
        );
    },
    'GET /barfoo' => function() use($barfoo_output) {
        return array(
            'body' => $barfoo_output,
        );
    },
);

$framework = new argil\framework\Framework($foobar_config);
assert('$framework->run($routes)->body == $foobar_output');

$framework = new argil\framework\Framework($barfoo_config);
assert('$framework->run($routes)->body == $barfoo_output')

?>
===DONE===
--EXPECT--
===DONE===

