<?php

set_include_path(
    realpath(__DIR__ . '/../') . PATH_SEPARATOR .
    get_include_path()
);

function argil_autoloader($class_name) {
    if ($class_name[0] == '\\') {
        $class_name = substr($class_name, 1);
    }
    @include str_replace('\\', DIRECTORY_SEPARATOR, $class_name) . '.php';
}

spl_autoload_register('argil_autoloader');

