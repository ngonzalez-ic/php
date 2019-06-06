<?php
//INDICO CUAL SERA EL DESTINO DEL ARCHIVO SUBIDO
$destino = "archivos/" . $_FILES["archivo"]["name"];
$uploadOk = TRUE;
//PATHINFO RETORNA UN ARRAY CON INFORMACION DEL PATH
//RETORNA : NOMBRE DEL DIRECTORIO; NOMBRE DEL ARCHIVO; EXTENSION DEL ARCHIVO
//PATHINFO_DIRNAME - retorna solo nombre del directorio
//PATHINFO_BASENAME - retorna solo el nombre del archivo (con la extension)
//PATHINFO_EXTENSION - retorna solo extension
//PATHINFO_FILENAME - retorna solo el nombre del archivo (sin la extension)
//var_dump(pathinfo($destino));
//var_dump(pathinfo($destino)["extension"]);
//echo "<br>";
//var_dump($_FILES);
//echo "<br>";
//var_dump($_POST);
//die();
$Extension=pathinfo($destino)["extension"];
$nombre=$_POST["elNombre"];
$DestinoFinal="archivos/$nombre.$Extension";
$DestinoFinal="archivos/".$nombre.".".$Extension;
   if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $DestinoFinal)) {
       echo "<br/>El archivo ". basename( $DestinoFinal). " ha sido subido exitosamente.";
   } else {
       echo "<br/>Lamentablemente ocurri&oacute; un error y no se pudo subir el archivo.";
   }