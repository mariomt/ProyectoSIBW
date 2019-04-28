<?php

require_once("../../private/initialize.php");
session_start();

if(!validarSesion()){
    header ('Location: ' .WWW_ROOT. '/admin/login.php');
}

$events_set=find_all_events();

include("../../private/views/header.php");
include("../../private/views/admin_view.php");
include("../../private/views/footer.php");
?>