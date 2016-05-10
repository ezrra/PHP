<?php

trait One {

	public function className () {

		return __CLASS__ . "<br>";
	}
}

trait Two {

	public function say () {

		return "Hi <br>";
	}
}

class Multiple {

	use One, Two;
}

$multiple = new Multiple();

echo $multiple->className();

echo $multiple->say();