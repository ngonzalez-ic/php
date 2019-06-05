<?php

session_start();
function debug($var){
echo "<pre style='background-color:green; padding:8px; font-size:14px;'>";
var_dump($var);
echo "</pre>";
}


/*


$archivo=fopen("usuarios.txt", "a");
$renglon=$_POST["correo"]."=>".$_POST["contraseña"]."\n";
*/
$archivo=fopen("usuarios.txt", "r");
while(!feof($archivo))
{
  $renglon = fgets($archivo);
  //echo $renglon."<br>";
  $datosArray=explode("=>", $renglon);


  debug(array(

   $_POST,
   ($_POST["correo"] ==trim($datosArray[0])),
   $datosArray[0]

));
 	 //echo "<a href='#' class='list-group-item'>$datosArray[0]</a> <br>";
 	 if($_POST["correo"] ==trim($datosArray[0]))
 	 {
 	 	echo " <br> ok correo $datosArray[1] ". $_POST['contraseña'];


      if($_POST["contraseña"]==trim($datosArray[1]))
 	 	    {
     	 		 $_SESSION['usuario']=$_POST["correo"];
     	 		     echo "<br>  ok clave";
               
               header("Location:listarSesion.php");
        }
        else{
         header("Location:login.html");
        }      
     }
     else{
      header("Location:login.html");
     }
}
echo "sali";

//var_dump($_SESSION);

fclose($archivo);


?>
