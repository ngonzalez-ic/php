<?php

class Mensaje 
{
	//atributos

	public $nota;
	public $nombre;
	public $startTime;

	function guardar()
	{
		$sala=fopen("Mensaje.txt", "a");

      $chat=$this->nota."=>".$this->nombre."=>".$this->startTime."\n";

		fwrite($sala,$chat);

		fclose($sala);

	}

	function mostrar($algo)
	{
		echo "hola".$algo;

	}

	


}


?>
