<?php 
	session_start();
	require_once "AS_files/AS_ListaPeliculas.php";
	require_once "AS_files/AS_Pelicula.php"
	
?>
<!--<script type = "text/javascript" src = "http://code.jquery.com/jquery-3.2.1.min.js"></script>-->
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type= "text/javascript" src="js/opcionesLista.js"></script>

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
			<div id ="principal">
				<div id="contenido">
			
			<?php
			$codigo = $_REQUEST["codigo"];
			$ASpeliculaLista = new AS_ListaPeliculas();
			$lista = $ASpeliculaLista->pelisLista($codigo);

			$objLista = $ASpeliculaLista->infoLista($codigo);

			$codigoPelicula = $objLista->getCodigo();

			$ASpelicula = new AS_Pelicula();

			

			?>
                <div id="contenidoPeliculasAux">
       	
                <?php
                $nombreLista = $objLista->getTitulo();
                echo "<h2>$nombreLista</h2>";
                echo "<h2>Creada por: ".$objLista->getNombreCreador()."</h2>";
                	echo '<div id="contenidoPeliculas">';

	                if(empty($lista))
					{
						echo "No tienes ninguna pelicula agregada.";
					}
					else
					{
					foreach ($lista as $aux => $code) {
	     					//crear div para cada pelicula dento del contendor
	     					//crear contenedorPelis que sea flex o float left
	                   		$objPeli = $ASpelicula->infoPelicula($code);
	                   		echo '<div class="pelicula">';
	                    	echo  '<a href= "pelicula.php?codigo='.$code.'"><img src="AW_peliculas/'.$objPeli->getPortada().'"  width=215px height=290px /></a>';
	                    	echo '<h3>'.$objPeli->getTitulo().'</h3>';
	                    	if(!empty($_SESSION['nombreusu'])){
	                    	if($ASpeliculaLista->eresCreador($codigo))
	                    	{
	                    		echo '<button name="eliminarPelicula" id = '.$code.' value = '.$codigoPelicula.' >Eliminar Pelicula</button>';
	                    	}
	                    }
	     					echo' </div>';
	    				}
					}
               
    				
    			?>
    			
    			</div>
    		</div>
	</div>
		<?php 
		if(!empty($_SESSION['nombreusu']))
				require("lista/sidebarLista.php");
		?>
		</div>	
			<?php 
				require("comun/pie.php");
			?>
		
		</div>
	</body>
</html>