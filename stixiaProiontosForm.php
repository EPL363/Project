<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
          <title>Προφίλ Χρήστη</title>
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    </head>
    
<body>
    
    <div class="col-md-12 ">
        <div class="container">
        	<div class="row">
       	        <div class="panel-heading " >
                    <h2 class="panel-title col-sm-offset-1"><strong>Στοιχεία Χιμικού  Προιόντος</strong></h2>
                </div>  
                <hr>              
                <br>
                                     
                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct-Name">Χημική Ονομασία:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="chemicalProduct-Name" id="chemicalProduct-Name" />
                    </div>
                </div>
                  
                <br><br>
                
                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct-CommName">Εμπορική Ονομασία:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="chemicalProduct-CommName" id="chemicalProduct-CommName" />
                    </div>
                </div>
                   
                <br><br>
                
                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct-use">Προβλεπόμενες Χρήσεις:</label>
                    <div class="col-sm-6">
                        <textarea type="text" class="form-control" rows="5" name="chemicalProduct-use" id="chemicalProduct-use" /></textarea>
                    </div>
                </div>
                  
                <br><br><br><br><br><br>
            
                 <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct-extraChar">Πρόσθετα Χαρακτηριστικά ή άλλες επιπρόσθετες πληροφορίες για το μείγμα</label>
                    <div class="col-sm-6">
                        <textarea type="text" class="form-control" rows="5" name="chemicalProduct-extraChar" id="chemicalProduct-extraChar" /></textarea>
                    </div>
                </div>
                  
                <br><br><br><br><br><br>
            
                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct-state">Κατάσταση:</label>
                    <div class="col-sm-6">
                        <select class="form-control" name="chemicalProduct-state" id="chemicalProduct-state">
                          <option value="0">Αέριο</option>
                          <option value="1">Υγρό</option>
                          <option value="2">Στερεό</option>
                        </select>
                    </div>
                </div>
                        
                <br><br>
                    
                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct-storageAdd">Διεύθυνση Αποθήκευσης Μείγματος:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="chemicalProduct-storageAdd" id="chemicalProduct-storageAdd" />
                    </div>
                </div>
                 
                <br><br>
                   
                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct-SDS">Στοιχεία Ταξινόμησης και Επισήμανσης σύμφωνα με το Δελτίο Δεδομένων Ασφαλείας (SDS)</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="chemicalProduct-SDS" id="chemicalProduct-SDS" />
                    </div>
                </div>
        
                <br><br><br>
        
                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct-CPL">Στοιχεία Ταξινόμησης και Επισήμανσης σύμφωνα με τον Κανονισμό 1272/2008 (Κανονισμός CLP)(αν είναι διαθέσιμα)</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="chemicalProduct-CPL" id="chemicalProduct-CPL" />
                    </div>
                </div>
        
                <br><br><br>
                   
                <div class="form-group">
                    <label class="control-label col-sm-4" for="chemicalProduct-V">Όγκος Συσκευασίας:</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" name="chemicalProduct-V" id="chemicalProduct-V"/>
                    </div>
                </div>
                 
            </div>  
        </div>
    </div>
    
</body>
</html>