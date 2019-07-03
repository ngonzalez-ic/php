<?php

class Persona 
{
	//atributos

	public $correo;
	public $clave;
	public $nombre;
	public $apellido;

	function guardar()
	{
		$archivo=fopen("usuarios.txt", "a");

      $renglon=$this->correo."=>".$this->clave."=>".$this->nombre."=>".$this->apellido."\n";

		fwrite($archivo,$renglon);

		fclose($archivo);

	}

	function mostrar($nombre, $apellido)
	{
      $login=$this->nombre;
      echo "si muestar$login";

	}

	


}


?>
