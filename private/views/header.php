
<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
	<meta http-equiv="content-Type" content="text/html; charset=utf-8" /> 
	
	<!-- <meta charset="utf-8">
	<link rel="stylesheet" href="slider-style.css">
	-->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?php echo url_for('/css/estilos.css');?>">
	<link rel="stylesheet" href="<?php echo url_for('/fontawesome/css/all.css')?>">
	<title>Mi primer diseño</title>
</head>
<body>
<header>
	<img src="<?php echo url_for('images/logo2.jpg')?>" alt="Logotipo de la página">
</header>
<nav class="menu">
	<ul class="items">
		<a href="<?php echo url_for('index.php')?>"><li>Inicio</li></a>
		<a href="<?php echo url_for('nosotros')?>"><li>Nosotros</li></a>
		<a href="<?php echo url_for('contacto')?>"><li>Contacto</li></a>
	</ul>
</nav>