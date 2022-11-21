<?php
use modelo\ZooModelo;

require_once 'modelo/ZooModelo.php';

$instancia = new ZooModelo();
$aElementos = $instancia->selectAll();



require_once 'vista/dashboard.php';

//TODO examen
/*
 * controlador principal llamado de index.php
 * visualiza la lista de los zoos en modo galeria de fotos
 *
 */