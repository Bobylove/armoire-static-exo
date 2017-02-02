<?php 
require_once 'vendor/j4mie/idiorm/idiorm.php';

ORM::configure('mysql:host=localhost;dbname=mon_armoire');
ORM::configure('username','root');
ORM::configure('password','simplonco');



class Armoire {

	public function __construct(){
		$armoire = ORM::for_table('mes_chaussettes')->find_many();
	}

	public function getInstance(){

	}

	public static function all($limit,$offset){


	}

	public static function get($id){

	}
}















?>