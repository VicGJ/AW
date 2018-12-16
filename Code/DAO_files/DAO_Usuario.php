<?php

require_once "conexion.php";
	
class userDAO{
	//METODOS
	public function createUser($TUsuario){//crea usuario
		$db = conectar();
		$nombre=$TUsuario->getNombre();
		$email=$TUsuario->getEmail();
		$password=$TUsuario->getPassword();
		$tipo=$TUsuario->getUserType();
		$imagen=$TUsuario->getImagenPerfil();

		if($imagen == NULL)
		{
			if($tipo == "0")
			{
			$consulta="INSERT INTO users VALUES('$nombre', 'usuario.png','$email', '$tipo', '$password','0')";
			}
			else{
			$consulta="INSERT INTO users VALUES('$nombre', 'admin.png','$email', '$tipo', '$password','0')";
			}
		}
		else
		{
			$consulta="INSERT INTO users VALUES('$nombre', '$imagen','$email', '$tipo', '$password','0')";
		}	
		
		mysqli_query($db, $consulta);
		desconectar($db);
	}
    //--------------------------
		public function buscaUsu($usu){
			$db = conectar();
			$aux= "%";
			$lista= array();
			$usu= $aux.$usu.$aux;
			//var_dump($titulo);
			$consulta = "SELECT * FROM users WHERE nombreusu LIKE'$usu' ORDER BY nombreusu";//consulta sql
			$results = mysqli_query($db, $consulta);
			if (mysqli_num_rows($results) != 0) {  
				//$pelicula = mysqli_fetch_assoc($results);
				while($usuario=mysqli_fetch_assoc($results)){
	
				array_push($lista, $usuario["nombreusu"]);
			}
				desconectar($db);
				return $lista;
			}
			else {
				desconectar($db);
				return ;//NULL
			}
		}
//--------------------------
	public function readUser($nombreusu, $password){
		$db = conectar();
		$consulta = "SELECT * FROM users WHERE nombreusu='$nombreusu' AND password='$password'";//consulta sql
		$results = mysqli_query($db, $consulta);
		if (mysqli_num_rows($results) == 1) {  //si se encuentra la fila, el usuario y contraseña son correctas
			$user = mysqli_fetch_assoc($results);
			desconectar($db);
			//cambio
			if($user["fotoPerfil"] == NULL)
			{
				if($user["user_type"] == "0")
				{
				return new transferUser($user["nombreusu"],"","","",$user["user_type"], "usuario.png");
				}
				else
				{
					return new transferUser($user["nombreusu"],"","","",$user["user_type"], "admin.png");
				}
			}
			else{
				return new transferUser($user["nombreusu"],"","","",$user["user_type"], $user["fotoPerfil"]);
			}
		}
		else {
			desconectar($db);
			return ;//NULL
		}
	}
//--------------------------
	public function deleteUser($nombreusu){
		$db = conectar();

		$query = "SELECT fotoPerfil FROM users WHERE nombreusu = '$nombreusu'";
		$results  = mysqli_query($db, $query);

		if(mysqli_num_rows($results) != 0)
		{
			while($fila=mysqli_fetch_assoc($results))
			{
				$imagen = $fila["fotoPerfil"];

				unlink('./imagenPerfil/'.$imagen);

			}
				
		}

		$consultaComentarios="DELETE FROM comentarios WHERE usuario = '$nombreusu'";
		mysqli_query($db, $consultaComentarios);

		//Eliminar imagen de la lista
		//Eliminar las peliculas que tiene esta lista
		$consultaImagenLista = "SELECT imagen FROM listas_peliculas WHERE nombreCreador = '$nombreusu'";
		$resultsLista  = mysqli_query($db, $consultaImagenLista);

			if(mysqli_num_rows($resultsLista) != 0)
			{
				while($fila=mysqli_fetch_assoc($resultsLista))
				{
					$imagen = $fila["imagen"];

					unlink('./listaImagen/'.$imagen);

				}
				
			}

		$consulta = "SELECT codigoListas FROM listas_peliculas WHERE nombreCreador='$nombreusu'";
		$resultsPeliculasGrande  = mysqli_query($db, $consulta);
			if(mysqli_num_rows($resultsPeliculasGrande) != 0){
				while($fila=mysqli_fetch_assoc($resultsPeliculasGrande)){
					$code = $fila["codigoListas"];
					$consultaPeliculasLista = "DELETE FROM listas_y_peliculas WHERE listaPeliculas = '$code'";
					mysqli_query($db, $consultaPeliculasLista);
				}
			}

		$consultaListas="DELETE FROM listas_peliculas WHERE nombreCreador = '$nombreusu'";
		mysqli_query($db, $consultaListas);

		$consultaListasSeguidas="DELETE FROM listas_y_usuarios WHERE nombreusu = '$nombreusu'";
		mysqli_query($db, $consultaListasSeguidas);

		$consultaVistas="DELETE FROM peliculas_vistas WHERE Nombre_Usuario = '$nombreusu'";
		mysqli_query($db, $consultaVistas);

		$consulta="DELETE FROM users WHERE nombreusu = '$nombreusu'";
		if (mysqli_query($db, $consulta)){
			return true;
		} else{
			return false;
		} 
		desconectar($db);
	}
//--------------------------
	public function updateUser($nombreusu, $campo, $valor){
		$db = conectar();

		if($campo == "fotoPerfil")
		{
			$query = "SELECT fotoPerfil FROM users WHERE nombreusu = '$nombreusu'";
			$results  = mysqli_query($db, $query);

			if(mysqli_num_rows($results) != 0)
			{
				while($fila=mysqli_fetch_assoc($results))
				{
					$imagen = $fila["fotoPerfil"];

					unlink('./imagenPerfil/'.$imagen);

				}
					
			}
		}
		
		$consulta="UPDATE users SET ".$campo." = '$valor' WHERE nombreusu = '$nombreusu'";
		if (mysqli_query($db, $consulta)){
			return true;
		} else{
			return false;
		} 
		desconectar($db);
	}
//--------------------------
	public function readUserByName($nombreusu){
		$db = conectar();
		$consulta = "SELECT * FROM users WHERE nombreusu='$nombreusu'";//consulta sql
		$results = mysqli_query($db, $consulta);
		if (mysqli_num_rows($results) == 1) {  //si se encuentra la fila, el usuario y contraseña son correctas
			$user = mysqli_fetch_assoc($results);
			desconectar($db);
			//cambio
			return new transferUser($user["nombreusu"],"",$user["email"],$user["Contador_Peliculas"],$user["user_type"], $user["fotoPerfil"]);
		}
		else {
			desconectar($db);
			return ;//NULL
		}
	}
//--------------------------
	public function imagenPerfil($files)
	{
			
			    $nombre = basename($files["imagen"]["name"]);
			    $nombre_tmp = $files["imagen"]["tmp_name"];
			    $directorio = "./imagenPerfil/$nombre";
			           
			    move_uploaded_file($nombre_tmp, $directorio);
			
			
	}
    //--------------------------
	public function tiempoAcumulado($name)
	{	
		$db = conectar();
		$gastado = 0;
			$consulta = "SELECT Codigo_Peliculas FROM peliculas_vistas WHERE Nombre_Usuario='$name'";
			$results  = mysqli_query($db, $consulta);
			if(mysqli_num_rows($results) != 0){
				while($fila=mysqli_fetch_assoc($results)){
					$code = $fila["Codigo_Peliculas"];
					$queryPeliculas = "SELECT Duracion FROM pelicula WHERE Codigo='$code'";
					$tiempo = mysqli_query($db, $queryPeliculas);
					if(mysqli_num_rows($tiempo) != 0){
						while($fila2=mysqli_fetch_assoc($tiempo)){
							$gastado += $fila2["Duracion"];
						}
					}

				
				}
			}
			desconectar($db);
			return $gastado;
	}

	public static function readAllUsers(){
		$db = conectar();
			$lista= array();
			
			$consul = "SELECT * FROM users ORDER BY nombreusu";
			$query = mysqli_query($db, $consul);
			if ($query){
				while($fila=mysqli_fetch_assoc($query)){
                    $aux = new transferUser($fila["nombreusu"],"",$fila["email"],$fila["Contador_Peliculas"],$fila["user_type"], $fila["fotoPerfil"]);
					array_push($lista,$aux);
				}
                desconectar($db);
				return $lista;
			}
			else {
				desconectar($db);
				return ;//NULL
			}
	}
}
?>