<?php
//INDICO CUAL SERA EL DESTINO DEL ARCHIVO SUBIDO
$destino = "archivos/" . $_FILES["archivo"]["name"];
$uploadOk = TRUE;
$Extension=pathinfo($destino)["extension"];
$nombre=$_POST["elNombre"];
$DestinoFinal="archivos/$nombre.$Extension";
$DestinoFinal="archivos/".$nombre.".".$Extension;
   if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $DestinoFinal)) {
       echo "<br/>El archivo ". basename( $DestinoFinal). " ha sido subido exitosamente.";

        header("Location:crearMensaje.php");


   } else {
       echo "<br/>Lamentablemente ocurri&oacute; un error y no se pudo subir el archivo.";
   }
   ?>