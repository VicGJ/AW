<?php

include "Form.php";
require_once "AS_files/AS_Reto.php";
class formCreateReto extends Form{

    /**
     * Genera el HTML necesario para presentar los campos del formulario.
     *
     * @param string[] $datosIniciales Datos iniciales para los campos del formulario (normalmente <code>$_POST</code>).
     * 
     * @return string HTML asociado a los campos del formulario.
     */
    protected function generaCamposFormulario($datosIniciales)
    {
        $string= '<label>Reto:</label> <input type="text" name="nombre" />';
        $string.= '<label>Descripcion:</label> <textarea name="descripcion" rows="10" cols="40"></textarea>';
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
            header('Location: creaReto.php');
            exit();
        }

        
        $AS_Reto = new AS_Reto();
        return $AS_Reto->crearReto($datos["nombre"],$datos["descripcion"]);
    }
}

?>