<?php

session_start();
$countSuplCompany=0;
foreach ( $_POST as $key=>$value ){
    if(strcmp($key,"countSuplCompany")==0){
        $countSuplCompany=$value;
    }
    else{
        $newKey=$key."_".$countSuplCompany;
        $_SESSION[$newKey]=$value;
    }

}

    print_r($_SESSION);
?>