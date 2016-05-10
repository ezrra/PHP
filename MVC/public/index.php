<?php

define("PROJECTPATH", dirname(__DIR__));

define("APPPATH", PROJECTPATH . '/App');

// autoload with namepaces

function autoload_classes ($class_name) {

    $filename = PROJECTPATH . '/' . str_replace('\\', '/', $class_name) .'.php';
    // echo $class_name .' ';
    if (is_file($filename)) {
        // echo $filename;
        include_once $filename;
    }

}

spl_autoload_register('autoload_classes');

$app  = new Core\App;

// $app->render();
