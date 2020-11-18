<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="mostrarbd.css">
	<title>Eliminar</title>
</head>
<body>
	<h1>Dato eliminado</h1>
	<hr>

	<p><a href="mostrarbd.php">Datos</a>*&raquo;*Eliminar:</p>

	<?php 

	if (isset($_GET["id"])) {
		$id=$_GET["id"];
		include("conexion.php");

		$eliminar=mysqli_query($conexion, "DELETE FROM datos WHERE id='$id'");
		echo "<h2 class='eliminado'>Producto eliminado con exito</h2>";
	}


	 ?>



</body>
</html>