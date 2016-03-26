<?php

/**
 * __get()
 */

class Inflector {

    public static function studly ($snakedString) {

        $array = explode('_', $snakedString);

        // $array = array_map()
    }
}

/**
 * Array map exmaple
 * Aplica un metodo al array y lo devulve
 */

function cube ($n) {

    return ($n * $n * $n);
}

$a = array(1, 2, 3, 5);
$b = array_map('cube', $a);
print_r($b);
