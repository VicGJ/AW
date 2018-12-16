 <!--Pagina administrador-->
<?php 
session_start();
include "AS_files/AS_Usuario.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Perfil Admin</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css" />
</head>
<body>
	
<div id="contenedor">
	<?php
	require("comun/cabecera.php");
	$ASUsu = new AS_Usuario();
	$objUsu = $ASUsu->infoUsu($_SESSION['nombreusu']);
	?>
	<div id ="principal">
		<?php
		require("comun/sidebarIzq.php");
		?>
		<div id="contenido">
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
				<h1><?php echo $_SESSION['nombreusu']; ?></h1>	

	</div>

	</div>
	

<?php
	//cambio
	
	require("comun/pie.php");
	
	
?>
		
	
</div>

</body>
</html>