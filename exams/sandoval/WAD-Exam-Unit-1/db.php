<?php
$host = "sql211.infinityfree.com";
$user = "if0_39084205";
$password = "MTP8QNs0Q2faU4";
$dbname = "if0_39084205";
// Crear conexión
$conn = new mysqli($host, $user, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>

