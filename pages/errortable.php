<?php

require_once '../config/general.php';


if(@$_POST['noteid']){
    
    
    $noteid =  $_POST['noteid'];
    
    
}
	
            					$db = new db();
									
								$querydb = $db->getDb();
									
								@$query = $querydb-> query("SELECT * FROM cashdetails WHERE noteid ='{$noteid}'");
								
                                $result = array();
                                
                                $display_string = " ";
                                
								
								if(!$query){
									
									die($querydb->error);
								}else{
									
                                    
                                    $display_string = "<table id='reqtable' class='table table-striped'>";
                                    $display_string .="<caption>Note Errors Overview</caption>";
                                    $display_string .="<thead>";
                                    $display_string .= "<tr>";
                                    $display_string .= " <th>Note Type</th>";
                                    $display_string .= "<th>Note Amount</th>";
                                    $display_string .= "<th>Date</th>";
                                    $display_string .= "<th>Status</th>";
                                   
                                    $display_string .= "</tr>";
                                    $display_string .="</thead>";
                                    $display_string .="<tr id='tbleremove'>";
                                    
									while($rows=$query->fetch_assoc()){
                                        
                                        $display_string .= "<td >".$rows['notetype']."</td>";
                                        $display_string .= "<td class='noteamnt' note-id='".$rows['cashid']."' id='".$rows['cashid']. " '>".$rows['noteamount']."</td>";
                                        $display_string .= "<td >".$rows['date']."</td>";
                                        
                                        $status = $rows['status'];
                                        
                                        if($status == 'Not approved'){
                                            
                                            $display_string .= "<td ><span class='label label-warning'>".$rows['status']."</span></td>";
                                            
                                        }else{
                                            
                                            
                                             $display_string .= "<td ><span class='label label-info'>".$rows['status']."</span></td>";
                                            
                                        }
                                        
                                       
                                        $display_string .= "</tr>";


                                    }
                                    
                                   

                                }

           echo $display_string;



	
?>