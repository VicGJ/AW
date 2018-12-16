<?php

	class transferPelicula{
		//ATRIBUTOS.
		private $codigo;
		private $titulo;
		private $portada;
		private $anio;
		private $duracion;
		private $genero;
		private $sinopsis;

		//CONSTRUCTORA.
		function __construct($codigo, $titulo, $portada, $genero, $anio, $duracion, $sinopsis){
			$this->codigo = $codigo;
			$this->titulo = $titulo;
			$this->portada = $portada;
			$this->genero = $genero;
			$this->anio = $anio;
			$this->duracion = $duracion;
			$this->sinopsis = $sinopsis;
			
		}
		//METODOS.
		public function getCodigo(){
			return $this->codigo;
		}
		public function getTitulo(){
			return $this->titulo;
		}
		public function getPortada(){
			return $this->portada;
		}
		public function getAnio(){
			return $this->anio;
		}
		public function getDuracion(){
			return $this->duracion;
		}
		public function getGenero(){
			return $this->genero;
		}
		public function getSinopsis(){
			return $this->sinopsis;
		}
		//-------------------
		public function setNombre($codigo){
			$this->codigo = $codigo;
		}
		public function setTitulo($titulo){
			$this->titulo = $titulo;
		}
		public function setPortada($portada){
			$this->portada = $portada;
		}
		public function setAnio($anio){
			$this->anio = $anio;
		}
		public function setDuracion($duracion){
			$this->duracion = $duracion;
		}
		public function setGenero($genero){
			$this->genero = $genero;
		}
		public function setSinopsis($sinopsis){
			$this->sinopsis = $sinopsis;
		}
	}
?>