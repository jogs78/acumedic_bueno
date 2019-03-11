<?php

class PesosController extends BaseController {

	public function __construct(){
		$this->beforeFilter('auth');
		$this->beforeFilter('ap');
	}

	public function getIndex()
	{
		//return View::make('logadmin');	
			$pacientes=DB::select('select paciente.id, nombre, apellidop, apellidom, edad, altura, peso, tel, cel, mail, pesaje.id as idpesaje, mcorporal, cagua,pesoi, pesoa,foto, idpaciente from paciente join pesaje on paciente.id = idpaciente');
			
			return View::make('pesos')-> with('pacientes',$pacientes);
			
		
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


}
