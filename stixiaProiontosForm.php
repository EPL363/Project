<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
          <title>Προφίλ Χρήστη</title>
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
          <meta name="description" content="">
          <meta name="author" content="">

            <!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
            <!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
            <!--script src="js/less-1.3.3.min.js"></script-->
            <!--append ‘#!watch’ to the browser URL, then refresh the page. -->

            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link href="css/style.css" rel="stylesheet">
            <link href="css/custom.css" rel="stylesheet" media="screen">
            <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
          <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
          <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
          <![endif]-->
        
            <script type="text/javascript" src="js/jquery.min.js"></script>
	       <script type="text/javascript" src="js/bootstrap.min.js"></script>
	       <script type="text/javascript" src="js/scripts.js"></script>

        <script>

            function PostDataProion() {
                // 1. Create XHR instance - Start
                var xhr;
                if (window.XMLHttpRequest) {
                    xhr = new XMLHttpRequest();
                }
                else if (window.ActiveXObject) {
                    xhr = new ActiveXObject("Msxml2.XMLHTTP");
                }
                else {
                    throw new Error("Ajax is not supported by this browser");
                }
                // 1. Create XHR instance - End

                // 2. Define what to do when XHR feed you the response from the server - Start
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4) {
                        if (xhr.status == 200 && xhr.status < 300) {
                            document.getElementById('asdf2').innerHTML = xhr.responseText;
                            console.log("ok");
                            document.getElementById('Step1').style.display = 'none';
                            document.getElementById('Step3').style.display = 'none';
                            document.getElementById('Step2').style.display = 'none';
                            document.getElementById('Step5').style.display = 'none';
                            document.getElementById('Step4').style.display = '';

                            // Change background color on header to highlight new step
                            document.getElementById('HeaderTableStep2').style.color= '#9DA1A3';
                            document.getElementById('HeaderTableStep1').style.color = '#9DA1A3';
                            document.getElementById('HeaderTableStep3').style.color = '#9DA1A3';
                            document.getElementById('HeaderTableStep4').style.color = '#66CCFF';
                            document.getElementById('HeaderTableStep5').style.color = '#000000';
                        }
                    }
                }
                // 2. Define what to do when XHR feed you the response from the server - Start

                var chemicalProduct_Name = document.getElementById("chemicalProduct_Name").value;
                var chemicalProduct_CommName = document.getElementById("chemicalProduct_CommName").value;
                var chemicalProduct_use = document.getElementById("chemicalProduct_use").value;
                var chemicalProduct_extraChar = document.getElementById("chemicalProduct_extraChar").value;
                var chemicalProduct_state = document.getElementById("chemicalProduct_state").value;
                var chemicalProduct_storageAdd = document.getElementById("chemicalProduct_storageAdd").value;
                var chemicalProduct_SDS = document.getElementById("chemicalProduct_SDS").value;
                var chemicalProduct_CPL = document.getElementById("chemicalProduct_CPL").value;
                var chemicalProduct_V = document.getElementById("chemicalProduct_CommName").value;

                console.log(constCompany_CommercialName);
                // 3. Specify your action, location and Send to the server - Start
                xhr.open('POST', 'getStixiaProiontosData.php');
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.send("chemicalProduct_Name=" + chemicalProduct_Name +"&chemicalProduct_CommName="+chemicalProduct_CommName+"&chemicalProduct_use="
                +chemicalProduct_use+"&chemicalProduct_extraChar="+chemicalProduct_extraChar+"&chemicalProduct_state="+chemicalProduct_state+"&chemicalProduct_storageAdd="+chemicalProduct_storageAdd
                +"&chemicalProduct_SDS="+chemicalProduct_SDS+"&chemicalProduct_CPL="+chemicalProduct_CPL+"&chemicalProduct_V="+chemicalProduct_V);
            }

        </script>


    </head>
    
<body>
    
    <div class="col-md-12 ">
        <div class="container">
        	<div class="row">
                <form>
       	        <div class="panel-heading " >
                    <h2 class="panel-title col-sm-offset-1"><strong>Στοιχεία Χιμικού  Προιόντος</strong></h2>
                </div>  
                <hr>              
                <br>
                                     
                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct_Name">Χημική Ονομασία:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="chemicalProduct_Name" id="chemicalProduct_Name" />
                    </div>
                </div>
                  
                <br><br>
                
                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct_CommName">Εμπορική Ονομασία:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="chemicalProduct_CommName" id="chemicalProduct_CommName" />
                    </div>
                </div>
                   
                <br><br>
                
                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct_use">Προβλεπόμενες Χρήσεις:</label>
                    <div class="col-sm-6">
                        <textarea type="text" class="form-control" rows="5" name="chemicalProduct_use" id="chemicalProduct_use" /></textarea>
                    </div>
                </div>
                  
                <br><br><br><br><br><br>
            
                 <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct_extraChar">Πρόσθετα Χαρακτηριστικά ή άλλες επιπρόσθετες πληροφορίες για το μείγμα</label>
                    <div class="col-sm-6">
                        <textarea type="text" class="form-control" rows="5" name="chemicalProduct_extraChar" id="chemicalProduct_extraChar" /></textarea>
                    </div>
                </div>
                  
                <br><br><br><br><br><br>
            
                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct_state">Κατάσταση:</label>
                    <div class="col-sm-6">
                        <select class="form-control" name="chemicalProduct_state" id="chemicalProduct_state">
                          <option value="0">Αέριο</option>
                          <option value="1">Υγρό</option>
                          <option value="2">Στερεό</option>
                        </select>
                    </div>
                </div>
                        
                <br><br>
                    
                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct_storageAdd">Διεύθυνση Αποθήκευσης Μείγματος:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="chemicalProduct_storageAdd" id="chemicalProduct_storageAdd" />
                    </div>
                </div>
                 
                <br><br>
                   
                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct_SDS">Στοιχεία Ταξινόμησης και Επισήμανσης σύμφωνα με το Δελτίο Δεδομένων Ασφαλείας (SDS)</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="chemicalProduct_SDS" id="chemicalProduct_SDS" />
                    </div>
                </div>
        
                <br><br><br>
        
                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct_CPL">Στοιχεία Ταξινόμησης και Επισήμανσης σύμφωνα με τον Κανονισμό 1272/2008 (Κανονισμός CLP)(αν είναι διαθέσιμα)</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="chemicalProduct_CPL" id="chemicalProduct_CPL" />
                    </div>
                </div>
        
                <br><br><br>
                   
                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct_V">Όγκος Συσκευασίας:</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" name="chemicalProduct_V" id="chemicalProduct_V"/>
                    </div>
                </div>
            <br><br>
            <div class="row">
                <div class="col-md-4 column"  style="text-align: left">
                   <input id="ButtonPrevious" class="btn btn-default" type="button" value="Previous"  name="Step2" onclick="handleWizardPreviousStep3to2()" />
                </div>
                <div class="col-sm-4"></div>
                <div class="col-md-4 column" style="text-align: right">
                    <input id="ButtonNext" class="btn btn-default" type="button" value="Next" name="Step4" onClick="PostDataProion()" />
                </div>
                </div>
            </form>
                 
            </div>  
        </div>
    </div>
    
</body>
</html>