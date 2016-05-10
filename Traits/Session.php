<?php

trait Session {
	
	public function login () {

		return true;
	}
}

Class User {

	use Session;
}

$user = new User();

$lgin = $user->login();

