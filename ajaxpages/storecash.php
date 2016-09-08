<?php  

require_once '../config/general.php';

$sanitize = new general();

if($_POST['namedep']){
    
    
   @$namedep = $sanitize->sanitize($_POST['namedep']);
   @$receivedby =$sanitize->sanitize($_POST['receivedby']);
  @$amntdep = $sanitize->sanitize($_POST['amntdep']);
    $random = $_POST['random'];
  
}


    


	$db = new db();
	
	$user = $db->getDb();
	
	$query = $user->query("INSERT INTO  
							cashier(date,depositorname,noteid,recievedby,status,totalamount) 
							VALUES(NOW(),'{$namedep}','{$random}','{$receivedby}','pd','{$amntdep}')
							");
	if(!$query){
		
		echo $user->error;
	}else{
		
		echo "succefuly inserted database";
		
	}


if($_POST['data']){
    
    @$dataString = $_POST['data'];
    $decodedText = html_entity_decode($dataString);
    @$data = json_decode($decodedText,true);
    
    }


 foreach ($data as $k => $v) {
    //echo $k ."=>".$v."\n";
     
     $newquery = $user->query("INSERT INTO  
							cashdetails(notetype,noteamount,noteid,date) 
							VALUES('{$k}','{$v}','{$random}',NOW())
							
							");
}


if(!$newquery){
		
		echo $user->error;
	}else{
		
		echo "Array Data inserted database";
		
	}


?>