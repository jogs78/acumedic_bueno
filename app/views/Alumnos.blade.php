<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Usuarios</title>

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
      <div class="modal-body">

    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
         <fieldset><legend><h1>  Datos Usuario Nuevo</h1></legend>
    <form class="form-horizontal" action='users/agregar' method="POST"> 
    <div class="form-group">
    <label class="col-lg-2 control-label" class="col-lg-2 control-label">Nombre:</label>
    <div class="col-lg-9">
    <input class="form-control" type="text" name="name" required autofocus >
    </div></div>
  <div class="form-group">
  <label class="col-lg-2 control-label">Username:</label>
  <div class="col-lg-9">
  <input class="form-control" type="text" name="nickname" required>   
  </div></div>
  <div class="form-group">
  <label class="col-lg-2 control-label">Password</label>
  <div class="col-lg-9">
  <input class="form-control" type="text" name="pass" required>
  </div></div>
  <div class="form-group">
  <label class="col-lg-2 control-label">Nivel</label>
  <div class="col-lg-9">
  <select class="selectpicker" name="nivel" required onchange='visible(this.value)'>
    <option value="Admin">Administrador</option>
    <option value="Ag">Ayudante Gimnasio</option>
    <option value="Ac">Ayudante Clinica</option>
    <option value="Ad">Ayudante Diplomado</option>
    <option value="Ap">Ayudante Pesaje</option>
  </select>
  </div></div>
  <div id="Apdiv"  style="display:none" class="form-group"    >
<label class="col-lg-2 control-label">Permisos Pesaje</label>
    <div class="col-lg-2">  
        <select multiple class="selectpicker">Ayudante de pesaje
        <option>Clientes</option>
        <option>Fechas De Pesaje</option>
        <option>Pagos</option>
        <option>Inscripcion</option>
        <option>Agregar peso</option>
        <option>Agregar foto</option></select>
    </div></div>

    <div id="Agdiv"style="display:none" class="form-group">
    <label class="col-lg-2 control-label">Permisos Gimnasio</label>
    <div class="col-lg-2">
        <select multiple class="selectpicker">Ayudante de imnasio
        <option>Clientes</option>
        <option>Pagos</option>
        <option>Promociones</option>
        <option>Comentarios</option>
    </select>
    </div></div>
    <div id="Acdiv" class="form-group" style="display:none">
<label class="col-lg-2 control-label" >Permisos Clinica</label>
    <div class="col-lg-2">
        <select multiple class="selectpicker">Ayudante de clinica
            <option>Agendar Citas</option>
        <option>Pacientes</option>
        <option>Expedientes</option>
        <option>Comentarios</option></select>
    </div></div>
    <div id="Addiv"style="display:none" class="form-group">
    <label class="col-lg-2 control-label" >Permisos Diplomado</label>
        <div class="col-lg-2">
        <select multiple class="selectpicker">Ayudante de diplomado
        <option>Alumnos</option>
        <option>Pagos</option>
        <option>Promociones</option>
        <option>Nuevo Diplomado</option></select>
    </div></div>
      </div>
      <div class="modal-footer">
  <input class="btn btn-success" type="submit" Value="Guardar">
  <input class="btn btn-primary" type="reset" Value="Borrar Datos">
  </div>

        </form>
      </div>
    </div>
  </div>




<!-- Modal edit-->
<div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      
      
      
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>        
    <fieldset><legend><h1>  Editar Datos</h1></legend> 
<form class="form-horizontal" role="form" action="users/update" method="post" id="formuEdit">
  <div class="form-group">
    <label class="col-lg-2 control-label" for="exampleInputEmail1">Nombre</label>
    <div class="col-lg-9">
    <input type="text" class="form-control" id="exampleInputEmail1"  name="name_edit">
  </div></div>
  <div class="form-group">
    <label class="col-lg-2 control-label" for="exampleInputEmail1">Username</label>
    <div class="col-lg-9">
    <input type="text" class="form-control" id="exampleInputEmail1"  name="username_edit">
  </div></div>
  <div class="form-group">
  <label class="col-lg-2 control-label">Nivel</label>
  <div class="col-lg-9">
  <select class="selectpicker" name="nivel_edit" required onchange='visible(this.value)'>
    <option value="Admin">Administrador</option>
    <option value="Ag">Ayudante Gimnasio</option>
    <option value="Ac">Ayudante Clinica</option>
    <option value="Ad">Ayudante Diplomado</option>
    <option value="Ap">Ayudante Pesaje</option>
  </select>
  </div></div>
  <div id="Apdiv"  style="display:none" class="form-group"    >
