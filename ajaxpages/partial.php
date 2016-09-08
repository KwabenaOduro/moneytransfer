<?php

require_once '../config/general.php';


	if($_POST['noteid']){
		
		$noteid = trim($_POST['noteid']);
		
		
	echo "values recieved";
		
		
	$db = new db();
	
	$user = $db->getDb();
	
	$query = $user->query("UPDATE cashier SET status = 'pap' WHERE noteid ='{$noteid}'");
	
	if(!$query){
		
		echo $user->error;
	}else{
		
		echo "succefuly Updated database";
		
	}
	
		
		
	}else{
		
		
		echo "Problem with stream";
	}




?>