<?php

class AusersController extends BaseController {

protected $layout = 'layouts.master';


	public function getIndex()
	{
		return View::make('ausers');	
	}



	}
