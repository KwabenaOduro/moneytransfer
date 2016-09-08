<?php

require_once '../config/general.php';


	if($_GET['id']){
		
		$dataid = $_GET['id'];
        
        //echo $dataid;
        
        $db = new db();

        $querydb = $db->getDb();
        
        $query = $querydb-> query("SELECT * FROM transfer WHERE tid='{$dataid}' ");
		
    }
	/*echo "values recieved";*/
		
		
	/*$db = new db();
	
	$user = $db->getDb();
	
	$query = $user->query("UPDATE reqforms SET Status = 'Ap' WHERE ReqNumber ='{$reqvalue }'");
	
	if(!$query){
		
		echo $user->error;
	}else{
		
		echo "succefuly Updated database";
		
	}
	
		
		
	}else{
		
		
		echo "Problem with stream";
	}


*/


?>


<div id="requnit" class="hero-unit">
          	 <!--<button id="supbutton2" class="btn btn-small" type="button">New Supply</button>-->
            	<div class="container-fluid">
            		
            		<div id="rowfluid" class="row-fluid">
            			
            			<div class="span12">
            			    
            			    <button id="approve" class="btn btn-mini btn-danger" type="button">Pending...</button>
                            
            			    <form id="verify" class="form-inline">
                            
                              <input type="password" class="" placeholder="Id Number">
                              
                              <button type="submit" class="btn btn-small">Click To Verify ID...</button>
                            </form>
            			    
            			</div>
            			
            			<div id="span12" class="span3">
            				
            				
            					
            					<ul details-id="<?php echo 2 ?>" id="detailspan">
           					    
            					    <li>Senders Name</li>
            					    <li>Receivers Name</li>
            					    <li>Phone Number</li>
            					    <li>Token</li>
            					    <li>Amount</li>
                                    <li>Date Sent</li>
            					    
            					    
            					</ul>
            					
            				
            				
            				
            				
            				
            				
            			</div><!--Span 12 Here -->
            			
            			<div class="span8">
           			    
           			    <div class="span6">
           			    
           			    
           			        <?php 


                                                

                                                

                                                if(!$query){

                                                    die($querydb->error);
                                                }else{

                                                    while($rows = $query->fetch_assoc())

                                                    {

                                                     ?>	
            			    
                                                <ul id="detailspan2">
                                                        <li ><?php echo  $rows['sender']?></li>
                                                        <li><?php echo  $rows['receiver']?></li>
                                                        <li><?php echo  $rows['phonenumber']?></li>
                                                        <li><?php echo  $rows['token']?></li>
                                                        <li><?php echo  $rows['amount']?></li>
                                                        <li><?php echo  $rows['date']?></li>
                                                        <li id="sid" style="display:none"><?php echo  $rows['tid']?></li>


                                                    </ul>
                                                    
                                                  <?php   
                                                         
                                                    }
                                                    
                                                }
                                                         
                                                ?>	

                            </div>
            			   
            			    <div class="span6">
            			       <div  class="card hovercard">
                                  
                                   <img src="images/the-simpsons.png" alt=""/>
                                  
                                   <div id="cdinfo" class="info">
                                      <div class="title">
                                         
                                         <h5>ID Name</h5>
                                         
                                      </div>
                                      <div class="span4">
                                      
                                         <ul>
                                            
                                            <li>ID Type</li>
                                            <li>ID Name</li>
                                            <li>ID Number</li>
                                             
                                             
                                         </ul>
                                      
                                      
                                      
                                      </div>
                                      <div class="span7">
                                          
                                           <ul>
                                            
                                            <li>Passport</li>
                                            <li>Kwabena Oduro</li>
                                            <li>#59304850384503854</li>
                                             
                                             
                                         </ul>
                                          
                                          
                                      </div>
                                   </div>
                                   
                                </div>
            			        
            			    </div>
            			</div>
            			
            			
            		</div>
            		
            		
            		
            	</div>
            		
            		
            	
            
          </div>
          
          
          <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>-->
        <script src="../js/jquery.js"></script>
          
          <script>
          	
          	 
            $(document).ready(function(){
            
            $('#approve').click(function(){
            
            
            
                
                
                
                var formData = {'sid'    	: $('#sid').text(),};
									
									
									$.ajax({
			
											type:  		'POST',
											url :  		'ajaxpages/approve.php',
											data:  		formData,
											dataType: 	'text',
											
											
											}).done(function(data){
											
                                            /*$('#suptable').append(data);*/
                                            /*$('#suptable tr:first').after(data);*/
                                            $('#approve').html('Approved..').addClass('btn-success');
                                            $('#approve').attr('disabled' , true);
                                            $('#loadingsup').css('visibility','hidden');
                                            
											console.log(data);
											});
											
            
            });
                  
                  
                                 
                
            
            });
				
          	
          	
          </script>
          
          
          
          
 
       



