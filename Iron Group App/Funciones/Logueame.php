<?php 	
	if (isset($_POST["usuario"])) 
	{
		session_start();
		$user = $_POST["usuario"];
		$pass = $_POST["clave"];
		$url = "http://jarvissw-001-site1.htempurl.com/api/Usuarios/".$user;
		$data = file_get_contents($url);
		$obj = json_decode($data);
		
		if ($obj->miembro->correo == $user && $obj->miembro->clave == $pass)
		{
			//$_SESSION["user"] = $user;
			//$_SESSION["cedula"] = $obj->miembro->cedula;
			//$_SESSION["nombre"] = $obj->miembro->nombre;
			echo "1";
		}
		else{echo 'error';}
	}
	else { echo "Error"; } 
?>