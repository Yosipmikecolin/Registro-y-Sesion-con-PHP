<?php


include_once "../Database/database.php";


class User extends Base_datos{





    function UserExist($correo,$contra){


      

        $sql = "SELECT Password FROM registro_usuario WHERE Email=:email";

        $conexion = $this->Conectar()->prepare($sql);
        $conexion->execute([":email"=>$correo]);

       

        if($conexion->rowCount()){



            $columna = $conexion->fetch();
            
            $hash = $columna["Password"];
 

            if(password_verify($contra,$hash)){


                
            
                    header("location:home.php");


            }else{

               
                echo "La contraseña no es correcta";
            }


        }else{


            echo "Verifica tu Correo";
        }
    
       





    }










}







?>