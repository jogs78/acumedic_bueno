<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    
    <meta name="description" content="">
    <meta name="author" content="Angel">

    <title>Gimnasio</title>

    
<link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" href="css/bootstrap-responsive.css">
            <link rel="stylesheet" href="css/estilos.css">
            <link rel="stylesheet" type="text/css" href="css/bootstrap-select.css">
            <link href="css/plugins/dataTables.bootstrap.css" rel="stylesheet">

</head>

<body>
@include('menu')
<!-- Button trigger modal -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">        
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <fieldset><legend><h1>Datos del Cliente</h1></legend>
    <form class="form-horizontal" action='gimnasio/agregar' method="POST">
    
    <div class="form-group">
    <label class="col-lg-2 control-label">Nombre:</label>
    <div class="col-lg-9">
    <input class="form-control" type="text" name="name" required autofocus >
    </div></div>
    
    <div class="form-group">
    <label class="col-lg-2 control-label">Apellido P:</label>
    <div class="col-lg-9">
    <input class="form-control" type="text" name="apep" required >
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
    <label class="col-lg-2 control-label">Tel:</label>
    <div class="col-lg-9">
    <input class="form-control" type="tel" name="tel">
    </div></div>
    
    <div class="form-group">
    <label class="col-lg-2 control-label">Cel:</label>
    <div class="col-lg-9">
    <input class="form-control" type="tel" name="cel">
    </div></div>
    
    <div class="form-group">
    <label class="col-lg-2 control-label">Correo:</label>
    <div class="col-lg-9">
    <input class="form-control" type="email" name="mail">
    </div></div>
    
    <div class="form-group">
    <label class="col-lg-2 control-label">Fecha De Inicio:</label>
    <div class="col-lg-9">
    <input class="form-control" type="date" name="inscripcion" required>
    </div></div>
    
    <div class="form-group">
    <label class="col-lg-2 control-label">Fin De Subscripcion:</label>
    <div class="col-lg-9">
    <input class="form-control" type="date" name="finsub" required>
    </div></div>
    
    <div class="form-group">
    <label class="col-lg-2 control-label">Anfitrion:</label>
    <div class="col-lg-9">
    <input class="form-control" type="text" name="anfi"><br/>
    </div></div>
    
    <div class="form-group">
    <label class="col-lg-2 control-label">Diciplinas</label>
    <div class="col-lg-9">
    <select class="selectpicker" name="dici_gim" required>
        @foreach($diciplinas as $dici)
            <option value="{{$dici->id}}" >{{$dici->nombre}}</option>
        @endforeach
    </select>
    </div></div>    
        </div>
<!--      GOOD          -->
    <div class="modal-footer">
    <input class="btn btn-success" type="submit" Value="Guardar">
    <input class="btn btn-primary" type="reset" Value="Borrar Datos">
    </div>
    
</form></fieldset>


      
    </div>
  </div>
</div>
<!--  fin del Modal de nuevo -->
            


   <!-- Modal  Editar-->
<div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

        <fieldset><legend><h1>Datos del Cliente</h1></legend>
    <form class="form-horizontal" action='gimnasio/actualizar' method="POST" id="formuEdit"> 
    <div class="form-group">
    <label class="col-lg-2 control-label">Nombre:</label>
    <div class="col-lg-9">  
    <input class="form-control" type="text" name="name_edit" required>
    </div></div>
    <div class="form-group">
    <label class="col-lg-2 control-label" class="col-lg-2 control-label">Apellido P:</label>
    <div class="col-lg-9">
    <input class="form-control" type="text" name="apep_edit" required autofocus >
    </div></div>
    <div class="form-group">
    <label class="col-lg-2 control-label">Apellido M:</label>
    <div class="col-lg-9">
    <input class="form-control" type="text" name="apem_edit" required>   
    </div></div>

    <div class="form-group">
    <label class="col-lg-2 control-label">Edad:</label> 
    <div class="col-lg-9">
    <input class="form-control" type="text" name="edad_edit" required>
    </div></div>
    <div class="form-group">
    <label class="col-lg-2 control-label">Tel:</label>
    <div class="col-lg-9">
    <input class="form-control" type="tel" name="tel_edit">
    </div></div>
    <div class="form-group">
    <label class="col-lg-2 control-label">Cel:</label>
    <div class="col-lg-9">
    <input class="form-control" type="tel" name="cel_edit">
    </div></div>
    <div class="form-group">
    <label class="col-lg-2 control-label">Correo:</label>
    <div class="col-lg-9">
    <input class="form-control" type="email" name="mail_edit">
    </div></div>
    <div class="form-group">
    <label class="col-lg-2 control-label">Fecha:</label>
    <div class="col-lg-9">
    <input class="form-control" type="date" name="inscripcion_edit">
    </div></div>
    <div class="form-group">
    <label class="col-lg-2 control-label">Fin De Subscripcion:</label>
    <div class="col-lg-9">
    <input class="form-control" type="date" name="finsub_edit" required>
    </div></div>
    <div class="form-group">
    <label class="col-lg-2 control-label">Pago:</label>
    <div class="col-lg-9">
    <select name="pago_edit" required class="form-control">
    <option id="si" value="1">Si</option>
    <option id="no" value="0">No</option>
    </select>
    </div></div>   
    <div class="form-group">
    <label class="col-lg-2 control-label">Diciplinas</label>
    <div class="col-lg-9">
    <select name="diciplinas_edit" required class="form-control">
    
    @foreach($diciplinas as $dici)
    <option value="{{$dici->id}}" >{{$dici->nombre}}</option>
    @endforeach
    <option id="diciplinas_edit"></option>        
    </select>
    </div></div>    
    <input type="hidden" name="paciente_id">       
    <input type="hidden" name="gim_id">  
    
