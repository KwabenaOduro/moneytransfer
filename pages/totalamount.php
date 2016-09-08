<?php 


require_once '../config/general.php'; 


if($_GET['noteid']){
    
    
    $noteid = $_GET['noteid'];
    
}else{
    
    
    echo 'Sorry stream not available';
    
    
}

            					$db = new db();
									
								$querydb = $db->getDb();
									
								$query = $querydb-> query("SELECT * FROM cashier WHERE noteid = '{$noteid}' ");
								
                                $result = array();
								
								if(!$query){
									
									die($querydb->error);
								}else{
									
									while($rows=$query->fetch_array()){
                                        
                                        array_push($result, array('totalamount' => $rows[3] ));
                                                                 
                                                                 
                                        }
                                    
                                   

                                }

            echo json_encode(array("result" =>$result));



?>
