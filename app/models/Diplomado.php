<?php



use Illuminate\Auth\UserTrait;

use Illuminate\Auth\UserInterface;

use Illuminate\Auth\Reminders\RemindableTrait;

use Illuminate\Auth\Reminders\RemindableInterface;



class Diplomado extends Eloquent implements UserInterface, RemindableInterface {



	use UserTrait, RemindableTrait;

	public $timestamps = false;




	protected $table = 'diplomado';



}





