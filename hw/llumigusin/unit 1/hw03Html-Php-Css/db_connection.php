<?php
$host = "localhost";
$user = "root"; // Por defecto en XAMPP
$password = ""; // Sin contraseña por defecto
$dbname = "library";

// Crear conexión
$conn = new mysqli($host, $user, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
