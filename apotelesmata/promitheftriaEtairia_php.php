
<?php

if($_POST){
        $con =mysql_connect("localhost", "root", "");
        mysql_select_db("teedb");
        mysql_query ("set character_set_results='utf8'");

        if (!$con)
                echo "Cannot connect: ".mysql_error();
        else{
                mysql_select_db("root", $con);
                mysql_query ("set character_set_results='utf8'");
        }
                

	$num	= filter_var($_POST["num"], FILTER_SANITIZE_STRING);
	$companyName		= filter_var($_POST["companyName"], FILTER_SANITIZE_STRING);
    
    

   


    
   $sql = mysql_query("SELECT Distinct Company.* FROM `Company` WHERE Company.Company_Name='".$companyName."'",$con);
    $row = mysql_fetch_array($sql);
    
    if ($row) {
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
  $sql1 = mysql_query("SELECT Distinct Comperson.* FROM `Comperson` WHERE Comperson.Telephone='".$Person."'",$con);
    $row1 = mysql_fetch_array($sql1);
    
    if ($row1) {
            $NamePer=$row1["Name"]; 
            $SurnamePer=$row1["Surname"];
            $AddressPer=$row1["Address"]; 
            $TelephonePer=$row1["Telephone"]; 
            $CityPer=$row1["City"];  
            $FaxPer=$row1["Fax"]; 
            $EmailPer=$row1["Email"]; 
            $PostCodePer=$row1["PostCode"];

    } 
    $output = json_encode(array('Name'=>$Name, 'Ls' => $Ls,'Address'=>$Address,'PostCode'=>$PostCode,'City'=>$City,'Telephone'=>$Telephone,'Fax'=>$Fax,'Email'=>$Email,'info'=>$info,'Type'=>$Type,'Person'=>$Person,'ComName'=>$ComName,'Oname'=>$Oname,'Ceo'=>$Ceo,'Country'=>$Country,'NamePer'=>$NamePer,'SurnamePer'=>$SurnamePer,'AddressPer'=>$AddressPer,'TelephonePer'=>$TelephonePer,'CityPer'=>$CityPer,'FaxPer'=>$FaxPer,'EmailPer'=>$EmailPer,'PostCodePer'=>$PostCodePer));

   

		die($output);
	$con->close(); 
}

?>