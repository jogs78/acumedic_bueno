<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Angel">

    <title>Acceso</title>

    
    
            <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" href="css/bootstrap-responsive.css">
            <link rel="stylesheet" href="css/estilos.css">
            <link rel="stylesheet" type="text/html" href="css/bootstrap-select.css">          
            <link href="css/plugins/dataTables.bootstrap.css" rel="stylesheet">

</head>

<body>
@include('menu')


                    <h1 class="page-header">Pacientes</h1>         
         
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="buscadores">
                                    <thead>
                                        <tr class="odd gradeX">
                                            <th>Matricula</th>          
                                            <th>Nombre</th>
                                            <th>Inicio De Subscripción</th>
                                            <th>Fin De Subscripción</th>
                                            <th>Diplomado</th>
                                        </tr>
                                    </thead>        

                                         @if($pacientes)
                                        
                                        @foreach($pacientes as $pacientes)
                                        <?php $flag=0; ?>
                                        
                                        <tr >
                                            
                                            <td>{{$pacientes->id}}</td>
                                            <td>{{ $pacientes->nombre }} {{ $pacientes->apellidop }} {{ $pacientes->apellidom }}</td>
                                            
                                            <td>{{$pacientes->inscripcion}}</td>
                                            <td>{{$pacientes->finsub}}</td>
                                            @foreach($modulo as $modu)
                                            @if($modu->id==$pacientes->idDiciplina and $flag==0)
                                            <td>{{$modu->nombre}}</td>
                                        <?php $flag=1; ?>
                                            @endif

                                        @endforeach
                                            </tr>
                                        
                                        @endforeach


                                      </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            @else
<div class="alert alert-danger fade in">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
<strong>Error </strong> Sin Miembros que mostrar.
</div>
@endif
      
                                    </thead>
                                    
                                    <tbody>


      



    
                        </div>
                        <!-- /.panel-body -->
         
            

    <!-- jQuery -->
    <script src="js/jquery.js"></script>




    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>
    <script src="js/funciones.js"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->


<script type="text/javascript" src="js/bootstrap-select.js"></script>

</body>

</html>

