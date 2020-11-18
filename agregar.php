<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">

	<title>Agregar datos</title>
</head>
<body>
	<h1>Agregar datos</h1>
	<hr>
	<p><a href="mostrarbd.php">Datos</a>*&raquo;*Agregar:</p>



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

			<input type="submit" value="registrar" name="enviar">




			

		</form>
		</div>

		<<?php 

		include("registrar.php");


		 ?>

</body>
</html>