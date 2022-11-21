<?php

use modelo\AnimalModelo;
require_once 'modelo/AnimalModelo.php';


$instancia = new AnimalModelo();

 if(isset($_GET['id']))
$aElementos = $instancia->delete($_GET['id']);

header("location:".$_SERVER['HTTP_REFERER']."");




