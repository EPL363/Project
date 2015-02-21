<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <title>Register</title>
   <!----------------------------------------------------------------->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css_LogIn.css" rel="stylesheet">  
      <script src="_scripts_Eggrafi.js"></script>
     <!---------------------------------------------------------------->
  </head>
  <body> 
   
      
  <div class="container">

           <div class="row clearfix"><div class="col-md-12 column"><img src="banner_gr_Laa.png" width="100%" height="98"></div></div>
<div class="row clearfix"></div>
  </br>
  <h3 align="center">Εγγραφή Χρήστη</h3>
  
  

<div class="tab-pane" id="Prosthiki">
	<div class="container">
		<div class="row clearfix">
			<div class="col-md-12 column">

  
  				<form id="SubscriptionWizard" action="" method="post">

    				<table class="table table-hover" cellpadding="5" cellspacing="0" id="HeaderTable">

        			<tr>

            		<td id="HeaderTableStep1" font color="#66CCFF">

                1.ΠροσΘήκη Συνθηματικών</td>

            		<td id="HeaderTableStep2">

               2.Στοιχεία Υπεύθυνου Επικοινωνίας</td>

            		<td id="HeaderTableStep3" >

               3.Στοιχεία Εταιρίας </td>
     				</tr>

   				 </table>
                 </form>
				</div >
            </div>
        </div >
    </div>
 <!--------------------------------------------------------------------> 
    <span id="Step1">
       
        <br />
    <div class="col-sm-12">
        <div class="col-sm-3"></div>
        <div class="col-sm-2">
			<label for="userName"> Όνομα Χρήστη:</label>
        </div>
        <div class="col-sm-3">
			<input onblur="inputCheck('userName','wronguserName');" id ="userName"pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{7,20}$" class="form-control input-lg" type="text"required>
        </div>
		<div class="col-sm-3">
             <label id="wronguserName" style="color:red;">*</label>
		</div>
    </div>
  </BR>
</BR>
</BR>
   <div class="col-sm-12">
        <div class="col-sm-3"></div>
        <div class="col-sm-2">
			<label for="pass"> Κωδικός:</label>
       </div>
        <div class="col-sm-3">
			<input onblur="inputCheck('pass','wrongpass');" id ="pass"   class="form-control input-lg"  type="password" required pattern="(?=^.{7,20}$)^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$">
       </div>
        <div class="col-sm-3">
        	<label id="wrongpass" style="color:red;">*</label>
		</div>
	</div>
</BR>
</BR>
</BR>
	<div class="col-sm-12">
    	<div class="col-sm-3"></div>
        <div class="col-sm-2">
			<label for="passConf"> Eπαλήθευση κωδικού:</label>
        </div>
        <div class="col-sm-3">
			<input id ="passConf" maxlength="20"onblur="passCheck()" class="form-control input-lg" type="password" required>
        </div>
        <div class="col-sm-3">	
             <label id="wrongpassConf" style="color:red;">*</label>
		</div>
	</div>
</br>
</br>
</br>
 <div class="col-sm-8" style="text-align: right" >
        <label style=" color:red">* Υποχρεωτικά Πεδία</label>
    </div>
<div class="col-md-4 column"  style="text-align: right">
   <input id="ButtonNext" class="btn btn-default" type="button" value="Next" name="Step2" onClick="handleWizardNext()" /></div>
</span>
<!----------------------------------------------------------------------------------------------------------------------->
<span id="Step2" style="display:none">
   
    <br />
    
	<div class="col-sm-12">
    	<div class="col-sm-3"></div>
        <div class="col-sm-2">
			<label for="comName"> Όνομα:</label>
        </div>
        <div class="col-sm-3">
			<input onblur="inputCheck('comName','wrongcomName');" id ="comName"pattern=".{5,50}" class="form-control input-lg" type="text"required>
        </div>
        <div class="col-sm-3">
			<label id="wrongcomName" style="color:red;">*</label>
		</div>
 </div>
    
    <br />
    <br />
    <br />	
     <div class="col-sm-12">
    	<div class="col-sm-3"></div>
        <div class="col-sm-2">									
        	<label for="comEmail"> Ηλεκτρονικό Ταχυδρομείο:</label>
       </div>
        <div class="col-sm-3">	
			<input onblur="inputCheck('comEmail','wrongcomEmail');" id ="comEmail"maxlength="50" class="form-control input-lg" type="email"required>
         </div>
        <div class="col-sm-3">	
			<label id="wrongcomEmail" style="color:red;">*</label>
	   </div>
    </div>
    <br />
    <br />
    <br />							
    <div class="col-sm-12">
            <div class="col-sm-3"></div>
            <div class="col-sm-2">	
                <label for="comSName"> Επίθετο:</label>
            </div>
            <div class="col-sm-3">	
                <input onblur="inputCheck('comSName','wrongcomSName');"  id ="comSName" pattern=".{5,50}" class="form-control input-lg" type="text"required>
            </div>
            <div class="col-sm-3">	
                <label id="wrongcomSName" style="color:red;">*</label>
            </div>
    </div>
    <br />
    <br />
    <br />
     <div class="col-sm-12">
            <div class="col-sm-3"> </div>
            <div class="col-sm-2">	
                <label for="comTel"> Τηλέφωνο:</label>
            </div>
            <div class="col-sm-3">	
                <input onblur="inputCheck('comTel','wrongcomTel');" id ="comTel"pattern=".{8,20}" class="form-control input-lg" type="number"required>
            </div>
            <div class="col-sm-3">	
                <label id="wrongcomTel" style="color:red;">*</label>
            </div>
    </div>
    <br />
    <br />
    <br />
	<div class="col-sm-12">
    	<div class="col-sm-3"></div>
        <div class="col-sm-2">	
			<label style="font-size:18px;color:blue;"id="message"></label>
        </div>
        <div class="col-sm-2">	
			<a style="font-size:18px;" id="goLogin"></a>
		</div>
	</div>
    <br />
    <br />
    <br />
    
   
   
		<div class="col-md-4 column"  style="text-align: left">
        	<input id="ButtonPrevious" class="btn btn-default" type="button" value="Previous"  name="" onClick="handleWizardPrevious()" />
		</div>
         <div class="col-sm-4">
        <label style="text-align:center; color:red">* Υποχρεωτικά Πεδία</label>
    </div>
		<div class="col-md-4 column" style="text-align: right">
         <input id="ButtonNext" class="btn btn-default" type="button" value="Next" name="Step2" onClick="handleWizardNext()" />
		</div>
