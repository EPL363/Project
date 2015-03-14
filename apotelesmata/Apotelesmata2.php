<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
          <title>Αποτελέσματα</title>
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
            <script type="text/javascript">
                $(document).ready(function() {
                    $("#submit_btn").click(function() { 
                        var proceed = true;	
                        $("#contact_form input[required=true], #contact_form textarea[required=true]").each(function(){
                            $(this).css('border-color',''); 
                            if(!$.trim($(this).val())){ 
                                $(this).css('border-color','red');  
                                proceed = false; 
                            }
                        });
                        if(proceed) {
                            post_data = {
                                'Reason'		: $('textarea[name=Reason]').val(),
                                'productName'		: $('input[name=productName]').val(),
                                'companyName'		: $('input[name=companyName]').val()
                                };
                            $.post('Apoelesmata_php.php', post_data, function(response){
                                        window.alert(response.text);
                                if(response.type == 'error'){ //load json data from server and output message     
                                    output = '<div class="error">'+response.text+'</div>';
                                }else{
                                    output = '<div class="success">'+response.text+'</div>';
                                }
                                $("#contact_form #Resultmessage").hide().html(output).slideDown();
                            }, 'json');
                        }
                    
                    });
                    $("#contact_form  input[required=true], #contact_form textarea[required=true]").keyup(function() { 
                        $(this).css('border-color',''); 
                        $("#result").slideUp();

                    });
                });
            </script>
            <style>
                body{
                    overflow: scroll;
                }
            </style>
    </head>
    <body style=" height:100%;">
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-12 column">
                    <img src="banner_gr_Laa.png" width="100%" height="98">
                </div>
            </div>
            <div class="row clearfix"></div>
            <div class="col-md-12 column" >
                <div class="col-md-9 column" ></div>
                <a href="#">Τροποποίηση /</a>
                <a href="#" data-toggle="modal" data-target="#info-modal"> Επικαιροποίηση</a>
            </div>
            <div class="col-md-12 column">
                <div role="tabpanel"><!-- Nav tabs -->
                      <ul class="nav nav-tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#Constractor" aria-controls="Constractor" role="tab" data-toggle="tab"> Παρασκευάστρια Εταιρία</a></li>
                          <li role="presentation"><a href="#Supply" aria-controls="Supply" role="tab" data-toggle="tab">Προμηθεύτρια Εταιρία</a></li>
                          <li role="presentation"><a href="#Product" aria-controls="Product" role="tab" data-toggle="tab">Στοιχεία Χημικού Προιόντος</a></li>
                          <li role="presentation"><a href="#chemicalSub" aria-controls="chemicalSub" role="tab" data-toggle="tab">Χημικές Ουσίες</a></li>
                      </ul>
                      <div class="tab-content" style="height:100%"><!-- Tab panes -->
                          <div role="tabpanel" class="tab-pane active" id="Constractor" ><?php include "paraskevastikiEteriaApotelesmata.php";?></div> 
                          <div role="tabpanel" class="tab-pane" id="Supply"><?php include 'promitheftriaEteriaApotelesmata.php';?></div>
                          <div role="tabpanel" class="tab-pane" id="Product"><?php include '../stixiaProiontosApotelesmata.php';?></div>
                          <div role="tabpanel" class="tab-pane" id="chemicalSub"><?php include '../stixiaChimikonOusionApotelesmata.php';?>
                      </div>
                </div>
           </div>
        </div>
        <!-- Modal -->
            <div class="modal fade bs-example-modal-lg" id="info-modal" tabindex="-1" role="dialog" aria-labelledby="chemicalModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="chemicalModalLabel" style="color: #2CA4B0; font-family: 'Helvetica Neue', sans-serif;  font-weight: 100; letter-spacing: 1px; padding: 0 0 5px;">Πληροφορίες Σχετικά με την Επικαιροποίηση Στοιχείων Προϊόντος</h4>
                  </div>
                  <div class="modal-body">
                    <!-------------------------------------------------------------------------------------------------------------------->
                      
                      <div class="container">
                            <div class="col-md-9 column"> 
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="companyName">Όνομα Εταιρίας</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" required="true" name="companyName" id="companyName" />
                                        </div>
                                    </div>
                                      <div class="form-group">
                                        <label class="control-label col-sm-2" for="productName">Όνομα Εταιρίας</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" required="true" name="productName" id="productName" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label  for="chemical-Name">Παρακαλώ εξηγείστε εν συντομία τον λόγο για τον οποίο επιθυμείτε να <br> γίνει επικαιροποίηση</label>
                                    </div>
                                        
                                        </br>
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <textarea class="form-control" required="true" rows="6" name="Reason" id="constCompany-info"></textarea>
                                        </div>
                                        
                                    </div>
                                </form>
                          </div>
                      </div>
                      </br>
                    </br>
        
                    <!-------------------------------------------------------------------------------------------------------------------->
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                   <button type="button" id="submit_btn" class="btn btn-primary" data-dismiss="modal">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
                
        </div>
</div>
    </body>
</html>
    
    