<?php

abstract class ClaseAbstracta { 
    //Declaro el método como abstracto sin cuerpo. 

    abstract public function metodoDos(); 
    public function miMetodo(){ 
        echo "Método de una clase abstracta."; 
    } 
}

class ClaseHija extends ClaseAbstracta { 
    //Método declarado por obligación al heredar de ClaseAbstracta 
    public function metodoDos(){ 
        //Lo que quieras 
    } 
} 