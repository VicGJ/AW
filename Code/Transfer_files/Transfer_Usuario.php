<?php
class transferUser{
	//ATRIBUTOS.
	private $nombre;
	private $password;
	private $email;
	private $contPelis;
	private $userType;
	private $fotoPerfil;
	//CONSTRUCTORA.
	function __construct($nombre, $password, $email, $contPelisVistas, $userType, $fotoPerfil){
		$this->nombre = $nombre;
		$this->password = $password;
		$this->email = $email;
		$this->contPelisVistas = $contPelisVistas;
		$this->userType = $userType;
		$this->fotoPerfil = $fotoPerfil;
	}
	//METODOS.
	public function getNombre(){
		return $this->nombre;
	}
	//-------------------
	public function getPassword(){
		return $this->password;
	}
	//-------------------
	public function getEmail(){
		return $this->email;
	}
	//-------------------
	public function getContPelisVistas(){
		return $this->contPelisVistas;
	}
	//-------------------
	public function getUserType(){
		return $this->userType;
	}
	//-------------------
	public function getImagenPerfil(){
		return $this->fotoPerfil;
	}
	//-------------------
	public function setNombre($nombre){
		$this->nombre = $nombre;
	}
	//-------------------
	public function setPassword($password){
		$this->password = $password;
	}
	//-------------------
	public function setEmail($email){
		$this->email = $email;
	}
	//-------------------
	public function setContPelisVistas($contPelisVistas){
		$this->contPelisVistas = $contPelisVistas;
	}
		//-------------------
	public function setUserType($userType){
		$this->userType = $userType;
	}

	//-------------------
	public function setImagenPerfil($fotoPerfil){
		$this->fotoPerfil = $fotoPerfil;
	}




	//DESTRUCTORA.???
}

?>