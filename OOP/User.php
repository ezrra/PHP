<?php

class User {

    private $properties;

    public function __contruct(array $properties = array()) {

        $this->properties = $properties;
    } 

    public function __toString() {

        return $this->getName();
    }

    public function getName () {

        if (isset($this->properties['name'])) {
            
            return $this->properties['name'];
        }

        return 'usuario';
    }

    public function drink ($bebida) {

        return $this->getName() . ' toma ' . $bebida;
    }

    
}

/* get_called_class() */

/**
 * is_null()
 * Variable es null
 */