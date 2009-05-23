<?php

if (file_exists(__DIR__ . '/../src')) {
    set_include_path(
        __DIR__ . '/../src' . PATH_SEPARATOR .
        get_include_path()
    );
}

function test_autoloader($class_name) {
    if ($class_name[0] == '\\') {
        $class_name = substr($class_name, 1);
    }
    @include str_replace('\\', DIRECTORY_SEPARATOR, $class_name) . '.php';
}


spl_autoload_register('test_autoloader');

