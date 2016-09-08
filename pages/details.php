<style>

    #cddetails{
        
        visibility:hidden;
        position:relative;
       background-image:url('images/idcard.png');
        width:350px;
        height:170px;
        background-size:100% 100%;
        
    }
    #imgdata{

			width: 130px;
			height: 130px;
			float: right;
			margin-right: 7px;
			margin-top: 30px;

		}
    
    #iddetails li{
            position:absolute;
			list-style: none;
			font-size: 10px;
			color:blue;
		}

		#iddetails li#pol{
         
			padding-left: 110px;
			padding-top: 25px;
           
		}

		#iddetails li#void{
            
			padding-left: 37px;
			padding-top: 40px;
            
			
		}
		#iddetails li#age{
			padding-left: 17px;
			padding-top: 82px;
			
		}
		#iddetails li#sex{
			padding-left: 15px;
			
			padding-top: 100px;
		}
		#iddetails li#regdate{
			padding-left: 90px;
			padding-top: 120px;
			
		}
		#iddetails li#fulname{
			padding-left: 27px;
			padding-top:137px;
			
		}


</style>



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
                            
                              <input id="gvfy" type="text" class="" placeholder="Id Number">
                              
                              <button id="gid" type="button" class="btn btn-small">Click To Verify ID...</button>
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
            			
            			<div  class="span8">
           			    
           			    <div class="span4">
           			    
           			    
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
            			   
            			    <div class="span8" id="cddetails" >
            			      
            			       <!--<ul id="iddetails">

                                <li id="pol">F89SLE0093848</li>
                                <li id="void">503450039</li>
                                <li id="age">26</li>
                                <li id="sex">MALE</li>
                                <li id="regdate">20/1/2012</li>
                                <li id="fulname">PATRICK ODURO</li>



					        </ul>
                            
                            -->
            			        
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
                  
                  
                      
                $('body').on('click','#gid',function(){
                
                         
                
                     var formData = {'verifyid'    	: $('#gvfy').val(),};
									
									
									$.ajax({
			
											type:  		'POST',
											url :  		'ajaxpages/verifyid.php',
											data:  		formData,
											dataType: 	'text',
											
											
											}).done(function(data){
											
                                            $('#cddetails').css('visibility','visible');
                                            $('#cddetails').html(data);
                                           
											console.log(data);
											});
											
                
                
                
                });
                
            
            });
				
          	
          	
          </script>
          
          
          
          
 
       



