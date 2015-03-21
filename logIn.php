
<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <title>Log in</title>
   <!----------------------------------------------------------------->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css_LogIn.css" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script src="jquery-1.9.1.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.3.min.js" ></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script>
      $(document).ready(function() {
            $( "#submit" ).click(function() {
               
                var proceed = true;
                var x=document.getElementById("TEEuser").checked;
                var y= document.getElementById("user").checked;
                if(!x && !y){
                    document.getElementById("warning").style.display="block";
                    proceed=false;
                }
                document.getElementById("WrongPass").style.display="none";
                if(proceed){
                        
                        var user = $('#username').val();
                        var pass = $('#pass').val();
                            post_data = {
                                'user'		: user,
                                'pass'		: pass
                                };
                            $.post('login_php.php', post_data, function(response){
                                    window.alert(response.message);
                                    if(response.message =="ok"){
                                        if(x){
                                            window.location="Profile_LeitourgouKentriko.php";
                                        }
                                        if(y){
                                            window.location="profile5.php";
                                        }
                                    }
                                else{
                                     document.getElementById("WrongPass").style.display="block";
                                }
                                        
                            }, 'json');
                    
                   
                }
                
            });
                    
        });
                 
    function Radio(){
        document.getElementById("warning").style.display="none";
    };
    
    
</script>

  </head>
  <body> 
      <div class="container">
    
        
        <div class="row clearfix">
            <div class="col-md-12 column">
                <img src="banner_gr_Laa.png" width="100%" height="98">
            </div>
          </div>
 
    
        <h4 > Αρχείο Χημικών Προϊόντων </h4>
       </br>
        <div class="radio">
            <label >Έισοδος ως:&nbsp&nbsp&nbsp</label>
            <label ><input onclick="Radio();" name="radioGroup" id="user" type="radio">Χρήστης </label>
        </div>
        <div class="radio">
            <label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
            <label><input name="radioGroup" onclick="Radio();" id="TEEuser"type="radio"> Λειτουργός</label>
        </div>
</br>
        <div class="form-group">
            <div class="col-sm-4"></div>
            <label id="Right" class="control-label col-sm-2" for="kind">Όνομα Χρήστη:</label>
            <div class="col-sm-2">
                <input type="email" class="form-control" id="username"  placeholder="Large input">   
            </div>
            <div class="col-sm-4"></div>
         </div>
        </br>
        </br>
        <div  class="form-group">
              <div class="col-sm-4"></div>
              <label id="Right" for="inputPassword3"   class="col-sm-2 control-label">Κωδικός:</label>
              <div  class="col-sm-2">
                <input type="password" class="form-control" id="pass"  placeholder="Large input">
              </div>
            <div class="col-sm-4"  ><label id="warning" class="help-block" >*Επιλέξετε την είσοδό σας στο σύστημα</label></div>
        </div>
        </br>
        </br>
        <div class="col-sm-4"  ></div>
        <div class="col-sm-4"  >
            <label id="WrongPass" class="help-block" style="display:none">*Το όνομα χρήστη ή ο κωδικός πρόσβασης είναι λάθος</label>
        </div>
        <div class="col-sm-4"  ></div>
</div>
        <div class="form-group">
            <div id="Right" class="col-sm-7" ><a href="fpassword.html">Έχεται ξεχάσει τον κωδικό σας?</a></div>
            <div id="Left" class="col-sm-5">
                <button    id="submit" type="button" class="btn btn-primary btn-default" >Σύνδεση</button>
            </div>
        </div>
        <br>
        <br>
          <div   onclick="loginCheck();"class="center"><a href="register.html">Εγγραφή Χρήστη</a></div>   
    
    
      </div>
  </body>
</html>