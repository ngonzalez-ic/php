 <?php
session_start();

 //var_dump($_GET);

$_SESSION['usuario']= null;


session_unset(); 
 
session_destroy(); 
//header("Location:listarSesion.php");
?>