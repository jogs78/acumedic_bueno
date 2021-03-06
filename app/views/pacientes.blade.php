<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nutricion</title>

    <!-- Bootstrap Core CSS -->
    
     <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" href="css/bootstrap-responsive.css">
            <link rel="stylesheet" href="css/estilos.css">
            <link rel="stylesheet" type="text/css" href="css/bootstrap-select.css">          
    <link href="css/plugins/dataTables.bootstrap.css" rel="stylesheet">

    

    <!-- Custom Fonts -->
    




</head>

<body>
@include('menu')
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Nuevo Usuario</h4>
      </div>
      <div class="modal-body">
        


        <fieldset><legend><h1>Datos Nuevo Paciente</h1></legend>
    <form class="form-horizontal" action='pacientes/agregar' method="POST"> 
    <div class="form-group">
    <label class="col-lg-2 control-label">Nombre:</label>
    <div class="col-lg-9">
    <input class="form-control" type="text" name="name" required autofocus>
    </div></div>
    <div class="form-group">
    <label class="col-lg-2 control-label" class="col-lg-2 control-label">Apellido P:</label>
    <div class="col-lg-9">
    <input class="form-control" type="text" name="apep" required>
    </div></div>
    <div class="form-group">
    <label class="col-lg-2 control-label">Apellido M:</label>
    <div class="col-lg-9">
    <input class="form-control" type="text" name="apem" required>   
    </div></div>

    <div class="form-group">
    <label class="col-lg-2 control-label">Edad:</label> 
    <div class="col-lg-9">
    <input class="form-control" type="text" name="edad" required>
    </div></div>

    
<div class="form-group">
    <label class="col-lg-2 control-label">Tel</label>
    <div class="col-lg-9">
    <input class="form-control" type="tel" name="tel">
    </div></div>
    <div class="form-group">
    <label class="col-lg-2 control-label">Cel</label>
    <div class="col-lg-9">
    <input class="form-control" type="tel" name="cel">
    </div></div>

    <div class="form-group">
    <label class="col-lg-2 control-label">Altura:</label>
    <div class="col-lg-9">
    <input class="form-control" type="number" name="alt" required>
    </div></div>
    <div class="form-group">
    <label class="col-lg-2 control-label">Peso:</label>
    <div class="col-lg-9">
    <input class="form-control" type="number" name="peso" required>
    </div></div>
        <div class="form-group">
<label class="col-lg-2 control-label">Anfitrion:</label>
<div class="col-lg-9">
<input class="form-control" type="text" name="anfi"><br/>
</div></div>
    
<!--      GOOD          -->
<div class="btn-group">
<input class="btn btn-success" type="submit" Value="Guardar">
<input class="btn btn-primary" type="reset" Value="Borrar Datos">
</div>

</form>


      </div>
    </div>
  </div>
</div>




<!-- Modal Peso edit-->
<div class="modal fade" id="Pesoa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus-square"></i> Agregar peso <span id="load"> <img src="{{ asset('img/loading-icons/loading1.gif')}}"> Cargando...</span></h4>
      </div>
      <div class="modal-body">
<form role="form" action="pacientes/update" method="post" id="formuEdit" >
  <div class="form-group">
    <label for="exampleInputEmail1">Peso Actual</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  name="pesoa_edit">
  </div>
   
  
  <input type="hidden" name="pesaje_id" >


        
        
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
       <button type="submit" class="btn btn-inverse">Guardar</button>
       
       </form> 
      </div>
    </div>
  </div>
</div>
<!-- End Modal -->
















<!-- Modal Peso edit-->
<div class="modal fade" id="Mcorporal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus-square"></i> Agregar Masa Corporal <span id="load"> <img src="{{ asset('img/loading-icons/loading1.gif')}}"> Cargando...</span></h4>
      </div>
      <div class="modal-body">
<form role="form" action="pacientes/updatemc" method="post" id="formuEdit" >
  <div class="form-group">
    <label for="exampleInputEmail1">Masa Corporal</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  name="mcorporal_edit">
  </div>
   
  
  <input type="hidden" name="pesaje_id" >


        
        
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
       <button type="submit" class="btn btn-inverse">Guardar</button>
       
       </form> 
      </div>
    </div>
  </div>
</div>
<!-- End Modal -->







<!-- Modal Peso edit-->
<div class="modal fade" id="Cagua" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus-square"></i> Agregar Cantidad de Agua<span id="load"> <img src="{{ asset('img/loading-icons/loading1.gif')}}"> Cargando...</span></h4>
      </div>
      <div class="modal-body">
<form role="form" action="pacientes/updateca" method="post" id="formuEdit" >
  <div class="form-group">
    <label for="exampleInputEmail1">Cantidad de Agua</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  name="cagua_edit">
  </div>
   
  
  <input type="hidden" name="pesaje_id" >


        
        
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
       <button type="submit" class="btn btn-inverse">Guardar</button>
       
       </form> 
      </div>
    </div>
  </div>
</div>
<!-- End Modal -->

















<!-- Modal Peso edit-->
<div class="modal fade" id="Foto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus-square"></i> Subir Foto<span id="load"> <img src="{{ asset('img/loading-icons/loading1.gif')}}"> Cargando...</span></h4>
      </div>
      <div class="modal-body">
<form role="form" action="pacientes/updatefoto" method="post" id="formuEdit" enctype="multipart/form-data" >
  <div class="form-group">
    <label for="exampleInputEmail1">Subir Foto</label>
    <input type="file" class="form-control" id="exampleInputEmail1"  name="foto_edit">
  </div>
   
  
  <input type="hidden" name="pesaje_id" >


        
        
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
       <button type="submit" class="btn btn-inverse">Guardar</button>
       
       </form> 
      </div>
    </div>
  </div>
