<?php 


//session_start();

include "DAO_files/DAO_Pelicula.php";
include "Transfer_files/Transfer_Pelicula.php";

class AS_Pelicula{

function mostrarListaPeliculas(){

$peliDao = new peliculasDAO();//se devuelve la lista tal cual
		//$numPeliculas= $peliDao->numberPeliculas();
		//$cont=1;
		
		//$lista = array();
		//while($cont<$numPeliculas){
			//$objPeli= $peliDao->readAllPelicula();//devuelve un transfer
			//mejor que almacene cada objeto, group by

			//array_push($lista, $objPeli);

			//$cont=$cont++;
		//}
		$lista= $peliDao->readAllPelicula();
		return  $lista;

}

	function infoPelicula($id){
	//	var_dump($id);
		$peliDao = new peliculasDAO();
		$objPeli=$peliDao->readPelicula($id);

		return $objPeli;

	}

	function buscaPeliculasByTitulo($titulo){
	//	var_dump($id);

		$peliDao = new peliculasDAO();
		$lista = array();
		$lista=$peliDao->readPeliculasByTitulo($titulo);
		//var_dump($lista);

		return $lista;
	}
	function actoresPelicula($id)
	{
		$peliDao = new peliculasDAO();
		$lista = array();
		$lista=$peliDao->searchActor($id);

		return $lista;
	}
function crearPelicula($pelicula,$portada,$genero,$anio,$duracion,$sinopsis){

	$erroresFormulario = array();
	$errors = 0;

		//comprobamos si algun campo esta vacio y notificamos el error
		if (empty($pelicula)) { 
			$erroresFormulario[] = "Por favor, introduzca la pelicula";
			$errors++;
		}
		if (empty($portada)) { 
			$erroresFormulario[] = "Por favor, introduzca la portada";
			$errors++;
		}
		if (empty($genero)) { 
			$erroresFormulario[] = "Por favor, introduzca el genero";
			$errors++;
			
		}
		if (empty($anio)) { 
			$erroresFormulario[] = "Por favor, introduzca el año";
			$errors++;
		}
		if (empty($duracion)) { 
			$erroresFormulario[] = "Por favor, introduzca la duracion";
			$errors++;
		}
		if (empty($sinopsis)) { 
			$erroresFormulario[] = "Por favor, introduzca la sinopsis";
			$errors++;
			
		}
		

		//si no hay ningun error...
		if ($errors ==  0) {

			$DAO_Pelicula = new peliculasDAO();
			$objPelicula = $DAO_Pelicula->readPeliculasByTitulo($pelicula);

			if ($objPelicula == null) {
				$TPelicula = new transferPelicula("", $pelicula, $portada, $genero, $anio, $duracion, $sinopsis);
				if ($DAO_Pelicula->createPelicula($TPelicula)) {
					return "perfilAdmin.php";
				} else {
					$erroresFormulario[] = "consulta fallida";

					return $erroresFormulario;
				}
				
				
			} else {
				$erroresFormulario[] = "pelicula ya registrada";
				return $erroresFormulario;
			}
			
		}
		else{
			return $erroresFormulario;
		}
		

	


}

function eliminarPelicula($code){

	$erroresFormulario = array();
	$errors = 0;

		//comprobamos si algun campo esta vacio y notificamos el error
		if (empty($code)) { 
			$erroresFormulario[] = "Por favor, introduzca la pelicula";
			$errors++;
		}
		//si no hay ningun error...
		if ($errors ==  0) {

			$DAO_Pelicula = new peliculasDAO();
			$objPelicula = $DAO_Pelicula->readPelicula($code);//devuelve un transfer

			if ($objPelicula != null) {

				if ($DAO_Pelicula->deletePelicula($objPelicula)) {
					return "perfilAdmin.php";
				} else {
					$erroresFormulario[] = "consulta fallida";
					return $erroresFormulario;
				}
				
				
			} else {
				$erroresFormulario[] = "pelicula no existe";
				return $erroresFormulario;
			}
			
		}
		else{
			return $erroresFormulario;
		}
		
}

function modificarPelicula($code,$peliculaNueva,$portada,$genero,$anio,$duracion,$sinopsis){

	$erroresFormulario = array();
	$errors = 0;
    $resultado = true;

		//comprobamos si algun campo esta vacio y notificamos el error
		if (empty($code)) { 
			$erroresFormulario[] = "Por favor, introduzca la pelicula";
			$errors++;
		}
		
		//si no hay ningun error...
		if ($errors ==  0) {

			$DAO_Pelicula = new peliculasDAO();
			$objPelicula = $DAO_Pelicula->readPelicula($code);//devuelve un transfer

			if ($objPelicula != null) {

					if (!empty($peliculaNueva)) { 
						$resultado = $DAO_Pelicula->updatePelicula($objPelicula->getCodigo(),"Titulo",$peliculaNueva);
					}
					if (!empty($portada)) { 
						$resultado = $DAO_Pelicula->updatePelicula($objPelicula->getCodigo(),"Portada",$portada);
					}
					if (!empty($genero)) { 
						$resultado = $DAO_Pelicula->updatePelicula($objPelicula->getCodigo(),"Genero",$genero);
					}
					if (!empty($anio)) { 
						$resultado = $DAO_Pelicula->updatePelicula($objPelicula->getCodigo(),"Año",$anio);
					}
					if (!empty($duracion)) { 
						$resultado = $DAO_Pelicula->updatePelicula($objPelicula->getCodigo(),"Duracion",$duracion);
					}
					if (!empty($sinopsis)) { 
						$resultado = $DAO_Pelicula->updatePelicula($objPelicula->getCodigo(),"Sinopsis",$sinopsis);
					}

					if ($resultado) {
						return "perfilAdmin.php";
					} else {
						$erroresFormulario[] = "consulta fallida";
						return $erroresFormulario;
					}
				
			} else {
				$erroresFormulario[] = "pelicula no existe";
				return $erroresFormulario;
			}
			
		}
		else{
			return $erroresFormulario;
		}
		

	


}

function imagenPelicula($files)
{
	$peliDAO = new peliculasDAO();
	$peliDAO->imagenPelicula($files);
			
}

}

?>