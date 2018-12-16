<?php
	require_once "conexion.php";

	class comentariosDAO{
		//METODOS
		public function readComentarios($id, $codeComen){
			$db = conectar();
			$consulta = "SELECT * FROM comentarios WHERE pelicula='$id' AND codigo = '$codeComen'";//consulta sql
			$results = mysqli_query($db, $consulta);
			
			if (mysqli_num_rows($results) == 1) {  //TENGO QUE DEVOLVER ARRAY DE COMENTARIOS; UN TRANFERS ARRAY O ALGO ASI
				$comentario = mysqli_fetch_assoc($results);
				desconectar($db);
				return new transferComentarios($comentario["codigo"],$comentario["pelicula"],$comentario["usuario"],$comentario["valoracion"],$comentario["comentario"]);
			}
			else {
				desconectar($db);
				return ;//NULL
			}
		}

		//--------------------------
		public function readAllComentarios(){
			$db = conectar();
			$lista= array();
			
			$consul = "SELECT codigo, pelicula FROM comentarios";
			$query = mysqli_query($db, $consul);
			if($query){
				while($fila=mysqli_fetch_assoc($query)){
					$code = $fila["codigo"];
					
					
					$aux = array();
					$aux[] = $code;
				
	              	$lista += array_fill_keys($aux, $fila['pelicula']);
				}
			}
			desconectar($db);
			return $lista;
		}
		//--------------------------
		public function comentar($comentario, $estrellas, $code){
			$db = conectar();
			
			$idUsuario = $_SESSION['nombreusu'];
			
        	
			$consul = "INSERT INTO comentarios(pelicula, usuario, valoracion, comentario) VALUES ('$code', '$idUsuario', '$estrellas', '$comentario')";
			
			mysqli_query($db, $consul);
			
			desconectar($db);
		}
		//--------------------------
		public function hasComentado($idPeli){
			$db = conectar();
			$idUsu = $_SESSION['nombreusu'];

			$query = "SELECT * FROM comentarios WHERE usuario='$idUsu' AND pelicula='$idPeli'";

			$results = mysqli_query($db,$query);

				if (mysqli_num_rows($results) == 1) {
					
					$cierto=true;
				}
				else{
					$cierto=false;
				}

			desconectar($db);
			return $cierto;
		}
	
	}
?>