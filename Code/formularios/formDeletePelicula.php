<?php

include "Form.php";
require_once "AS_files/AS_Pelicula.php";
class formDeletePelicula extends Form{

    /**
     * Genera el HTML necesario para presentar los campos del formulario.
     *
     * @param string[] $datosIniciales Datos iniciales para los campos del formulario (normalmente <code>$_POST</code>).
     * 
     * @return string HTML asociado a los campos del formulario.
     */
    protected function generaCamposFormulario($datosIniciales)
    {
       $string= '<label>Pelicula(Codigo):</label> <input type="text" name="code" />';
    $string.= '<p><button type="submit" name="delete" value="">Eliminar</button></p>';
        return $string;
    } 

        /**
     * Procesa los datos del formulario.
     *
     * @param string[] $datos Datos enviado por el usuario (normalmente <code>$_POST</code>).
     *
     * @return string|string[] Devuelve el resultado del procesamiento del formulario, normalmente una URL a la que
     * se desea que se redirija al usuario, o un array con los errores que ha habido durante el procesamiento del formulario.
     */
    protected function procesaFormulario($datos, $files)
    {
         if (!isset($datos['delete']) ) {
            header('Location: eliminaPelicula.php');
            exit();
        }

        
        $AS_Pelicula = new AS_Pelicula();
        return $AS_Pelicula->eliminarPelicula($datos["code"]);
    }
}

?>