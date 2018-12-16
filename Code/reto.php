<?php session_start(); 

//include "mostrarPelicula.php";



include "AS_files/AS_Reto.php";
require_once "AS_files/AS_PeliculaVista.php";
require_once "AS_files/AS_Pelicula.php";

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Película</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/estilo.css" />
		<script type="text/javascript" src="js/animateprogress.js"></script>
	</head>
	<body>
		<div id="contenedor">
	<?php
	require("comun/cabecera.php");
	
	?>

	
		<div id="contenidoRetosAux">
			<?php 
      echo '<h2> Lista de retos</h2>';
      echo '<div id="contenidoRetos">';
			$ASReto = new AS_Reto();
			$ASPeliVista = new AS_PeliculaVista();
			$ASPelicula = new AS_Pelicula();
			$listaPelisVistaUsu=$ASPeliVista->mostrarPeliculasUsu();
				$listaRetos = $ASReto->mostrarRetos();//lista de retos
				//$listaPelisRetos = $ASReto->mostrarRetos();//lista 
				//var_dump($listaPelisRetos);
				//$infoReto= array();
				
                	
                	$contVista = 0;
                	$infoReto= array();
                    $idCo = 0;
    				foreach ($listaRetos as $objReto) {
                      $contVista = 0;
                   		echo '<div class="reto">';
                      echo '<img src="imagenes/chincheta.png" alt="Portada" width=50px height=50px>';
                    	echo  '<h3><p>'.$objReto->getNombre()." </p></h3>";
                    	//echo  $objReto->getNumero()." ";
                    	echo  $objReto->getDescripcion()." ";
                    	$listaPelisRetos = $ASReto->buscaPeliculasByReto($objReto->getNombre());
                    	$encontrado=false;
                    	foreach ($listaPelisRetos as $codigoPeliReto) {
                    		foreach ($listaPelisVistaUsu as $code =>$nombre) {
                    		
                    			$objPeli=$ASPelicula->infoPelicula($code);

                    			if($objPeli->getCodigo()==$codigoPeliReto){
                    				$encontrado=true;
                    				$contVista++;
                                    
                    			echo '<p><li><a href= "pelicula.php?codigo='.$objPeli->getCodigo().'">'.$objPeli->getTitulo().'</a><img src="imagenes/si.png" alt="Portada" width=20px height=20px></li></p>';
                    			}
                    			
                    		}
                    		if(!$encontrado){
                    			$objPeli=$ASPelicula->infoPelicula($codigoPeliReto);
                    			echo '<p><li><a href= "pelicula.php?codigo='.$objPeli->getCodigo().'">'.$objPeli->getTitulo().'</a><img src="imagenes/no.png" alt="Portada" width=20px height=20px></li></p>';
                    		}		
                    	$encontrado=false;
                   		}
                   		//-------- barra de progreso----------//
                   		$contTotal = $objReto->getNumero();
                   		if($contTotal != 0)
                      {
                        $porcentaje = ($contVista*100)/$contTotal;
                        array_push($infoReto, $porcentaje);
                   
                        echo '<div class="progress">';
                        echo '<progress id="pro'.$idCo.'" max="100" value="'.$porcentaje.'"></progress>';
                        echo'<span></span>';
                        echo'</div>';
                        $idCo++;
                      }
                   		
						//$idCo++;
						//---- fin de barra---------//

     					echo' </div>';
    				}

			?>
	<script type="text/javascript"> 

	window.onload = function() { 
		var cont = <?php echo$idCo ?>;
        var numero=<?php echo json_encode($infoReto);?>;
		
        for(var i=0; i<=cont; i++){
            animateprogress("#pro"+i, numero[i]);
        } 
;
	} 	
</script>


	</div>
    </div>

<?php
	require("comun/pie.php");
?>


		
	</body>
</html>