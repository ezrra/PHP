<?php

require('Inflector.php');

class Entity {
    
    /**
     * Variable donde se van a guardar todas las propiedas
     * @var [type]
     */
    protected $properties;

    /**
     * Recibiremos las pripedades de un array
     * @param array $values [description]
     */
    public function __construct (array $values = array())
    {
        $this->properties = $values;
    }

    /**
     * Cuando se ejecuta al llamar a una propiedad fue del objeto
     * Nosotros delegamos la responsabilidad de devolver el valor de la propiedad al método getProperty
     * @param  [type] $name [description]
     * @return [type]       [description]
     */
    public function __get ($name)
    {
        return $this->getProperty($name);
    }

    /**
     * Asignamos el valor a la propiedad
     * @param [type] $variable [description]
     * @param [type] $value    [description]
     */
    public function __set ($variable, $value)
    {
        $this->setProperty ($variable, $value);
    }

    /**
     * Comprobamos si la propiedad existe dentro de la clase
     * @param  [type] $value [description]
     * @return [type]        [description]
     */
    public function __asset ($value)
    {
        return isset($this->properties[$value]);
    }

    /**
     * Nos sirve para eliminar la variable del array
     */
    public function __unset ($name)
    {
        unset($this->properties[$name]);
    }

    /**
     * Utilizamos la clase Inflector par que nos retorne la cadena en formato CamelCase
     * Verificamos si existe un metodo dinamico para obtener la propiedad.
     * Por ejemplo numero_dias intentara llamar al metodo getNumeroDias dentro del objeto
     * Si no existe ningun metodo se regresara el valor de la priedad de la entidad
     * en caso de que exista dentro del array properties
     * @param  [type] $name [description]
     * @return [type]       [description]
     */
    public function getProperty ($name)
    {
        $dynamicMethod = 'get' . Inflector::studly($name);

        if (method_exists($this, $dynamicMethod))
        {
            return $this->$dynamicMethod();
        }

        if (isset($this->properties[$name]))
        {
            return $this->properties[$name];
        }

        return null;
    }


    public function setProperty ($name, $value)
    {
        $dynamicMethod = 'set' . Inflector::studly($name);

        if (method_exists($this, $dynamicMethod))
        {
            $this->$dynamicMethod($name, $value);    
        
        } else
        {
            $this->properties[$name] = $valor;
        }
    }

}