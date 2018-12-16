<?php session_start(); 

//include "mostrarPelicula.php";


	



include "AS_files/AS_Pelicula.php";
require_once "AS_files/AS_ListaPeliculas.php";
require_once "AS_files/AS_PeliculaVista.php";
require_once "AS_files/AS_Comentarios.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Película</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/estilo.css" />
		

	</head>
	<body>
		<div id="contenedor">
	<?php
	require("comun/cabecera.php");
	
	?>

	
		<div id="contenidoFichaPelicula">
		<?php  
			
			$ASpelicula = new AS_Pelicula();
			$AScomentarios = new AS_Comentarios();

			$codigo = $_REQUEST["codigo"];


			$objPeli=$ASpelicula->infoPelicula($codigo);
			$codigoPelicula = $objPeli->getCodigo();
			

			$ASPeliculaVista = new AS_PeliculaVista();

			if(isset($_POST['btncomentario']))
        	{
        		$location = $AScomentarios->comentar($_POST["txtcomentario"], $_POST["valoracion"], $codigo);
        		header("location: $location");
        	}
			
			
			echo '<div class="InfoPelicula">';
				echo '<img src="AW_peliculas/'.$objPeli->getPortada().'" alt="Portada" width=215px height=290px>';
				echo '<p> Genero: '. $objPeli->getGenero(). '</p>';
				echo '<p>Año: '. $objPeli->getAnio(). '</p>';
				echo '<p>Duracion: '. $objPeli->getDuracion(). ' minutos. </p>';

				echo '<p>Actores: </p>';
				$lista = $ASpelicula->actoresPelicula($codigo);
				if(!empty($lista))
				{
					foreach ($lista as $code => $name) {
							echo '<p><li type="circle">'.$name.'</li></p>';
						}
				}

			
			if(!empty($_SESSION['nombreusu']))
			{
			if ($ASPeliculaVista->peliculaVista($objPeli->getCodigo())) {

				echo '<img src="imagenes/vista.png" alt="Vista" width=50px height=40px>(Vista)';
				?>
				<form action="" method="post">
			  	<button type="submit" name="borrar" value="No Vista!">No Vista!</button>
			  	</form>
			  	<?php 
		   		if(isset($_POST['borrar'])){
		   			$location=$ASPeliculaVista->borrarpeliculaVista($codigoPelicula);
		   			header("location: $location");
		   		}
			}
			else {
				echo '<img src="imagenes/no vista.png" alt="Vista" width=50px height=40px>(No Vista)';
		?>
		
			<form action="" method="post">
				 
			  <button type="submit" name="agregar" value="Vista!">Vista!</button>

			</form>
		<?php 
		   		if(isset($_POST['agregar'])){
		   			$location=$ASPeliculaVista->insertarpeliculaVista($codigoPelicula);
		   			header("location: $location");
		   		}	
			}
		?>

	<!--Boton Lista-->
	<!--Value tiene que ser el id de la lista-->
   <form action="" method="post"><select  name ="select">
             <option selected>Agregar a Lista:</option>
    <?php
              $lista = array();
              $AS_ListaPeliculas = new AS_ListaPeliculas();
              $lista = $AS_ListaPeliculas->obtenerListas();
             
              if(empty($lista))
              {
               echo '<option value=""> No tienes listas creadas</option>';
              }
              else
              {
	              foreach ($lista as $code => $name) {
	              	if(!$AS_ListaPeliculas->yaInsertada($code, $codigo))
	              	{
		            	echo'<option value="'.$code.'">'.$name.'</option>';
		        	}
		         
	    			}
	    			if(isset($_POST['listaAdd']) && $_POST['select'] != 0){
				   			$datas=$_POST["select"];
				   			$codigoLista= $datas;
				   			$location=$AS_ListaPeliculas->agregarPelicula($codigoLista,$codigo);
				   			header("location: $location");
				   		}
  			 }
?>
        </select>
     

     <!--Boton Agregar-->
			<button type="submit" name="listaAdd" value="">Agregar!</button>

	</form>

    	<?php }
    	echo '</div>';
    	echo '<div class="TituloPelicula">';
			echo '<h1>'. $objPeli->getTitulo().'</h1>';
			echo '</div>';
    	
    	echo'<div class="Sinopsis">';
					echo'<p>Sinopsis: '.$objPeli->getSinopsis().'</p>';
					echo'</div>';
					//SECCION COMENTARIOS
					$lista = $AScomentarios->mostrarComentarios();
					echo'<p>Comentarios: </p>';
					if(!empty($_SESSION['nombreusu']))
					{
					$ok = $AScomentarios->hasComentado($codigo);

					if(!$ok)
	                    		{
	                    			echo'<p>Aun no has comentado esta película.</p>';
	                    		
	                    		}
	                    		else{
	                    			echo '<p>Ya has comentado esta película</p>';
	                    		}
					if(!empty($lista))
					{

						foreach ($lista as $code => $name) {
	                   		
	                    	$objComentarios = $AScomentarios->comentarios($codigoPelicula, $code);
	                    	if(empty($objComentarios))
	                    	{
	                    		/*if(!$ok)
	                    		{
	                    			echo'<p>Aun no has comentado esta película.</p>';
	                    		
	                    		}
	                    		else{
	                    			echo '<p>Ya has comentado esta película</p>';
	                    		}*/
	                    	}
	                    	else
	                    	{echo '<div class="comentario">';
	                    		echo'<p>Usuario: ';
	                    		echo $objComentarios->getUsuario(). '</p>';

	                    		echo'<p>Valoración: ';
	                    		
	                    		echo $objComentarios->getValoracion(). '</p>';
								echo $objComentarios->getComentario(). '</p>';
								echo'</div>';
							}
	     					
    					}
    				}
    				else
    				{
    					echo'Aun no tenemos comentarios agregados. Sé el primero en dar tu opinión.';
    				}
    				//FIN COMENTARIOS
					}
			
    	
   	if(!empty($_SESSION['nombreusu']))
   	{
	   	if(!$AScomentarios->hasComentado($codigoPelicula) )
	   	{
	   		echo'<form action="" method="post">';
	   		echo'Comentarios:<br><textarea name="txtcomentario"></textarea> <br>';
      		echo'Valoracion: <br>';

        	echo'<input type="radio" name="valoracion" value="1"> 1';
       		echo'<input type="radio" name="valoracion" value="2"> 2';
        	echo'<input type="radio" name="valoracion" value="3"> 3';
        	echo'<input type="radio" name="valoracion" value="4"> 4';
        	echo'<input type="radio" name="valoracion" value="5"> 5';

        	echo'<p><button type="submit" name="btncomentario" value="">Comentar</button></p>';
        	echo'</form>';
        	
        	

		}
		
	}
	else
	{
		echo'No estás registrado. Registrate o haz log in para comentar y valorar esta película.';
	}
	echo'</div>';
	echo'</div>';
	?>
	
	</div>

		
	<?php
	
	require("comun/pie.php");
	
	
?>

</div>

		
	</body>
</html>