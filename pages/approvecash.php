<div id="heorunit" class="hero-unit">
          	
          	 
          	<div id="btngrp" class="input-append">
          	 		<select id="attach" name="reqselect" class="span8">
          	 			
                    </select>
                    
            <button id="opclick"  class="btn" type="submit">Waiting Approval&nbsp;(<span id="btnwait"></span>)</button>
              </div>
          	 
          	 
            	<div class="container-fluid">
            		
            		<div class="row-fluid">
            			
            			<div id="tbleid" class="span12">
            				
            				
            				<table id="reqtable" class="table table-striped">
								  <caption>Cash Details Overview</caption>
								  <thead>
								    <tr>
								      <th>Note Type</th>
								      <th>Note Amount</th>
								       <th>Date</th>
								       <th>Remarks</th>
								       
            						
								       
								    </tr>
								  </thead>
           				 
                            </table>
            				 
            				
            			</div>
            			
            			    <div class="span12">
            				    
            				    <small>Total Amount</small><span id="tamnt" class="label label-info">0.00000</span>
            				    
            				</div>
            			
            			<button id="reqap" name="reqap" class="btn btn-small btn-success" type="button">Verify Notes</button>
            			
            		</div>
            		
            		
            		
            	</div>
            		
            		
            	
            
          </div>
 
          
          <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>-->
        <script src="../js/jquery.js"></script>
          
          <script>
              
              
              
              $(document).ready(function(){
                 
                  $('body').on('click','.notebtn',function(){
                      
                      var dataid =$(this).attr('data-id');
                      var notetype =$(this).attr('data-notetype');
                      var noteamount =$(this).attr('data-noteamnt');
                      var date =$(this).attr('data-date');
                      var noteid =$(this).attr('data-noteid');
                  
                     $('#'+dataid).html('<span class="label label-warning">Not approved</span>');
                      
                      
                         var formData = {
							
										'dataid'		: dataid,
										'notetype'		: notetype,
										'noteamount'	: noteamount,
                                        'date'		    : date,
                                        'noteid'        : noteid,
									};
                      
                      
                      $.ajax({
			
											type:  		'POST',
											url :  		'ajaxpages/notapprove.php',
											data:  		formData,
											dataType: 	'text',
											
											
											}).done(function(data){
											
											console.log(data);
                                        
                                          
                                           
											});
                      
                      
                       
                     });
                  
                  
                 $('body').on('click','.appbtn',function(){
                  
                     var dataid =$(this).attr('data-id');
                     var notetype =$(this).attr('data-notetype');
                      var noteamount =$(this).attr('data-noteamnt');
                      var date =$(this).attr('data-date');
                      var noteid =$(this).attr('data-noteid');
                      
                      $('#'+dataid).html('<span class="label label-info">Approved</span>');
                     
                     var formData = {
							
										'dataid'		: dataid,
										'notetype'		: notetype,
										'noteamount'	: noteamount,
                                        'date'		    : date,
                                        'noteid'        : noteid,
									};
                      
                      
                      $.ajax({
			
											type:  		'POST',
											url :  		'ajaxpages/datapprove.php',
											data:  		formData,
											dataType: 	'text',
											
											
											}).done(function(data){
											
											console.log(data);
                                        
                                          
                                           
											});
                      
                      
                      
                      
                      });
                 
                  
                 updates();
                  
                  
            //Send Options through Ajax
                  
                  $('body').on('click','#opclick',function(){
        
        
        
                    var value = $('#attach').val();
              
             
							
							var formData = {
							
							
										'noteid'		: $('#attach').val(),
										
										
									};
									
									
									$.ajax({
			
											type:  		'POST',
											url :  		'pages/table.php',
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
                  
                  
                  
                  
                  
                  
                  $('#reqap').click(function(){
                  
                      
                      var TableData = new Array();
    
                           
                      
                      $('#reqtable tr').each(function(){
                      
                      
                        TableData.push($(this).find('td:eq(4)').text());
                          
                        });
                            
                       TableData.shift();
                      
                      console.log(TableData);
                     
                       var count = 0;
                      $.each(TableData, function(key, val) {
                    if (val === 'Not approved') {
                        
                         count++;
                        
                        }
                          
                      });
                      
                     
                      
                      if(count === 0){
                          
                          
                          var noteid =$('.notebtn').attr('data-noteid');
                      
                      
                        console.log(noteid);
                        console.log($('#attach').val());
                  
                        
                        var formData = {
							
	
				        'noteid'		: noteid,
				
										
						};
									
									
					$.ajax({

							type:  		'POST',
							url :  		'ajaxpages/verifynote.php',
							data:  		formData,
							dataType: 	'text',
							
							
							}).done(function(data){
							
							console.log(data);
                        
                            var tblevalue = $('#tblereq').text();
                        
                            console.log(tblevalue);
                        
                            if($('#attach').val() ==  noteid ){
              
                              var value = $('#attach').val();
                            
                           

                             $('#attach option[value="'+value+'"]').remove();
                                
                            
                           }
                  
                        updates();
							
                    });
                          
                          
                      }else{
                          
                           console.log(count);
                          var noteid =$('.notebtn').attr('data-noteid');
                      
                      
                        console.log(noteid);
                        console.log($('#attach').val());
                  
                        
                        var formData = {
							
	
				        'noteid'		: noteid,
				
										
						};
									
									
					$.ajax({

							type:  		'POST',
							url :  		'ajaxpages/partial.php',
							data:  		formData,
							dataType: 	'text',
							
							
							}).done(function(data){
							
							console.log(data);
                        
                            var tblevalue = $('#tblereq').text();
                        
                            console.log(tblevalue);
                        
                            if($('#attach').val() ==  noteid ){
              
                              var value = $('#attach').val();
                            
                           

                             $('#attach option[value="'+value+'"]').remove();
                                
                            
                           }
                  
                        updates();
							
                    });
                          
                      }
                      
                  
                   /* var noteid =$('.notebtn').attr('data-noteid');
                      
                      
                        console.log(noteid);
                        console.log($('#attach').val());
                  
                        
                        var formData = {
							
	
				        'noteid'		: noteid,
				
										
						};
									
									
					$.ajax({

							type:  		'POST',
							url :  		'ajaxpages/verifynote.php',
							data:  		formData,
							dataType: 	'text',
							
							
							}).done(function(data){
							
							console.log(data);
                        
                            var tblevalue = $('#tblereq').text();
                        
                            console.log(tblevalue);
                        
                            if($('#attach').val() ==  noteid ){
              
                              var value = $('#attach').val();
                            
                           

                             $('#attach option[value="'+value+'"]').remove();
                                
                            
                           }
                  
                        updates();
							
                    });
                      */
                  });
                  
                  
                  
                  
                  
                  //Ends Here
              
                  
                  
                  
                  
              
              function updates(){
                  
                 

                $.getJSON("pages/outoption.php",function(data){

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
          
          