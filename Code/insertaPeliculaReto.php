<!--Pagina login-->
<?php 
	session_start();
	
	require_once( 'formularios/formUpdatePelicula.php');

	require_once "AS_files/AS_Pelicula.php";
	require_once "AS_files/AS_Reto.php";

?>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type= "text/javascript" src="js/opcionesAdmin.js"></script>
<!DOCTYPE html>
<html>
	<head>
		<title>Registration system PHP and MySQL</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/estilo.css" />
		<link rel="stylesheet" href="css/animate.css">
	
	
	</head>
	<body>
		<div id="contenedor">
	<?php
	require("comun/cabecera.php");
	?>

	<div id ="principal">

		

		<div id="contenidoPeliculasAux">
			
			<?php
			echo '<h2> Lista de peliculas</h2>';
			echo '<div id="contenidoPeliculas">';
			$nombreReto = $_REQUEST["reto"];
			$ASpelicula = new AS_Pelicula();
			$ASreto = new AS_Reto();
            $lista = $ASpelicula->mostrarListaPeliculas();
            foreach ($lista as $code => $name) {
                $objPeli = $ASpelicula->infoPelicula($code);
                if(!$ASreto->estaPeliReto($code, $nombreReto))
                {
	                echo '<div class="pelicula">';
	                
	                echo  '<a href= "pelicula.php?codigo='.$code.'"><img src="AW_peliculas/'.$objPeli->getPortada().'"  width=215px height=290px /></a>';
	                
	                echo '<h3>'.$objPeli->getTitulo().'</h3>';
	                
	                echo '<button name="insertaPeliculaReto" id = '.$code.' value = '.$nombreReto.'>Añadir Pelicula</button>';
	                
	                echo' </div>';
            	}
            }
            echo '</div>';
            ?>
		</div>



	</div>	

<?php
	require("comun/pie.php");
?>
</div>
	</body>
</html>