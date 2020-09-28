<?php


class  Base_datos{


        private $servidor;
        private $base_datos;
        private $usuario;
        private $contraseña;




        function __construct(){


        $this-> servidor="localhost";
        $this-> base_datos= "usuarios";
        $this-> usuario= "root";
        $this-> contraseña= "";


        }





        function Conectar(){

        try {
            
        $sqlConetion="mysql:host=".$this->servidor. ";dbname=".$this->base_datos;
        $pdo= new PDO($sqlConetion,$this->usuario,$this->contraseña);

        return $pdo;

        } catch (PDOException $e) {
            
            echo "Error".$e->getMessage();


        }


        }
    }



?>