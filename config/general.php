<?php

require_once '../config/db.php';


class general{


	public function  sanitize($input){

		$input = strip_tags(trim($input));
		
		$output = htmlentities($input, ENT_NOQUOTES );
		
		return $output;
		
	}
	
	
}


?>