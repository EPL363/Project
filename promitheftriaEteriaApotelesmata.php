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
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</head>
    
<body>   
    <div class="container">
        
        <div id="prom_form">
        <!------------------------------------------------------------------->
         
            <!-- Button trigger modal -->
            
            <table  class="table table-hover">
                <thead>
            <tr>
                            <th>#</th>
                            <th>Επωνυμία Προμηθεύτριας Εταιρίας</th>
                            <th>ΔΔΑ</th>
            </tr>
                </thead>
                <tbody>
                <tr data-toggle="modal" data-target="#suplCompanyModal">
                    <td>1</td>
                    <td>Company A</td>
                    <td><a href="PDF_Logo.jpg"><img src="PDF_Logo.jpg" style="width:30px;height:30px"></a></td>
                </tr>
                <tr data-toggle="modal" data-target="#suplCompanyModal">
                    <td>2</td>
                    <td>Company B</td>
                    <td><a href="PDF_Logo.jpg"><img src="PDF_Logo.jpg" style="width:30px;height:30px"></a></td>
                </tr>
                <tr data-toggle="modal" data-target="#suplCompanyModal">
                    <td>3</td>
                    <td>Company C</td>
                    <td><a href="PDF_Logo.jpg"><img src="PDF_Logo.jpg" style="width:30px;height:30px"></a></td>
                </tr>
                </tbody>
            </table>

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
                                                <label id="suplCompany-Name" ></label>
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany-legalForm">Νομική Μορφή:</label>
                                            <div class="col-sm-4">
                                                <label id="suplCompany-legalForm" ></label>
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany-CEO">Όνομα Διευθυντή:</label>
                                            <div class="col-sm-4 ">
                                                <label id="suplCompany-CEO" ></label>
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany-Address">Διεύθυνση:</label>
                                            <div class="col-sm-4">
                                                <label id="suplCompany-Address" ></label>
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany-PC">T.K. :</label>
                                            <div class="col-sm-2">
                                                <label id="suplCompany-PC" ></label>
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany-City">Πόλη:</label>
                                            <div class="col-sm-4">
                                                <label id="suplCompany-City" ></label>
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany-Phone">Τηλέφωνο:</label>
                                            <div class="col-sm-4">
                                                <label id="suplCompany-Phone" ></label>
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany-fax">Φάξ:</label>
                                            <div class="col-sm-4">
                                                <label id="suplCompany-fax" ></label>
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany-email">Ηλεκτρονικό Ταχυδρομείο:</label>
                                            <div class="col-sm-4">
                                                <label id="suplCompany-email"></label>
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany-info">Άλλες Πληροφορίες:</label>
                                            <div class="col-sm-4">
                                                <label rows="5" id="suplCompany-info"></label>
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
                                                <label id="constEmpl-name" ></label>
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="constEmpl-Surname">Επίθετο:</label>
                                            <div class="col-sm-4">
                                               <label id="constEmpl-Surname"></label>
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="constEmpl-address">Διεύθυνση:</label>
                                            <div class="col-sm-4">
                                                <label id="constEmpl-address" ></label>
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="constEmpl-pc">T.K. :</label>
                                            <div class="col-sm-2">
                                                <label id="constEmpl-pc" ></label>
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="constEmpl-city">Πόλη:</label>
                                            <div class="col-sm-4">
                                                <label id="constEmpl-city" ></label>
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="constEmpl-phone">Τηλέφωνο:</label>
                                            <div class="col-sm-4">
                                                <label id="constEmpl-phone"></label>
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="constEmpl-fax">Φάξ:</label>
                                            <div class="col-sm-4">
                                                <label id="constEmpl-fax" ></label>
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="constEmpl-email">Ηλεκτρονικό Ταχυδρομείο:</label>
                                            <div class="col-sm-4">
                                                <label id="constEmpl-email" ></label>
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
                   
                  </div>
                </div>
              </div>
            </div>
         
        <!--------------------------------------------------------------->
        </div>
 
    </div> 
    
</body>