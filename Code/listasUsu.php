<?php 
	session_start();
	require_once "AS_files/AS_ListaPeliculas.php";
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Lista Peliculas Usuario</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/estilo.css" />
	</head>
	<body>
		<div id="contenedor">
	<?php
	require("comun/cabecera.php");
	?>

	
		<div id="contenidoPeliculasAux">
		
		<div id="contenidoPeliculas">
		<?php  
			$lista = array();
			$AS_ListaPeliculas = new AS_ListaPeliculas();
            
            $usu = $_REQUEST["codigo"];
			if($_SESSION['nombreusu'] == $usu)
			{
				$lista = $AS_ListaPeliculas->obtenerListas();
				echo '<h3>Mis listas</h3>';
				if(empty($lista))
					{
						echo "No tienes ninguna lista creada";
					}
					else
					{
					foreach ($lista as $code => $nombre) {
						$objLista = $AS_ListaPeliculas->infoLista($code);
						echo '<div class="pelicula">';
						echo  '<a href= "lista.php?codigo='.$code.'"><img src="listaImagen/'.$objLista->getImagen().'"  width=215px height=290px /></a>';
						echo '<h3>'.$objLista->getTitulo().'</h3>';
						echo' </div>';
					}
				}
			}
			else
			{
				echo '<h3>Listas de '.$usu.'</h3>';
				$lista = $AS_ListaPeliculas->obtenerListasAjeno($usu);
				if(empty($lista))
					{
						echo "No tiene ninguna lista creada";
					}
					else
					{
					foreach ($lista as $code => $nombre) {
						$objLista = $AS_ListaPeliculas->infoLista($code);
						echo '<div class="pelicula">';
						echo  '<a href= "lista.php?codigo='.$code.'"><img src="listaImagen/'.$objLista->getImagen().'"  width=215px height=290px /></a>';
						echo '<h3>'.$objLista->getTitulo().'</h3>';
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