@extends('admin.template.main')
@section('content')

<div class="portfolio-resume hero-portafolio">

  <div class="large-4 columns">
    <div class="portfolio-resume-wrapper">
      <img class="portfolio-resume-headshot" src="{{asset('images/coder1.jpg')}}" alt="headshot">
      <h3 class="portfolio-resume-header">Desarrollamos En: </h3>
      <ul>
        <li>PHP: <ul>
        	<li>FrameWorks PHP: Laravel, Zend-Framework</li>
        </ul></li>
        
        <li>Python:
        <ul>
        	<li>Django</li>
        </ul></li>
        <li>HTML, CSS Y JS</li>
        <li>WordPress</li>
        <li>MySql, PostgreSql</li>
      </ul>
    </div>
  </div>

  <div class="large-4 columns">
    <div class="portfolio-resume-wrapper">
      <h3 class="portfolio-resume-header">Experiencia</h3>
      <div class="portfolio-resume-spacing">
        <h5><strong>Proyectos En PHP</strong></h5>
        <p>El lenguaje de programación web más extendido (PHP) junto a la base de datos más utilizada en el mundo web (MySQL). Estas características hacen de PHP y MySQL una pareja ideal para la creación de páginas web y programas de gestión on-line.</p>
        <ul>
          <li>Making goats noises</li>
          <li>Cleaning their stalls</li>
          <li>Milking the goats</li>
        </ul>
      </div>
      <div class="portfolio-resume-spacing">
        <h5><strong>Análizar el Desarrollo  </strong></h5>
        <p>Una parte muy importante en el diseño de páginas web y en el desarrollo de programas on-line de gestión es el análisis: la fase en la que se detallan las funcionalidades que la página o programa debe realizar.</p>
        <ul>
          <li>Contacto inicial con el cliente</li>
          <li>Análisis y especificación de requisitos</li>
          <li>Planteamiento de la base de datos y división de tareas</li>
        </ul>
      </div>
    </div>
  </div>

  <div class="large-4 columns">
    <div class="portfolio-resume-wrapper">
      <div class="portfolio-resume-spacing">
        <h5><strong>Proyectos En Django</strong></h5>
        <p>Django es un framework web de alto nivel que fomenta el desarrollo rápido y el diseño limpio y pragmático, </p>
        <ul>
          <li>Caracteristicas
          <ul>
            <li> Python: Gracias a esto Django hereda todas las características y facilidades que nos da Python, entre ellas escribir código bastante fácil de entender, y sobre todo te permite desarrollar aplicaciones muy rápidas y potentes.</li><br>
            <li>Rapidez: Django nació en un ambiente periodístico, donde se subian noticias muy rápido, y como los desarrolladores no pudieron estar a ese ritmo decidieron crear algo que sí lo haga, y así fue como nace Django.</li>
          </ul></li><br>
          <li>Proyectos Rápidos y Seguros</li>
        </ul>
      </div>
    </div>
  </div>

</div>




@endsection