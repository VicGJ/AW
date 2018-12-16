<?php
		session_start(); 
		require_once "AS_files/AS_ListaPeliculas.php";

		if($_POST["opcion"])
		{
			$opcion = $_POST["opcion"];
		}

		switch($opcion)
		{
			//UNA OPCION PARA CADA BOTON
			case "eliminarPelicula":
				$codigoPelicula = $_POST["codePelicula"];
				$codigoLista = $_POST["codeLista"];

				$ASpeliculaLista = new AS_ListaPeliculas();
				$ASpeliculaLista->deletePeliculadeLista($codigoLista, $codigoPelicula);
				break;
			case "seguirLista":
				$codigoLista = $_POST["codeLista"];

				$ASpeliculaLista = new AS_ListaPeliculas();
				$ASpeliculaLista->seguirLista($codigoLista);
				break;
			case "dejarSeguirLista":
				$codigoLista = $_POST["codeLista"];

				$ASpeliculaLista = new AS_ListaPeliculas();
				$ASpeliculaLista->dejarSeguirLista($codigoLista);
				break;
			case "eliminarLista":
				$codigoLista = $_POST["codeLista"];

				$ASpeliculaLista = new AS_ListaPeliculas();
				$ASpeliculaLista->deleteLista($codigoLista);
				//Tengo que hacer que vuelva al perfil
				header('Location: perfil.php');
				break;
			case "cambiarNombre":
				$codigoLista = $_POST["codeLista"];
				$nombre = $_POST["nombre"];

				$ASpeliculaLista = new AS_ListaPeliculas();
				$ASpeliculaLista->updateLista($nombre, $codigoLista);
				break;
		}
?>