</div>
<!-- End Modal -->















<!-- Modal mostrar foto-->
<div class="modal fade" id="Mosf" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus-square"></i> Foto<span id="load"> <img src="{{ asset('img/loading-icons/loading1.gif')}}"> Cargando...</span></h4>
      </div>
      <div class="modal-body">
<form role="form" action="foto/updatefoto" method="post" id="formuEdit" >
  <div class="form-group">
    <label for="exampleInputEmail1">Foto del Paciente</label>
   <img name="foto_ver" id="foto_ver" src="" width="400" height="200"> 
  <input type="hidden" name="foto_ver">
 

  </div>
   
  
  <input type="hidden" name="pesaje_id" >


        
        
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
       <button type="submit" class="btn btn-inverse">Guardar</button>
       
       </form> 
      </div>
    </div>
  </div>
</div>
<!-- End Modal -->



























                <?php $status=Session::get('status'); ?>
                @if($status=='ok_create')
                <div class="alert alert-success fade in"><button class="close" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-square"></i> El usuario fue creado con exito</div>
                @endif

                @if($status=='ok_delete')
                <div class="alert alert-success fade in"><button class="close" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-square"></i> El usuario fue eliminado con exito</div>
            @endif

                    <h1 class="page-header">Pacientes Coaching Nutricional</h1>
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" style="float:right;">
  <span class="glyphicon glyphicon-plus"></span>
</button>
         
         
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="dataTables-example">
                                    <thead>
                                        <tr class="odd gradeX">
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Apellido Paterno</th>
                                            <th>Apellido Materno</th>
                                            <th>Telefonos</th>
                                            <th>Correo</th>
                                            <th>Edad</th>
                                            <th>Altura</th>
                                            <th>Peso Inicial</th>
                                            <th>Peso Actual</th>
                                            <th>Foto</th>
                                            <th>Masa Corporal</th>
                                            <th>Cantidad de Agua</th>
                                        </tr>
                                    </thead>        

                                         @if($pacientes)
                                        
                                        @foreach($pacientes as $pacientes)
                                            <tr >
                                            <td>{{ $pacientes->id }}</td>
                                            <td>{{ $pacientes->nombre }}</td>
                                            <td>{{ $pacientes->apellidop }}</td>
                                            <td >{{ $pacientes->apellidom }}</td>
                                            <td >{{ $pacientes->tel }} || {{ $pacientes->cel }}</td>
                                            <td >{{ $pacientes->mail }}</td>
                                            <td >{{ $pacientes->edad }}</td>
                                            <td >{{ $pacientes->altura }} cm.</td>
                                            <td >{{ $pacientes->peso }} kg.</td>
                                            <td>{{ $pacientes->pesoa }} kg.<a href="#Pesoa" class="edit" data-toggle="modal"  id='{{$pacientes->id}}' title='{{$pacientes->nombre}}' ><span class='glyphicon glyphicon-pencil'></span></a></td>
                                             @if(!$pacientes->foto)

                                            <td><a href="#Foto" class="edit" data-toggle="modal"  id='{{$pacientes->id}}' title='{{$pacientes->nombre}}' ><span class='glyphicon glyphicon-pencil'></span></a>
                                            </td>
                                            @else
                                            <td ><a href="#Mosf" class="edit" data-toggle="modal"  id='{{$pacientes->id}}' title='{{$pacientes->nombre}}' ><span class='glyphicon glyphicon-eye-open'></span></a> ||  
                                            <a href="#Foto" class="edit" data-toggle="modal"  id='{{$pacientes->id}}' title='{{$pacientes->nombre}}' ><span class='glyphicon glyphicon-pencil'></span></td>
                                            @endif
                                            <td>{{ $pacientes->mcorporal }} kg.<a href="#Mcorporal" class="edit" data-toggle="modal"  id='{{$pacientes->id}}' title='{{$pacientes->nombre}}' ><span class='glyphicon glyphicon-pencil'></span></a></td>
                                            <td>{{ $pacientes->cagua }} kg.<a href="#Cagua" class="edit" data-toggle="modal"  id='{{$pacientes->id}}' title='{{$pacientes->nombre}}' ><span class='glyphicon glyphicon-pencil'></span></a></td>
                                            </tr>
                                        </tr>
                                        @endforeach
                                      </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            @else
<div class="alert alert-danger fade in">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
<strong>Error</strong>Todavia no hay ningún usuario registrado Por favor registrese.
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

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {

        $('#dataTables-example').dataTable();
    });
    </script>



<script>
$(document).ready(function() {
  
  $('.edit').click(function() {

  
    var m;
    m=$(this).attr ('id');
    <!--//alert(m);-->
    $('[nombre=user]').val($(this).attr ('id'));
    
    var faction = "<?php echo URL::to('pacientesquery/getpaciente/data'); ?>";
    
    var fdata = $('#val').serialize();
    
    $('#load').show();
    $.post(faction, { paciente_id:($(this).attr ('id')) }, function(json) {
       
            $('#formuEdit input[name="pesaje_id"]').val(json.id);
            //document.getElementById('verFoto').src=val(json.foto);
            $('#formuEdit input[name="foto_ver"]').val(json.foto);  
            //val(json.foto);
            $('#formuEdit input[name="pesoa_edit"]').val(json.pesoa);
            $('#formuEdit input[name="mcorporal_edit"]').val(json.mcorporal);
            $('#formuEdit input[name="cagua_edit"]').val(json.cagua);
            $('#foto_ver').attr("src",'imagenes/'+json.id+"/"+json.foto);
            
            
            
            
            $('#load').hide();
            
        
    });
    
  });
 
});
</script>




<script type="text/javascript" src="js/bootstrap-select.js"></script>

</body>

</html>
