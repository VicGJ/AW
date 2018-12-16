<?php 


//session_start();

include "DAO_files/DAO_Usuario.php";
include "Transfer_files/Transfer_Usuario.php";

class AS_Usuario{
function login($nombreusu,$password)
	{

	$erroresFormulario = array();
	$errors = 0;
	//comprobamos si algun campo esta vacio y notificamos el error
	if (empty($nombreusu)) {
		$erroresFormulario[] = "Por favor, introduzca su nombre de usuario";
		$errors++;
	}
	if (empty($password)) {
		$erroresFormulario[] = "Por favor, introduzca su contraseña";
		$errors++;
	}

	//si no hay ningun error...
	if ($errors == 0) {
		$userDao = new userDAO();
		$objUsu = $userDao->readUser($nombreusu, $password);//devuelve un transfer
		if($objUsu == null){
			$erroresFormulario[] = "Usuario no encontrado. Por favor intentelo de nuevo";
			$_SESSION['success'] = "error";//////////////////////////////////////////
			//return "login.php";
			return $erroresFormulario;
		} 
		else{
			$_SESSION['nombreusu'] =$objUsu->getNombre();
			$_SESSION['login'] = true;
			if($objUsu->getUserType() == 1){
				$_SESSION['esAdmin'] = true;
				$_SESSION['success']  = "Bienvenido, has iniciado sesion correctamente. Eres administrador de la pagina";
				return "perfilAdmin.php";
			}else{
				$_SESSION['success']  = "Bienvenido, has iniciado sesion correctamente";
				$_SESSION['esAdmin'] = false;
				return "perfil.php?codigo=$nombreusu";

			}
		}


	}
	else{//si hay algun error volvemos al login
			return $erroresFormulario;
	}

}

function registro($nombreusu,$email,$password,$password_2, $imagenPerfil){

	$erroresFormulario = array();
	$errors = 0;

		//comprobamos si algun campo esta vacio y notificamos el error
		if (empty($nombreusu)) { 
			$erroresFormulario[] = "Por favor, introduzca su nombre de usuario";
			$errors++;
		}
		if (empty($email)) { 
			$erroresFormulario[] = "Por favor, introduzca su email";
			$errors++;
		}
		if (empty($password) || $password == '67a74306b06d0c01624fe0d0249a570f4d093747') { 
			$erroresFormulario[] = "Por favor, introduzca su contraseña";
			$errors++;
			
		}
		if (empty($password_2) || $password_2 == '67a74306b06d0c01624fe0d0249a570f4d093747') { 
			$erroresFormulario[] = "Por favor, reintroduzca su contraseña";
			$errors++;
		}
		if (strcmp($password, $password_2) !== 0) {
			$erroresFormulario[] = "Las contraseñas no coinciden";
			$errors++;
		}

		//si no hay ningun error...
		if ($errors ==  0) {

			$userDao = new userDAO();
			$objUsu = $userDao->readUser($nombreusu, $password);//devuelve un transfer

			if ($objUsu == null) {
				$TUsuario = new transferUser($nombreusu, $password, $email, 0, 0, $imagenPerfil);
				$userDao->createUser($TUsuario);
				return $this->login($nombreusu, $password);
			} else {
				$erroresFormulario[] = "Usuario ya registrado";
				return $erroresFormulario;
			}
			
		}
		else{
			return $erroresFormulario;
		}
		

	


}
    	function buscaUsuario($usu){
		$userDao = new userDAO();
		$lista = array();
		$lista = $userDao->buscaUsu($usu);
		return $lista;
	}
function createUsuario($nombreusu,$email,$password,$password_2,$tipoUsuario, $imagenPerfil){

	$erroresFormulario = array();
	$errors = 0;

		//comprobamos si algun campo esta vacio y notificamos el error
		if (empty($nombreusu)) { 
			$erroresFormulario[] = "Por favor, introduzca el nombre de usuario";
			$errors++;
		}
		if (empty($email)) { 
			$erroresFormulario[] = "Por favor, introduzca el email";
			$errors++;
		}
		if (empty($password) || $password == '67a74306b06d0c01624fe0d0249a570f4d093747') { 
			$erroresFormulario[] = "Por favor, introduzca la contraseña";
			$errors++;
			
		}
		if (empty($password_2) || $password_2 == '67a74306b06d0c01624fe0d0249a570f4d093747') { 
			$erroresFormulario[] = "Por favor, reintroduzca la contraseña";
			$errors++;
		}
		if (empty($tipoUsuario)) { 
			$erroresFormulario[] = "El tipo de usuario no puede estar vacio";
			$errors++;
		}
		if (strcmp($password, $password_2) !== 0) {
			$erroresFormulario[] = "Las contraseñas no coinciden";
			$errors++;
		}

		//si no hay ningun error...
		if ($errors ==  0) {

			$userDao = new userDAO();
			$objUsu = $userDao->readUser($nombreusu, $password);//devuelve un transfer

			if ($objUsu == null) {
				$TUsuario = new transferUser($nombreusu, $password, $email, 0, $tipoUsuario - 1, $imagenPerfil);
				$userDao->createUser($TUsuario);
				return "perfilAdmin.php";
			} else {
				$erroresFormulario[] = "Usuario ya registrado";
				return $erroresFormulario;
			}
			
		}
		else{
			return $erroresFormulario;
		}
		
}



function updateUsuario($nombreusu,$nombreusuNuevo,$email,$password,$tipoUsuario, $imagenPerfil){

	$erroresFormulario = array();
	$errors = 0;
    $resultado = true;

		//comprobamos si algun campo esta vacio y notificamos el error
		if (empty($nombreusu)) { 
			$erroresFormulario[] = "Por favor, introduzca el nombre de usuario a modificar";
			$errors++;
		}
		//si no hay ningun error...
		if ($errors ==  0) {

			$userDao = new userDAO();

			if ($userDao->readUserByName($nombreusu)) {

				if (!empty($nombreusuNuevo)) { 
					$resultado = $userDao->updateUser($nombreusu,"nombreusu" ,$nombreusuNuevo);	
					if (!empty($email)) { 
					$resultado = $userDao->updateUser($nombreusuNuevo,"email" ,$email);	
					}
					if (!empty($password) && $password != '67a74306b06d0c01624fe0d0249a570f4d093747') { 
					$resultado = $userDao->updateUser($nombreusuNuevo,"password",$password);	
					}
					if (!empty($tipoUsuario)) { 
					$resultado = $userDao->updateUser($nombreusuNuevo,"user_type" ,$tipoUsuario - 1);	
					}
                    if (!empty($imagenPerfil)) { 
					$resultado = $userDao->updateUser($nombreusuNuevo,"fotoPerfil" ,$imagenPerfil);	
					}
				}
				else{
					if (!empty($email)) { 
					$resultado = $userDao->updateUser($nombreusu,"email",$email);	
					}
					if (!empty($password) && $password != '67a74306b06d0c01624fe0d0249a570f4d093747') {
					$resultado = $userDao->updateUser($nombreusu,"password",$password);	
					}
					if (!empty($tipoUsuario)) { 
					$resultado = $userDao->updateUser($nombreusu,"user_type",$tipoUsuario - 1);
					}
                    if (!empty($imagenPerfil)) { 
					$resultado = $userDao->updateUser($nombreusu,"fotoPerfil" ,$imagenPerfil);	
					}

				}

				if ($resultado) {
					if($_SESSION['esAdmin'] == true)
					{
						return "perfilAdmin.php";
					}
					else
					{
						if(!empty($nombreusuNuevo))
						{
							return "perfil.php?codigo=$nombreusuNuevo";
						}
						else
						{
							return "perfil.php?codigo=$nombreusu";
						}
					}
				} else {
					$erroresFormulario[] = "consulta fallida";
				return $erroresFormulario;
				}
				
				
				

			} else {
				$erroresFormulario[] = "Usuario no existe";
				return $erroresFormulario;
			}
			
		}
		else{
			return $erroresFormulario;
		}
		

	


}

function deleteUsuario($nombreusu){

	$erroresFormulario = array();
	$errors = 0;

		//comprobamos si algun campo esta vacio y notificamos el error
		if (empty($nombreusu)) { 
			$erroresFormulario[] = "Por favor, introduzca el nombre de usuario";
			$errors++;
		}
		//si no hay ningun error...
		if ($errors ==  0) {

			$userDao = new userDAO();

			if ($userDao->readUserByName($nombreusu) != NULL) {

				if ($userDao->deleteUser($nombreusu)) {
					//AQUI TENEMOS QUE ELIMINAR LAS LISTAS CREADAS POR ESTE USUARIO Y TODA CREACCION DE ESTE USU EN LA BBDD
					return "perfilAdmin.php?usuario='.$nombreusu.'";
				} else {
					$erroresFormulario[] = "consulta fallida";
					return $erroresFormulario;
				}
				
				
			} else {
				$erroresFormulario[] = "Usuario no existe";
				return $erroresFormulario;
			}
			
		}
		else{
			return $erroresFormulario;
		}
		
}

function infoUsu($name)
{
	$usuDAO = new userDAO();
	$objUsu=$usuDAO->readUserByName($name);

	return $objUsu;
}

function imagenPerfil($files)
{
	$usuDAO = new userDAO();
	$usuDAO->imagenPerfil($files);
			
}

function tiempoVista($name)
{
	$usuDAO = new userDAO();
	$tiempo = $usuDAO->tiempoAcumulado($name);

	return $tiempo;
}

static function readAllUsers(){
	return userDAO::readAllUsers();
}

}

?>