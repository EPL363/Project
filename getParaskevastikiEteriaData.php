<?php
if($_POST){
    ini_set('default_charset','utf-8');

	//check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
		
		$output = json_encode(array( //create JSON data
			'type'=>'error', 
			'text' => 'Sorry Request must be Ajax POST'
		));
		die($output); //exit script outputting json data
    } 
	
	//Sanitize input data using PHP filter_var().
    
    $constCompany_Name= filter_var($_POST["constCompany_Name"], FILTER_SANITIZE_STRING);
    $constCompany_CommercialName= filter_var($_POST["constCompany_CommercialName"], FILTER_SANITIZE_STRING);
    $constCompany_OtherName= filter_var($_POST["constCompany_OtherName"], FILTER_SANITIZE_STRING);    
    $constCompany_legalForm= filter_var($_POST["constCompany_legalForm"], FILTER_SANITIZE_STRING);
    $constCompany_CEO= filter_var($_POST["constCompany_CEO"], FILTER_SANITIZE_STRING);
    $constCompany_Address= filter_var($_POST["constCompany_Address"]);
    $constCompany_PC= filter_var($_POST["constCompany_PC"]);
    $constCompany_City= filter_var($_POST["constCompany_City"], FILTER_SANITIZE_STRING);
    $constCompany_Country= filter_var($_POST["constCompany_Country"], FILTER_SANITIZE_STRING);
    $constCompany_Tel= filter_var($_POST["constCompany_Tel"]);
    $constCompany_Fax= filter_var($_POST["constCompany_Fax"]);
    $constCompany_Email= filter_var($_POST["constCompany_Email"], FILTER_VALIDATE_EMAIL);
    $constCompany_Info= filter_var($_POST["constCompany_Info"]);

    $constEmpl_Name= filter_var($_POST["constEmpl_Name"], FILTER_SANITIZE_STRING);
    $constEmpl_Surname= filter_var($_POST["constEmpl_Surname"], FILTER_SANITIZE_STRING);
    $constEmpl_Address= filter_var($_POST["constEmpl_Address"]);
    $constEmpl_PC= filter_var($_POST["constEmpl_PC"]);
    $constEmpl_City= filter_var($_POST["constEmpl_City"], FILTER_SANITIZE_STRING);
    $constEmpl_Tel= filter_var($_POST["constEmpl_Tel"]);
    $constEmpl_Fax= filter_var($_POST["constEmpl_Fax"]);    
    $constEmpl_Email= filter_var($_POST["constEmpl_Email"],FILTER_VALIDATE_EMAIL);    

	
	
}

?>