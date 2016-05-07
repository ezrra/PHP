<?php

require_once "PatronSingleton.php";

$nueva_instancia =  PatronSingleton::singleton();

$usuarios = $nueva_instancia->usuarios();

foreach ($usuarios as $row) {
	
	echo "$file['name']";
}