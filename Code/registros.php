<!--Creacion de usuario para el usuario(no puede decidir si es admin)-->
<!--Creacion de usuario para el usuario(no puede decidir si es admin)-->
<?php 
session_start();
require_once "formularios/formRegistro.php"
?>
<!DOCTYPE html>
<html>
<head>

	<title>Registro Usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css" />
	
	<link rel="stylesheet" href="css/animate.css">
	

</head>
<div id="contenedor">
	<?php
	require("comun/cabecera.php");
	//require("comun/sidebarIzq.php");
	?>

	<div id="contenidoRegistro">
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Registro Usuario</h2>
			</div>

		<?php
			$form = new formRegistro("registro");
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