--TEST--
Should use the _SERVER array if no config is provided
--FILE--
<?php

require_once __DIR__ . '/_config.php';

$_SERVER['REQUEST_METHOD'] = 'GET';
$_SERVER['REQUEST_URI'] = '/some/endpoint';

$framework = new \argil\framework\Framework();
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

