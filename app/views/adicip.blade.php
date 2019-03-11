<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Angel">

    <title>Disciplinas</title>

   <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" href="css/bootstrap-responsive.css">
            <link rel="stylesheet" href="css/estilos.css">
            <link rel="stylesheet" type="text/css" href="css/bootstrap-select.css">
            <link href="css/plugins/dataTables.bootstrap.css" rel="stylesheet">

</head>

<body>
 @include('menu')
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Nuevo Usuario</h4>
</div>

<div class="modal-body">
  


<fieldset><legend><h1>Datos De Diciplina</h1></legend>
    <form class="form-horizontal" action='diciplinas/agregar' method="POST"> 

    <div class="form-group">
<label class="col-lg-2 control-label" class="col-lg-2 control-label">Nombre:</label>
    <div class="col-lg-9">
        <input class="form-control" type="text" name="name" required autofocus >
</div></div>
<div class="form-group">
<label class="col-lg-2 control-label">Descripcion</label>
<div class="col-lg-9">
<textarea class="form-control" name="desc" cols="150"></textarea>
</div></div>
<div class="form-group">
<label class="col-lg-2 control-label">Costo</label>
<div class="col-lg-9">
<input class="form-control" type="number" name="precio" required>   
</div></div>
<input type="hidden" name="mod" value="{{$mod}}">





      </div>
      <div class="modal-footer">
        <div class="btn-group">
  <input class="btn btn-success" type="submit" Value="Guardar">
  <input class="btn btn-primary" type="reset" Value="Borrar Datos">
  </div>

        </form>
      </div>
    </div>
  </div>
</div>



<!-- Modal edit-->
<div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus-square"></i> Editar Usuario <span id="load"> <img src="{{ asset('img/loading-icons/loading1.gif')}}"> Cargando...</span></h4>
      </div>
      <div class="modal-body">
        

    <form class="form-horizontal" action='diciplinas/update' method="POST" id="formuEdit"> 

    <div class="form-group">
<label class="col-lg-2 control-label" class="col-lg-2 control-label">Nombre:</label>
    <div class="col-lg-9">
        <input class="form-control" type="text" name="name_edit" required autofocus >
</div></div>
<div class="form-group">
<label class="col-lg-2 control-label">Descripcion</label>
<div class="col-lg-9">
<textarea class="form-control" name="desc_edit" cols="150"></textarea>
</div></div>
<div class="form-group">
<label class="col-lg-2 control-label">Costo</label>
<div class="col-lg-9">
<input class="form-control" type="number" name="precio_edit" required>   
</div></div>
<input type="hidden" name="mod" value="{{$mod}}">
<input type="hidden" name="iddiciplina">

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
       <button type="submit" class="btn btn-success">Guardar</button>
       
       </form> 
      </div>
    </div>
  </div>
</div>
<!-- End Modal -->







                <?php $status=Session::get('status'); ?>
                @if($status=='ok_create')
                <div class="alert alert-success fade in"><button class="close" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-square"></i>Diciplina Creada</div>
                @endif

                @if($status=='ok_update')
                <div class="alert alert-success fade in"><button class="close" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-square"></i> Actualizacion exitosa</div>
            @endif

                    <h1 class="page-header">Usuarios</h1>
<div class="col-lg-8" style="margin-left:210px">
                    <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal" style="float:right;">Nueva</button>
                        <div class="">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="buscadores">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Descripcion</th>
                                            <!--<th>Password</th>-->
                                            <th>Costo</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
 @if($dicip)
                                        <tr class="odd gradeX">
                                        @foreach($dicip as $disc)
                                            <td>{{ $disc->id }}</td>
                                            <td>{{ $disc->nombre }}</td>
                                            <td>{{ $disc->desc }}</td>
                                            <td>{{ $disc->costo }}</td>
                                            <td>
<span class="label label-info">{{HTML::link('#Edit', 'Editar', array('class' => 'edit', 'id' => $disc->id , 'data-toggle' => 'modal', 'title' => $disc->nombre) )}}</span></td>
                                        </tr></span>
                                        @endforeach
                                      </tbody>
                                </table>
                            </div>
                        </div>
                  
                  
                            @else
<div class="alert alert-danger fade in">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
<strong>Error</strong>Todavia no hay ningún usuario registrado Por favor registrese.
</div>
@endif            

                                       
      </div>
                  
       
             

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!--  Editar  -->
  <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- Custom Theme JavaScript -->
    
    <!--  Eliminar Mensaje  -->
<script type="text/javascript" src="js/diciplinas.js" ></script>    
<script type="text/javascript">
$(document).ready(function() {
  
  $('.edit').click(function() {

    var m;
    m=$(this).attr ('id');
    var faction = "<?php echo URL::to('getdiciplinas/data'); ?>";
    $('#load').show();
    $.post(faction, { iddiciplina:($(this).attr('id')) }, function(json) {
        
            $('#formuEdit input[name="iddiciplina"]').val(json.id);
            $('#formuEdit input[name="name_edit"]').val(json.nombre);
            $('#formuEdit textarea[name="desc_edit"]').val(json.desc);
            $('#formuEdit input[name="precio_edit"]').val(json.costo);
            
            
            $('#load').hide();
            
        
    });
    
  });
 
});
</script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->

<script type="text/javascript" src="js/bootstrap-select.js"></script>

    <!-- DataTables JavaScript -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>
<script type="text/javascript" src="js/funciones.js" ></script>    
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    

</body>

</html>






























