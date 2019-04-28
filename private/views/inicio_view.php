<section class="section-slider">
	<section class="tarjeta-slider">
		<section class="slider_banner">
			<div class="banner" id="banner">
				<img class="slide active" src="images/mexico2.jpg" alt="">
				<img class="slide" src="images/mexico1.jpg" alt="">
				<img class="slide" src="images/mexico3.jpg" alt="">
			</div>
			<!--<div class="text-image"><span><h3 class="infoslide">Tenemos los mejores eventos</h3></span></div>-->
			<a href="#" id="banner-prev" class="flecha-banner anterior"><i class="fas fa-chevron-left"></i></a>
			<a href="#" id="banner-next" class="flecha-banner siguiente"><i class="fas fa-chevron-right"></i></span></a>
		</section>
	</section>
</section>

<section class="contenido" id='contenido'>

	<h2>Proximos Eventos.</h2>

	<?php while ($event= mysqli_fetch_assoc($events_set)) { ?>
	<section class="tarjeta">
		<div class=derecha>
			<div class="imagenCalendario">
				<img class="imgPublicacion" src="images/<?php echo $event['IMAGE'];?>" alt="Imagen">
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
		</div>
		
		<div class="compra">
			<h3>Aparta tu lugar</h3>
			<p>Que no te ganen...</p>
			<button>Registrar</button>
		</div>
	</section>
	<?php } 

      mysqli_free_result($events_set);
    ?>


</section>