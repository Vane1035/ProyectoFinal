<?php
require 'conexion.php';
session_start();
$nombres=$_POST['nombres'];
$telefono=$_POST['telefono'];
$celular=$_POST['celular'];
$dia=$_POST['dia'];
$hora=$_POST['hora'];

$sql="INSERT INTO canchadetenis VALUES(null,'$nombres','$telefono','$celular','$dia','$hora')";
$query=mysqli_query($conexion,$sql);

if($query){
    echo "<script>alert('Se reservo correctamente la cancha de tenis');window.location='principal.php'</script>";
}


?>