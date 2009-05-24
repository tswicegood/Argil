--TEST--
Should output body when converted to a string
--FILE--
<?php

require_once __DIR__ . '/_config.php';

$config = new argil\framework\Config(array(
    'REQUEST_METHOD' => 'GET',
    'REQUEST_URI' => '/some/endpoint',
));

$framework = new \argil\framework\Framework($config);
$response = $framework->run(array(
    'GET /some/endpoint' => function() {
        return array(
            'body' => 'Some valid message here' . "\n",
        );
    },
));

echo $response;

?>
===DONE===
--EXPECT--
Some valid message here
===DONE===

