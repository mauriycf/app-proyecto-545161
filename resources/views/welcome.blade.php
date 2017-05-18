@extends('admin.template.main')
@section('content')
<!--div class="hero">
		<h2>Gracias por su Visita.</h2>
		<h5 class="justify">Somos una empresa que se encarga del diseño de su Sitio Web, para que este sea seguro, 100% administrable, rentable y sobre todo exitoso; realizando pruebas de seguridad antes y después que su página esté funcionando, a fin de garantizar la seguridad de su información y dándole el mejor posicionamiento posible en los buscadores más importantes</h5>
<h5 class="justify">También somos proveedores de servicio de Soporte Técnico para equipos y redes, disponiendo de técnicos especializados para realizar mantenimientos preventivos y correctivos que podrá solventar cualquier eventualidad en sus equipos y redes.</h5>
<h5 class="justify">Para nosotros es muy importante servirle, por eso dejamos a su disposición nuestro Formulario de Contacto, donde podrá realizar todas las preguntas que crea conveniente, que con gusto y en la brevedad posible, le responderemos, mi Gracias y Saludos</h5>
</div>
<!-- card -->

<div class="fullscreen-image-slider">
  <div class="orbit" role="region" aria-label="FullScreen Pictures" data-orbit>
    <img id="logo" class="animated bounceInLeft" src="{{asset('images/logo.png')}}" alt="">
  </div>
</div>
<div class="section1">
<div class="row">
	<div class="small-12 large-4 columns">
		<div class="cardBox">
			<div class="card bar">
				<div class="card news-card">
					<img src="{{asset('images/coder1.jpg')}}" id="img-responsive">
					<div class="card-section">
						<div class="news-card-date"><?php echo $ldate = date('Y-m-d H:i:s'); ?></div>
						<article class="news-card-article">
							<h4 class="news-card-title"><a href="#">Lenguajes</a></h4>
							<h6><b>*</b> Python</h6>
							<h6><b>*</b> PHP</h6>
							<h6><b>*</b> HTML</h6>
							<h6><b>*</b> CSS</h6>
							<h6><b>*</b> JS</h6>
						</article>
						<div class="news-card-author">
							<div class="news-card-author-image">
								<img src="{{asset('images/logo.png')}}" width="50px" alt="user">
							</div>
							<div class="news-card-author-name">
								By <a href="#">J&M</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="cardBox">
			<div class="card bar">
				<div class="card news-card">
					<img src="{{asset('images/support.png')}}" width="75%" id="center">
					<div class="card-section">
						<div class="news-card-date"><?php echo $ldate = date('Y-m-d H:i:s'); ?></div>
						<article class="news-card-article">
							<h4 class="news-card-title"><a href="#">Mantenimientos</a></h4>
							<h6><b>*</b>Preventivo</h6>
							<h6><b>*</b>Correctivo</h6>
							<h6><b>*</b>Sistemas Unix, Windows.</h6>
						</article>
						<div class="news-card-author">
							<div class="news-card-author-image">
								<img src="{{asset('images/logo.png')}}" width="50px" alt="user">
							</div>
							<div class="news-card-author-name">
								By <a href="#">J&M</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="cardBox">
			<div class="card foo">
				<div class="card news-card">
					<img src="{{asset('images/redes.jpg')}}" width="70%" id="center">
					<div class="card-section">
						<div class="news-card-date"><?php echo $ldate = date('Y-m-d H:i:s'); ?></div>
						<article class="news-card-article">
							<h4 class="news-card-title"><a href="#">Sevicios de Comunicación</a></h4>
							<h6><b>*</b>Teléfonia, IP</h6>
							<h6><b>*</b>Puntos de Red</h6>
						</article>
						<div class="news-card-author">
							<div class="news-card-author-image">
								<img src="{{asset('images/logo.png')}}" width="50px" alt="user">
							</div>
							<div class="news-card-author-name">
								By <a href="#">J&M</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="cardBox">
			<div class="card dar">
				<div class="card news-card">
					<img src="{{asset('images/coder4.jpg')}}" width="70%" id="center">
				</div>
			</div>
		</div>
	</div>
	<div class="small-12 large-7 columns">
		<section class="anime">
			<div class="grid-img">
				<img src="images/mujer3.png" alt="Img 1" id="mujeron">
			</div>
			<div class="grid-text">
				<h2>Desarrollo Web</h2>
				<p class="justify">Páginas Estáticas e Interactivas, Sistemas Informáticos, Plataformas de Comercios Electrónicos, Páginas 100% Administrables, Posicionamiento SEO en los mejores Buscadores.</p>
				<a target="_blank" href="{{url('/servicios/desarrollo-web')}}">Ver Más</a>
			</div>
		</section>
		<section class="anime">
			<div class="grid-img img-right">
				<img src="images/mujer5.jpg" alt="Img 2">
			</div>
			<div class="grid-text">
				<h2>Soporte Técnico</h2>
				<p class="justify">Instalación de Sistemas Operativos(Unix, Windows), Mantenimiento interno de equipos, instalacion de programas, herramientas y aplicaciones entre otros.</p>
				<p class="justify">Soporte Técnico en Emergencia, Deteccion de fallas en equipos y software. Asesorias Técnicas, mantenimientos preventivos y correctivos. Creacion de inventarios de equípos y softwares instalados. Repotenciacion de equípos</p>
				<a target="_blank" href="{{url('/servicios/soporte-tecnico')}}">Ver Más</a>
			</div>
		</section>
		<section class="anime">
			<div class="grid-text">
				<div class="grid-img">
					<img src="images/mujer6.jpg" alt="Img 3">
				</div>
				<h2>Redes</h2>
				<p class="justify">Diseño y Análisis de topología de redes físicas y lógicas. Instalación de Servicios de Teléfonia IP. Instalación de Servicios de Vigilancia Online. Diseño, Implementación y mantenimiento de Servicios de Comunicación. Instalación y Conexion de Puntos de Red. Correccion de Errores Fisicos y Lógicos en la Red.</p>
				<a target="_blank" href="https://www.origamid.com/cursos/css-com-sass/">Ver Más</a>
			</div>
		</section>
		<section class="anime">
			<div class="grid-img img-right">
				<img src="images/coder5.jpg" calt="Img 4">
			</div>
			<div class="grid-text">
				<h2>Servicio de Pentesting</h2>
				<p>Servicio de Detección de Vulnerabilidades, Pruebas de Seguridad en Web, Certificados SSL.</p>
				<a target="_blank" href="https://www.origamid.com/cursos/web-design-completo/">Ver Más</a>
			</div>
		</section>
	</div>
