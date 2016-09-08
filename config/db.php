<?php


/**
 * 
 */
class db {
	
	private $db;
	private static $_instance = null;
	
	function __construct() {
		
		//$this->db = new mysqli('localhost','root','adom','dbmts');
		
		$this->db = new mysqli('localhost','root','','dbmts');
		
		
	}
	
	public function getDb(){
		
		
		return $this->db;
	}
	
	/*public static function getInstance(){
		
		if(!isset(self::$_instance)){
			
			self::$_instance = new db();
		}
		
		return self::$_instance;
	}
	 
	 * */
	 
	 
}



 



?>