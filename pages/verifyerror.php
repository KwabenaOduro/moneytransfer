<?php 


require_once '../config/general.php'; 




            					$db = new db();
									
								$querydb = $db->getDb();
									
								$query = $querydb-> query('SELECT * FROM cashier WHERE status = "pap" ');
								
                                $result = array();
								
								if(!$query){
									
									die($querydb->error);
								}else{
									
									while($rows=$query->fetch_array()){
                                        
                                        array_push($result, array('noteid' => $rows[3] ));
                                                                 
                                                                 
                                                                 
                                                                 
                                                                
                                        
                                    }
                                    
                                   

                                }

            echo json_encode(array("result" =>$result));



?>
