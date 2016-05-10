<?php

class MyClass {

    public $myAttribute = 'Attribute';

    public function __isset ($attribute) {
        
        echo 'method' . $attribute;

        return false;
    }

}

$class = new MyClass;

echo isset($class->myAttribute);

echo isset($class->notAttribute);

empty($class->attributeEmpty);

// toString

class Person {

    private $_name;

    public function __construct ($name) {

        $this->_name = $name;
    }

    public function __toString () {

        return $this->_name;
    }
}

$person = new Person('Israel');

echo $person;