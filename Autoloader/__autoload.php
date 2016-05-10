<?php

function __autoload ($class_name) {

    include_one($class_name . '.php');
}

