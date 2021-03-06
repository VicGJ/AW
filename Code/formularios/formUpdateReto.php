<?php

include "Form.php";
require_once "AS_files/AS_Reto.php";
class formUpdateReto extends Form{

    /**
     * Genera el HTML necesario para presentar los campos del formulario.
     *
     * @param string[] $datosIniciales Datos iniciales para los campos del formulario (normalmente <code>$_POST</code>).
     * 
     * @return string HTML asociado a los campos del formulario.
     */
    protected function generaCamposFormulario($datosIniciales)
    {
        $nombrereto = $_REQUEST["reto"];
        $string= ' <input type="hidden" name="nombre" value="'.$nombrereto.'">';
        $string.= '<label>Nuevo nombre:</label> <input type="text" name="nombreNuevo" />';
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
            header('Location: editaReto.php');
            exit();
        }

        
        $AS_Reto = new AS_Reto();
        var_dump($datos);
        return $AS_Reto->modificarReto($datos["nombre"],$datos["nombreNuevo"],$datos["descripcion"]);
    }
}

?>