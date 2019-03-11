<?php

class PacientesController extends BaseController {

	public function __construct(){
		$this->beforeFilter('auth');
		$this->beforeFilter('ap');
	}

	public function getIndex()
	{
		//return View::make('logadmin');	
			$pacientes=DB::select('select paciente.id, nombre, apellidop, apellidom, edad, altura, peso, tel, cel, mail, pesaje.id as idpesaje, mcorporal, cagua,pesoi, pesoa,foto, idpaciente from paciente join pesaje on paciente.id = idpaciente');
			
			return View::make('pacientes')-> with('pacientes',$pacientes);
			
		
	}



	public function postAgregar()
	{
		//Obetener Datos Post
		$userdata = array(

		$apaterno = Input:: get('apep'),
		$amaterno = Input:: get('apem'),
		$nombre = Input:: get('name'),
		$edad = Input:: get('edad'),
		$altura= Input:: get('alt'),
		$peso= Input:: get('peso'),
		$telefono= Input:: get('tel'),
		$celular= Input:: get('cel'),
		$anfitrion= Input:: get('anfi')
	
		);

		//var_dump($userdata);
			
	$pacientes = new Pacientes;
	$pacientes->apellidop = $apaterno;
	$pacientes->apellidom=$amaterno;
	$pacientes->nombre= $nombre;
	$pacientes->edad=$edad;
	$pacientes->altura=$altura;
	$pacientes->peso=$peso;
	$pacientes->tel=$telefono;
	$pacientes->cel=$celular;
	$pacientes->anfitrion=$anfitrion;
	$pacientes->nutricion=1;
	//guardamos
	$pacientes->save();
	
	$pesaje= new Pesaje;
	$pesaje->idpaciente = $pacientes->id;
	$pesaje->save();
	return Redirect::to('pacientes')->with('status','ok_create');
	}


	public function postUpdate()
	{
		$pesaje_id = Input::get('pesaje_id'); 
		//echo $pesaje_id;
		$pesaje = Pesaje::find($pesaje_id);
		

		$pesaje->pesoa = Input::get('pesoa_edit');
		
		$pesaje->save();
		return Redirect::to('pacientes')->with('status', 'ok_update');
		
	}
	
	public function postUpdatemc()
	{
		$pesaje_id = Input::get('pesaje_id'); 
		//echo $pesaje_id;
		$pesaje = Pesaje::find($pesaje_id);
		

		
		$pesaje->mcorporal=Input::get('mcorporal_edit');
		$pesaje->save();
		return Redirect::to('pacientes')->with('status', 'ok_update');
		
	}

	public function postUpdateca()
	{
		$pesaje_id = Input::get('pesaje_id'); 
		//echo $pesaje_id;
		$pesaje = Pesaje::find($pesaje_id);
		

		
		$pesaje->cagua=Input::get('cagua_edit');
		$pesaje->save();
		return Redirect::to('pacientes')->with('status', 'ok_update');
		
	}

	public function postUpdatefoto()
	{
		$pesaje_id = Input::get('pesaje_id'); 
		//echo $pesaje_id;
		$file=Input::file('foto_edit');
		$carpeta='imagenes/'.$pesaje_id;
		
		if (!file_exists($carpeta)) {
			# code...

			$crea=mkdir($carpeta);
		}
		$destinoPath= public_path().'/'.$carpeta;
		$subir=$file->move($destinoPath,$file->getClientOriginalName());
		$dir= $file->getClientOriginalName();
		$pesaje = Pesaje::find($pesaje_id);

		

		
		$pesaje->foto=$dir;
		$pesaje->save();
		return Redirect::to('pacientes')->with('status', 'ok_update');
		
	}


}
