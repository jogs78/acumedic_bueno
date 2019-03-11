<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Acumedic</title>
	<meta name="viewport" content="width=device-width, initial scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-responsive.css">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">	
	<nav class="navbar navbar-default" role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#"><img src="img/logo.png"></a>
  </div>
 
  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Inicio</a></li>
      <li><a href="#qsomos">Quienes Somos</a></li>
      <li><a href="#contact">Contacatanos</a></li>
      <li><a href="servicios">Servicios</a></li>
        </ul>
      </li>
    </ul>
 
    <!--<form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Buscar">
      </div>
      <button type="submit" class="btn btn-default">Enviar</button>
    </form>
 
    <ul class="nav navbar-nav navbar-right">
      <li><a href="clinica.html">Clinica</a></li>
      <li><a href="pesaje.html">Pesaje</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Gimansio <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Gimnasio</a></li>
          <li><a href="#">Strong Fit</a></li>
          <li><a href="#">Box</a></li>
          <li class="divider"></li>
          <li><a href="#">General</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Diplomados <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Diplomado en Jugos</a></li>
          <li><a href="#">Diplomado en Medicina China</a></li>
        </ul>
      </li>
    </ul>
  </div>
-->



</nav>
</nav>
<br/> <br/><br/> <br/><br/>
	<div class="container">
		<div class="jumbotron">
			<h1>Acumedic <small>Acupuntura medica</small></h1>
			<p>
			Nuestros servicios estan enfocados a mejorar las condiciones de vida de los pacientes, concientizando eminentemente a la prevención como factor primordial en la conservción de la salud.
			Las terapeuticas utilizadas en nuestra clínica son Acupuntura y medicina Tradicional China, Quiropráctica Médica, Láser Terapéutico, Homeopatía y Medicina biológica, Rehabilitación Deportiva y Tape kinesiológico y Masaje Integral.
			</p>
			<p><a href="acupuntura.html" target="_blank" class="btn btn-success btn-large">Quienes Somos</a>

			<a href="acupuntura.html" target="_blank" class="btn btn-success btn-large">Contactanos</a></p>
 
		</div>
		<div class="row">
			<div class="span6">
				<h2 class="text-center">Strong Fit</h2>
				<center><img src="img/sfit.jpg" width="160px" heigth="160px" class="img-circle"></center>
			</div>
			<div class="span4">
				<h2 class="text-center">Acupuntura</h2>
				<center><img src="img/acu.jpg" width="200px" heigth="200px" class="img-circle"></center>
				 <br/> <br/>
			</div>
		</div>
		<div class="jumbotron">
			<div id="qsomos">
        <br/> <br/><br/> <br/><br/> <br/>
			<h1>Quienes Somos</h1>
			<p>
				Somos una clínica que cuenta con unidad de diagnóstico mediante Bioresonancia Electrónica e Iridología.
				Contamos con un salón Para la Práctica del Hatha Yoga, Alimentación sana a domicilio, con productos de alta calidad elaborados sin grasas, azucares refinados, sodio y con recomendación especial para diabeticos, hipertensos o personas con enfermedades que necesiten apoyo nutricional.
			</p>
			<br/> <br/><br/> <br/><br/> <br/>
			</div>
		</div>
		<div class="jumbotron">
			<div id="contact">
			<h1>Contactanos</h1>
			<p>
				Estamos para servirle, envienos un correro con sus dudas o comentarios le responderemos a la brevedad posible.
			</p>
			<div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" action="" method="post">
          <fieldset>
            <legend class="text-center">Contactanos</legend>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Nombre</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Su E-mail</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Su mensaje</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
			
			</div>
		</div>
		
		<hr>
			<footer>Copyright © Benny 2014  bennyedu41@gmail.com</footer>
			
		</hr>
	</div>


	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>