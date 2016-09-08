<div class="span12"><!-- <button id="prev" class="btn btn-mini" type="button"><a id="preview" href="#myModal"  data-toggle="modal">Preview Details</a></button><span><div class="span2"><button id="gentoken" class="btn btn-mini" type="button">Generat Token</button></div>--> <div class="span2"><small id="rtoken"><!--#123889477562546452636--></small></div></div>
            
                <!--Unit Price Form -->
                                      <form id="transfer"  class="form-inline">
            							
            							<div class="span12">
                                      
                                              <div class="span6">

                                                 <div class="control-group">

                                                        <div class="controls">
                                                          <input type="text" id="updtcategory" name="sender" class="span12" placeholder="Sender">
                                                          
                                                          <input type="input" id="unewprice" name="receiver" class="span12"  placeholder="Reciever">
                                                          
                                                        </div>
                                                        
                                                            
                                                            
                                                        
                                                      </div>







                                              </div>
                                              <div class="span6">

                                                 <div class="control-group">

                                                        <div class="controls">
                                                          <input type="text" id="updtname" name="phonenumber" class="span12" placeholder="Phone Number" ><span class="sapn2"><!--</span><input type="text" id="updtname" name="updtname" class="span7" placeholder="0000000" > -->
                                                           
                                                            <input type="text" id="amount" name="amount" class="span12" placeholder="Amount Sent">
                                                        </div>
                                                      </div>




                                              </div>
                                              
            				        </div>
            							 
                                    <div id="pdtpress" class="control-group">
											    
								            <button id="unisave" class="btn btn-small btn-success"  type="submit">Click To Save</button>
											    
								       
                                       </div>

           							   
           							   <img  id="loadinguni" src="images/loader.gif" alt="Loading" />
            							   
									   </form>
              
              
                                            <!--Modal starts Here -->
              
                                                <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                  <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h3 id="myModalLabel">Transfer Preview</h3>
                                                  </div>
                                                  <div class="modal-body">
                                                  
                                                          <!--Table Goes Here-->
                                                              <table class="table table-condensed">
                                                              
                                                                      
                                                                          <thead>
                                                                            <tr>
                                                                              <th>Transfer</th>
                                                                              <th>Transfer Details</th>
                                                                            </tr>
                                                                          </thead>
                                                                          <tbody>
                                                                            <tr>
                                                                              <td>Senders Name</td>
                                                                              <td id="sname"></td>
                                                                            </tr>
                                                                            <tr>
                                                                              <td>Reciever Name</td>
                                                                              <td id="rname"></td>
                                                                            </tr>
                                                                            <tr>
                                                                              <td>Reciever Number</td>
                                                                              <td id="rnumber"></td>
                                                                            </tr>
                                                                            <tr>
                                                                              <td>Amount</td>
                                                                              <td id="ramount"></td>
                                                                            </tr>
                                                                            <tr>
                                                                              <td>Token</td>
                                                                              <td id="token"></td>
                                                                            </tr>
                                                                          </tbody>
 
                                                                </table>
                                                          
                                                              
                                                          
                                                          <!--Table Ends Here-->
                                                   
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                                                    <button class="btn btn-primary">Save changes</button>
                                                  </div>
                                                </div>

                                            <!--Modal Ends Here -->
              
              
                                