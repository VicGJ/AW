<?php

include "Form.php";
require_once "AS_files/AS_Pelicula.php";
class formUpdatePelicula extends Form{

    /**
     * Genera el HTML necesario para presentar los campos del formulario.
     *
     * @param string[] $datosIniciales Datos iniciales para los campos del formulario (normalmente <code>$_POST</code>).
     * 
     * @return string HTML asociado a los campos del formulario.
     */
    protected function generaCamposFormulario($datosIniciales)
    {
        $code = htmlspecialchars(trim(strip_tags($_REQUEST["code"])));
        $string= ' <input type="hidden" name="code" value='.$code.'>';
        $string.= '<label>Nuevo título:</label> <input type="text" name="peliculaNueva" />';
       $string .= '<label>Portada(si no desea modificar dejelo vacio):</label>';
        $string .= '<input type="file" name="imagen"><br>';
        $string.= '<label>Genero(puede estar vacio):</label> <input type="text" name="genero" />';
        $string.= '<label>Año(puede estar vacio):</label> <input type="text" name="anio" />';
        $string.= '<label>Duracion(puede estar vacio):</label> <input type="text" name="duracion" />';
        $string.= '<label>Sinopsis(puede estar vacio):</label> <textarea name="sinopsis" rows="10" cols="40"></textarea>';
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
            header('Location: editaPelicula.php');
            exit();
        }

        
        $AS_Pelicula = new AS_Pelicula();
        $AS_Pelicula->imagenPelicula($files);
        return $AS_Pelicula->modificarPelicula($datos["code"],$datos["peliculaNueva"],$files["imagen"]["name"], $datos["genero"], $datos["anio"], $datos["duracion"], $datos["sinopsis"]);
    }
}

?>