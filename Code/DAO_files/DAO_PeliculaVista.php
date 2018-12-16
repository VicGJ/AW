<?php
	require_once "conexion.php";
	class peliculaVistaDAO{
		//METODOS
		public function readAllPeliculasVistas(){
			$db = conectar();
			$lista = array();
			$idUsuario = $_SESSION['nombreusu'];
			$consulta = "SELECT Codigo_Peliculas FROM peliculas_vistas WHERE Nombre_Usuario='$idUsuario'";
			$results  = mysqli_query($db, $consulta);
			if(mysqli_num_rows($results) != 0){
				while($fila=mysqli_fetch_assoc($results)){
					$code = $fila["Codigo_Peliculas"];
					$queryPeliculas = "SELECT Titulo FROM pelicula WHERE Codigo='$code'";
					$resultsPeliculas = mysqli_query($db, $queryPeliculas);
					$filaDef=mysqli_fetch_assoc($resultsPeliculas);
					$nombre = $filaDef['Titulo'];
					
					$aux = array();
					$aux[] = $code;
	              	$lista += array_fill_keys($aux, $nombre);
				}
			}
			desconectar($db);
			return $lista;
		}
		//------------------------------
		public function readAllPeliculasVistasAjeno($usu){
			$db = conectar();
			$lista = array();
			$idUsuario = $usu;
			$consulta = "SELECT Codigo_Peliculas FROM peliculas_vistas WHERE Nombre_Usuario='$idUsuario'";
			$results  = mysqli_query($db, $consulta);
			if(mysqli_num_rows($results) != 0){
				while($fila=mysqli_fetch_assoc($results)){
					$code = $fila["Codigo_Peliculas"];
					$queryPeliculas = "SELECT Titulo FROM pelicula WHERE Codigo='$code'";
					$resultsPeliculas = mysqli_query($db, $queryPeliculas);
					$filaDef=mysqli_fetch_assoc($resultsPeliculas);
					$nombre = $filaDef['Titulo'];
					
					$aux = array();
					$aux[] = $code;
	              	$lista += array_fill_keys($aux, $nombre);
				}
			}
			desconectar($db);
			return $lista;
		}
		//--------------------------
		public function deletePeliculaFromPeliculasVistas($idPeli){
			$db = conectar();
			$idUsu = $_SESSION['nombreusu'];
			$consulta = "DELETE FROM peliculas_vistas WHERE Codigo_Peliculas = '$idPeli' AND Nombre_Usuario ='$idUsu'";
			mysqli_query($db, $consulta);
			$consulta2 = "UPDATE users SET Contador_Peliculas = Contador_Peliculas - 1 WHERE nombreusu = '$idUsu'";
			mysqli_query($db, $consulta2);
			desconectar($db);
		}
		
		public function createPeliculaFromPeliculasVistas($idPeli){
		$db = conectar();
		$idUsu = $_SESSION['nombreusu'];
		$consulta = "INSERT INTO peliculas_vistas(Nombre_Usuario, Codigo_Peliculas) VALUES ('$idUsu', '$idPeli')";
		mysqli_query($db, $consulta);
		$consulta2 = "UPDATE users SET Contador_Peliculas = Contador_Peliculas + 1 WHERE nombreusu = '$idUsu'";
		mysqli_query($db, $consulta2);
		desconectar($db);
	}

		public function readPeliculaVista($idPeli){
			$db = conectar();
			$idUsu = $_SESSION['nombreusu'];
			$queryPeliculaVista = "SELECT * FROM peliculas_vistas WHERE Nombre_Usuario='$idUsu' AND Codigo_Peliculas='$idPeli' ";
			$results = mysqli_query($db,$queryPeliculaVista);

				if (mysqli_num_rows($results) == 0) { //llamar a crear
					//createPeliculaFromPeliculasVistas($nombreusu,$codigo);
					$cierto=false;
				}
				else{//ya se ha visto
					$cierto=true;
				}

			desconectar($db);
			return $cierto;
		}

	}
?>