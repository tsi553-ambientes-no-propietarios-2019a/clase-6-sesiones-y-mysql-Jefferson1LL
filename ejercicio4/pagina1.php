<?php
/**
 * Escribir una página en PHP que permita registrar una queja en una base de datos.
 * Disponer un formulario que permita almacenar el nombre del visitante (objeto HTML de tipo "text"), la descripción de la queja (objeto de tipo 
 * "textarea"). Almacenar en el archivo de texto la fecha y hora de la queja.
 *
 * El archivo "pagina1.php" debe ser el formulario de ingreso de datos.
 * El archivo "pagina2.php" debe registrar la información en la base de datos.
 * Por último el archivo "pagina3.php" debe imprimir todas las quejas registradas hasta el momento. Colocar un hipervínculo en el 
 * archivo "pagina1.php" para poder ver todas las quejas registradas.
 *
 */
include('php/conexion.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Quejas</title>
</head>
<body>
	<h1>Formulario de quejas</h1>
	<a href="pagina3.php">Ver quejas</a><br><br>
	<form action="pagina2.php" method="POST">
		<input type="text" name="username" placeholder="Nombre de usuario"><br><br>
		<textarea name="queja" rows="10" cols="40"></textarea>
		<br><br>
		<button>Enviar queja</button>
	</form>
</body>
</html>