<?php

	function conectar(){
		if($_SERVER["SERVER_NAME"] == 'localhost')
		{
			$db = mysqli_connect('localhost', 'root', '', 'bd_watched');
			mysqli_query($db,"SET NAMES 'utf8'");
			if(!$db){
				printf("Error %d: %s. <br>",
				mysqli_connect_errno(),
				mysqli_connect_error());
		}
		return $db;
		}
		else{

		$db = mysqli_connect('localhost', 'admin', 'iech7Urobith', 'bd_watched');
		mysqli_query($db,"SET NAMES 'utf8'");
		if(!$db){
			printf("Error %d: %s. <br>",
				mysqli_connect_errno(),
				mysqli_connect_error());
		}
	}
		return $db;
	}
	
	function desconectar($conexion){
		if($conexion){
			$ok = mysqli_close($conexion);
		}
	}
?>
