<?php

	class transferListaPeliculas{
		//ATRIBUTOS.
		private $codigo;
		private $titulo;
		private $nombreCreador;
		private $privacidad;
		private $imagen;
		private $contador;

		//CONSTRUCTORA.
		/*function __construct($imagen, $titulo, $nombreCreador, $privacidad){
			$this->imagen = $imagen;
			$this->titulo = $titulo;
			$this->nombreCreador = $nombreCreador;
			$this->privacidad = $privacidad;
		}*/
		function __construct($imagen, $titulo, $nombreCreador, $privacidad, $codigo, $contador){
			$this->imagen = $imagen;
			$this->titulo = $titulo;
			$this->nombreCreador = $nombreCreador;
			$this->privacidad = $privacidad;
			$this->codigo = $codigo;
			$this->contador = $contador;
		}
		function __construct1($imagen, $codigo, $titulo, $nombreCreador){
			$this->imagen = $imagen;
			$this->codigo = $codigo;
			$this->titulo = $titulo;
			$this->nombreCreador = $nombreCreador;
		}

		//METODOS.
		public function getImagen(){
			return $this->imagen;
		}
		//-------------------
		public function getPrivacidad(){
			return $this->privacidad;
		}
		//-------------------
		public function getCodigo(){
			return $this->codigo;
		}
		//-------------------
		public function getTitulo(){
			return $this->titulo;
		}
		//-------------------
		public function getNombreCreador(){
			return $this->nombreCreador;
		}

		//-------------------
		public function getContador(){
			return $this->contador;
		}
		//--------------------
		public function setImagen($codigo){
			$this->imagen = $imagen;
		}

		//--------------------
		public function setPrivacidad($privacidad){
			$this->privacidad = $privacidad;
		}

		//-------------------
		public function setCodigo($codigo){
			$this->codigo = $codigo;
		}
		//-------------------
		public function setTitulo($titulo){
			$this->titulo = $titulo;
		}
		//-------------------
		public function setNombreCreador($nombreCreador){
			$this->nombreCreador = $nombreCreador;
		}
		//-------------------
		public function setContador($nombreCreador){
			$this->contador = $contador;
		}
	}
?>