<?php

class PagosController extends BaseController {

	public function __construct(){
		$this->beforeFilter('auth');

	}

	public function getIndex()
	{

		date_default_timezone_set('America/Mexico_city');
		$y=date('Y');
		$m=date('m');
		$d=date('d');

		$fecha=$y.'-'.$m.'-'.$d;

switch($_GET['valor']) 
{ 
		
case '1': 
{ 			
			$this->beforeFilter('ag');
			$checar = DB::select('select * from gym where finsub > '.$fecha.' and pago=1');
			foreach ($checar as $checar) {
			if ($fecha >=$checar->finsub){
				$alum= Gimnasio::find($checar->id);		
				$alum->pago=0;
				var_dump($alum->pago);
				$alum->save();
			}
		}
			$pacientes=DB::select('select paciente.id, nombre, apellidop, apellidom, edad, tel, cel, mail, gym.id as idgim, inscripcion, finsub, pago, idDiciplina, idpaciente from paciente join gym on paciente.id = idpaciente and pago=1');
			$modulo = DB::select('select * from gym join diciplinas where diciplinas.id = idDiciplina');
			$diciplinas = DB::select("select * from diciplinas where modulo='gym'");			
			return View::make('pago', compact('pacientes','modulo','diciplinas'));
			
}break; 

case '2': 
{ 

		$this->beforeFilter('ad');	
		$checar = DB::select('select * from diplomado where finsub > '.$fecha.' and pago=1');
		foreach ($checar as $checar) {
			if ($fecha >=$checar->finsub){
				$alum= Diplomado::find($checar->id);		
				$alum->pago=0;
				var_dump($alum->pago);
				$alum->save();
		}
		}
			$pacientes=DB::select('select paciente.id, nombre, apellidop, apellidom, edad, tel, cel, mail, diplomado.id as iddiplo, inscripcion, finsub, pago, idDiciplina, idpaciente from paciente join diplomado on paciente.id = idpaciente and pago=1');
			$modulo = DB::select('select * from diplomado join diciplinas where diciplinas.id = idDiciplina');
			$diciplinas = DB::select("select * from diciplinas where modulo='diplo'");			
			return View::make('pago', compact('pacientes','modulo','diciplinas'));
}break; 
} 		
		
	}

}
