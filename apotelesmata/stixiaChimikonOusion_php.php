
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
	$Cas	= filter_var($_POST["Cas"], FILTER_SANITIZE_STRING);
    
    

   


    $sql = mysql_query("SELECT Distinct substance.* FROM `substance` WHERE substance.Cas='".$Cas."'",$con);
    $row = mysql_fetch_array($sql);
    
  if ($row) {
            $Name=$row["Name"]; 
            $Cas=$row["Cas"];
            $Ec=$row["Ec"]; 
            $Iupac=$row["Iupac"]; 
            $Oname=$row["Other_Name"]; 
            $Clp=$row["Clp"]; 
            $Sort=$row["Sort"]; 
            
    } 
  
    $output = json_encode(array('Name'=>$Name, 'Cas' => $Cas,'Ec'=>$Ec,'Iupac'=>$Iupac,'Oname'=>$Oname,'Clp'=>$Clp,'Sort'=>$Sort));

    die($output);
	/*$con->close();*/ 
}

?>