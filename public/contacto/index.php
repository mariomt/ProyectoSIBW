<?php
require_once("../../private/initialize.php");
$errores = '';
$enviado = '';
if (isset($_POST['submit'])) {
    $nombre= $_POST['nombre'];
    $correo= $_POST['correo'];
    $mensaje= $_POST['mensaje'];

    //Validar que el campo nombre no este vacio.
    if (!empty($nombre)) {
        $nombre= trim($nombre);
        $nombre= filter_var($nombre,FILTER_SANITIZE_STRING);
    }
    else
    {
        $errores .= "Ingresa un nombre. <br />";
    }

    //validar que el campo correo no este vacio.
    if (!empty($correo)) {
        $correo =trim($correo);
        $correo= filter_var($correo,FILTER_SANITIZE_STRING);
        if (!filter_var($correo,FILTER_VALIDATE_EMAIL)) {
           $errores .="Ingresa un correo valido. <br />";
        }

    }
    else
    {
        $errores .= "Ingresa un correo. <br />";
    }

    //Validar que el campo mensaje no este vacio.
    if (!empty($mensaje)) {
        $mensaje = htmlspecialchars($mensaje);
        $mensaje = trim($mensaje);
        $mensaje = stripcslashes($mensaje);
    }
    else
    {
        $errores .= "Ingresa un mensaje. <br />";
    }

    if (!$errores) {
      $enviar_a = 'mariotinoco85@gmail.com';
      $asunto = 'Formulario - pruebasmario.epizy.com';
      $mensaje_enviar  = "De: $nombre \n";
      $mensaje_enviar .= "Correo: $correo \n";
      $mensaje_enviar .= "Mensaje: $mensaje";
      mail($enviar_a,$asunto,$mensaje_enviar);
      $enviado='true';
    }

}


require ('../../private/views/contacto.view.php');


?>
