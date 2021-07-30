<?php




$host="localhost";
$usuario="root";
$clave="";
$bd="tallercrudphp";

//conectar  a la base de datos
$conexion=mysqli_connect($host,$usuario,$clave,$bd);
/*
$consulta="SELECT * FROM login WHERE username='$usuario' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas > 0){
    header("location:principal.html");
}
else{
    echo("Error en la autenticacion");
}
mysqli_free_result($resultado);
mysqli_close($conexion);*/



?>