
<?php
if($_POST){
    ini_set('default_charset','utf-8');
    $db = 'teedb';
    $username = 'root';
    $password = '';

    // Create connection
    $conn = new mysqli('localhost', $username, $password, $db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
		
		$output = json_encode(array( //create JSON data
			'type'=>'error', 
			'text' => 'Sorry Request must be Ajax POST'
		));
		die($output); //exit script outputting json data
    } 
	
	//Sanitize input data using PHP filter_var().
	$num	= filter_var($_POST["num"], FILTER_SANITIZE_STRING);
	$companyName		= filter_var($_POST["companyName"], FILTER_SANITIZE_STRING);
    $productName		= filter_var($_POST["productName"], FILTER_SANITIZE_STRING);
    
    $sql = "SELECT Distinct Company.* FROM `Company` ";
    $sql .="WHERE Company.Company_Name=$companyName";
    $result = $conn->query($sql); 
    if ($result->num_rows == 1) {
            // output data of each row
            $row = $result->fetch_assoc();
            $Name=$row["Company_Name"]; 
            $Ls=$row["Lequl_State"];
            $Address=$row["Address"]; 
            $PostCode=$row["PostCode"]; 
            $City=$row["City"]; 
            $Telephone=$row["Telephone"]; 
            $Fax=$row["Fax"]; 
            $Email=$row["Email"]; 
            $info=$row["info"];
            $Type=$row["Type"];
            $Person=$row["Person"];
            $ComName=$row["Commersial_Name"];
            $Oname=$row["Other_Name"]; 
            $Ceo=$row["CEO"]; 
            $Country=$row["Country"]; 
             } 
             else {
                    echo "0 results";
                }
               
    
    $output = json_encode(array('Name'=>$Name, 'Ls' => $Ls,'Address'=>$Address,'PostCode'=>$PostCode,'City'=>$City,'Telephone'=>$Telephone,'Fax'=>$Fax,'Email'=>$Email,'info'=>$info,'Type'=>$Type,'Person'=>$Person,'ComName'=>$ComName,'Oname'=>$Oname,'Ceo'=>$Ceo,'Country'=>$Country));
		die($output);
	$conn->close(); 
}

?>