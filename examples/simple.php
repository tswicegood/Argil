<?php

/**
 * This is necessary unless Argil is installed in your include_path
 */
set_include_path(
    realpath(__DIR__ . '/../src') . PATH_SEPARATOR .
    get_include_path()
);

/**
 * This autoloader is required until the default SPL autoloader is
 * added to PHP.
 */
function argil_autoloader($class_name) {
    if ($class_name[0] == '\\') {
        $class_name = substr($class_name, 1);
    }
    @include str_replace('\\', DIRECTORY_SEPARATOR, $class_name) . '.php';
}

spl_autoload_register('argil_autoloader');

/**
 * Below here is the actual framework code
 */
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
