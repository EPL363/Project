<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta charset="utf-8">
  <title>Forgot-Password</title>
   <!----------------------------------------------------------------->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css_LogIn.css" rel="stylesheet">  

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $("#submit_btn").click(function() { 
       
	    var proceed = true;
        //simple validation at client's end
        //loop through each field and we simply change border color to red for invalid fields		
		$("#contact_form input[required=true], #contact_form textarea[required=true]").each(function(){
            
			$(this).css('border-color',''); 
			if(!$.trim($(this).val())){ //if this field is empty 
				$(this).css('border-color','red'); //change border color to red   
				proceed = false; //set do not proceed flag
			}
			//check invalid email
			var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/; 
			if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
				$(this).css('border-color','red'); //change border color to red   
				proceed = false; //set do not proceed flag				
			}	
		});
       
        if(proceed) //everything looks good! proceed...
        {
			//get input field values data to be sent to server
            
            post_data = {
				'fname'		: $('input[name=fname]').val(), 
				'femail'	: $('input[name=femail]').val(), 
				'fcompany'	: $('input[name=fcompany]').val()
				
			};
            window.alert(post_data.femail);
            //Ajax post data to server
            
            $.post('contact_me.php', post_data, function(response){
               
				if(response.type == 'error'){ //load json data from server and output message     
					output = '<div class="error">'+response.text+'</div>';
				}else{
				    output = '<div class="success">'+response.text+'</div>';
					//reset values in all input fields
					//$("#contact_form  input[required=true], #contact_form textarea[required=true]").val(''); 
					//$("#contact_form #contact_body").slideUp(); //hide form after success
				}
				$("#contact_form #Resultmessage").hide().html(output).slideDown();
            }, 'json');
        }
    });
    
    //reset previously set border colors and hide all message on .keyup()
    $("#contact_form  input[required=true], #contact_form textarea[required=true]").keyup(function() { 
        $(this).css('border-color',''); 
        $("#result").slideUp();
    });
});
</script>

</head>

<body>
   
<div class="form-style" id="contact_form">
        <div id="contact_body">
            <div class="container">
                 <div class="row clearfix">
                    <div class="col-md-12 column">
                        <img src="banner_gr_Laa.png" width="100%" height="98">
                    </div>
                 </div>
                 <h4 style="text-align:center"> Επαναφορά του κωδικού πρόσβασης</h4>
                 <br><br>
                 <div class="form-group">
                    <div class="col-sm-3"></div>
                    <label id="Right" class="control-label col-sm-3" for="kind">Όνομα Χρήστη:</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" required="true" name="fname" placeholder="name...">   
                    </div>
                    <div class="col-sm-3"></div>
                 </div>
                 </br></br>
                 <div class="form-group">
                    <div class="col-sm-3"></div>
                    <label id="Right" class="control-label col-sm-3" for="kind">Ηλεκτρονικό Ταχυδρομείο:</label>
                    <div class="col-sm-3">
                        <input type="email" class="form-control" required="true" name="femail" placeholder="email...">   
                    </div>
                    <div class="col-sm-3"></div>
                 </div>
                 </br></br>
                 <div class="form-group">
                    <div class="col-sm-3"></div>
                    <label id="Right" class="control-label col-sm-3" for="kind">Όνομα Εταιρίας Εργοδότησης σας:</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" required="true" name="fcompany" placeholder="company...">   
                    </div>
                    <div class="col-sm-3"></div>
                 </div>
                </br></br>
                <div class="col-sm-12">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4 " style="text-align: center;">
                        <label  class="help-block" id="Resultmessage" name="Resultmessage" style="text-align: center;" ></label>
                    </div>
                    <div class="col-sm-4"></div>
                </div>

                <div class="row clearfix" style="text-align:center">
                    <label >
                        <input type="submit" class="btn btn-primary" id="submit_btn" value="Αποστολή" />
                    </label>
                </div>
        </div>
    </div>
</div>

</body>
</html>
