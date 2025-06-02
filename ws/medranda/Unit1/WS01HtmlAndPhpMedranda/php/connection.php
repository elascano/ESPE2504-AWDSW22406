<?php
$sever = "localhost";
$username="admin";
$password="admin";
$database="products";

$conn = new mysqli($sever,$username,$password,$database);

if($conn->connect_error){
    die("It cannot connect: ".$conn->connect_error);
}

echo("connected succesfull");

?>