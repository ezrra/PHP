<?php

interface Messenger {

	public function sendMessage($message, $priority);
}

class Message implements Messenger {

	public function sendMessage ($message, $priority) {

		echo "Message: $message. priority: $priority <br>";
	}
}

trait Messages {

	protected $message;

	public function setMessage (Message $message) {

		$this->message = $message;
	}

	public function send ($message, $priority) {

		$this->message->sendMessage ($message, $priority);
	}
}

class Consumer {

	use Messages;
}

$consumer = new Consumer();

$consumer->setMessage(new Message);

$consumer->send("Nuevo mensaje", "10");