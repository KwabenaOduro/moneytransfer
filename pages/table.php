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
                                    $display_string .="<caption>Cash Details Overview</caption>";
                                    $display_string .="<thead>";
                                    $display_string .= "<tr>";
                                    $display_string .= " <th>Note Type</th>";
                                    $display_string .= "<th>Note Amount</th>";
                                    $display_string .= "<th>Date</th>";
                                    $display_string .= "<th>Remarks</th>";
                                   
                                    $display_string .= "</tr>";
                                    $display_string .="</thead>";
                                    $display_string .="<tr id='tbleremove'>";
                                    
									while($rows=$query->fetch_assoc()){
                                        
                                        $display_string .= "<td >".$rows['notetype']."</td>";
                                        $display_string .= "<td class='noteamnt' note-id='".$rows['cashid']."' id='".$rows['cashid']. " '>".$rows['noteamount']."</td>";
                                        $display_string .= "<td >".$rows['date']."</td>";
                                        
                                        $tid = $rows['cashid'];
                                        $display_string .= "<td ><button id='rbtn' data-id='$tid' data-notetype='".$rows['notetype'] ."'data-noteamnt='".$rows['noteamount']. "'data-date=' ".$rows['date']."' data-noteid='".$rows['noteid']."' class='btn btn-mini btn-danger notebtn' type='button'>Pending....</button><button id='rbtn' data-id='$tid' class='btn btn-mini btn-success appbtn'      data-notetype='".$rows['notetype'] ."'data-noteamnt='".$rows['noteamount']. "'data-date=' ".$rows['date']."' type='button'>Approve....</button></td>";
                                        $display_string .= "<td class='infomarks'><span class='rmarks' id='$tid'></span></td>";
                                        /*$display_string .= "<td id='tblereq' style='border-right:0px;'>".$rows['ReqNumber']."</td>";*/
                                        $display_string .= "</tr>";
                                        
                                        
                                    }
                                    
                                   

                                }

           echo $display_string;



	
?>