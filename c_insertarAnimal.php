<?php

use modelo\AnimalModelo;
require_once 'modelo/AnimalModelo.php';


$instancia = new AnimalModelo();
if(isset($_POST['nombre']) && isset($_POST['foto']) && isset($_POST['nombre_C']) && isset($_POST['descripcion'])){
$idAnimal = $instancia->maxIdZoo();
$animal = array(
    'id_zoo' => ($_GET['id']),
    'id_animal' => $idAnimal['maximo']+1,
    'nombre' => ($_POST['nombre']),
    'foto' => $_POST['foto'],
    'nombre_c' => $_POST['nombre_C'],
    'descripcion'=> $_POST['descripcion']
);

}
// print_r($animal);
$aElementos = $instancia->insert($animal);

header("location: c_verZoo.php?id=".$animal['id_zoo']);




