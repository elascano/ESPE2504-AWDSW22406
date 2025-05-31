<?php
$hostname = "sql308.infinityfree.com";
$database = "if0_39118873_exam";
$username = "if0_39118873";
$password = "Gbweor0104";

$connection = mysqli_connect($hostname,$username, $password,$database);

if(!$connection){
    die("connection failed".mysqli_connect_error());
}else{
    echo "Conexion lograda";
}
?>