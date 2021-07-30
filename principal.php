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

<div class="container1">
    <h1  >SOMOS EL MEJOR CLUB EN MEDELLIN</h1>
    <h4>Somos un club deportivo, social y cultural al servicio de nuestros socios e invitados, la tranquilidad, la armonía y la belleza natural se convierten en los protagonistas.</h4>


</div>

<div class="container2-principal">
    <div class="deportes">
    <h3 >DEPORTES</h3>
    <h4 >En nuestras sedes tenemos a tu disposición escenarios adecuados para 12 disciplinas deportivas</h4>
    </div>

<div class="container2">
</div>
</div>

<div class="container-fluid ">
            <div class="titulosalones ">
             <h3 class="animarscroll" >SALONES</h3>
            </div>
          <div class="row">
         
            <div class="col-4">
              <a href="torquesLavadoEspecializado.html">
                <img
                  src="img/evento1.jpg"
                  alt="imgLavadoEspecializado"
                  class="imgServicios"
                />
              </a>
              <h3>BODAS</h3>
            </div>
            <div class="col-4">
              <a href="torquesTattooStore.html">
                <img
                  src="img/evento2.jpg"
                  alt="imgTorquesTattooStore"
                  class="imgServicios"
                />
              </a>
              <h3>FIESTAS</h3>
            </div>
            <div class="col-4">
              <a href="torquesArsenalStore.html">
                <img
                  src="img/evento3.jpg"
                  alt="imgTorquesArsenalStore"
                  class="imgServicios"
                />
              </a>
              <h3>EMPRESARIAL</h3>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid container3">
          <div class="row">
              <div class="col-4">
          <h3>Eventos</h3>
          </div>
          <div class="col-8">
          <p class="parrafoEventos">Celebra tus momentos especiales con nosotros. Vive una experiencia diferente, rodeado de espacios maravillosos en cualquiera de nuestras sedes,donde ponemos a tu servicio la asesoría necesaria y nuestra capacidad logística para que realices tus eventos sociales, familiares, empresariales y deportivos.</p>
          </div>
          </div>
      </div>

      <div class="parallax">
        <center><h3>El Mejor Espacio Para Descansar</h3>
    <p>Nuestros hoteles son el lugar indicado para pasar una temporada de descanso, para reuniones empresariales y sociales.</p>
    </center>
      </div>

      <footer >
     
          <div class="container2-footer"> 
            <p>CLUB LUXURY </p>
            <p>&#x260F; &nbsp;333-33-33</p>
            <p>&#x2706; &nbsp;333 333 33 33</p>
            <p>&#x2709; &nbsp;clubluxury@gmail.com</p>
            <p>Direccion:Calle 1</p>
            <a class="btn btn-outline-warning" type="submit" <?php echo " href='contactenos.php'"?>>CONTACTENOS</a>
          </div>

          <div >
              <img src="img/logo.jpg" alt="logo" weigth="150px" height="150px" class="logo">
          </div>

      </footer>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

      <script src="js/principal.js"></script>
</body>
</html>