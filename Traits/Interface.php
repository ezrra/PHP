<?php

interface Message {

	public function setMessage ($message);
}

trait One {

	protected $message;

	public function setMessage ($message) {

		$this->message = $message;
	}

	public function sendMessage () {

		return $this->message;
	}
}

class TraitInterface implements Message {

	use One;
}

$traitInterface = new TraitInterface();

$traitInterface->setMessage("Nuevo mensaje");

echo $traitInterface->sendMessage();