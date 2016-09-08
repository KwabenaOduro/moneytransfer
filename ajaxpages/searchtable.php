<?php  

require_once '../config/general.php';

$sanitize = new general();

 $display_string = " ";

if(@$_POST['search']){
    
    
   @$search = $sanitize->sanitize($_POST['search']);
    
    if($search === ''){
        
       exit();
       
    }else{
        
        
       $db = new db();
	
	$user = $db->getDb();
	
	$query = $user->query("SELECT * FROM transfer WHERE token LIKE '%{$search }%' OR sender LIKE '%{$search }%'");
        
   
        
	if(!$query){
		
		echo $user->error;
        
	}else{
		
         
		/*echo "succefuly inserted database";*/
        $display_string .="<table id='reqtable' class='table table-striped'>";
        $display_string .="<tr>";
        $display_string .= "<th>Senders Name</th>";
        $display_string .= "<th>Recievers Name</th>";
        $display_string .= "<th>Amount Sent</th>";
        $display_string .= "<th>Phone Number</th>";
        $display_string .= "<th>Date Sent</th>";
        $display_string .= "<th>Token</th>";
        $display_string .= "<th>Status</th>";
        $display_string .="</tr>";
        
        
        $display_string .="<tr>";
        
        while($rows = $query->fetch_assoc()){
            
            /*echo $rows['receiver'];*/
            
        $display_string .= "<td>".$rows['sender']."</td>";
        $display_string .= "<td>".$rows['receiver']."</td>";
        $display_string .= "<td>".$rows['amount']."</td>";
        $display_string .= "<td>".$rows['phonenumber']."</td>";
        $display_string .= "<td>".$rows['date']."</td>";
        $display_string .= "<td>".$rows['token']."</td>";
        
            //Validate Status
            
            
            if($rows['status']=='Ap'){
                                                         
                                                         
                                                            
               $display_string .= "<td style='border-right:0px;' ><button class='btn btn-mini btn-success' type='button'>Approved..</button></td>";

                }else{
                                                         
                $tid = $rows['tid'];

                 $display_string .= "<td style='border-right:0px;'><button id='pdbtn' data-id='$tid' class='btn btn-mini btn-danger' type='button'>Pending....</button></td>";
                                                        
            }

            
        
         $display_string .= "</tr>";
            
        $display_string .= "</table>";
            
        }
        
        echo $display_string;
		
	}
	
        
        
    }
   
   
}




?>