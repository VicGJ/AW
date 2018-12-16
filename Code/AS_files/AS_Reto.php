<?php 


//session_start();

include "DAO_files/DAO_Reto.php";
include "Transfer_files/Transfer_Reto.php";

class AS_Reto{

    function mostrarRetos(){

        $retoDao = new retoDAO();
        $lista= $retoDao->readAllRetos();
        return  $lista;

    }


	function buscaPeliculasByReto($nombreReto){
	//	var_dump($id);

		$retoDao = new retoDAO();
		$lista = array();
		$lista=$retoDao->readPeliculasByNombreReto($nombreReto);
		//var_dump($lista);

		return $lista;
	}
    
    function insertarPeliReto($nombreReto, $codePeli){
        $retoDao = new retoDAO();
        
        $retoDao->insertaPeliReto($nombreReto, $codePeli);
    }
    
    function eliminarPeliReto($nombreReto, $codePeli){
        $retoDao = new retoDAO();
        return $retoDao->eliminarPeliReto($nombreReto, $codePeli);

    }

    function estaPeliReto($code, $reto){
        $retoDao = new retoDAO();
        
       return $retoDao->estaPeliReto($code, $reto);
    }
    
	function crearReto($nombre,$descripcion){
        
        $erroresFormulario = array();
	    $errors = 0;
        
        if (empty($nombre)) { 
			$erroresFormulario[] = "Por favor, introduzca el nombre del reto";
			$errors++;
		}
		if (empty($descripcion)) { 
			$erroresFormulario[] = "Por favor, introduzca la descripcion del reto";
			$errors++;
		}
        
        if ($errors ==  0) {

			$DAO_Reto = new retoDAO();
			$objReto = $DAO_Reto->readReto($nombre);

			if ($objReto == null) {
				$TReto = new transferReto($nombre,0,$descripcion);
				if ($DAO_Reto->createReto($TReto)) {
					return "perfilAdmin.php";
				} else {
					$erroresFormulario[] = "consulta fallida";

					return $erroresFormulario;
				}
				
				
			} else {
				$erroresFormulario[] = "reto ya registrado";
				return $erroresFormulario;
			}
			
		}
		else{
			return $erroresFormulario;
		}
    }
        
        function eliminarReto($nombreReto){
            $erroresFormulario = array();
	        $errors = 0;
            
            $DAO_Reto = new retoDAO();
            $objReto = $DAO_Reto->readReto($nombreReto);
            if(!empty($objReto)){
                if($DAO_Reto->deleteReto($nombreReto)){
                    return "perfilAdmin.php";
                }
                else{
                    $erroresFormulario[] = "consulta fallida";
				    return $erroresFormulario;
                }
                
            }
            else{
                $erroresFormulario[] = "reto no existe";
                return $erroresFormulario;
                
            }
            
        }
    
    function modificarReto($nombre,$nombreNuevo,$descripcion){
        $erroresFormulario = array();
	    $errors = 0;
        $resultado = true;
        
        
        
        $DAO_Reto = new retoDAO();
        $objReto = $DAO_Reto->readReto($nombre);
        if(!empty($objReto)){
            if(!empty($nombreNuevo)){
                $resultado = $DAO_Reto->updateReto($nombre,"NombreReto", $nombreNuevo);
                if(!empty($descripcion)){
                    $resultado = $DAO_Reto->updateReto($nombreNuevo,"Descripcion", $descripcion);
                }
            }
            else{
                if(!empty($descripcion)){
                    $resultado = $DAO_Reto->updateReto($nombre,"Descripcion", $descripcion);
                }
            }
            
            if($resultado){
                return "perfilAdmin.php";
            }
            else{
                $erroresFormulario[] = "consulta fallida";
				return $erroresFormulario;
            }
            
            
            
        }    
        else{
            $erroresFormulario[] = "reto no existe";
            return $erroresFormulario;
        }
        
        
        

        
    }


}

?>