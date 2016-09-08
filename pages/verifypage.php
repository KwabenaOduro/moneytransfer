<div id="heorunit" class="hero-unit">
          	
    <div class="span12"><span><div class="span2"><button id="print" name="print" class="btn btn-mini" type="button">Print Details</button></div> <div class="span2"><small id="rtoken"><!--#123889477562546452636--></small></div></div>
         	 
         	 
          	<div id="btngrp" class="input-append">
         	 		
         	 		
          	 		<select id="attach" name="reqselect" class="span8">
          	 			
                    </select>
                    
            <button id="vpclick"  class="btn" type="submit">Waiting Approval&nbsp;(<span id="btnwait"></span>)</button>
             
              </div>
          	 
          	 
            	<div class="container-fluid">
            		
            		<div class="row-fluid">
            			
            			<div id="tbleid" class="span12">
            				
            				
            				<table id="reqtable" class="table table-striped">
								  <caption>Note Errors Overview</caption>
								  <thead>
								    <tr>
								      <th>Note Type</th>
								      <th>Note Amount</th>
								       <th>Date</th>
								       <th>Status</th>
								       
            						
								       
								    </tr>
								  </thead>
           				 
                            </table>
            				 
            				
            			</div>
            			
            			    <div class="span12">
            				    
            				    <small>Total Amount</small><span id="tamnt" class="label label-info">0.00000</span>
            				    
            				</div>
            			
            			<!--<button id="reqap" name="reqap" class="btn btn-small btn-success" type="button">Verify Notes</button>-->
            			
            		</div>
            		
            		
            		
            	</div>
            		
            		
            	
            
          </div>
 
          
          <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>-->
        <script src="../js/jquery.js"></script>
          
          <script>
              
              
              
              $(document).ready(function(){
                 
                 
                  
                 updates();
                  
                  
            //Send Options through Ajax
                  
                  $('body').on('click','#vpclick',function(){
        
        
        
                    var value = $('#attach').val();
              
             
							
							var formData = {
							
							
										'noteid'		: $('#attach').val(),
										
										
									};
									
									
									$.ajax({
			
											type:  		'POST',
											url :  		'pages/errortable.php',
											data:  		formData,
											dataType: 	'text',
											
											
											}).done(function(data){
											
											console.log(data);
                                        
                                            $('#tbleid').html(data);
                                           
											});
                      
                      
                      
                      
                      //Get total amount Here
                      

                            $.getJSON("pages/totalamount.php?noteid="+value,function(data){

                          /* $("#attach").empty();*/

                           /* var count = 0;*/
                           $.each(data.result,function(){

                               /*$("#attach").append("<option value="+this['noteid']+">"+this['noteid']+"</option>");
                               
                               console.log(this['noteid']);

                               count++;
                               */
                               $('#tamnt').text(this['totalamount']);
                               
                           });

                                /*$('#btnwait').html(count);*/

                       });
   
											
				});
                  
                  
                  //Handling Print Details Here
                      
                        
                      $('body').on('click','#print',function(){
                          
                          var value = $('#attach').val();
                      
                                            window.focus();
                                            window.open("pdfpages/errorpdf.php?noteid="+value);
                                            window.focus();
                      
                      
                       });
                                   
                      
                      
                      
                      //Print Details Ends Here
                  
                  
                  
                  
                   function updates(){
                  
                 

                $.getJSON("pages/verifyerror.php",function(data){

               $("#attach").empty();

                var count = 0;
               $.each(data.result,function(){

                   $("#attach").append("<option value="+this['noteid']+">"+this['noteid']+"</option>");

                   console.log(this['noteid']);

                   count++;
               });

                    $('#btnwait').html(count);

           });
   
              }
              
              
            });
              
              
              
              
              
              
          </script>
          
          