<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../Css/estilos.css?v=<?php echo time(); ?>"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
</head>
<body>

<div class="container d-flex justify-content-end">




<form action="Registro.php" method="POST" class=" p-5 mt-5">



<h3>Crea una cuenta</h3>
<abbr>  ¿Ya tienes una cuenta?</abbr> <a href="Login.php">Iniciar sesión</a>
 <!-- ........................................................................-->    

<div class="form-group mt-4">
<labe>Dirección de correo electrónico</label>
<input type="email" name="email" class="form-control" id="inputs"> 
</div>

<!-- ........................................................................-->
<div class="form-group d-flex justify-content-center">


        <div class="d-flex justify-content-start mr-3">
        <labe>Nombre</label>
        <input type="text" name="nombre" class="form-control" id="inputs">
        </div>



        <div class="d-flex justify-content-end  ml-4">
        <labe>Apellidos</label>
        <input type="text" name="apellidos" class="form-control" id="inputs">
        </div>


</div>       
<!-- ........................................................................-->


<div class="form-group">

<label>Contraseña</label>
<input type="password" name="contra" class="form-control" id="inputs">

</div>

<!-- ........................................................................-->



<div class="form-row">


    <div class="form-group col-sm-6">
    <label>Fecha</label>
    <input type="date" name="fecha" class="form-control mr-2" id="inputs">
    </div>


    <div class="form-group col-sm-6">
    <label>Pais/Region</label>
    <select class="form-control ml-2" name="pais" id="inputs">
    <option>Colombia</option>
    </select>
    </div>



</div>  

<!-- ........................................................................-->

<p>El Grupo de empresas de Woompers puede mantenerme informado con correos electrónicos personalizado sobre productos y servicios. Consulta nuestra Política de privacidad para conocer más detalles o darte de baja en cualquier momento.</p>
<div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label mt-1" for="exampleCheck1">Deseo que me contacten por correo electrónico</label>
  </div>

<!-- ........................................................................-->
  <p>Al hacer clic en Crear cuenta, reconozco que he leído y aceptado las Condiciones de uso y la Política de privacidad.</p>



<!-- ........................................................................-->
<p class="alerta">Llena todos los campos.</p>

<div class="boton mt-4 mb-4 d-flex justify-content-end">
<button type="submit" class="p-2" name="enviarR">Crear Cuenta</button>
</div>

<!-- ........................................................................-->

<hr>
<p>Protegido por reCAPTCHA y sujeto a Política de privacidad y Condiciones del servicio de Google.</p>

</div>
</div>



<?php
  



if(isset($_POST["enviarR"])){


// 1- Error era que no estaba selecionando bien mi base de datos
//2- Error tenia PIAS en ves de PAIS un error sql
//3- En mi sentencia sql ya sea enviar editar,borrar etc nunca llevan comillas en ningun lado





  $email=  !empty($_POST["email"]) ? $_POST["email"] : NULL;
  $nombre= !empty($_POST["nombre"]) ? $_POST["nombre"] : NULL;
  $apellidos= !empty($_POST["apellidos"]) ? $_POST["apellidos"] : NULL;
  /*Evitemos ñ*/
  $password = !empty($_POST["contra"]) ? $_POST["contra"] : NULL;
  $fecha=  !empty($_POST["fecha"]) ? $_POST["fecha"] : NULL;
  $pais=!empty($_POST["pais"]) ? $_POST["pais"] : NULL;




  if($email && $nombre && $apellidos  && $password && $fecha && $pais){





    include_once "../Database/database.php";
    $conexion = new Base_datos();

    $sql="INSERT INTO registro_usuario (Email,Nombre,Apellidos,Password,Fecha,Pais) VALUES (:email,:nombre,:apellidos,:contras,:fecha,:pais)";
    $valor= $conexion->Conectar()->prepare($sql);
    $cifra_contra = password_hash($password,PASSWORD_DEFAULT);

    

    
if($valor->execute([':email'=>$email, ':nombre'=>$nombre, ':apellidos'=>$apellidos, ':contras'=>$cifra_contra, ':fecha'=>$fecha,':pais'=>$pais])){

echo $valor->rowCount()."Fila enviada";


}else{

  echo "Error en:".$valor->errorInfo()[2];
}



  }else{

?>

<style>

  .alerta{

      display:inline;

          }       
</style>

<?php

  }
}




?>


</body>
</html>