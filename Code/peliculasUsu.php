<?php 
	session_start();
	require_once "AS_files/AS_PeliculaVista.php";
	require_once "AS_files/AS_Pelicula.php";
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Lista Peliculas Usuario</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/estilo.css" />
	</head>
	<body>
		
	<?php
	require("comun/cabecera.php");
	?>
	<div id="contenedor">
	<div id="contenidoPeliculasAux">
		

		<?php  
			$lista = array();
			$ASpeliculaVista = new AS_PeliculaVista();
			$ASpelicula = new AS_Pelicula();
			$usu = $_REQUEST["codigo"];
			if($_SESSION['nombreusu'] == $usu)
			{
				$lista = $ASpeliculaVista->mostrarPeliculasUsu();
				if(empty($lista))
				{
					echo "<h2>No has visto ninguna pelicula.</h2>";
				}
				else
				{
					echo '<h2>Mis Peliculas Vistas</h2>';
					echo '<div id="contenidoPeliculas">';
					foreach ($lista as $code => $nombre) {
					
					$objPeli = $ASpelicula->infoPelicula($code);
					echo '<div class="pelicula">';
                    	echo  '<a href= "pelicula.php?codigo='.$code.'"><img src="AW_peliculas/'.$objPeli->getPortada().'"  width=215px height=290px /></a>';
                    	echo '<h3>'.$objPeli->getTitulo().'</h3>';
     					echo' </div>';
					}

				}	
			}
			else
			{
				$lista = $ASpeliculaVista->mostrarPeliculasUsuAjeno($usu);
				if(empty($lista))
				{
					echo "<h2>No ha visto ninguna pelicula.</h2>";
				}
				else
				{
					echo '<h2>Peliculas Vistas de ' .$usu.'</h2>';
					echo '<div id="contenidoPeliculas">';
				foreach ($lista as $code => $nombre) {
					
					$objPeli = $ASpelicula->infoPelicula($code);
					echo '<div class="pelicula">';
                    	echo  '<a href= "pelicula.php?codigo='.$code.'"><img src="AW_peliculas/'.$objPeli->getPortada().'"  width=215px height=290px /></a>';
                    	echo '<h3>'.$objPeli->getTitulo().'</h3>';
     					echo' </div>';
				}

			}
			}
			
			
			
			?>
           
		</div>
	</div>
		<?php
			require("comun/pie.php");
		?>
</div>
		
		
	</body>
</html>