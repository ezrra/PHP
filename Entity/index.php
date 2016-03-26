<?php
require('User.php');

$user = new User([
        'name' => 'Carlos',
        'age' => 20,
        'nationality' => 'Mexicano'
    ]);

/**
 * Imprmimos la priedad name, se invoca la funcion __get()
 * que llama a la funcion getProperty()
 * y como existe el metodo getName() este se llama 
 * y nos regresa el nombre en mayusculas
 */

echo $user->name;

/**
 * si llamas a la propiedad nacionalidad die($user->nacionalidad())
 * nos regresara el valor de la propiedad
 */
echo PHP_EOL;

echo $user->nationality;

/**
 * Esto nos regresa NULL, por que no existe la propiedad profesion
 */

echo PHP_EOL;

echo $user->profession;

echo PHP_EOL . '<i>Propiedad no encontada</i>';

/**
 * Se cambia el valor de la propiedad
 */
echo PHP_EOL . '<br>';

$user = new User();

$user->name = '<strong> Juan </strong>';

echo $user->name;

/**
 * Comprobar si existe la propiedad
 */

if (isset($user->name))
{
    echo $user->name;
} else
{
    echo PHP_EOL . '<br>';
    echo '<i>No existe la propiedad o sea null</i>';
}

/**
 * Eliminar del array la propiedad de name
 */

unset($user->name);

if (isset($user->name)) {
    
    echo $user->name;
}
else {
    echo PHP_EOL . '<br>';
    echo '<i> No existe la propiedad</i>';
}

