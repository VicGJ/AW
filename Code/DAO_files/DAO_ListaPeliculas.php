<?php
	require_once "conexion.php";

	class listasPeliculasDAO{
		//METODOS
		function imagenLista($files)
		{
			
			    $nombre = basename($files["imagen"]["name"]);
			    $nombre_tmp = $files["imagen"]["tmp_name"];
			    $directorio = "./listaImagen/$nombre";
			           
			    move_uploaded_file($nombre_tmp, $directorio);
			
			
		}
				

		public function createListaPeliculas($TListaPelicula){
			$db = conectar();

			$titulo=$TListaPelicula->getTitulo();
			$nombreUsu=$TListaPelicula->getNombreCreador();
			$privacidad=$TListaPelicula->getPrivacidad();
			
			$imagen = $TListaPelicula->getImagen();
			if($imagen == NULL)
			{
				$consulta="INSERT INTO listas_peliculas(imagen, privacidad, nombreListas, nombreCreador, numeroPeliculas) VALUES('defecto.jpg', '$privacidad' , '$titulo', '$nombreUsu','0')";
			}
			else
			{
				$consulta="INSERT INTO listas_peliculas(imagen, privacidad, nombreListas, nombreCreador, numeroPeliculas) VALUES('$imagen', '$privacidad' , '$titulo', '$nombreUsu','0')";
			}	
			mysqli_query($db, $consulta);
			desconectar($db);
		}
		
		//--------------------------
		public function readListaPelicula($id){
			$db = conectar();
			$consulta = "SELECT * FROM listas_peliculas WHERE codigoListas='$id'";//consulta sql
			$results = mysqli_query($db, $consulta);
			if (mysqli_num_rows($results) == 1) {  
				$listaPeliculas = mysqli_fetch_assoc($results);
				desconectar($db);
				return new transferListaPeliculas($listaPeliculas["imagen"], $listaPeliculas["nombreListas"],$listaPeliculas["nombreCreador"], $listaPeliculas["privacidad"], $listaPeliculas["codigoListas"], $listaPeliculas["numeroPeliculas"]);
			}
			else {
				desconectar($db);
				return ;//NULL
			}
		}
		//--------------------------
		public function readAllListaPelicula(){ 
			$db = conectar();
			$lista= array();
			
			$consul = "SELECT * FROM listas_peliculas WHERE privacidad = 0 ORDER BY nombreListas";
			$query = mysqli_query($db, $consul);
			if($query){ 
				while($fila=mysqli_fetch_assoc($query)){
					$code = $fila['codigoListas'];
					$nombre = $fila['nombreListas'];
					
					$aux = array();
					$aux[] = $code;
				
	              	$lista += array_fill_keys($aux, $nombre);
				}
			}
			desconectar($db);
			return $lista;
		}
		//--------------------------
		public function readAllListaPeliculaSeguidas(){ 
			$db = conectar();
			$lista= array();

			$idUsuario = $_SESSION['nombreusu'];
			
			$consul = "SELECT * FROM listas_y_usuarios WHERE nombreUsu = '$idUsuario' ";
			$query = mysqli_query($db, $consul);
			if($query){ 
				while($fila=mysqli_fetch_assoc($query)){
					$code = $fila['listasPelis'];
					$nombre = $fila['nombreUsu'];
					
					$aux = array();
					$aux[] = $code;
				
	              	$lista += array_fill_keys($aux, $nombre);
				}
			}
			desconectar($db);
			return $lista;
		}
		//--------------------------
		public function readAllListaPeliculaSeguidasAjeno($usu){ 
			$db = conectar();
			$lista= array();

			$idUsuario = $usu;
			
			$consul = "SELECT * FROM listas_y_usuarios WHERE nombreUsu = '$idUsuario' ";
			$query = mysqli_query($db, $consul);
			if($query){ 
				while($fila=mysqli_fetch_assoc($query)){
					$code = $fila['listasPelis'];
					$nombre = $fila['nombreUsu'];
					
					$aux = array();
					$aux[] = $code;
				
	              	$lista += array_fill_keys($aux, $nombre);
				}
			}
			desconectar($db);
			return $lista;
		}
		//--------------------------
		public function deleteLista($codigo){
			$db = conectar();

			$query = "SELECT imagen FROM listas_peliculas WHERE codigoListas = '$codigo'";
			$results  = mysqli_query($db, $query);

			if(mysqli_num_rows($results) != 0)
			{
				while($fila=mysqli_fetch_assoc($results))
				{
					$imagen = $fila["imagen"];

					unlink('./listaImagen/'.$imagen);

				}
				
			}

			$consulta = "DELETE FROM listas_peliculas WHERE codigoListas = '$codigo'";
			mysqli_query($db, $consulta);
			$consulta2 = "DELETE FROM listas_y_usuarios WHERE listasPelis = '$codigo'";
			mysqli_query($db, $consulta2);

			$consulta3 = "DELETE FROM listas_y_peliculas WHERE listaPeliculas = '$codigo'";
			mysqli_query($db, $consulta3);

			desconectar($db);
		}
		//--------------------------
		public function updateLista($nombre, $codigoListas){
			$db = conectar();
			$consulta = "UPDATE listas_peliculas SET nombreListas = '$nombre' WHERE codigoListas = '$codigoListas'";
			mysqli_query($db, $consulta);
			desconectar($db);
		}
		//---------------------
		public function insertPeliculaLista($codigoListas, $codigoPelicula){
			$db = conectar();
			

			$consulta = "INSERT INTO listas_y_peliculas VALUES ('$codigoListas', '$codigoPelicula')";
			mysqli_query($db, $consulta);

			$consulta = "UPDATE listas_peliculas SET numeroPeliculas = numeroPeliculas + 1 WHERE codigoListas = '$codigoListas'";
			mysqli_query($db, $consulta);

			desconectar($db);
		}

		public function obtenerListas(){
			$db = conectar();
			$lista = array();
			$idUsuario = $_SESSION['nombreusu'];
			$consulta = "SELECT codigoListas FROM listas_peliculas WHERE nombreCreador='$idUsuario'";
			$results  = mysqli_query($db, $consulta);
			if(mysqli_num_rows($results) != 0){
				while($fila=mysqli_fetch_assoc($results)){
					$code = $fila["codigoListas"];
					$queryPeliculas = "SELECT nombreListas FROM listas_peliculas WHERE codigoListas='$code'";
					$resultsPeliculas = mysqli_query($db, $queryPeliculas);
					$filaDef=mysqli_fetch_assoc($resultsPeliculas);
					$nombre = $filaDef['nombreListas'];
					
					$aux = array();
					$aux[] = $code;
	              	$lista += array_fill_keys($aux, $nombre);
				}
			}
			desconectar($db);
			return $lista;
		}

		public function obtenerListasAjeno($usu){
			$db = conectar();
			$lista = array();
			$idUsuario = $usu;
			$consulta = "SELECT codigoListas FROM listas_peliculas WHERE nombreCreador='$idUsuario'";
			$results  = mysqli_query($db, $consulta);
			if(mysqli_num_rows($results) != 0){
				while($fila=mysqli_fetch_assoc($results)){
					$code = $fila["codigoListas"];
					$queryPeliculas = "SELECT nombreListas FROM listas_peliculas WHERE codigoListas='$code'";
					$resultsPeliculas = mysqli_query($db, $queryPeliculas);
					$filaDef=mysqli_fetch_assoc($resultsPeliculas);
					$nombre = $filaDef['nombreListas'];
					
					$aux = array();
					$aux[] = $code;
	              	$lista += array_fill_keys($aux, $nombre);
				}
			}
			desconectar($db);
			return $lista;
		}

		function pelisLista($idLista)
		{
			$db = conectar();
			$lista= array();
			
			$consul = "SELECT codigoPelicula FROM listas_y_peliculas WHERE listaPeliculas = '$idLista'";
			$query = mysqli_query($db, $consul);
			if($query){
				$aux2 = 0;
				while($fila=mysqli_fetch_assoc($query)){
					$code = $fila["codigoPelicula"];
					
					$aux = array();
					$aux[] = $aux2;
					$aux2++;
	              	$lista += array_fill_keys($aux, $code);
				}
			}
			desconectar($db);
			return $lista;
		}

		public function yaInsertada($id, $codePeli)
		{
			$db = conectar();
			$cierto = false;

			$consulta = "SELECT codigoPelicula FROM listas_y_peliculas WHERE listaPeliculas = '$id' AND codigoPelicula = '$codePeli'";
			$query = mysqli_query($db, $consulta);

			if(mysqli_num_rows($query) != 0)
			{
				$cierto = true;
			}

			desconectar($db);
			return $cierto;
		}

		public function deletePeliculadeLista($codigoLista, $codigoPeli)
		{
			$db = conectar();
			
			$consulta = "DELETE FROM listas_y_peliculas WHERE listaPeliculas = '$codigoLista' AND codigoPelicula = '$codigoPeli' ";
			mysqli_query($db, $consulta);

			$consulta = "UPDATE listas_peliculas SET numeroPeliculas = numeroPeliculas - 1 WHERE codigoListas = '$codigoLista'";
			mysqli_query($db, $consulta);

			desconectar($db);
		}

		public function yaSeguida($codigoLista)
		{
			$db = conectar();
			$cierto = false;

			$idUsuario = $_SESSION['nombreusu'];

			$consulta = "SELECT * FROM listas_y_usuarios WHERE listasPelis = '$codigoLista' AND nombreUsu = '$idUsuario'";
			$query = mysqli_query($db, $consulta);

			if(mysqli_num_rows($query) != 0)
			{
				$cierto = true;
			}

			desconectar($db);
			return $cierto;
		}

		public function eresCreador($codigoLista)
		{
			$db = conectar();
			$cierto = false;

			$idUsuario = $_SESSION['nombreusu'];

			$consulta = "SELECT * FROM listas_peliculas WHERE codigoListas = '$codigoLista' AND nombreCreador = '$idUsuario'";
			$query = mysqli_query($db, $consulta);

			if(mysqli_num_rows($query) != 0)
			{
				$cierto = true;
			}

			desconectar($db);
			return $cierto;
		}

		public function dejarSeguirLista($codigoLista)
		{
			$db = conectar();
			
			$idUsuario = $_SESSION['nombreusu'];

			$consulta = "DELETE FROM listas_y_usuarios WHERE listasPelis = '$codigoLista' AND nombreUsu = '$idUsuario'";
			mysqli_query($db, $consulta);

			desconectar($db);
		}

		public function seguirLista($codigoLista)
		{
			$db = conectar();

			$idUsuario = $_SESSION['nombreusu'];

			$consulta = "INSERT INTO listas_y_usuarios VALUES ('$idUsuario', '$codigoLista')";
			mysqli_query($db, $consulta);

			desconectar($db);
		}


	}
?>