<?php  

require_once '../config/general.php';

$sanitize = new general();

if($_POST['newval']){
    
    
   $newval = $sanitize->sanitize($_POST['newval']);
   $amount =$sanitize->sanitize($_POST['amount']);
  $random = $sanitize->sanitize($_POST['random']);
  
}



	$db = new db();
	
	$user = $db->getDb();
	
	$query = $user->query("INSERT INTO  
							cashdetails(notetype,noteamount,notid,date) 
							VALUES('{$newval}','{$amount}','{$random}',NOW())
							
							");
	if(!$query){
		
		echo $user->error;
	}else{
		
		echo "succefuly inserted database";
		
	}
	

?>