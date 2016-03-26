<?php

class Inflector {

    /**
     * Retorna una cadena formateada en CamelCase
     * @param  [type] $snakedString [description]
     * @return [type]               [description]
     */
    public static function studly ($snakedString) {

        $array = explode('_', $snakedString);

        $array = array_map('ucfirst', $array);
        
        return implode('', $array);
    }
}