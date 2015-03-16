<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script>
        var intTextBox=0;
        var choiceCount=0;

        //FUNCTION TO ADD Company TEXT BOX 
        function addCompany(){
            if (choiceCount < 10 && intTextBox < 20) {
                intTextBox = intTextBox + 1;
                choiceCount = choiceCount+1;
                PostDataPromitheftiki();
                var contentID = document.getElementById('entrycol');
                var newTr = document.createElement('tr');
                var name = $('#suplCompany_Name').val();
                newTr.setAttribute('id','entry'+intTextBox);
                newTr.innerHTML ='<td><strong>'+intTextBox+'</strong></td><td>'+name+'</td><td><input type="image" src="Deep_Edit.png" data-toggle="modal" data-target="#suplCompanyModal"></td><td><input type="image" src="delete-icon.png" onclick= "removeCompanyID('+intTextBox+');"></td>';

                contentID.appendChild(newTr);

                document.getElementById("suplCompany_Name").value = "";
                document.getElementById("suplCompany_CommercialName").value= "";
                document.getElementById("suplCompany_OtherName").value = "";
                document.getElementById("suplCompany_legalForm").value= "";
                document.getElementById("suplCompany_CEO").value= "";
                document.getElementById("suplCompany_Address").value= "";
                document.getElementById("suplCompany_PC").value= "";
                document.getElementById("suplCompany_City").value= "";
                document.getElementById("suplCompany_Phone").value= "";
                document.getElementById("suplCompany_fax").value= "";
                document.getElementById("suplCompany_email").value= "";
                document.getElementById("suplCompany_info").value= "";
                document.getElementById("suplEmpl_name").value= "";
                document.getElementById("suplEmpl_Surname").value= "";
                document.getElementById("suplEmpl_address").value= "";
                document.getElementById("suplEmpl_pc").value= "";
                document.getElementById("suplEmpl_city").value= "";
                document.getElementById("suplEmpl_phone").value= "";
                document.getElementById("suplEmpl_fax").value= "";
                document.getElementById("suplEmpl_email").value= "";
                    
            } else {
                alert("Φτάσατε το μέγιστο όριο εισαγωγής στοιχείων προμηθευτών");
            }
        }

        function PostDataPromitheftiki() {
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
            var countSuplCompany = intTextBox;
            var suplCompany_Name = document.getElementById("suplCompany_Name").value;
            var suplCompany_CommercialName = document.getElementById("suplCompany_CommercialName").value;
            var suplCompany_OtherName = document.getElementById("suplCompany_OtherName").value;
            var suplCompany_legalForm = document.getElementById("suplCompany_legalForm").value;
            var suplCompany_CEO = document.getElementById("suplCompany_CEO").value;
            var suplCompany_Address = document.getElementById("suplCompany_Address").value;
            var suplCompany_PC = document.getElementById("suplCompany_PC").value;
            var suplCompany_City = document.getElementById("suplCompany_City").value;
            var suplCompany_Phone = document.getElementById("suplCompany_Phone").value;
            var suplCompany_fax = document.getElementById("suplCompany_fax").value;
            var suplCompany_email = document.getElementById("suplCompany_email").value;
            var suplCompany_info = document.getElementById("suplCompany_info").value;
            var suplEmpl_name = document.getElementById("suplEmpl_name").value;
            var suplEmpl_Surname = document.getElementById("suplEmpl_Surname").value;
            var suplEmpl_address = document.getElementById("suplEmpl_address").value;
            var suplEmpl_pc = document.getElementById("suplEmpl_pc").value;
            var suplEmpl_city = document.getElementById("suplEmpl_city").value;
            var suplEmpl_phone = document.getElementById("suplEmpl_phone").value;
            var suplEmpl_fax = document.getElementById("suplEmpl_fax").value;
            var suplEmpl_email = document.getElementById("suplEmpl_email").value;

            console.log(suplCompany_CommercialName);
            // 3. Specify your action, location and Send to the server - Start
            xhrProm.open('POST', 'getPromitheftriaEteriaData.php');
            xhrProm.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhrProm.send("countSuplCompany="+countSuplCompany+"&suplCompany_Name=" + suplCompany_Name +"&suplCompany_CommercialName="+suplCompany_CommercialName+"&suplCompany_OtherName="
            +suplCompany_OtherName+"&suplCompany_legalForm="+suplCompany_legalForm+"&suplCompany_CEO="+suplCompany_CEO+"&suplCompany_Address="+suplCompany_Address
            +"&suplCompany_PC="+suplCompany_PC+"&suplCompany_City="+suplCompany_City+"&suplCompany_Phone="+suplCompany_Phone+
            "&suplCompany_fax="+suplCompany_fax+"&suplCompany_email="+suplCompany_email+"&suplCompany_info="+suplCompany_info+"&suplEmpl_name="+suplEmpl_name
            +"&suplEmpl_Surname="+suplEmpl_Surname+"&suplEmpl_address="+suplEmpl_address+"&suplEmpl_pc="+suplEmpl_pc+"&suplEmpl_city="+suplEmpl_city+"&suplEmpl_phone="+suplEmpl_phone+
            "&suplEmpl_fax="+suplEmpl_fax+"&suplEmpl_email="+suplEmpl_email);
        }


        function DeleteDataPromitheftiki(count) {
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
            xhrProm.open('POST', 'deletePromitheftriaEteriaData.php');
            xhrProm.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhrProm.send("count="+count);
        }




        function removeCompanyID(cnum){
            DeleteDataPromitheftiki(cnum);
            var contentID = document.getElementById('entrycol');
            contentID.removeChild(document.getElementById('entry'+cnum));
            //intTextBox = intTextBox-1; this would break it
            choiceCount = choiceCount-1;
            //intTextBox = intTextBox-1;
        }

        function clearInputsEterias(){
            document.getElementById("suplCompany_Name").value = "";
            document.getElementById("suplCompany_CommercialName").value= "";
            document.getElementById("suplCompany_OtherName").value = "";
            document.getElementById("suplCompany_legalForm").value= "";
            document.getElementById("suplCompany_CEO").value= "";
            document.getElementById("suplCompany_Address").value= "";
            document.getElementById("suplCompany_PC").value= "";
            document.getElementById("suplCompany_City").value= "";
            document.getElementById("suplCompany_Phone").value= "";
            document.getElementById("suplCompany_fax").value= "";
            document.getElementById("suplCompany_email").value= "";
            document.getElementById("suplCompany_info").value= "";
            document.getElementById("suplEmpl_name").value= "";
            document.getElementById("suplEmpl_Surname").value= "";
            document.getElementById("suplEmpl_address").value= "";
            document.getElementById("suplEmpl_pc").value= "";
            document.getElementById("suplEmpl_city").value= "";
            document.getElementById("suplEmpl_phone").value= "";
            document.getElementById("suplEmpl_fax").value= "";
            document.getElementById("suplEmpl_email").value= "";
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
            
            <form id="promitheftria-form">
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
                                            <label class="col-sm-3 control-label" for="suplCompany_Name">Επωνυμία Επιχείρησης:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" required=true id="suplCompany_Name" name="suplCompany_Name"type="text">
                                            </div>
                                        </div>

                                        <br><br>
                                        
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany_CommercialName">Εμπορική Επωνυμία Επιχείρησης:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" id="suplCompany_CommercialName" name="suplCompany_CommercialName"type="text">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany_OtherName">Άλλη Επωνυμία:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" id="suplCompany_OtherName" name="suplCompany_OtherName" type="text">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany_legalForm">Νομική Μορφή:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" required=true id="suplCompany_legalForm" name="suplCompany_legalForm" type="text">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany_CEO">Όνομα Διευθυντή:</label>
                                            <div class="col-sm-4 ">
                                                <input class="form-control"  id="suplCompany_CEO" name="suplCompany_CEO" type="text">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany_Address">Διεύθυνση:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" id="suplCompany_Address" name="suplCompany_Address" type="text">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany_PC">T.K. :</label>
                                            <div class="col-sm-2">
                                                <input class="form-control" id="suplCompany_PC" name="suplCompany_PC" type="number">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany_City">Πόλη:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" id="suplCompany_City" name="suplCompany_City" type="text">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany_Phone">Τηλέφωνο:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" id="suplCompany_Phone" name="suplCompany_Phone" type="number">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany_fax">Φάξ:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" id="suplCompany_fax" name="suplCompany_fax" type="number">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany_email">Ηλεκτρονικό Ταχυδρομείο:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" id="suplCompany_email" name="suplCompany_email" type="email">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplCompany_info">Άλλες Πληροφορίες:</label>
                                            <div class="col-sm-4">
                                                <textarea class="form-control" rows="5" id="suplCompany_info" name="suplCompany_info"></textarea>
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
                                            <label class="col-sm-3 control-label" for="suplEmpl_name">Όνομα:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" required=true id="suplEmpl_name" name="suplEmpl_name"  type="text">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplEmpl_Surname">Επίθετο:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" required=true id="suplEmpl_Surname" name="suplEmpl_Surname" type="text">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplEmpl_address">Διεύθυνση:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" id="suplEmpl_address" name="suplEmpl_address" type="text">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplEmpl_pc">T.K. :</label>
                                            <div class="col-sm-2">
                                                <input class="form-control" id="suplEmpl_pc" name="suplEmpl_pc" type="number">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplEmpl_city">Πόλη:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" id="suplEmpl_city" name="suplEmpl_city" type="text">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplEmpl_phone">Τηλέφωνο:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" required=true id="suplEmpl_phone" name="suplEmpl_phone" type="number">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplEmpl_fax">Φάξ:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" id="suplEmpl_fax" name="suplEmpl_fax" type="number">
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="suplEmpl_email">Ηλεκτρονικό Ταχυδρομείο:</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" required=true id="suplEmpl_email" name="suplEmpl_email" type="email">
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
                    <button type="button" class="btn btn-default" data-dismiss="modal" onclick="clearInputsEterias()">Close</button>
                    <button type="button" id="save_supplier_company" class="btn btn-primary" data-dismiss="modal" onclick="addCompany();" name="addentry">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
                </form>
            
            </div>
           
         
        <!--------------------------------------------------------------->
        <br><br>
        <div class="row">
            <div class="col-md-4 column"  style="text-align: left">
        	   <input id="ButtonPrevious" class="btn btn-default" type="button" value="Previous" name="Step1" onclick="handleWizardPreviousStep2to1()" />
		    </div>
            <div class="col-sm-4"></div>
		    <div class="col-md-4 column" style="text-align: right">
                <input id="ButtonNext2" class="btn btn-default" type="button" value="Next" name="Step3" onClick="handleWizardNextStep2To3()" />
		    </div>
             <?php
                print_r($_SESSION);
            ?>
        
        </div>
 
    </div> 
    
</body>