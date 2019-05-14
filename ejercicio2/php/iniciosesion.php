<?php
if(isset($_POST['username']) && isset($_POST['password'])){
    session_start();
     $username = $_POST['username'];
     $password = $_POST['password'];
     $_SESSION['username']=$username;
     $_SESSION['password']=$password;
     header('Location: inicio.php');
 }else{
    echo 'No dispone de autorizacion';
    die();
 }
?>