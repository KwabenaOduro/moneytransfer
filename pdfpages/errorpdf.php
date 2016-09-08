<?php

require_once '../config/general.php';

if(@$_GET['noteid']){
    
    
    $noteid =  $_GET['noteid'];
    
  
    
    
            					$db = new db();
									
								$querydb = $db->getDb();
									
								@$query = $querydb-> query("SELECT * FROM cashdetails WHERE noteid ='{$noteid}'");
								
                             
                                if(!$query){
									
									die($querydb->error);
								}else{
                                    
                                    $rows =$query->fetch_assoc();
                                }

    
    
}

$html ='

<link href="http://fonts.googleapis.com/css?family=Roboto:400,300,700" rel="stylesheet" type="text/css">
      <link href="../bootstrap/css/bootplus.css" rel="stylesheet">
      <link href="../css/style.css" rel="stylesheet">
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
      
      ';

        

                                    $html .= '<table id="reqtable" class="table table-striped">
                                    
                                                <caption>Note Errors Overview</caption>
                                    
                                                <thead>
                                    
                                    <tr>
                                    <th>Note Type</th>
                                    <th>Note Amount</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    
                                    </tr>
                                    </thead>
                                    
                                    ';
                            while($rows=$query->fetch_assoc()){
                                    
                                 $html .=' <tr>
                                    
                                        <td>'.$rows['notetype'].'</td>
                                        <td>'.$rows['noteamount'].'</td>
                                        <td>'.$rows['date'].'</td>';
                                
                               
                                            
                                    $html.=  '<td style="border-right:0px;"><span>'.$rows['status'].'</span></td>
                                            
                                             </tr>
                                            
                                            ';
                                            
                                      
                                        }
                                    
									
                        

                        $html .='</table>';


include("../MPDF56/mpdf.php");
$mpdf=new mPDF();
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;


?>