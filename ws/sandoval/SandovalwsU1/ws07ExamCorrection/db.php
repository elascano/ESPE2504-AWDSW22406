<?php
$host = "sql211.infinityfree.com";
$db = "if0_39086048_songs";
$user = "if0_39086048";
$pass = "if0_39086048";

// Crear conexión
$conn = new mysqli($host, $user, $pass, $db);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
