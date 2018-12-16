<?php 


//session_start();

require_once "DAO_files/DAO_Comentarios.php";
require_once "Transfer_files/Transfer_Comentarios.php";

class AS_Comentarios{

function comentarios($id, $codeComen){

	$comenDao = new comentariosDAO();
	$objComen=$comenDao->readComentarios($id, $codeComen);

	return $objComen;

	}

function mostrarComentarios(){

	$comenDao = new comentariosDAO();
		
	$lista= $comenDao->readAllComentarios();
	return  $lista;

}

function comentar($comentario, $valoracion, $code){

	$comenDao = new comentariosDAO();
		
	$comenDao->comentar($comentario, $valoracion, $code);
	return "pelicula.php?codigo=$code";
}

function hasComentado($idPeli){

	$comenDao = new comentariosDAO();
		
	return $comenDao->hasComentado($idPeli);
}

}

?>