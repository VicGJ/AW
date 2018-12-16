	<div id="sidebar-right">
		<h3>Opciones</h3>
		<?php 
		if(!empty($_SESSION['nombreusu']))
		{
			if($usu == $_SESSION['nombreusu'])
			{	
				echo '<ul><li><a href="crearListaUsu.php">Crear una lista de peliculas</a></li></ul>';
                echo '<ul><li><a href="editaPerfil.php">Edita tu perfil</a></li></ul>';
				echo '<ul><li><a href="peliculasUsu.php?codigo='.$usu.'">Mis Peliculas Vistas</a></li></ul>';
				echo '<ul><li><a href="listasUsu.php?codigo='.$usu.'">Mis Listas</a></li></ul>';
				echo '<ul><li><a href="listasSeguidas.php?codigo='.$usu.'">Listas Seguidas</a></li></ul>';
			}
			else
			{
				echo '<ul><li><a href="peliculasUsu.php?codigo='.$usu.'">Peliculas Vistas de ' .$usu. '</a></li></ul>';
				echo '<ul><li><a href="listasUsu.php?codigo='.$usu.'">Listas de ' .$usu. '</a></li></ul>';
				echo '<ul><li><a href="listasSeguidas.php?codigo='.$usu.'">Listas Seguidas de ' .$usu. ' </a></li></ul>';
			}
		}

		?>
		
	</div>