<?php
    session_start();
    $count = $_POST["count"];

    unset($_SESSION["chemical_Name_".$count]);
    unset($_SESSION["chemical_CAS_".$count]);
    unset($_SESSION["chemical_EINECS_".$count]);
    unset($_SESSION["chemical_IUPAC_".$count]);
    unset($_SESSION["chemical_otherName_".$count]);
    unset($_SESSION["chemical_weight_".$count]);
    unset($_SESSION["chemical_CLP_".$count]);
    unset($_SESSION["chemical_enarmonismeni_".$count]);

    print_r($_SESSION);
?>
