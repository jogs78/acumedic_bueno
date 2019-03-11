<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', function()
{
	return View::make('prin');
});
Route::get('/hola',function()
{
	return View::make('prin');	
});

Route::get('/servicios',function()
{
	return View::make('servicios');	
});


Route::get('logout',function()
{
	Auth::logout();
	return Redirect::to('usuarios');	
});

//Metodo Restful del controlador
Route::controller('usuarios', 'UsuariosController');
Route::controller('pacientes', 'PacientesController');
Route::controller('users', 'UserController');
Route::controller('diciplinas', 'DiciplinasController');
Route::controller('getdiciplinas', 'getdiciplinasController');
Route::controller('user/getuser', 'getuserController');
Route::controller('pacientesquery/getpaciente','getpacienteController');
Route::controller('diplomado', 'DiplomadoController');
Route::controller('getdiplomado', 'getdiplomadoController');
Route::controller('clinica', 'ClinicaController');
Route::controller('cita', 'CitaController');
Route::controller('expediente', 'ExpedienteController');
Route::controller('gimnasio', 'GimnasioController');
Route::controller('getgimnasio','getgimnasioController');
Route::controller('pagos', 'PagosController');
Route::controller('pesos', 'PesosController');
Route::controller('fotos', 'FotosController');
Route::controller('verexp', 'VerexpController');



Route::get('registrar', function(){
	$user = new User;
	$user->nombre = "Karla";
	$user->username="amedic";
	$user->password= Hash::make("amedic");
	$user->nivel="Admin";
	//guardamos
	$user->save();
	return "Usuario Agregado.";

	});

Route::get('salir', function(){
	Auth::logout();
});

Route::get('/menuadmin',  array('before' => 'auth', function()
{
	return View::make('menuadmin');	
}));

Route::get('/nuevo',function()
{
	return View::make('formulario');	
});
Route::get('/acita',function()
{
	return View::make('cita');	
});
Route::get('/ausers',function()
{
	return View::make('ausers');	
});
Route::get('/alumnos',function()
{
	return View::make('alumnos');	
});

Route::get('/nuevouser',function()
{
	return View::make('ausers');	
});

Route::get('/admincitas',function()
{
	return View::make('pacientes');	
});
