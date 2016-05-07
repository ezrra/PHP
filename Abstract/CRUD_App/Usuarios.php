<?php

require("CrudModel.php");

class Usuarios extends CrudModel {

	public function __construct () {

		$this->_db_name = "crud_app_abstract";
	}

	public function get () {

		$this->query = 'SELECT * FROM usuarios';

		$this->simple_query();

		if ($this->rows > 0) {
			
			return $this->rows;
		}
	}

	public function add ($user = []) {

		$this->query = 'INSERT INTO usuarios(username, password, edad) VALUES (:username, :password, :edad)';

		$this->dynamic_query($user, true);
	}

	public function edit ($user = []) {

		$this->query = "UPDATE usuarios SET username = :username, password = :password, edad = :edad WHERE id = :id";

		$this->dynamic_query($user, true);
	}

	public function delete ($id = []) {

		$this->query = "DELETE FROM usuarios WHERE id = :id";

		$this->dynamic_query($id, true);
	}

}