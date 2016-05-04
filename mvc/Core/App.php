<?php

namespace Core;

defined("APPPATH") OR die("Access denied");

class App {

	private $_controller;

	private $_method = 'index';

	private $_params = [];

	const NAMESPACE_CONTROLLERS = "\App\Controllers\\";

	const CONTROLLERS_PATH = "../App/controllers/";

	public function __construct () {

		// get parse url

		$url = $this->parseUrl();

		echo ucfirst($url[0]);

		if (file_exists(self::CONTROLLERS_PATH.ucfirst($url[0]) . ".php")) {
			
			// file name

			$this->_controller = ucfirst($url[0]);

			unset($url[0]);
		
		} else {

			include APPPATH . "/views/errors/404.php";

			exit;
		}

		// get class name with it namespace
		$fullClass = self::NAMESPACE_CONTROLLERS.$this->_controller;

		// asociate instance to $this->_controller
		$this->_controller = new $fullClass;

		// if exist segmen second, check method exists in the class
		if (isset($url[1])) {
			
			$this->_method= $url[1];

			if (method_exists($this->_controller, $url[1])) {
				
				unset($url[1]);
			
			} else {

				throw new \Exception("Error Processing Method {$this->_method}", 1);
				
			}

		}

		$this->_params = $url ? array_values($url) : [];

	}

	// Parse url

	public function parseUrl () {

		// echo $_GET["url"];

		if (isset($_GET["url"])) {
			
			return explode("/", filter_var(rtrim($_GET["url"], "/"), FILTER_SANITIZE_URL));

		}
	}

	// Render controller/method called by the params 
	public function render () {

		call_user_func_array([$this->_controller, $this->_method], $this->_params);
	}


	// Get config the app
	public static function getConfig () {

		return parse_ini_file(APPPATH . '/config/config.ini');
	}

	// get current controller
	public function getController () {

		return $this->_controller;
	}

	// get current method 
	public function getMethod () {

		return $this->_method;
	}

	// get params
	public function getParams () {

		return $this->_params;
	}


}