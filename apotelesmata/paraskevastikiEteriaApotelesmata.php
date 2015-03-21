    <?php 
        

$con =mysql_connect("localhost", "root", "");
            mysql_select_db("teedb");
            mysql_query ("set character_set_results='utf8'");

            if (!$con)
                echo "Cannot connect: ".mysql_error();
            else{
                mysql_select_db("root", $con);
                mysql_query ("set character_set_results='utf8'");
            
            }
        $date=htmlspecialchars($_GET["date"]);
        $product=htmlspecialchars($_GET["name"]);
        $company=htmlspecialchars($_GET["company"]);
        
       
        $sql1 = mysql_query("SELECT DISTINCT *  FROM `company` Where Company.Company_Name='".$company."'",$con);
        $row1 = mysql_fetch_array($sql1);
   
        $sql2 = mysql_query("SELECT DISTINCT comperson.* FROM `comperson`,`company` Where Company.Company_Name='".$company."' and comperson.Telephone=company.Person",$con);
        $row2 = mysql_fetch_array($sql2);

        /*if ($result1->num_rows == 1) {
                $row1 = $result1->fetch_assoc();
                echo $row1['Person'];
        }
        else{
                echo "Error";
            }
        if ($result2->num_rows == 1) {
                $row2 = $result2->fetch_assoc();
        }
        else{
                echo $result2->num_rows;
        }*/
            
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
</head>
    
