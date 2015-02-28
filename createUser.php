<html>
    <head></head>
    
    <body>
<?php 

    $db = 'epl363';
    $username = 'root';
    $password = '';

    // Create connection
    $conn = new mysqli('localhost', $username, $password, $db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected successfully";

    $userName="";
    $pass="";

    $comName="";
    $comSName="";
    $comEmail="";
    $comAddress="";
    $comPoli="";
    $comPC="";
    $comTel="";
    $comFax="";

    $CompName="";
    $CompLF="";
    $CompEmail="";
    $CompAddres="";
    $CompCity="";
    $CompPC="";
    $CompTel="";
    $CompFax="";
    $description="";
    $CompCommer="";
    $CompOtherN="";
    $CompCEO="";
    $CompCountry="";





    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $userName=$_POST["userName"];
        $pass=$_POST["pass"];
        
        $comName=$_POST["comName"];
        $comSName=$_POST["comSName"];
        $comEmail=$_POST["comEmail"];
        $comAddress=$_POST["comAddress"];
        $comPoli=$_POST["comPoli"];
        $comPC=$_POST["comPC"];
        $comTel=$_POST["comTel"];
        $comFax=$_POST["comFax"];
        
        $CompName=$_POST["CompName"];
        $CompLF=$_POST["CompLF"];
        $CompEmail=$_POST["CompEmail"];
        $CompAddres=$_POST["CompAddres"];
        $CompCity=$_POST["CompCity"];
        $CompPC=$_POST["CompPC"];
        $CompTel=$_POST["CompTel"];
        $CompFax=$_POST["CompFax"];
        $description=$_POST["description"];
        $CompCommer=$_POST["CompCommer"];
        $CompOtherN=$_POST["CompOtherN"];
        $CompCEO=$_POST["CompCEO"];
        $CompCountry=$_POST["CompCountry"];
    
        echo $CompCountry;
        
        $sql = "INSERT INTO ComPerson (Name, Surname, Address, Telephone, Fax, Email, PostCode, City) VALUES ('$comName',  '$comSName','$comAddress', '$comTel' ,'$comFax', '$comEmail' , '$comPC','$comPoli' );";
        
       $sql2 = "INSERT INTO Company (Company_Name, Lequl_State, Address, PostCode, City, Telephone, Fax, Email, info, Person, Commersial_Name, Other_Name, CEO, Country) VALUES ('$CompName',  '$CompLF', '$CompAddres' ,'$CompPC', '$CompCity' , '$CompTel','$CompFax', '$CompEmail', '$description','$comTel', '$CompCommer', '$CompOtherN', '$CompCEO', '$CompCountry');";
        
        $sql3 = "INSERT INTO Users (Username, Password, Company) VALUES ('$userName','$pass','$CompName');";
        

        if ($conn->query($sql) === TRUE and $conn->query($sql2) === TRUE and $conn->query($sql3) === TRUE) {
            echo "New record created successfully ";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            echo "Error: " . $sql2 . "<br>" . $conn->error;
            echo "Error: " . $sql3 . "<br>" . $conn->error;
        }

        $conn->close();     
    }

?>
        </body>
    </html>