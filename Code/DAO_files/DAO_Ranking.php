<?php
require_once "conexion.php";

class Ranking_DAO{

	public function usuarioMasVistas(){
		$lista = array(); //Si lo quito peta y no entiendo porque xDDDD
		$db = conectar();
		$consulta = "SELECT nombreusu, Contador_Peliculas FROM users GROUP BY nombreusu ORDER BY MAX(Contador_Peliculas) DESC LIMIT 5";
		$query = mysqli_query($db, $consulta);
		if($query){
				while($var=mysqli_fetch_assoc($query)){
				$code = $var["nombreusu"];
				$aux = array();
				$aux[] = $code;
              	$lista += array_fill_keys($aux, $var['Contador_Peliculas']);
			}
		}
		desconectar($db);
		return $lista;
	}

	public function peliculasMasLargas(){
		$lista = array(); //Si lo quito peta y no entiendo porque xDDDD
		$db = conectar();
		$consulta = "SELECT Codigo, Duracion FROM pelicula ORDER BY Duracion DESC LIMIT 10"; //REVISAR ESTA CONSULTA, DIFERENCIA ENTRE 2 Y 3 CIFRAS
		$query = mysqli_query($db, $consulta);
		if($query){
			while($var=mysqli_fetch_assoc($query)){
				$code = $var["Codigo"];
				$aux = array();
				$aux[] = $code;
            	$lista += array_fill_keys($aux, $var['Duracion']);
			}
		}
		desconectar($db);
		return $lista;
	}

	

	public function peliculasMasVistas(){
		$lista = array(); //Si lo quito peta y no entiendo porque xDDDD
		$db = conectar();
		$consulta = "SELECT COUNT(Codigo_Peliculas) AS valorNuevo, Codigo_Peliculas FROM peliculas_vistas GROUP BY Codigo_Peliculas ORDER BY COUNT(Codigo_Peliculas) DESC LIMIT 10";
		$query = mysqli_query($db, $consulta); 
		if($query){
			while($var = mysqli_fetch_assoc($query)){
				$code = $var["Codigo_Peliculas"];
				$aux = array();
				$aux[] = $code;
              	$lista += array_fill_keys($aux, $var["valorNuevo"]);
			}
		}
		desconectar($db);
		return $lista;
	}

	public function actoresDeMayorEdad(){
		$lista = array(); //Si lo quito peta y no entiendo porque xDDDD
		$db = conectar();
		$consulta = "SELECT nombre, edad FROM actores_actrices ORDER BY edad DESC LIMIT 15";
		$query = mysqli_query($db, $consulta); 
		if($query){
			while($var = mysqli_fetch_assoc($query)){
				$code = $var["nombre"];
				$aux = array();
				$aux[] = $code;
              	$lista += array_fill_keys($aux, $var['edad']);
			}
		}
		desconectar($db);
		return $lista;
	}

	public function usuariosConMasListas(){
		$lista = array(); //Si lo quito peta y no entiendo porque xDDDD
		$db = conectar();
		$consulta = "SELECT nombreCreador, COUNT(nombreCreador) AS valorNuevo FROM listas_peliculas GROUP BY nombreCreador ORDER BY COUNT(nombreCreador) DESC";
		$query = mysqli_query($db, $consulta); 
		if($query){
			while($var = mysqli_fetch_assoc($query)){
				$code = $var["nombreCreador"];
				$aux = array();
				$aux[] = $code;
              	$lista += array_fill_keys($aux, $var["valorNuevo"]);
			}
		}
		desconectar($db);
		return $lista;
	}



}


?>
