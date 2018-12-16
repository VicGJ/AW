<?php

include "Form.php";
require_once "AS_files/AS_Pelicula.php";
class formCreatePelicula extends Form{

    /**
     * Genera el HTML necesario para presentar los campos del formulario.
     *
     * @param string[] $datosIniciales Datos iniciales para los campos del formulario (normalmente <code>$_POST</code>).
     * 
     * @return string HTML asociado a los campos del formulario.
     */
    protected function generaCamposFormulario($datosIniciales)
    {
       $string= '<label>Pelicula:</label> <input type="text" name="pelicula" />';
        $string .= '<label>Imagen:</label>';
        $string .= '<input type="file" name="imagen"><br>';
        $string.= '<label>Genero:</label> <input type="text" name="genero" />';
        $string.= '<label>Año:</label> <input type="text" name="anio" />';
        $string.= '<label>Duracion:</label> <input type="text" name="duracion" />';
        $string.= '<label>Sinopsis:</label> <textarea name="sinopsis" rows="10" cols="40"></textarea>';
        $string.= '<p><button type="submit" name="registro" value="">Registrar</button></p>';
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
         if (!isset($datos['registro']) ) {
            header('Location: creaPelicula.php');
            exit();
        }

        
        $AS_Pelicula = new AS_Pelicula();
        $AS_Pelicula->imagenPelicula($files);
        return $AS_Pelicula->crearPelicula($datos["pelicula"],$files["imagen"]["name"], $datos["genero"], $datos["anio"], $datos["duracion"], $datos["sinopsis"]);
    }
}

?>