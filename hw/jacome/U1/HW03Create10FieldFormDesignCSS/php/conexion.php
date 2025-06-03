<?php
$servername = "localhost";
$username = "admin";
$password = "admin";
$database = "store";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connected wrong: " . $conn->connect_error);
}
echo "Connected well";
?>