<?php
namespace modelo;

include_once 'Modelos.php';
include_once 'Conexion.php';

class ZooModelo extends Conexion implements Modelos
{
    function __construct()
    {
        parent::__construct();
    }

    public function maxIdZoo()
    {

        $query = parent::con()->query("SELECT max(id) as maximo FROM `zoos`");
        $retorno = -1;

        while ($fila = $query->fetch_assoc()) {
            $retorno = $fila;
        }
         return $retorno;
       
    }

    public function update($itemAssoc)
    {
       parent::con()->query("UPDATE `zoos` SET `ciudad`='$itemAssoc[1]',`nombre`='$itemAssoc[2]',`direccion`='$itemAssoc[3]',`pais`='$itemAssoc[4]',`descripcion`='$itemAssoc[5]',`foto`='$itemAssoc[6]' WHERE id='$itemAssoc[0]'");
    }

    public function insert($itemAssoc)
    {

         parent::con()->query(
            "INSERT INTO zoos (`id`,`ciudad`, `nombre`, `direccion`, `pais`, `descripcion`, `foto`) VALUES 
            ('$itemAssoc[0]','$itemAssoc[1]','$itemAssoc[2]','$itemAssoc[3]','$itemAssoc[4]','$itemAssoc[5]','$itemAssoc[6]')"
        );
     
    }

    public function selectById($id)
    {
        $query = parent::con()->query("SELECT * FROM zoos WHERE id = '$id' ");
          $retorno = [];

        while ($fila = $query->fetch_assoc()) {
            $retorno[] = $fila;
        }

        return $retorno;
        //TODO examen
        //select * from zoos where id=$id

        //devuelve un zoo en formato array asociativo
    }
   

    public function delete($id)
    {
        parent::con()->query("DELETE FROM zoos WHERE id = '$id'");
    }

    public function selectAll()
    {
        $query = parent::con()->query('SELECT * FROM zoos');
        $retorno = [];

        while ($fila = $query->fetch_assoc()) {
            $retorno[] = $fila;
        }

        return $retorno;

        // $fila = $query->fetch_array();
        // return $fila;
        //TODO examen
        //devuelve un array de zoos en formato array asociativo
    }
}