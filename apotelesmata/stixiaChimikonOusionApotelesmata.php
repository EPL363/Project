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
   $sql1 = mysql_query("SELECT Distinct substance.* FROM `substance`,`containschemical`,`Product` WHERE Product.Chemical_Name='".$product."' and Product.Commercial_Name=containschemical.Name and Product.SavingDate=containschemical.Saving_Date and containschemical.Cas=Substance.Cas", $con);
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
                   tr = $('#display2').find('tr');
                               
                    tr.bind('click', function(event) {
                        number=$(this).find("td.d1").html();
                        Cas=$(this).find("td.d3").html();
                        var proceed = true;
                        if(proceed) {
                            post_data = {
                                'num'		: number,
                                'Cas'		: Cas
                                };
                            $.post('stixiaChimikonOusion_php.php', post_data, function(response){
                                  $('#ChName').text(response.Name);  
                                  $('#chemicalCAS').text(response.Cas);
                                  $('#chemicalEINECS').text(response.Ein);
                                  $('#chemicalIUPAC').text(response.Iu);
                                  $('#chemicalotherName').text(response.OName);
                                  $('#chemicalweight').text(response.Weight);
                                  $('#chemicalCLP').text(response.Clp);
                                  $('#chemicalenarmonismeni').text(response.enarmonismeni);
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
            <table class="table table-hover" id="display2">
                <tr>
                   <th>#</th>
                   <th>Επωνυμία Προμηθεύτριας Εταιρίας</th>
                   <th>ΔΔΑ</th>
                </tr>
                <?php
                    $i=0;
                     while ($row1){
                ?>
                <!--data-toggle="modal" data-target="#suplCompanyModal"-->
                <tr id="row1<?php echo $i?>" data-toggle="modal" data-target="#sub" class="click" >
                        <td class="d1"><?php echo $i ?></td>
                        <td class="d2"><?php echo $row1["Name"]?></td>
                        <td class="d3"><?php echo $row1["Cas"]?></td>
                </tr>
                <?php
                    $i=$i+1;
                   $row1 = mysql_fetch_array($sql1);
                    }
                ?>
            </table>
           
            <!-- Modal -->
            <div class="modal fade bs-example-modal-lg" id="sub" tabindex="-1" role="dialog" aria-labelledby="suplCompanyModalLabel" aria-hidden="true">
                
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="chemicalModalLabel">Χημική Σύνθεση Μείγματος</h4>
                  </div>
                  <div class="modal-body">
                    <!-------------------------------------------------------------------------------------------------------------------->
                      
                        <div class="container">
                            <div class="col-md-9 column"> 
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical-Name">Χημική ουσία</label>
                                        <div class="col-sm-4">
                                            <label  id="ChName" ></label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical-CAS">Αριθμός CAS</label>
                                        <div class="col-sm-4">
                                            <label  id="chemicalCAS" ></label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical-EINECS">Αριθμός EC/EINECS</label>
                                        <div class="col-sm-4">
                                            <label  id="chemicalEINECS" ></label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical-IUPAC">Ονοματολογία κατά IUPAC</label>
                                        <div class="col-sm-4">
                                            <label  id="chemicalIUPAC" ></label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical-otherName">Άλλη Ονοματολογία</label>
                                        <div class="col-sm-4">
                                            <label  id="chemicalotherName" ></label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical-weight">Ακριβής συγκέντρωση χημικής ουσίας στο μείγμα                                                                  (βάρος κατά βάρος)</label>
                                        <div class="col-sm-4">
                                            <label id="chemicalweight" ></label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical-CLP">Ταξινόμηση και Επισήμανση σύμφωνα με τον Κανονισμό 1272/2008 (Κανονισμός CLP)</label>
                                        <div class="col-sm-4">
                                            <label  id="chemicalCLP" ></label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical-enarmonismeni">Εναρμονισμένη ταξινόμηση</label>
                                        <div class="col-sm-4">
                                            <label  id="chemicalenarmonismeni"></label>
                                                
                                        </div>
                                    </div>
                                </form>
                            </div>
                                
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
    
    