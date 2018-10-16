<?php include("Recursos/Cabecera.php"); ?>
<body class="Fondo-Body">
	<form class="form-signin" method="POST">

    	<div class="text-center mb-4">
			<a href="index.php"><img class="mb-4" src="assets/img/logo.png"/></a>
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
      		<input type="button" class="btn btn-danger btn-lg" id="login" name="login" value="Entrar"></input>
      	</div>
		
		<h4 class="text-center SubTitulo" >FORJAMOS ATLETAS DE HIERRO</h4>     	
    </form>
<?php include('Recursos/PieDePagina.php'); ?>

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
			url: "Funciones/Logueame.php",
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
					swal({
                		type: 'success',
                		title: 'Excelente, Se ha logrado Loguear',
                		showConfirmButton: false,
                		timer: 1500})
					//$(location).attr('href','index.php');
				} 
				else
				{
					swal('Error', 'No se ha podido iniciar sesion' + data, 'error');
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