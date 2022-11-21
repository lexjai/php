<?php
//TODO examen
/*
 * controlador que inserta los datos
 * del zoo recibidos por post.
 * y abre:
 *  opcion 1: la pantalla del zoo que acabamos de insertar VER_ZOO
 *  opcion 2: el panel principal donde aparecen todos los zoos 
 */

 
use modelo\ZooModelo;
require_once 'modelo/ZooModelo.php';


$instancia = new ZooModelo();

$idMax = $instancia->maxIdZoo();
$valor[] = ($idMax['maximo']+1);
$valor[] = $_POST['ciudad'];
$valor[] = $_POST['nombre'];
$valor[] = $_POST['direccion'];
$valor[] = $_POST['pais'];
$valor[]= $_POST['descripcion'];
$valor[] = $_POST['foto'];
$aElementos = $instancia->insert($valor);

header("location: c_verZoo.php?id=".$valor[0]);





