<?php
session_start();

include "mensaje.php";
$nuevaMensaje=new Mensaje();


//$nuevaPersona->mostrar($_POST['correo']);
$nuevaMensaje->nombre=$_SESSION['usuario'];
$nuevaMensaje->mensaje=$_POST['mensaje'];
$nuevaMensaje->guardarM();

echo "<p class='list-group-item'>Su mensaje fue enviado</p>" ;

header("Location:crearMensaje.php");
?>