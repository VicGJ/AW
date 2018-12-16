<?php 
	session_start();
	include "AS_files/AS_ListaPeliculas.php";
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Listas</title>
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
			
			$ASlista = new AS_ListaPeliculas();
				$lista = $ASlista->mostrarListas();
				
                	echo '<h2> Listas</h2>';
                	echo '<div id="contenidoPeliculas">';
    				foreach ($lista as $code => $name) {
                   		$objLista = $ASlista->infoLista($code);
                   		echo '<div class="pelicula">';
                    	echo  '<a href= "lista.php?codigo='.$code.'"><img src="listaImagen/'.$objLista->getImagen().'"  width=215px height=290px /></a>';
                    	echo '<h3>'.$objLista->getTitulo().'('.$objLista->getContador().')</h3>';
                    	
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