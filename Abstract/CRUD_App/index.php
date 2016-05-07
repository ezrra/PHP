<?php

require("Usuarios.php");

$usuarios = new Usuarios();

$usuario1 = array("username" => "pedro","password" => 'uoiwhrfiuhw',"edad" => 52);

$usuarios->add($usuario1);

echo "Usuarios: <br>";

foreach ($usuarios->get() as $key => $usuario) {
	
	echo $usuario['username'];
	echo "<br>";

}