</div>
</div>
<!-- End Card -->

<div class="marketing-site-features">
	<div class="center">
		<img src="{{asset('images/logo.png')}}" class="marketing-logo" alt="">
	</div>
  <h2 class="marketing-site-features-headline">J&M Te brinda</h2>
  <p class="marketing-site-features-subheadline subheader">Lo mejor en: </p>
  <div class="row">
    <div class="small-12 medium-3 columns">
      <i class="fa fa-ticket" aria-hidden="true"></i>
      <h4 class="marketing-site-features-title">Soporte Técnico</h4>
      <p class="marketing-site-features-desc">Soporte Técnico de Emergencia, Deteccion de fallas en equipos y software.</p>
    </div>
    <div class="small-12 medium-3 columns">
      <i class="fa fa-user" aria-hidden="true"></i>
      <h4 class="marketing-site-features-title">Atención al Cliente </h4>
      <p class="marketing-site-features-desc">Contactanos las 24 horas del día.</p>
    </div>
    <div class="small-12 medium-3 columns">
      <i class="fa fa-code" aria-hidden="true"></i>
      <h4 class="marketing-site-features-title">Desarrollo Web</h4>
      <p class="marketing-site-features-desc">Creación de páginas web staticas o dinamicas, desarrollo de sistemas web.</p>
    </div>
    <div class="small-12 medium-3 columns">
      <i class="fa fa-shield" aria-hidden="true"></i>
      <h4 class="marketing-site-features-title">Seguridad Informática</h4>
      <p class="marketing-site-features-desc">Servicio de Detección de Vulnerabilidades, Pruebas de Seguridad en Web, Certificados SSL.</p>
    </div>
  </div>
