<?php 

include("conexion.php");

//if ($conexion) {
	//echo "todo correcto";


if (isset($_POST['enviar'])) {

	if (strlen($_POST['nombre'])>=1 && 

    strlen($_POST['correo'])>=1 && 

    strlen($_POST['edad'])>=1 && 

    strlen($_POST['mensaje'])>=1) {

    	$nombre = trim($_POST['nombre']);

        $correo = trim($_POST['correo']);
    
        $edad = trim($_POST['edad']);

        $mensaje = trim($_POST['mensaje']);

        $consulta = "INSERT INTO datos(nombre, correo, edad, mensaje) VALUES ('$nombre','$correo','$edad','$mensaje')";


        $resultado = mysqli_query($conexion,$consulta);

        if ($resultado) {

        	?>
        	<h3>Todo perfecto</h3>
        	<?php
        } else{
        	?>
        	<h3>Ha ocurrido un error</h3>
        	<?php
        }
    
    


	
}
	
}

 ?>