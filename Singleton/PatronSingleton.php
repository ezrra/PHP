<?php

class PatronSingleton {

	private static $instancia;
	private $usuarios = [];
	private $dbh;

	/**
	 * 
	 */
	private function __construct () {

		$this->dbh = new PDO("mysql:host=server;dbname=database", "user", "password");
	}

	/**
	 * 
	 */
	public static function singleton () {

		if (!isset(self::$instancia)) {
			
			$mi_clase = __CLASS__;

			self::$instancia = new $mi_clase;
		}

		return self::$instancia;
	}

	/**
	 * 
	 */
	public function usuarios () {

		$consulta = $this->dbh->prepare("select * from users");

		$consulta->execute();

		if ($consulta->rowCount() > 0) {
			
			while ($reg = $consulta->fetch()) {
				
				$this->usuarios[] = $reg;
			}

			return $this->usuarios;
		}
	}

	public function __clone () {

		trigger_error('No debes de clonar este objeto', E_USER_ERROR)
	}

}