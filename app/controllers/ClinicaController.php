<?php

class ClinicaController extends BaseController {

	public function __construct(){
		$this->beforeFilter('auth');
	}

	public function getIndex()
	{	
		$actual=date('Y-m-d');
		//return View::make('logadmin');	
			$pacientes=DB::select('select *, citas.id as idcita, paciente.id as idpaci from paciente join citas on paciente.id = idpaciente');			
			return View::make('clinica', compact('pacientes'));
			
		
	}


	public function postAgregar()
	{
		//Obetener Datos Post
		$userdata = array(
		$nombre = Input:: get('name'),
		$apaterno = Input:: get('apep'),
		$amaterno = Input:: get('apem'),
		$edad = Input:: get('edad'),
		$sex = Input:: get('sexo'),
		$alt = Input:: get('alt'),
		$peso = Input:: get('peso'),
		$telefono= Input:: get('tel'),
		$celular= Input:: get('cel'),
		$mail= Input:: get('mail'),
		$pcita= Input::get('pcita'),
		$fecha= Input::get('fecha'),
		$anfitrion= Input:: get('anfi')
		);

		//var_dump($userdata);
			
	$pacientes = new Pacientes;
	$pacientes->apellidop = $apaterno;
	$pacientes->apellidom=$amaterno;
	$pacientes->nombre= $nombre;
	$pacientes->edad=$edad;
	$pacientes->sexo=$sex;
	$pacientes->altura=$alt;
	$pacientes->peso=$peso;
	$pacientes->tel=$telefono;
	$pacientes->cel=$celular;
	$pacientes->mail=$mail;
	$pacientes->anfitrion=$anfitrion;
	$pacientes->clinica=1;
	//guardamos
	$pacientes->save();
	
	$clinica= new Clinica;
	$clinica->fecha=$fecha;
	$clinica->idpaciente = $pacientes->id;
	$clinica->save();

	$cita = new Citas;
	$cita->pc=$pcita;
	$cita->idpaciente = $pacientes->id;
	$cita->save();
	return Redirect::to('clinica')->with('status','ok_create');
	}


	public function postUpdate() {

		$userdata = array(
			$id = Input::get('paciente_id'),
			$idci = Input::get('cita_id'),
		$nombre = Input:: get('name_edit'),
		$apaterno = Input:: get('apep_edit'),
		$amaterno = Input:: get('apem_edit'),
		$edad = Input:: get('edad_edit'),
		$sex = Input:: get('sexo_edit'),
		$alt = Input:: get('alt_edit'),
		$peso = Input:: get('peso_edit'),
		$telefono= Input:: get('tel_edit'),
		$celular= Input:: get('cel_edit'),
		$mail= Input:: get('mail_edit'),
		$pcita= Input::get('fecha_edit')		
		);

	$pacientes= Pacientes::find($id);
	$pacientes->apellidop = $apaterno;
	$pacientes->apellidom=$amaterno;
	$pacientes->nombre= $nombre;
	$pacientes->edad=$edad;
	$pacientes->sexo=$sex;
	$pacientes->altura=$alt;
	$pacientes->peso=$peso;
	$pacientes->tel=$telefono;
	$pacientes->cel=$celular;
	$pacientes->mail=$mail;
	//guardamos
	$pacientes->save();

	$cita= Citas::find($idci);
	$cita->pc=$pcita;
	$cita->save();

	return Redirect::to('clinica')->with('status','ok_create');
		
	}

	public function postUpdatecita() {

		$userdata = array(
			$id = Input::get('paciente_id'),
			$idci = Input::get('cita_id'),
			$pcita= Input::get('fecha_edit'),
			$ul_cita= Input::get('ul_cita')
		);

	
	$cita= Citas::find($idci);
	$cita->uc=$ul_cita;
	$cita->pc=$pcita;
	$cita->save();

	return Redirect::to('clinica')->with('status','ok_create');
		
	}

	public function postData()
    {
       $paciente_id = Input::get('paciente_id');
       $paciente = Pacientes::find($paciente_id);
       $cita_id= Input::get('cita_id');
       $cita = Citas::find($cita_id);

        $data = array(
            'success' => true, 
            'id' => $paciente->id,
            'citaid'=>$cita->id ,
            'name' => $paciente->nombre,
            'apaterno' => $paciente->apellidop,
            'amaterno' => $paciente->apellidom,
            'edad' => $paciente->edad,
            'sex' => $paciente->sexo,
            'alt' => $paciente->altura,
            'peso' => $paciente->peso,
            'tel' => $paciente->tel,
            'cel'=> $paciente->cel,
            'mail' => $paciente->mail,
            'date' => $cita->pc

        );
        
        return Response::json($data);
        
    }




}
