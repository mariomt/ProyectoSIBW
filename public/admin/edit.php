<?php 
require_once("../../private/initialize.php");

session_start();
if(!validarSesion()){
    //header ('Location: ' .WWW_ROOT. '/admin/login.php');
    redirect_to(url_for('/admin/login.php'));
}

$id= $_GET['id'] ?? '';
$id= base64_decode($id);

if(is_post_request()) {

  // Handle form values sent by new.php
	$event=[];
	$event['id'] = $id;
	$event['titulo'] = $_POST['titulo'] ?? '';
	$event['fecha'] = $_POST['fecha'] ?? '';
	$event['text'] = $_POST['text'] ?? '';
	$event['image'] = $_FILES['thumb']['name'];
	$thumb_guardada = $_POST['thumb-guardada'] ?? '';
  


	if (empty($event['image'])) {
        $event['image'] = $thumb_guardada;
    }
    else
    {
    	$thumb= $_FILES['thumb']['tmp_name'] ?? '';
        $archivo_subido = 'C:/xampp/htdocs/'.WWW_ROOT. '/images/'.$event['image'];  
 		 move_uploaded_file($thumb,$archivo_subido);
    }

	$result =update_event($event);
	redirect_to(url_for('/admin'));
 
} else {
	$event= find_event_by_id($id);

}

include("../../private/views/header.php");
include("../../private/views/edit_view.php");
include("../../private/views/footer.php");
?>