<?php 
    
    $product=$_GET["name"];
    
    $con =mysql_connect("localhost", "root", "");
            mysql_select_db("teedb");
            mysql_query ("set character_set_results='utf8'");

            if (!$con)
                echo "Cannot connect: ".mysql_error();
            else{
                mysql_select_db("root", $con);
                mysql_query ("set character_set_results='utf8'");
            }
    $sql1 = mysql_query("SELECT Distinct Company.* FROM `Product`,`Supply`,`Company` WHERE Supply.Product='".$product."' and Company.Company_Name=Supply.Supplier", $con);
    $row1 = mysql_fetch_array($sql1);
?>
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
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <script type="text/javascript">
                $(document).ready(function() {
                   tr = $('#display').find('tr');
                               
                    tr.bind('click', function(event) {
                        number=$(this).find("td.c1").html();
                        name=$(this).find("td.c2").html();
                        company=$(this).find("td.c3").html();
                        var proceed = true;
                       
                        if(proceed) {
                            post_data = {
                                'num'		: number,
                                'companyName'		: name
                                };
                           
                            $.post('promitheftriaEtairia_php.php', post_data, function(response){
                         
                                  $('#suplCompany-Name').text(response.Name);  
                                  $('#suplCompany-legalForm').text(response.Ls);
                                  $('#suplCompany-Address').text(response.Address);
                                  $('#suplCompany-PC').text(response.PostCode);
                                  $('#suplCompany-City').text(response.City);
                                  $('#suplCompany-Phone').text(response.Telephone);
                                  $('#suplCompany-fax').text(response.Fax);
                                  $('#suplCompany-email').text(response.Email);
                                  $('#suplCompany-info').text(response.info);
                                  $('#suplCompany-CEO').text(response.Ceo);
                    
                                
                                  $('#Name').text(response.NamePer);  
                                  $('#constSurname').text(response.SurnamePer);
                                  $('#constaddress').text(response.AddressPer);
                                  $('#constpc').text(response.PostCodePer);
                                  $('#constcity').text(response.CityPer);
                                  $('#constphone').text(response.TelephonePer);
                                  $('#constfax').text(response.FaxPer);
                                  $('#constemail').text(response.EmailPer);
                            }, 'json');
                        }
                    
                    });
                    
                });
            </script>
            <style>
                body{
                    overflow: scroll;
                }
            </style>
    </head>
    <body >
        <div class="container">
        
        <div id="prom_form">
        <!------------------------------------------------------------------->
         
            <!-- Button trigger modal -->
            <table class="table table-hover" id="display">
                <tr>
                   <th>#</th>
                   <th>Επωνυμία Προμηθεύτριας Εταιρίας</th>
                   <th>ΔΔΑ</th>
                </tr>
                <?php
                    $i=0;
                     while ($row1){
                ?>
                <tr id="row<?php echo $i?>" data-toggle="modal" data-target="#suplCompanyModal" class="click" >
                        <td class="c1"><?php echo $i ?></td>
                        <td class="c2"><?php echo $row1["Company_Name"]?></td>
                        <td class="c3"><?php echo $row1["Address"]?></td>
                </tr>
                <?php
                    $i=$i+1;
                   $row1 = mysql_fetch_array($sql1);
                    }
                ?>
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
                                                <label id="suplCompany-legalForm"  ></label>
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
                                                <label id="suplCompany-info"></label>
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
                                               <label id="Name"></label>
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="constEmpl-Surname">Επίθετο:</label>
                                            <div class="col-sm-4">
                                               <label id="constSurname"></label>
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="constEmpl-address">Διεύθυνση:</label>
                                            <div class="col-sm-4">
                                                <label id="constaddress" ></label>
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="constEmpl-pc">T.K. :</label>
                                            <div class="col-sm-2">
                                                <label id="constpc" ></label>
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="constEmpl-city">Πόλη:</label>
                                            <div class="col-sm-4">
                                                <label id="constcity" ></label>
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="constEmpl-phone">Τηλέφωνο:</label>
                                            <div class="col-sm-4">
                                                <label id="constphone"></label>
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="constEmpl-fax">Φάξ:</label>
                                            <div class="col-sm-4">
                                                <label id="constfax" ></label>
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="constEmpl-email">Ηλεκτρονικό Ταχυδρομείο:</label>
                                            <div class="col-sm-4">
                                                <label id="constemail" ></label>
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
</html>
    
    