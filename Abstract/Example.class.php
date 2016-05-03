<?php

abstract class User1 {

    protected $name;

    abstract protected function get ();

    public function setName ($name) {

        $this->name = $name;
    }
} 

class User2 extends User1 {

    public function get() {

    }

    public function setName ($mane) {

        $this->name = $name;
    }

    public function getName () {

        echo $this->name; 
    }
}

/*
    Other Example
 */

abstract class Crud {

    abstract public function get();
    abstract public function edit($arguments);
    abstract public function delete ($id);
    abstract public function create ($arguments);

    protected $database;

    // ... DB, Properties
}

class User extends Crud {

    public function get() {

    }

    public function edit($arguments) {

    }

    public function delete($id) {

    }

    public function create($arguments) {

    }
}
