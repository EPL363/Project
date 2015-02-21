<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <title>Forgot-Password</title>
   <!----------------------------------------------------------------->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css_LogIn.css" rel="stylesheet">  
    
      
      
<script>
    function loginCheck() {
        var x=document.getElementById("TEEuser").checked;
        var y= document.getElementById("user").checked;
        if(!x && !y)
            document.getElementById("warning").style.display="block";
        if(x){
            window.location="testing.html";
        }
        if(y){
            window.location="testing.html";
        }

     };
    function Radio(){
        document.getElementById("warning").style.display="none";
    };
    
</script>
<script>
        function resetPass(){
                if(document.getElementById("userName").checkValidity()){
                            document.getElementById("wrongUserName").innerHTML="";
                            document.getElementById("resetButton").style.visibility = 'hidden';
                            document.getElementById("message").innerHTML="Έχει αποσταλεί μήνυμα με τoν νέο κωδικό σας στο λογαριασμό ηλεκτρονικού ταχυδρομείου που δηλώσατε κατά την εγγραφή.";
                            document.getElementById("backToLogin").innerHTML="Πατήστε εδώ για να επιστρέψετε στην οθόνη εισόδου";
                            document.getElementById("backToLogin").href="login.html";
                }else{
                            document.getElementById("wrongUserName").innerHTML="Έχετε βάλει μη έγκυρο όνομα χρήστη";}
                }
</script>
      
      <script>
    function sentReq() {
            window.location="logIn.html";
        }
</script>
<!--     Function: correct username and passward
   ---------------------------------------------------------------->
  </head>
  <body> 
   <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <img src="banner_gr_Laa.png" width="100%" height="98">
            </div>
          </div>
 
    
    
        <h4 > Επαναφορά του κωδικού πρόσβασης</h4>
       </br>
        
</br>
        <div class="form-group">
            <div class="col-sm-3"></div>
            <label id="Right" class="control-label col-sm-3" for="kind">Όνομα Χρήστη:</label>
            <div class="col-sm-3">
                <input type="email" class="form-control"  placeholder="name...">   
            </div>
            <div class="col-sm-3"></div>
         </div>
        </br>
        </br>
         <div class="form-group">
            <div class="col-sm-3"></div>
            <label id="Right" class="control-label col-sm-3" for="kind">Ηλεκτρονικό Ταχυδρομείο:</label>
            <div class="col-sm-3">
                <input type="email" class="form-control"  placeholder="email...">   
            </div>
            <div class="col-sm-3"></div>
         </div>
        </br>
        </br>
     <div class="form-group">
            <div class="col-sm-3"></div>
            <label id="Right" class="control-label col-sm-3" for="kind">Όνομα Εταιρίας Εργοδότησης σας:</label>
            <div class="col-sm-3">
                <input type="email" class="form-control"  placeholder="company...">   
            </div>
            <div class="col-sm-3"></div>
         </div>
        </br>
        </br>
        <div class="col-sm-12">
            <div class="col-sm-4"></div>
            <div class="col-sm-4 " style="text-align: center;"><label  class="help-block"  style="text-align: center;" >Θα σταλεί ο κωδικός σας στην διεύθυνση Ηλεκτρονικού Ταχυδρομείου που έχετε αναγράψει παραπάνω</label></div>
            <div class="col-sm-4"></div>
    </div>

    <div class="col-sm-12">
        <button type="button" class="btn btn-primary" onclick="sentReq();">Αποστολή Αιτήματος</button>
    </div>
</div>
  </body>
</html>