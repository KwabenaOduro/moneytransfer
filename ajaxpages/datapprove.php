<?php  

require_once '../config/general.php';

$sanitize = new general();




if($_POST['dataid']){
    
    
    $dataid = $_POST['dataid'];
    
     $noteid = $_POST['noteid'];
    
    echo 'stream received';
  
   
}else{
    
    echo 'Stream not available';
    
}



	$db = new db();
	
	$user = $db->getDb();
	
	$query = $user->query("UPDATE cashdetails SET status = 'Approved' WHERE cashid ='{$dataid}'");
	if(!$query){
		
		echo $user->error;
	}else{
		
		echo "succefuly inserted database";
		
	}
	





?>