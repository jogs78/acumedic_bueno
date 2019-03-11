<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Angel">

    <title>Clinica</title>

    
    
            <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" href="css/bootstrap-responsive.css">
            <link rel="stylesheet" href="css/estilos.css">
            <link rel="stylesheet" type="text/html" href="css/bootstrap-select.css">          
            <link href="css/plugins/dataTables.bootstrap.css" rel="stylesheet">

    

    
    




</head>

<body>
@include('menu')
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

        <fieldset><legend><h1>Datos Paciente</h1></legend>
    <form class="form-horizontal" action='clinica/agregar' method="POST"> 
    <div class="form-group">
    <label class="col-lg-2 control-label">Nombre:</label>
    <div class="col-lg-9">  
    <input class="form-control" type="text" name="name" required>
    </div></div>
    <div class="form-group">
    <label class="col-lg-2 control-label" class="col-lg-2 control-label">Apellido P:</label>
    <div class="col-lg-9">
    <input class="form-control" type="text" name="apep" required autofocus >
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
    <label class="col-lg-2 control-label">Sexo:</label> 
    <div class="col-lg-9">
    <select class="form-control" name="sexo">
        <option value="M">Masculino</option>
        <option value="F">Femenino</option>
    </select>
    </div></div>
    <div class="form-group">
    <label class="col-lg-2 control-label">Altura:</label> 
    <div class="col-lg-9">
    <input class="form-control" type="numeric" name="alt" required>
    </div></div>
    <div class="form-group">
    <label class="col-lg-2 control-label">Peso:</label> 
    <div class="col-lg-9">
    <input class="form-control" type="numeric" name="peso" required>
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
    <label class="col-lg-2 control-label">Proxima Cita:</label>
    <div class="col-lg-9">
    <input class="form-control" type="date" name="pcita" value=<?php echo date('Y-m-d') ?>>
    <input class="form-control" type="hidden" name="fecha" value=<?php echo date('Y-m-d') ?>>
    </div></div>
    <div class="form-group">
<label class="col-lg-2 control-label">Anfitrion:</label>
<div class="col-lg-9">
<input class="form-control" type="text" name="anfi"><br/>
</div></div>
    
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




<!-- Modal edit-->
<div class="modal fade" id="Editcita" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <fieldset><legend><h1>Hoja de Expediente</h1></legend>
    <form class="form-horizontal" action='expediente/nuevoexpe' method="POST" id="formuEdit"> 
    <div class="form-group">
    <label class="col-lg-2 control-label">Fecha:</label>
    <div class="col-lg-9">
    <input class="form-control" type="date" name="fecha_edit" value=<?php echo date('Y-m-d') ?>>
    </div></div>
    <div class="form-group">
    <label class="col-lg-2 control-label">Consulta:</label>
    <div class="col-lg-9">
    <input class="form-control" type="text" name="consulta"  >
    </div></div> 
    <div class="form-group">
    <label class="col-lg-2 control-label">Analisis:</label>
    <div class="col-lg-9">
    <input class="form-control" type="file" name="analisis" value=<?php echo date('Y-m-d') ?>>
    </div></div>
    
<!--      GOOD          -->
<div class="modal-footer">
<input class="btn btn-success" type="submit" Value="Guardar">
<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
</div>
<input type="hidden" name="ul_cita">
<input type="" name="paciente_id">       
<input type="hidden" name="cita_id"> 
</fieldset>
</form>  

        
        
        

      </div>
    </div>
  </div>
</div>
<!-- End Modal -->




















                <?php $status=Session::get('status');?>
                @if($status=='ok_create')
                <div class="alert alert-success fade in"><button class="close" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-square"></i> El usuario fue creado con exito</div>
                @endif

                @if($status=='ok_delete')
                <div class="alert alert-success fade in"><button class="close" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-square"></i> El usuario fue eliminado con exito</div>
            @endif

                    

<h1 class="page-header">Pacientes Clinica</h1>         
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
                                            <th>Sexo</th>
                                            <th>Altura</th>
                                            <th>Peso</th>
                                            <th>Telefonos</th>
                                            <th>Correo</th> 
                                            <th>Proxima Consulta</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>        
                                         @if($pacientes)
                                        @foreach($pacientes as $pacientes)
                                        <tr>
                                            <?php $flag = 1; ?>
                                            
                                            <td>{{ $pacientes->idpaci }}</td>
                                            <td>{{ $pacientes->nombre }} {{ $pacientes->apellidop }} {{ $pacientes->apellidom }}</td>
                                            <td>{{$pacientes->edad}}</td>
                                            <td>
                                                @if($pacientes->sexo == 'M')
                                                Masculino
                                                @else
                                                Femenino
                                                @endif
                                            </td>
                                            <td>{{$pacientes->altura}} Mts.</td>
                                            <td>{{$pacientes->peso}} Kg.</td>
                                            <td>{{ $pacientes->tel }} << Local | Movil >> {{ $pacientes->cel }}</td>
                                            <td>{{ $pacientes->mail}}</td>
                                            <td>{{$pacientes->pc}}</td>
                                            <td><span class="label label-info"> {{HTML::link('#Editcita','Agregar a Expediente', array('class' => 'edit', 'id' => $pacientes->idpaci,'cita_id' => $pacientes->idcita, 'data-toggle' => 'modal', 'title' => $pacientes->nombre) )}}</span>
                                             <a href="verexp?ip={{$pacientes->idpaci}}">   <span class="label label-info"> Ver Expediente</span></a>
                                            </td>
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
    <script src="js/funciones.js"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->

<script type="text/javascript">
$(document).ready(function() {
  
  $('.edit').click(function() {

    var faction = "<?php echo URL::to('expediente/data'); ?>";
    $.post(faction, { paciente_id:($(this).attr('id')),cita_id:($(this).attr('cita_id'))}, function(json) {
        if (json.success) {          
            
            $('#formuEdit input[name="paciente_id"]').val(json.id);
            $('#formuEdit input[name="cita_id"]').val(json.citaid);
            $('#formuEdit input[name="name_edit"]').val(json.name);
            $('#formuEdit input[name="apep_edit"]').val(json.apaterno);
            $('#formuEdit input[name="apem_edit"]').val(json.amaterno);
            $('#formuEdit input[name="edad_edit"]').val(json.edad);
            $('#formuEdit input[name="alt_edit"]').val(json.alt);
            $('#formuEdit input[name="peso_edit"]').val(json.peso);
            $('#formuEdit input[name="tel_edit"]').val(json.tel);
            $('#formuEdit input[name="cel_edit"]').val(json.cel);
            $('#formuEdit input[name="mail_edit"]').val(json.mail);
            $('#formuEdit input[name="ul_cita"]').val(json.date);
            
            if (json.sex =='M') {
                $('#M').attr('selected',true);
                $('#F').attr('selected',false);
            }
            else
            {
             $('#M').attr('selected',false);
             $('#F').attr('selected',true);
            };
            
                    
        } else {

            $('#errorMessage').html(json.message);
            $('#errorMessage').show();
        }
    });
    
  });
 
});
</script>
<script type="text/javascript" src="js/bootstrap-select.js"></script>

</body>

</html>

