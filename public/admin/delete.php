<?php
require_once("../../private/initialize.php");

session_start();
if(!validarSesion()){
     redirect_to(url_for('/admin/index.php'));
}


if(!isset($_GET['id'])) {
  redirect_to(url_for('/admin/index.php'));
}

$id= $_GET['id'] ?? '';
$id= base64_decode($id);


if(is_post_request()) {
  // Handle form values sent by new.php
	$menu_name = $_POST['menu_name'] ?? '';
	$result=delete_event($id);
	redirect_to(url_for('/admin/index.php'));

}else {
	
	$event= find_event_by_id($id);
}


include("../../private/views/header.php");
include("../../private/views/delete_view.php");
include("../../private/views/footer.php");
?>