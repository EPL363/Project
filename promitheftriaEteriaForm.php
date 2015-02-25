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
    
    <script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>

    <script>
        var intTextBox=0;
        var choiceCount=0;

        //FUNCTION TO ADD Company TEXT BOX 
        function addCompany(){
            if (choiceCount < 10 && intTextBox < 20) {
                intTextBox = intTextBox + 1;
                choiceCount = choiceCount+1;
                var contentID = document.getElementById('entrycol');
                var newTr = document.createElement('tr');
                var name = $('#suplCompany-Name').val();
                newTr.setAttribute('id','entry'+intTextBox);
                newTr.innerHTML ='<td><strong>'+intTextBox+'</strong></td><td>'+name+'</td><td><input type="image" src="Deep_Edit.png" data-toggle="modal" data-target="#suplCompanyModal"></td><td><input type="image" src="delete-icon.png" onclick= "removeCompanyID('+intTextBox+');"></td>';

                contentID.appendChild(newTr);
                
                    
            } else {
                alert("Φτάσατε το μέγιστο όριο εισαγωγής στοιχείων προμηθευτών");
            }
        }

        //FUNCTION TO REMOVE Company TEXT BOX 

        function removeCompanyID(cnum){
            var contentID = document.getElementById('entrycol');
            contentID.removeChild(document.getElementById('entry'+cnum));
            //intTextBox = intTextBox-1; this would break it
            choiceCount = choiceCount-1;
            //intTextBox = intTextBox-1;
        }
    </script>
    
     <script src="jquery-1.9.1.js"></script>
    <script>
        
        $(document).ready(function(){
            $('#c2').change(function(){
                if(!this.checked)
                    $('#prom_form').fadeIn('slow');
                else
                    $('#prom_form').fadeOut('slow');
            });
        });
                          
    </script>
    
</head>
    
<body>   
    <div class="container">
        
        <div class="form-group">
            <label class="col-sm-4 control-label" for="c2">Εργάζεστε στην προμηθεύτρια εταιρία;</label>
                <div class="col-sm-4">
                    <input type="checkbox" id="c2">
                </div>
        </div>
        <br><br><br>
        <div id="prom_form">
        <!------------------------------------------------------------------->
            <div class="row clearfix" >
                <div class="col-md-12 column" >
                    <table class="table table-hover" id="entrycol">
                        <tr>
                            <th>#</th>
                            <th>Επωνυμία Προμηθεύτριας Εταιρίας</th>
                            <th>Επεξεργασία</th>
                            <th>Διαγραφή</th>
                        </tr>
                    </table>
                  
                </div>    
            </div>
            <br><br><br>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#suplCompanyModal">Προσθήκη Εταιρίας</button>

            <!-- Modal -->
            <div class="modal fade bs-example-modal-lg" id="suplCompanyModal" tabindex="-1" role="dialog" aria-labelledby="suplCompanyModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="suplCompanyModalLabel">Στοιχεία Προμηθεύτριας Εραιρίας</h4>
                  </div>
                  <div class="modal-body">
                    <!-------------------------------------------------------------------------------------------------------------------->
                        <div class="container">
        
                                <div class="col-md-9 column"> 

                                    <div class="row">
                                        <h4>Στοιχεία Εταιρίας</h4>
                                        
                                        <br>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany-Name">Επωνυμία Επιχείρησης:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" id="suplCompany-Name" type="text">
                                            </div>
                                        </div>

                                        <br><br>
                                        
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany-CommercialName">Εμπορική Επωνυμία Επιχείρησης:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" id="suplCompany-CommercialName" name="constCompany-CommercialName"type="text">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany-OtherName">Άλλη Επωνυμία:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" id="suplCompany-OtherName" name="constCompany-OtherName" type="text">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany-legalForm">Νομική Μορφή:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" id="suplCompany-legalForm" type="text">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany-CEO">Όνομα Διευθυντή:</label>
                                            <div class="col-sm-4 ">
                                                <input class="form-control" id="suplCompany-CEO" type="text">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany-Address">Διεύθυνση:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" id="suplCompany-Address" type="text">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany-PC">T.K. :</label>
                                            <div class="col-sm-2">
                                                <input class="form-control" id="suplCompany-PC" type="number">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany-City">Πόλη:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" id="suplCompany-City" type="text">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany-Phone">Τηλέφωνο:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" id="suplCompany-Phone" type="number">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany-fax">Φάξ:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" id="suplCompany-fax" type="number">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany-email">Ηλεκτρονικό Ταχυδρομείο:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" id="suplCompany-email" type="email">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany-info">Άλλες Πληροφορίες:</label>
                                            <div class="col-sm-4">
                                                <textarea class="form-control" rows="5" id="suplCompany-info"></textarea>
                                            </div>
                                        </div>

                                        <br><br>

                                    </div>
                                    <br><br>
                                    <!--------------------------------------------------------------------------------------------------------------------------------->

                                    <div class="row">
                                        <h4>Στοιχεία Υπεύθυνου Επικοινωνίας</h4><br>
                                        
                                        <br>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="constEmpl-name">Όνομα:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" id="constEmpl-name" type="text">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="constEmpl-Surname">Επίθετο:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" id="constEmpl-Surname" type="text">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="constEmpl-address">Διεύθυνση:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" id="constEmpl-address" type="text">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="constEmpl-pc">T.K. :</label>
                                            <div class="col-sm-2">
                                                <input class="form-control" id="constEmpl-pc" type="number">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="constEmpl-city">Πόλη:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" id="constEmpl-city" type="text">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="constEmpl-phone">Τηλέφωνο:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" id="constEmpl-phone" type="number">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="constEmpl-fax">Φάξ:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" id="constEmpl-fax" type="number">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="constEmpl-email">Ηλεκτρονικό Ταχυδρομείο:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" id="constEmpl-email" type="email">
                                            </div>
                                        </div>

                                        <br><br>
                                    </div>
                                </div>
                                <br><br>
                            </div>
                      <!-------------------------------------------------------------------------------------------------------------------->
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="addCompany();" name="addentry">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
         
        <!--------------------------------------------------------------->
        </div>
 
    </div> 
    
</body>