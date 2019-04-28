 <div class="contenido">
        <div class="post">
            <article>
                <h2 class="titulo">Iniciar Sesion</h2>
                <form class="formulario" action="<?php echo(htmlspecialchars($_SERVER['PHP_SELF'])); ?>" method="post" autocomplete="off">
                    <input type="text" name="usuario" placeholder="Usuario">
                    <input type="password" name="password" placeholder="Contraseña">
                    <input type="submit" value="Iniciar Sesion">
                </form>
            </article>
        </div>
</div>