<?php
    if (is_ajax()) {




//        $array = "";
//        $returndata = "";
//        $strArray = explode("&", $_POST);
//        $i = 0;
//        foreach ($strArray as $str)
//        {
//            $array = explode("=", $str);
//            $returndata[$i] = $array[0];
//            $i = $i + 1;
//            $returndata[$i] = $array[1];
//            $i = $i + 1;
//        }
//        print_r($returndata);
session_start();
                    $_SESSION["constCompany_Name"]= $_POST["constCompany_Name"];


                    $return = $_POST;

                    echo json_encode($return);

//                    $_SESSION["constCompany_Name"]= $return["constCompany_Name"];
//                    $_SESSION["constCompany_CommercialName"]= $return["constCompany_CommercialName"];
//                    $_SESSION["constCompany_OtherName"]= $return["constCompany_OtherName"];
//                    $_SESSION["constCompany_legalForm"]= $return["constCompany_legalForm"];
//                    $_SESSION["constCompany_CEO"]= $array["constCompany_CEO"];
//                    $_SESSION["constCompany_Address"]= $array["constCompany_Address"];
//                    $_SESSION["constCompany_PC"]= $array["constCompany_PC"];
//                    $_SESSION["constCompany_City"]= $array["constCompany_City"];
//                    $_SESSION["constCompany_Country"]= $array["constCompany_Country"];
//                    $_SESSION["constCompany_Tel"]= $array["constCompany_Phone"];
//                    $_SESSION["constCompany_Fax"]= $array["constCompany_fax"];
//                    $_SESSION["constCompany_Email"]= $array["constCompany_email"];
//                    $_SESSION["constCompany_Info"]= filter_var($array["constCompany_info"]);
//
//                    $_SESSION["constEmpl_Name"]= $array["constEmpl_name"];
//                    $_SESSION["constEmpl_Surname"]= $array["constEmpl_Surname"];
//                    $_SESSION["constEmpl_Address"]= $array["constEmpl_address"];
//                    $_SESSION["constEmpl_PC"]= $array["constEmpl_pc"];
//                    $_SESSION["constEmpl_City"]= $array["constEmpl_city"];
//                    $_SESSION["constEmpl_Tel"]= $array["constEmpl_phone"];
//                    $_SESSION["constEmpl_Fax"]= $array["constEmpl_fax"];
//                    $_SESSION["constEmpl_Email"]= $array["constEmpl_email"];


    }

    //Function to check if the request is an AJAX request
    function is_ajax() {
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
    }
?>