<?php

CLASS Database{
    public $host = 'localhost'; // servidor
    public $user = 'root';
    public $pass = '';
    public $db   = 'estudiantes';
    public $conexion;

    function connectToDataBase(){
        $this->conexion = mysqli_connect( $this->host, $this->user, $this->pass, $this->db );

        if ( mysqli_connect_error() ){
            echo 'Error de conexion'. mysqli_connect_error();
        }

        return $this->conexion;
    }

}

?>