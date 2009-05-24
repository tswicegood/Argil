--TEST--
Should route differently based on which REQUEST_METHOD is used
--FILE--
<?php

require __DIR__ . '/_config.php';

$post_config = new argil\framework\Config(array(
    'REQUEST_METHOD' => 'POST',
));
$get_config = new argil\framework\Config(array(
    'REQUEST_METHOD' => 'GET',
));

$get_output = 'GET callback called: ' . rand(100, 200);
$post_output = 'POST callback called: ' . rand(100, 200);

$routes = array(
    'GET /foobar' => function() use($get_output) {
        return array(
            'body' => $get_output,
        );
    },
    'POST /foobar' => function() use($post_output) {
        return array(
            'body' => $post_output,
        );
    },
);

$framework = new argil\framework\Framework($get_config);
assert('$framework->run($routes)->body == $get_output');

$framework = new argil\framework\Framework($post_config);
assert('$framework->run($routes)->body == $post_output')

?>
===DONE===
--EXPECT--
===DONE===

