 <div class="contenedor">
        <div class="post">
            <article>
                <h2 class="titulo">Editar Evento</h2>
                <br/>
                

                <form class="formulario" action="<?php echo(htmlspecialchars($_SERVER['PHP_SELF']) .'?id=' . base64_encode($id)); ?>" method="post" enctype="multipart/form-data" autocomplete="off">

                    <label for="fecha">Titulo:</label>
                    <input type="text" name="titulo"  value="<?php echo(utf8_encode($event['TITLE'])); ?>">

                    <label for="fecha">Fecha del evento:</label><br/>
                    <input id="fecha" class="dat1" type="datetime-local" name="fecha" value="<?php echo str_replace(' ','T', $event['DATE']);?>"><br/>

                    <script type="text/javascript" src="../ckeditor/ckeditor.js"></script>

                    <label for="text">Descripción:</label>
                    <textarea name="text" id="ckeditor" class="ckeditor"><?php echo(utf8_encode($event['DESCRIPTION'])); ?></textarea>
                    <input type="file" name="thumb">
                    <input type="hidden" name="thumb-guardada" value="<?php echo($event['IMAGE']); ?>">
                    <input type="submit" value="Guardar Cambios">
                </form>
            </article>
        </div>
    </div>
