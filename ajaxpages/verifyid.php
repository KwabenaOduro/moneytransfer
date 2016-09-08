<?php  

require_once '../config/general.php';

$sanitize = new general();

 $display_string = " ";

if(@$_POST['verifyid']){
    
    
   @$verifyid = $sanitize->sanitize($_POST['verifyid']);
    
   
$json_string = 'http://197.159.128.38/gvivewebservice/GviveWebservice.svc/voter?voterId='.@$verifyid.'&username=root&password=root';
$jsondata = file_get_contents($json_string);
$obj = json_decode($jsondata);

$newdata = $obj->GetVoterResult;






$data = $newdata->Base64ImageString;
$data = base64_decode($data);
    
    
    
    
    $display_string = "
    
    
    
       

			 <img id='imgdata' src='data:image/jpeg;base64,".base64_encode($data)."'/>

					<ul id='iddetails'>

						<li id='pol'>$newdata->PollingStation</li>
						<li id='void'>$newdata->VoterID</li>
						<li id='age'>$newdata->Age</li>
						<li id='sex'>$newdata->Sex</li>
						<li id='regdate'>$newdata->ConvertedDate</li>
						<li id='fulname'>$newdata->Fullname</li>
						


					</ul>

				
     ";
    
    
    
    
    
  

    
   
     echo $display_string;   
        
        
}
        
?>