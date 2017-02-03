<?php 
require_once 'vendor/j4mie/idiorm/idiorm.php';

class Armoire {

	public $db;

	public function __construct(){

		ORM::configure('mysql:host=localhost;dbname=mon_armoire');
		ORM::configure('username','root');
		ORM::configure('password','simplonco');

		$this->db = ORM::for_table('mes_chaussettes');

	}

	public function getInstance(){
		return $this->db;
	}

	public static function all($limit=10, $offset=0){
		$tab = new self();	
		return $tab->getInstance()
		->limit($limit)
		->offset($offset)
		->find_many();
	}

	public static function get($id){
		$tabId = new self();
		return $tabId->getInstance()->find_one($id);

	}
}

?>