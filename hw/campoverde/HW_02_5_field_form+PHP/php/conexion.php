<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "employee"; 


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa";
?>