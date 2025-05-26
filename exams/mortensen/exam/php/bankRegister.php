<?php
$host = "localhost";
$db = "nombre_base_datos";
$user = "usuario";
$pass = "contraseña";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) die("Conexión fallida: " . $conn->connect_error);

$nombre = $_POST['nombre'];
$pais = $_POST['pais'];
$clientes = $_POST['clientes'];
$fondos = $_POST['fondos'];
$interes = $_POST['interes'];
$total_interes = $fondos * ($interes / 100);

$sql = "INSERT INTO bancos (nombre, pais, clientes, fondos, interes, total_interes)
VALUES ('$nombre', '$pais', $clientes, $fondos, $interes, $total_interes)";

if ($conn->query($sql) === TRUE) {
  echo "Banco guardado correctamente.";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
