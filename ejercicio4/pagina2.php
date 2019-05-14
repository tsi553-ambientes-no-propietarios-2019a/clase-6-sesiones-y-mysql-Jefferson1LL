<?php
include('php/conexion.php');
if($_POST){
	if(isset($_POST['username'])&&isset($_POST['queja'])&&!empty($_POST['username'])&&!empty($_POST['queja'])){
		$username = $_POST['username'];
		$queja = htmlspecialchars($_POST['queja']);
		$fecha = date('m/d/Y; g:i:s',time());
		
		$sqlinsert = "INSERT INTO quejas(username, descrip_queja, fecha) VALUES ('$username', '$queja', '$fecha')";
		$conn->query($sqlinsert);
		if ($conn->error) {
			header('Location: pagina1.php?message_error=Error en la insercion'.$conn->error);
			exit;
		}else{
			echo 'Datos enviados correctamente!';
		}
	}else{
		header('Location: pagina1.php?message_error=Llene todos los campos');
			exit;
	}
}
?>