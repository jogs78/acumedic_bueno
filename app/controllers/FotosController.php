<?php

class FotosController extends BaseController {

	public function __construct(){
		$this->beforeFilter('auth');
		$this->beforeFilter('ap');
	}

	public function getIndex()
	{
		//return View::make('logadmin');	
			$pacientes=DB::select('select paciente.id, nombre, apellidop, apellidom, edad, altura, peso, tel, cel, mail, pesaje.id as idpesaje, mcorporal, cagua,pesoi, pesoa,foto, idpaciente from paciente join pesaje on paciente.id = idpaciente');
			
			return View::make('fotos')-> with('pacientes',$pacientes);
			
		
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
		return Redirect::to('fotos')->with('status', 'ok_update');
		
	}


}
