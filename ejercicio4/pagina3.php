<?php
include('php/conexion.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Quejas</title>
</head>
<body>
	<table border="1">
		<tr>
			<td>Nombre</td>
			<th>Queja</th>
			<th>Fecha</th>
		</tr>

		<?php
			$sqlquery = "SELECT * FROM quejas";
			$res = $conn->query($sqlquery);
			while ($mostrar = $res->fetch_assoc()) {
			
		?>
		<tr>
			<td><?php echo $mostrar['username']?></td>
			<td><?php echo $mostrar['descrip_queja']?></td>
			<td><?php echo $mostrar['fecha']?></td>
		</tr>

		<?php
			}
		?>

	</table>
</body>
</html>