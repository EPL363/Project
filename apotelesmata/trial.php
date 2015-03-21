
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
          <title>Log in</title>
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta name="description" content="">
          <meta name="author" content="">
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link href="css/style.css" rel="stylesheet">
            <link href="css/custom.css" rel="stylesheet" media="screen">
            <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
            <script type="text/javascript" src="js/jquery.min.js"></script>
	        <script type="text/javascript" src="js/bootstrap.min.js"></script>
	        <script type="text/javascript" src="js/scripts.js"></script>
            <script src="jquery-1.9.1.js"></script>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <script type="text/javascript">
                $(document).ready(function() {
                               
                    $("#submit").click(function(){
                       
                        var proceed = true;
                        if(proceed) {
                            post_data = {
                                'num'		: "dddd",
                                'Cas'		: "1235"
                                };
                            $.post('../login_php.php', post_data, function(response){
                                  
                            }, 'json');
                        }
                    
                    });
                    
                });
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
                <input type="email" class="form-control" id="pass"  placeholder="Large input">
              </div>
            <div class="col-sm-4"  ><label id="warning" class="help-block" >*κάτι</label></div>
        </div>
        </br>
        </br>
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
    
    