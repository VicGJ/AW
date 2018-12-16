<!--Pagina login-->
<?php 
	session_start();
	//var_dump($_SESSION["success"]);
	require_once( 'formularios/formUpdateUsuario.php');

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
        <?php
		require("comun/sidebarIzq.php");
		?>
		

		<div id="contenido">

            <?php
            
            $lista = AS_Usuario::readAllUsers();
            
	       ?>
            <div id = "contenidoUsuarios">
            
            
            <?php
                if(empty($lista)){
                    echo "<p>No hay usuarios.</p>";
                } 
                else{
                    foreach($lista as $usuarios){ 
                        echo '<div class="usuario">';
                            echo  '<img src="imagenPerfil/'.$usuarios->getImagenPerfil().'"  width=215px height=290px />';
                            echo '<h3>'.$usuarios->getNombre().'</h3>';
                            echo '<h3>'.$usuarios->getEmail().'</h3>';
                            echo '<h3>'.$usuarios->getUserType().'</h3>';
                            echo '<button name="eliminarUsuario" id = '.$usuarios->getNombre().'>Eliminar Usuario</button>';
                            $nombreusu = htmlspecialchars(trim(strip_tags($usuarios->getNombre())));
                            echo '<form action="editaUsuario.php?usuario='.$nombreusu.'"        method="post">
	                           <input type="submit" value="Editar usuario">
	                           </form>';
                            
                        echo '</div>';
                        
                        
                    }
                }
                
                
                
                
            ?>    
            
            
            
            </div>


		</div>



	</div>	

<?php
	require("comun/pie.php");
?>
</div>
	</body>
</html>