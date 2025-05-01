<?php
$conexion = new mysqli("localhost", "root", "", "inventario_pc");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$CPU = $_POST['CPU'];
$ram = $_POST['ram'];
$almacenamiento = $_POST['almacenamiento'];
$GPU = $_POST['GPU'];
$sistema = $_POST['sistema'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$pantalla = $_POST['pantalla'];
$bateria = $_POST['bateria'];
$color = $_POST['color'];
$precio = floatval($_POST['precio']); 

$sql = "INSERT INTO computadoras 
(CPU, ram, almacenamiento, GPU, sistema, marca, modelo, pantalla, bateria, color, precio) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conexion->prepare($sql);
$stmt->bind_param("ssssssssssd", $CPU, $ram, $almacenamiento, $GPU, $sistema, $marca, $modelo, $pantalla, $bateria, $color, $precio);

if ($stmt->execute()) {
    echo "Computadora registrada.";
} else {
    echo "Chaleno se Guardo: " . $stmt->error;
}

$stmt->close();
$conexion->close();
?>
