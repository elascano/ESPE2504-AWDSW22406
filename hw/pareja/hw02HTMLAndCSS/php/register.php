<?php
include("db_connection.php");
//Data reception
$brand=$_POST["brand"];
$cpu=$_POST["cpu"];
$ram=$_POST["ram_gb"];
$proccessors=$_POST["proccessor_amount"];
$storage=$_POST["storage"];
$mf_date=$_POST["manufacture_d"];
$gpu=!is_null($_POST["gpu"])?true:false;
$state=$_POST["state"];
$price=$_POST["price"];

//Insert query
$insertion="INSERT INTO `computers`( `brand`, `cpu`, `proccessor_amount`, `ram_gb`, `storage_amount`, `manufacturing_date`, `dedicated_gpu`, `state`, `price`) 
VALUES ('$brand','$cpu','$proccessors','$ram','$storage','$mf_date','$gpu','$state','$price')";

if(mysqli_query($connection,$insertion))
{
    echo("<h2>Computer registered succesfully</h2>");
}
else
{
    echo("<h2>Failed to register</h2>");
}
?>
