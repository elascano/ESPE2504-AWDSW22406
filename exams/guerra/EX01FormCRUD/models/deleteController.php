<?php
require_once '../models/ConnectionDB.php';

if (isset($_GET['teamId'])) {
    $teamId = $_GET['teamId'];

    $db = new connectionDB();
    $conn = $db->connection();


    $delete = $conn->prepare("DELETE FROM teamGoals WHERE teamId = ?");
    $delete->bind_param("s", $teamId);

    if ($delete->execute()) {

        header("Location: ../pages/crudTeams.php?message=Record deleted successfully");
        exit();
    } else {
        echo "Error deleting record: " . $delete->error;
    }

    $delete->close();
    $conn->close();
} else {
    echo "No team ID specified for deletion.";
}
?>
