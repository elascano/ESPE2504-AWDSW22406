<?php
require_once 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $procesador = $_POST['procesador'];
    $ram = $_POST['ram'];
    $almacenamiento = $_POST['almacenamiento'];
    $tipo = $_POST['tipo'];
    $sistema = $_POST['sistema'];
    $precio = $_POST['precio'];
    $fecha = $_POST['fecha'];
    $comentarios = $_POST['comentarios'];

    try {
        $sql = "INSERT INTO computers (marca, modelo, procesador, ram, almacenamiento, tipo, sistema, precio, fecha, comentarios)
                VALUES (:marca, :modelo, :procesador, :ram, :almacenamiento, :tipo, :sistema, :precio, :fecha, :comentarios)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':marca', $marca);
        $stmt->bindParam(':modelo', $modelo);
        $stmt->bindParam(':procesador', $procesador);
        $stmt->bindParam(':ram', $ram);
        $stmt->bindParam(':almacenamiento', $almacenamiento);
        $stmt->bindParam(':tipo', $tipo);
        $stmt->bindParam(':sistema', $sistema);
        $stmt->bindParam(':precio', $precio);
        $stmt->bindParam(':fecha', $fecha);
        $stmt->bindParam(':comentarios', $comentarios);
        $stmt->execute();
        echo "Registro exitoso";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>