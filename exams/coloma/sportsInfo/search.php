<?php
require_once 'db.php';

$searchTerm = isset($_POST['search']) ? $_POST['search'] : '';

$sql = "SELECT * FROM sports WHERE name LIKE ?";
$stmt = $conn->prepare($sql);
$likeTerm = "%" . $searchTerm . "%";
$stmt->bind_param("s", $likeTerm);
$stmt->execute();
$result = $stmt->get_result();

$totalDuration = 0;
$count = 0;

$sports = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $sports[] = $row;
        $totalDuration += $row["duration"];
        $count++;
    }
}

$averageDuration = $count > 0 ? $totalDuration / $count : 0;

$stmt->close();
$conn->close();
?>
