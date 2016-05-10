<?php

spl_autoload_register(function ($class_name) {

    include_once $class_name . '.php';
});

$class1 = new Class1;
$class2 = new Class2;

echo $class1;
echo $class2;