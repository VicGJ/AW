<?php

include "Form.php";
include "AS_files/AS_Usuario.php";
class formDeleteUsuario extends Form{

    /**
     * Genera el HTML necesario para presentar los campos del formulario.
     *
     * @param string[] $datosIniciales Datos iniciales para los campos del formulario (normalmente <code>$_POST</code>).
     * 
     * @return string HTML asociado a los campos del formulario.
     */
    protected function generaCamposFormulario($datosIniciales)
    {
        $string= '<label>Usuario:</label> <input type="text" name="nombreusu" />';
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
         if (! isset($datos['delete']) ) {
            header('Location: eliminaUsuario.php');
            exit();
        }

        
        $ASusuario = new AS_Usuario();
        return $ASusuario->deleteUsuario($datos["nombreusu"]);
    }
}

?>