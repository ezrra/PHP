<?php

/**
 * Una clase “hija” no puede heredar de más de una clase “padre” a la vez.
 * Para lograr simular algo parecido a la herencia múltiple existen los Traits. 
 * Un Trait no puede ser instanciado.
 */

trait Mytrait {

    public function method_one () {
        echo 'Method one!';
    }

    public function method_two () {

        echo 'Method two';
    }

}

class MyClass {
    
    use Mytrait;
    /** 
     * use MyTrait, OtherTrait
     */

    public function __construct () {

        $this->method_one();
    }

    // abstract public metthod_abstract ();
}