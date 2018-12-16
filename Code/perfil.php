<?php 
session_start();
include "AS_files/AS_Usuario.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Perfil Usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css" />
</head>
<body>
	<div id="contenedor">
	<?php
	require("comun/cabecera.php");
	$ASUsu = new AS_Usuario();
	$objUsu = $ASUsu->infoUsu($_SESSION['nombreusu']);
	$usu = $_REQUEST["codigo"];
	?>
	<div id ="principal">
	<div id="contenido">
		<div id="contenidoPerfil">
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
					?>
				</h3>
			</div>
			<?php
			echo  '<img src="imagenPerfil/'.$objUsu->getImagenPerfil().'"  width=290px height=290px /><br></a>';
			?>
				<h1><?php echo $_SESSION['nombreusu']; ?><br></h1>	
				<?php 
				$tiempo = $ASUsu->tiempoVista($_SESSION['nombreusu']);
				
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

