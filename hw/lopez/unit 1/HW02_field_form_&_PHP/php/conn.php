<?php
$username= "root";
$password= "";
$database= "ratatouillerestaurant";
$server = "localhost";

$conn= new mysqli($server, $username, $password, $database);
if ($conn->connect_error) {
    die("
    ". $conn->connect_error);   
}

?>