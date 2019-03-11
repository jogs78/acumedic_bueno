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
      <li ><a href="index.html">Inicio</a></li>
      <li class="active"><a href="logadmin.html">Administrador</a></li>
        </ul>
      </li>
    </ul>
 
    <!--<form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Buscar">
      </div>
      <button type="submit" class="btn btn-default">Enviar</button>
    </form>-->
 
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Clinica <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="acita.html">Agendar una Cita</a></li>
          <li><a href="#">Informacion de mi Cita</a></li>
        </ul>
      </li>
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
          <li><a href="djugos.html">Diplomado en Jugos</a></li>
          <li><a href="djugos.html">Diplomado en Medicina China</a></li>
        </ul>
      </li>
    </ul>
  </div>




</nav>
</nav>
<br/> <br/><br/> <br/><br/>
	<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            @if(Session::has('login_errors'))
            <h1 class="text-center login-title">Usuario ó contraseña incorrecta</h1>

            @else
            <h1 class="text-center login-title">Logueate para continuar</h1>
            @endif
            <div class="account-wall">

                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                     @if(Session::has('login_errors'))
                    <span class="text-center login-title">Intentalo de nuevo</span>
                  @endif
                <form class="form-signin" action="usuarios/user" method="POST">
                <input type="text" class="form-control" placeholder="Usuario" name="username" required autofocus>
                <input type="password" class="form-control" placeholder="Password" name="password" required>
                <button class="btn btn-lg btn-primary btn-block" name="enviar" type="submit">
                    Sign in</button>
                   
                <label class="checkbox pull-left">
                    <input class="remember" type="checkbox" value="remember-me">
                    Recordarme
                </label>
                <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                </form>
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