<?php

abstract class CrudModel {

	private $_db_user = "root";

	private $_db_password = "password";

	private $_db_host = "localhost";

	protected $_db_name = "crud_app_abstract";

	protected $query;

	protected $rows = [];

	private $_connection;

	abstract protected function add();

	abstract protected function get();

	abstract protected function edit();

	abstract protected function delete();

	private function _connect () {

		$this->_connection = new PDO('mysql:host=' . $this->_db_host . ';dbname=' . $this->_db_name, $this->_db_user, $this->_db_password);

		$this->_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$this->_connection->exec("SET CHARACTER SET utf8");
	}

	private function _clone_connection () {

		$this->_connection = null;
	}

	private function _close_connection () {

		$this->_connection = null;
	}

	protected function dynamic_query ($values, $insert = false) {

		$this->_connect();

		$result = $this->_connection->prepare($this->query);

		foreach ($values as $key => $value) {
			
			if (is_int($value)) {
				
				$param = PDO::PARAM_INT;
			} 
			elseif (is_bool($value)) {

				$param = PDO::PARAM_BOOL;
			}
			elseif (is_null($value)) {

				$param = PDO::PARAM_NULL;
			}
			elseif(is_string($value)) {

				$param = PDO::PARAM_STR;
			} 
			else {

				$param = FALSE;
			}

			if ($param) {
				
				$result->bindValue(":$key", $value, $param);
			}

		}

		$result->execute();

		if ($insert == false) {
			
			if ($result->rowCount() > 1) {
				
				$this->rows = $result->fetchAll();
			}
			else if ($result->rowCount() == 1) {

				$this->rows = $result->fetch();
			}
		}
		

		$result = null;

		$this->_close_connection();
	}

	protected function simple_query () {

		$this->_connect();

		$result = $this->_connection->prepare($this->query);

		$result->execute();
		
		$this->rows = $result->fetchAll();

		$result = null;

		$this->_close_connection();
	}

}