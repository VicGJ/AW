<?php 
	session_start();
	include "AS_files/AS_Pelicula.php";
    include "AS_files/AS_Usuario.php";

	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Lista Peliculas</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/estilo.css" />
	</head>
	<body>
		<div id="contenedor">
			<?php
			require("comun/cabecera.php");
			?>
			<div id="contenidoPeliculasAux">
			
				<?php 
					echo '<h2> Resultados de la busqueda</h2>';
					echo '<div id="contenidoPeliculas">';
                    echo '<h3> Resultado de peliculas</h3>';
					$aBuscar = ($_POST['aBuscar']);
                    
					$ASPelicula = new AS_Pelicula();
					$lista = $ASPelicula->buscaPeliculasByTitulo($aBuscar);
					
					if(!empty($lista)){
						foreach ($lista as $code => $name) {
							$objPeli = $ASPelicula->infoPelicula($code);
							echo '<div class="pelicula">';
	                    	echo  '<a href= "pelicula.php?codigo='.$code.'"><img src="AW_peliculas/'.$objPeli->getPortada().'"  width=215px height=290px /></a>';
	                    	echo '<h3>'.$name.'</h3>';
	     					echo' </div>';
						}
					}
					else{
						echo '<h3>No se ha encontrado ninguna coincidencia</h3>';
					}
                    
                    
                echo '<h3> Resultado de usuarios</h3>';
                    $ASusu = new AS_Usuario();
					$lista = $ASusu->buscaUsuario($aBuscar);
                if(!empty($lista)){
                    foreach ($lista as $usu) {//no devuelvo objetos. REVISAR
                        $obUsu = $ASusu->infoUsu($usu);

                       echo '<div class="pelicula">';
                            echo  '<a href= "perfilAjeno.php?codigo='.$usu.'"><img src="imagenPerfil/'.$obUsu->getImagenPerfil().'"  width=215px height=290px /></a>';
                            echo '<h3>'.$usu.'</h3>';
                            echo' </div>';
                    }
                    }
					else{
						echo '<h3>No se ha encontrado ninguna coincidencia</h3>';
					}
				?>
			
			</div>


			<?php
				require("comun/pie.php");
			?>
		</div>
		
		
	</body>
</html>