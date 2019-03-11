<?php

class UserController extends BaseController {
	public function __construct(){
		$this->beforeFilter('auth');
	}
	//Mostrar usuarios
	public function getIndex(){
		$my_id=Auth::user()->id;
		$nivel=Auth::user()->nivel;

		if($nivel == 'Admin'){
			
			$users=DB::table('users')->where('id','<>',$my_id)->get();
			return View::make('Alumnos')-> with('users',$users);
		}
	}
	//Agregar usuarios
	public function postAgregar() {

		$nombre = Input:: get('name');
		$username = Input:: get('nickname');
		$password = Input:: get('pass');
		$tipo = Input:: get('nivel');

	$user = new User;
	$user->nombre = $nombre;
	$user->username=$username;
	$user->password= Hash::make($password);
	$user->nivel=$tipo;
	//guardamos
	$user->save();
	return Redirect::to('users')->with('status','ok_create');
		
	}

	//Eliminar Usuarios

	public function getEliminar($user_id) {
		//buscamos el usuario en la base de datos segun la id enviada
		$user = User::find($user_id);
		//eliminamos y redirigimos
		$user->delete();
		return Redirect::to('users')->with('status', 'ok_delete');

	}

public function getEdit($id) {
		//buscamos el usuario en la base de datos segun la id enviada
		
		//$user_id = Input::get('user');
  
       $user = User::find($id);
       
     
        
        $data = array(
            'success' => true,
            'id' => $id,
            'name' => $user->nombre,
            'username' => $user->username,
            'nivel' => $user->nivel
            
        );
        var_dump($data);

	}
	public function postUpdate() {

		$nombre = Input:: get('name_edit');
		$username = Input:: get('username_edit');
		$tipo = Input:: get('nivel_edit');

	$user_id = Input::get('user_id');
	$user= User::find($user_id);

	$user->username=$username;
	$user->nombre= $nombre;
	$user->nivel=$tipo;
	//guardamos
	$user->save();
	return Redirect::to('users')->with('status','ok_create');
		
	}

	
}
