<?php

// Clase abstracta Persona
abstract class Persona {
    protected $nombre;
    protected $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    abstract public function obtenerInformacion();
}

?>
