<?php

require_once 'Persona.php';

// Clase Estudiante
class Estudiante extends Persona {
    private $carrera;

    public function __construct($nombre, $edad, $carrera) {
        parent::__construct($nombre, $edad);
        $this->carrera = $carrera;
    }

    public function obtenerInformacion() {
        return "Estudiante: {$this->nombre}, Edad: {$this->edad}, Carrera: {$this->carrera}";
    }
}

?>
