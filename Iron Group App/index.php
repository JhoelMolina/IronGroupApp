<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
	  	<title>Iniciar Sesión - IronGroup</title>
	  	<meta name="viewport" content="width=device-width, initial-scale=1">

	  	<!-- Archivos CSS de Bootstrap y Perzonalizados --->
  		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
  		<!--<link rel="stylesheet" type="text/css" href="assets/css/estilo.css">-->
  		<link href="assets/css/pace-theme-flat-top.css" rel="stylesheet"/>
		<link href="assets/bootstrap/css/bootstrap-theme.css" rel="stylesheet"/>
		<link rel="stylesheet" href="assets/bootstrap/css/floating-labels.css">

  		<!-- Scripts de Java Script --->
  		<script src="assets/js/jquery-3.3.1.js"></script>
  		<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript"></script>
  		<script src="assets/js/pace.js"></script>
  		<!--<script src="assets/bootstrap/js/bootstrap.min.js"></script>
  		<script src="assets/js/jquery-1.12.3.min.js" charset="utf-8"></script>
  		-->

  		<!-- Iconos e Imagenes a utilizar --->
  		<link rel="icon" href="assets/img/favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon"/>
		
		<!--<link rel="stylesheet" href="assets/css/estilo.css"  media="screen" title="no title" charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">-->	
  </head>

  <body>
	<form class="form-signin" method="POST">

    	<div class="text-center mb-4">
			<a href="index.php"><img class="mb-4" src="assets/img/logo.png"/></a>
			<div class="titulocomp">Iniciar Sesión</div>
		</div>
      
    	<div class="form-label-group">
        	<input type="email" id="Correo" name="Correo" class="form-control" placeholder="Correo Electronico" required autofocus>
        	<label for="Correo">Correo Electronico</label>
    	</div>
      
      	<div class="form-label-group">
        	<input type="password" id="Clave" name="Clave" class="form-control" placeholder="Clave" required>
        	<label for="Clave">Clave</label>
      	</div>
      
      	<div class="text-center mb-4">
      		<input type="button" class="boton" id="login" name="login" value="Entrar"></input>
      	</div>      	
    </form>
  </body>
</html>

<script>
	$(document).ready(function(){
		$('#login').click(function(){
			var user = $('#Correo').val();
			var pass = $('#Clave').val();
			if($.trim(user).length > 0 && $.trim(pass).length > 0)
			{  
				$('#login').val("Conectando...");
			}					
			$.ajax({ 
			url: "Logueame.php",
			type:"POST", 
			data:{
				usuario:user,
				clave:pass
			},
			cache:"false",
			success: function (data) 
			{				
				if (data=="1") 
				{
					$(location).attr('href','index.php');
				} 
				else
				{
					alert("Contraseña Incorrecta."+ data);
					$("#resultado").html("Contraseña Incorrecta.");
					$('#login').val("Entrar");
				}
			},
			error: function(XMLHttpRequest, textStatus, errorThrown) 
			{ 
				alert("El Usuario no existe o no hay conexión.");
				$("#resultado").html("El Usuario no existe o no hay conexión.");
				$('#login').val("Entrar");
			}								
			});					
		});		
	});
</script>