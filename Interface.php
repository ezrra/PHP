<?php

interface MyInterface {

    // Not attributes, alwayse public methods
    // 
    public function method1($params);
}

class MyClass implements MyInterface {

    public function method1 ($params) {

    }
}