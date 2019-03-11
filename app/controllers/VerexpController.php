<?php

class VerexpController extends BaseController {

	public function __construct(){
		$this->beforeFilter('auth');
	}

	public function getIndex()
	{	
		$idpaciente= $_GET['ip'];
		//echo $idpaciente;
		//exit();
		//return View::make('logadmin');	
			$expediente=DB::select('select * from clinica where idPaciente = ?',array($idpaciente));			
			return View::make('verexp', compact('expediente'));
			
		
	}


}
