<?php
require_once 'connection.php';

$brand = $_POST['phones'] ?? '';


$stmt = $conn->prepare("SELECT * FROM cellphones WHERE brand = ?");
$stmt->bind_param("s", $brand);
$stmt->execute();
$result = $stmt->get_result();

echo "<h1>Resultados para '$brand'</h1>";

if ($result->num_rows > 0) {
    echo "<table border='1'><tr>";
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
} else {
    echo "No se encontraron registros.";
}

$conn->close();
?>
