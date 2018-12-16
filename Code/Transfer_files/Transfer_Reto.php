<?php

	class transferReto{
		//ATRIBUTOS.
		private $nombre;
		private $numero;
		private $descripcion;
		

		//CONSTRUCTORA.
		function __construct($nombre,$numero,$descripcion){
			$this->nombre = $nombre;
			$this->numero = $numero;
			$this->descripcion = $descripcion;
			
			
		}
		//METODOS.
		public function getNombre(){
			return $this->nombre;
		}
		public function getNumero(){
			return $this->numero;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
		
		//-------------------
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		public function setNumero($numero){
			$this->numero = $numero;
		}
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
	
	
	}
?>