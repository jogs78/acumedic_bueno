<?php
class DiciplinasController extends BaseController {

	public function __construct(){
		$this->beforeFilter('auth');
	}

	public function getIndex()
	{
		switch($_GET['valor']) 
{ 

case '1': 
{ 	
			$this->beforeFilter('ag');
			$dicip=DB::select('select * from diciplinas where modulo="gym"');			
			$mod='gym';
			return View::make('adicip')->with(array('mod'=>$mod, 'dicip'=>$dicip));
}break; 

case '2': 
{ 
		$this->beforeFilter('ad');
		$dicip=DB::select('select * from diciplinas where modulo="diplo"');
		$mod='diplo';
		return View::make('adicip')->with(array('mod'=>$mod, 'dicip'=>$dicip));
}break; 

}  
	}


	public function postAgregar()
	{
		//Obetener Datos Post
		$userdata = array(

		$nombre = Input:: get('name'),
		$costo = Input:: get('precio'),
		$desc = Input:: get('desc'),
		$modulo = Input:: get('mod')		
		);

		//var_dump($userdata);
			
	$dicip = new Diciplinas;
	$dicip->nombre=$nombre;
	$dicip->costo=$costo;
	$dicip->desc=$desc;
	$dicip->modulo=$modulo;
	
	//guardamos
	$dicip->save();

	if ($modulo=="gym") {
		$url='diciplinas?valor=1';
	}elseif ($modulo=="diplo") {
		$url='diciplinas?valor=2';
	}


	return Redirect::to($url)->with('status','ok_create');
	}


	public function postUpdate()
	{
			

		
		
		$iddiciplina = Input:: get('iddiciplina');
		$dici = Diciplinas::find($iddiciplina);
$userdata = array(
		$dici->nombre = Input:: get('name_edit'),
		$dici->costo = Input:: get('precio_edit'),
		$dici->desc = Input:: get('desc_edit')
);
$modulo = Input:: get('mod');
if ($modulo=="gym") {
		$url='diciplinas?valor=1';
	}elseif ($modulo=="diplo") {
		$url='diciplinas?valor=2';
	}
		$dici->save();
		return Redirect::to($url)->with('status', 'ok_update');
		
	}
	


}
