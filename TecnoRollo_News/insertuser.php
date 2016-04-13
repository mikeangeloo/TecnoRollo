<?php
include_once 'conexion.php';
//Create Object for DB_Functions clas

$emailID = $_POST["emailId"];
$regId = $_POST["regId"];



$res = insertUser($emailID, $regId);

echo "Email Id ".$emailID." RegId ".$regId ;
if ($res) {
    echo "GCM Reg Id bas been shared successfully with Server";
} else {
    echo "Error occured while sharing GCM Reg Id with Server web app";
}
?>