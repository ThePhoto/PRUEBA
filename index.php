<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>Formulario con base de datos mysql</title>
</head>
<body>
	<div class="formulario">

		<form  method="post">
			
			<label for="nombre">Su nombre</label>
			<input type="text" name="nombre" placeholder="Nombre" required>
			<br>

		
			<label for="correo">Correo eelectronico</label>
			<input type="email" name="correo" placeholder="@ejemplo.com" required>
			<br>

			<label for="edad">Edad</label>
			<input type="text" name="edad">
			<br>

		
			<label for="mensaje">Su mensaje</label>
			<textarea name="mensaje" placeholder="Mensaje" required></textarea>
			<br>
			<br>

			<input type="reset" name="Borrar">

			<input type="submit" name="enviar">




			

		</form>
		
	</div>



	<a class="ir" href="mostrarbd.php">Ir a la base de datos</a>


	<?php 

include("registrar.php");




	 ?>









</body>
</html>