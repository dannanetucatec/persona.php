<?php

require_once 'Estudiante.php';
require_once 'Administrativo.php';
require_once 'Docente.php';

// Crear objetos de ejemplo
$estudiante = new Estudiante("Juan Pérez", 20, "Ingeniería");
$administrativo = new Administrativo("Ana Gómez", 35, "Secretaria");
$docente = new Docente("Luis Martínez", 40, "Matemáticas");

// Mostrar información de los objetos
echo $estudiante->obtenerInformacion() . PHP_EOL;
echo $administrativo->obtenerInformacion() . PHP_EOL;
echo $docente->obtenerInformacion() . PHP_EOL;

?>
