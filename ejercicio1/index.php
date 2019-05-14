<?php
/*
Escribir una página PHP que presente un formulario con los campos “usuario” y “contraseña” y un botón que permita iniciar sesión. Al iniciar la sesión se debe redireccionar a la página de inicio.php que mostrará los datos guardados en la sesión y un saludo mostrando el nombre del usuario ingresado. La página de inicio debe tener un link que permita cerrar la sesión del usuario.
*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio1</title>
	<h1> <center>LOGIN</center>  </h1>

</head>
<body>

	<form method="POST" action="inicio.php">
		<center>

			<div>
				<label><i> <b> Usuario: </i> </b></label>
				<input type="text" name="usuario" required="required" placeholder="Ingrese Usuario">
			</div>
			 <br> 
			<div>
				
				<label> <i> <b> Contraseña: </i> </b></label> 
				<input type="password" name="Contraseña" required="required" placeholder="Ingrese Contraseña">
			</div>

				<br>
				<button type="submit" class="btn btn-primary"> Iniciar Sesión</button>

		</center>
	</form>



</body>
</html>