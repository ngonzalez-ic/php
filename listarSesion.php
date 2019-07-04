<?php

session_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/icons/user.png">

    <title>Listado de usuarios</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>

  <body>

    <?php

      include "menu.php";
   ?>

    <main role="main" class="container">
      <?php

// isset controla que este logueado el usuario

if(isset($_SESSION['usuario']))
{
$archivo=fopen("usuarios.txt", "r");
while(!feof($archivo))
{
  $renglon = fgets($archivo);
  //echo $renglon."<br>";
  $alias=explode("=>",$renglon);
  echo "<a href='#' class='list-group-item'>$alias[0]</a>";
  
}
}else
{
    echo "<a href='login2.php' class='list-group-item'>Usted no tiene permisos, debe ingresar con usuario y password</a>";
}



?>

  <a href="./crearMensaje.php" class="btn btn-primary" >Crear mensaje</a>
  <a href="./listarMensaje.php" class="btn btn-primary justify-content" >Ver mensajes</a>

   
<!--div class="list-group">
  <a href="#" class="list-group-item">First item</a>
  <a href="#" class="list-group-item">Second item</a>
  <a href="#" class="list-group-item">Third item</a>
</div-->
    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
