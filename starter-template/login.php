<?php
session_start();


	$pass=$_POST['password'];
	$correo=$_POST['correo'];
	$evaluar=false;
		
	$archivo=fopen("usuarios.txt", "r");


	      while(!feof($archivo))
	      {

	      $renglon=fgets($archivo);

	      $datos=explode("=>",$renglon);


			if (trim($datos[0])==$correo&& trim($datos[1])===($pass)){
			
			 $evaluar=true;
			 $_SESSION['usuario']=$correo;

			 header ("location:http://localhost:8080/starter-template/listar.php");
			 }else{
				 
			 }
		  }
	    fclose($archivo);
		
		if($evaluar==false){
			
		header('Location: ' . $_SERVER['HTTP_REFERER']);
			
		}
	?>