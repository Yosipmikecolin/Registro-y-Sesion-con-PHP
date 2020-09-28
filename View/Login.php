<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../Css/estilos_login.css?v=<?php echo time(); ?>"/>
</head>
<body>
    
<div class="container d-flex justify-content-end ">

<form action="Login.php" class="p-5 mt-5" method="POST">


   <h3>Iniciar sesión</h3>

    <abbr>¿Eres un nuevo usuario?</abbr> <a href="Registro.php">Crear una cuenta</a>
    <div class="form-group mt-5">
    <label  for="email">Dirección de correo electrónico</label>
    <input type="email" name="email" class="form-control" id="inputs">
    </div>

<div class="form-group mt-4">

<label>Contraseña</label>
<input type="password" name="password" class="form-control" id="inputs">

</div>



<div class="form-group d-flex justify-content-end ">

<button type="submit" class="p-2 mt-4" name="boton">Continuar</button>
</div>



</form>
</div>




</body>
</html>


<?php

if(isset($_POST["boton"])){

    include_once "../Controllers/user_valid.php";
    include_once "../Controllers/user_sesion.php";

    $email = $_POST["email"];
    $password = $_POST["password"];



    $sesion = new User_sesion();
    $sesion->setUser($email);
   

    $caja = new User();
    $caja->UserExist($email,$password);



}






?>