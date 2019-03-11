<?php

class UsuariosController extends BaseController {


	public function getIndex()
	{
		Auth::logout();
		return View::make('logadmin');	

	}

	public function postUser()
	{
		//Obetener Datos Post
		//$userdata = array(
			
			$username = Input:: get('username');
			$password = Input:: get('password');
			
			//);

		if (Auth::attempt(['username' => $username, 'password' => $password])){
			
		
			return Redirect::intended('menuadmin');
		}
		else {
			return Redirect::to('usuarios')->with('login_errors',true);
		}

		}


	
}
