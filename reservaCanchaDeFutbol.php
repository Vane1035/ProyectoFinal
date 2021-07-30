<?php 
require 'conexion.php';

    $sql="select * from canchadefutbol";
    $query=mysqli_query($conexion,$sql);
    $row=mysqli_fetch_array($query);
 

?>

<?php
session_start();
$usuario= $_SESSION['username'];

if(!isset($usuario)){
    header("location:index.php");
}else{
    echo " <strong ><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bienvenido a Luxury $usuario</h1></strong>";

//echo "<a href='salir.php'>SALIR</a>";
//  echo " <strong ><h1> <img src='img/logo.jpg' alt='logo' weigth='50px' height='50px' class='logo'> Bienvenido a Luxury $usuario</h1></strong>";


}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=esta, initial-scale=1.0">
    <title>Club Luxury</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/principal.css">
    <link rel="stylesheet" href="css/reservaCanchaDeFutbol.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amita&display=swap" rel="stylesheet">
	</head>

   

<body>
    <div class="headerprincipal sticky-top">
    <nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand" href="principal.php"> <img src="img/logo.jpg" alt="logo" weigth="50px" height="50px" class="logo"></a>
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
     
      
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Reservas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="reservaCanchaDeTenis.php">Cancha De Tenis</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="reservaCanchaDeFutbol.php">Cancha De Futbol</a></li>
            <li><hr class="dropdown-divider"></li>
      
          </ul>
        </li>
      
      </ul>

       
        <a class="btn btn-outline-warning" type="submit" <?php echo " href='salir.php'"?>>SALIR </a>

    
    </div>
  </div>
</nav>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
    <div class="container-formulario">
        <form action="insertarreservacanchadefutbol.php" method="POST" class="form">
            <div class="form">
                <h1 class="titulo-contactanos">RESERVA CANCHA DE FUTBOL</h1>
                <div class="grupo">
                    <input type="text" name="nombres" id=""value='<?php echo "$usuario"?>' required readonly> <span class="barra" disabled></span>
                    <label for="" disabled></label>
                </div>
              
                <div class="grupo">
                    <input type="number" name="telefono" id=""  required><span class="barra"></span>
                    <label for="">Telefono</label>
                </div>
                <div class="grupo">
                    <input type="number" name="celular" id="" required><span class="barra"></span>
                    <label for="">Celular</label>
                </div>
                <div class="grupo">
                    <input type="date" name="dia" id="" required><span class="barra"></span>
                    <label for=""></label>
                </div>
                <div class="grupo">
                    <input type="time" name="hora" id="" required><span class="barra"></span>
                    <label for=""></label>
                </div>
                <div>
                    <input type="submit" value="Reservar"class="btn btn-warning" >
                </div>


            </div>
          
        </form>
        </div>
</div>

        <div class="col-6 fondotenis">
        <h1>Canchas Reservadas</h1>
                <table class="table">
                    <thead class="table-warning table-striped">
                        <tr>
                            <th class="titulotenis2">Nombre</th>
                            <th class="titulotenis2">Telefono</th>
                            <th class="titulotenis2">Celular</th>
                            <th class="titulotenis2">Fecha</th>
                            <th class="titulotenis2">Hora</th>
                        
                        </tr>
                    
                    
                    </thead>
                  
                    <tbody >
                         <?php
                            while($row=mysqli_fetch_array($query)){
                        ?>
                        <tr>
                                <th class="titulotenis"><?php  echo $row['nombre'] ?></th>
                                <th class="titulotenis"><?php  echo $row['telefono'] ?></th>
                                <th class="titulotenis"><?php  echo $row['celular'] ?></th>
                                <th class="titulotenis"><?php  echo $row['dia'] ?></th>
                                <th class="titulotenis"><?php  echo $row['hora'] ?></th>
                        
                        </tr>
                        <?php 
                            }
                        ?>
                    
                    </tbody>
                
                



                </table>
        </div>

        </div>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>