<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <title>Sobre Nosotros</title>
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
    
    <div class="wrap">
        <p class="titulo">Envía tus comentarios, dudas o sujerencias.</p>
        <form action="<?php echo(htmlspecialchars($_SERVER['PHP_SELF']));?>" method="post">
            
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre:" value="<?php if(!$enviado && isset($nombre)) echo($nombre);?>">
            
            <input type="text" class="form-control" name="correo" id="correo"placeholder="Correo:" value="<?php if(!$enviado && isset($correo)) echo($correo);?>">
            
            <textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje:"><?php if(!$enviado && isset($mensaje)) echo($mensaje); ?></textarea>

            <?php if (!empty($errores)): ?>
                <div class="alert error">
                    <?php echo ($errores)?>
                </div>
            <?php elseif ($enviado): ?>
                <div class="alert success">
                    <p>Datos Enviados Correctamete.</p>
                </div>
            <?php endif ?>
            
            <input type="submit" name="submit" id= "submit" value="Enviar" class="btnEnviar">
        </form>
    </div>

<footer>
    <span>&copy; Derechos reservados 2019</span>
    <div class="iconos">
        <a href="https://twitter.com/Mgilberto704" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://www.facebook.com/marioo00" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/mariomurilloo/" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="<?php echo url_for('contacto')?>"><i class="fas fa-envelope"></i></a>
    </div>
</footer>

</body>
</html>