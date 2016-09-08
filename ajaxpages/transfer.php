<?php  

require_once '../config/general.php';

$sanitize = new general();

if($_POST['sender']){
    
    
   $sender = $sanitize->sanitize($_POST['sender']);
   $receiver =$sanitize->sanitize($_POST['receiver']);
   $phonenumber = $sanitize->sanitize($_POST['phonenumber']);
   $amount =$sanitize->sanitize($_POST['amount']);
    $token =$sanitize->sanitize($_POST['token']);
    
}



	$db = new db();
	
	$user = $db->getDb();
	
	$query = $user->query("INSERT INTO  
							transfer(date,sender,receiver,phonenumber,amount,token,status) 
							VALUES(NOW(),'{$sender}','{$receiver}','{$phonenumber}','{$amount}','{$token}','Pd')
							
							");
	if(!$query){
		
		echo $user->error;
	}else{
		
		echo "succefuly inserted database";
		
	}
	
	
    


/*$newuser = $db->getDb();
$newquery = $newuser->query("SELECT * FROM supplier ORDER BY supid DESC LIMIT 1");




	 $display_string = " ";
   						
	if(!$newquery){
		
		echo $user->error;
	}else{
        
        $display_string .="<tr class='animated animated fadeInUp'>";
		
		while($rows=$newquery->fetch_assoc()){
            
            
            //echo $rows['pdtid'];
            
        $display_string .= "<td>".$rows['SupplierName']."</td>";
        $display_string .= "<td>".$rows['ProductCategory']."</td>";
        $display_string .= "<td>".$rows['SupplierAddress']."</td>";
        $display_string .= "<td>".$rows['OtherDetails']."</td>";
        
         $display_string .= "</tr>";

        }
        
        echo $display_string;
		
	}

*/

?>