<?php session_start(); 

//include "mostrarPelicula.php";



include "AS_files/AS_Reto.php";
require_once "AS_files/AS_PeliculaVista.php";
require_once "AS_files/AS_Pelicula.php";

?>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type= "text/javascript" src="js/opcionesAdmin.js"></script>
<!DOCTYPE html>
<html>
	<head>
		<title>Película</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/estilo.css" />
		<script type="text/javascript" src="js/animateprogress.js"></script>
	</head>
	<body>
		<div id="contenedor">
	<?php
	require("comun/cabecera.php");
	
	?>

	
		<div id="contenidoRetosAux">
			<?php 
      echo '<h2> Lista de retos</h2>';
      echo '<div id="contenidoRetos">';
			$ASReto = new AS_Reto();
			$ASPeliVista = new AS_PeliculaVista();
			$ASPelicula = new AS_Pelicula();
			$listaPelisVistaUsu=$ASPeliVista->mostrarPeliculasUsu();
				$listaRetos = $ASReto->mostrarRetos();//lista de retos
				//$listaPelisRetos = $ASReto->mostrarRetos();//lista 
				//var_dump($listaPelisRetos);
				//$infoReto= array();
				
                	
                	$infoReto= array();
    				foreach ($listaRetos as $objReto) {
                   		echo '<div class="reto">';
                      echo '<img src="imagenes/chincheta.png" alt="Portada" width=50px height=50px>';
                    	echo  '<h3><p>'.$objReto->getNombre()." </p></h3>";
                        echo '<form action="insertaPeliculaReto.php?reto='.$objReto->getNombre().'"method="post"><input type="submit" value="Insertar  pelicula">
	                    </form>';
                    	//echo  $objReto->getNumero()." ";
                    	echo  $objReto->getDescripcion()." ";
                    	$listaPelisRetos = $ASReto->buscaPeliculasByReto($objReto->getNombre());
                    	$encontrado=false;
                    	foreach ($listaPelisRetos as $codigoPeliReto) {
                    		
                    			$objPeli=$ASPelicula->infoPelicula($codigoPeliReto);
                    			echo '<p><li><a href= "pelicula.php?codigo='.$objPeli->getCodigo().'">'.$objPeli->getTitulo().'</a></li></p>';
                                echo '<button name="eliminarPeliculaReto" id = '.$codigoPeliReto.' value = '.$objReto->getNombre().' >Eliminar Pelicula</button>';
                   		}
                        
                        echo '<button name="eliminarReto" value = '.$objReto->getNombre().'>Eliminar Reto</button>';
                        echo '<form action="editaReto.php?reto='.$objReto->getNombre().'"method="post"><input type="submit" value="Editar reto">
	                           </form>';
     					echo' </div>';
    				}

			?>

	</div>
    </div>

<?php
	require("comun/pie.php");
?>


		
	</body>
</html>