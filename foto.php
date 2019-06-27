<?php

session_start();
include "menu.php";
?>
<!doctype html>
<html>
	<head>
		 <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <link rel="icon" href="images/icons/pencil.png">

	    <title>Listado de mensajes</title>

	    <!-- Bootstrap core CSS -->
	    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/chat.css" rel="stylesheet">

	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


	    <!-- Custom styles for this template -->
	    <link href="starter-template.css" rel="stylesheet">
<title>Subir archivos con PHP</title>
	</head>
	<body>
	<div class="container">
		<div class="page-header">
			<h1>Perfil de <?php
             echo $_SESSION['usuario'];
            ?></h1>      
		</div>

		<div class="CajaInicio animated bounceInRight" >
			<h1>Elija una imagen para su perfil</h1>

			<table style="width:100%">
				<tbody>
					<tr>
						<td width="50%">

							<div id="divFrm" style="height:350px;overflow:auto;margin-top:20px">
								
							</div>
						</td>
						<td style="padding-left:3%">
							<ul style="list-style-type:disc">
								<form action="upload.php" method="post" enctype="multipart/form-data" >
									<input type="text" name="elNombre">
									<input type="file" name="archivo"  class="MiBotonUTN" /> 
									<br/>
									<input type="submit" class="MiBotonUTN" value="Subir" />
								</form>
							</ul>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<a href="listarMensaje.php" class="btn btn-info" >Volver al Inicio</a>
	</div>
							
								
	</body>
</html>