 <div class="contenedor">
        <div class="post">
            <article>
                <h2 class="titulo">Nuevo Evento</h2>
                <form class="formulario" action="<?php echo(htmlspecialchars($_SERVER['PHP_SELF'])); ?>" method="post" enctype="multipart/form-data" autocomplete="off">
                    <label for="fecha">Titulo:</label>
                    <input type="text" name="titulo" placeholder="(ej.)Concierto Dj...">
                    <label for="fecha">Fecha del evento:</label><br/>
                    <input id="fecha" class="dat1" type="datetime-local" name="fecha"><br/>
                    <script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
                    <label for="text">Descripción:</label>
                    <textarea name="text" id="ckeditor" class="ckeditor" placeholder="Texto del Articulo"></textarea>
                    <input type="file" name="thumb">
                    <input type="submit" value="Crear Articulo">
                </form>
            </article>
        </div>
    </div>