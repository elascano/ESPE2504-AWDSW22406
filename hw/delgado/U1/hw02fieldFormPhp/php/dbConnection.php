<?php
$host = "localhost";
$user = "root"; // Cambia esto si usas otro usuario
$password = "rootroot"; // Cambia esto si tienes contraseña
$database = "studentRegister";

// Crear conexión
$conn = new mysqli($host, $user, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
