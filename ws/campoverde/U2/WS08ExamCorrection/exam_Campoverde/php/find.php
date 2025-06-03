<?php
require_once 'connection.php';

$brand = $_POST['phones'] ?? '';

echo '<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados - Cellphones</title>
    <link rel="stylesheet" href="../style/style.css"> <!-- Aquí va el CSS -->
</head>
<body>';

echo "<h1>Resultados para '$brand'</h1>";

$stmt = $conn->prepare("SELECT * FROM cellphones WHERE brand = ?");
$stmt->bind_param("s", $brand);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<table><tr>";
    while ($fieldinfo = $result->fetch_field()) {
        echo "<th>{$fieldinfo->name}</th>";
    }
    echo "</tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach($row as $cell) {
            echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";


    echo '<script src="../js/total_of_cellphones.js"></script>';

} else {
    echo "<p>No se encontraron registros.</p>";
}

echo '</body></html>';

$conn->close();
?>

