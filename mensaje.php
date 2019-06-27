
<?php

class Mensaje 
{
	//atributos

	
	public $nombre;
	public $mensaje;

	function guardarM()
	{
		$archivo=fopen("mensaje.txt", "a");

      $renglon=$this->nombre.":".$this->mensaje."\n";

		fwrite($archivo,$renglon);

		fclose($archivo);

	}

	function mostrar($algo)
	{
		echo "hola".$algo;

	}

	


}


?>
