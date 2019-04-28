<?php

require_once("../../private/initialize.php");
session_start();

if(validarSesion()){
    header ('Location: ' . WWW_ROOT . '/admin');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = limpiarDatos($_POST['usuario']);
    $pass = limpiarDatos($_POST['password']);
    if($usuario == $blog_admin['usuario'] && $pass == $blog_admin['password']){
        $_SESSION['admin'] = $blog_admin['usuario'];
        header('Location:' . WWW_ROOT . '/admin');
    }
}

include("../../private/views/header.php");
include("../../private/views/login_view.php");
include("../../private/views/footer.php");
?>