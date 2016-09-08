<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Bootplus</title>
      <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">

    <!-- Le styles -->
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
      <link href="bootstrap/css/bootplus.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .hero-unit {
          padding: 60px;
      }
      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
          
        
      </style>
      <link href="../assets/css/bootplus-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
                                   

   </head>

   <body>
    
    

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Money Transfer System</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              Logged in as <a href="#" class="navbar-link">Username</a>
            </p>
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">MONEY TRANSFER SYSTEM</li>
              <li  class="active"><a id="sender" href="#">Senders Details</a></li>
              <li><a id="receive" href="#">Receivers Details</a></li>
              <li><a id="dep" href="#">Depositor</a></li>
              <li><a id="appcash" href="#">Approve Cash</a></li>
              <li><a id="vdetails" href="#">Verification Errors<span id="iderror" class="label label-important">0</span></a></li>
                
              
            </ul>
          </div><!--/.well -->
        </div><!--/span-->

        <div class="span9">
          <div id="tranhero" class="hero-unit">
           
           <div class="span12"><!--<button id="prev" class="btn btn-mini" type="button"><a id="preview" href="#myModal"  data-toggle="modal">Preview Details</a></button>--><span><div class="span2"><!--<button id="gentoken" class="btn btn-mini" type="button">Generat Token</button>--></div> <div class="span2"><small id="rtoken"><!--#123889477562546452636--></small></div></div>
               
                <!--Unit Price Form -->
                                     
                      
                                      <form id="transfer"  class="form-inline" >
                                      
            							
            							<div class="span12">
                                      
                                              <div class="span6">

                                                 <div class="control-group">

                                                        <div class="controls">
                                                         
                                                           
                                                          <input type="text" id="updtcategory" name="sender" class="span12"  placeholder="Sender" autocomplete="off">
                                                           
                                                          
                                                          <input type="input" id="unewprice" name="receiver" class="span12" autocomplete="off"  placeholder="Reciever">
                                                          
                                                        </div>
                                                        
                                                            
                                                            
                                                        
                                                      </div>



                                              </div>
                                              <div class="span6">

                                                 <div class="control-group">

                                                        <div class="controls">
                                                          <input type="text" id="updtname" name="phonenumber" class="span12" autocomplete="off" placeholder="Phone Number" ><span class="sapn2">
                                                           
                                                            <input type="text" id="amount" name="amount" class="span12" autocomplete="off" placeholder="Amount Sent">
                                                        </div>
                                                      </div>




                                              </div>
                                              
                                              
                                              
            				        </div>
            							 
                                    <div id="pdtpress" class="control-group">
											    
								            <button  class="btn btn-small btn-success"  type="submit" href="#myModal"  data-toggle="modal">Click To Save</button>
											    
								       
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
                                                    <button id="unisave" class="btn btn-primary">Save changes</button>
                                                  </div>
                                                </div>

                                            <!--Modal Ends Here -->
              
         
              
              
              
          </div><!--Hero Ends Here -->

          <div class="row-fluid">
            
            
          </div><!--/row-->
          
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Company 2015</p>
      </footer>

    </div><!--/.fluid-container-->
    
    
    
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap-transition.js"></script>
    <script src="bootstrap/js/bootstrap-alert.js"></script>
    <script src="bootstrap/js/bootstrap-modal.js"></script>
    <script src="bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="bootstrap/js/bootstrap-tab.js"></script>
    <script src="bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="bootstrap/js/bootstrap-popover.js"></script>
    <script src="bootstrap/js/bootstrap-button.js"></script>
    <script src="bootstrap/js/bootstrap-collapse.js"></script>
    <script src="bootstrap/js/bootstrap-carousel.js"></script>
    <script src="bootstrap/js/bootstrap-typeahead.js"></script>
      <script src="js/script.js"></script>


   </body>
</html>
