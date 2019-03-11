<?php

class DiplomadoController extends BaseController {

	public function __construct(){
		$this->beforeFilter('auth');
		$this->beforeFilter('ad');
	}

	public function getIndex()
	{
		date_default_timezone_set('America/Mexico_city');
		$y=date('Y');
		$m=date('m');
		$d=date('d');
		$fecha=$y.'-'.$m.'-'.$d;
		$checar = DB::select('select * from diplomado where finsub > '.$fecha.' and pago=1');
		foreach ($checar as $checar) {
			if ($fecha >=$checar->finsub){
				$alum= Diplomado::find($checar->id);		
				$alum->pago=0;
				var_dump($alum->pago);
				$alum->save();
		}
		}
		
			$pacientes=DB::select('select paciente.id, nombre, apellidop, apellidom, edad, tel, cel, mail, diplomado.id as iddiplo, inscripcion, finsub, pago, idDiciplina, idpaciente from paciente join diplomado on paciente.id = idpaciente');
			$diplomado = DB::select('select * from diplomado join diciplinas where diciplinas.id = idDiciplina');
			$diciplinas = DB::select("select * from diciplinas where modulo='diplo'");	
			return View::make('diplomado', compact('pacientes','diplomado','diciplinas'));
			
		
	}



	public function postAgregar()
	{
		//Obetener Datos Post
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
		$iddiplo= Input::get('diplomado')
	
		);

		//var_dump($userdata);
			
	$pacientes = new Pacientes;
	$pacientes->apellidop = $apaterno;
	$pacientes->apellidom=$amaterno;
	$pacientes->nombre= $nombre;
	$pacientes->edad=$edad;
	$pacientes->tel=$telefono;
	$pacientes->cel=$celular;
	$pacientes->mail=$mail;
	$pacientes->anfitrion=$anfitrion;
	$pacientes->diplomado=1;
	//guardamos
	$pacientes->save();
	
	$diploma= new Diplomado;
	$diploma->inscripcion=$inscripcion;
	$diploma->finsub=$finsub;
	$diploma->pago=1;
	$diploma->idpaciente = $pacientes->id;
	$diploma->idDiciplina= $iddiplo;
	$diploma->save();
	return Redirect::to('diplomado')->with('status','ok_create');
	}


	public function postUpdate() {

		$userdata = array(
		$id = Input:: get('paciente_id'),
		$diplo_id = Input:: get('diplo_id'),
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
		$iddiplo= Input::get('diplomado_edit')
	
		);
	$pacientes= Pacientes::find($id);
	$pacientes->apellidop = $apaterno;
	$pacientes->apellidom=$amaterno;
	$pacientes->nombre= $nombre;
	$pacientes->edad=$edad;
	$pacientes->tel=$telefono;
	$pacientes->cel=$celular;
	$pacientes->mail=$mail;
	$pacientes->save();
	$diploma = Diplomado::find($diplo_id);
	
	$diploma->inscripcion=$inscripcion;
	$diploma->finsub=$finsub;
	$diploma->pago=$pago;
	$diploma->idDiciplina= $iddiplo;
	$diploma->save();

	return Redirect::to('diplomado')->with('status','ok_create');
		
	}


}
