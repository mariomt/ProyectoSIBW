<?php

function url_for($script_path) {
  // add the leading '/' if not present
  if($script_path[0] != '/') {
    $script_path = "/" . $script_path;
  }
  return WWW_ROOT . $script_path;
}

function limpiarDatos($datos){
    $datos=trim($datos);
    $datos=stripslashes($datos);
    $datos= htmlspecialchars($datos);
    return $datos;
}

function is_post_request() {
  return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function is_get_request() {
  return $_SERVER['REQUEST_METHOD'] == 'GET';
}

function redirect_to($location) {
  header("Location: " . $location);
  exit;
}

function validarSesion(){
    if (!isset($_SESSION['admin'])) {
        return false;
    }
    else{
        return true;
    }
}

function f_getDate($fecha){
  $arg=[];
  $arg['day']=date('d',strtotime($fecha));
  switch (date('m',strtotime($fecha))) {
    case '01':
      $arg['month']='ENE';
      break;
    case '02':
      $arg['month']='FEB';
      break;
    case '03':
      $arg['month']='MAR';
      break;
    case '04':
      $arg['month']='ABR';
      break;
    case '05':
      $arg['month']='MAY';
      break;
    case '06':
      $arg['month']='JUN';
      break;
    case '07':
      $arg['month']='JUL';
      break;
    case '08':
      $arg['month']='AGO';
      break;
    case '09':
      $arg['month']='SEP';
      break;
    case '10':
      $arg['month']='OCT';
      break;
    case '11':
      $arg['month']='NOV';
      break;
    case '12':
      $arg['month']='DIC';
      break;
  }
  $arg['year']=date('Y',strtotime($fecha));

  return $arg;
}


?>