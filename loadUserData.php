     
          <?php 

            $user=$_GET["user"];
            $user_pass="";

            $company="";
            $ls="";
            $company_email="";
            $company_address="";
            $company_city="";
            $company_pc="";
            $company_tel="";
            $compnay_fax="";
            $company_info="";

            $user_name="";
            $user_surname="";
            $user_email="";
            $user_tel=""; 
            $user_city="";
            $user_address="";
            $user_pc="";


           
            $con =mysql_connect("localhost", "root", "");
            mysql_select_db("teedb");
            mysql_query ("set character_set_results='utf8'");

            if (!$con)
                echo "Cannot connect: ".mysql_error();
            else{
                mysql_select_db("root", $con);
                mysql_query ("set character_set_results='utf8'");
                
                $result=mysql_query("SELECT U.* FROM Users  U WHERE U.Username='$user'" , $con);
                $row = mysql_fetch_array($result);
               
                while ($row){
                    $user_pass = $row["Password"]; 
                    $company= $row['Company'];
                    $row = mysql_fetch_array($result);
                }
                
                $result=mysql_query("SELECT C.* FROM Company C WHERE C.Company_Name='"$company"'" , $con);
                $row = mysql_fetch_array($result);
                while ($row){
                    $ls=$row['Lequl_State'];
                    $user_tel=$row['Person'];
                    $company_email=$row['Email'];
                    $company_address=$row['Address'];
                    $company_city=$row['City'];
                    $company_pc=$row['PostCode'];
                    $company_tel=$row['Telephone'];
                    $company_fax=$row['Fax'];
                    $company_info=$row['info'];
                    $row = mysql_fetch_array($result);
                }
                
                $result=mysql_query("SELECT P.* FROM ComPerson P WHERE P.Telephone='$user_tel'" , $con);
                $row = mysql_fetch_array($result);
                while ($row){
                    $user_name=$row['Name'];
                    $user_surname=$row['Surname'];
                    $user_email=$row['Email'];
                    $user_address=$row['Address'];
                    $user_city =$row['City'];
                    $user_pc=$row['PostCode'];
                    $user_fax=$row['Fax'];
                    echo $user_name;
                    $row = mysql_fetch_array($result);
                }
            }
            mysql_close($con);

?>



<?php 

   $servername = 'localhost';
    $db = 'teedb';
    $username = 'root';
    $password = '';
    
    $user=$_GET["user"];
    $user_name="";
    $user_surname="";
    $user_pass="";
    $user_email="";
    
    $company="";
    $ls="";
    $use_tel="";

    // Create connection
   
    $conn = new mysqli($servername, $username, $password, $db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
     mysql_query ("set character_set_results='utf8'"); 
    $sql = "SELECT U.*
            FROM Users  U
            WHERE U.Username='$user';";

    $resultUser = $conn->mysql_query($sql);

    if ($resultUser->num_rows > 0) {
        // output data of each row
        while($row = $resultUser->fetch_assoc()) {
            $user= $row['Username'];
            $user_pass=$row['Password'];
            $company=$row['Company'];
            echo $company;
        }
    } else {
        echo "0 results user";
    }


    $sql2 = "SELECT C.*
             FROM Company C
             WHERE C.Company_Name='$company'; ";
    
    $resultPerson = $conn->mysql_query($sql2);

    if ($resultPerson->num_rows > 0) {
        // output data of each row
        while($row = $resultPerson->fetch_assoc()) {
            $ls = $row['Lequl_State'];
            $user_tel=$row['Person'];
        }
    } else {
        echo "0 results person";
    }

    $sql3 = "SELECT P.*
             FROM ComPerson P
             WHERE P.Telephone='$user_tel'; ";
    
    $resultCompany = $conn->mysql_query($sql3);

    if ($resultCompany->num_rows > 0) {
        // output data of each row
        while($row = $resultCompany->fetch_assoc()) {
            $user_name=$row['Name'];
            echo $user_name;
            $user_surname=$row['Surname'];
        }
    } else {
        echo "0 results company";
    }


    
    $conn->close();

?>
