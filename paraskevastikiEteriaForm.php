<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script src="jquery-1.9.1.js"></script>
    <script>
        
        $(document).ready(function(){
            $('#c1').change(function(){
                if(!this.checked)
                    $('#paraskevastiki_form').fadeIn('slow');
                else
                    $('#paraskevastiki_form').fadeOut('slow');
            });
        });
                          
    </script>

    <script>

        function PostDataPaeaskevastiki() {
            // 1. Create XHR instance - Start
            var xhr;
            if (window.XMLHttpRequest) {
                xhr = new XMLHttpRequest();
            }
            else if (window.ActiveXObject) {
                xhr = new ActiveXObject("Msxml2.XMLHTTP");
            }
            else {
                throw new Error("Ajax is not supported by this browser");
            }
            // 1. Create XHR instance - End

            // 2. Define what to do when XHR feed you the response from the server - Start
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4) {
                    if (xhr.status == 200 && xhr.status < 300) {
                        document.getElementById('asdf').innerHTML = xhr.responseText;
                        console.log("ok");
                        document.getElementById('Step1').style.display = 'none';
                        document.getElementById('Step3').style.display = 'none';
                        document.getElementById('Step4').style.display = 'none';
                        document.getElementById('Step5').style.display = 'none';
                        document.getElementById('Step2').style.display = '';

                        // Change background color on header to highlight new step
                        document.getElementById('HeaderTableStep2').style.color= '#66CCFF';
                        document.getElementById('HeaderTableStep1').style.color = '#9DA1A3';
                        document.getElementById('HeaderTableStep3').style.color = '#000000';
                        document.getElementById('HeaderTableStep4').style.color = '#000000';
                        document.getElementById('HeaderTableStep5').style.color = '#000000';
                    }
                }
            }
            // 2. Define what to do when XHR feed you the response from the server - Start

            var constCompany_Name = document.getElementById("constCompany_Name").value;
            var constCompany_CommercialName = document.getElementById("constCompany_CommercialName").value;
            var constCompany_OtherName = document.getElementById("constCompany_OtherName").value;
            var constCompany_legalForm = document.getElementById("constCompany_legalForm").value;
            var constCompany_CEO = document.getElementById("constCompany_CEO").value;
            var constCompany_Address = document.getElementById("constCompany_Address").value;
            var constCompany_PC = document.getElementById("constCompany_PC").value;
            var constCompany_City = document.getElementById("constCompany_City").value;
            var constCompany_country = document.getElementById("constCompany_country").value;
            var constCompany_Phone = document.getElementById("constCompany_Phone").value;
            var constCompany_fax = document.getElementById("constCompany_fax").value;
            var constCompany_email = document.getElementById("constCompany_email").value;
            var constCompany_info = document.getElementById("constCompany_info").value;
            var constEmpl_name = document.getElementById("constEmpl_name").value;
            var constEmpl_Surname = document.getElementById("constEmpl_Surname").value;
            var constEmpl_address = document.getElementById("constEmpl_address").value;
            var constEmpl_pc = document.getElementById("constEmpl_pc").value;
            var constEmpl_pc = document.getElementById("constEmpl_city").value;
            var constEmpl_phone = document.getElementById("constEmpl_phone").value;
            var constEmpl_fax = document.getElementById("constEmpl_fax").value;
            var constEmpl_email = document.getElementById("constEmpl_email").value;



            console.log(constCompany_CommercialName);
            // 3. Specify your action, location and Send to the server - Start
            xhr.open('POST', 'getParaskevastikiEteriaData11.php');
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send("constCompany_Name=" + constCompany_Name +"&constCompany_CommercialName="+constCompany_CommercialName+"&constCompany_OtherName="
                +constCompany_OtherName+"&constCompany_legalForm="+constCompany_legalForm+"&constCompany_CEO="+constCompany_CEO+"&constCompany_Address="+constCompany_Address
                +"&constCompany_PC="+constCompany_PC+"&constCompany_City="+constCompany_City+"&constCompany_country="+constCompany_country+"&constCompany_Phone="+constCompany_Phone+
                "&constCompany_fax="+constCompany_fax+"&constCompany_email="+constCompany_email+"&constCompany_info="+constCompany_info+"&constEmpl_name="+constEmpl_name
                +"&constEmpl_Surname="+constEmpl_Surname+"&constEmpl_address="+constEmpl_address+"&constEmpl_pc="+constEmpl_pc+"&constEmpl_pc="+constEmpl_pc+"&constEmpl_phone="+constEmpl_phone+
                "&constEmpl_fax="+constEmpl_fax+"&constEmpl_email="+constEmpl_email);
        }

    </script>

