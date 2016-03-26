<?php
require('Entity.php');

class User extends Entity {

    /**
     * Creamos un metodo getName que nos regresa el valor de la propiedad name en mayuscula
     * @return [type] [description]
     */
    public function getName ()
    {
        return strtoupper($this->properties['name']);
    }

    public function setName ($value) {
        $this->properties['name'] = trim(strip_tags($value));
    }
}