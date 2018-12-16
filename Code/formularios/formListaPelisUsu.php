<?php

include "Form.php";
require_once "AS_files/AS_ListaPeliculas.php";
class formListaPelisUsu extends Form{

    /**
     * Genera el HTML necesario para presentar los campos del formulario.
     *
     * @param string[] $datosIniciales Datos iniciales para los campos del formulario (normalmente <code>$_POST</code>).
     * 
     * @return string HTML asociado a los campos del formulario.
     */
    protected function generaCamposFormulario($datosIniciales)
    {        
           
        $string = '<label>Nombre:</label> <input type="text" name="nombreLista">';
       
        $string .= '<label>Imagen:</label>';

        $string .= '<input type="file" name="imagen"><br>';

        $string .= '<input type="radio" name="privacidad" value="publica"> Publica';

        $string .= '<input type="radio" name="privacidad" value="privada"> Privada <br>';

        $string .= '<button type="submit" name="lista">Crear</button>';

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
        if (! isset($datos['lista']) ) {
            header('Location: crearListaUsu.php');
            exit();
        }
        $valor = $datos['privacidad'];

        if(empty($valor) || $valor == 'publica')
        {
            $valor = 0;
        }
        else
        {
            $valor = 1;
        }
       
        $ASlistaPeliculas = new AS_ListaPeliculas();

        $ASlistaPeliculas->imagenLista($files);
        return $ASlistaPeliculas->crearListaPeliculas($datos["nombreLista"], $files["imagen"]["name"], $valor);
    }
}

?>