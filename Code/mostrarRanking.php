<?php
session_start();
include "AS_files/AS_Ranking.php";
require_once "AS_files/AS_Pelicula.php";
require_once "AS_files/AS_Usuario.php";

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body>
	<div id="contenedor">
	<?php
	require("comun/cabecera.php");
	?>

	<div id = "contenidoRankingAux">
	<?php
		$codigo = $_REQUEST["codigo"];
		$as = new AS_Ranking();
		$ASUsu = new AS_Usuario();
		echo '<div id = "contenidoRanking">';
		$number=1;
		switch ($codigo) {
			case '01':
				$lista = $as->usuariosMasPeliculasVistas();
				echo '<h2>Usuarios con más películas vistas.</h2>';
				
				foreach ($lista as $nombreusu => $Contador_Peliculas){
					$objUsu = $ASUsu->infoUsu($nombreusu);
					echo '<div class="rankingAux">';
					echo '<div class="ranking">';
						if($number==1)echo '<img src="imagenes/number1.png"  width=60px height=60px />';
						else if($number==2)echo '<img src="imagenes/number2.png"  width=60px height=60px />';
						else if($number==3)echo '<img src="imagenes/number3.png"  width=60px height=60px />';
						else echo '<img src="imagenes/line.png"  width=60px height=60px />';
					
						if(isset($_SESSION['nombreusu']) && $nombreusu == $_SESSION['nombreusu'])
						{
							echo '<p> <a href= "perfil.php?codigo='.$nombreusu.'"><img src="imagenPerfil/'.$objUsu->getImagenPerfil().'"  width=60px height=60px />'.$nombreusu.'</a></p>';
								echo '</div>';
							echo '<div class=columnaExtra>';
							echo 'Numero de Peliculas Vistas: ' .$Contador_Peliculas;
							echo '</div>';
						}
						else{
					 	echo '<p> <a href= "perfilAjeno.php?codigo='.$nombreusu.'"><img src="imagenPerfil/'.$objUsu->getImagenPerfil().'"  width=60px height=60px />'.$nombreusu.'</a></p>';
					 		echo '</div>';
							echo '<div class=columnaExtra>';
							echo 'Numero de Peliculas Vistas: ' .$Contador_Peliculas;
							echo '</div>';
					}
					$number++;
					
						echo '</div>';
				}
				break;
			
			case '02':
				$lista = $as->peliculasMasLargas();
				echo '<h2>Películas de mayor duración.</h2>';
				
				foreach ($lista as $code => $Duracion){
					$ASpelicula = new AS_Pelicula();
					$objPeli=$ASpelicula->infoPelicula($code);
					echo '<div class="rankingAux">';
					echo '<div class="ranking">';
						if($number==1)echo '<img src="imagenes/number1.png"  width=60px height=60px />';
						else if($number==2)echo '<img src="imagenes/number2.png"  width=60px height=60px />';
						else if($number==3)echo '<img src="imagenes/number3.png"  width=60px height=60px />';
						else echo '<img src="imagenes/line.png"  width=60px height=60px />';

					
					 echo '<p> <a href= "pelicula.php?codigo='.$code.'"> '.$objPeli->getTitulo().' </a></p>';
					  echo '</div>';
					 echo '<div class=columnaExtra>';
					 echo 'Duracion: ' .$Duracion.' mins.';
					 echo '</div>';
					 $number++;
					echo '</div>';
				}
				
				
				break;

			case '03':
			$lista = $as->peliculasMasVistas();
			echo '<h2>Películas más vistas.</h2>';
			foreach ($lista as $Codigo_Peliculas => $var){
				echo '<div class="rankingAux">';
				echo '<div class="ranking">';
						if($number==1)echo '<img src="imagenes/number1.png"  width=60px height=60px />';
						else if($number==2)echo '<img src="imagenes/number2.png"  width=60px height=60px />';
						else if($number==3)echo '<img src="imagenes/number3.png"  width=60px height=60px />';
						else echo '<img src="imagenes/line.png"  width=60px height=60px />';
				$ASpelicula = new AS_Pelicula();
					$objPeli=$ASpelicula->infoPelicula($Codigo_Peliculas);
					echo '<p> <a href= "pelicula.php?codigo='.$objPeli->getCodigo().'"> '.$objPeli->getTitulo().'</a></p>';
					 //echo '<p> '.$objPeli->getTitulo();
					 echo '</div>';
					  echo '<div class=columnaExtra>';
					 echo ' Veces Vista : ' .$var.'</p>';
					 echo '</div>';
					  $number++;
					 echo '</div>';
				}
			
				break;

			case '04':
				$lista = $as->actoresDeMayorEdad();
				echo '<h2>Actores y actrices más veteran@s.</h2>';
				foreach ($lista as $nombre => $edad){
					echo '<div class="ranking">';
						if($number==1)echo '<img src="./imagenes/number1.png"  width=60px height=60px />';
						else if($number==2)echo '<img src="./imagenes/number2.png"  width=60px height=60px />';
						else if($number==3)echo '<img src="./imagenes/number3.png"  width=60px height=60px />';
						else echo '<img src="./imagenes/line.png"  width=60px height=60px />';
					 echo '<p>'.$nombre. ' Edad : ' .$edad.'</p>';
					  $number++;
					 echo '</div>';
				}
				break;

			case '05':
				$lista = $as->usuariosConMasListas();

				echo '<h2>Usuarios con más listas creadas.</h2>';
				foreach ($lista as $nombreCreador => $var){
					$objUsu = $ASUsu->infoUsu($nombreCreador);
					echo '<div class="rankingAux">';
					echo '<div class="ranking">';
					if($number==1)echo '<img src="imagenes/number1.png"  width=60px height=60px />';
						else if($number==2)echo '<img src="imagenes/number2.png"  width=60px height=60px />';
						else if($number==3)echo '<img src="imagenes/number3.png"  width=60px height=60px />';
						else echo '<img src="imagenes/line.png"  width=60px height=60px />';
					 /*echo '<p> '.$nombreCreador;
					 echo '</div>';
					  echo '<div class=columnaExtra>';
					 echo ' Listas : ' .$var.'</p>';
					 echo '</div>';*/
					 if(isset($_SESSION['nombreusu']) && $nombreCreador == $_SESSION['nombreusu'])
						{
							echo '<p> <a href= "perfil.php?codigo='.$nombreCreador.'"><img src="imagenPerfil/'.$objUsu->getImagenPerfil().'"  width=60px height=60px />'.$nombreCreador.'</a></p>';
								echo '</div>';
							echo '<div class=columnaExtra>';
							echo 'Numero de Listas creadas: ' .$var;
							echo '</div>';
						}
						else{
					 	echo '<p> <a href= "perfilAjeno.php?codigo='.$nombreCreador.'"><img src="imagenPerfil/'.$objUsu->getImagenPerfil().'"  width=60px height=60px />'.$nombreCreador.'</a></p>';
					 		echo '</div>';
							echo '<div class=columnaExtra>';
							echo 'Numero de  Listas creadas: ' .$var;
							echo '</div>';
					}
					  $number++;
					 
					  echo '</div>';
				}
			
				break;
		}
	
		
	?>
	</div>





	<?php
	require("comun/pie.php");
	?>
</div>
</body>
</html>
