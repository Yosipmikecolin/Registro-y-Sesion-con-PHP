<?php

include_once "../Controllers/user_sesion.php";
include_once "../Controllers/user_valid.php";


$user = new User();
$sesion = new User_sesion();

session_start();

if(isset($_SESSION["user"])){

    header("location:home.php");



}else{


   header("location:login.php");

}








?>