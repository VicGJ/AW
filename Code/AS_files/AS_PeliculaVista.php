<?php 


//session_start();

require_once "DAO_files/DAO_PeliculaVista.php";
include "Transfer_files/Transfer_PeliculaVista.php";

class AS_PeliculaVista{

	public function peliculaVista($idPeli){
		//	var_dump($id);

			$peliDao = new peliculaVistaDAO();
			
			$cierto=$peliDao->readPeliculaVista($idPeli);
			//var_dump($lista);

			return $cierto;

		}

		public function insertarpeliculaVista($idPeli){

			//var_dump($idPeli);
			$peliDao = new peliculaVistaDAO();
			
			$peliDao->createPeliculaFromPeliculasVistas($idPeli);
			//var_dump($lista);
			$string = "pelicula.php?codigo=".$idPeli;
			//var_dump($string);
			return "pelicula.php?codigo=".$idPeli;

		}

		public function mostrarPeliculasUsu(){

		$peliDao = new peliculaVistaDAO();
		$lista = array();
		$lista=$peliDao->readAllPeliculasVistas();
		return $lista;
	}

	public function mostrarPeliculasUsuAjeno($usu){

		$peliDao = new peliculaVistaDAO();
		$lista = array();
		$lista=$peliDao->readAllPeliculasVistasAjeno($usu);
		return $lista;
	}

	public function borrarpeliculaVista($idPeli){

		$peliDao = new peliculaVistaDAO();
		
		$peliDao->deletePeliculaFromPeliculasVistas($idPeli);
	}
	


}

?>