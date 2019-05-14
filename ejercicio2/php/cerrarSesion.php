<?php
    session_start();
    error_reporting(0);
    $usuario = $_SESSION['username'];
    if($usuario == null || $usuario == ''){
        echo 'No dispone de autorizacion';
        die();
    }
    session_destroy();
    header('Location: ../index.php');
?>