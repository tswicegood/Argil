--TEST--
Should send headers when object is cast to a string
--FILE--
<?php

require __DIR__ . '/_config.php';

$accumulator = '';

$response = new \argil\http\Response(array(
    'header_callback' => function($header) use (&$accumulator) {
        $accumulator .= $header;
    }
));

$header = "Hello World! " . rand(1, 1000);
$response->headers['X-SimpleHeader'] = $header;
(string)$response;

$expected = "X-SimpleHeader: {$header}\r\n";
assert('$accumulator == $expected');

?>
===DONE===
--EXPECT--
===DONE===

