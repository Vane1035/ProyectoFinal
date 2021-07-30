<!DOCTYPE html>
<html lang="en" class="fondologin">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">    
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Taller</title>
		<link rel="stylesheet" href="css/index.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	
		
		<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amita&display=swap" rel="stylesheet">
	</head>

	<body class="text-center " background="img/fondologin.jpg" >
		<h1 class="titulologin">CLUB &nbsp;&nbsp;LUXURY</h1>
	
		<hr  style="height:15px;border:none;color:#29d0fd;" />
	
	<span class="badge bg-dark container-login" style="width: 30rem; height: 25rem">

		<div class="container theme-showcase text-center " role="main">
			
			<div class="text-center">
				<img src="img/login2.jpg" alt="imglogo" width="136" height="136" class="img-login" >

			</div>
			<hr class="featurette-divider">

			<form   action="loguear.php" method="POST" >
				<h3 class="form-signin-heading text-center">Iniciar Sesion</h3>
				<div class="input-texto">
					<label for="username" class="sr-only">Usuario</label><br />
					
					<br />
					<div class="prueba">
					 	<input type="text" id="username" name="username"
						class="form-control" placeholder="Username" required autofocus >
						
					</div>
				</div>
				<br />
				<br />

				<div class="input-texto">
					<label for="password" class="sr-only">Contraseña</label> <br />
					<br />
					<div class="prueba">
						<input type="password" id="password" name="password"
						class="form-control" placeholder="Password" required>
					</div>	

				</div>
				<br /><br/>
				<div class="boton-ingresar">
				
					<button class="btn btn-lg btn-primary btn-block " type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
  					<path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
 			 		<path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
					</svg> Ingresar</button>
				</div>

				<div class="registrarse">
				<button type="button" class="btn btn-lg btn-primary btn-block" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Registrarse</button>
				</div>
			</form>

		</div>
	</span>


	


<div>



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="Registrarse.php" method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Usuario:</label>
            <input type="text" class="form-control" id="recipient-name" name="usuarioregistro">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Contraseña:</label>
         <input type="password" class="form-control" name="passwordregistro" id="contraseña">
          </div>
		  <input type="submit" class="btn btn-primary" value="Guardar">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
		

      </div>
    </div>
  </div>
</div>
</div>
	
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	</body>
	</html>