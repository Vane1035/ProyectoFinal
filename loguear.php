<?php
require 'conexion.php';
session_start();
$usuario=$_POST['username'];
$password=$_POST['password'];

$consulta=mysqli_query($conexion,"SELECT * FROM login WHERE username='$usuario' ");
/*prueba*/$nr = mysqli_num_rows($consulta);
/*prueba*/$buscarpass= mysqli_fetch_array($consulta);
/*
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);
and password='$password'
$password2=password_verify($password,$resultado['password'])*/

if(($nr ==1)&& (password_verify($password,$buscarpass['password']))){
    $_SESSION['username']=$usuario;
    header("location:principal.php");
}else{
    echo "<script>alert('Usuario o Contraseña incorrecta');window.location='index.php'</script>";
}
?>