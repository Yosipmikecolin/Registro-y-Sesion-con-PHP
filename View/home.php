<?php



session_start();

$sesion=  $_SESSION["user"];




if(empty($sesion)){

  header("location:Login.php");
  die();



}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Woompers Oficial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    

<div class="float-right m-3" role="alert">

<a class="btn btn-danger btn-lg" href="CerrarSesion.php" role="button">Entiendo</a>
  
</div>



<div class="container mt-5">


<div class="jumbotron">


  <h1 class="display-4"><?php 
  
include_once "../Controllers/user_sesion.php";

$user= new User_sesion();

  echo $user->getUser();
  
  
  ?></h1>
  <p class="lead">Comenta,comparte y publica tus ideas para el mundo solo en un lugar woomper.com</p>
  <hr class="my-4">
  <p>Diseñe y personalice rápidamente sitios móviles con capacidad de respuesta con Bootstrap, el kit de herramientas de código abierto front-end más popular del mundo, con variables Sass y mixins, sistema de cuadrícula responsivo, amplios componentes preconstruidos y potentes plugins JavaScript.

.</p>
  <a class="btn btn-primary btn-lg" href="" role="button">Entiendo</a>
</div>


</div>



</body>
</html>


