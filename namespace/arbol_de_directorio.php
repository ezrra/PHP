<?php

namespace EspacioDeNombreUno; 

function prueba () {

    echo "Espacio Uno"; 
} 

namespace EspacioDeNombreUno\SubEspacio; // <----

function prueba () { 

    echo "Sub Espacio"; 
}

/**
 * Para ejecutarlo se declara:
 *
 * require('es.php'); 
 * EspacioDeNombreUno\prueba(); //Imprime: Espacio Uno
 * EspacioDeNombreUno\SubEspacio\prueba(); //Imprime: Sub Espacio
 *
 * 
 */