<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/style.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
        
	    <link href="prettify.css" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="js/bootstrap.min.js"></script>
	    <script src="js/prettify.js"></script>
        
       <script src="script_Prosthiki.js"></script>
       
    </head>

    <body>
        <div class="col-md-12">
            <div class="tab-pane" id="Prosthiki">
                <div class="container">
                    <div class="row clearfix">
                        <div class="col-md-12 column">
                            <form id="SubscriptionWizard" action="" method="post">
                                <table class="table table-hover" cellpadding="5" cellspacing="0" id="HeaderTable">
                                    <tr>
                                        <td id="HeaderTableStep1" style="color:#66CCFF">1. Παρασκευάστρια Εταιρία</td>
                                        <td id="HeaderTableStep2">2. Προμηθεύτρια Εταιρία</td>
                                        <td id="HeaderTableStep3" >3.Στοιχεία Χημικού Προιόντος </td>
                                        <td id="HeaderTableStep4" >4.Χημικές Ουσίες</td>
                                        <td id="HeaderTableStep5" >5.Αναρτηση ΔΔΑ και Ετικέτα </td>
                                    </tr>
                                </table>
                             </form>
                        </div >
                    </div>
                </div >
            </div>
            
            <span id="Step1"><?php include 'paraskevastikiEteriaForm.php';?></span>
            
            <span id="Step2" style="display:none"><?php include 'promitheftriaEteriaForm.php';?></span>
            
            <span id="Step3" style="display:none"><?php include 'stixiaProiontosForm.php';?></span>
            
            <span id="Step4" style="display:none"><?php include 'stixiaChimikonOusion.php';?></span>
            
            <span id="Step5" style="display:none"></span>
            
            <br><br>
            
            <div class="col-md-4 column"  style="text-align: left">
        	   <input id="ButtonPrevious" class="btn btn-default" type="button" value="Previous"  disabled="disabled" name="" onclick="handleWizardPrevious()" />
		    </div>
            <div class="col-sm-4"></div>
		    <div class="col-md-4 column" style="text-align: right">
                <input id="ButtonNext" class="btn btn-default" type="button" value="Next" name="Step2" onClick="handleWizardNext()" />
		    </div>
    
            
           
	   </div>    
    </body>
</html>