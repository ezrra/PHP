<?php

trait Simple {

	public function className () {

		return __CLASS__ . "<br>";
	}
}

class One {

	use Simple;
}

class Two {

	use Simple;
}

$one = new One();

echo $one->className();

$two = new Two();

echo $two->className();

