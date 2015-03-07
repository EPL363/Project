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
    
      
      
<script>
    function loginCheck() {
        var x=document.getElementById("TEEuser").checked;
        var y= document.getElementById("user").checked;
        if(!x && !y)
            document.getElementById("warning").style.display="block";
        if(x){
            window.location="Profile_LeitourgouKemtriko.html";
        }
        if(y){
            window.location="profile5.html";
        }

     };
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
                <input type="email" class="form-control"  placeholder="Large input">   
            </div>
            <div class="col-sm-4"></div>
         </div>
        </br>
        </br>
        <div  class="form-group">
              <div class="col-sm-4"></div>
              <label id="Right" for="inputPassword3"   class="col-sm-2 control-label">Κωδικός:</label>
              <div  class="col-sm-2">
                <input type="email" class="form-control"  placeholder="Large input">
              </div>
            <div class="col-sm-4"  ><label id="warning" class="help-block" >*κάτι</label></div>
        </div>
        </br>
        </br>
        <div class="form-group">
            <div id="Right" class="col-sm-7" ><a href="fpassword.html">Έχεται ξεχάσει τον κωδικό σας?</a></div>
            <div id="Left" class="col-sm-5">
                <button  onclick="loginCheck();"  id="clickMe" type="button" class="btn btn-primary btn-default" >Σύνδεση</button>
            </div>
        </div>
        <br>
        <br>
          <div  class="center"><a href="register.html">Εγγραφή Χρήστη</a></div>   
    
    
      </div>
  </body>
</html>