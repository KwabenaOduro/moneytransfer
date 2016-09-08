$(document).ready(function(){
    
    verifyerrors();
    
   
    $('#updtcategory').keyup(function(){
   
    $('#sname').html($(this).val());
   
   });
   
    
     $('#unewprice').keyup(function(){
   
    $('#rname').html($(this).val());
   
   });
   
    
    
     $('#updtname').keyup(function(){
   
    $('#rnumber').html($(this).val());
   
   });
    
              
                  
      /*$('body').on('click','#gentoken',function(){

       var random = Math.round(Math.exp(Math.random()*Math.log(10000000-10000+1000)))+10000;

        $('#rtoken').text('#'+random);


      });
*/

    
    
     $('#amount').keyup(function(){
         
         
   
        $('#ramount').html($(this).val());
         
         
             
             $tokenvalue = $('#rtoken').text();
         
            $('#token').text( $tokenvalue);   
             
             
       
         
         
   });
   

    
    $('body').on('click','#unisave', function(event){
				event.preventDefault();
        
        var random = Math.round(Math.exp(Math.random()*Math.log(10000000-10000+1000)))+10000;
        
                   var formData = {						

                                    'sender'    	: $('input[name=sender]').val(),
                                    'receiver'	    : $('input[name=receiver]').val(),
                                    'phonenumber'	: $('input[name=phonenumber]').val(),
                                    'amount'	    : $('input[name=amount]').val(),
                                    'token'         :  random,

										};
									
									
									$.ajax({
			
											type:  		'POST',
											url :  		'ajaxpages/transfer.php',
											data:  		formData,
											dataType: 	'text',
											
											
											}).done(function(data){
											
                                            /*$('#suptable').append(data);*/
                                                /*$('#suptable tr:first').after(data);*/
                                        
                                          $('#unisave').html('Data Saved');
                                            setInterval(function(){
                                            
                                             
                                            $('#unisave').html('Click To Save');
                                            
                                            },2000);
                                           
                                         
                                            
                                            $('#loadingsup').css('visibility','hidden');
                                            $('#supsave').html('Click To Save');
											console.log(data);
											});
        
        
										
    });
    
    
    
    $('#receive').click(function(){
    
    
        $('#tranhero').load('pages/receive.php');
        
        /*$('#tranhero').load('pages/details.php?id='+1);*/
        
    
    });
    
     $('#sender').click(function(){
    
    
        $('#tranhero').load('pages/transfer.php');
    
    
    });
    
     $('#dep').click(function(){
    
    
        $('#tranhero').load('pages/cashier.php');
    
    
    });
     $('#appcash').click(function(){
    
    
        $('#tranhero').load('pages/approvecash.php');
    
    
    });
    
     $('#vdetails').click(function(){
    
    
      $('#tranhero').load('pages/verifypage.php');
    
    
    });
    
    
    
     function verifyerrors(){
                  
                 

                $.getJSON("pages/verifyerror.php",function(data){

                var count = 0;
                    
               $.each(data.result,function(){

                   console.log(this['noteid']);

                   count++;
               });

                    $("#iderror").text(count);

           });
   
              
              
              
              
               }
              
              
    
    
    
});

















