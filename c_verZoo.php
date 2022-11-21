<?php
use modelo\ZooModelo;
use modelo\AnimalModelo;

require_once 'modelo/ZooModelo.php';
require_once 'modelo/AnimalModelo.php';

$instancia = new ZooModelo();
$instanciaAnimal = new AnimalModelo();

$aElementos = $instancia->selectById($_GET['id']);
$aElementos2 = $instanciaAnimal->selectAnimalsByZoo($_GET['id']);
require_once 'vista/zoo.php';


/*
 * controlador que recibe una id de zoo
 * y muestra la información del zoo
 * con sus animales.
 */