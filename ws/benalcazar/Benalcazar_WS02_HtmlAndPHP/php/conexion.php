<?php

$server = "localhost";
$user = "admin";
$password = "admin"; 
$dbname = "computer"; 

$conexion = new mysqli($server, $user, $password, $dbname);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
