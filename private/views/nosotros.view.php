<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo url_for('/css/estilos.css');?>">
    <title>Sobre Nosotros</title>

<style>
    body{
        text-align: justify;
        font-family: sans-serif,'arial';
    }
    h2{
        margin-bottom: 20px; 
    }
    p{
        margin: 0 10px 5px;
        font-size: 14pt;
    }
    blockquote{
        margin: 20px 15px 5px;
        font-size: 14pt;
    }
    footer{
        margin-top: 30px;
    }
</style>
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

<div class="tarjeta">
    <section class="contenido">
        <h2>Quienes somos?</h2>
        <p>La presente página web, forma parte de un proyecto escolar de la <b>UNIVERSIDAD DE SONORA</b> para la materia <b>Sistemas de Información Basados en Web</b>.</p>
        <p>En el proyecto se pusieron en práctica los conocimientos adquiridos a lo largo del semestre 2019-1, relacionados a la funcionalidad básica de un manejador de contenidos.</p>
        <blockquote>
            <i>Un Manejador de Contenidos Web o CMS (en inglés Content Management System) es una aplicación online que nos permite crear, editar y en general administrar, los contenidos de nuestras páginas web. Con un Gestor de Contenidos un usuario puede crear, editar y actualizar todas las páginas web de su sitio, puede crear páginas nuevas, escribir artículos en el blog, crear un portfolio de trabajos, montar un VideoBlog o un Photolog.</i>
        </blockquote>
        <p><b>Eventicket</b> es un sitio web de publicaciones de eventos en México con la finalidad de poder agregar, modificar y eliminar publicaciones en él.</p>
    </section>
</div>

<footer>
    <span>&copy; Derechos reservados 2019</span>
    <div class="iconos">
        <a href="https://twitter.com/Mgilberto704" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://www.facebook.com/marioo00" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/mariomurilloo/" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="<?php echo url_for('contacto')?>"> <i class="fas fa-envelope"></i></a>
    </div>
</footer>

</body>
</html>