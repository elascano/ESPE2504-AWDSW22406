<?php

$server = "localhost";
$user = "root"; 
$password = "rootroot"; 
$database = "proyect";

$conexion = mysqli_connect($server, $user, $password, $database);
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
} else {
     echo "Connected successfully ".$database;
}
?>