<?php
$host="localhost";
$user="root";
$password="";
$dbname= "computerdb";

$conn = new mysqli($host,$user,$password,$dbname);
if ($conn->connect_error) {
    die("Failed Conecction". $conn->connect_error);
}
?>