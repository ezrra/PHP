<?php

/**
 * Ejemplo por php.net
 *
 * ===
 *
 * Un carro de compras básico que contiene una lista de productos añadidos
 * y la cantidad de cada producto. Incluye un método que
 * calcula el precio total de los artículos del carro usando una
 * clausura como llamada de retorno. 
 */

class Carro {

    const PRECIO_MANTEQUILLA    = 1.00;
    const PRECIO_LECHE          = 3.00;
    const PRECIO_HUEVOS         = 6.95;

    /**
     * [$productos]
     * @var array
     */
    protected $productos = array();

    /**
     * [agregar función]
     * @param  [type] $producto [description]
     * @param  [type] $cantidad [description]
     * @return [type]           [description]
     */
    public function agregar ($producto, $cantidad) {

        $this->productos[$producto] = $cantidad;
    }

    /**
     * [obtenercantidad función]
     * @param  [type] $producto [description]
     * @return [type]           [description]
     */
    public function obtenercantidad ($producto) {

        return isset($this->productos[$producto]) ? $this->productos[$producto] : FALSE;
    } 

    /**
     * [obtenerTotal función]
     * @param  [type] $impuesto [description]
     * @return [type]           [description]
     */
    public function obtenerTotal ($impuesto) {

        $total = 0.0;

        $llamadaDeRetorno = function ($cantidad, $producto) use ($impuesto, &$total) {

            $precioUnitario = constant(__CLASS__ . "::PRECIO_" . strtoupper($producto));

            $total += ($precioUnitario * $cantidad) * ($impuesto + 1.0);
        };

        array_walk($this->productos, $llamadaDeRetorno);

        return round($total, 2);
    }
}

/**
 * Ejecutando la clase
 */

$mi_carro = new Carro;

// Añadir

$mi_carro->agregar('mantequilla', 1);
$mi_carro->agregar('leche', 3);
$mi_carro->agregar('huevos', 6);

print $mi_carro->obtenerTotal(0.05) . "\n";

/**
 * Pasar por referencia => &
 * Funcionaes Anonimas => array_walk(), function ($cant ...)
 * constant
 * round()
 */
