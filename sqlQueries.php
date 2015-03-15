<?php

//      Promitheftria Eteria (kapos prepei n pianume to count)

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $countSupl = filter_var($_POST["intTextBox"]);
        $_SESSION["suplCompany_Name".$countSupl] = $_POST["suplCompany-Name"];
        $_SESSION["suplCompany_CommercialName".$countSupl] = $_POST["suplCompany-CommercialName"];
        $_SESSION["suplCompany_OtherName".$countSupl] = $_POST["suplCompany-OtherName"];
        $_SESSION["suplCompany_legalForm".$countSupl] = $_POST["suplCompany-legalForm"];
        $_SESSION["suplCompany_CEO".$countSupl] = $_POST["suplCompany-CEO"];
        $_SESSION["suplCompany_Address".$countSupl] = $_POST["suplCompany-Address"];
        $_SESSION["suplCompany_PC".$countSupl] = $_POST["suplCompany-PC"];
        $_SESSION["suplCompany_City".$countSupl] = $_POST["suplCompany-City"];
        $_SESSION["suplCompany_Tel".$countSupl] = $_POST["suplCompany-Tel"];
        $_SESSION["suplCompany_Fax".$countSupl] = $_POST["suplCompany-Fax"];
        $_SESSION["suplCompany_Email".$countSupl] = $_POST["suplCompany-Email"];
        $_SESSION["suplCompany_Info".$countSupl] = $_POST["suplCompany-Info"];

        $_SESSION["suplEmpl_Name".$countSupl] = $_POST["suplEmpl-Name"];
        $_SESSION["suplEmpl_Surname".$countSupl] = $_POST["suplEmpl-Surname"];
        $_SESSION["suplEmpl_Address".$countSupl] = $_POST["suplEmpl-Address"];
        $_SESSION["suplEmpl_PC".$countSupl] = $_POST["suplEmpl-PC"];
        $_SESSION["suplEmpl_City".$countSupl] = $_POST["suplEmpl-City"];
        $_SESSION["suplEmpl_Tel".$countSupl] = $_POST["suplEmpl-Tel"];
        $_SESSION["suplEmpl_Fax".$countSupl] = $_POST["suplEmpl-Fax"];
        $_SESSION["suplEmpl_Email".$countSupl] = $_POST["suplEmpl-Email"];
    }


//          Stixia Ximikou Proiontos

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $_SESSION["chemicalProduct_Name"]=$_POST["chemicalProduct-Name"];
        $_SESSION["chemicalProduct_CommName"]=$_POST["chemicalProduct-CommName"];
        $_SESSION["chemicalProduct_use"]=$_POST["chemicalProduct-use"];
        $_SESSION["chemicalProduct_state"]=$_POST["chemicalProduct-state"];
        $_SESSION["chemicalProduct_storageAdd"]=$_POST["chemicalProduct-storageAdd"];
        $_SESSION["chemicalProduct_SDS"]=$_POST["chemicalProduct-SDS"];
        $_SESSION["chemicalProduct_CPL"]=$_POST["chemicalProduct-CPL"];
        $_SESSION["chemicalProduct_V"]=$_POST["chemicalProduct-V"];


    }

//          Stixia Ximikon Ousion

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $countChemical=0;
        $_SESSION["chemical_Name".$countChemical]=$_POST["chemical-Name"];
        $_SESSION["chemical_CAS".$countChemical]=$_POST["chemical-CAS"];
        $_SESSION["chemical_EINECS".$countChemical]=$_POST["chemical-EINECS"];
        $_SESSION["chemical_IUPAC".$countChemical]=$_POST["chemical-IUPAC"];
        $_SESSION["chemical_otherName".$countChemical]=$_POST["chemical-otherName"];
        $_SESSION["chemical_weight".$countChemical]=$_POST["chemical-weight"];
        $_SESSION["chemical_CLP".$countChemical]=$_POST["chemical-CLP"];
        $_SESSION["chemical_enarmonismeni".$countChemical]=$_POST["chemical-enarmonismeni"];

    }




//         INSERT INTO DATABASE


    //      Sindesi me Vasi
    $servername = "localhost";
    $db = 'teedb';
    $username = 'root';
    $password = '';

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);


    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sqlConstComp = "INSERT INTO company (Company_Name, Lequl_State, Address, PostCode, City, Telephone, Fax, Email, info,Type, Person, Commersial_Name, Other_Name, CEO, Country) VALUES (N'$constCompany_Name',N'$constCompany_legalForm',N'$constCompany_Address','$constCompany_PC',N'$constCompany_City','$constCompany_Tel','$constCompany_Fax',N'$constCompany_Email',N'$constCompany_Info',0,'$constEmpl_Tel',N'$constCompany_CommercialName',N'$constCompany_OtherName',N'$constCompany_CEO',N'$constCompany_Country');";

    $sqlConstEmpl = "INSERT INTO ComPerson (Name, Surname, Address, Telephone, Fax, Email, PostCode, City) VALUES (N'$constEmpl_Name',  N'$constEmpl_Surname',N'$constEmpl_Address', '$constEmpl_Tel' ,'$constEmpl_Fax', '$constEmpl_Email' , '$constEmpl_PC',N'$constEmpl_City' );";


    for ( $i=0; $i<$countSupl ; $i++){
        $sqlSuplComp = "INSERT INTO company (Company_Name, Lequl_State, Address, PostCode, City, Telephone, Fax, Email, info,Type, Person, Commersial_Name, Other_Name, CEO, Country) VALUES (N'$suplCompany_Name.$i',N'$suplCompany_legalForm.$i',N'$suplCompany_Address.$i','$suplCompany_PC.$i',N'$suplCompany_City.$i','$suplCompany_Tel','$suplCompany_Fax',N'$suplCompany_Email',N'$suplCompany_Info',0,'$suplEmpl_Tel',N'$suplCompany_CommercialName',N'$suplCompany_OtherName',N'$suplCompany_CEO',N'$suplCompany_Country');";
        $sqlSuplEmp = "INSERT INTO ComPerson (Name, Surname, Address, Telephone, Fax, Email, PostCode, City) VALUES (N'$suplEmpl_Name.$i',  N'$suplEmpl_Surname.$i',N'$suplEmpl_Address.$i', '$suplEmpl_Tel' ,'$suplEmpl_Fax', '$suplEmpl_Email' , '$suplEmpl_PC',N'$suplEmpl_City' );";
    }




?>