<section class="contenido">
	<h2>Panel de control</h2>
	<div class="botonera">
		<a href="<?php echo url_for('/admin/new.php');?>" class="btn">Nuevo Evento</a>
	    <a href="<?php echo WWW_ROOT.'/admin/cerrarSesion.php'?>" class="btn">Cerrar Sesion</a>
    </div>
	<?php while ($event= mysqli_fetch_assoc($events_set)) { ?>
		<section class="tarjeta">
			<div class="derecha">
				<?php $v_date=f_getDate($event['DATE']); ?>
				<div class="horario">
					<div class="calendario">
						<div class="mes">
							<h4><?php echo $v_date['month'] ?></h4>
						</div>
						<div class="dia">
							<p><strong><?php echo $v_date['day'] ?></strong></p>
						</div>
						<div class="anio">
							<p><?php echo $v_date['year'] ?></p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="info">
				<h3><?php echo utf8_encode($event['TITLE']); ?></h3>
				<p><?php echo utf8_encode($event['DESCRIPTION']); ?></p>
			</div>

			<div class="compra">
				<div class="operaciones">
					<a href=""><i class="fas fa-eye"></i> Ver</a>
					<a href="<?php echo url_for('/admin/edit.php?id='.base64_encode($event['ID']));?>"><i class="fas fa-edit"></i> Editar</a>
					<a href="<?php echo url_for('/admin/delete.php?id='.base64_encode($event['ID']));?>"><i class="fas fa-trash-alt"></i> Borrar</a>
				</div>
			</div>
		</section>
	<?php } 
      mysqli_free_result($events_set);
    ?>
</section>