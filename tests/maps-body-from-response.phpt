--TEST--
Should return an argil\http\Response with a body attribute that matches the
returned attribute.
--FILE--
<?php

require_once __DIR__ . '/_config.php';

$config = new argil\framework\Config();
$config->server = array(
    'REQUEST_METHOD' => 'GET',
    'REQUEST_URI' => '/some/endpoint',
);

$expected_body = 'Hello World! -- ' . rand(100, 200);

$framework = new \argil\framework\Framework($config);
$response = $framework->run(array(
    'GET /some/endpoint' => function() use($expected_body) {
        return array(
            'body' => $expected_body,
        );
    },
));

assert('$response->body == $expected_body');

?>
===DONE===
--EXPECT--
===DONE===

