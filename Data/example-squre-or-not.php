<?php

class SquareData {

	public function check ($string) {

		try {
			
			$this->length($string);

			$this->is_uppercase($string);

			$this->divisible($string);

			$this->validate($string);

			echo "Square: $string";

		} catch (Exception $e) {
			
			// echo $e->getMessage();

			echo "No Square $string";

		}

	}

	public function length ($string) {

		$length = strlen($string);

		if ($length == 0 or $length > 50) {
			
			throw new Exception("Error Lenght");
		}
	}

	public function is_uppercase ($string) {

		if (!ctype_upper($string)) {
			
			throw new Exception("Error Uppercase");
		}
	}

	public function divisible ($string) {

		$length = strlen($string);

		if (!is_int($length / 2)) {
			
			throw new Exception("Error divisible");
		}

	}

	public function validate ($string) {

		$length 	= strlen($string);

		$string_1 	= substr($string, 0, ($length / 2));

		$string_2 	= substr($string, ($length / 2), $length);

		if ($string_1 !== $string_2) {
			
			throw new Exception("Error string");

		}

	}

}

$validate =  new SquareData();

$validate->check('TELTEL');

echo "<br> \n";

$validate->check('IIA');

echo "<br> \n";

$validate->check('IIA');

echo "<br> \n";

$validate->check('Itimbre');