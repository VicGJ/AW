<?php 
session_start();
include "AS_files/AS_Usuario.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Perfil Usuario Visitado</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css" />
</head>
<body>
	<div id="contenedor">
	<?php
	require("comun/cabecera.php");
	$ASUsu = new AS_Usuario();
	$usu = $_REQUEST["codigo"];
	$objUsu = $ASUsu->infoUsu($usu);
	?>
	<div id ="principal">
	<div id="contenido">
		<div id="contenidoPerfil">
			<div class="error success" >
				<h3>
					<?php 
						echo 'Bienvenid@ al perfil de ' .$usu;
					?>
				</h3>
			</div>
			<?php
			echo  '<img src="imagenPerfil/'.$objUsu->getImagenPerfil().'"  width=290px height=290px /><br></a>';
			?>
				<h1><?php echo $usu; ?><br></h1>	
				<?php 
				$tiempo = $ASUsu->tiempoVista($usu);
				
				echo '<div class="tiempo">';
				echo '<p> Tiempo gastado en ver películas: </p>';
				echo  ''.$tiempo.' minutos';
				echo '</div>';
				?>


	</div>
	</div>
	<?php
	require("comun/sidebarDer.php");
	?>
</div>
		
	<?php
	//cambio
	
	require("comun/pie.php");
	
	
?>
</div>
</body>
</html>

