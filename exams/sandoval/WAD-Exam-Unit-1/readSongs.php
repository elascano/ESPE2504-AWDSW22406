<?php
include 'db.php';

$sql = "SELECT * FROM songs";
$result = $conn->query($sql);

$songs = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $songs[] = $row;
    }
}

header('Content-Type: application/json');
echo json_encode($songs);
$conn->close();
?>
