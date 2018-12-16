<?php 
	session_start();
	include "AS_files/AS_Pelicula.php";
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Lista Peliculas</title>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="css/estilo.css" />
	</head>
	<body>
		<div id="contenedor">
		<?php 
			require("comun/cabecera.php");
			?>
			
		<div id="contenidoPeliculasAux">
			
			<?php
			echo '<h2> Lista de peliculas</h2>';
			echo '<div id="contenidoPeliculas">';
			$ASpelicula = new AS_Pelicula();
            $lista = $ASpelicula->mostrarListaPeliculas();
            foreach ($lista as $code => $name) {
                $objPeli = $ASpelicula->infoPelicula($code);
                echo '<div class="pelicula">';
                echo  '<a href= "pelicula.php?codigo='.$code.'"><img src="AW_peliculas/'.$objPeli->getPortada().'"  width=215px height=290px /></a>';
                echo '<h3>'.$objPeli->getTitulo().'</h3>';
                echo' </div>';
            }
            echo '</div>';
            ?>
		</div>
        <?php 
            require("comun/pie.php");
        ?>
	</div>
	</body>
</html>