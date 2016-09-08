<?php

require_once '../config/general.php';

$sanitize = new general();



	if(@$_POST['selectedpdt']){
		
		$selectedpdt = $_POST['selectedpdt'];
		$categorypdt = $_POST['categorypdt'];
		$qtyrequested =$sanitize->sanitize($_POST['qtyrequested']);
		$consumername =$sanitize->sanitize($_POST['consumername']);
		$unitprice = $sanitize->sanitize(floatval($_POST['unitprice']));
		$value = $sanitize->sanitize(floatval($_POST['value']));
		$requestedby = $sanitize->sanitize($_POST['requestedby']);
		$date = $sanitize->sanitize($_POST['date']);
		$supplier = $sanitize->sanitize($_POST['supplier']);
		$reqnumber =trim($_POST['reqnumber']);
		
		
	}
	

	
	
	
	$db = new db();
	
	$user = $db->getDb();
	
	$query = $user->query("INSERT INTO 
							reqforms(ProductName,ProductCategory,QtyRequested,ConsumerName,UnitPrice,Value,RequestedBy,Date,Supplier,ReqNumber,Status) 
							VALUES('{$selectedpdt}','{$categorypdt}','{$qtyrequested}','{$consumername}','{$unitprice}','{$value}','{$requestedby}','{$date}','{$supplier}','{$reqnumber}','Pd')
							
							");
	if(!$query){
		
		echo $user->error;
	}else{
		
		echo "succefuly inserted database";
		echo $reqnumber;
	}
	
	
	
	
?>