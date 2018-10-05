<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	<title>Mis Datos - IronGroup</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	  <!-- Archivos CSS de Bootstrap y Perzonalizados --->
  	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="assets/css/Estilo.css">
	  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-theme.css"/>
	  <link rel="stylesheet" href="assets/bootstrap/css/floating-labels.css">
	  <link rel="stylesheet" href="Assets/css/sweetalert2.css">

  		<!-- Scripts de Java Script --->
  	<script src="assets/js/jquery-3.3.1.js"></script>
  	<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript"></script>
  	<script src="Assets/js/sweetalert2.js"></script>

  		<!-- Iconos e Imagenes a utilizar --->
  	<link rel="icon" href="assets/img/favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon"/>	
  </head>

  <body>
   <?php include("Recursos/BarraDeNavegacion.php"); ?>
     <form class="MisDatos">
        <div class="form-row justify-content-center">
          <div class="form-group col-md-2 mr-5">
            <label for="formNumeroSerial" class="SubTitulo">Cedula</label>
            <input type="text" class="form-control" id="formNumeroSerial" value="<?php echo $usuario->SerialCarnet?>" readonly>
          </div>
          <div class="form-group col-md-3">
            <label for="formCedula" class="SubTitulo">Nombre Y Apellido</label>
            <input type="text" class="form-control" id="formCedula" value="<?php echo $usuario->Cedula?>" readonly>
          </div>
          <div class="form-group col-md-3">
            <label for="formNombre" class="SubTitulo">Fecha de Nacimiento</label>
            <input type="text" class="form-control" id="formNombre" value="<?php echo $usuario->Nombre?>" readonly>
          </div>
        </div>
        <div class="form-row justify-content-center">     
          <div class="form-group col-md-3">
            <label for="formApellido" class="SubTitulo">Telefono Movil</label>
            <input type="text" class="form-control" id="formApellido" value="<?php echo $usuario->Apellido?>" readonly>
          </div>
          <div class="form-group col-md-3">
            <label for="formCedula" class="SubTitulo">Telefono Fijo</label>
            <input type="text" class="form-control" id="formCedula" value="<?php echo $usuario->Cedula?>" readonly>
          </div>
          <div class="form-group col-md-3">
            <label for="formNombre" class="SubTitulo">Correo</label>
            <input type="text" class="form-control" id="formNombre" value="<?php echo $usuario->Nombre?>" readonly>
          </div>
        </div>
        <div class="form-row justify-content-center">   
          <div class="form-group col-md-3">
            <label for="formApellido" class="SubTitulo">Edad</label>
            <input type="text" class="form-control" id="formApellido" value="<?php echo $usuario->Apellido?>" readonly>
          </div>
          <div class="form-group col-md-3">
            <label for="formApellido" class="SubTitulo">Antec. Quirurgicos</label>
            <input type="text" class="form-control" id="formApellido" value="<?php echo $usuario->Apellido?>" readonly>
          </div>
          <div class="form-group col-md-3">
            <label for="formCedula" class="SubTitulo">Alergias</label>
            <input type="text" class="form-control" id="formCedula" value="<?php echo $usuario->Cedula?>" readonly>
          </div>
        </div>
        <div class="form-row justify-content-center">
          <div class="form-group col-md-3">
            <label for="formNombre" class="SubTitulo">Lesiones</label>
            <input type="text" class="form-control" id="formNombre" value="<?php echo $usuario->Nombre?>" readonly>
          </div>
          <div class="form-group col-md-3">
            <label for="formApellido" class="SubTitulo">Hipertension</label>
            <input type="text" class="form-control" id="formApellido" value="<?php echo $usuario->Apellido?>" readonly>
          </div>
          <div class="form-group col-md-3">
            <label for="formApellido" class="SubTitulo">Diabetes</label>
            <input type="text" class="form-control" id="formApellido" value="<?php echo $usuario->Apellido?>" readonly>
          </div>
          <div class="form-group col-md-3">
            <label for="formCedula" class="SubTitulo">Antec. Familiares</label>
            <input type="text" class="form-control" id="formCedula" value="<?php echo $usuario->Cedula?>" readonly>
          </div>
        </div>
     </form> 
  </body>
</html>