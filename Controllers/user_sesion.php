<?php



class User_sesion{


public function __construct(){


    


}


    public function setUser($user){

        session_cache_expire(144);
        session_start();
        // creamos Variables de sesión
        $_SESSION["user"] = $user;



    }

    public function getUser(){


        return $_SESSION["user"];



    }



 





}










?>