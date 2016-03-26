<?php

/**
 * Return by reference or value
 */

class config {

    private $value = [];

    public function setValue ($key, $value) {

        $this->values[$key] = $value;
    }

    public function getValue($key) {

        return $this->values[$key];
    }
} 

$config = new config();

$config->setValue('testKey', 'textValues');

$config0>getValue('testKey');


/**
 * JSON 
 */

$_POST = json_decode(file_get_contents('php://input'), true);

