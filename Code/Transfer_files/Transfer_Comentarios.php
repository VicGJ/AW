<?php

	class transferComentarios{
		//ATRIBUTOS.
		private $codigo;
		private $pelicula;
		private $usuario;
		private $valoracion;
		private $comentario;
		

		//CONSTRUCTORA.
		function __construct($codigo, $pelicula, $usuario, $valoracion, $comentario){
			$this->codigo = $codigo;
			$this->pelicula = $pelicula;
			$this->usuario = $usuario;
			$this->valoracion = $valoracion;
			$this->comentario = $comentario;

		}
		//METODOS.
		public function getCodigo(){
			return $this->codigo;
		}
		public function getPelicula(){
			return $this->pelicula;
		}
		public function getUsuario(){
			return $this->usuario;
		}
		public function getValoracion(){
			return $this->valoracion;
		}
		public function getComentario(){
			return $this->comentario;
		}
		//-------------------
		public function setCodigo($codigo){
			$this->codigo = $codigo;
		}
		public function setPelicula($pelicula){
			$this->pelicula = $pelicula;
		}
		public function setUsuario($usuario){
			$this->usuario = $usuario;
		}
		public function setValoracion($valoracion){
			$this->valoracion = $valoracion;
		}
		public function setComentario($comentario){
			$this->comentario = $comentario;
		}
	}
?>