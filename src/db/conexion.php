<?php
class Conexion
{
    private $database_name = 'ventas';
    private $database_user = 'ugb';
    private $database_password = 'S3RV1D0R3S1NF';
    private $mysql_host = 'database';
    function conectar(){
        return mysqli_connect($this->mysql_host,
                            $this->database_user,
                            $this->database_password,
                            $this->database_name);
    }
} 
?>
