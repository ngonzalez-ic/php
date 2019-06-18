
<?php
session_start();

class Mensaje 
{
	//atributos

	
	$_SESSION['usuario'];
	public $mensaje;

	function guardarM()
	{
		$archivo=fopen("mensaje.txt", "a");

      $renglon=$this->$_SESSION['usuario']."=>".$this->mensaje."\n";

		fwrite($archivo,$renglon);

		fclose($archivo);

	}

	function mostrar($algo)
	{
		echo "hola".$algo;

	}

	


}


?>
