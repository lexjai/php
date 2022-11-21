<?php
namespace modelo;

include_once 'Modelos.php';
include_once 'Conexion.php';

class AnimalModelo extends Conexion implements Modelos
{

    function __construct()
    {
        parent::__construct();
    }

   

    public function selectById($id)
    {
        
    }
    
    public function selectAnimalsByZoo($idZoo){
        $query = parent::con()->query("SELECT * FROM animals WHERE id = '$idZoo' ");
          $retorno = [];

        while ($fila = $query->fetch_assoc()) {
            $retorno[] = $fila;
        }

        return $retorno;
        
        //TODO examen
        //SELECT * FROM animals where zoo_id=$idZoo
        //devuelve un array de animales en formato array asociativo
        

    }

    public function selectAll()
    {
         $query = parent::con()->query('SELECT * FROM animals');
        $retorno = [];

        while ($fila = $query->fetch_assoc()) {
            $retorno[] = $fila;
        }

        return $retorno;
        //TODO examen
        //devuelve un array de animales en formato array asociativo
    }

    public function maxIdZoo()
    {
        //TODO examen
        //devuelve el id max para poder insertar un nuevo zoo
        //SELECT max(id) as maximo FROM `zoos` WHERE 1;
        //en caso de que no haya ningun registro return -1
    }

    public function update($itemAssoc)
    {
    }
  public function delete($id)
    {
    }

    public function insert($itemAssoc)
    {
        //TODO examen
        //recive un zoo en formato array asociativo
        //lo inserta en la BBDD
        //tener en cuenta que el id de zoo es pk pero no es auto incrementable
    }

}

