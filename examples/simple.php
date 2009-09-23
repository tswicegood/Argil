<?php

require __DIR__ . '../src/argil/argil.php';
$framework = new \argil\framework\Framework();
echo $framework->run(array(
    'GET /argil/simple.php/test$' => function($request) {
        return array(
            'body' => 'Hello World!',
        );
    },
    'GET /argil/simple.php/test/redirect$' => function() {
        return array(
            'headers' => array(
                'Location' => '/argil/simple.php/test',
            ),
        );
    },
));
