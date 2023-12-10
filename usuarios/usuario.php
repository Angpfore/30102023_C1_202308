<?php

include_once('../config/config.php');
include('../config/Database.php');

class Usuario{
    public $conexion;

    function __construct()
    {
        $db = new Database();
        $this->conexion = $db->connectToDataBase();
    }

    function save($params){
         $nombre = $params['nombre'];
         $apellido = $params['apellido'];
         $ciudad = $params['ciudad'];

      $insert = " INSERT INTO registro values (NULL,'$nombre','$apellido','$ciudad') ";
         return mysqli_query($this->conexion, $insert);
    }

    function getAll(){
        $sql = "SELECT * FROM registro";
        return mysqli_query($this->conexion, $sql);
    }

    function getOne($id)
    {
        $sql1 = "SELECT * FROM registro WHERE id = $id";
        return mysqli_query($this->conexion, $sql1);
    }

    function update($params){
        $nombre = $params['nombre'];
        $apellido = $params['apellido'];
        $ciudad = $params['ciudad'];
        $id = $params['id'];

        $update = " UPDATE registro set NOMBRE = '$nombre', APELLIDO = '$apellido', CIUDAD = '$ciudad'
                    WHERE ID = $id";
        return mysqli_query($this->conexion, $update);

    }

    function delete($id)
    {
        $delete = "DELETE FROM registro WHERE id = $id";
        return mysqli_query($this->conexion, $delete);
    }

}

?>