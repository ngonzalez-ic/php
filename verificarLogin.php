<?php

session_start();


$archivo=fopen("usuarios.txt", "r");
while(!feof($archivo))
{
  $renglon = fgets($archivo);

  $datosArray=explode("=>", $renglon);


 	 if($_POST["correo"] ==trim($datosArray[0]))
 	 {
 	 	echo " <br> ok correo $datosArray[1] ". $_POST['clave'];
      if($_POST["clave"]==trim($datosArray[1]))
 	 	    {
     	 		 $_SESSION['usuario']=$_POST["correo"];
               header("Location:crearMensaje.php");
               }
        else{
         
        }  
        
     }
     else{
     }
   }
     echo '<script language="javascript">alert("Validar los datos ingresador");</script>'; 

     echo '<a class="txt1" href="\php\login2.php">Click aqui para volver a intentar</a>';

fclose($archivo);

?>
