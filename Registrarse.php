<?php
    require 'conexion.php';
    session_start();
    
    /*Debo declarar una variable por cada campo de la tabla */

    $usuario1=$_POST['usuarioregistro'];
    $password=$_POST['passwordregistro'];
    $password2=password_hash($password,PASSWORD_DEFAULT);


    $consulta="INSERT INTO login VALUES('$usuario1','$password2')";
    $resultado=mysqli_query($conexion,$consulta);
 

    if($resultado){
        echo "<script>alert('Usuario: $usuario1 Registrado correctamente');window.location='index.php'</script>";
    }else{
        echo "<script>alert('Usuario: $usuario1 ya se encuentra registrado seleccione otro usuario');window.location='index.php'</script>";
    }

