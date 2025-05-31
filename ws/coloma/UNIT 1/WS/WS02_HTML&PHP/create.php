<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = ""; // Cambia esto si tienes contraseña en tu MySQL
$dbname = "computadoras";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$cpu = $_POST['cpu'];
$gpu = $_POST['gpu'];
$motherboard = $_POST['motherboard'];
$ram = $_POST['ram'];
$storage = $_POST['storage'];
$powersupply = $_POST['powersupply'];
$case = $_POST['case'];
$cooling = $_POST['cooling'];
$monitor = $_POST['monitor'];
$os = $_POST['os'];

// Preparar y ejecutar la inserción
$sql = "INSERT INTO partes (cpu, gpu, motherboard, ram, storage, powersupply, case_type, cooling, monitor, os)
        VALUES ('$cpu', '$gpu', '$motherboard', $ram, '$storage', $powersupply, '$case', '$cooling', '$monitor', '$os')";

if ($conn->query($sql) === TRUE) {
    echo "Datos insertados correctamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
