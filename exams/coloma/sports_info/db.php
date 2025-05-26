<?php
$servername = "sql305.infinityfree.com";
$username = "if0_39084164"; 
$password = "kevinmetal411";
$dbname = "if0_39084164_exam"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
