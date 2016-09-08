<?php

require_once '../config/general.php';

$arr = array();

if($_POST['newreq']){
	
	$newreq = $_POST['newreq'];
	

		$db = new db();
		
		$querydb = $db->getDb();
		
		$query = $querydb-> query('SELECT * FROM reqforms WHERE ReqNumber="{$newreq}"');
		
		if(!$query){
			
			die($querydb->error);
			
		}else{
			
			while($rows=$query->fetch_assoc()){
				
				$arr[] = array('productname' => trim($rows['ProductName']), 'productcategory' => $rows['ProductCategory']);
				
			}
			
			echo json_encode($arr);
		}
		
		
	
	
            					
		
	}else{
		
		echo "not recieved";
	}
	
	
	
?>