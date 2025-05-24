<?php
//cemAqAjacO//raboceb7Co
    class conexion{
        public static function conexion(){
           
            $conn = new mysqli("localhost", "soporte", "cemAqAjacO", "mvc") or 
            die("Error de conexion a la base BBDD");
            
            $conn->query("SET NAMES 'utf8'");
            return $conn;
        }
    }
?>
