    <?php

    $servername = "localhost";
    $db = 'teedb';
    $username = 'root';
    $password = '';

    $user=$_GET["user"];
    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);

    $constCompany_Name="";
    $constCompany_CommercialName="";
    $constCompany_OtherName="";    
    $constCompany_legalForm="";
    $constCompany_CEO="";
    $constCompany_Address="";
    $constCompany_PC="";
    $constCompany_City="";
    $constCompany_Country="";
    $constCompany_Tel="";
    $constCompany_Fax="";
    $constCompany_Email="";
    $constCompany_Info="";

    $constEmpl_Name="";
    $constEmpl_Surname="";
    $constEmpl_Address="";
    $constEmpl_PC="";
    $constEmpl_City="";
    $constEmpl_Tel="";
    $constEmpl_Fax="";    
    $constEmpl_Email="";    
        
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $constCompany_Name=$_POST["constCompany-Name"];
        $constCompany_CommercialName=$_POST["constCompany-CommercialName"];
        $constCompany_OtherName=$_POST["constCompany-OtherName"];
        $constCompany_legalForm=$_POST["constCompany-legalForm"];
        $constCompany_CEO=$_POST["constCompany-CEO"];
        $constCompany_Address=$_POST["constCompany-Address"];
        $constCompany_PC=$_POST["constCompany-PC"];
        $constCompany_City=$_POST["constCompany-City"];
        $constCompany_Country=$_POST["constCompany-country"];
        $constCompany_Tel=$_POST["constCompany-Phone"];
        $constCompany_Fax=$_POST["constCompany-fax"];
        $constCompany_Email=$_POST["constCompany-email"];
        $constCompany_Info=$_POST["constCompany-info"];
        
        $constEmpl_Name=$_POST["constEmpl-name"];
        $constEmpl_Surname=$_POST["constEmpl-Surname"];
        $constEmpl_Address=$_POST["constEmpl-address"];
        $constEmpl_PC=$_POST["constEmpl-pc"];
        $constEmpl_City=$_POST["constEmpl-city"];
        $constEmpl_Tel=$_POST["constEmpl-phone"];
        $constEmpl_Fax=$_POST["constEmpl-fax"];
        $constEmpl_Email=$_POST["constEmpl-email"];
    

    // $sql = "INSERT INTO company (Company_Name, Lequl_State, Address, PostCode, City, Telephone, Fax, Email, info,Type, Person, Commersial_Name, Other_Name, CEO, Country) VALUES (N'$constCompany_Name',N'$constCompany_legalForm',N'$constCompany_Address','$constCompany_PC',N'$constCompany_City','$constCompany_Tel','$constCompany_Fax',N'$constCompany_Email',N'$constCompany_Info',0,'$constEmpl_Tel',N'$constCompany_CommercialName',N'$constCompany_OtherName',N'$constCompany_CEO',N'$constCompany_Country');";

    // $sql2 = "INSERT INTO ComPerson (Name, Surname, Address, Telephone, Fax, Email, PostCode, City) VALUES (N'$constEmpl_Name',  N'$constEmpl_Surname',N'$constEmpl_Address', '$constEmpl_Tel' ,'$constEmpl_Fax', '$constEmpl_Email' , '$constEmpl_PC',N'$constEmpl_City' );";
        

//        if ($conn->query($sql) === TRUE and $conn->query($sql2)) {
//            
//        } else {
//            echo "Error: " . $sql . "<br>" . $conn->error;
//            echo "Error: " . $sql2 . "<br>" . $conn->error;
//            echo "Error: " . $sql3 . "<br>" . $conn->error;
//        }

        $conn->close();     
   
        header( "location: profile5.php?user=$user");
    }
    
?>
