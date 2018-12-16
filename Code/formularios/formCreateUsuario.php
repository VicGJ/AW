<?php

include "Form.php";
include "AS_files/AS_Usuario.php";
class formCreateUsuario extends Form{

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
        $string.= '<label>Email:</label> <input type="mail" name="email" />';
        $string.= '<label>Password:</label> <input type="password" name="password" />';
        $string.= '<label>Repite Password:</label> <input type="password" name="password_2" />';
        $string .= '<label>Imagen:</label>';
        $string .= '<input type="file" name="imagen"><br>';
        $string.= '<label>tipo de usuario:</label> <input type="radio" name="tipoUsuario" value = "1" > normal';
        $string.= '<input type="radio" name="tipoUsuario" value = "2" > admin';
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
         if (! isset($datos['registro']) ) {
            header('Location: creaUsuario.php');
            exit();
        }

        
        $password=sha1(md5($datos["password"]));
        $password2=sha1(md5($datos["password_2"]));
        
        $ASusuario = new AS_Usuario();
        $ASusuario->imagenPerfil($files);
        return $ASusuario->createUsuario($datos["nombreusu"],$datos["email"], $password, $password2, $datos["tipoUsuario"], $files["imagen"]["name"]);
    }
}

?>