</div>
<!-- slider code -->
<div class="orbit testimonial-slider-container" role="region" aria-label="testimonial-slider" data-orbit>
<ul class="orbit-container">
	<button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
	<button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
	<!-- content slide 1 -->
	<li class="is-active orbit-slide">
		<div class="testimonial-slide row">
			<div class="small-12 large-9 column">
				<div class="row align-middle testimonial-slide-content">
					<div class="small-12 medium-4 column hide-for-small-only profile-pic">
						<img src="http://placekitten.com/g/300/300">
					</div>
					<div class="small-12 medium-8 column testimonial-slide-text">
						<p class="testimonial-slide-quotation">Hide when guests come over instantly break out into full speed gallop across the house for no reason mrow touch water with paw then recoil in horror.</p>
						<div class="testimonial-slide-author-container">
							<div class="small-profile-pic show-for-small-only">
								<img src="http://placekitten.com/g/50/50">
							</div>
							<p class="testimonial-slide-author-info">Fleas Witherspoon<br><i class="subheader">Cat World Inc.</i></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</li>
	<!--content slide 2 -->
	<li class="orbit-slide">
		<div class="testimonial-slide row">
			<div class="small-12 large-9 column">
				<div class="row align-middle testimonial-slide-content">
					<div class="small-12 medium-4 column hide-for-small-only profile-pic">
						<img src="http://placekitten.com/g/300/300">
					</div>
					<div class="small-12 medium-8 column testimonial-slide-text">
						<p class="testimonial-slide-quotation">Hide when guests come over instantly break out into full speed gallop across the house for no reason mrow touch water with paw then recoil in horror.</p>
						<div class="testimonial-slide-author-container">
							<div class="small-profile-pic show-for-small-only">
								<img src="http://placekitten.com/g/50/50">
							</div>
							<p class="testimonial-slide-author-info">Fleas Witherspoon<br><i class="subheader">Cat World Inc.</i></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</li>
	<!-- content slide 3 -->
	<li class="orbit-slide">
		<div class="testimonial-slide row">
			<div class="small-12 large-9 column">
				<div class="row align-middle testimonial-slide-content">
					<div class="small-12 medium-4 column hide-for-small-only profile-pic">
						<img src="http://placekitten.com/g/300/300">
					</div>
					<div class="small-12 medium-8 column testimonial-slide-text">
						<p class="testimonial-slide-quotation">Hide when guests come over instantly break out into full speed gallop across the house for no reason mrow touch water with paw then recoil in horror.</p>
						<div class="testimonial-slide-author-container">
							<div class="small-profile-pic show-for-small-only">
								<img src="http://placekitten.com/g/50/50">
							</div>
							<p class="testimonial-slide-author-info">Fleas Witherspoon<br><i class="subheader">Cat World Inc.</i></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</li>
	<!-- content slide 4 -->
	<li class="orbit-slide">
		<div class="testimonial-slide row">
			<div class="small-12 large-9 column">
				<div class="row align-middle testimonial-slide-content">
					<div class="small-12 medium-4 column hide-for-small-only profile-pic">
						<img src="http://placekitten.com/g/300/300">
					</div>
					<div class="small-12 medium-8 column testimonial-slide-text">
						<p class="testimonial-slide-quotation">Hide when guests come over instantly break out into full speed gallop across the house for no reason mrow touch water with paw then recoil in horror.</p>
						<div class="testimonial-slide-author-container">
							<div class="small-profile-pic show-for-small-only">
								<img src="http://placekitten.com/g/50/50">
							</div>
							<p class="testimonial-slide-author-info">Fleas Witherspoon<br><i class="subheader">Cat World Inc.</i></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</li>
</ul>
</div>
<!-- slider close -->
<!-- portafolio -->
<div class="section1">
<section class="filter-simple">
	<div class="button-group round">
		<button class="button hollow filter-simple-button is-active" data-filter="all">All</button>
		<button class="button hollow filter-simple-button" data-filter="space">Space</button>
		<button class="button hollow filter-simple-button" data-filter="cats">Cats</button>
		<button class="button hollow filter-simple-button" data-filter="murray">Bill Murray</button>
	</div>
	<div class="row small-up-2 medium-up-3 large-up-4">
		<div class="column column-block filter-simple-item space">
			<img src="https://spaceholder.cc/350x350" alt="" class="foo" />
		</div>
		<div class="column column-block filter-simple-item murray">
			<img src="http://fillmurray.com/350/350" alt="" class="foo" />
		</div>
		<div class="column column-block filter-simple-item cats">
			<img src="http://placekitten.com/320" alt="" class="right" />
		</div>
		<div class="column column-block filter-simple-item cats">
			<img src="http://placekitten.com/g/330" alt="" class="right" />
		</div>
		<div class="column column-block filter-simple-item cats">
			<img src="http://lorempixel.com/output/cats-q-c-350-350-2.jpg" class="foo" alt="" />
		</div>
		<div class="column column-block filter-simple-item murray">
			<img src="http://fillmurray.com/350/350" alt="" class="foo" />
		</div>
		<div class="column column-block filter-simple-item murray">
			<img src="http://fillmurray.com/350/350" alt="" class="right" />
		</div>
		<div class="column column-block filter-simple-item cats">
			<img src="http://lorempixel.com/output/cats-q-c-350-350-10.jpg" alt=""  class="right"/>
		</div>
		<div class="column column-block filter-simple-item murray">
			<img src="http://fillmurray.com/g/350/350" alt="" class="foo" />
		</div>
		<div class="column column-block filter-simple-item cats">
			<img src="http://lorempixel.com/output/cats-q-c-350-350-9.jpg" alt="" class="foo" />
		</div>
		<div class="column column-block filter-simple-item space">
			<img src="https://spaceholder.cc/350x350" alt="" class="right"/>
		</div>
		<div class="column column-block filter-simple-item space">
			<img src="https://spaceholder.cc/350x350" alt="" class="right"/>
		</div>
	</div>
</section>
</div>
<!-- end Portafolio -->
@endsection