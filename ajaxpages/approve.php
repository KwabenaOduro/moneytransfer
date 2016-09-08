<?php  

require_once '../config/general.php';

$sanitize = new general();




if($_POST['sid']){
    
    
    $sid = $_POST['sid'];
    
    
    echo $sid;
   
}



	$db = new db();
	
	$user = $db->getDb();
	
	$query = $user->query("UPDATE transfer SET status = 'Ap' WHERE tid ='{$sid}'");
	if(!$query){
		
		echo $user->error;
	}else{
		
		echo "succefuly inserted database";
		
	}
	





?>