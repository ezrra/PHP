<?php

abstract class ClassAbstract {

    abstract public function methodTwo (); 

    public function myMethod () { 
        echo "Method of an abstract class."; 
    } 
} 

class OtherClass extends ClassAbstract { 

    public function methodTwo () {
        // do anything
    } 
} 