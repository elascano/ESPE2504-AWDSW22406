<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once "../backend/University.php";

$id = isset($_POST["txtId"]) ? $_POST["txtId"] : null;
$university = null;

if ($id !== null) {
    $university = University::getUniversity($id);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find University</title>
</head>
<body>

    <?php include("header.php"); ?>

    <h1 style="text-align: center;">Find University</h1>
    <hr size="10">

    <?php if (!empty($university)): ?>
        <table style="margin: auto;">
            <tr><td>ID:</td><td><?php echo htmlspecialchars($university['idUniversity']); ?></td></tr>
            <tr><td>Name:</td><td><?php echo htmlspecialchars($university['name']); ?></td></tr>
            <tr><td>Type:</td><td><?php echo htmlspecialchars($university['type']); ?></td></tr>
            <tr><td>Capacity:</td><td><?php echo htmlspecialchars($university['capacity']); ?></td></tr>
            <tr><td>Address:</td><td><?php echo htmlspecialchars($university['address']); ?></td></tr>
            <tr><td>City:</td><td><?php echo htmlspecialchars($university['city']); ?></td></tr>
        </table>
    <?php else: ?>
        <p style="color: red; text-align: center;">No university found with that ID.</p>
    <?php endif; ?>

</body>
</html>
