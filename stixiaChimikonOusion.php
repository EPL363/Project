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
        
            <script>
                var intTextBox=0;
                var choiceCount=0;

                //FUNCTION TO ADD TEXT BOX ELEMENT
                function addElement()
                {
                    if (choiceCount < 100 && intTextBox < 200) {
                        intTextBox = intTextBox + 1;
                        choiceCount = choiceCount+1;
                        var contentID = document.getElementById('chemicalTable');
                        var newTBDiv = document.createElement('tr');
                        var labelName = $('#chemical-Name').val();
                        newTBDiv.setAttribute('id','chemicaltexts'+intTextBox);
                        newTBDiv.innerHTML ='<td><strong>'+intTextBox+'</strong></td><td>'+labelName+'</td><td><input type="image" src="Deep_Edit.png" data-toggle="modal" data-target="#chemicalModal"></td><td><input type="image" src="delete-icon.png" onclick= "removeElementID('+intTextBox+');"></td>'; 
                        contentID.appendChild(newTBDiv);
                    } else {
                        alert("Φτάσατε το μέγιστο όριο χημικών ουσιών που μπορείτε να προσθέσετε");
                    }
                }


                //FUNCTION TO REMOVE TEXT BOX ELEMENT

                function removeElementID(cnum)
                {
                    var contentID = document.getElementById('chemicalTable');
                    contentID.removeChild(document.getElementById('chemicaltexts'+cnum));
                    contentID.removeChild(document.getElementById('newline'+cnum));
                    //intTextBox = intTextBox-1; this would break it
                    choiceCount = choiceCount-1;
                }
            </script>

    </head>
    
    <body>
       
    <!--------------------------------------------------------------------------------------------------------->
        <div class="container">
            
            <div class="row clearfix" >
                <div class="col-md-12 column" >
                    <table class="table table-hover" name="chemicalTable" id="chemicalTable">
                        <tr>
                            <th>#</th>
                            <th>Χημική  Ουσία</th>
                            <th>Επεξεργασία</th>
                            <th>Διαγραφή</th>
                        </tr>
                    </table>
                  
                </div>    
            </div>
            <br><br><br>    
            
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#chemicalModal">Εισαγωγή στοιχείου</button>

            <!-- Modal -->
            <div class="modal fade bs-example-modal-lg" name="chemicalModal" id="chemicalModal" tabindex="-1" role="dialog" aria-labelledby="chemicalModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" name="" id="chemicalModalLabel">Χημική Σύνθεση Μείγματος</h4>
                  </div>
                  <div class="modal-body">
                    <!-------------------------------------------------------------------------------------------------------------------->
                        <div class="container">
                            
                            <div class="col-md-9 column"> 
                                <form class="form-horizontal" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                    <div class="form-group" >
                                        <label class="control-label col-sm-3" for="chemical-Name">Χημική ουσία</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="chemical-Name" id="chemical-Name" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical-CAS" >Αριθμός CAS</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control"  name="chemical-CAS" id="chemical-CAS" />
                                            
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical-EINECS">Αριθμός EC/EINECS</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="chemical-EINECS" id="chemical-EINECS" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical-IUPAC">Ονοματολογία κατά IUPAC</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="chemical-IUPAC" id="chemical-IUPAC" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical-otherName">Άλλη Ονοματολογία</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="chemical-otherName" id="chemical-otherName" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical-weight">Ακριβής συγκέντρωση χημικής ουσίας στο μείγμα                                                                  (βάρος κατά βάρος)</label>
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control" name="chemical-weight" id="chemical-weight" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical-CLP">Ταξινόμηση και Επισήμανση σύμφωνα με τον Κανονισμό 1272/2008 (Κανονισμός CLP)</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="chemical-CLP" id="chemical-CLP" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical-enarmonismeni">Εναρμονισμένη ταξινόμηση</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="chemical-enarmonismeni" id="chemical-enarmonismeni">
                                                <option value="1">Ναι</option>
                                                <option value="0">Όχι</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                                
                        </div>
                      <!-------------------------------------------------------------------------------------------------------------------->
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button"  class="btn btn-primary" data-dismiss="modal" onclick="addElement();" name="addentry">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
      </div>
       
    
    </body>

</html>