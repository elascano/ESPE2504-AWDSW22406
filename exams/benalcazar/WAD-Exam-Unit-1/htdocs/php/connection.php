<?php

$server = "sql205.infinityfree.com";
$user = "if0_39084092"; 
$password = "msbenalcazar1"; 
$database = "if0_39084092_computers";

$conexion = mysqli_connect($server, $user, $password, $database);
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
} else {
     echo "Connected successfully ".$database;
}
?>