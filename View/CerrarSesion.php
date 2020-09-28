<?php









    session_start();


    //VACIA LAS VARIBALES DE SESION
    session_unset();

    //DESTRUYE CUALQUIER INFORMACION DE LA SESION
    session_destroy();




    header("location:Login.php");












?>