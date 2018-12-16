<?php

	class transferPeliculasVistas{
		//ATRIBUTOS.
		private $codigo;
		private $nombreusu;
		//CONSTRUCTORA.
		function __construct($nombreusu, $codigo){
			$this->codigo = $codigo;
			$this->nombreusu = $nombreusu;
		}
		//METODOS.
		public function getCodigo(){
			return $this->codigo;
		}
		//-------------------
		public function getNombre(){
			return $this->nomberusu;
		}
		//-------------------
		public function setNombre($nombreusu){
			$this->nombreusu = $nombreusu;
		}
		//-------------------
		public function setCodigo($codigo){
			$this->codigo = $codigo;
		}
	}
?>