<?php
require_once("../../private/initialize.php");
session_start();

if(!validarSesion()){
    //header ('Location: ' .WWW_ROOT. '/admin/login.php');
    redirect_to(url_for('/admin/login.php'));
}

if(is_post_request()) {

  // Handle form values sent by new.php
  $event=[];
  $event['titulo'] = $_POST['titulo'] ?? '';
  $event['fecha'] = $_POST['fecha'] ?? '';
  $event['text'] = $_POST['text'] ?? '';
  $event['image'] = $_FILES['thumb']['name'];
  $thumb= $_FILES['thumb']['tmp_name'] ?? '';

  $archivo_subido = 'C:/xampp/htdocs/'.WWW_ROOT. '/images/'.$event['image'];  
  move_uploaded_file($thumb,$archivo_subido);

  $result = insert_event($event);
  $new_id= mysqli_insert_id($db);
  //redirect_to(url_for('index.php'));
 
} else {
	//redirect_to(url_for('/admin'));
}


include("../../private/views/header.php");
include("../../private/views/new_view.php");
include("../../private/views/footer.php");

?>