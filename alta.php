<?php


include "persona.php";
$nuevaPersona=new Persona();


//$nuevaPersona->mostrar($_POST['correo']);
$nuevaPersona->correo=$_POST['correo']; 
$nuevaPersona->clave=$_POST['clave'];
$nuevaPersona->nombre=$_POST['nombre'];
$nuevaPersona->apellido=$_POST['apellido'];
$nuevaPersona->guardar();

header("Location:login2.php");
?>
