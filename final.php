<?php

class Website {

    final public function get_html () {
        return '<h1>Texto</h1>';
    }
}

class Revo extends Website {

    public function get_htm () {
        return '<h2>Texto</h2>';
    }
}

$revo = new Revo;

echo $revo->get_htm();

/**
 * trim
 * Elimina los espacios en blanco o caracteres al final o inicio de una cadena
 */

/**
 * str_word_count
 * Contar palabras de una cadena
 */

/**
 * strpos
 * Buscar palabras en una cadena de texto
 */

// substr(), str_replace()

// DOCUMENT_URI