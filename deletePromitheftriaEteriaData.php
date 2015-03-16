<?php
    session_start();
    $count = $_POST["count"];
    unset($_SESSION["suplCompany_Name_".$count]);
    unset($_SESSION["suplCompany_CommercialName_".$count]);
    unset($_SESSION["suplCompany_OtherName_".$count]);
    unset($_SESSION["suplCompany_legalForm_".$count]);
    unset($_SESSION["suplCompany_CEO_".$count]);
    unset($_SESSION["suplCompany_Address_".$count]);
    unset($_SESSION["suplCompany_PC_".$count]);
    unset($_SESSION["suplCompany_City_".$count]);
    unset($_SESSION["suplCompany_Phone_".$count]);
    unset($_SESSION["suplCompany_fax_".$count]);
    unset($_SESSION["suplCompany_email_".$count]);
    unset($_SESSION["suplCompany_info_".$count]);
    unset($_SESSION["suplEmpl_name_".$count]);
    unset($_SESSION["suplEmpl_Surname_".$count]);
    unset($_SESSION["suplEmpl_address_".$count]);
    unset($_SESSION["suplEmpl_pc_".$count]);
    unset($_SESSION["suplEmpl_city_".$count]);
    unset($_SESSION["suplEmpl_phone_".$count]);
    unset($_SESSION["suplEmpl_fax_".$count]);
    unset($_SESSION["suplEmpl_email_".$count]);


    print_r($_SESSION);
?>
