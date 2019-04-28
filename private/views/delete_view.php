

<br/>
		<a class="back-link" href="<?php echo url_for('admin/index.php');?>">&laquo; Regresar</a>
<br/><br/>

<div class="contenedor">
        <div class="post">
            <article>
                <h2 class="titulo">Eliminar Evento</h2>
                <br/>

                <form class="formulario" action="<?php echo(htmlspecialchars($_SERVER['PHP_SELF']) .'?id=' . base64_encode($id)); ?>" method="post" enctype="multipart/form-data" autocomplete="off">
					<h3>Esta seguro que desea eliminar esta página?</h3><br/>
                    
                    <label for="fecha"><strong>Titulo:</strong></label><br/>
                    <?php echo(utf8_encode($event['TITLE'])); ?><br/><br/>
                    <label for="fecha"><strong>Fecha del evento:</strong></label><br/>
					<?php echo ($event['DATE']); ?><br/><br/>
                    <label for="text"><strong>Descripción:</strong></label><br/>
                    <?php echo(utf8_encode($event['DESCRIPTION'])); ?><br/><br/>
                    <input type="submit" value="Eliminar">
                </form>
            </article>
        </div>
    </div>