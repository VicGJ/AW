<?php 
	//session_start();

	require_once "DAO_files/DAO_ListaPeliculas.php";
	require_once "Transfer_files/Transfer_ListaPeliculas.php";

	class AS_ListaPeliculas{

		public function crearListaPeliculas($nombreLista, $imagen, $valor){

			$listaPeliDao = new listasPeliculasDAO();
			$TPeliDao = new transferListaPeliculas($imagen, $nombreLista, $_SESSION["nombreusu"], $valor, '', '0');
			$listaPeliDao->createListaPeliculas($TPeliDao);
		
			return  "listaPeliculas.php";
		}

		public function imagenLista($files)
		{
			$listaPeliDao = new listasPeliculasDAO();
			$listaPeliDao->imagenLista($files);
			
		}

		function mostrarLista($idLista)
		{
			$peliDao = new listasPeliculasDAO();
			$lista = array();
			$lista=$peliDao->readListaPelicula($idLista);

			return $lista;
		}

		function mostrarListas()
		{
			$listaDao = new listasPeliculasDAO();
			$lista = array();
			$lista=$listaDao->readAllListaPelicula();

			return $lista;
		}

		function mostrarListasSeguidas()
		{
			$listaDao = new listasPeliculasDAO();
			$lista = array();
			$lista=$listaDao->readAllListaPeliculaSeguidas();

			return $lista;
		}

		function mostrarListasSeguidasAjeno($usu)
		{
			$listaDao = new listasPeliculasDAO();
			$lista = array();
			$lista=$listaDao->readAllListaPeliculaSeguidasAjeno($usu);

			return $lista;
		}

		function pelisLista($idLista)
		{
			$listaPeliDao = new listasPeliculasDAO();
			$lista = array();
			$lista = $listaPeliDao->pelisLista($idLista);
			return $lista;

		}

		function obtenerListas()
		{
			$listaPeliDao = new listasPeliculasDAO();
			$lista = array();
			$lista = $listaPeliDao->obtenerListas();

			return $lista;
		}

		function obtenerListasAjeno($usu)
		{
			$listaPeliDao = new listasPeliculasDAO();
			$lista = array();
			$lista = $listaPeliDao->obtenerListasAjeno($usu);

			return $lista;
		}

		public function agregarPelicula($codeLista, $codePelicula)
		{
			$listaPeliDao = new listasPeliculasDAO();
			$listaPeliDao->insertPeliculaLista($codeLista, $codePelicula);
			return "pelicula.php?codigo=$codePelicula";
		}


		public function infoLista($id)
		{
			$listaDao = new listasPeliculasDAO();
			$objLista=$listaDao->readListaPelicula($id);

			return $objLista;
		}

		public function yaInsertada($id, $codePeli)
		{
			$listaDao = new listasPeliculasDAO();
			return $listaDao->yaInsertada($id, $codePeli);
		}

		public function updateLista($nombre, $codigoLista)
		{
			$listaDao = new listasPeliculasDAO();
			return $listaDao->updateLista($nombre, $codigoLista);
		}

		public function deleteLista($codigoLista)
		{
			$listaDao = new listasPeliculasDAO();
			return $listaDao->deleteLista($codigoLista);
		}

		public function deletePeliculadeLista($codigoLista, $codigoPeli)
		{
			$listaDao = new listasPeliculasDAO();
			return $listaDao->deletePeliculadeLista($codigoLista, $codigoPeli);
		}

		public function yaSeguida($codigoLista)
		{
			$listaDao = new listasPeliculasDAO();
			return $listaDao->yaSeguida($codigoLista);
		}

		public function eresCreador($codigoLista)
		{
			$listaDao = new listasPeliculasDAO();
			return $listaDao->eresCreador($codigoLista);
		}

		public function seguirLista($codigoLista)
		{
			$listaDao = new listasPeliculasDAO();
			return $listaDao->seguirLista($codigoLista);
		}
		 
		public function dejarSeguirLista($codigoLista)
		{
			$listaDao = new listasPeliculasDAO();
			return $listaDao->dejarSeguirLista($codigoLista);
		}
		 
		 
	}
?>