<body style="height:60%">
    <div class="container">
        <div class="col-md-12 column" id="paraskevastiki_form"> 
            <div class="row">
                <div class="col-md-12 column" >
                    <div class="col-md-6 column" >
                        <h4 style="color: #c9d0d4; font-family: 'Helvetica Neue', sans-serif;  font-weight: 100; letter-spacing: 1px; padding: 0 0 5px;" >Στοιχεία Εταιρίας</h4>
                    </div>
                    <div class="col-md-6 column">
                        <h4 style="color: #c9d0d4; font-family: 'Helvetica Neue', sans-serif;  font-weight: 100; letter-spacing: 1px; padding: 0 0 5px;" >Στοιχεία Υπεύθυνου Επικοινωνίας</h4><br>
                    </div>
                </div>
                    <br><br>
                    <div class="col-md-12 column">
                        <label class="col-sm-3 control-label" for="constCompany-Name">Επωνυμία Επιχείρησης:</label>
                        <label  class="col-sm-3" id="constCompany-Name" ><?php echo $row1["Company_Name"];?></label>
                        <label class="col-sm-3 control-label" for="constEmpl-name">Όνομα:</label>
                        <label  class="col-sm-3" id="constEmpl-name" ><?php  echo  $row2["Name"];?></label>

                    </div>
                    <br>
                    <div class="col-md-12 column">
                        <label class="col-sm-3 control-label" for="constCompany-CommercialName">Εμπορική Επωνυμία Επιχείρησης:</label>
                        <label  class="col-sm-3" id="constCompany-CommercialName"><?php echo $row1["Commersial_Name"];?></label>
                        <label class="col-sm-3 control-label" for="constEmpl-Surname">Επίθετο:</label>
                        <label  class="col-sm-3" id="constEmpl-Surname" ><?php  echo  $row2["Surname"];?></label>
                    </div>
                    <br>
                    <div class="col-md-12 column">
                        <label class="col-sm-3 control-label" for="constCompany-OtherName">Άλλη Επωνυμία:</label>
                        <label  class="col-sm-3" id="constCompany-OtherName" ><?php echo $row1["Other_Name"];?></label>
                        <label class="col-sm-3 control-label" for="constEmpl-address">Διεύθυνση:</label>
                        <label  class="col-sm-3" id="constEmpl-address" ><?php  echo  $row2["Address"];?></label>
                    </div>
                    <br>
                    <div class="col-md-12 column">
                        <label class="col-sm-3 control-label" for="constCompany-legalForm">Νομική Μορφή:</label>
                        <label  class="col-sm-3" id="constCompany-legalForm" ><?php echo $row1["Lequl_State"];?></label>
                         <label class="col-sm-3 control-label" for="constEmpl-pc">T.K. :</label>
                        <label  class="col-sm-3" id="constEmpl-pc" ><?php  echo  $row2["PostCode"];?></label>

                    </div>
                    <br><br>
                    <div class="col-md-12 column">
                        <label class="col-sm-3 control-label" for="constCompany-CEO">Όνομα Διευθυντή:</label>
                        <label  class="col-sm-3" id="constCompany-CEO" ><?php echo $row1["CEO"];?></label>
                        <label class="col-sm-3 control-label" for="constEmpl-city">Πόλη:</label>
                        <label  class="col-sm-3" id="constEmpl-city" ><?php  echo  $row2["City"];?></label>

                    </div>
                    <br>
                    <div class="col-md-12 column">
                        <label class="col-sm-3 control-label" for="constCompany-Address">Διεύθυνση:</label>
                        <label  class="col-sm-3" id="constCompany-Address" ><?php echo $row1["Address"];?></label>
                        <label class="col-sm-3 control-label" for="constEmpl-fax">Φάξ:</label>
                        <label  class="col-sm-3" id="constEmpl-fax" ><?php  echo  $row2["Fax"];?></label>
                    </div>
                    <br>
                    <div class="col-md-12 column">
                        <label class="col-sm-3 control-label" for="constCompany-PC">T.K. :</label>
                        <label  class="col-sm-3" id="constCompany-PC" ><?php echo $row1["PostCode"];?></label>
                         <label class="col-sm-3 control-label" for="constEmpl-phone">Τηλέφωνο:</label>
                        <label  class="col-sm-3" id="constEmpl-phone" ><?php  echo  $row2["Telephone"];?></label>

                    </div>

                    <br>

                    <div class="col-md-12 column">
                        <label class="col-sm-3 control-label" for="constCompany-City">Πόλη:</label>
                        <label  class="col-sm-3" id="constCompany-City" ><?php echo $row1["City"];?></label>
                        <label class="col-sm-3 control-label" for="constEmpl-email">Ηλεκτρονικό Ταχυδρομείο:</label>
                        <label  class="col-sm-3" id="constEmpl-email"><?php  echo  $row2["Email"];?></label>
                    </div>
                    <br>
                    <div class="col-md-12 column">
                        <label class="col-sm-3 control-label" for="constCompany-country">Χώρα:</label>
                        <label  class="col-sm-3" id="constCompany-country" ><?php echo $row1["Country"];?></label>
                    </div>
                    <br>
                    <div class="col-md-12 column">
                        <label class="col-sm-3 control-label" for="constCompany-Phone">Τηλέφωνο:</label>
                        <label  class="col-sm-3" id="constCompany-Phone" ><?php echo $row1["Telephone"];?></label>
                    </div>
                    <br>
                    <div class="col-md-12 column">
                        <label class="col-sm-3 control-label" for="constCompany-fax">Φάξ:</label>
                        <label  class="col-sm-3" id="constCompany-fax"><?php echo $row1["Fax"];?></label>
                    </div>
                    <br>
                    <div class="col-md-12 column">
                        <label class="col-sm-3 control-label" for="constCompany-email">Ηλεκτρονικό Ταχυδρομείο:</label>
                        <label  class="col-sm-3" id="constCompany-email"><?php echo $row1["Email"];?></label>
                    </div>
                    <br><br>
                    <div class="col-md-12 column">
                        <label class="col-sm-3 control-label" for="constCompany-info">Άλλες Πληροφορίες:</label>
                        <label class="col-sm-3" id="constCompany-info"><?php echo $row1["info"];?></label>
                    </div>
                    <br>
            </div>
            <br><br>
        </div>
    </div>
           
    
    
</body>
    
</html>
    