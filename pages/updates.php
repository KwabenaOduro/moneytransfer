               

          <div id="requnit" class="hero-unit">
          	 <!--<button id="supbutton2" class="btn btn-small" type="button">New Supply</button>-->
            	<div class="container-fluid">
            		
            		<div id="rowfluid" class="row-fluid">
            			
            			<div  class="span12">
            				
            				
            					<!-- Creating A tab Here -->
            				<div id="spantab" class="span12">
            				
            				
            				
            					
                                <ul  class="nav nav-tabs" id="myTab">
                                  <li class="active"><a href="#home">Product</a></li>
                                 
                                  <li><a href="#messages">Unit Price</a></li>
                                  <li><a href="#settings">Supplier</a></li>
                                </ul>

                                <div class="tab-content">
                                  <div class="tab-pane active" id="home">
                                     
                                     <!--Product Forms -->
                                      
                                    <form id="pdtform"  class="form-inline">
                                     
                                    <div class="span12">
                                      
                                      <div class="span3">
                                         
                                         <div class="control-group">
											    
											    <div class="controls">
											      <input type="text" id="pdtcategory" class="span 4" name="pdtcategory" placeholder="Product Category">
											    </div>
											  </div>
								        
                                          
                                          
                                      </div>
                                      <div class="span3">
                                         
                                         <div class="control-group">
											    
											    <div class="controls">
											      <input type="text" id="pdtname" class="span 4" name="pdtname" placeholder="Product Name">
											    </div>
											  </div>
											 
											
                                         
                                          
                                      </div>
                                      <div class="span3">
                                         
                                         <div class="control-group">
											   
											    <div class="controls">
											      <input type="date" id="date" class="span 4" name="date" placeholder="QTY Requested">
											    </div>
											  </div>
                                         
                                          
                                      </div>
                                      <div class="span3">
                                        
                                        
                                       
                                        
                                        
                                         <div class="control-group">
											    
											    <div class="controls">
                                              
                                                  <input type="text" id="supplier" class="span 4" name="supplier" placeholder="Supplier">
											      
											    </div>
								        </div>
                                      
                                       
                                      </div>
            							
            				</div>
            							 
                                    <div id="pdtpress" class="control-group">
											    
								             <button id="pdtsave" class="btn btn-small btn-success"  type="submit">Click To Save</button>
											    
								       
                                       </div>
                                       
                                       <img  id="loadingpdt" src="images/loader.gif" alt="Loading" />
                                      
									</form>
            					
            					<!-- Form Table -->
                                      
                                      <div id="tbleid" class="span12">
            				
            				
                                        <table id="reqtable" class="table table-striped">
                                              <caption>Product Form Overview</caption>
                                              
                                                <tr>
                                                  <th>Product Category</th>
                                                  <th>Product Name</th>
                                                   <th>Date</th>
                                                   <th>Supplier Name</th>
                                                   
                                                </tr>
                                             
                                               
                                              
                                              
                                              <?php

                                                require_once '../config/general.php'; 
                                                        $db = new db();
                                                        $newuser = $db->getDb();
                                                        $newquery = $newuser->query("SELECT * FROM product ");




                                                             

                                                            if(!$newquery){

                                                                echo $user->error;
                                                            }else{

                                                                

                                                                while($rows=$newquery->fetch_assoc()){  ?>
                                                                     <tr>
                                                                    <td> <?php echo $rows['ProductCategory'];  ?></td>
                                                                    <td> <?php echo $rows['ProductName'];  ?></td>
                                                                    <td> <?php echo $rows['DateUpdated'];  ?></td>
                                                                    <td> <?php echo $rows['SupplierName'];  ?></td>
                                                                    
                                           
                                                                    </tr>
                                                                  <?php
                                                               
                                                                }

                                                                

                                                            }

                                            
                                            
                                            
                                            
                                                ?>
                                              
                                              
                                           
                                              
                                        </table>

            				
            				
            				
            					
            				
            				
            				
            			</div>
                                      
                                      
                                <!-- Form Table Ends Here -->    
                                      
                                      
                        </div>
                                 
                                  <div class="tab-pane" id="messages">
                                      
                                      
                                      <!--Unit Price Form -->
                                      <form id="unitform"  class="form-inline">
            							
            							<div class="span12">
                                      
                                              <div class="span3">

                                                 <div class="control-group">

                                                        <div class="controls">
                                                          <input type="text" id="updtcategory" name="updtcategory" class="span12" placeholder="Product Category">
                                                          
                                                          <input type="input" id="unewprice" name="newprice" class="span12"  placeholder="New Price">
                                                          
                                                        </div>
                                                        
                                                            
                                                            
                                                        
                                                      </div>



                                              </div>
                                              <div class="span3">

                                                 <div class="control-group">

                                                        <div class="controls">
                                                          <input type="text" id="updtname" name="updtname" class="span12" placeholder="Product Name">
                                                        </div>
                                                      </div>




                                              </div>
                                              <div class="span3">

                                                 <div class="control-group">

                                                        <div class="controls">
                                                          <input type="text" id="uoldprice" name="uoldprice" class="span12" placeholder="Old Price">
                                                        </div>
                                                      </div>


                                              </div>
                                              <div class="span3">





                                                 <div class="control-group">

                                                        <div class="controls">

                                                         <input type="date" id="udate" name="udate" class="span12"  placeholder="Date">

                                                        </div>
                                                </div>


                                              </div>

            				        </div>
            							 
                                    <div id="pdtpress" class="control-group">
											    
								            <button id="unisave" class="btn btn-small btn-success"  type="submit">Click To Save</button>
											    
								       
                                       </div>
           							   
           							   <img  id="loadinguni" src="images/loader.gif" alt="Loading" />
            							   
									   </form>
            					
            					<!-- UnitPrice Form Table -->
                                    
                                    <div id="unittbleid" class="span12">
            				
                                          <table id="unitable" class="table table-striped">
                                              <caption>Price Form Overview</caption>
                                              
                                                <tr>
                                                  <th>Product Category</th>
                                                  <th>Product Name</th>
                                                   <th>Old Price</th>
                                                   <th>New Price</th>
                                                   <th>Date Changed</th>
                                                   
                                                </tr>
                                             
                                               
                                              
                                              
                                              <?php

                                                require_once '../config/general.php'; 
                                                        $db = new db();
                                                        $newuser = $db->getDb();
                                                        $newquery = $newuser->query("SELECT * FROM unitprice ");




                                                             

                                                            if(!$newquery){

                                                                echo $user->error;
                                                            }else{

                                                                

                                                                while($rows=$newquery->fetch_assoc()){  ?>
                                                                     <tr>
                                                                    <td> <?php echo $rows['ProductCategory'];  ?></td>
                                                                    <td> <?php echo $rows['ProductName'];  ?></td>
                                                                    <td> <?php echo $rows['OldPrice'];  ?></td>
                                                                    <td> <?php echo $rows['NewPrice'];  ?></td>
                                                                    <td> <?php echo $rows['ChangeDate'];  ?></td>
                                                                    
                                           
                                                                    </tr>
                                                                  <?php
                                                               
                                                                }

                                                                

                                                            }

                                            
                                            
                                            
                                            
                                                ?>
                                              
                                              
                                           
                                              
                                        </table>
                                      
                                      </div>
                                     
                                    </div>
                                     
                                
                                      
                                      
                                  <div class="tab-pane" id="settings">
                                     
                                     <!--Supplier Form -->
                                      
                                      <form id="supform"  class="form-inline">
                                      
                                              <div class="span12">
                                      
                                      <div class="span3">
                                         
                                         <div class="control-group">
											    
											    <div class="controls">
											      <input type="text" id="supname" name="supname" class="span12" placeholder="Suplier Name">
											    </div>
											  </div>
								        
                                          
                                          
                                      </div>
                                      <div class="span3">
                                         
                                         <div class="control-group">
											    
											    <div class="controls">
											      <input type="text" id="supdt" name="supdt" class="span12" placeholder="Supplier's Product">
											    </div>
											  </div>
											 
											
                                         
                                          
                                      </div>
                                      <div class="span3">
                                         
                                         <div class="control-group">
											   
											    <div class="controls">
											      <input type="text" id="supaddress" name="supaddress" class="span12" placeholder="Supplier's Address">
											    </div>
											  </div>
                                         
                                          
                                      </div>
                                      <div class="span3">
                                        
                                        
                                       
                                        
                                        
                                         <div class="control-group">
											    
											    <div class="controls">
                                              
                                                  <input type="input" id="otherdetails" name="otherdetails" class="span12"  placeholder="Other Details">
											      
											    </div>
								        </div>
                                      
                                       
                                      </div>
            							
            				</div>
            							 
                                    <div id="pdtpress" class="control-group">
											    
								            <button id="supsave" class="btn btn-success"  type="submit">Click To Save</button>
											    
								       
                                       </div>
            							
            							<img  id="loadingsup" src="images/loader.gif" alt="Loading" />
            							
								    </form>
            					    
            					    <!--Supplier Form Table -->
            					    
                                          <table id="suptable" class="table table-striped">
                                              <caption>Supply Form Overview</caption>
                                              
                                                <tr >
                                                  <th>Supplier Name</th>
                                                  <th>Product Name</th>
                                                   <th>Address</th>
                                                   <th>Other Details</th>
                                                  
                                                   
                                                </tr>
                                             
                                                  
                                              
                                              
                                              <?php

                                                require_once '../config/general.php'; 
                                                        $db = new db();
                                                        $newuser = $db->getDb();
                                                        $newquery = $newuser->query("SELECT * FROM supplier ORDER BY supid DESC ");




                                                             

                                                            if(!$newquery){

                                                                echo $user->error;
                                                            }else{

                                                                

                                                                while($rows=$newquery->fetch_assoc()){  ?>
                                                                    
                                                                     <tr >
                                                                        <td> <?php echo $rows['SupplierName'];  ?></td>
                                                                        <td> <?php echo $rows['ProductCategory'];  ?></td>
                                                                        <td> <?php echo $rows['SupplierAddress'];  ?></td>
                                                                        <td> <?php echo $rows['OtherDetails'];  ?></td>
                                                                        </tr>
                                                                    
                                                                  <?php
                                                               
                                                                }

                                                                

                                                            }

                                            
                                            
                                            
                                            
                                                ?>
                                              
                                              
                                           
                                              
                                        </table>
                                      
                                      
                                      
                                      
                                      
                                      
                                      
                                  </div>
                                </div>

                            
            					
            					<!--- Tab Ends Here -->
            					
            					
            				</div>
            				
            				
            				
            			</div><!--Ends Here -->
            			
            			
            		</div>
            		
            		
            		
            	</div>
            		
            		
            	
            
          </div>
          
          
          <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>-->
        <script src="../js/jquery.js"></script>
         
        
          
          <script>
          	
          	 $(document).ready(function(){

                 
                $('#myTab a').click(function (e) {
                  e.preventDefault();
                  $(this).tab('show');
                });


             });
              
              
              //Handling Forms Through Ajax
              
              
              //Handling Product Forms Through Ajax
              
              $('#pdtform').submit(function(event){
					
					
							
							 $('#loadingpdt').css('visibility','visible');
                            $('#pdtsave').html('Loading..');
							//alert(reqnumber);
							
							
							var formData = {
							
							
										
										
										'pdtcategory'    	: $('input[name=pdtcategory]').val(),
										'pdtname'	    	: $('input[name=pdtname]').val(),
										'date'	   		    : $('input[name=date]').val(),
										'supplier'	   		: $('input[name=supplier]').val(),
										
										
										
									};
									
									
									$.ajax({
			
											type:  		'POST',
											url :  		'ajaxpages/pdtform.php',
											data:  		formData,
											dataType: 	'text',
											
											
											}).done(function(data){
											
                                            $('#reqtable').append(data);
                                            $('#loadingpdt').css('visibility','hidden');
                                            $('#pdtsave').html('Click To Save');
											console.log(data);
											});
											
											
											event.preventDefault();
										
			});
					
				
                    //Handling UnitPrice Forms Through Ajax
              
               $('#unitform').submit(function(event){
					
					
							$('#loadinguni').css('visibility','visible');
                            $('#unisave').html('Loading..');
							
							//alert(reqnumber);
							
							
							var formData = {
							
							
										
										
										'updtcategory'    	: $('input[name=updtcategory]').val(),
										'updtname'	    	: $('input[name=updtname]').val(),
										'uoldprice'	   		: $('input[name=uoldprice]').val(),
										'udate'	   		    : $('input[name=udate]').val(),
                                        'newprice'	   		: $('input[name=newprice]').val(),
										
										
										
									};
									
									
									$.ajax({
			
											type:  		'POST',
											url :  		'ajaxpages/unitprice.php',
											data:  		formData,
											dataType: 	'text',
											
											
											}).done(function(data){
											
                                            $('#unitable').append(data);
                                        $('#loadinguni').css('visibility','hidden');
                                        $('#unisave').html('Click To Save');
											console.log(data);
											});
											
											
											event.preventDefault();
										
			});
              
             
               //Handling Supplier Forms Through Ajax
              
               $('#supform').submit(function(event){
					
                   $('#loadingsup').css('visibility','visible');
                   $('#supsave').html('Loading..');
					
							//alert('Submited');
							
							//alert(reqnumber);
							
                   
							
							var formData = {
							
							
										
										
										'supname'    	: $('input[name=supname]').val(),
										'supdt'	    	: $('input[name=supdt]').val(),
										'supaddress'	: $('input[name=supaddress]').val(),
										'otherdetails'	: $('input[name=otherdetails]').val(),
                                        
										
										
										
									};
									
									
									$.ajax({
			
											type:  		'POST',
											url :  		'ajaxpages/supplier.php',
											data:  		formData,
											dataType: 	'text',
											
											
											}).done(function(data){
											
                                            /*$('#suptable').append(data);*/
                                                $('#suptable tr:first').after(data);
                                            $('#loadingsup').css('visibility','hidden');
                                            $('#supsave').html('Click To Save');
											console.log(data);
											});
											
											
											event.preventDefault();
										
			});
              
          	
          </script>
          
          
          
          
 
       