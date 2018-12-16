<?php
		session_start(); 
		require_once "AS_files/AS_Usuario.php";
        require_once "AS_files/AS_Pelicula.php";
        require_once "AS_files/AS_Reto.php";
    
		if($_POST["opcion"])
		{
			$opcion = $_POST["opcion"];
		}

		switch($opcion)
		{
			//UNA OPCION PARA CADA BOTON
			case "eliminarUsuario":
				$ASusuario = new AS_Usuario();
                $ASusuario->deleteUsuario($_POST["nombreusu"]);
				break;

            case "eliminarPelicula":
				$codigoPelicula = $_POST["codePelicula"];
				$AS_Pelicula = new AS_Pelicula();
				$AS_Pelicula->eliminarPelicula($codigoPelicula);
				break;

            case "eliminarReto":
                $nombreReto = $_POST["nombreReto"];
                $AS_Reto = new AS_Reto();
                $AS_Reto->eliminarReto($nombreReto);
                
                break;

            case "insertaPeliculaReto":
                $nombreReto = $_POST["nombreReto"];
                $idPeli = $_POST["codePelicula"];
                $AS_Reto = new AS_Reto();
                $AS_Reto->insertarPeliReto($nombreReto, $idPeli);
                break;

            case "eliminarPeliculaReto":
                $nombreReto = $_POST["nombreReto"];
                $idPeli = $_POST["codePelicula"];
                $AS_Reto = new AS_Reto();
                $AS_Reto->eliminarPeliReto($nombreReto, $idPeli);
                break;
		}
?>