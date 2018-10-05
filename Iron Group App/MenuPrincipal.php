<?php 

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Menu Principa</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	  <!-- Archivos CSS de Bootstrap y Perzonalizados --->
  	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
  	<link href="assets/css/pace-theme-flat-top.css" rel="stylesheet"/>
	<link href="assets/bootstrap/css/bootstrap-theme.css" rel="stylesheet"/>
	<link rel="stylesheet" href="assets/bootstrap/css/floating-labels.css">
	<link rel="stylesheet" href="Assets/css/sweetalert2.css">

		<!-- Scripts de Java Script --->
  	<script src="assets/js/jquery-3.3.1.js"></script>
  	<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript"></script>
  	<script src="assets/js/pace.js"></script>
  	<script src="Assets/js/sweetalert2.js"></script>

  		<!-- Iconos e Imagenes a utilizar --->
  	<link rel="icon" href="assets/img/favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon"/>
</head>
<body>
	<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark border-bottom">
			<span class="navbar-brand">
				<a href="MenuPrincipal.php"><img src="Assets/img/logo.png" style="width: 90px; height: 50px;" class="img-fluid" alt="Responsive image"></a>
			</span>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuDesplegable" aria-controls="menuDesplegable" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="menuDesplegable">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="MisDatos.php">Mis Datos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Reservas</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Pruebas</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Cerrar Sesion</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Configuracion</a>
					</li>
				</ul>
			</div>
	</nav>

	<div class="container-fluid">
		
	</div>
</body>
</html>