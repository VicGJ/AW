<?php
	require_once "conexion.php";

	class retoDAO{
        
        public function createReto($TReto){
            $db = conectar();
            $nombre=$TReto->getNombre();
			$numero=$TReto->getNumero();
			$descripcion=$TReto->getDescripcion();
            
            $consulta = "INSERT INTO retos VALUES('$nombre','$numero','$descripcion')";
            if(mysqli_query($db, $consulta))
			{
                desconectar($db);
				return true;
			}
			else
			{
                desconectar($db);
				return false;
			}
        }
        
        public function readReto($nombrereto){
            $db = conectar();
            $consul = "SELECT * FROM retos WHERE NombreReto='$nombrereto'";
            $results = mysqli_query($db, $consul);
            if(mysqli_num_rows($results) != 0){
                $reto = mysqli_fetch_assoc($results);
				desconectar($db);
                return new transferReto($reto["NombreReto"],$reto["NumeroPeliculas"],$reto["Descripcion"]);
			}
            else{
                desconectar($db);
			    return ;
            }
			
            
        }
	
		public function readPeliculasByNombreReto($nombreReto){
			$db = conectar();
			$lista= array();
			
			$consul = "SELECT * from retos_y_peliculas WHERE NombreReto='$nombreReto'";
			$query = mysqli_query($db, $consul);
			if($query){
				while($fila=mysqli_fetch_assoc($query)){
					$code = $fila["CodigoPelicula"];
					array_push($lista,$code);
				}
			}
			desconectar($db);
			return $lista;
		}
		//--------------------------
		public function readAllRetos(){
			$db = conectar();
			$lista= array();
			
			$consul = "SELECT * from retos ORDER BY NombreReto";
			$query = mysqli_query($db, $consul);
			if($query){
				while($fila=mysqli_fetch_assoc($query)){
					$nombre = $fila["NombreReto"];
					$numero = $fila["NumeroPeliculas"];
					$descripcion = $fila["Descripcion"];
					
					array_push($lista, new transferReto($nombre,$numero,$descripcion));
				}
			}
			desconectar($db);
			return $lista;
		}
		
        public function updateReto($nombrereto, $campo, $valor){
            $db = conectar();
            $consulta="UPDATE retos SET ".$campo." = '$valor' WHERE NombreReto = '$nombrereto'";
            $results  = mysqli_query($db, $consulta);
		      if ($results){
		      	if($campo == "NombreReto")
		      	{
			      	$consulta="UPDATE retos_y_peliculas SET NombreReto = '$valor' WHERE NombreReto = '$nombrereto'";
	            	$results  = mysqli_query($db, $consulta);
            	}
			    return true;

		      } 
              else{
			     return false;
		      } 
			desconectar($db);
        }
        
        public function deleteReto($nombreReto){
            $db = conectar();

            $consultaVer = "SELECT * FROM retos_y_peliculas WHERE NombreReto = '$nombreReto'";
            $resultsVer = mysqli_query($db, $consultaVer);
	            if(mysqli_num_rows($resultsVer) != 0)
	            {
	            $consulta = "DELETE FROM retos WHERE NombreReto = '$nombreReto'";
	            $results = mysqli_query($db, $consulta);
	            if(mysqli_num_rows($resultsVer) != 0){
	                $consul = "DELETE FROM retos_y_peliculas WHERE NombreReto = '$nombreReto'";
	                $result = mysqli_query($db, $consul);
	                if(mysqli_num_rows($result) != 0){
	                	desconectar($db);
	                    return true;
	                }
	                else{
	                	desconectar($db);
	                    return false;
	                }
	            }
	            else{
	            	desconectar($db);
	                return false;
	            }
        	}
        }

        public function insertaPeliReto($nombreReto, $codePeli){
            $db = conectar();

            $consulta = "SELECT * FROM retos_y_peliculas WHERE NombreReto='$nombreReto' AND CodigoPelicula = '$codePeli'";
            $results = mysqli_query($db, $consulta);
            if(mysqli_num_rows($results) == 0){
                $consul = "INSERT INTO retos_y_peliculas VALUES ('$nombreReto', '$codePeli')";
                $result = mysqli_query($db, $consul);
               
                $consul2 = "UPDATE retos SET NumeroPeliculas = NumeroPeliculas + 1 WHERE NombreReto = '$nombreReto'";
                $result2 = mysqli_query($db, $consul2);
                desconectar($db);
                if($result){
                    return true;
                }
                else{
                    return false;
                }
            }
            else{
                return false;
            }
            
        }

        public function estaPeliReto($code, $reto){
           $db = conectar();
			$lista= array();
			
			$consul = "SELECT * from retos_y_peliculas WHERE NombreReto='$reto' AND CodigoPelicula = '$code'";
			$query = mysqli_query($db, $consul);
			desconectar($db);
			if(mysqli_num_rows($query) != 0){
				return true;
			}
			else return false;

		
        }

        public function eliminarPeliReto($nombreReto, $codePeli){
            $db = conectar();

            $consulta = "SELECT * FROM retos_y_peliculas WHERE NombreReto='$nombreReto' AND CodigoPelicula = '$codePeli'";
            $results = mysqli_query($db, $consulta);
            if(mysqli_num_rows($results) != 0){
                $consul = "DELETE FROM retos_y_peliculas WHERE NombreReto='$nombreReto' AND CodigoPelicula = '$codePeli'";
                $result = mysqli_query($db, $consul);
               
                $consul2 = "UPDATE retos SET NumeroPeliculas = NumeroPeliculas - 1 WHERE NombreReto = '$nombreReto'";
                $result2 = mysqli_query($db, $consul2);
                desconectar($db);
                if($result){
                    return true;
                }
                else{
                    return false;
                }
            }
            else{
                return false;
            }

        }
	
	}
?>