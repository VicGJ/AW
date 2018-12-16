<!--Pagina login-->
<?php 
	session_start();
	//var_dump($_SESSION["success"]);
	include "formularios/formDeletePelicula.php";

	?>
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

	<div id="contenidoLogin">
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Registrar pelicula</h2>
			</div>

		<?php
			
			$form = new formDeletePelicula("delete");
			$form->gestiona();
			
		?>
	</div>
	</div>

<?php
	require("comun/pie.php");
?>
</div>
	</body>
</html>