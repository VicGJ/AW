<?php

require_once('Form.php');
require_once('AS_files/AS_Usuario.php');
class formUpdateUsuario extends Form{

    /**
     * Genera el HTML necesario para presentar los campos del formulario.
     *
     * @param string[] $datosIniciales Datos iniciales para los campos del formulario (normalmente <code>$_POST</code>).
     * 
     * @return string HTML asociado a los campos del formulario.
     */
    protected function generaCamposFormulario($datosIniciales)
    {
        $nombre = htmlspecialchars(trim(strip_tags($_REQUEST["usuario"])));
        $string= ' <input type="hidden" name="nombreusu" value='.$nombre.'>';
        $string.= '<label>Nuevo nombre(si no desea modificar dejelo vacio):</label> <input type="text" name="nombreusuNuevo" />';
        $string.= '<label>Email(si no desea modificar dejelo vacio):</label> <input type="mail" name="email" />';
        $string.= '<label>Password(si no desea modificar dejelo vacio):</label> <input type="password" name="password" />';
        $string .= '<label>Imagen(si no desea modificar dejelo vacio):</label>';
        $string .= '<input type="file" name="imagen"><br>';
        $string.= '<label>tipo de usuario(si no desea modificar dejelo vacio):</label> <input type="radio" name="tipoUsuario" value = "1" > normal';
        $string.= '<input type="radio" name="tipoUsuario" value = "2" > admin';
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
            header('Location: editaUsuario.php');
            exit();
        }

        $password=sha1(md5($datos["password"]));
        $ASusuario = new AS_Usuario();
        $ASusuario->imagenPerfil($files);
        return $ASusuario->updateUsuario($datos["nombreusu"],$datos["nombreusuNuevo"],$datos["email"], $password, $datos["tipoUsuario"], $files["imagen"]["name"]);
    }
}

?>