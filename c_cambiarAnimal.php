<?php 
use modelo\AnimalModelo;
require_once 'modelo/AnimalModelo.php';


$instancia = new AnimalModelo();
if(isset($_POST['nombre']) && isset($_POST['foto']) && isset($_POST['nombre_c']) && isset($_POST['descripcion'])){
$idAnimal = $instancia->maxIdZoo();
$animal = array(
    'id_zoo' => $_POST['zoo'],
    'id_animal' => $_GET['id'],
    'nombre' => ($_POST['nombre']),
    'foto' => $_POST['foto'],
    'nombre_c' => $_POST['nombre_c'],
    'descripcion'=> $_POST['descripcion'],
);

}
print_r($animal);
$aElementos = $instancia->update($animal);

header("location: c_verZoo.php?id=".$animal['id_zoo']);
?>