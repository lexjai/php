<?php

use modelo\ZooModelo;

require_once 'modelo/ZooModelo.php';

$instancia = new ZooModelo();

$aElementos = $instancia->selectById($_GET['id']);


require_once 'vista/v_formNewZoo.php';


//TODO examen
//include_once del form (vista) para insertar los datos del zoo
