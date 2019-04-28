$(document).ready(function(){
	
	var banner = {
		padre: $('#banner'),
		slides:$('#banner').children('.slide').length,
		posicion: 1
	}



//---------------------
//---Menu
//--------------------
	var altura = $('.menu').offset().top;
	var tarjetas = $('#contenido').children('.tarjeta').length;
	if (tarjetas>1){
		$(window).on('scroll', function() {
			if ($(window).scrollTop() >= altura-1) {
				$('.menu').addClass('menu-fixed');
			} else {
				$('.menu').removeClass('menu-fixed');
			}
		});
	}


//----------------------------
	banner.padre.children('.slide').first().css({
		'left': 0
	});


	var altoBanner = function(){
		var alto = banner.padre.children('.slide').outerHeight();
		banner.padre.css({
			'height': alto + 'px'
		});
	} 

	altoBanner();

	$(window).resize(function(){
		altoBanner();
	});

//---------------------
//---Banner
//--------------------

	//boton siguiente
	$('#banner-next').on('click',function(e){
		e.preventDefault();
		if(banner.posicion<banner.slides){
			//inicia todas las imagenes a la izquierda
			banner.padre.children().not('.active').css({
				'left': '100%'
			});

			//anima la trancision de la imagen.
			$('#banner .active').removeClass('active').next().addClass('active').animate({
				'left': '0'
			});

			$('#banner .active').prev().animate({
				'left': '-100%'
			});

			banner.posicion = banner.posicion + 1;
		} else {

			$('#banner .active').animate({
				'left': '-100%'
			});

			banner.padre.children().not('.active').css({
				'left': '100%'
			});


			$('#banner .active').removeClass('active');
			banner.padre.children('.slide').first().addClass('active').animate({
				'left': 0
			});
			banner.posicion=1;
		}
		

	});

	//Boton anterior.

	$('#banner-prev').on('click', function(e){
		e.preventDefault();
		if(banner.posicion > 1) {
			banner.padre.children().not('.active').css({
				'left': '-100%'
			});

			$('#banner .active').animate({
				'left': '100%'
			});

			$('#banner .active').removeClass('active').prev().addClass('active').animate({
				'left': '0'
			});

			banner.posicion = banner.posicion - 1;
		} else {
			banner.padre.children().not('active').css({
				'left': '-100%'
			});

			$('#banner .active').animate({
				'left': '100%'
			});

			$('#banner .active').removeClass('active');
			banner.padre.children().last().addClass('active').animate({
				'left':'0'
			});

			banner.posicion = banner.slides;
		}
	});
});