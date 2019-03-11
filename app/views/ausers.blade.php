<html>
<head>	
<meta charset="UTF-8">
       		<link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" href="css/bootstrap-responsive.css">
            <link rel="stylesheet" href="css/estilos.css">
            <link rel="stylesheet" type="text/css" href="css/bootstrap-select.css">
	<title>Citas</title>
</head>
<body>
	@include('menu')
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
<select id='nivel' class="selectpicker" name="nivel" required onchange='visible(this.value)'>
    <option value="Admin" >Administrador</option>
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
</br>
<div class="col-lg-9">
    </div>
<div class="btn-group">
<input class="btn btn-success" type="submit" Value="Guardar">
<input class="btn btn-primary" type="reset" Value="Borrar Datos">
</div>
</form>

<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap-select.js"></script>
<script type="text/javascript" src="js/visible.js" ></script>
</body>
</html>