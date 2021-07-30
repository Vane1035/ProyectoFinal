<?php
require 'conexion.php';
session_start();
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$telefono=$_POST['telefono'];
$celular=$_POST['celular'];
$correo=$_POST['correo'];

$sql="INSERT INTO contactanos VALUES(null,'$nombres','$apellidos','$telefono','$celular','$correo')";
$query=mysqli_query($conexion,$sql);

if($query){
    echo "<script>alert('Registro Enviado Con Exito Pronto Uno De Nuestro Colaboradores Se Contactara Con Usted.');window.location='principal.php'</script>";
}


?>