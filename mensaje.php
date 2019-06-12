<?php


include "mensaje.php";
$nuevaMensaje=new Mensaje();


//$nuevaPersona->mostrar($_POST['correo']);
$nuevaMensaje->nombre=$_POST['nombre'];
$nuevaMensaje->apellido=$_POST['mensaje'];
$nuevaMensaje->guardar();


?>