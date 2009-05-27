--TEST--
Should pass header values that are returned to the Response object
--FILE--
<?php

require __DIR__ . '/_config.php';

$headers = array(
    'Location' => '/foobar',
    'X-Random' => rand(100, 200),
);
$callable = function() use($headers) {
    return array(
        'headers' => $headers,
    );
};

$framework = new \argil\framework\Framework(new \argil\framework\Config(array(
    'REQUEST_METHOD' => 'GET',
    'REQUEST_URI' => '/foobar',
)));
$response = $framework->run(array(
    'GET /foobar' => $callable,
));

assert('$response->headers == $headers');

?>
===DONE===
--EXPECT--
===DONE===

