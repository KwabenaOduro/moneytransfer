<?php require_once 'config/db.php'; ?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>IMS</title>
      <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">

    <!-- Le styles -->
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
      <link href="bootstrap/css/bootplus.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <link href="css/animate.css" rel="stylesheet">
     
      
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
      <link href="bootstrap/css/bootplus-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <!--<link rel="apple-touch-icon-precomposed" sizes="144x144" href="bootstrap/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="bootstrap/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="bootstrap/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="bootstrap/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="bootstrap/ico/favicon.png"> -->
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
          <a class="brand" href="#">Inventory Mangement System</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              Logged in as <a href="#" class="navbar-link">Manager</a>
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
        <div class="span2">
          <div class="sidebar-nav">
            <ul class="nav nav-list">
              <li id="navheader" class="nav-header">Inventory Maanagement System</li>
              <li class="active"><a id="activenow" href="#">Requisition</a></li>
              <li id="updates"><a href="#">Inventory Update</a></li>
              <li><a href="#">Sales Orders</a></li>
              <li><a href="#">Distribution Details</a></li>
              
            </ul>
          </div><!--/.well -->
        </div><!--/span-->

        <div class="span10"><!--Main content span -->
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
								  <caption>Requisition Form Overview</caption>
								  <thead>
								    <tr>
								      <th>Product Name</th>
								      <th>Product Category</th>
								       <th>Qty Requested</th>
								       <th>Consumer Name</th>
								       <th>Unit Price</th>
								       <th>Value</th>
								       <th>Requested By</th>
								       <th>Date</th>
								       <th>Supplier</th>
								       <th>Req Number</th>
            						
            						
								       
								    </tr>
								  </thead>
           				 
                            </table>
            				 
            				
            				
            				
            					
            				
            				
            				
            			</div>
            			
            			<button id="reqap" name="submit" class="btn btn-small btn-success" type="submit">Approve Request</button>
            			
            		</div>
            		
            		
            		
            	</div>
            		
            		
            	
            
          </div>
 
        </div><!--/Main content span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Company 2014</p>
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
