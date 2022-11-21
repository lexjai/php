<?php

use modelo\AnimalModelo;
use modelo\ZooModelo;

require_once 'modelo/AnimalModelo.php';

require_once 'modelo/ZooModelo.php';

$instancia = new AnimalModelo();
$instanciaZoo = new ZooModelo();

$aElementos = $instancia->selectById($_GET['editar']);

$aElementosZoo = $instanciaZoo->selectAll();


require_once 'vista/v_formNewZoo.php';
