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
	    <script src="js/jquery.bootstrap.wizard.js"></script>
	    <script src="js/prettify.js"></script>
        
        
        <script>
        $(document).ready(function() {
           $('#rootwizard').bootstrapWizard({'nextSelector': '.button-next', 'previousSelector': '.button-previous'});
		  window.prettyPrint && prettyPrint()
        });
        </script>
       
    </head>

    <body>
        <div class="row">
			<section id="wizard" class="col-md-12">
				<div id="rootwizard"> 
					<div class="navbar">
					  <div class="navbar-inner">
                            <ul>
                                <li><a href="#tab1" data-toggle="tab">1. Παρασκευάστρια Εταιρία</a></li>
                                <li><a href="#tab2" data-toggle="tab">2. Προμηθεύτρια Εταιρία</a></li>
                                <li><a href="#tab3" data-toggle="tab">3.Στοιχεία Χημικού Προιόντος</a></li>
                                <li><a href="#tab4" data-toggle="tab">4.Χημικές Ουσίες</a></li>
                                <li><a href="#tab5" data-toggle="tab">5.Αναρτηση ΔΔΑ και Ετικέτα</a></li>
                            </ul>
					  </div>
					</div>
                    
					<div class="tab-content">
					    <div class="tab-pane" id="tab1"><?php include 'paraskevastikiEteriaForm.php';?></div>
					    <div class="tab-pane" id="tab2"><?php include 'promitheftriaEteriaForm.php';?></div>
						<div class="tab-pane" id="tab3"><?php include 'stixiaProiontosForm.php';?></div>
						<div class="tab-pane" id="tab4"><?php include 'stixiaChimikonOusion.php';?></div>
						<div class="tab-pane" id="tab5"></div>
				    </div> 
                    
                    <div class="col-md-12">
						<ul class="pager wizard">
							<li class="previous first" style="display:none;"><a href="#">First</a></li>
							<li class="previous"><a href="#">Previous</a></li>
							<li class="next last" style="display:none;"><a href="#">Last</a></li>
						  	<li class="next"><a href="#">Next</a></li>
						</ul>
					 </div>
				</div>
			</section>
	   </div>    
    </body>
</html>