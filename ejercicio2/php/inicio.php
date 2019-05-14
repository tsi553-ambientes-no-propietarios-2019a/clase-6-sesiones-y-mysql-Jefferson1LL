<?php
 session_start();
 error_reporting(0);
 $username =$_SESSION['username'];
 $password =$_SESSION['password'];
    if($username == null || $username == ''){
        echo 'No dispone de autorizacion';
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Inicio</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
             <div class="jumbotron">
                <center>
                    <h1 class="display-6 titulos">Bienvenido al sistema <?php echo $username?></h1>
                </center>
                <hr class="my-4">
                    <div>
                        <label for="formGroupExampleInput">Tus datos registrados son los siguientes:</label>
                        <br>
                        <label for="formGroupExampleInput"><b> Usuario: </b> <?php echo $username ?></label>
                    </div>
                    <div>
                        <label for="formGroupExampleInput"><b> Password: </b> <?php echo  $password ?></label>
                    </div>
                <center>
                    <a href="cerrarSesion.php"><button type="submit" class="btn btn-primary">Cerrar Sesion</button></a>
                    <br>
                </center>
             </div>
            </div>
        </div>
    </div> 
</body>
</html>