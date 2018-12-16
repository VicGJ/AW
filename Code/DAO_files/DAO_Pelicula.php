<?php
	require_once "conexion.php";

	class peliculasDAO{
		//METODOS
		public function createPelicula($TPelicula){
			$db = conectar();
			
			$nombre=$TPelicula->getTitulo();
			$imagen=$TPelicula->getPortada();
			$genero=$TPelicula->getGenero();
			$anio=$TPelicula->getAnio();
			$duracion=$TPelicula->getDuracion();
			$sinopsis=$TPelicula->getSinopsis();

			$consulta="INSERT INTO pelicula (Portada, Titulo, Genero, AnioEstreno, Duracion, Sinopsis) VALUES('$imagen', '$nombre', '$genero', '$anio','$duracion', '$sinopsis')";
			if(mysqli_query($db, $consulta))
			{
				return true;
			}
			else
			{
				return false;
			}
			desconectar($db);
		}
		//--------------------------
		public function numberPeliculas(){
			$db = conectar();
			$consulta="SELECT * FROM pelicula";
			$results=mysqli_query($db, $consulta);
			$numberPelis= mysqli_num_rows($results);
			desconectar($db);

			return $numberPelis;
		}
		//--------------------------
		public function readPelicula($id){
			$db = conectar();
			$consulta = "SELECT * FROM pelicula WHERE codigo='$id'";//consulta sql
			$results = mysqli_query($db, $consulta);
			
			if (mysqli_num_rows($results) == 1) {  
				$pelicula = mysqli_fetch_assoc($results);
				desconectar($db);
				return new transferPelicula($pelicula["Codigo"],$pelicula["Titulo"],$pelicula["Portada"],$pelicula["Genero"],$pelicula["AnioEstreno"],$pelicula["Duracion"],$pelicula["Sinopsis"]);
			}
			else {
				desconectar($db);
				return ;//NULL
			}
		}
		//--------------------------
		public function readPeliculasByTitulo($titulo){
			$db = conectar();
			$aux= "%";
			$lista= array();
			$titulo= $aux.$titulo.$aux;
			//var_dump($titulo);
			$consulta = "SELECT * FROM pelicula WHERE Titulo LIKE'$titulo' ORDER BY Titulo";//consulta sql
			$results = mysqli_query($db, $consulta);
			if (mysqli_num_rows($results) != 0) {  
				//$pelicula = mysqli_fetch_assoc($results);
				while($pelicula=mysqli_fetch_assoc($results)){
				$code = $pelicula["Codigo"];
				
				$aux = array();
				$aux[] = $code;
			
              	$lista += array_fill_keys($aux, $pelicula['Titulo']);
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
		public function readAllPelicula(){
			$db = conectar();
			$lista= array();
			
			$consul = "SELECT Titulo, Codigo FROM pelicula ORDER BY Titulo";
			$query = mysqli_query($db, $consul);
			if (mysqli_num_rows($query) != 0){
				while($fila=mysqli_fetch_assoc($query)){
					$code = $fila["Codigo"];
					
					
					$aux = array();
					$aux[] = $code;
				
	              	$lista += array_fill_keys($aux, $fila['Titulo']);
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
		public function deletePelicula($peliculaTO){
			$db = conectar();
			$codigo = $peliculaTO->getCodigo();

			$consultaComentarios = "DELETE FROM comentarios WHERE pelicula = '$codigo'";
			mysqli_query($db, $consultaComentarios);

			$consultaLista = "SELECT * FROM listas_y_peliculas WHERE codigoPelicula = '$codigo'";
			$resultLista = mysqli_query($db, $consultaLista);

			if (mysqli_num_rows($resultLista) != 0){
				while($fila=mysqli_fetch_assoc($resultLista)){
					$code = $fila["listaPeliculas"];
					$consultaContador = "UPDATE listas_peliculas SET numeroPeliculas = numeroPeliculas - 1 WHERE codigoListas = '$code'";
					mysqli_query($db, $consultaContador);
					$consultaDelet = "DELETE FROM listas_y_peliculas WHERE codigoPelicula = '$codigo' AND listaPeliculas = '$code'";
					mysqli_query($db, $consultaDelet);
				}
			}

			$consultaVista = "SELECT * FROM peliculas_vistas WHERE Codigo_Peliculas = '$codigo'";
			$resultVista = mysqli_query($db, $consultaVista);

			if (mysqli_num_rows($resultVista) != 0){
				while($fila=mysqli_fetch_assoc($resultVista)){
					$usu = $fila["Nombre_Usuario"];
					$consultaContadorUsu = "UPDATE users SET Contador_Peliculas = Contador_Peliculas - 1 WHERE nombreusu = '$usu'";
					mysqli_query($db, $consultaContadorUsu);
					$consultaDeletUsu = "DELETE FROM peliculas_vistas WHERE Codigo_Peliculas = '$codigo' AND Nombre_Usuario = '$usu'";
					mysqli_query($db, $consultaDeletUsu);
				}
			}

			$consultaRetos = "SELECT * FROM retos_y_peliculas WHERE CodigoPelicula = '$codigo'";
			$resultRetos = mysqli_query($db, $consultaRetos);

			if (mysqli_num_rows($resultRetos) != 0){
				while($fila=mysqli_fetch_assoc($resultRetos)){
					$reto = $fila["NombreReto"];
					$consultaContadorReto = "UPDATE retos SET NumeroPeliculas = NumeroPeliculas - 1 WHERE NombreReto = '$reto'";
					mysqli_query($db, $consultaContadorReto);
					$consultaDeletReto = "DELETE FROM retos_y_peliculas WHERE CodigoPelicula = '$codigo' AND NombreReto = '$reto'";
					mysqli_query($db, $consultaDeletReto);
				}
			}
			
			$consultaActores = "DELETE FROM pelicula_actores WHERE id_pelicula = '$codigo'";
			mysqli_query($db, $consultaActores);

			$consultaImagen = "SELECT Portada FROM pelicula WHERE Codigo = '$codigo'";
			$resultsImagen  = mysqli_query($db, $consultaImagen);

			if(mysqli_num_rows($resultsImagen) != 0)
			{
				while($fila=mysqli_fetch_assoc($resultsImagen))
				{
					$imagen = $fila["Portada"];

					unlink('./AW_peliculas/'.$imagen);

				}
				
			}

			$consulta = "DELETE FROM pelicula WHERE Codigo = '$codigo'";
			mysqli_query($db, $consulta);

			return true;

			desconectar($db);
		}

		//--------------------------
		public function updatePelicula($code, $campo, $valor){
			$db = conectar();

		if($campo == "Portada")
		{
			$query = "SELECT Portada FROM pelicula WHERE Codigo = '$code'";
			$results  = mysqli_query($db, $query);

			if(mysqli_num_rows($results) != 0)
			{
				while($fila=mysqli_fetch_assoc($results))
				{
					$imagen = $fila["Portada"];

					unlink('./AW_peliculas/'.$imagen);

				}
					
			}
		}
		
		$consulta="UPDATE pelicula SET ".$campo." = '$valor' WHERE Codigo = '$code'";
		if (mysqli_query($db, $consulta)){
			return true;
		} else{
			return false;
		} 
		desconectar($db);
		}

		public function nameActor($id_actor)
		{
			$db = conectar();
			$consulta = "SELECT * FROM actores_actrices WHERE id='$id_actor'";
			$results = mysqli_query($db, $consulta);

			$actors=mysqli_fetch_assoc($results);
			
			$name= $actors['nombre'];

			return $name;
		}

		public function searchActor($id){
			$db = conectar();
			$lista= array();
			$consulta = "SELECT * FROM pelicula_actores WHERE id_pelicula='$id'";
			$results = mysqli_query($db, $consulta);
			if (mysqli_num_rows($results) != 0) {  
				while($actores=mysqli_fetch_assoc($results))
				{
				$code = $actores["id_actor"];
				//$nombre = utf8_encode ( $actores['Titulo'] );
				
				$aux = array();
				$aux[] = $code;
				$nombre = $this->nameActor($code);
              	$lista += array_fill_keys($aux, $nombre);
			}
				desconectar($db);
				return $lista;
			}
			else {
				desconectar($db);
				return ;//NULL
			}
			desconectar($db);
		}

		//--------------------------
		public function imagenPelicula($files)
		{
			
			    $nombre = basename($files["imagen"]["name"]);
			    $nombre_tmp = $files["imagen"]["tmp_name"];
			    $directorio = "./AW_peliculas/$nombre";
			           
			    move_uploaded_file($nombre_tmp, $directorio);
			
			
		}

	
	}
?>