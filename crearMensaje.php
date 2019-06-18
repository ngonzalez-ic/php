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
   <link rel="icon" href="images/icons/pencil.png">

   <title>Crea tu me</title>

   <!-- Bootstrap core CSS -->
   <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


   <!-- Custom styles for this template -->
   <link href="starter-template.css" rel="stylesheet">
</head>

<body>
      <?php
        if(isset($_SESSION['usuario']))
        include "menu.php";
      ?>

   <main role="main" class="container">

      <div class="starter-template">
         <form action="chat.php" method="post">
            <div>

               <input name ="usuario" readonly class="form-control mr-sm-2" type="text"  aria-label="Search" value="">
              <?php
                if(isset($_SESSION['usuario']))
                echo $_SESSION['usuario'];
               ?>
                
             </div>

             <div class="form-group" text-align: right>
                  <label for="exampleInputEmail1">Mensaje</label>
                  <input type="text" class="form-control" id="Mensaje" aria-describedby="Mensaje"
                  placeholder="Tu Mensaje" name="mensaje">
               </div>


            <!--<div class="form-group"><input type="file" name="foto" class="MiBotonUTN" />
            </div>-->

            <button type="submit" class="btn btn-primary">Dar de alta</button>
         </form>
      </div>
      

   </main><!-- /.container -->

   <!-- Bootstrap core JavaScript
    ================================================== -->
   <!-- Placed at the end of the document so the pages load faster -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"></script>
   <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
   <script src="../../../../assets/js/vendor/popper.min.js"></script>
   <script src="../../../../dist/js/bootstrap.min.js"></script>
</body>

</html>