</head>
    
<body>
    <div class="container">
        
        <div class="form-group">
            <label class="col-sm-4 control-label" for="c1">Εργάζεστε στην παρασκευαστική εταιρία;</label>
                <div class="col-sm-4">
                    <input type="checkbox" name="c1" id="c1">
                </div>
        </div>
        
        <form>
        <div class="col-md-12 column" name="paraskevastiki_form"> 
            
                <h3>Στοιχεία Παρασκευαστικής Εραιρίας</h3>
                <br>
            
            
            <div class="row">
                <h4>Στποχεία Εταιρίας</h4>
                <hr>
                <br>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="constCompany_Name">Επωνυμία Επιχείρησης:</label>
                    <div class="col-sm-4">
                        <input class="form-control" id="constCompany_Name" required="true" name="constCompany_Name" type="text">
                    </div>
                </div>
                
                <br><br>
                
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="constCompany_CommercialName">Εμπορική Επωνυμία Επιχείρησης:</label>
                    <div class="col-sm-4">
                        <input class="form-control" id="constCompany_CommercialName" name="constCompany_CommercialName"type="text">
                    </div>
                </div>

                <br><br>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="constCompany_OtherName">Άλλη Επωνυμία:</label>
                    <div class="col-sm-4">
                        <input class="form-control" id="constCompany_OtherName" name="constCompany_OtherName" type="text">
                    </div>
                </div>

                <br><br>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="constCompany_legalForm">Νομική Μορφή:</label>
                    <div class="col-sm-4">
                        <input class="form-control" id="constCompany_legalForm" required="true"  name="constCompany_legalForm" type="text">
                    </div>
                </div>

                <br><br>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="constCompany_CEO">Όνομα Διευθυντή:</label>
                    <div class="col-sm-4 ">
                        <input class="form-control" id="constCompany_CEO" required="true" name="constCompany_CEO" type="text">
                    </div>
                </div>

                <br><br>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="constCompany_Address">Διεύθυνση:</label>
                    <div class="col-sm-4">
                        <input class="form-control" id="constCompany_Address" name="constCompany_Address" type="text">
                    </div>
                </div>

                <br><br>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="constCompany_PC">T.K. :</label>
                    <div class="col-sm-2">
                        <input class="form-control" id="constCompany_PC" name="constCompany_PC" type="number">
                    </div>
                </div>

                <br><br>
                
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="constCompany_City">Πόλη:</label>
                    <div class="col-sm-4">
                        <input class="form-control" id="constCompany_City" name="constCompany_City" type="text">
                    </div>
                </div>

                <br><br>

                <div class="form-group">
                    <label class="col-sm-3 control-label"  name="constCompany_country" for="constCompany_country">Χώρα:</label>
                        <div class="col-sm-4">
                            <select class="form-control" name="constCompany_country" id="constCompany_country">
                                <option value="">--Choose your Country--</option>
                                <option value="AF">Afghanistan</option>
                                <option value="AX">Εland Islands</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                                <option value="AS">American Samoa</option>
                                <option value="AD">Andorra</option>
                                <option value="AO">Angola</option>
                                <option value="AI">Anguilla</option>
                                <option value="AQ">Antarctica</option>
                                <option value="AG">Antigua and Barbuda</option>
                                <option value="AR">Argentina</option>
                                <option value="AM">Armenia</option>
                                <option value="AW">Aruba</option>
                                <option value="AU">Australia</option>
                                <option value="AT">Austria</option>
                                <option value="AZ">Azerbaijan</option>
                                <option value="BS">Bahamas</option>
                                <option value="BH">Bahrain</option>
                                <option value="BD">Bangladesh</option>
                                <option value="BB">Barbados</option>
                                <option value="BY">Belarus</option>
                                <option value="BE">Belgium</option>
                                <option value="BZ">Belize</option>
                                <option value="BJ">Benin</option>
                                <option value="BM">Bermuda</option>
                                <option value="BT">Bhutan</option>
                                <option value="BO">Bolivia</option>
                                <option value="BA">Bosnia and Herzegovina</option>
                                <option value="BW">Botswana</option>
                                <option value="BV">Bouvet Island</option>
                                <option value="BR">Brazil</option>
                                <option value="IO">British Indian Ocean Territory</option>
                                <option value="BN">Brunei Darussalam</option>
                                <option value="BG">Bulgaria</option>
                                <option value="BF">Burkina Faso</option>
                                <option value="BI">Burundi</option>
                                <option value="KH">Cambodia</option>
                                <option value="CM">Cameroon</option>
                                <option value="CA">Canada</option>
                                <option value="CV">Cape Verde</option>
                                <option value="KY">Cayman Islands</option>
                                <option value="CF">Central African Republic</option>
                                <option value="TD">Chad</option>
                                <option value="CL">Chile</option>
                                <option value="CN">China</option>
                                <option value="CX">Christmas Island</option>
                                <option value="CC">Cocos (Keeling) Islands</option>
                                <option value="CO">Colombia</option>
                                <option value="KM">Comoros</option>
                                <option value="CG">Congo</option>
                                <option value="CD">Congo, The Democratic Republic of The</option>
                                <option value="CK">Cook Islands</option>
                                <option value="CR">Costa Rica</option>
                                <option value="CI">Cote D'ivoire</option>
                                <option value="HR">Croatia</option>
                                <option value="CU">Cuba</option>
                                <option value="CY">Cyprus</option>
                                <option value="CZ">Czech Republic</option>
                                <option value="DK">Denmark</option>
                                <option value="DJ">Djibouti</option>
                                <option value="DM">Dominica</option>
                                <option value="DO">Dominican Republic</option>
                                <option value="EC">Ecuador</option>
                                <option value="EG">Egypt</option>
                                <option value="SV">El Salvador</option>
                                <option value="GQ">Equatorial Guinea</option>
                                <option value="ER">Eritrea</option>
                                <option value="EE">Estonia</option>
                                <option value="ET">Ethiopia</option>
                                <option value="FK">Falkland Islands (Malvinas)</option>
                                <option value="FO">Faroe Islands</option>
                                <option value="FJ">Fiji</option>
                                <option value="FI">Finland</option>
                                <option value="FR">France</option>
                                <option value="GF">French Guiana</option>
                                <option value="PF">French Polynesia</option>
                                <option value="TF">French Southern Territories</option>
                                <option value="GA">Gabon</option>
                                <option value="GM">Gambia</option>
                                <option value="GE">Georgia</option>
                                <option value="DE">Germany</option>
                                <option value="GH">Ghana</option>
                                <option value="GI">Gibraltar</option>
                                <option value="GR">Greece</option>
                                <option value="GL">Greenland</option>
                                <option value="GD">Grenada</option>
                                <option value="GP">Guadeloupe</option>
                                <option value="GU">Guam</option>
                                <option value="GT">Guatemala</option>
                                <option value="GG">Guernsey</option>
                                <option value="GN">Guinea</option>
                                <option value="GW">Guinea-bissau</option>
                                <option value="GY">Guyana</option>
                                <option value="HT">Haiti</option>
                                <option value="HM">Heard Island and Mcdonald Islands</option>
                                <option value="VA">Holy See (Vatican City State)</option>
                                <option value="HN">Honduras</option>
                                <option value="HK">Hong Kong</option>
                                <option value="HU">Hungary</option>
                                <option value="IS">Iceland</option>
                                <option value="IN">India</option>
                                <option value="ID">Indonesia</option>
                                <option value="IR">Iran, Islamic Republic of</option>
                                <option value="IQ">Iraq</option>
                                <option value="IE">Ireland</option>
                                <option value="IM">Isle of Man</option>
                                <option value="IL">Israel</option>
                                <option value="IT">Italy</option>
                                <option value="JM">Jamaica</option>
                                <option value="JP">Japan</option>
                                <option value="JE">Jersey</option>
                                <option value="JO">Jordan</option>
                                <option value="KZ">Kazakhstan</option>
                                <option value="KE">Kenya</option>
                                <option value="KI">Kiribati</option>
                                <option value="KP">Korea, Democratic People's Republic of</option>
                                <option value="KR">Korea, Republic of</option>
                                <option value="KW">Kuwait</option>
                                <option value="KG">Kyrgyzstan</option>
                                <option value="LA">Lao People's Democratic Republic</option>
                                <option value="LV">Latvia</option>
                                <option value="LB">Lebanon</option>
                                <option value="LS">Lesotho</option>
                                <option value="LR">Liberia</option>
                                <option value="LY">Libyan Arab Jamahiriya</option>
                                <option value="LI">Liechtenstein</option>
                                <option value="LT">Lithuania</option>
                                <option value="LU">Luxembourg</option>
                                <option value="MO">Macao</option>
                                <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                                <option value="MG">Madagascar</option>
                                <option value="MW">Malawi</option>
                                <option value="MY">Malaysia</option>
                                <option value="MV">Maldives</option>
                                <option value="ML">Mali</option>
                                <option value="MT">Malta</option>
                                <option value="MH">Marshall Islands</option>
                                <option value="MQ">Martinique</option>
                                <option value="MR">Mauritania</option>
                                <option value="MU">Mauritius</option>
                                <option value="YT">Mayotte</option>
                                <option value="MX">Mexico</option>
                                <option value="FM">Micronesia, Federated States of</option>
                                <option value="MD">Moldova, Republic of</option>
                                <option value="MC">Monaco</option>
                                <option value="MN">Mongolia</option>
                                <option value="ME">Montenegro</option>
                                <option value="MS">Montserrat</option>
                                <option value="MA">Morocco</option>
                                <option value="MZ">Mozambique</option>
                                <option value="MM">Myanmar</option>
                                <option value="NA">Namibia</option>
                                <option value="NR">Nauru</option>
                                <option value="NP">Nepal</option>
                                <option value="NL">Netherlands</option>
                                <option value="AN">Netherlands Antilles</option>
                                <option value="NC">New Caledonia</option>
                                <option value="NZ">New Zealand</option>
                                <option value="NI">Nicaragua</option>
                                <option value="NE">Niger</option>
                                <option value="NG">Nigeria</option>
                                <option value="NU">Niue</option>
                                <option value="NF">Norfolk Island</option>
                                <option value="MP">Northern Mariana Islands</option>
                                <option value="NO">Norway</option>
                                <option value="OM">Oman</option>
                                <option value="PK">Pakistan</option>
                                <option value="PW">Palau</option>
                                <option value="PS">Palestinian Territory, Occupied</option>
                                <option value="PA">Panama</option>
                                <option value="PG">Papua New Guinea</option>
                                <option value="PY">Paraguay</option>
                                <option value="PE">Peru</option>
                                <option value="PH">Philippines</option>
                                <option value="PN">Pitcairn</option>
                                <option value="PL">Poland</option>
                                <option value="PT">Portugal</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="QA">Qatar</option>
                                <option value="RE">Reunion</option>
                                <option value="RO">Romania</option>
                                <option value="RU">Russian Federation</option>
                                <option value="RW">Rwanda</option>
                                <option value="SH">Saint Helena</option>
                                <option value="KN">Saint Kitts and Nevis</option>
                                <option value="LC">Saint Lucia</option>
                                <option value="PM">Saint Pierre and Miquelon</option>
                                <option value="VC">Saint Vincent and The Grenadines</option>
                                <option value="WS">Samoa</option>
                                <option value="SM">San Marino</option>
                                <option value="ST">Sao Tome and Principe</option>
                                <option value="SA">Saudi Arabia</option>
                                <option value="SN">Senegal</option>
                                <option value="RS">Serbia</option>
                                <option value="SC">Seychelles</option>
                                <option value="SL">Sierra Leone</option>
                                <option value="SG">Singapore</option>
                                <option value="SK">Slovakia</option>
                                <option value="SI">Slovenia</option>
                                <option value="SB">Solomon Islands</option>
                                <option value="SO">Somalia</option>
                                <option value="ZA">South Africa</option>
                                <option value="GS">South Georgia and The South Sandwich Islands</option>
                                <option value="ES">Spain</option>
                                <option value="LK">Sri Lanka</option>
                                <option value="SD">Sudan</option>
                                <option value="SR">Suriname</option>
                                <option value="SJ">Svalbard and Jan Mayen</option>
                                <option value="SZ">Swaziland</option>
                                <option value="SE">Sweden</option>
                                <option value="CH">Switzerland</option>
                                <option value="SY">Syrian Arab Republic</option>
                                <option value="TW">Taiwan, Province of China</option>
                                <option value="TJ">Tajikistan</option>
                                <option value="TZ">Tanzania, United Republic of</option>
                                <option value="TH">Thailand</option>
                                <option value="TL">Timor-leste</option>
                                <option value="TG">Togo</option>
                                <option value="TK">Tokelau</option>
                                <option value="TO">Tonga</option>
                                <option value="TT">Trinidad and Tobago</option>
                                <option value="TN">Tunisia</option>
                                <option value="TR">Turkey</option>
                                <option value="TM">Turkmenistan</option>
                                <option value="TC">Turks and Caicos Islands</option>
                                <option value="TV">Tuvalu</option>
                                <option value="UG">Uganda</option>
                                <option value="UA">Ukraine</option>
                                <option value="AE">United Arab Emirates</option>
                                <option value="GB">United Kingdom</option>
                                <option value="US">United States</option>
                                <option value="UM">United States Minor Outlying Islands</option>
                                <option value="UY">Uruguay</option>
                                <option value="UZ">Uzbekistan</option>
                                <option value="VU">Vanuatu</option>
                                <option value="VE">Venezuela</option>
                                <option value="VN">Viet Nam</option>
                                <option value="VG">Virgin Islands, British</option>
                                <option value="VI">Virgin Islands, U.S.</option>
                                <option value="WF">Wallis and Futuna</option>
                                <option value="EH">Western Sahara</option>
                                <option value="YE">Yemen</option>
                                <option value="ZM">Zambia</option>
                                <option value="ZW">Zimbabwe</option>
                            </select>
                        </div>
                </div>

                <br><br>
              
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="constCompany_Phone">Τηλέφωνο:</label>
                    <div class="col-sm-4">
                        <input class="form-control" name="constCompany_Phone" required="true" id="constCompany_Phone" type="number">
                    </div>
                </div>

                <br><br>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="constCompany_fax">Φάξ:</label>
                    <div class="col-sm-4">
                        <input class="form-control" name="constCompany_fax" id="constCompany_fax" type="number">
                    </div>
                </div>

                <br><br>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="constCompany_email">Ηλεκτρονικό Ταχυδρομείο:</label>
                    <div class="col-sm-4">
                        <input class="form-control" name="constCompany_email"  required="true" id="constCompany_email" type="email">
                    </div>
                </div>

                <br><br>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="constCompany_info">Άλλες Πληροφορίες:</label>
                    <div class="col-sm-4">
                        <textarea class="form-control" rows="5" name="constCompany_info" id="constCompany_info"></textarea>
                    </div>
                </div>

                <br><br>
                
            </div>
            <br><br>
            <!--------------------------------------------------------------------------------------------------------------------------------->
            
            <div class="row">
                <h4>Στοιχεία Υπεύθυνου Επικοινωνίας</h4><br>
                <hr>
                <br>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="constEmpl_name">Όνομα:</label>
                    <div class="col-sm-4">
                        <input class="form-control" name="constEmpl_name" required="true" id="constEmpl_name" type="text">
                    </div>
                </div>

                <br><br>
            
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="constEmpl_Surname">Επίθετο:</label>
                    <div class="col-sm-4">
                        <input class="form-control" name="constEmpl_Surname" required="true" id="constEmpl_Surname" type="text">
                    </div>
                </div>
                
                <br><br>
                    
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="constEmpl_address">Διεύθυνση:</label>
                    <div class="col-sm-4">
                        <input class="form-control" name="constEmpl_address" id="constEmpl_address" type="text">
                    </div>
                </div>
                
                <br><br>
                
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="constEmpl_pc">T.K. :</label>
                    <div class="col-sm-2">
                        <input class="form-control" name="constEmpl_pc" id="constEmpl_pc" type="number">
                    </div>
                </div>
                
                <br><br>
                   
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="constEmpl_city">Πόλη:</label>
                    <div class="col-sm-4">
                        <input class="form-control" name="constEmpl_city" id="constEmpl_city" type="text">
                    </div>
                </div>
                    
                <br><br>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="constEmpl_phone">Τηλέφωνο:</label>
                    <div class="col-sm-4">
                        <input class="form-control" name="constEmpl_phone" required="true" id="constEmpl_phone" type="number">
                    </div>
                </div>
                
                <br><br>
                    
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="constEmpl_fax">Φάξ:</label>
                    <div class="col-sm-4">
                        <input class="form-control" name="constEmpl_fax" id="constEmpl_fax" type="number">
                    </div>
                </div>
                    
                <br><br>
                
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="constEmpl_email">Ηλεκτρονικό Ταχυδρομείο:</label>
                    <div class="col-sm-4">
                        <input class="form-control" name="constEmpl_email" required="true" id="constEmpl_email" type="email">
                    </div>

                </div>
                
                <br><br>
         
        </div>
            </div>
             <br><br>
            <div class="row">
                <div class="col-md-4 column"  style="text-align: left">
                   <input id="ButtonPrevious1" class="btn btn-default" type="button" value="Previous"  disabled="disabled" name=""! />
                </div>
                <div class="col-sm-4"></div>
                <div class="col-md-4 column" style="text-align: right">
                    <input id="ButtonNext1" class="btn btn-default" class="paraskevastiki_button" type="button" value="Next" name="Step2" onclick="PostDataPaeaskevastiki()"/>
                </div>
            </div>
        </form>
        
    </div>


    
</body>
    
</html>
    