<!--      GOOD          -->
    <div class="modal-footer">
    <input class="btn btn-success" type="submit" Value="Guardar">
    <input class="btn btn-primary" type="reset" Value="Borrar Datos">
    </div>
    </fieldset>
</form>    



      </div>
    </div>
  </div>
</div>


 <?php $status=Session::get('status');?>
                @if($status=='ok_create')
                <div class="alert alert-success fade in"><button class="close" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-square"></i> El usuario fue creado con exito</div>
                @endif

                @if($status=='ok_delete')
                <div class="alert alert-success fade in"><button class="close" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-square"></i> El usuario fue eliminado con exito</div>
            @endif

                    <h1 class="page-header">Alumnos Gimnasio</h1>
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" style="float:right;">
  Nuevo
</button>
         
         
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="buscadores">
                                    <thead>
                                        <tr class="odd gradeX">
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Edad</th>
                                            <th>Telefonos</th>
                                            <th>Correo</th> 
                                            <th>Fecha De Inscripcion</th>
                                            <th>Fin De Membresia</th>
                                            <th>Pagado</th>
                                            <th>Diciplina</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>        
                                    <tbody>
                                         @if($pacientes)
                                        
                                        @foreach($pacientes as $pacientes)
                                        <?php $flag=0; ?>
                                        
                                        <tr>
                                            
                                            <td>{{ $pacientes->id }}</td>
                                            <td>{{ $pacientes->nombre }} {{ $pacientes->apellidop }} {{ $pacientes->apellidom }}</td>
                                            <td>{{$pacientes->edad}}</td>
                                            <td>{{ $pacientes->tel }} << Local | Movil >> {{ $pacientes->cel }}</td>
                                            <td>{{ $pacientes->mail}}</td>
                                            <td>{{$pacientes->inscripcion}}</td>
                                            <td>{{$pacientes->finsub}}</td>
                                            <td>
                                              @if($pacientes->pago==1)
                                              Si
                                              @else
                                              No
                                              @endif
                                            </td>
                                            @foreach($gimnasio as $gim)
                                            @if($gim->id==$pacientes->idDiciplina and $flag==0)

                                            <td>{{$gim->nombre}}</td>
                                            <td><span class="label label-info"> {{HTML::link('#Edit','Editar', array('class' => 'edit', 'id' => $pacientes->id, 'idgim' => $pacientes->idgym, 'data-toggle' => 'modal', 'title' => $pacientes->nombre) )}}</span></td>
                                        <?php $flag=1; ?>
                                            @endif

                                        @endforeach
                                            </tr>    
                                        
                                        @endforeach
                                      </tbody>
                                </table>
                            </div>
                        </div>
                            <!-- /.table-responsive -->
                            @else
<div class="alert alert-danger fade in">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
<strong>Error</strong> Todavia no hay ningún usuario registrado Por favor registrese.
</div>
@endif




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
    <script src="js/diplomado.js"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script type="text/javascript" src="js/bootstrap-select.js"></script>

    <!-- Script para editar-->
    <script type="text/javascript">
$(document).ready(function() {
  $('.edit').click(function() {
    var faction = "<?php echo URL::to('/getgimnasio/data'); ?>";
    $.post(faction, { paciente_id:($(this).attr('id')),gim_id:($(this).attr('idgim')) }, function(json) {
        if (json.success) {          
            
            $('#formuEdit input[name="paciente_id"]').val(json.id);
            $('#formuEdit input[name="gim_id"]').val(json.gim);
            $('#formuEdit input[name="name_edit"]').val(json.name);
            $('#formuEdit input[name="apep_edit"]').val(json.apaterno);
            $('#formuEdit input[name="apem_edit"]').val(json.amaterno);
            $('#formuEdit input[name="edad_edit"]').val(json.edad);
            $('#formuEdit input[name="tel_edit"]').val(json.tel);
            $('#formuEdit input[name="cel_edit"]').val(json.cel);
            $('#formuEdit input[name="mail_edit"]').val(json.mail);
            $('#formuEdit input[name="inscripcion_edit"]').val(json.date);
            $('#formuEdit input[name="finsub_edit"]').val(json.enddate);
            if (json.pago == 1) {
                $('#si').attr('selected',true);
                $('#no').attr('selected',false);
            }
            else
            {
             $('#si').attr('selected',false);
                $('#no').attr('selected',true);
            };
            
            $("#diciplinas_edit").attr('selected',true);
            $('#diciplinas_edit').val(json.diciid);
            $('#diciplinas_edit').attr("label",'Actual:'+json.diciname);
            
        } else {

            $('#errorMessage').html(json.message);
            $('#errorMessage').show();
        }
    });
    
  });
 
});
</script>
