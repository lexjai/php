<?php

use modelo\AnimalModelo;
require_once 'modelo/AnimalModelo.php';


$instancia = new AnimalModelo();
if(isset($_POST['nombre']) && isset($_POST['foto']) && isset($_POST['nombre_c']) && isset($_POST['descripcion'])){

$valor[] = ($_GET['nombre']);
$valor[] = $_POST['foto'];
$valor[] = $_POST['nombre_c'];
$valor[]= $_POST['descripcion'];
}
var_dump($valor);
// $aElementos = $instancia->insert($valor);

// header("location: c_verZoo.php?id=".$valor[0]);




