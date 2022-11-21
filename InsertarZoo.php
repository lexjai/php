<?php
 
use modelo\ZooModelo;
require_once 'modelo/ZooModelo.php';


$instancia = new ZooModelo();

$idMax = $instancia->maxIdZoo();
$valor[] = $_POST['ciudad'];
$valor[] = $_POST['nombre'];
$valor[] = $_POST['direccion'];
$valor[] = $_POST['pais'];
$valor[]= $_POST['descripcion'];
$valor[] = $_POST['foto'];
$aElementos = $instancia->insert($valor);

header("location: c_verZoo.php?id=".$valor[0]);




