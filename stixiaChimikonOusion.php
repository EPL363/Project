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
                var intTextBox=0;
                var choiceCount=0;

                //FUNCTION TO ADD TEXT BOX ELEMENT
                function addElement()
                {
                    if (choiceCount < 100 && intTextBox < 200) {
                        intTextBox = intTextBox + 1;
                        choiceCount = choiceCount+1;
                        PostDataXimikonOusion();
                        var contentID = document.getElementById('chemicalTable');
                        var newTBDiv = document.createElement('tr');
                        var labelName = $('#chemical_Name').val();
                        newTBDiv.setAttribute('id','chemicaltexts'+intTextBox);
                        newTBDiv.innerHTML ='<td><strong>'+intTextBox+'</strong></td><td>'+labelName+'</td><td><input type="image" src="Deep_Edit.png" data-toggle="modal" data-target="#chemicalModal"></td><td><input type="image" src="delete-icon.png" onclick= "removeElementID('+intTextBox+');"></td>'; 
                        contentID.appendChild(newTBDiv);
                    } else {
                        alert("Φτάσατε το μέγιστο όριο χημικών ουσιών που μπορείτε να προσθέσετε");
                    }
                }

                function PostDataXimikonOusion() {
                    // 1. Create xhrProm instance - Start
                    var xhrProm;
                    if (window.XMLHttpRequest) {
                        xhrProm = new XMLHttpRequest();
                    }
                    else if (window.ActiveXObject) {
                        xhrProm = new ActiveXObject("Msxml2.XMLHTTP");
                    }
                    else {
                        throw new Error("Ajax is not supported by this browser");
                    }
                    // 1. Create xhrProm instance - End

                    // 2. Define what to do when xhrProm feed you the response from the server - Start
                    xhrProm.onreadystatechange = function () {
                        if (xhrProm.readyState === 4) {
                            if (xhrProm.status == 200 && xhrProm.status < 300) {
                                document.getElementById('asdf').innerHTML = xhrProm.responseText;
                                console.log("okSupl");
                            }
                        }
                    }
                    // 2. Define what to do when xhrProm feed you the response from the server - Start
                    var countChemical = intTextBox;
                    var chemical_Name = document.getElementById("chemical_Name").value;
                    var chemical_CAS = document.getElementById("chemical_CAS").value;
                    var chemical_EINECS = document.getElementById("chemical_EINECS").value;
                    var chemical_IUPAC = document.getElementById("chemical_IUPAC").value;
                    var chemical_otherName = document.getElementById("chemical_otherName").value;
                    var chemical_weight = document.getElementById("chemical_weight").value;
                    var chemical_CLP = document.getElementById("chemical_CLP").value;
                    var chemical_enarmonismeni = document.getElementById("chemical_enarmonismeni").value;


                    console.log(suplCompany_CommercialName);
                    // 3. Specify your action, location and Send to the server - Start
                    xhrProm.open('POST', 'getChimikaData.php');
                    xhrProm.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhrProm.send("countChemical="+countChemical+"&chemical_Name="+chemical_Name+"&chemical_CAS=" + chemical_CAS +"&chemical_EINECS="+chemical_EINECS+"&chemical_IUPAC="
                    +chemical_IUPAC+"&chemical_otherName="+chemical_otherName+"&chemical_weight="+chemical_weight+"&chemical_CLP="+chemical_CLP
                    +"&chemical_enarmonismeni="+chemical_enarmonismeni);
                }


                function removeElementID(cnum) {
                    DeleteDataOusias(cnum);
                    var contentID = document.getElementById('chemicalTable');
                    contentID.removeChild(document.getElementById('chemicaltexts'+cnum));
                    contentID.removeChild(document.getElementById('newline'+cnum));
                    //intTextBox = intTextBox-1; this would break it
                    choiceCount = choiceCount-1;
                }

                function DeleteDataOusias(count) {
                    // 1. Create xhrProm instance - Start
                    var xhrProm;
                    if (window.XMLHttpRequest) {
                        xhrProm = new XMLHttpRequest();
                    }
                    else if (window.ActiveXObject) {
                        xhrProm = new ActiveXObject("Msxml2.XMLHTTP");
                    }
                    else {
                        throw new Error("Ajax is not supported by this browser");
                    }
                    // 1. Create xhrProm instance - End

                    // 2. Define what to do when xhrProm feed you the response from the server - Start
                    xhrProm.onreadystatechange = function () {
                        if (xhrProm.readyState === 4) {
                            if (xhrProm.status == 200 && xhrProm.status < 300) {
                                document.getElementById('asdf').innerHTML = xhrProm.responseText;
                                console.log("okDeleteSupl");
                            }
                        }
                    }
                    // 2. Define what to do when xhrProm feed you the response from the server - Start

                    console.log(suplCompany_CommercialName);
                    // 3. Specify your action, location and Send to the server - Start
                    xhrProm.open('POST', 'deleteChimikiOusiaData.php');
                    xhrProm.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhrProm.send("count="+count);
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
                                        <label class="control-label col-sm-3" for="chemical_Name">Χημική ουσία</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="chemical_Name" id="chemical_Name" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical_CAS" >Αριθμός CAS</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control"  name="chemical_CAS" id="chemical_CAS" />
                                            
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical_EINECS">Αριθμός EC/EINECS</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="chemical_EINECS" id="chemical_EINECS" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical_IUPAC">Ονοματολογία κατά IUPAC</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="chemical_IUPAC" id="chemical_IUPAC" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical_otherName">Άλλη Ονοματολογία</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="chemical_otherName" id="chemical_otherName" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical_weight">Ακριβής συγκέντρωση χημικής ουσίας στο μείγμα                                                                  (βάρος κατά βάρος)</label>
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control" name="chemical_weight" id="chemical_weight" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical_CLP">Ταξινόμηση και Επισήμανση σύμφωνα με τον Κανονισμό 1272/2008 (Κανονισμός CLP)</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="chemical_CLP" id="chemical_CLP" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="chemical_enarmonismeni">Εναρμονισμένη ταξινόμηση</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="chemical_enarmonismeni" id="chemical_enarmonismeni">
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
            <br><br>
            <div class="row">
                <div class="col-md-4 column"  style="text-align: left">
                   <input id="ButtonPrevious" class="btn btn-default" type="button" value="Previous" name="Step3" onclick="handleWizardPreviousStep4to3()" />
                </div>
                <div class="col-sm-4"></div>
                <div class="col-md-4 column" style="text-align: right">
                    <input id="ButtonNext" class="btn btn-default" type="button" value="Next" name="Step5" onClick="handleWizardNextStep4To5()" />
                </div>
            </div>
      </div>
       
    
    </body>

</html>