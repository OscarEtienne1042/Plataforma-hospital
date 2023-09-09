<?php
$username = $_POST["username"];
$password = $_POST["contraseña"];
$us = 'Admin';
$pas = 1234;

if($username == $us){
    if($password == $pas){
        header('Location: ../Perfil.html');
    }else{
        echo "Incorrect password";
        echo "<br><a href='../index.html'>Try again</a>";
    }
}else{
    echo "The username does not exist.";
    echo "<br><a href='../index.html'>Try again</a>";
}
?>