</span>
<!--------------------------------------------------------------------------------------------------------------------->
<span id="Step3" style="display:none">

</br>

	<div class="col-sm-12">
    	<div class="col-sm-3"></div>
        <div class="col-sm-3">
      		<label for="CompName">Εμπορική Επωνυμία Επιχείρησης:</label>
        </div>
        <div class="col-sm-3">   
			<input id ="CompName" onblur="inputCheck('CompName','wrongCompName');" pattern=".{3,50}"class="form-control input-lg" type="text" required>
        </div>
        <div class="col-sm-3">
			<label id="wrongCompName" style="color:red;">*</label>
        </div>
    </div>
    <br />
    <br />
    <br />
 	<div class="col-sm-12">
    	<div class="col-sm-3"></div>
        <div class="col-sm-3">
			<label for="emailAddress"> Ηλεκτρονικό ταχυδρομείο:</label>
        </div>
        <div class="col-sm-3">								
            <input onblur="inputCheck('emailAddress','wrongemailAddress');"  pattern=".{5,50}" id ="emailAddress" class="form-control input-lg" type="email"required>
        </div>
        <div class="col-sm-3">
			<label id="wrongemailAddress" style="color:red;">*</label>
        </div>
    </div>
    <br />
    <br />
    <br />
    <div class="col-sm-12">
    	<div class="col-sm-3"></div>
        <div class="col-sm-3">
			<label for="poli"> Πόλη:</label>
        </div>
        <div class="col-sm-3">
			<input onblur="inputCheck('poli','wrongpoli');"  id ="poli"pattern=".{4,50}" class="form-control input-lg" type="text"required>
        </div>
        <div class="col-sm-3">
			<label id="wrongpoli" style="color:red;">*</label>
		</div>
    </div>
    <br />
    <br />
    <br />
   	<div class="col-sm-12">
    	<div class="col-sm-3"></div>
        <div class="col-sm-3">
			<label for="taxiKodi">Ταχυδρομικός Κώδικας:</label>
        </div>
        <div class="col-sm-3">
			<input onblur="inputCheck('taxiKodi','wrongtaxiKodi');" id ="taxiKodi"pattern=".{4,20}" class="form-control input-lg" type="number"required>
        </div>
        <div class="col-sm-3">
			<label id="wrongtaxiKodi" style="color:red;">*</label>
		</div>
    </div>
    <br />
    <br />
    <br />
    <div class="col-sm-12">
    	<div class="col-sm-3"></div>
        <div class="col-sm-3">
			<label for="fax"> Φαξ: </label>
        </DIV>
        <div class="col-sm-3">
			<input pattern=".{8,20}" onblur="inputCheck('fax','wrongfax');"  id ="fax" class="form-control input-lg" type="number"required>
        </DIV>
        <div class="col-sm-3">
            <label id="wrongfax" style="color:red;">*</label>
		</div>
    </div>
    <br />
    <br />
    <br />
  
	<div class="col-sm-12">
    	<div class="col-sm-3"></div>
        <div class="col-sm-3">
			<label for="decr"> Άλλες Πληροφορίες:</label>
        </div>
        <div class="col-sm-3">  
				<textarea pattern=".{0,200}" id="decr"name="description" rows="5" class="form-control input-lg" cols="20"></textarea>
		</div>
    </div>
    </br>
    </br>
    </br>

   

    <div class="col-md-4 column"  style="text-align:left">
        		<input id="ButtonPrevious" class="btn btn-default" type="button" value="Previous"  name="" onClick="handleWizardPrevious()" />
    </div>
 <div class="col-sm-4">
        <label style="text-align:center; color:red">* Υποχρεωτικά Πεδία</label>
    </div>
    <div class="col-md-4 column"  style="text-align: right">
        <input id="register"name="Submit1" type="button" value="Εγγραφή " onClick="location.href='logIn.html'" class="btn btn-default btn-lg btn-primary"style="font-size:18px;"  >
    </div>
    </br>
    </br>
    </br>
		
</span>





    
    

<!--------------------------------------->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="final/bootstrap-3.3.1/dist/js/bootstrap.min.js"></script>
      
      </div>
      
  </body>
</html>