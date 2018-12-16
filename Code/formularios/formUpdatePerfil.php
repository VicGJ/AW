<?php

require_once('Form.php');
require_once('AS_files/AS_Usuario.php');
class formUpdatePerfil extends Form{

    /**
     * Genera el HTML necesario para presentar los campos del formulario.
     *
     * @param string[] $datosIniciales Datos iniciales para los campos del formulario (normalmente <code>$_POST</code>).
     * 
     * @return string HTML asociado a los campos del formulario.
     */
    protected function generaCamposFormulario($datosIniciales)
    {
        $string = '<label>Email(si no desea modificar dejelo vacio):</label> <input type="mail" name="email" />';
        $string.= '<label>Password(si no desea modificar dejelo vacio):</label> <input type="password" name="password" />';
        $string .= '<label>Imagen(si no desea modificar dejelo vacio):</label>';
        $string .= '<input type="file" name="imagen"><br>';
        $string.= '<p><button type="submit" name="update" value="">Modificar</button></p>';
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
         if (! isset($datos['update']) ) {
            header('Location: editaPerfil.php');
            exit();
        }

        $password=sha1(md5($datos["password"]));
        $ASusuario = new AS_Usuario();
        $ASusuario->imagenPerfil($files);
        return $ASusuario->updateUsuario($_SESSION[nombreusu], "",$datos["email"], $password, 1, $files["imagen"]["name"]);
    }
}

?>