<?php
include "DAO_files/DAO_Ranking.php";

class AS_Ranking{

	function usuariosMasPeliculasVistas(){
		
		$rankingDao = new Ranking_DAO();
		$lista = array();
		$lista = $rankingDao->usuarioMasVistas();
		return $lista;
	}

	//function peliculasMasLargas(){

	//	$rankingDao = new Ranking_DAO();
	//	$lista = array();
	//	$lista = $rankingDao->peliculasMasLargas();
	//	return $lista;
	//}

	function peliculasMasLargas(){
		$rankingDao = new Ranking_DAO();
		$transfer = $rankingDao->peliculasMasLargas();
		return $transfer;
	}

	function peliculasMasVistas(){

		$rankingDao = new Ranking_DAO();
		$lista = array();
		$lista = $rankingDao->peliculasMasVistas();
		return $lista;
	}

	function actoresDeMayorEdad(){

		$rankingDao = new Ranking_DAO();
		$lista = array();
		$lista = $rankingDao->actoresDeMayorEdad();
		return $lista;
	}

	function usuariosConMasListas(){

		$rankingDao = new Ranking_DAO();
		$lista = array();
		$lista = $rankingDao->usuariosConMasListas();
		return $lista;
	}





}
?>