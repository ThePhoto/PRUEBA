<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
	<h1>Editar los datos</h1>
	<hr>

	<p><a href="mostrarbd.php">Datos</a>*&raquo;*Editar:</p>

	<?php 

	if (isset($_POST["enviar"])) {
		$id=$_POST["id"];
		$nombre=$_POST["nombre"];
		$correo=$_POST["correo"];
		$edad=$_POST["edad"];
		$mensaje=$_POST["mensaje"];

		include("conexion.php");

		$editar=mysqli_query($conexion,
			"UPDATE 
			    datos
			        SET 
			        nombre='$nombre',
			        correo='$correo',
			        edad='$edad',
			        mensaje='$mensaje'

			        WHERE id='$id'
			 "
		);

		echo "El producto se ha actualizado con exito";
		
	}

	if (isset($_GET["id"])) {
		$id=$_GET["id"];
		include("conexion.php");


		$consulta=mysqli_query($conexion, "SELECT * FROM datos WHERE id='$id'");

		$fila=mysqli_fetch_array($consulta);

		printf('<div class="formulario">

	<form action="#" method="post">
			
			<label for="nombre">Su nombre</label>
			<input type="text" name="nombre" placeholder="Nombre" required value="%s">
			<br>

		
			<label for="correo">Correo eelectronico</label>
			<input type="email" name="correo" placeholder="@ejemplo.com" required value="%s">
			<br>

			<label for="edad">Edad</label>
			<input type="text" name="edad" value="%s">
			<br>

		
			<label for="mensaje">Su mensaje</label>
			<textarea name="mensaje" placeholder="Mensaje" >%s</textarea>
			<br>
			<br>

			<input type="hidden" value="%s" name="id">

			<input type="submit" value="Actualizar" name="enviar">




			

		</form>
		</div>
', $fila["nombre"], $fila["correo"], $fila["edad"], $fila["mensaje"], $fila["id"]);
	}






	 ?>

</body>
</html>