<label class="col-lg-2 control-label">Permisos Pesaje</label>
    <div class="col-lg-2">  
        <select multiple class="selectpicker">Ayudante de pesaje
        <option>Clientes</option>
        <option>Fechas De Pesaje</option>
        <option>Pagos</option>
        <option>Inscripcion</option>
        <option>Agregar peso</option>
        <option>Agregar foto</option></select>
    </div></div>

    <div id="Agdiv"style="display:none" class="form-group">
    <label class="col-lg-2 control-label">Permisos Gimnasio</label>
    <div class="col-lg-2">
        <select multiple class="selectpicker">Ayudante de imnasio
        <option>Clientes</option>
        <option>Pagos</option>
        <option>Promociones</option>
        <option>Comentarios</option>
    </select>
    </div></div>
    <div id="Acdiv" class="form-group" style="display:none">
<label class="col-lg-2 control-label" >Permisos Clinica</label>
    <div class="col-lg-2">
        <select multiple class="selectpicker">Ayudante de clinica
            <option>Agendar Citas</option>
        <option>Pacientes</option>
        <option>Expedientes</option>
        <option>Comentarios</option></select>
    </div></div>
    <div id="Addiv"style="display:none" class="form-group">
    <label class="col-lg-2 control-label" >Permisos Diplomado</label>
        <div class="col-lg-2">
        <select multiple class="selectpicker">Ayudante de diplomado
        <option>Alumnos</option>
        <option>Pagos</option>
        <option>Promociones</option>
        <option>Nuevo Diplomado</option></select>
    </div></div>
  
  <input type="hidden" name="user_id" >
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
       <button type="submit" class="btn btn-success">Guardar</button>
       </fieldset>
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

                    <h1 class="page-header">Usuarios</h1>
<div class="col-lg-8" style="margin-left:210px">
                    <button type="button" class="btn btn-success btn-small" data-toggle="modal" data-target="#myModal" style="float:right;"><span class="glyphicon glyphicon-plus"></span></button>
                        <div class="">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="buscadores">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>UserName</th>
                                            <!--<th>Password</th>-->
                                            <th>Tipo</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        @if($users)
                                        <tr class="odd gradeX">
                                        @foreach($users as $user)
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->nombre }}</td>
                                            <td>{{ $user->username }}</td>
                                            <td class="center">
                                            @if($user->nivel=="Ac")
                                            Ayudante Clinica
                                            @elseif($user->nivel=="Ad")
                                            Ayudante de Diplomado
                                            @elseif($user->nivel=="Ap")
                                            Ayudante de Pesaje
                                            @elseif($user->nivel=="Ag")
                                            Ayudante de Gimnasio
                                            @else
                                            {{$user->nivel}}
                                            @endif
                                          </td>
                                            <td><a href="#Edit" class="edit" data-toggle="modal"  id='{{$user->id}}' title='{{$user->nombre}}' ><span class='glyphicon glyphicon-pencil'></span></a> <a href="#" class="delete" data-toggle="modal" title='{{$user->id}}' ><span class='glyphicon glyphicon-trash'></span></a>
                                        </tr>
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
<script type="text/javascript" src="js/funciones.js" ></script>    
<script type="text/javascript">
$(document).ready(function() {
  
  $('.edit').click(function() {

  
    var m;
    m=$(this).attr ('id');
    $('[nombre=user]').val($(this).attr ('id'));
    var faction = "<?php echo URL::to('user/getuser/data'); ?>";
    $('#load').show();
    $.post(faction, { user_id:($(this).attr('id')) }, function(json) {
        if (json.success) {
            $('#formuEdit input[name="user_id"]').val(json.id);
            $('#formuEdit input[name="name_edit"]').val(json.name);
            $('#formuEdit input[name="username_edit"]').val(json.username);
            $('#formuEdit input[name="nivel_edit"]').val(json.nivel);
            
            
            $('#load').hide();
            
        } else {
            $('#errorMessage').html(json.message);
            $('#errorMessage').show();
        }
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
<script type="text/javascript" src="js/visible.js" ></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->

</body>

</html>
