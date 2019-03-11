<?php

class GimnasioController extends BaseController {

	public function __construct(){
		$this->beforeFilter('auth');
		$this->beforeFilter('ag');
	}

	public function getIndex()
	{
		date_default_timezone_set('America/Mexico_city');
		$y=date('Y');
		$m=date('m');
		$d=date('d');
		$fecha=$y.'-'.$m.'-'.$d;
		$checar = DB::select('select * from gym where finsub > '.$fecha.' and pago=1');
		foreach ($checar as $checar) {
			if ($fecha >=$checar->finsub){
				$alum= Gimnasio::find($checar->id);		
				$alum->pago=0;
				$alum->save();
		}
		}
		
			$pacientes=DB::select('select paciente.id, nombre, apellidop, apellidom, edad, tel, cel, mail, gym.id as idgym, inscripcion, finsub, pago, idDiciplina, idpaciente from paciente join gym on paciente.id = idpaciente');
			$gimnasio = DB::select('select * from gym join diciplinas where diciplinas.id = idDiciplina');
			$diciplinas = DB::select("select * from diciplinas where modulo='gym'");

			
			return View::make('gimnasio', compact('pacientes','gimnasio','diciplinas'));
			
		
	}

	public function postAgregar()
	{
		//Obtienes los datos del formulario y se los asigna a las variales
		$userdata = array(
		$nombre = Input:: get('name'),
		$apaterno = Input:: get('apep'),
		$amaterno = Input:: get('apem'),
		$edad = Input:: get('edad'),
		$telefono= Input:: get('tel'),
		$celular= Input:: get('cel'),
		$mail= Input:: get('mail'),
		$inscripcion= Input::get('inscripcion'),
		$finsub= Input::get('finsub'),
		$anfitrion= Input:: get('anfi'),
		$iddici= Input::get('dici_gim')
		);
		//print_r($userdata);


		//Guardamos datos del paciente
		$pacientes = new Pacientes;
		$pacientes->apellidop = $apaterno;
		$pacientes->apellidom=$amaterno;
		$pacientes->nombre= $nombre;
		$pacientes->edad=$edad;
		$pacientes->tel=$telefono;
		$pacientes->cel=$celular;
		$pacientes->mail=$mail;
		$pacientes->anfitrion=$anfitrion;
		$pacientes->gym=1;
		//guardamos
		$pacientes->save();


		//Guardamos datos del gimnasio
		$gimnasio= new Gimnasio;
		$gimnasio->inscripcion=$inscripcion;
		$gimnasio->finsub=$finsub;
		$gimnasio->pago=1;
		$gimnasio->idpaciente = $pacientes->id;
		$gimnasio->idDiciplina= $iddici;
		$gimnasio->save();
		return Redirect::to('gimnasio')->with('status','ok_create');
	
	
	}

	public function postActualizar()
	{
		//asignamos los datos editados a variables
		$userdata = array(
			$id = Input:: get('paciente_id'),
			$gim_id = Input:: get('gim_id'),
			$nombre = Input:: get('name_edit'),
			$apaterno = Input:: get('apep_edit'),
			$amaterno = Input:: get('apem_edit'),
			$edad = Input:: get('edad_edit'),
			$telefono= Input:: get('tel_edit'),
			$celular= Input:: get('cel_edit'),
			$mail= Input:: get('mail_edit'),
			$inscripcion= Input::get('inscripcion_edit'),
			$finsub= Input::get('finsub_edit'),
			$pago= Input::get('pago_edit'),
			$iddici= Input::get('diciplinas_edit')
	
		);

		//print_r($userdata);
		//Guardamos los datos del paciente
		$pacientes= Pacientes::find($id);
		$pacientes->apellidop = $apaterno;
		$pacientes->apellidom=$amaterno;
		$pacientes->nombre= $nombre;
		$pacientes->edad=$edad;
		$pacientes->tel=$telefono;
		$pacientes->cel=$celular;
		$pacientes->mail=$mail;
		$pacientes->save();

		//Guardamos los datos del gimnasio
		$gimnasio = Gimnasio::find($gim_id);
	
		$gimnasio->inscripcion=$inscripcion;
		$gimnasio->finsub=$finsub;
		$gimnasio->pago=$pago;
		$gimnasio->idDiciplina= $iddici;
		$gimnasio->save();

		return Redirect::to('gimnasio')->with('status','ok_update');

	
	

	}

}

