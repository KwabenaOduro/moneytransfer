<?php require_once '../config/db.php'; ?>

          <div id="requnit" class="hero-unit">
          	 <!--<button id="supbutton2" class="btn btn-small" type="button">New Supply</button>-->
            	<div class="container-fluid">
            		
            		<div id="rowfluid" class="row-fluid">
            			
            			<div id="span12" class="span12">
            				
            				
            					
            					
            					
            					<!--Table starts Here -->
            					<div class="span12">
           					    <div class="input-prepend">
           					    <span class="add-on">Search</span>
           					    <input id="search" name="typesearch" type="text" placeholder="Type something…">
           					    </div>
           					    </div>
            					    
            					</div><!--<span id="stext">Text goes here</span>-->
            					
            					        <table id="reqtable" class="table table-striped">
            					
            					        <tr>
            						
                                            <th>Senders Name</th>
                                            <th>Receivers Name</th>
                                            <th>Amount Sent</th>
                                            <th>Phone Number</th>
                                            <th>Date Sent</th>
                                            <th>Token</th>
                                            <th>Status</th>
                                            
                                            </tr>
                                              
                                        
                                               

                                    </table>
            					
            					
            					
            					<!--Table Ends Here -->
            					
            				
            				
            				
            				
            			</div><!--Span 12 Here -->
            			
            			
            		</div>
            		
            		
            		
            	</div>
            		
            		
            	
            
          </div>
          
          
          <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>-->
        <script src="../js/jquery.js"></script>
          
          <script>
          	
          	 
              $(document).ready(function(){
              
                  
                  $('body').on('click','#pdbtn',function(){
                  
                    var dataid =$(this).attr("data-id");
                      
                      console.log(dataid);
                      
                       $('#tranhero').load('pages/details.php?id='+dataid);
                  
                  
                  });
                  
                  
                  
                  
                  $('#search').keyup(function(){
                  
                  
                     var searchval = $(this).val();
                      
                      if(searchval.length == 0){
                          
                         
                          
                          var newstring ='<table id="reqtable" class="table table-striped"><tr><th>Senders Name</th><th>Receivers Name</th><th>Amount Sent</th><th>Phone Number</th><th>Date Sent</th><th>Token</th><th>Status</th></tr></table>';
                          
                         $('#reqtable').html(newstring);
                          
                         
                        
                      }else{
                          
                          var formData = {'search'  : $(this).val(),};
                          
                          $.ajax({
			
											type:  		'POST',
											url :  		'ajaxpages/searchtable.php',
											data:  		formData,
											dataType: 	'text',
											
											
											}).done(function(data){
											
                                            $('#reqtable').html(data);
                                                /*$('#suptable tr:first').after(data);*/
                                             /*$('#stext').text(data);*/
                                            $('#loadingsup').css('visibility','hidden');
                                            $('#supsave').html('Click To Save');
											console.log(data);
											});
        
                        
                      }
                      
                      
                      
                      
                       });
                  
                
              
              });
				
				
				
          	
          	
          </script>
          
          
          
          
 
       