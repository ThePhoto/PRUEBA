<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="mostrarbd.css">
	<meta charset="utf-8">
	<title>Mostrar los datos de una base de datos</title>
	<script>
		function confirmacion(){
			if (confirm("Estas seguro de eliminar el dato")) {

				return true;
			}return false;
		}
	</script>
</head>
<body>
	<h1>Datos de la Base</h1>

	

	<table >
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Correo</th>
				<th>Edad</th>
				<th>Mensaje</th>
				<th>Modificar</th>
			</tr>
		</thead>

		<tbody>
			<?php 

			include("conexion.php");

			$consulta=mysqli_query($conexion, "SELECT * FROM datos");
			while ($fila=mysqli_fetch_array($consulta)) {
				printf('

					<tr>
					<td>%s</td>
					<td>%s</td>
					<td>%s</td>
					<td>%s</td>
					<td><a href="editar.php ?id=
					%s">Editar</a>
					    <a href="eliminar.php ?id=
					    %s" onclick="return confirmacion()">Eliminar</a> </td>
					 </tr>

					', $fila["nombre"], $fila["correo"], $fila["edad"], $fila["mensaje"], $fila["id"], $fila["id"],);
			}

			 ?>
		</tbody>
		


	</table>

	<div class="modificar"><a href="agregar.php">Agregar</a>

	</div>

	
</body>
</html>