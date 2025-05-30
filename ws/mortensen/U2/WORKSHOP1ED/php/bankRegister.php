<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "banco";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) die("Conexión fallida: " . $conn->connect_error);

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'POST') {
  $nombre = $_POST['nombre'];
  $pais = $_POST['pais'];
  $clientes = (int)$_POST['clientes'];
  $fondos = (float)$_POST['fondos'];
  $interes = (float)$_POST['interes'];
  $total_interes = $fondos * ($interes / 100);

  $sql = "INSERT INTO bancos (nombre, pais, clientes, fondos, interes, total_interes)
          VALUES (?, ?, ?, ?, ?, ?)";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssiddi", $nombre, $pais, $clientes, $fondos, $interes, $total_interes);

  if ($stmt->execute()) {
    echo "Banco guardado correctamente.";
  } else {
    echo "Error al guardar: " . $stmt->error;
  }

  $stmt->close();
}

$conn->close();
?>
