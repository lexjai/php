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
        $query = parent::con()->query("SELECT * FROM animals WHERE id = '$id' ");
        $retorno = [];

      while ($fila = $query->fetch_assoc()) {
          $retorno[] = $fila;
      }

      return $retorno;
    }
    
    public function selectAnimalsByZoo($idZoo){
        $query = parent::con()->query("SELECT * FROM animals WHERE zoo_id ='$idZoo'");
          $retorno = [];

        while ($fila = $query->fetch_assoc()) {
            $retorno[] = $fila;
        }

        return $retorno;
     

    }

    public function selectAll()
    {
         $query = parent::con()->query('SELECT * FROM animals');
        $retorno = [];

        while ($fila = $query->fetch_assoc()) {
            $retorno[] = $fila;
        }

        return $retorno;
        
    }

    public function maxIdZoo()
    {
        $query = parent::con()->query("SELECT max(id) as maximo FROM `animals`");
        $retorno = -1;

        while ($fila = $query->fetch_assoc()) {
            $retorno = $fila;
        }
         return $retorno;
    }

    public function update($itemAssoc)
    { 
        $zoo = $itemAssoc['id_zoo'];
        $idAnimal = $itemAssoc['id_animal'];
        $nombre = $itemAssoc['nombre'];
        $foto = $itemAssoc['foto'];
        $nombreC = $itemAssoc['nombre_c'];
        $descripcion = $itemAssoc['descripcion'];
        parent::con()->query("UPDATE `animals` SET `nombre`='$nombre',`foto`='$foto',`nombre_cientifico`='$nombreC',`descripcion`='$descripcion',`zoo_id`='$zoo' WHERE id='$idAnimal'");

        // UPDATE `animals` SET `id`='[value-1]',`nombre`='[value-2]',`foto`='[value-3]',`nombre_cientifico`='[value-4]',`descripcion`='[value-5]',`zoo_id`='[value-6]' WHERE 1
    }
  public function delete($id)
    {
        parent::con()->query("DELETE FROM animals WHERE id = '$id'");

    }

    public function insert($itemAssoc)
    {
        $idAnimal = $itemAssoc['id_animal'];
        $idZoo = $itemAssoc['id_zoo'];
        $nombre = $itemAssoc['nombre'];
        $foto = $itemAssoc['foto'];
        $nombreC = $itemAssoc['nombre_c'];
        $descripcion = $itemAssoc['descripcion'];

        parent::con()->query(
            "INSERT INTO animals (`id`,`nombre`, `foto`, `nombre_cientifico`, `descripcion`, `zoo_id`) VALUES 
            ('$idAnimal','$nombre','$foto','$nombreC','$descripcion','$idZoo')"
        );
    }

}

