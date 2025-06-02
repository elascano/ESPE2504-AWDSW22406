<?php
require_once 'ConnectionDB.php';

$db = new connectionDB();
$conn = $db->connection();

$teamId = $_GET['teamId'] ?? '';
if (!$teamId) {
    die("Team ID not provided.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $scored = intval($_POST['scored']);
    $received = intval($_POST['received']);
    $difference = intval($_POST['difference']);

    $stmt = $conn->prepare("UPDATE teamGoals SET goalsScored = ?, goalsReceived = ?, goalDifference = ? WHERE teamId = ?");
    if ($stmt === false) {
        die("Error: " . $conn->error);
    }

    $stmt->bind_param("iiis", $scored, $received, $difference, $teamId);
    $stmt->execute();
    $stmt->close();

    header("Location: ../pages/crudTeams.php?message=Record updated successfully");
    exit();
}

$stmt = $conn->prepare("SELECT * FROM teamGoals WHERE teamId = ?");
if ($stmt === false) {
    die("Error: " . $conn->error);
}
$stmt->bind_param("s", $teamId);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$stmt->close();

$conn->close();
?>
