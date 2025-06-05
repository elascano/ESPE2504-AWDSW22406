<?php
    require_once '../models/ConnectionDB.php';

    $db = new connectionDB();
    $conn = $db->connection();

    $teamId = $_POST['teamId'] ?? '';
    $scored = isset($_POST['scored']) ? intval($_POST['scored']) : null;
    $received = isset($_POST['received']) ? intval($_POST['received']) : null;
    $difference = $scored - $received;

    $insert = $conn->prepare("INSERT INTO teamGoals (teamId, goalsReceived, goalsScored, goalDifference) VALUES (?, ?, ?, ?)");
    $insert->bind_param("siii", $teamId, $received, $scored, $difference);

    if ($insert->execute()) {
        $insert->close();
        $conn->close();
        header("Location: ../pages/crudTeams.php");
        exit();
    } else {
        echo "Error: " . $insert->error;
    }
    $insert->close();
    $conn->close();
?>