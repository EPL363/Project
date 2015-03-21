<?php

session_start();
$countChemical=0;
foreach ( $_POST as $key=>$value ){
    if(strcmp($key,"countChemical")==0){
        $countChemical=$value;
    }
    else{
        $newKey=$key."_".$countChemical;
        $_SESSION[$newKey]=$value;
    }

}

print_r($_SESSION);
?>