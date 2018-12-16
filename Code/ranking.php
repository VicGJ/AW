<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>RANKINGS</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body>
	<div id="contenedor">
	<?php 
	require("comun/cabecera.php");
	?>
		<div id="contenidoRankingAux">
		<div id="contenidoRanking">

			<?php 
			echo '<h2>Rankings</h2>';
			echo '<p><a href= "mostrarRanking.php?codigo=01">Los 5 usuarios que más películas han visto</a></p>';
			echo '<p><a href= "mostrarRanking.php?codigo=02">Las 10 películas de mayor duración</a></p>';
			echo '<p><a href= "mostrarRanking.php?codigo=03">Las 10 películas más vistas</a></p>';
			echo '<p><a href= "mostrarRanking.php?codigo=04">Los 15 actores más veteranos</a></p>';
			echo '<p><a href= "mostrarRanking.php?codigo=05">Los usuarios que más listas han creado</a></p>';?>
		
</div>
</div>
	<?php 
	require("comun/pie.php");
	?>
</div>

</body>
</html>