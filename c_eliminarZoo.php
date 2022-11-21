<?php

use modelo\ZooModelo;
require_once 'modelo/ZooModelo.php';


$instancia = new ZooModelo();

if(isset($_GET['id'])){
$id = $_GET['id'];
$aElementos = $instancia->delete($id);
header("location: c_verZoos.php");
}


?>