	<!--<script type = "text/javascript" src = "http://code.jquery.com/jquery-3.2.1.min.js"></script>-->
	<!--<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>-->
	<script type= "text/javascript" src="js/opcionesListaAjena.js"></script>
<?php 
		
		require_once "AS_files/AS_ListaPeliculas.php";
?>
	<div id="sidebar-right">
		<h3>Opciones</h3>
		<?php
			$codigo = $_REQUEST["codigo"];
			$ASpeliculaLista = new AS_ListaPeliculas();

			$objLista = $ASpeliculaLista->infoLista($codigo);
			$listaCode = $objLista->getCodigo();
			$usu = $_SESSION['nombreusu'];
			$ASpeliculaLista = new AS_ListaPeliculas();
			if(!empty($_SESSION['nombreusu']))
			{
			if($ASpeliculaLista->eresCreador($listaCode))
			{
				//PONER EN EL VALUE EL CODIGO DE LA LISTA
				echo '<ul><button class="btn btn-primary btn-lg" id="cambiarNombre" value ='.$listaCode.'>Cambiar Nombre</button></ul>';
				echo '<ul><button class="btn btn-primary btn-lg" id="eliminarLista" value ='.$listaCode.' name='.$usu.'>Eliminar Lista</button></ul>';
			}
			else{
				if($ASpeliculaLista->yaSeguida($listaCode))
				{
					//PONER EN EL VALUE EL CODIGO DE LA LISTA
					echo '<ul><button class="btn btn-primary btn-lg" id="dejarDeSeguir" value ='.$listaCode.'><img src="imagenes/seguida.jpg" width=15px height=15px/>Dejar de Seguir</button></ul>';
				}
				else
				{
					//PONER EN EL VALUE EL CODIGO DE LA LISTA
					echo '<ul><button class="btn btn-primary btn-lg" id="seguir" value ='.$listaCode.'><img src="imagenes/seguir.jpg" width=15px height=15px/>Seguir</button></ul>';
				}
			}
		}
		?>
	</div>