<?php 
	session_start(); //NECESARIO
	session_destroy();			// se destruye la sesion
	$_SESSION['login'] = false;
	unset($_SESSION);
	header('location: index.php');

?>