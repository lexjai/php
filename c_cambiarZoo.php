<?php
 
use modelo\ZooModelo;
require_once 'modelo/ZooModelo.php';


$instancia = new ZooModelo();
if(isset($_POST['ciudad']) && isset($_POST['direccion']) && isset($_POST['pais']) && isset($_POST['descripcion']) && isset($_POST['foto'])){
$valor[]= $_GET['id'];
$valor[] = $_POST['ciudad'];
$valor[] = $_POST['nombre'];
$valor[] = $_POST['direccion'];
$valor[] = $_POST['pais'];
$valor[]= $_POST['descripcion'];
$valor[] = $_POST['foto'];
}
// var_dump($valor);
$aElementos = $instancia->update($valor);
header("location: c_verZoos.php");