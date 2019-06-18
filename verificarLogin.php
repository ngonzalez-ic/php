<?php

session_start();
function debug($var){
echo "<pre style='background-color:green; padding:8px; font-size:14px;'>";
var_dump($var);
echo "</pre>";
}

$archivo=fopen("usuarios.txt", "r");
while(!feof($archivo))
{
  $renglon = fgets($archivo);

  $datosArray=explode("=>", $renglon);


  debug(array(

   $_POST,
   ($_POST["correo"] ==trim($datosArray[0])),
   $datosArray[0]

));
 	 if($_POST["correo"] ==trim($datosArray[0]))
 	 {
 	 	echo " <br> ok correo $datosArray[1] ". $_POST['clave'];


      if($_POST["clave"]==trim($datosArray[1]))
 	 	    {
     	 		 $_SESSION['usuario']=$_POST["correo"];
     	 		     echo "<br>  ok clave";
               
               header("Location:crearMensaje.php");
        }
        else{
         echo "<br>  error";
        }      
     }
     else{
      echo "<br>  error";
     }
}
echo "sali";

//var_dump($_SESSION);

fclose($archivo);


?>
