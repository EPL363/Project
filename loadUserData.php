<?php 

    $servername = 'localhost';
    $db = 'epl363';
    $username = 'root';
    $password = '';
    
    $user=$_GET["user"];
    $user_name="";
    $user_surname="";
    $user_pass="";
    $user_email="";
    

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    

    $sql = "SELECT Users.*, Company.*, ComPerson.* 
            FROM Users, Company, ComPerson 
            WHERE Users.Username='$user' and Users.Company=Company.Company_Name and         Company.Person=ComPerson.Telephone;";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $user= $row['Username'];
            $user_name=$row['Name'];
            $user_surname=$row['Surname'];
            $user_pass=$row['Password'];
            $user_email=$row['Email'];
        }
    } else {
        echo "0 results";
    }
    $conn->close();




?>