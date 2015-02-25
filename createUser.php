<html>
    <head></head>
    
    <body>
<?php 

    $servername = "localhost";
    $username = "";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

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
        $CompCountry=$_POST["CompCountry"];
        $CompTel=$_POST["CompTel"];
        $CompFax=$_POST["CompFax"];
        $description=$_POST["description"];
        
        $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();     
    }

?>
        </body>
    </html>