<?php

class Myclass {

    private $_data = array('one' => 'value one', 'two' => 'value two');

    public function __get ($attribute) {

        if (isset($this->_data[$attribute])) {
            return $this->_data[$attribute];
        }
        else {

            return 'Not exists';
        }
    }

    public function __set ($attribute, $value) {

        echo "You do not have permission to write. -> Attribute: $_data[$attribute]";
    }
}

$class = new Myclass(); 
echo $class->one; //Imprime: numero uno 
$class->one = 'Mi string';