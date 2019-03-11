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

      <li class="active"><a href="index.html">Inicio</a></li>

      <li ><a href="usuarios">Administrador</a></li>

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

          

          <li><a href="incita.html">Informacion de mi Cita</a></li>

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

          <li><a href="dchina.html">Diplomado en Medicina China</a></li>

        </ul>

      </li>

    </ul>

  </div>









</nav>

</nav>







<br/> <br/><br/> <br/><br/>

	<div class="container">

    <div class="row">

        <div class="col-md-12">

            <div class="panel panel-primary">

                <div class="panel-heading">

                    <h3 class="panel-title">

                        <span class="glyphicon-bookmark"></span> Acceso Rapido</h3>

                        @if (Auth::user()->nivel == 'Admin')

                        <a href="users"> Usuarios</a>   || 

                        @endif

                        <a href="logout">Cerrar Sesion</a> </p>

                        

                        <h3>Bienvenido: {{Auth::user()->nombre}} </h3>

                        <h3>Tipo: {{Auth::user()->nivel}} </h3>

                        

                        

                </div>

                <div class="panel-body">

                    <div class="row">

                       

                        @if (Auth::user()->nivel == 'Admin')

                        <div class="col-xs-6 col-md-6">

                        @endif

                        @if (Auth::user()->nivel == 'Ac'  or Auth::user()->nivel == 'Ap' )

                        <div class="col-xs-12 col-md-12">

                        @endif  



                        

                       @if (Auth::user()->nivel == 'Admin' or Auth::user()->nivel == 'Ac')                           

                          <h2 class="text-center">Clinica</h2>

                          <center><a href="cita" class="btn btn-danger btn-lg" role="button"><span class="glyphicon glyphicon-plus-sign"></span><br/>Ver <br/> Pacientes</a>

                          <a href="clinica" class="btn btn-warning btn-lg" role="button"><span class="glyphicon glyphicon-user"></span> <br/></br>Pacientes</a>

                          <a href="expediente" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-folder-open"></span><br/></br>Expedientes</a>

                          

                          </center>

                          @endif

                        </div>





                        @if (Auth::user()->nivel == 'Admin')

                        <div class="col-xs-6 col-md-6">

                        @endif

                        @if (Auth::user()->nivel == 'Ag')

                        <div class="col-xs-12 col-md-12">

                        @endif  

                        

                        @if (Auth::user()->nivel == 'Admin' or Auth::user()->nivel == 'Ag')                        

                        

                          <center><h2 class="text-center">Gimnasio</h2>

                          <a href="gimnasio" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-user"></span> <br/></br>Clientes</a>

                          <a href="pagos?valor=1" class="btn btn-info btn-lg" role="button"><span class="glyphicon glyphicon-check"></span> <br/></br>Acceso</a>

                          

                          <a href="diciplinas?valor=1" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-plus"></span> <br/>Nueva</br>Diciplina</a>

                        </center>

                        </div>

                        @endif

                    </div>







                    <div class="row">

                        @if (Auth::user()->nivel == 'Admin')

                        <div class="col-xs-6 col-md-6">

                        @endif

                        @if (Auth::user()->nivel == 'Ap')

                        <div class="col-xs-12 col-md-12">

                        @endif  

                        @if (Auth::user()->nivel == 'Admin' or Auth::user()->nivel == 'Ap')

                          <center><h2 class="text-center">Pesaje</h2>

                          <a href="pacientes" class="btn btn-danger btn-lg" role="button"><span class="glyphicon glyphicon-user"></span> <br/></br>Clientes</a>

                          <a href="pesos" class="btn btn-warning btn-lg" role="button"><span class="glyphicon glyphicon-edit"></span> <br/>Editar</br>Pesos</a>

                          

                          <a href="fotos" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-picture"></span> <br/></br>Fotos</a>

                          </center>

                           </div>

                          @endif

                       





                        @if (Auth::user()->nivel == 'Admin')

                        <div class="col-xs-6 col-md-6">

                        @endif

                        @if (Auth::user()->nivel == 'Ad')

                        <div class="col-xs-12 col-md-12">

                        @endif  

                        

                          @if (Auth::user()->nivel == 'Admin' or Auth::user()->nivel == 'Ad')

                          <h2 class="text-center">Diplomados</h2>

                          <center><a href="diplomado" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-user"></span> <br/></br>Alumnos</a>

                          <a href="pagos?valor=2" class="btn btn-info btn-lg" role="button"><span class="glyphicon glyphicon-check"></span> <br/></br>Acceso</a>

                          

                          <a href="diciplinas?valor=2" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-plus"></span> <br/>Nuevo</br>Diplomado</a>

                        </center></div>



                    </div>

                    @endif











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















	

		

	</div>



	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

	<script type="text/javascript" src="js/bootstrap.js"></script>



</body>

</html>